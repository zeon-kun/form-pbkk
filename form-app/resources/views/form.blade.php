<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/app.css"/>
    <script>
        tailwind.config = {
            theme:{
                extend: {
                fontFamily: {
                    montserrat: ['Montserrat', 'sans-serif'],
                    }
                },
                boxShadow: {
                    '3xl': "0px 0px 15px 10px rgba(0, 0, 0, 0.25)",
                },
                animation: {
                    text: 'text 5s ease infinite',
                },
                keyframes: {
                    text: {
                    '0%, 100%': {
                        'background-size': '200% 200%',
                        'background-position': 'left center',
                    },
                    '50%': {
                        'background-size': '200% 200%',
                        'background-position': 'right center',
                    },
                    },
                },
            }
        }
    </script>
    <title>Document</title>
</head>
<body>
    <section class="font-montserrat">
        <form method="POST" action="{{url('/submission')}}" class="flex flex-col p-10" enctype="multipart/form-data" novalidate>
            @csrf

            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="{{old('username')}}"/>
            @error('username')
                <h3>{{$message}}</h3>
            @enderror
    
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}"/>
            @error('email')
                <h3>{{$message}}</h3>
            @enderror
    
            <label for="brief">Post Brief</label>
            <input type="text" name="brief" id="brief" value="{{old('brief')}}"/>
            @error('brief')
                <h3>{{$message}}</h3>
            @enderror
    
            <label for="status">Status</label>
            <input type="file" name="status" id="status" accept="images/*" value="{{old('status')}}"/>
            @error('status')
                <h3>{{$message}}</h3>
            @enderror

            <label for="percentage">Weeb %</label>
            <input type="number" class="rounded-md ring-gray-500 ring-2 p-2 bg-gray-100 drop-shadow-lg mb-4" name="percentage" min="2.5" max="99.99" step="0.01" value="{{ old('percentage') ?? '2.5'}}"  id="percentage"
                onchange="if(Number(this.value) > this.max) this.value = this.max;if(Number(this.value) < this.min) this.value = this.min ; this.nextElementSibling.value = Number(this.value)"
            >
            <input type="range" class="h-10" min="2.5" max="99.99" step="0.01" value="{{old('percentage') ?? '2.5'}}" id="percentage_slider"
                oninput="this.previousElementSibling.value = Number(this.value)"/>
            

            <input type="submit" class="bg-black rounded-md text-white w-1/2 h-10 self-center mt-5" value="Submit"/>
        </form>
        <div class="flex items-center justify-center p-20 hover:scale-125 transition duration-300">
            <a href="{{url('/submission')}}">
                <button type="button" class="animate-text bg-blue-200 m-5 w-[300px] h-[100px] rounded-[20px] shadow-3xl hover:brightness-75 bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 bg-clip-text text-transparent font-black text-4xl">Go To Submission</button>
            </a>
        </div>

    </section>
</body>
</html>