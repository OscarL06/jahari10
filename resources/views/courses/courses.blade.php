@extends('layouts.main')

@section('title', $course->name . ' | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[20%] mt-16 lg:mt-4">
        <div class="w-[95%] px-2">
            <div class="mb-4 w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                <div class="bg-main h-2.5 rounded-full animate__animated animate__lightSpeedInLeft animate__slower" style="width: {{ $completed }}%"></div>
            </div>
            
            <h1 class="text-5xl tracking-tighter font-abel">{{ $course->category->name }} | {{ $course->name }}</h1>
            <p class="mt-2 ">{{ $course->description }}</p>

            <div class="flex flex-col items-center w-full my-16">
                <div class="flex items-center justify-around w-[98%] py-2 text-white rounded-lg shadow md:w-3/4 bg-main">
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        {{ count($course->materials) }} Lessons
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                        </svg>
                        {{ $course->level }}
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $course->time }}
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                        </svg>
                        {{ $completed }}% Complete
                    </p>
                </div>

                <div class="w-3/4 mt-10">
                    @foreach ($course->materials as  $material)
                        <a class="flex items-center mt-8" href="/courses/lesson/{{ $material->id }}">
                            <div class="px-4 py-2 mr-5 text-white rounded-full bg-main">{{ $loop->iteration }}</div>
                            <div class="flex flex-col">
                                <h2 class="flex items-end justify-between text-3xl tracking-tighter font-abel">{{ $material->name }}  <span class="px-2 text-sm tracking-normal">{{ $material->type }} {{ !empty($material->progress) && $material->progress->completed === 1 ? '- Completed' : (!empty($material->progress) ? '- In Progress' : '') }}</span></h2>
                                <p class="p-2 rounded-md shadow bg-purple-50">{{ $material->description }}</p>
                            </div> 
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        @livewire('reset-course', ['course_id' => $course->id ])
    </div>

    <x-back-button backUrl="{{ route('categories') }}" class="top-4 right-4 lg:top-10 lg:right-10"/>
@endsection