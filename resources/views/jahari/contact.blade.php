@extends('jahari.main')

@section('title', 'Contact - JAHARI STAMPLEY')

@section('content')
    <body class="bg-[#100806]">
        <section class="relative flex flex-col w-full">
            @include('jahari.nav')

            <div class="flex flex-col items-center text-white">
                <h1 class="mt-10 mb-8 tracking-wider text-8xl font-abel">THE SECRET PLACE</h1>
                <p class="mb-4 font-mono">Hello. You've arrived. Make a wish below.</p>
                <p class="font-mono">(bookings, questions, updates, etc.)</p>

                <div class="my-5 ticker_wrap">
                    <div class="ticker">
                        <a href="https://linktr.ee/MuttyTones" class="my-16 overflow-visible text-4xl text-white skew-y-3 ticker_item font-abel">~ [FREE MOBILE APP] ~</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col items-center w-full text-white">
            <form action="">
                <p class="font-source">Email Address *</p>
                <p class="font-source text-[#746f6e] text-sm py-1.5">A personal invitation to my FREE, NEW MUSIC APP: PIANO CHRONICLES! (+ OTHER *SECRET* UPDATES)</p>
                <input class="w-full h-10 pl-2 font-mono text-black" type="text">
                <p class="mt-2 font-source">Say Anything</p>
                <p class="font-source text-[#746f6e] text-sm py-1.5">Or say nothing</p>
                <textarea class="w-full p-2 font-mono text-black placeholder:font-source" name="" id="" cols="30" rows="5" placeholder="What will you choose?"></textarea>
                
                <div class="flex justify-center w-full mt-6">
                    <input type="submit" class="mx-auto font-source border-solid border-2 border-white py-2.5 px-12 hover:text-black hover:bg-white" value="SUBMIT">
                </div>
            </form>
        </section>

        <section class="w-full bg-[#1f1a19] flex flex-col items-center mt-16">
            <h2 class="my-10 text-5xl tracking-wider text-white font-abel">INSTAGRAM FEED</h2>
            <div class="z-10 w-3/4 mb-10" data-mc-src="687b8b53-337c-4b59-9e99-97684866fdae#instagram"></div>   
        </section>

        <section class="flex flex-col items-center w-full group">
            <div class="flex mt-10 space-x-2">
                <a href="https://www.facebook.com/jaharistampleymusic/" class="border-white border-2 p-1.5 hover:bg-white group/fb">
                    <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg class="w-6 h-6 fill-white group-hover/fb:fill-black" enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>
                </a>
                <a href="https://www.instagram.com/jaharistampleymusic/" class="border-white border-2 p-1.5 hover:bg-white group/ig">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg class="w-6 h-6 fill-white group-hover/ig:fill-black" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
                <g>
                    <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
                        c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z"/>
                    <circle cx="41.5" cy="16.4" r="2.9"/>
                    <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
                        h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
                        s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
                        c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z"/>
                    </g></svg>
                </a>
                <a href="https://www.youtube.com/channel/UCHefvAgFk-Dpi2JmB3Veu1g?view_as=subscriber" class="border-white border-2 p-1.5 hover:bg-white group/yt">
                    <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg class="w-6 h-6 fill-white group-hover/yt:fill-black" height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M501.303,132.765c-5.887,-22.03 -23.235,-39.377 -45.265,-45.265c-39.932,-10.7 -200.038,-10.7 -200.038,-10.7c0,0 -160.107,0 -200.039,10.7c-22.026,5.888 -39.377,23.235 -45.264,45.265c-10.697,39.928 -10.697,123.238 -10.697,123.238c0,0 0,83.308 10.697,123.232c5.887,22.03 23.238,39.382 45.264,45.269c39.932,10.696 200.039,10.696 200.039,10.696c0,0 160.106,0 200.038,-10.696c22.03,-5.887 39.378,-23.239 45.265,-45.269c10.696,-39.924 10.696,-123.232 10.696,-123.232c0,0 0,-83.31 -10.696,-123.238Zm-296.506,200.039l0,-153.603l133.019,76.802l-133.019,76.801Z" style="fill-rule:nonzero;"/></svg>
                </a>
                <a href="https://www.youtube.com/channel/UCHefvAgFk-Dpi2JmB3Veu1g?view_as=subscriber" class="border-white border-2 p-1.5 hover:bg-white flex items-center group/b">
                    <svg class="w-5 h-5 fill-white group-hover/b:fill-black" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><title>Bandsintown icon</title><path d="M18.783 0H24v12h-5.217V0zm-6.261 5h5.217v7h-5.217V5zM6.26 5h5.217v7H6.261V5zM24 24H0V0h5.217v19h13.566v-1H6.26v-5H24v11Z"/></svg>
                </a>
            </div>
            
            <p class="my-10 text-sm text-white font-source">Powered by The Power®</p>
        </section>
@endsection