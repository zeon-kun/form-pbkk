<div class="bg-blue-100 w-full flex flex-col items-center gap-[30px] rounded-[20px] min-h-[300px] p-5">
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1 class="font-montserrat text-2xl">
        Post by <span class="font-bold text-3xl">{{$username}}</span>
    </h1>
    <h2 class="font-montserrat text-lg font-normal bg-black text-white rounded-[10px] shadow-xl py-2 px-4 italic">
        <span class="font-extrabold font-montserrat">email :</span>  {{$email}}
    </h2>
    <div class="flex gap-10 justify-center items-center">
        <div class="bg-white shadow-xl w-[200px] h-[200px] p-5 rounded-[15px] shadow-3xl ">
            <span class="text-4xl text-blue-300 font-montserrat font-bold">Brief:</span> 
            <h2 class="mt-3 font-montserrat text-xl font-normal italic text-black">{{$brief}}</h2>
        </div>
        <div class="w-[200px] h-auto max-h-[200px] rounded-[15px] border-dashed border-2 border-black overflow-hidden">
            <img src={{$image}} alt="" class=""/>
        </div>
    </div>
    <div class="text-3xl hover:scale-150 transition duration-200">
        weeb percentage : <span class="animate-text hover:brightness-75 bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 bg-clip-text text-transparent font-black text-4xl">{{$percentage}}</span>
    </div>
</div>