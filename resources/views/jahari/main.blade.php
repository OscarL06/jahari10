<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/index.jpg">     
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
    <style>
    .bg-image {
        background-image: url('/images/image.jpg');
    }
    </style>
</head>
    @yield('content')
    
    <script src="https://cdn2.woxo.tech/a.js#639e8aa76567adc75a462553" async data-usrc></script>
    <script>
        const element = document.querySelector('nav');
        const logo = document.getElementById('logo');

        const threshold = 730;
        let cssChanged = false;

        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset;

            if (scrollPosition > threshold && !cssChanged) {
                element.classList.remove('h-44')
                element.classList.add('fixed', 'bg-[#100806]', 'h-10');
                logo.classList.add('hidden');
                cssChanged = true;
            } else if (scrollPosition <= threshold && cssChanged) {
                element.classList.remove('fixed', 'bg-[#100806]', 'h-10');
                logo.classList.remove('hidden');
                element.classList.add('h-44')
                cssChanged = false;
            }
        });
    </script>
    <script>AOS.init();</script>    
</body>
</html>    