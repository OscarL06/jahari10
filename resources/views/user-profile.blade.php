@extends('layouts.main')

@section('title', 'Settings | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[22%] font-abel mb-5">

        <div class="w-full pt-4">
            <p class="ml-16 text-sm text-center text-white rounded-md w-44 lg:ml-0 bg-main">
                <span class="">Member since: </span>
                {{ $user->created_at->diffForHumans() }}
            </p>
        </div>

        <div class="flex flex-col">
            <h1 class="mt-2 text-6xl tracking-tight">{{ $user->name }}</h1>
            <h2 class="text-sm"><span>@</span>{{ $user->username }}</h2>
        </div>

        <section class="w-full mt-16">
            <div class="w-1/4">
                <div class="flex flex-col py-2 space-x-2 rounded-md shadow">
                    <div class="flex justify-between px-4">
                        <p>100 followers</p>
                        <button class="px-4 text-white rounded-md bg-main hover:opacity-90">Follow</button>
                    </div>

                    <div class="pl-2 mt-1">
                        <img class="w-20 h-20 rounded-full"
                            @if ($user->profile_photo_path)
                                src="{{ env('APP_URL') }}/storage/{{ $user->profile_photo_path }}"
                            @else
                                src="https://ui-avatars.com/api/?name={{ $user->name }}&background=7F22CE&color=fff" 
                            @endif   
                            alt="Avatar"
                        >
                    </div>

                    <div class="flex items-center pl-1 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        Chicago    
                    </div>

                    <div class="pl-2 mt-1">
                        <a href="">http://wwww.oscar.com</a>
                    </div>

                    <div class="pl-2 mt-1">
                        <p>short bio can go here</p>
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="flex items-center text-xl">Courses completed <span class="ml-2 text-base">{{ count($user->coursesCompleted) }}</span></h3>
                    <div class="p-3 py-2 rounded-md shadow">
                        @forelse ($user->coursesCompleted as $course)
                           <li class="marker:text-purple-700">{{ $course->course->name }}</li>
                        @empty
                            <p>No completed courses</p>   
                        @endforelse
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="flex items-center text-xl">Lessons completed <span class="ml-2 text-base">{{ count($user->lessonsCompleted) }}</span></h3>
                    <div class="p-3 py-2 rounded-md shadow">
                        @forelse ($user->lessonsCompleted as $lesson)
                            <li class="marker:text-purple-700">
                                {{ $lesson->material->name }} - 
                                <span class="text-sm">{{ $lesson->material->type }}</span>
                            </li>
                        @empty
                            <p>No completed lessons</p> 
                        @endforelse
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="flex items-center text-xl">Lessons In Progress
                        @if(!is_null($user->lessonsInProgress))
                            <span class="ml-2 text-base">{{ count($user->lessonsInProgress) }}</span>
                        @endif
                    </h3>
                    <div class="p-3 py-2 rounded-md shadow">
                        @if(!is_null($user->lessonsInProgress))
                             @foreach ($user->lessonsCompleted as $lesson)
                                <li class="marker:text-purple-700">
                                    {{ $lesson->material->name }} - 
                                    <span class="text-sm">{{ $lesson->material->type }}</span>
                                </li>
                            @endforeach
                        @else
                            <p>No lessons in progress</p>        
                        @endif
                    </div>
                </div>
            </div>

            <div class="w-3/4">

            </div>
        </section>
    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>    
@endsection