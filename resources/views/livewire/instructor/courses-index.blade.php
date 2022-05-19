<div class="container">


    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                <div class="px-6 py-4 flex">
                    <input wire:keydown="limpiar_page" wire:model="search" class="form-input flex-1 shadow-sm" type="text" placeholder="Ingrese el nombre de un curso">
                    <a class="btn btn-danger ml-2" href="{{route('instructor.courses.create')}}">Crear Nuevo Curso</a>

                </div>


                @if ($courses->count())

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Nombre</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Matriculados</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Calificacion</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Estatus</th>

                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($courses as $course)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">

                                                @isset($course->image)
                                                    <img class="w-10 h-10 rounded-full object-cover object-center" src="{{Storage::url($course->image->url)}}"alt="admin dashboard ">
                                                @else
                                                    <img class="w-10 h-10 rounded-full object-cover object-center" src="https://images.pexels.com/photos/4491461/pexels-photo-4491461.jpeg" alt="admin dashboard ">

                                                @endisset




                                            </div>

                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    {{$course->title}}
                                                </div>

                                                <div class="text-sm font-medium leading-5 text-gray-500">
                                                    {{$course->category->name}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    {{$course->students->count()}}
                                                </div>
                                                <div class="text-sm font-medium leading-5 text-gray-500">
                                                    Alumnos Matriculados
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900 flex items-center">
                                                    {{$course->rating}}
                                                    <ul class="flex text-sm ml-2">
                                                        <li class="mr-1 text-{{$course->rating>=1 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                                                        <li class="mr-1 text-{{$course->rating>=2 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                                                        <li class="mr-1 text-{{$course->rating>=3 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                                                        <li class="mr-1 text-{{$course->rating>=4 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                                                        <li class="mr-1 text-{{$course->rating==5 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="text-sm font-medium leading-5 text-gray-500">
                                                    Valoración del curso
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                                    @switch($course->status)
                                        @case(1)
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">Borrador</span>
                                            </td>
                                            @break
                                        @case(2)
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">Revisión</span>
                                            </td>
                                            @break
                                        @case(3)
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Publicado</span>
                                            </td>
                                        @break

                                        @default

                                    @endswitch

                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        <a href="{{route('instructor.courses.edit',$course)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-4">
                        No hay ningun registro coincidente
                    </div>
                @endif

                <div class="px-6 py-4">
                    {{$courses->links()}}
                </div>

            </div>
        </div>
    </div>

</div>
