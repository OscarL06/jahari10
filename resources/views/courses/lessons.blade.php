@extends('layouts.main')

@section('title', $lesson->name . ' | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[20%] mt-16 lg:mt-6" x-data="{ open: false }">

        <div class="mb-4 w-[95%] bg-gray-200 rounded-full h-2.5 overflow-hidden">
            <div class="bg-main h-2.5 rounded-full animate__animated animate__lightSpeedInLeft animate__slower" style="width: {{ $completed }}%"></div>
        </div>

        <h1 class="text-3xl tracking-tighter md:text-5xl font-abel">{{ $lesson->course->name }} | {{ $lesson->name }}</h1>

        @if(session()->has('status'))
            <div x-data="{ showFlash: true }" x-show="showFlash">
                <div class="mt-2 text-lg font-abel fade-out">{{ session()->get('status') }}</div>
                @if (!empty($lesson->progress->completed) && $lesson->progress->completed === 1)
                    @if (!empty($nextLesson->id))
                        <a href="{{ route('lesson', ['id' => $nextLesson->id]) }}">Next Lesson</a>
                    @endif
                @endif
            </div>
        @endif

        <div class="flex flex-col items-center w-[95%] md:flex-row md:justify-center">
            <div class="flex flex-col items-center w-[95%] mt-16 xl:w-2/3 md:w-1/2">
                @livewire('progress-video', ['lesson_id' => $lesson->id ])

                <div class="flex justify-center w-full p-1 px-2 mt-2 space-x-5 text-white rounded-md shadow md:space-x-2 xl:space-x-10 lg:w-full bg-main" wire:click="updateProgress">
                    @livewire('lesson-complete', ['lesson_id' => $lesson->id])
                    <a href="#notes" class="cursor-pointer px-2 py-0.5 text-white bg-main rounded-md font-abel shadow shadow-purple-500 flex items-center" @click="open =  true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden w-4 h-4 mr-1 md:block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        Notes
                    </a>
                    <button class="px-2 py-0.5 text-white bg-main rounded-md font-abel shadow shadow-purple-500 flex items-center" @click="practice = true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden w-5 h-5 mr-1 md:block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />
                        </svg>
                        Practice
                    </button>
                    @livewire('reset-lesson', ['lesson_id' => $lesson->id ])
                </div>
            </div>

            <div class="flex flex-col items-center justify-start w-11/12 h-full mt-8 lg:mt-28 md:w-1/2 xl:w-1/3 font-abel">
                <div class="flex justify-center w-full">
                    <button class="w-1/4 py-1 mr-3 text-white rounded-md shadow bg-main" @click="open = false">Lessons</button>
                    <button id="notes" class="w-1/4 py-1 text-white rounded-md shadow bg-main" @click="open =  true">Notes</button>
                </div>

                <div class="flex justify-center w-full mt-3 rounded-md h-4/5" x-show="!open">
                    <div class="flex flex-col w-5/6 p-2 space-y-4 rounded-md shadow font-abel">
                        @foreach ($lesson->course->materials as $material)
                            <a href="{{ $material->id }}" class="flex items-center w-full px-1 py-1 text-lg rounded-md odd:bg-purple-50 hover:bg-purple-100">
                                <span class="px-2 py-1 mr-1 text-sm text-white rounded-full bg-main">{{ $loop->iteration }}</span>
                                {{ $material->name }} <span class="ml-1 text-sm">{{ !empty($material->progress) && $material->progress->completed === 1 ? '- Completed' : (!empty($material->progress) ? '- In Progress' : '') }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                @livewire('notes', ['lesson_id' => $lesson->id ])
            </div>
        </div>
        
        @if (count($lesson->slices) > 0)
            <div class="mt-12 text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                </svg>
            </div>

            <div id="slices" class="w-5/6 rounded-md lg:w-3/5">
                @foreach($lesson->slices as $slices)
                    <iframe src="{{ $slices->url }}" width="100%" height="500" frameBorder="0" allowfullscreen class="my-10 rounded-lg"></iframe>
                @endforeach  
            </div>
        @endif

        <div @class(['text-purple-800', 'mt-14' => count($lesson->slices) == 0])>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
            </svg>
        </div>

        <div class="my-6">
            @livewire('lesson-complete', ['lesson_id' => $lesson->id])
        </div>
    </div>

    <x-back-button backUrl="{{ route('course', $lesson->course->id) }}" class="top-4 right-4 lg:top-10 lg:right-10"/>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('video');
            video.addEventListener('timeupdate', function() {
                if (this.currentTime >= 5) {
                    Livewire.emit('updateProgress');
                    this.removeEventListener('timeupdate', arguments.callee);
                }
            });
        });
    </script>

    <script>
        window.addEventListener('noteSaved', event => {
            document.getElementById("saveNote").innerHTML = "Saved!";
            setTimeout(function(){
                document.getElementById("saveNote").innerHTML = "Save";
            }, 1500);
        })
    </script>
@endsection