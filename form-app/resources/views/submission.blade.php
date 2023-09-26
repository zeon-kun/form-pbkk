<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
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
</head>
<body>
    @if(session('success'))
    <div
        class="alert alert-success alert-dismissible fade show bg-green-400"
        role="alert"
    >
        <span class="text-success">
            {{ session("success") }}
        </span>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    </div>
    @endif
    <div class="flex w-full justify-center hover:scale-125 duration-300 transition">
        <a href="{{url('/form')}}">
            <button type="button" class="animate-text bg-blue-200 m-5 w-[300px] h-[100px] rounded-[20px] shadow-3xl hover:brightness-75 bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 bg-clip-text text-transparent font-black text-4xl">Add Form</button>
        </a>
    </div>
    <div class="m-10 bg-white shadow-3xl flex justify-center items-center flex-col gap-10 p-4 rounded-[15px]">
        @foreach ($forms as $item)
            <x-card :username="$item->username" :email="$item->email" :brief="$item->brief" :image="$item->status_url" :percentage="$item->percentage"></x-card>
        @endforeach
    </div>
</body>
</html>