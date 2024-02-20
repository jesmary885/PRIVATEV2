<div>



    <button wire:click="$set('open',true)"  class="mt-8 mb-4 py-2 px-14 rounded-full bg-sky-600 text-white tracking-widest hover:bg-sky-500 transition duration-200">MORE</button>

  
  
  <x-dialog-modal wire:model="open">

      <x-slot name="title">
          <p class="text-gray-600 font-bold">
            Terms of Service

          </p>

          <hr>

         
      </x-slot>

      <x-slot name="content">

        <div>
            <section  >
             
                <div >
                    <div  class="col-span-12 lg:col-start-4 lg:col-span-6">
                    <h5  class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> What is David UI Angular? </h5>
                    <div  class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> David UI Angular is the components library based on Tailwind CSS and Angular frontend frameworks that is designed to help developers build good-looking websites and applications faster and in a more organized way. </div>
                    <hr  class="my-6 border-blue-gray-50">
                    <h5  class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> Can you use Tailwind CSS with Angular? </h5>
                    <div  class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> Yes, you can surely use the Tailwind CSS framework with Angular. Tailwind CSS is a popular utility-first CSS framework that can be integrated into Angular projects. It provides a set of pre-designed utility classes that can help streamline your styling and layout efforts when building Angular applications. Check our documentation that explains how you can easily integrate them. </div>
                    <hr  class="my-6 border-blue-gray-50">
                    <h5  class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> What is Tailwind CSS in Angular? </h5>
                    <div  class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> Tailwind CSS in Angular refers to the integration of the Tailwind CSS framework into Angular applications. It allows Angular developers to leverage Tailwind's utility classes to style and design user interfaces. </div>
                    <hr  class="my-6 border-blue-gray-50">
                    <h5  class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> Is Tailwind CSS faster than CSS? </h5>
                    <div  class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> Tailwind CSS and traditional CSS serve different purposes. Tailwind CSS is not inherently faster or slower than CSS; instead, it focuses on providing utility classes to expedite the development process. Whether Tailwind CSS is faster for your project depends on factors like your familiarity with the framework and your project's specific requirements. </div>
                    <hr  class="my-6 border-blue-gray-50">
                    <h5  class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> Is Tailwind CSS good to use? </h5>
                    <div  class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> Yes, Tailwind CSS is considered a valuable tool in web development, and it's becoming more and more popular nowadays. It offers a structured approach to styling, streamlining the design process and making it easier to maintain and scale projects. </div>
                    <hr  class="my-6 border-blue-gray-50">
                    <h5  class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> Is Tailwind CSS good for Angular? </h5>
                    <div  class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> Tailwind CSS can be a great choice for styling Angular applications. Its utility classes can help maintain consistency and speed up development. However, the suitability of Tailwind CSS for Angular depends on your project's requirements and your team's familiarity with both technologies. It's often a matter of personal or team preference, so consider your specific context when deciding whether to use it with Angular. </div>
                    </div>
                </div>
       
            </section>
            
        </div>
          


      </x-slot>

      <x-slot name="footer">
    

          <button wire:click="close" class="mr-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Cerrar
          </button>
    
      </x-slot>

  </x-dialog-modal>
  {{-- Be like water. --}}
</div>

