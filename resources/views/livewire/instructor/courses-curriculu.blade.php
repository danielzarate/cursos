<div>
    <x-slot name="course">
        {{$course->slug}}
    </x-slot>
    <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>
    <hr class="mt-2 mb-6">
    {{$section}}

    @foreach ($course->sections as $item)
        <article class="card mb-6">
            <div class="card-body bg-gray-100">

                @if ($section->id==$item->id)
                    <form>
                        <input class="form-input w-full" placeholder="Ingrese el nombre de la seccion">
                    </form>

                @else
                    <header class="flex justify-between items-center">
                        <h1 class="cursor-pointer"><strong>Sección:</strong>{{$item->name}}</h1>

                        <div>
                            <i wire:click="edit({{$item}})" class="fas fa-edit cursor-pointer text-blue-500"></i>
                            <i class="fas fa-eraser cursor-pointer text-red-500"></i>

                        </div>
                    </header>

                @endif



            </div>

        </article>
    @endforeach
</div>
