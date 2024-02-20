<x-app-layout>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&display=swap"
rel="stylesheet" />

<style>
    html,
    body {
 
    }
</style>

    <div class="mb-4 ">

        <video autoplay loop muted class="w-full h-96  object-cover -mt-16 ">
            <source src="/imagen/BANNER_interno.mp4" type="video/mp4" />
          
          </video>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 h-full container font-general bg-white">


        <div class="bg-white md:lg:col-span-1 lg:col-span-2 mt-2 mr-2 hidden md:block">

            

            <div class="flex flex-col justify-center items-center">
                <div class="relative flex max-w-[500px] h-[430px] w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none" >
                    <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                    <h4 class="md:text-sm lg:text-lg font-bold text-navy-700 dark:text-white font-general">
                        Perfiles más populares
                    </h4>

                    <a href="#" class="flex items-center h-10 leading-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 " @click.prevent="showChildren=!showChildren">

                        <span class="ml-3 md:text-sm lg:text-lg text-blue-600 font-general">Ver todo</span>

                    </a>

                </div>
                    <div class="w-full overflow-x-scroll px-4 md:overflow-x-hidden">
                    <table role="table" class="w-full min-w-[500px] overflow-x-scroll">
                        <thead>
                        <tr role="row">
                            <th
                            colspan="1"
                            role="columnheader"
                            title="Toggle SortBy"
                            style="cursor: pointer"
                            >
                            <div
                                class=" font-general flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs"
                            >
                                Creador
                            </div>
                            </th>
                            <th
                            colspan="1"
                            role="columnheader"
                            title="Toggle SortBy"
                            style="cursor: pointer"
                            >
                            <div
                                class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs"
                            >
                                Contenido
                            </div>
                            </th>
                            <th
                            colspan="1"
                            role="columnheader"
                            title="Toggle SortBy"
                            style="cursor: pointer"
                            >
                            </th>
                        </tr>
                        </thead>
                        <tbody role="rowgroup" class="px-4">
                        @foreach($perfiles_populares as $perfil)
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[40px] w-[40px] rounded-full">
                                <img
                                    src="{{$perfil->creador->user->profile_photo_url }}"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>

                                <p class="text-sm mt-2 font-medium text-navy-700  dark:text-white">
                                    {{$perfil->creador->user->name}}
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                9821
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>

                        @endforeach
                    
                 
                 
                      
                        </tbody>
                    </table>
                    </div>
                </div>
              
            </div>


            <div class="flex flex-col mt-2 justify-center items-center">
                <div class="relative flex max-w-[500px]  w-full flex-col rounded-md border border-gray-200 bg-white bg-clip-border  dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white">
                    <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                        <h4 class="md:text-sm lg:text-lg font-bold text-navy-700 dark:text-white font-general">
                            Solicitudes de conexión
                        </h4>
    
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1" @click.prevent="showChildren=!showChildren">
    
                            <span class="ml-3 md:text-sm lg:text-lg text-blue-600 font-general">Ver todo</span>
    
                        </a>
    
                    </div>

                    
                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>

                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>


                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>

                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>
                    
                </div>  
                
            </div>



        </div>

        <div class="md:col-span-2 lg:col-span-3 rounded-[10px] border-[1px] mt-2 mr-2">

            @foreach($creadors as $creador)

            <a href="{{route('creadores_select.index',$creador)}}" class="flex-shrink-0 group block">


                <div class=" flex items-center justify-center mt-2   ">
                    <div class="bg-white pt-8 pr-8 pl-8 w-full">
                        <!-- Banner Profile -->
                        <div class="relative z-0 ">
                            <img src="{{ Storage::url($creador->banner) }}" alt="Banner Profile" class="w-full rounded-t-lg object-cover h-80 ">
                            <img src="{{ $creador->user->profile_photo_url }}" alt="Profile Picture" class=" object-cover object-center absolute bottom-0 left-2/4 transform -translate-x-1/2 translate-y-1/2 w-28 h-28 rounded-full border-4 border-white">
                        </div>
                        <!-- User Info with Verified Button -->
                        <div class="flex items-center mt-4">
                            <h2 class="text-xl font-bold text-gray-800">{{$creador->user->name}}</h2>
                            <div class=" -mt-1 ml-1 rounded-full">
                                <svg class=" h-5 fill-blue-400" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                  d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                </svg>
                            </div>
                        </div>
                        <!-- Bio -->
               
        
    
                        <!-- Stats -->
                        <div class="flex   text-sm text-gray-400 container mt-2">

                            <div class="py-4 flex justify-center items-center w-full  divide-solid">

								@livewire('home.following',['creador' => $creador])
                                
                               

                                @livewire('home.post',['creador' => $creador])

                                
							</div>

        


                            
                        </div>
                    </div>
                </div>

            </a>

            <hr class="m-0 p-0">


            @endforeach





            

        </div>

        <div class="bg-white col-span-1 rounded-lg mt-2 hidden lg:block ">

       

            <div class="flex flex-col justify-center items-center">
                <div class="relative flex max-w-[500px] h-[520px] w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none" >
                    <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                    <h4 class="text-lg font-bold text-navy-700 dark:text-white font-general">
                        Contactos
                    </h4>

                  

                </div>
                    <div class="w-full overflow-x-scroll px-4 md:overflow-x-hidden">
                    <table role="table" class="w-full min-w-[500px] overflow-x-scroll">
                        <thead>
                        <tr role="row">
                            <th
                            colspan="1"
                            role="columnheader"
                            title="Toggle SortBy"
                            style="cursor: pointer"
                            >
                            <div
                                class=" font-general flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs"
                            >
                                
                            </div>
                            </th>
                            
                        
                        </tr>
                        </thead>
                        <tbody role="rowgroup" class="px-4">
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2244&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @maddison_c21
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                9821
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @karl.will02
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                7032
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @karl.will02
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                7032
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @karl.will02
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                7032
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @karl.will02
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                7032
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1573766064535-6d5d4e62bf9d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1315&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @andreea.1z
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                5204
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @abraham47.y
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                4309
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://i.ibb.co/7p0d1Cd/Frame-24.png"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @simmmple.web
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                3871
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
              
            </div>

            

            

            

            


        </div>


    </div>

    

    
</x-app-layout>