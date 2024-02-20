<div x-data="{option: @entangle('option'),vista: @entangle('vista'),status: @entangle('status')}">

    
    <style>
      input[type="file"] {
          display: none;
      }
  
      .custom-file-upload {
      border: 1px solid #ccc;
      padding: 6px 12px;
      cursor: pointer;
      }
  
      img {
      display: block;
      max-width: 100%;
  }
  .preview {
      text-align: center;
      overflow: hidden;
      width: 160px; 
      height: 160px;
      margin: 10px;
      border: 1px solid red;
  }
  
  .section{
      margin-top:150px;
      background:#fff;
      padding:50px 30px;
  }
  
  .modal-lg{
      max-width: 1000px !important;
  }
  
  
  
  
  
  
  
  </style>
  
      <x-dialog-modal wire:model="open">
  
          <x-slot name="title">
              Crear publicación
          </x-slot>
  
          <x-slot name="content">
  
                  <x-label for="photo" value="Selecciona el tipo de publicación" />
  
                  <div class="grid grid-cols-2 gap-2 rounded-xl bg-gray-200 p-1">
                      <div>
                          <input type="radio" wire:model.live="option" name="option" id="1" value="1" class="peer hidden" checked />
                          <label for="1" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Vídeo</label>
                      </div>
              
                      <div>
                          <input type="radio" name="option" wire:model.live="option" id="2" value="2" class="peer hidden" />
                          <label for="2" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Foto</label>
                      </div>
              
                  </div>
  
                  @if($option == '1')  
  
                      <label class="custom-file-upload font-semibold bg-gray-200 rounded-md mt-4 flex justify-center w-1/2">
                          <input type="file" wire:model="video" name="video"/>
          
                          <svg class=" w-5 h-5 text-gray-100 mr-2" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="m336.2 64h-288.4c-26.4 0-47.8 21.4-47.8 47.8v288.4c0 26.4 21.4 47.8 47.8 47.8h288.4c26.4 0 47.8-21.4 47.8-47.8v-288.4c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7-109.6 75.6v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8v-256.9c0-25.4-29.1-40.4-50.4-25.8z"/></svg>
          
                          Seleccionar de la computadora 
                      </label>
                  @endif
  
                  @if($option == '2')  
  
                      <label class="custom-file-upload font-semibold bg-gray-200 rounded-md mt-4 flex justify-center w-1/2">
                          <input  type="file"  name="image" wire:model="image"  class="image" />
                          <svg class=" w-5 h-5 text-gray-100 mr-2" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m512 144v288c0 26.5-21.5 48-48 48h-416c-26.5 0-48-21.5-48-48v-288c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1l12.4 32.9h88c26.5 0 48 21.5 48 48zm-136 144c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"/></svg>
                          
                          Seleccionar de la computadora
                      </label>
  
                  @endif
  
                      
                  @if ($video)
                      <video class="w-full h-64  rounded-lg mt-4" src="{{ $video->temporaryUrl() }}" controls></video> 
                  @endif
  
                      
                  @if($image)
                
  
                      <img class=" w-72 h-72  rounded-lg mt-4 object-cover" src="{{ $image->temporaryUrl() }}"/>
  
            
                      
                  @endif
  
                  @if ($video || $image)
  
                          <div class="main flex border rounded-full overflow-hidden mt-4 select-none sm:w-2/3 md:w-1/2">
                              <div class="title px-5 py-3 bg-blue-500 text-white text-sm font-semibold mr-3">Tipo </div>
                                  <label class="flex radio py-2 mt-2 cursor-pointer">
                                      <input class="my-auto transform scale-125" type="radio" name="vista" wire:model.live="vista" value="publica" />
                                      <div class="title px-2 mr-2">Pública</div>
                                  </label>
                          
                                  <label class="flex radio py-2 mt-2 cursor-pointer">
                                      <input class="my-auto transform scale-125" type="radio" name="vista" wire:model.live="vista" value="privada" />
                                      <div class="title px-2">Privada</div>
                                  </label>
                              </div>
          
                              <x-label for="photo" value="Selecciona la categoria de la publicación" class="mt-4" />
          
                              <select wire:model.defer="categoria_id" id="categoria_id" class="mt-2 block w-2/5 bg-gray-50 border border-gray-200 text-gray-400 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                  <option value="" selected>{{__('messages.Seleccione una opción')}}</option>
                                  @foreach ($categorias as $categoria)
                                      <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                  @endforeach
                              </select>
                              <x-input-error for="categoria_id" />
          
                              @if($vista == 'privada')
              
                                  <x-label for="valor" value="Valor" class="mt-4" />
              
                                  <div class="relative mb-2 mt-2">
                                      <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
              
                                          <svg  class="w-8 h-8 text-gray-500 dark:text-gray-400 -mr-4" viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg"><path d="m16.4861 34.8186c.0913-.4585.1988-.9108.3247-1.3545-.1282.4725-.2344.9248-.3247 1.3545z"/><path d="m17.0849 32.53c-.1051.3064-.1854.6218-.274.9341.0828-.3053.1726-.6163.274-.9341z"/><path d="m16.3149 35.7c.0483-.2778.107-.5753.1713-.8814-.0584.2931-.1277.5812-.1713.8814z"/><path d="m16.0649 37.91c-.02.27-.03.53-.03.8 0-.15 0-.42.03-.8z"/><g fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"><path d="m42.3576 19.8333h-12.8327"/><path d="m56.7197 40.0422c0 11.4368-9.2781 20.7148-20.7148 20.7148-11.4471 0-20.7252-9.2781-20.7252-20.7148 0 0 0-.0519 0-.1349 0-.2802.0104-.55.0311-.8302 0-.1141.0104-.2387.0208-.3736.0104-.1764.0312-.3736.0519-.5812.0312-.2595.0623-.5501.1141-.8614.0208-.1556.0519-.3113.0727-.4774.1661-.9548.4152-2.086.7991-3.2899.0623-.1972.1349-.4047.2076-.6123.2179-.5812.4566-1.1831.7368-1.7955.0312-.0726.0623-.1452.1038-.2075.6745-1.4322 2.6879-4.1306 2.6879-4.1306 1.152-1.3803 2.4804-2.6049 3.9541-3.6427.1142-.083.2387-.166.3529-.2387.0312-.0208.0727-.0519.1038-.0727 2.9578-2.1898 2.003-4.1409.851-5.3032-.5916-.218-1.1001-.6123-1.4529-1.1105-.0208-.0104-.0312-.0208-.0312-.0208-.3944-.5396-.6227-1.1934-.6227-1.8992v-.0208c0-1.7747 1.4529-3.238 3.238-3.238h18.9298c1.7851 0 3.238 1.4633 3.238 3.238v.0208c0 .7368-.2595 1.4322-.6849 1.9822-.3321.4359-.7784.7784-1.2869.9963-.0104 0-.0104 0-.0104 0-1.1727 1.1623-2.2002 3.1342.7991 5.3551.0312.0208.0727.0519.1038.0727.1141.0727.2387.1557.3528.2387 1.4737 1.0378 2.8021 2.2625 3.9541 3.6427 1.0482 1.2558 1.9615 2.6361 2.688 4.1306.0415.0623.0727.1349.1038.2075.1557.3321.2906.6538.4255.9859.1038.2698.2076.5397.3009.7991.1038.2802.1868.55.2698.8095 0 .0104.0104.0208.0104.0312.0727.2491.1453.5085.2179.7576.0104.0415.0312.0934.0416.1349.0311.1141.0623.218.083.3321.0415.1557.083.3113.1141.4774.0311.1556.0727.3009.1038.4566.0312.1245.0623.2595.083.3944 0 .0103 0 .0311.0104.0415.0519.2906.1038.5604.1452.8199.0519.3633.0934.6954.1246.9963.0207.2076.0415.4048.0519.5812.0623.8408.0519 1.3389.0519 1.3389z" stroke-linejoin="round"/><path d="m39.1902 36.3571c-.2715-1.0566-1.4456-1.8514-2.8529-1.8514h-.0001c-1.6083 0-2.9121 1.0381-2.9121 2.3188s1.3038 2.3188 2.9121 2.3188l-.0591.0086c1.6083 0 2.9121 1.0381 2.9121 2.3188s-1.3038 2.3188-2.9121 2.3188c-1.4073 0-2.5815-.7947-2.853-1.8514" stroke-linejoin="round"/><path d="m36.3076 34.5056v-2.2106" stroke-linejoin="round"/><path d="m36.3076 46v-2.2107" stroke-linejoin="round"/><path d="m22 20s-6 0-6 6" stroke-linejoin="round"/><path d="m17 18s-2 0-2-2" stroke-linejoin="round"/></g></svg>
                                      </div>
                                      <input id="valor" type="valor" wire:model.defer="valor" class="focus:outline-none w-2/5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block ps-12 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Valor en PVCoint">
                                  </div>
              
                              @endif
          
                              <x-label for="descripción" value="Escribe una descripción" class="mt-4" />
          
          
                              <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                  <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                              
                                      <textarea wire:model="descripcion" id="descripcion" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" required></textarea>
                                  </div>
                              </div>
                  @endif
             
  
                
          </x-slot>
  
          <x-slot name="footer">
        
  
              <button wire:click="close" type="button" class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 me-2 mb-2">
                  
                  Cerrar
              </button>
  
              @if ($video || $image)
  
                  <button wire:click="save" wire:loading.attr="disabled" type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
             
                      Publicar
                  </button>
               @endif
  
  
          </x-slot>
  
      </x-dialog-modal>
      {{-- Be like water. --}}
  
  
      @push('script')
  
   
      <script>

            Livewire.on('volver', function(){
                window.location.href = "{{ route('profile_user')}}";
            })


      </script>
  
  
  
      @endpush
      
  </div>