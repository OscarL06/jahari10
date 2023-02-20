@extends('layouts.main')

@section('title', 'Practice Logs | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[20%] mt-6">
        <h1 class="mb-24 text-6xl tracking-tighter font-abel">Practice Logs</h1>

        @livewire('practice-logs')
    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>
@endsection