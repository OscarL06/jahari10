@extends('layouts.main')

@section('title', 'Dashboard | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[20%]">

        <div class="w-[95%] rounded-md">
            <div class="rounded-t-md">
                <img class="object-cover w-full h-32 rounded-t-md lg:h-36" src="/images/header.jpg" alt="avatar image">
            </div>
            <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                    <div class="flex">
                        <img class="w-24 h-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                            @if (Auth::user()->profile_photo_path)
                                src="{{ env('APP_URL') }}/storage/{{ Auth::user()->profile_photo_path }}"
                            @else
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=7F22CE&color=fff" 
                            @endif 
                            alt="{{ Auth::user()->username }} Avatar"
                        >
                    </div>
                    <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                        <div class="flex-1 min-w-0 mt-6 sm:hidden md:block">
                            <div class="flex items-center">
                                <?xml version="1.0" ?><svg class="w-4 h-4 mt-2 mr-2" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M22 21C23.1046 21 24 20.1046 24 19V5C24 3.89543 23.1046 3 22 3H3C1.89543 3 1 3.89543 1 5V19C1 20.1046 1.89543 21 3 21H22ZM11 5H8.98486V13H7.98511V19H12V13H11V5ZM18.0151 19H22V5H19.0151V13H18.0151V19ZM17.0151 13H16.0151V5H14V13H13V19H17.0151V13ZM6.98511 19V13H5.98486V5H3L3 19H6.98511Z" fill="currentColor" fill-rule="evenodd"/></svg>
                                <h1 class="text-5xl tracking-tighter text-gray-900 truncate font-abel">{{ Auth::user()->name }}</h1>
                            </div>
                        </div>
                        <div class="flex flex-col mt-6 space-y-3 justify-stretch sm:flex-row sm:space-y-0 sm:space-x-4">
                            <button type="button" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white rounded-md shadow-sm bg-main">
                                <!-- Heroicon name: mini/envelope -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 -ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                                </svg>
                                <span class="text-base font-abel">Button</span>
                            </button>
                            <button type="button" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white rounded-md shadow-sm bg-main">
                                <!-- Heroicon name: mini/phone -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2 -ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                                </svg>
                                <span class="text-base font-abel">Button</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex-1 hidden min-w-0 mt-6 sm:block md:hidden">
                    <h1 class="text-2xl font-bold text-gray-900 truncate">{{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>

        @if (session()->has('practice-deleted'))
            <div class="px-5 mt-6 text-xl text-purple-900 rounded-md font-abel bg-purple-50 fade-out">
                {{ session()->get('practice-deleted') }}
            </div>
        @endif

        <!-- Menu -->
        <div class="w-10/12 my-16">
            <div class="overflow-hidden bg-gray-200 divide-y divide-gray-200 rounded-lg shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0">
                <div class="relative p-6 bg-white rounded-tl-lg rounded-tr-lg sm:rounded-tr-none group focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-700">
                    <div>
                        <span class="inline-flex p-3 text-purple-900 rounded-lg bg-purple-50 ring-4 ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <a href="{{ route('subscribe') }}" class="text-2xl font-medium focus:outline-none font-abel">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Subscribe
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
                    </div>
                    <span class="absolute text-purple-300 pointer-events-none top-6 right-6 group-hover:text-purple-900" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                        </svg>
                    </span>
                </div>

                <div class="relative p-6 bg-white sm:rounded-tr-lg group focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-700">
                    <div>
                        <span class="inline-flex p-3 text-purple-700 rounded-lg bg-purple-50 ring-4 ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <a href="{{ route('categories') }}" class="text-2xl font-medium focus:outline-none font-abel">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Courses
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
                    </div>
                    <span class="absolute text-purple-300 pointer-events-none top-6 right-6 group-hover:text-purple-900" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                        </svg>
                    </span>
                </div>

                <div class="relative p-6 bg-white group focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-700">
                    <div>
                        <span class="inline-flex p-3 text-purple-900 rounded-lg bg-purple-50 ring-4 ring-white">
                            <!-- Heroicon name: outline/users -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <a href="#" class="text-2xl font-medium focus:outline-none font-abel">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Schedule a one-on-one
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
                    </div>
                    <span class="absolute text-purple-300 pointer-events-none top-6 right-6 group-hover:text-purple-900" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                        </svg>
                    </span>
                </div>

                <div class="relative p-6 bg-white group focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-700">
                    <div>
                        <span class="inline-flex p-3 text-purple-900 rounded-lg bg-purple-50 ring-4 ring-white">
                            <!-- Heroicon name: outline/banknotes -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <a href="#" class="text-2xl font-medium focus:outline-none font-abel">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Live
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
                    </div>
                    <span class="absolute text-purple-300 pointer-events-none top-6 right-6 group-hover:text-purple-900" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                        </svg>
                    </span>
                </div>

                <div class="relative p-6 bg-white sm:rounded-bl-lg group focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-700">
                    <div>
                        <span class="inline-flex p-3 text-purple-900 rounded-lg bg-purple-50 ring-4 ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <a href="#" class="text-2xl font-medium focus:outline-none font-abel">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Frequently Asked Questions
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
                    </div>
                    <span class="absolute text-purple-300 pointer-events-none top-6 right-6 group-hover:text-purple-900" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                        </svg>
                    </span>
                </div>

                <div class="relative p-6 bg-white rounded-bl-lg rounded-br-lg sm:rounded-bl-none group focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-700">
                    <div>
                        <span class="inline-flex p-3 text-purple-900 rounded-lg bg-purple-50 ring-4 ring-white">
                            <!-- Heroicon name: outline/academic-cap -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <a href="#" class="text-2xl font-medium focus:outline-none font-abel">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Training
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
                    </div>
                    <span class="absolute text-purple-300 pointer-events-none top-6 right-6 group-hover:text-purple-900" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        @if (session()->has('practice-deleted'))
            <div class="px-5 text-xl text-purple-900 rounded-md font-abel bg-purple-50 fade-out">
                {{ session()->get('practice-deleted') }}
            </div>
        @endif
        
        @livewire('practice-logs')
    </div>
@endsection