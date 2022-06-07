<section class="mt-4">


    <h1 class="font-bold text-3xl text-gray-800 mb-2">Valoración</h1>
    @can('enrolled',$course)
        <article>
            @can('valued',$course)
                <textarea class="form-input w-full" name=""  rows="3" placeholder="Ingrese una reseña del curso" wire:model="comment"></textarea>
                <div class="flex">
                    <button class="btn btn-primary mr-4" wire:click="store">Guardar</button>

                    <div class="flex items-center">
                        <ul class="flex">
                            <li class="cursor-pointer" wire:click="$set('rating',1)">
                                <i class="fa fa-star  mr-1 text-{{$rating>=1 ? 'yellow' : 'gray'}}-300"></i>
                            </li>
                            <li class="cursor-pointer" wire:click="$set('rating',2)">
                                <i class="fa fa-star  mr-1 text-{{$rating>=2 ? 'yellow' : 'gray'}}-300"></i>
                            </li>
                            <li class="cursor-pointer" wire:click="$set('rating',3)">
                                <i class="fa fa-star  mr-1 text-{{$rating>=3 ? 'yellow' : 'gray'}}-300"></i>
                            </li>
                            <li class="cursor-pointer" wire:click="$set('rating',4)">
                                <i class="fa fa-star  mr-1 text-{{$rating>=4 ? 'yellow' : 'gray'}}-300"></i>
                            </li>
                            <li class="cursor-pointer" wire:click="$set('rating',5)">
                                <i class="fa fa-star  mr-1 text-{{$rating==5 ? 'yellow' : 'gray'}}-300"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                <div class="bg-white border-t border-l border-r rounded-5 ">
                    <div class="p-4">

                        <div class="bg-blue-100 rounded-lg py-5 px-6 mb-3 text-base text-blue-700 inline-flex items-center w-full" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                        </svg>
                        Ya se realizo la valoración de este curso por este usuario
                        </div>


                    </div>



                </div>


            @endcan
        </article>
    @endcan

    <div class="card">
        <div class="card-body">
            <p class="text-gray-800 text-xl ">{{$course->reviews->count()}} Valoraciones </p>
            @foreach ($course->reviews as $review)
                <article class="flex mb-4 text-gray-800">
                    <figure class="mr-4">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$review->user->profile_photo_url}}" alt="">
                    </figure>
                    <div class="card flex-1">
                        <div class="card-body bg-gray-100">
                            <p><b>{{$review->user->name}}</b><i class="fas fa-star text-yellow-300"></i>{{$review->rating}}</p>
                            {{$review->comment}}
                        </div>

                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
