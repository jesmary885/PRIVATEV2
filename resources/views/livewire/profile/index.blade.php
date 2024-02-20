<div>

    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
    
    
  <style>
  
  
      .img_ampliar {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
      }
  
      .img_apliar:hover {opacity: 0.7;}
  
      /* The Modal (background) */
      .modal2 {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
      }
  
      /* Modal Content (image) */
      .modal2-content {
        margin: auto;
        display: block;
        width: 100%;
         max-width: 1000px;
      }
  
      /* Caption of Modal Image */
      #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
      }
  
      /* Add Animation */
      .modal2-content, #caption {  
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
      }
  
      @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
      }
  
      @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
      }
  
      /* The Close Button */
      #close {
        position: absolute;
        top: 80px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
      }
  
      #close:hover,
      #close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }
  
      /* 100% Image Width on Smaller Screens */
      @media only screen and (max-width: 700px){
        .modal2-content {
          width: 100%;
        }
      }
  
  
  
  
  
      .container2 {
        margin: 50px auto;
        max-width: 500px;
      }
  
      
      input[type="file"] {
          display: none;
      }
  
      .custom-file-upload {
      border: 1px solid #ccc;
      display: inline-block;
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
          z-index:0 !important;
      }
  
  
  
  </style>
  
  
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet" href="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/css/main.d7f96858.css" />
  
  
  <!-- component -->
  <main class="profile-page">
  <div class=" bg-white ">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-6">
  
      <div>
  
        <div class="post mt-2 lg:p-1  rounded-md" >
          <div class=" z-10 lg:left-3 rounded-md shadow-md">

            @if($is_c == 1)
  
              <section class="relative block h-500-px  ">
    
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url({{ Storage::url($creador->banner) }});">
                  <div class=" w-1/2 px-1 lg:order-3 lg:text-right lg:self-center">
                    <div class="py-1 -full px-1">
                      <div class="w-full">
                        <div class= "mt-2 sm:mt-0">
        
                          <label class="custom-file-upload flex justify-center w-full font-semibold bg-white rounded-md ">
                            <input type="file"  name="image" class="image"/>
                            <svg class=" w-5 h-5 text-gray-100 mr-2 " viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m512 144v288c0 26.5-21.5 48-48 48h-416c-26.5 0-48-21.5-48-48v-288c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1l12.4 32.9h88c26.5 0 48 21.5 48 48zm-136 144c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"/></svg>
                              
                              Editar foto de portada
                          </label>
              
                          
                            
                        
                        </div>
    
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                  <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                  </svg>
                </div> --}}
    
              </section>

            @else

            <section class="relative block h-500-px  ">
    
              <div class="absolute top-0 w-full h-full bg-center bg-cover" >
                <div class=" w-1/2 px-1 lg:order-3 lg:text-right lg:self-center">
                  <div class="py-1 -full px-1">
                    <div class="w-full">
                      <div class= "mt-2 sm:mt-0">
      
                       
            
                        
                          
                      
                      </div>
  
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                  <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
              </div> --}}
  
            </section>

            @endif



  
            <section class="relative py-16 bg-blueGray-200">
              <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                  <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                      <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                        <div class="relative">
                       
                           <img src="{{ Auth::user()->profile_photo_url }}" alt="Profile Picture" class=" object-cover object-center absolute bottom-0 left-2/4 transform -m-16 -ml-20 lg:-ml-16 max-w-150-px -translate-x-1/2 translate-y-1/2 w-40 h-40 rounded-full border-4 border-white">
                      
                        </div>
                      </div>
                      <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                        <div class="py-4 md:py-6 px-3">
                        </div>
                      </div>
                     
                    </div>
                    <div class="text-center mt-4 md:mt-12">
                      <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700">
                          {{$user->username}}
                      </h3>

                      @if($user->pais)
                      
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                          <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                          {{$user->pais->name}}
                        </div>

                      @endif
          
                      <div class="flex justify-center text-sm text-gray-400 py-1 container">
                          <div class="flex  mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path
                                      d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                  </path>
                              </svg>
                              <p class="">1.2k Following</p>
                          </div>
                          @if($is_c == 1)
                          <div class="flex ">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path fill-rule="evenodd"
                                      d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                      clip-rule="evenodd"></path>
                              </svg>
                              <p class="">14 posts</p>
                          </div>

                          @endif
                          
                      </div>
              
                    </div>
                    <div class="mt-4 py-10 border-t border-blueGray-200 text-center">
                      
                      <div class="flex flex-wrap justify-center">
          
                        <div class="w-full lg:w-9/12 px-4">
                          @livewire('profile.edit-biografia')
                          <p class="mb-4 text-lg leading-relaxed text-blueGray-700 text-center">
                              {{$user->biografia}}
                          </p>
          
                        </div>
          
                      </div>
          
                      
                    </div>
                  </div>
                </div>
              </div>

              @if($is_c == 1)
  
                <div class="flex flex-col justify-center items-center px-6 ">
            
    
                  <div class="container relative flex h-[430px] w-full flex-col shadow-xl rounded-lg  border-[1px] border-gray-200 bg-white bg-clip-border dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                      <div class="flex h-fit w-full items-center justify-between  px-6 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                          <h4 class="text-lg font-bold dark:text-white">
                            Planes
                          </h4>
                          @livewire('profile.add-plan',['accion' => 'create', 'creador' => $creador])
                      </div>
      
                      @if ($planes->count())
                        
    
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                          <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            
                              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                  <tr>
                                      <th scope="col" class="px-6 py-3">
                                          Plan
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          Precio
                                      </th>
                                      <th scope="col" class="px-6 py-3">
                                          
                                      </th>
                                    
                                  </tr>
                              </thead>
                              <tbody>
    
                                  @foreach($planes as $plan)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                          {{$plan->plan->name}}
                                        </th>
                                        <td class="px-6 py-4">
                                          {{$plan->precio}} PVS
                                        </td>
                                        <td class=" py-4 flex justify-end pr-4">
                                          @livewire('profile.add-plan',['accion' => 'edit', 'creador' => $creador, 'plan_creador' => $plan],key($plan->id))
                                        </td>
                                    </tr>
                                  @endforeach
                              </tbody>
                          </table>
                        </div>
                      @else
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">Upss!</strong>
                          <span class="block sm:inline">Aún no has registrado tus planes</span>
                        </div>
                      @endif
                  </div>
                </div>

              @endif
  
  
            </section>
          </div>
        </div>
      </div>
  
  
      @if($is_c == 1)
        <div class="p-3 bg-white" id="posted">
          <div class="bg-white p-8 rounded-lg shadow-md shadow-slate-600 mb-4">
            @forelse($publicaciones as $publicacion)
                  <div class="mb-4">
                    <div class="mb-1">
                      <p class="text-gray-800"> {{$publicacion->contenido}}
                      </p>
                    </div>
          
          
                    <div class=" bg-white p-3">
          
                      @if ($publicacion->tipo == 'video')
          
                      <video  class="player h-48 w-full aspect-video"  controls crossorigin playsinline >
                      <source src="{{ Storage::url($publicacion->profile) }}" type="video/mp4" size="576">
                      </video>
          
                      @else
          
                      <img src="{{ Storage::url($publicacion->profile) }}" class="w-full rounded-t-lg h-90 img_ampliar" onclick="ampliar({{$publicacion->id}})" id="myImg-{{$publicacion->id}}">
          
                      @endif
          
          
                    </div> 
          
                    <div class="flex items-center justify-between text-gray-500">
                      <div class="flex items-center space-x-2">
                        <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                          <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C6.11 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-4.11 6.86-8.55 11.54L12 21.35z" />
                          </svg>
                          <span>42 Likes</span>
                        </button>
                      </div>
                      <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                        <svg width="22px" height="22px" viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z"></path>
                          </g>
                        </svg>
                        <span>3 Comment</span>
                      </button>
                    </div>
          
                  </div>
            @empty
                  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Upss!</strong>
                    <span class="block sm:inline">No existe ninguna publicación</span>
                  </div>
            @endforelse
          </div>
        </div>
      @endif
  
  
      <div class="modal fade" id="modal"  role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
  
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Actualizar foto de portada</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
  
            <div class="modal-body">
              <div class="img-container">
                <div class="row">
                  <div class="col-md-8">
                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                  </div>
                  <div class="col-md-4">
                    <div class="preview"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" id="crop">Guardar</button>
            </div>
          </div>
        </div>
      </div>
  
      <div id="myModal" class="modal2">
        <span id="close">&times;</span>
        <img class="modal2-content" id="img01">
        
      </div>
  
      
      </div>
  </div>
  
  
    
  
    @push('script')
  
    <script>
  
      function ampliar(id){
  
        var modal = document.getElementById("myModal");
        var img = document.getElementById("myImg-" + id);
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
  
        var span = document.getElementById("close");
  
        modal.style.display = "block";
        modalImg.src  = $("#myImg-" + id).attr("src");
    //    captionText.innerHTML = this.alt;
  
       /* img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
         }*/
  
          span.onclick = function() { 
            modal.style.display = "none";
          }
  
  
      }
  
      
  
    </script>
  
    <script type="text/javascript">
  
      $(document).ready(function(){
      
            var height = $(window).height();
      
            $('#p').height(height);
      });
      
      </script>
  
    
  
  
  
    <script>
      // Change the second argument to your options:
  // https://github.com/sampotts/plyr/#options
  
  
   // new Plyr('video', {captions: {active: true}});
  
    const player = Array.from(document.querySelectorAll('video')).map((p) => new Plyr(p), {captions: {active: true}});
  
   // const players = Array.from(document.querySelectorAll('.js-player')).map((p) => new Plyr(p));
  
  window.player = player;
    </script>
  
    <script src="//cdn.jsdelivr.net/npm/hls.js@latest"></script>
        {{-- plyr--}}
      <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
  
  
  
  
  
      <script>
  
       
  
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;
  
       
  
        $("body").on("change", ".image", function(e){
  
  
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
  
             
                $modal.modal('show');
            };
  
            var reader;
            var file;
            var url;
  
           if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                    
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
  
         
                    };
                reader.readAsDataURL(file);
                }
  
               
            }
        });
  
        $modal.on('shown.bs.modal', function () {
  
        
  
            cropper = new Cropper(image, {
                aspectRatio: 0,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });
  
        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                width: 1000,
                height: 600,
            });
  
            canvas.toBlob(function(blob) {
  
      
  
                url = URL.createObjectURL(blob);
  
                console.log(url)
  
                console.log(url)
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result; 
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "crop-image-upload-ajax",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                        success: function(data){
                            console.log(data);
                            $modal.modal('hide');
     
                            window.location.href = "http://privatesocialv2.test/profile_user";
                   
                        }
                    });
                }
            });
  
          
        });
      </script>
  
    @endpush
  
  </main>
  </div>
  
