<div>

    <h1 class="text-2xl font-bold mb-4">Estudiantes del Curso</h1>


    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                <div class="px-6 py-4">
                    <input wire:model="search" class="form-input shadow-sm  w-full" type="text" placeholder="Ingrese el nombre de un curso">
                </div>

                @if ($students->count())
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Nombre</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Email</th>

                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Edit</th>

                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($students as $student)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">

                                                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{$student->profile_photo_url}}" alt="Estudiante ">

                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    {{$student->name}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    {{$student->email}}
                                                </div>

                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        <a href="" class="text-indigo-600 hover:text-indigo-900" >Ver</a>
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
                    {{$students->links()}}
                </div>

            </div>
        </div>
    </div>

</div>
