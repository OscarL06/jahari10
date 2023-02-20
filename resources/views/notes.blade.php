@extends('layouts.main')

@section('title', 'Notes | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[20%] mt-6">
        <h1 class="text-6xl tracking-tighter font-abel">Notes</h1>

        <div class="flex flex-col items-center px-3 mt-24 lg:w-4/5">
            @forelse ($notes as $note)
                <div class="w-3/4 my-4 lg:w-full">
                    <a class="flex items-center text-3xl tracking-tighter font-abel" href="/courses/lesson/{{ $note->material->id }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1 text-purple-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        {{ $note->material->course->name }} | {{ $note->material->name }}
                    </a>
                    <p class="mb-2 ml-8 text-xs">Last updated: {{ $note->updated_at->diffForHumans() }}</p>
                    <p class="w-full p-4 ml-8 overflow-hidden rounded-md shadow h-36 bg-purple-50">{!! nl2br(e($note->notes)) !!}</p>
                </div>
            @empty
                <p>Start a lesson to begin taking notes</p>
            @endforelse
        </div>
    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>
@endsection