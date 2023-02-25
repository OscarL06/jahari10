@extends('layouts.main')

@section('title', 'Settings | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[22%] font-abel">

        <div class="w-full pt-4">
            <p class="w-40 ml-16 text-sm text-center text-white rounded-md lg:ml-0 bg-main">
                <span class="">Member since: </span>
                {{ $user->created_at->diffForHumans() }}
            </p>
        </div>

        <div class="flex flex-col">
            <h1 class="mt-2 text-6xl tracking-tight">{{ $user->name }}</h1>
            <h2 class="text-sm"><span>@</span>{{ $user->username }}</h2>
        </div>


        <div class="w-full mt-16">
            <h3 class="text-xl">Courses completed</h3>
            <div class="w-1/4 p-3 rounded-md shadow">
                @foreach ($user->coursesCompleted as $course)
                    <p>{{ $course->course->name }}</p>
                @endforeach
            </div>
        </div>

    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>    
@endsection