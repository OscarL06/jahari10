@extends('layouts.main')

@section('title', 'Courses | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[20%] mt-10 lg:mt-6">

        <div class="w-[95%] mt-6">
            <div class="flex items-center">
                <h2 class="text-5xl tracking-tighter font-abel">Courses</h2>
            </div>
            <div class="flex items-center px-4 py-5 mt-4 space-x-2 border border-gray-200 rounded-lg shadow-sm">
                <?xml version="1.0" ?><svg class="w-4 h-4 mt-0.5 mr-1" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M22 21C23.1046 21 24 20.1046 24 19V5C24 3.89543 23.1046 3 22 3H3C1.89543 3 1 3.89543 1 5V19C1 20.1046 1.89543 21 3 21H22ZM11 5H8.98486V13H7.98511V19H12V13H11V5ZM18.0151 19H22V5H19.0151V13H18.0151V19ZM17.0151 13H16.0151V5H14V13H13V19H17.0151V13ZM6.98511 19V13H5.98486V5H3L3 19H6.98511Z" fill="currentColor" fill-rule="evenodd"/></svg>
                @foreach($categories as $category)
                    <a href="#{{ $category->name }}" class="px-6 py-1 text-lg tracking-tighter text-white rounded-md bg-gradient-to-r from-purple-700 to-purple-600 font-abel">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>

    <div class="my-16 w-[95%]">
            @foreach($categories as $category)
                <h3 id="{{ $category->name }}" class="tracking-tighter font-abel mt-8 px-3 py-0.5 mb-3 text-3xl text-white rounded-md bg-gradient-to-r from-purple-700 to-purple-600 w-min">{{ $category->name }}</h3>
                <div class="grid w-full grid-cols-1 gap-2 md:grid-cols-3">
                    @foreach($category->courses as $course)
                        <a href="/courses/{{ $course->id }}" class="relative w-11/12 p-2 border border-gray-200 rounded-md shadow">
                            <img class="rounded-md" src="/images/image.jpg" alt="{{ $course->name }}">
                            <p class="absolute text-lg tracking-tight text-white bottom-4 left-4 font-source">{{ $course->name }} 
                            @if($course->materialCount() !== 0 && $course->completedMaterialCount() / $course->materialCount() * 100 === 100) 
                                <p class='absolute font-mono text-sm text-white top-4 right-4'>Completed</p>
                            @elseif ($course->hasProgress())
                                <p class='absolute font-mono text-sm text-white top-4 right-4'>In Progress</p>
                            @endif
                            </p>
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>
@endsection