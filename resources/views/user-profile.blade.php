@extends('layouts.main')

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
  </style>

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[22%] font-abel mb-5">

        <div class="w-full pt-4">
            <p class="ml-16 text-sm text-center text-white rounded-md w-44 lg:ml-0 bg-main">
                <span class="">Member since: </span>
                {{ $user->created_at->diffForHumans() }}
            </p>
        </div>

        <section class="w-full mt-8">
            <div class="flex items-start justify-around w-4/5">
                <div class="">
                    <img class="rounded-full w-44 h-44" src="/storage/{{ $user->profile_photo_path }}" alt="User Avatar">
                </div>
                
                <div class="flex flex-col">
                    <div class="flex items-center">
                        <h1 class="text-5xl">{{ $user->username }}</h1>
                        <button class="px-4 ml-2 text-sm text-white rounded-md bg-main">Follow</button>
                    </div>

                    <div>
                        <p class="text-lg ">100 friends</p>

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

        <section class="w-3/4">
            <div class="flex justify-center py-4 mt-8 space-x-5">
                @forelse ($courses as $course)
                
                        <div class="flex flex-col items-center">
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
        </section>

        <div class="w-3/4">

        </div>
    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>    
@endsection

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