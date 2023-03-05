@extends('layouts.main')

@section('headers')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@endsection

@section('title', 'Settings | ' . Auth::user()->username)

 <style>
     .progress {
      width: 80px;
      height: 80px;
      position: relative;
      margin: 0 auto;
    }
    .progress img {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

/*     .swiper {
        width: 600px;
        height: 300px;
    } */
  </style>

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[22%] font-abel mb-5">

        <div class="w-full pt-4">
            <p class="ml-16 text-sm text-center text-white rounded-md w-44 lg:ml-0 bg-main">
                <span>Member since: </span>
                {{ $user->created_at->diffForHumans() }}
            </p>
        </div>

        <section class="w-full mt-8">
            <div class="flex items-center justify-around md:w-4/5 md:flex-row md:items-center md:justify-around">
                <div class="hidden md:block">
                    <img class="rounded-full w-44 h-44" src="/storage/{{ $user->profile_photo_path }}" alt="User Avatar">
                </div>
                
                <div class="flex flex-col">
                    <div class="flex items-center">
                        <h1 class="text-5xl">{{ $user->username }}</h1>
                        <button class="px-4 ml-2 text-sm text-white rounded-md bg-main">Follow</button>
                    </div>

                    <div>
                        <p class="text-lg ">100 friends</p>

                        <img class="mt-2 rounded-full w-28 h-28 md:hidden" src="/storage/{{ $user->profile_photo_path }}" alt="User Avatar">

                        <p class="mt-4 text-xl">{{ $user->name }}</p>
                        <div class="text-xl">
                            <a href="">wwww.oscar.com</a>
                        </div>
                        <p class="w-80">
                            Lorem ipsum dolor sit, consectetur adipisicing elit. Autem dignissimos ex 
                            doloremque commodi veniam accusamus laudantium sit quos laborum saepe, nam, 
                            incidunt quaerat id error.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative w-full md:w-[95%] flex items-center">
            <div class="z-50 flex justify-center w-11/12 h-full py-4 mt-8 md:space-x-3 md:w-3/4 swiper">
                <div class="flex justify-center swiper-wrapper">
                    @forelse ($courses as $course)
                            <div class="flex flex-col items-center swiper-slide">
                                <p class="mb-1 text-xs">{{ $course->completedMaterialCount() / $course->materialCount() * 100 }}%</p>
                                <div class="progress" data-progress="{{ number_format($course->completedMaterialCount() / $course->materialCount(), 1) }}">
                                    <img src="{{ $course->image }}" class="rounded-full h-14 w-14" alt="Course Image">
                                </div>
                                <p>{{ $course->name }}</p>
                            </div>

                            <div class="flex flex-col items-center swiper-slide">
                                <p class="mb-1 text-xs">25%</p>
                                <div class="progress" data-progress="0.25">
                                    <img src="{{ $course->image }}" class="rounded-full h-14 w-14" alt="Course Image">
                                </div>
                                <p>{{ $course->name }}</p>
                            </div>

                            <div class="flex flex-col items-center swiper-slide">
                                <p class="mb-1 text-xs">{{ $course->completedMaterialCount() / $course->materialCount() * 100 }}%</p>
                                <div class="progress" data-progress="{{ number_format($course->completedMaterialCount() / $course->materialCount(), 1) }}">
                                    <img src="{{ $course->image }}" class="rounded-full h-14 w-14" alt="Course Image">
                                </div>
                                <p>{{ $course->name }}</p>
                            </div>

                            <div class="flex flex-col items-center swiper-slide">
                                <p class="mb-1 text-xs">{{ $course->completedMaterialCount() / $course->materialCount() * 100 }}%</p>
                                <div class="progress" data-progress="{{ number_format($course->completedMaterialCount() / $course->materialCount(), 1) }}">
                                    <img src="{{ $course->image }}" class="rounded-full h-14 w-14" alt="Course Image">
                                </div>
                                <p>{{ $course->name }}</p>
                            </div>
                    @empty
                        <p>No completed courses</p>   
                    @endforelse
                </div>
            </div>
            <div id="completed-prev" class="absolute left-0 hidden text-purple-700 md:left-16 hover:cursor-pointer md:block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div id="completed-next" class="absolute right-0 hidden text-purple-700 md:right-16 hover:cursor-pointer md:block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </section>

        <div class="w-3/4">

        </div>
    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>    
@endsection

@section('js')
    <script src="/js/progressbar.js"></script>
    <script>
        window.addEventListener('load', function() {
            var progressBars = document.querySelectorAll('.progress');
        
            progressBars.forEach(function(progressBar) {
                var progress = parseFloat(progressBar.getAttribute('data-progress'));
                var progressBarCircle = new ProgressBar.Circle(progressBar, {
                strokeWidth: 6,
                easing: 'easeInOut',
                duration: 1800,
                color: '#9333ea',
                trailColor: '#eee',
                trailWidth: 1,
                svgStyle: null
                });

                progressBarCircle.animate(progress);
            });
        });
  </script>

  <script>
    const swiper = new Swiper('.swiper', {
    slidesPerView: 4,   
    // Optional parameters
    direction: 'horizontal',

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '#completed-next',
        prevEl: '#completed-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

    breakpoints: {
        640: {
            slidesPerView: 4,
            spaceBetween: 0,
        }, 

        768: {
            slidesPerView: 6,
            spaceBetween: 0,
        }, 
    }

    });

const prevArrow = document.querySelector('#completed-prev');

// Hide the previous arrow by default
prevArrow.style.display = 'none';

swiper.on('slideChange', function() {
  if (swiper.activeIndex > 0) {
    prevArrow.style.display = 'block';
  } else {
    prevArrow.style.display = 'none';
  }
});

if (swiper.isBeginning) {
  prevArrow.style.display = 'none';
}
  </script>

  <script>
    var elementIds = ['completed-next', 'completed-prev'];

    elementIds.forEach(function(id) {
    var element = document.getElementById(id);
    element.addEventListener('mousedown', function(e) {
        e.preventDefault();
    }, false);
    });
  </script>
@endsection