@props(['course'])



<article class="bg-white shadow-lg rounded overflow-hidden">
    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
    <div class="px-6 py-4">
        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title,40)}}</h1>
        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>

        <div class="flex">
            <ul class="flex text-sm">
                <li class="mr-1 text-{{$course->rating>=1 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                <li class="mr-1 text-{{$course->rating>=2 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                <li class="mr-1 text-{{$course->rating>=3 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                <li class="mr-1 text-{{$course->rating>=4 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
                <li class="mr-1 text-{{$course->rating==5 ? 'yellow' : 'gray'}}-400"><i class="fa fa-star"></i></li>
            </ul>
            <p class="text-sm text-gray-500 ml-auto"> <i class="fas fa-users"></i>({{$course->students_count}})</p>
        </div>

    </div>
    <a href="{{route('courses.show',$course)}}" class="block text-center w-full py-2 px-4 mt-2 mb-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
        Más informacion
    </a>
</article>
