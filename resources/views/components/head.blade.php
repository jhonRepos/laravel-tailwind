<nav class="relative container mx-auto p-6 ">
    <div class="flex items-center justify-between">
        {{-- logo --}}
        <div class="pt-2">
            <img src="{{URL('image/VdSWKX1kt.jpg')}}"  class="w-20 h-10"alt="">
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="#" class="hover:text-gray-500">Pricing</a>
            <a href="#"class="hover:text-gray-500">Product</a>
            <a href="#"class="hover:text-gray-500">About Us</a>
            <a href="#"class="hover:text-gray-500">Careers</a>

        </div>
        <a href="" class="hidden  p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300 md:block">Get Started</a>


{{-- humbuger icon --}}
    <button id="menu-btn" class="block hamburger md:hidden focus:outline-none"> 
        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
    </button>
</div>

    {{-- mobile menu --}}
    <div class="md:hidden">
        <div id="menu" class="absulote flex flex-col items-center self-end py-8 mt-10 space-y-6 font-bold bg-white sm-w-auto sm:self-center left-6 right-6 drop-shadow-lg">
            <a href="#" class="hover:text-gray-500">Pricing</a>
            <a href="#"class="hover:text-gray-500">Product</a>
            <a href="#"class="hover:text-gray-500">About Us</a>
            <a href="#"class="hover:text-gray-500">Careers</a>
        </div>
    </div>
   
  
</nav>