<div class="flex min-h-screen items-center justify-center bg-gray-100">
    <div class="rounded-lg bg-gray-50 px-16 py-14">
      <div class="flex justify-center">
        <div class="rounded-full bg-green-200 p-6">
          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
          </div>
        </div>
      </div>
      <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Su solicitud ha sido enviada con éxito</h3>
      <p class="w-[230px] text-center font-normal text-gray-600">En un periodo de 24 horas te enviaremos la respuesta de su verificación a su correo electrónico</p>
      <button wire:click="volver" wire class="mx-auto mt-10 block rounded-xl border-4 border-transparent bg-orange-400 px-6 py-3 text-center text-base font-medium text-orange-100 outline-8 hover:outline hover:duration-300">Volver al inicio</button>
     

    </div>

    @push('js')

 
    <script>
        Livewire.on('volver', function(){
            window.location.href = "{{ route('home')}}";   
        })
    </script>



    @endpush

  </div>
