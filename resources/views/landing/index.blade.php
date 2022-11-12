@include('partials.header')
{{-- nav head section --}}
<x-head/>


{{-- hero section --}}
<section id="hero" >
    {{-- flex container --}}
    <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        {{-- left item --}}
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2"><h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">Bring Everyone together to nuil new thing</h1>
        <p class="max-w-sm text-center text-gray-600 md:text-left">Plus, having a testimonial page serves as yet another indexed page on your website. It contains content covering product features, pain points, and keywords your marketing team is trying to rank for in search.</p>
        <div class="flex justify-center md:justify-start">
            <a href="" class="  p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300 ">Get Started</a>
        </div>
        </div>
        {{-- image --}}
        <div calss="md:w-1/2">
             <img src="  {{URL('image/images.png')}}" class="w-500 h-500" alt="">
        </div>
    </div>
</section>

{{-- feature section --}}
<section id="feature">
{{-- flex container --}}
    <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
        {{-- what diference --}}
        <div class="flex flex-col space-y-12 md:w-1/2 ">
            <h2 class="max-w-md text-4xl font-bold text-center md:text-left">Whats different Manage?</h2>
            <p class="max-w-sm text-center text-gray-600 md:text-left">Testimonials come in different formats, but there are a few distinct qualities that all good testimonials have. Here’s how to write a testimonial that inspires and motivates readers.</p>
        </div>
          {{-- memberlist --}}
        <div class="flex flex-col space-y-8 md:w-1/2">
            {{-- list member 1 --}}
            <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                {{-- heading --}}
                <div class="rounded-l-full bg-red-200 md:bg-transparent">
                    <div class="flex items-center space-x-2">
                        <div class="px-4 py-2 text-white rounded-full md:py-1 bg-red-500">01

                        </div>
                        <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Track company wide progress
                        </h3>
                    </div>
                </div>
                <div>
                    <h3 class="hidden mb-4 txt-lg font-bold md:block"> Track company wide progress</h3>
                    <p class="text-gray-600">
                        Testimonials come in different formats, but there are a few distinct qualities that all good testimonials have. Here’s how to write a testimonial that inspires and motivates readers.
                    </p>
                </div>
            </div>
             {{-- list member 2 --}}
               <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                {{-- heading --}}
                <div class="rounded-l-full bg-red-200 md:bg-transparent">
                    <div class="flex items-center space-x-2">
                        <div class="px-4 py-2 text-white rounded-full md:py-1 bg-red-500">02

                        </div>
                        <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Track company wide progress
                        </h3>
                    </div>
                </div>
                <div>
                    <h3 class="hidden mb-4 txt-lg font-bold md:block"> Track company wide progress</h3>
                    <p class="text-gray-600">
                        Testimonials come in different formats, but there are a few distinct qualities that all good testimonials have. Here’s how to write a testimonial that inspires and motivates readers.
                    </p>
                </div>
            </div>
            {{-- list member 3--}}
            <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                {{-- heading --}}
                <div class="rounded-l-full bg-red-200 md:bg-transparent">
                    <div class="flex items-center space-x-2">
                        <div class="px-4 py-2 text-white rounded-full md:py-1 bg-red-500">03

                        </div>
                        <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Track company wide progress
                        </h3>
                    </div>
                </div>
                <div>
                    <h3 class="hidden mb-4 txt-lg font-bold md:block"> Track company wide progress</h3>
                    <p class="text-gray-600">
                        Testimonials come in different formats, but there are a few distinct qualities that all good testimonials have. Here’s how to write a testimonial that inspires and motivates readers.
                    </p>
                </div>
            </div>
        </div>

    </div>


</section>


