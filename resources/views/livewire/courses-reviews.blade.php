<section class="mt-4">

    <h1 class="font-bold text-3xl text-gray-800 mb-2">Valoración</h1>
    @can('enrolled',$course)
        <article>
            <textarea class="form-input w-full" name=""  rows="3" placeholder="Ingrese una reseña del curso"></textarea>

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
                            <p><b>{{$review->user->name}}</b><i class="fas fa-star text-yellow-500"></i>{{$review->rating}}</p>
                            {{$review->comment}}
                        </div>

                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
