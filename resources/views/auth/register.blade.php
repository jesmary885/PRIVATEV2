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
               
                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Username</label>
                <input require
                  class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500" type="email" name="name" id="name"
                  type="text" placeholder="Enter your username" >
                  <x-input-error for="email" />
              </div>

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
                <input type="password"
                  class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" require id="password" name="password"
                  placeholder="Enter your password">
              </div>

  
              <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                  <p class="text-xs">By proceeding, you agree to our <a href="#" class="underline">Terms of Use</a> and confirm you have read our <a href="#" class="underline">Privacy and Cookie Statement</a>. and confirm that you are at least 18 years old.</p>
                  
              </div>
              <div>
                <button type="submit"
                  class="w-full flex justify-center bg-gradient-to-r from-blue-300 to-blue-400  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                  Sign
                  up
                </button>
              </div>

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

            <div class="flex justify-center">

              <p class="mt-4 text-gray-500 dark:text-gray-400">
                ¿Ya tienes una cuenta? Puedes iniciar sesión <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            Aquí
                </a> 
            </p>
               
            </div>

            
            
            
          </div>
    </div>
  </div>
