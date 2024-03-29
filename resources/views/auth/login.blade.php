<x-guest-layout>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
    /*remove custom style*/
      .circles{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
      .circles li{
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;  
    }
    .circles li:nth-child(1){
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }
     
     
    .circles li:nth-child(2){
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }
     
    .circles li:nth-child(3){
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }
     
    .circles li:nth-child(4){
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }
     
    .circles li:nth-child(5){
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }
     
    .circles li:nth-child(6){
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }
     
    .circles li:nth-child(7){
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }
     
    .circles li:nth-child(8){
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }
     
    .circles li:nth-child(9){
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }
     
    .circles li:nth-child(10){
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }
      @keyframes animate {
     
        0%{
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }
     
        100%{
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }
     
    }
    </style>
    <div class="relative min-h-screen flex ">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
          <div class="sm:w-1/2 xl:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden bg-purple-900 text-white bg-no-repeat bg-cover relative"
            style="background-image: url(https://images.unsplash.com/photo-1579451861283-a2239070aaa9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
            <div class="absolute bg-gradient-to-b from-cyan-200 to-blue-500 opacity-75 inset-0 z-0"></div>
            <div class="w-full  max-w-md z-10">
              <div class="sm:text-4xl xl:text-5xl font-bold leading-tight mb-6">Private Social</div>
              <div class="sm:text-sm xl:text-md text-gray-200 font-normal"> What is Lorem Ipsum Lorem Ipsum is simply dummy
                text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it
                has?</div>
            </div>
            <!---remove custom style-->
           <ul class="circles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
       </ul>
          </div>
    
          
    
          <div class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full w-3/5 xl:w-3/5 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none bg-white">
            
            
            <div class="max-w-md w-full space-y-8">
              <div class="text-center">
    
                <div class="flex justify-center">
                    <img class=" w-60 " src="/imagen/Private Social 4.png" alt="" />
                </div>
    
              </div>
    
              <form class="mt-2 space-y-6" method="POST" action="{{ route('log') }}">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="relative">
                 
                  <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Email</label>
                  <input require
                    class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500" type="email" name="email" id="email"
                    type="" placeholder="mail@gmail.com" >
                    <x-input-error for="email" />
                </div>
    
    
                <div class="mt-8 content-center">
                  <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                    Password
                  </label>
                  <div class="relative" x-data="{ show: true }">
                  <input :type="show ? 'password' : 'text'"
                    class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" require id="password" name="password"
                    placeholder="Enter your password">
    
                    <div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">
    
                        <svg @click="show = !show" :class="{'hidden': !show, 'block':show }"
                            class="h-4 text-blue-400" fill="none" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512">
                            <path fill="currentColor"
                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                            </path>
                        </svg>
    
                        <svg @click="show = !show" :class="{'block': !show, 'hidden':show }"
                            class="h-4 text-blue-400" fill="none" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 640 512">
                            <path fill="currentColor"
                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                            </path>
                        </svg>
    
                    </div>
    
                </div>
    
                </div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox"
                      class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                      Remember me
                    </label>
                  </div>
                  <div class="text-sm">
                    <a href="#" class="text-indigo-400 hover:text-blue-500">
                      Forgot your password?
                    </a>
                  </div>
                </div>
    
                <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                    <p class="text-xs">By proceeding, you agree to our <a href="#" class="underline">Terms of Use</a> and confirm you have read our <a href="#" class="underline">Privacy and Cookie Statement</a>. and confirm that you are at least 18 years old.</p>
                    
                </div>
                <div>
                  <button type="submit"
                    class="w-full flex justify-center bg-gradient-to-r from-blue-300 to-blue-400  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                    Sign in
                  </button>
                </div>
                <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                  <span>Don't have an account?</span>
                  <a href="{{ route('register') }}"
                    class="text-indigo-400 bg-cyan-500hover:text-cyan-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
                    up</a>
                </p>
              </form>
    
              <div class="flex items-center justify-center space-x-2">
                <span class="h-px w-16 bg-gray-200"></span>
                <span class="text-gray-300 font-normal">or continue with</span>
                <span class="h-px w-16 bg-gray-200"></span>
              </div>
    
              <div class="mt-16 grid space-y-4">
                <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                    <div class="relative flex items-center space-x-4 justify-center">
                        <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class="absolute left-0 w-5" alt="google logo">
                        <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue with Google</span>
                    </div>
                </button>
    
                <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                    <div class="relative flex items-center space-x-4 justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Facebook_f_logo_%282021%29.svg" class="absolute left-0 w-5" alt="Facebook logo">
                        <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue with Facebook</span>
                    </div>
                </button>
    
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    
    </x-guest-layout>
    