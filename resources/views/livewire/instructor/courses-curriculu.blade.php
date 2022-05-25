<div>
    <x-slot name="course">
        {{$course->slug}}
    </x-slot>
    <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->sections as $item)
        <article class="card mb-6">
            <div class="card-body bg-gray-100">

                @if ($section->id==$item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="section.name" class="form-input w-full" placeholder="Ingrese el nombre de la seccion">
                        @error('section.name')
                            <span class="text-xs text-red-500">{{$message}}</span>

                        @enderror
                    </form>

                @else
                    <header class="flex justify-between items-center">
                        <h1 class="cursor-pointer"><strong>Sección:</strong>{{$item->name}}</h1>

                        <div>
                            <i wire:click="edit({{$item}})" class="fas fa-edit cursor-pointer text-blue-500"></i>
                            @error('section.name')
                                <span class="text-xs text-red-500">{{$message}}</span>
                            @enderror
                            <i wire:click="destroy({{$item}})"class="fas fa-eraser cursor-pointer text-red-500"></i>

                        </div>
                    </header>
                    <div>
                        @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                    </div>

                @endif



            </div>

        </article>
    @endforeach

    <div x-data="{open:false}">
        <a x-show="!open" x-on:click="open=!open" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar Nueva Seccion
        </a>
        <article class="card" x-show="open">
            <div class="card-body bg-gray-100">
                <h1 class="text-xl font-bold mb-4">Agregar Nueva Sección</h1>
                <div>
                    <input wire:model="name" class="form-input w-full" placeholder="Escriba el nombre de la seccion">
                    @error('name')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
                </div>
                <div class="flex justify-end mt-2">
                    <button class="btn btn-danger" x-on:click="open=false">Cancelar</button>
                    <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
                </div>
            </div>
        </article>

    </div>
</div>