{{-- testimonials section --}}
<section>
    {{-- container to heading and test --}}
    <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
        {{-- heading --}}
        <h2 class="text-4xl font-bold text-center">
            what different about manage?
        </h2>
        {{-- testimonial containers --}}
        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                {{-- testimonial 1 --}}
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-200 md:w-1/3">
                    <img src="  {{URL('image/images.jpg')}}" class="w-16 -mt-14 rounded-full" alt="" />
                    <h5 class="text-lg font-bold">
                        Jhon edward
                    </h5>
                    <p class="text-sm text-gray-600">No matter how compelling your copy, how well-edited your photos, or how glamourous your videos might be, all other marketing pales into insignificance compared to testimonials and reviews. </p>
                </div>
                  {{-- testimonial 2 --}}
                  <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-gray-200 md:flex md:w-1/3">
                    <img src="  {{URL('image/img_avatar.png')}}" class="w-16 -mt-14 rounded-full" alt="" />
                    <h5 class="text-lg font-bold">
                        ira khaire
                    </h5>
                    <p class="text-sm text-gray-600">No matter how compelling your copy, how well-edited your photos, or how glamourous your videos might be, all other marketing pales into insignificance compared to testimonials and reviews. </p>
                </div>
                {{-- testimonial 3 --}}
                <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-gray-200  md:flex md:w-1/3">
                    <img src="  {{URL('image/img_avatar2.png')}}" class="w-16 -mt-14 rounded-full" alt="" />
                    <h5 class="text-lg font-bold">
                        andrea kagla
                    </h5>
                    <p class="text-sm text-gray-600">No matter how compelling your copy, how well-edited your photos, or how glamourous your videos might be, all other marketing pales into insignificance compared to testimonials and reviews. </p>
                </div>
             
        </div>
        {{-- button  --}}
        <div class="my-16">
            <a href="" class="  p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300 ">Get Started</a>
        </div>

    </div>
</section>

{{-- CTA section --}}
<section id="cta" class="bg-red-600">
    {{-- flex container --}}
    <div class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
        {{-- heading --}}
        <h2 class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
            Simplify fgasdfasdaasda
            sd
        </h2>
        {{-- button --}}
         {{-- button  --}}
         <div>
            <a href="" class="  p-3 px-6 pt-2 bg-white
            text-red-500  shadow-2xl rounded-full baseline hover:bg-gray-700 ">Get Started</a>
        </div>
    </div>
</section>

{{-- footer --}}
<footer class="bg-gray-700">
    {{-- flex container --}}
    <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
        {{-- logo social links container --}}
        <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
            <div class="mx-auto my-6 text-center text-white md:hidden">
                Copyright &copy; 2022, All right reserve 
            </div>
                {{-- logo --}}
            <div>
                <img src="{{URL('image/VdSWKX1kt.jpg')}}"  class="h-8"alt="">
            </div>
            {{-- social media --}}
            <div class="flex justify-center space-x-4">
               {{-- link1--}}
               <a href="#">
                <img src="{{URL('image/fb.png')}}" class="h-8" alt="">
            </a>
                 {{-- link2--}}
                 <a href="#">
                    <img src="{{URL('image/ins.png')}}" class="h-8 " alt="">
                </a>
            </div>

        </div>

        {{-- list container --}}
        <div class="flex justify-around space-x-32">
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-red-500">home</a>
                <a href="#" class="hover:text-red-500">pricing</a>
                <a href="#" class="hover:text-red-500">product</a>
                <a href="#" class="hover:text-red-500">about</a>
             
            </div>
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-red-500">career</a>
                <a href="#" class="hover:text-red-500">community</a>
                <a href="#" class="hover:text-red-500">privacy pilicy</a>
             
            </div>
        </div>

        {{-- input container --}}
        <div class="flex flex-col justify-between">
            <form action="">
                <div class="flex space-x-3">
                    <input class="flex-1 px-4 rounded-full focus:outline-none" placeholder="update in ypur inbox"/>
                    <button class="px-6 py-2 text-white rounded-full bg-red-600 hover:bg-red-200 focus:outline-none">Go</button>
                </div>
               
            </form>
            <div class="hidden text-white md:block">
                Copyright &copy; 2022, All right reserve 
            </div>
        </div>
    </div>
</footer>
@include('partials.footer')