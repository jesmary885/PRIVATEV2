<div>

    <div class="flex">



        <button
            class="py-2 px-3 text-md font-medium text-center text-white  hover:text-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
            wire:click="positivo('{{$publicacion->id}}')"
            title="Me gusta"
            wire:loading.attr="disabled">
            @if($this->point_user($publicacion->id) == 1)
            <svg height="24"  width="24" preserveAspectRatio="none" viewBox="0 0 64 64"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="31.999512" x2="31.99951" y1="2.716797" y2="48.045105"><stop offset="0" stop-color="#fff"/><stop offset=".509091" stop-color="#ff1f3f"/><stop offset=".6614935" stop-color="#ff2243"/><stop offset=".8165283" stop-color="#ff2c4f"/><stop offset=".9723371" stop-color="#ff3c64"/><stop offset="1" stop-color="#ff3f68"/></linearGradient><path d="m32 56.78125-1.1142578-.6289063c-.715332-.4042969-17.5883789-10.03125-23.3300781-22.3681641-3.2949219-7.0810546-3.1850586-14.5673827.2949218-20.0253905 2.6503906-4.15625 7.0039063-6.5400391 11.9443359-6.5400391 6.1328125 0 10.0029297 3.6826172 12.2050781 7.5761719 2.2021484-3.8925781 6.0732422-7.5751953 12.2050781-7.5751953 4.9404297 0 9.2949219 2.3837891 11.9443359 6.5410156 3.4804688 5.4570313 3.5898438 12.9423828.2949219 20.0234375-5.7412108 12.3369141-22.6142577 21.9638672-23.330078 22.3681641zm-12.2050781-45.0283203c-3.409668 0-6.2939453 1.578125-8.1210938 4.4443359-2.6425781 4.1445313-2.6455078 10.0039063-.0068359 15.6728516 4.3427734 9.3320313 16.5688477 17.359375 20.3320313 19.6679688 3.7626953-2.3105469 15.9990234-10.3525391 20.3339844-19.6679688 2.6386719-5.6689453 2.6357422-11.5273438-.0068359-15.671875-1.8271484-2.8662109-4.7109375-4.4443359-8.1210938-4.4443359-8.1767578 0-9.953125 9.8339844-9.9707031 9.9335938l-2.2343751 13.0654296-2.2348633-13.0654297c-.0708008-.3994141-1.8515625-9.9345703-9.9702148-9.9345703z" fill="#c10021"/><path d="m32 54.1777344s-16.8881836-9.53125-22.3886719-21.3505859 0-23.3408203 10.1835938-23.3408203 12.2050781 11.8193359 12.2050781 11.8193359 2.0214844-11.8183594 12.2050781-11.8183594 15.6845703 11.5205078 10.1835938 23.3398438c-5.5 11.8193359-22.3886719 21.3505859-22.3886719 21.3505859z" fill="url(#a)"/><g fill="#fff"><path d="m11.9428711 18.0380859c.3691406-4.6962891 5.8828125-5.0761719 7.8164063-1.9335938s-8.3803711 9.1054688-7.8164063 1.9335938z"/><path d="m32.3300781 48.4179688c3.1796875 0 19.3388672-9.4277344 19.3388672-16.5996094s-5.3994141-6.2861328-10.1533203 1.8525391-7.8164063 10.9599609-9.9916992 11.765625-1.3696289 2.9814453.8061523 2.9814453z" opacity=".25"/></g></svg>
            @else
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m12.62 20.81c-.34.12-.9.12-1.24 0-2.9-.99-9.38-5.12-9.38-12.12002 0-3.09 2.49-5.59 5.56-5.59 1.82 0 3.43.88 4.44 2.24 1.01-1.36 2.63-2.24 4.44-2.24 3.07 0 5.56 2.5 5.56 5.59 0 7.00002-6.48 11.13002-9.38 12.12002z" stroke="#292d32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>

            @endif
          </button>


      </div>


      <div class="flex items-center justify-between text-gray-500">
        <div class="flex items-center space-x-2">

            @livewire('publicacion.points.ver-me-gustas',['publicacion'=>$publicacion->id])

        </div>

        @livewire('publicacion.points.ver-comentarios',['publicacion'=>$publicacion->id])


   

   
      </div>

      


     

</div>