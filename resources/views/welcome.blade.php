<x-app-layout>

    <section class="bg-cover" style="background-image:url({{asset('img/home/imagen.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Domina la tecnología web con Coders Free</h1>
                <p class="text-white text-lg mt-2 mb-4">Aprende Laravel con los mejores cursos de programación. Contamos con cursos tanto teóricos como prácticos. </p>

                @livewire('search')

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset("img/home/imagen1.jpg")}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum error perferendis, quis nulla quisquam earum numquam eligendi repudiandae fugiat.</p>
                    </header>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset("img/home/imagen2.jpg")}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Manual de Laravel</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum error perferendis, quis nulla quisquam earum numquam eligendi repudiandae fugiat.</p>
                    </header>

                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset("img/home/imagen3.jpg")}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Blog</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum error perferendis, quis nulla quisquam earum numquam eligendi repudiandae fugiat.</p>
                    </header>

                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset("img/home/imagen4.jpg")}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Desarrollo Web</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum error perferendis, quis nulla quisquam earum numquam eligendi repudiandae fugiat.</p>
                    </header>

                </article>

            </div>



    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes qué curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
        <div class="flex justify-center mt-4">

            <a href="{{route('courses.index')}}" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Catalogo de Cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir subiendo cursos</p>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach

        </div>

    </section>

</x-app-layout>
