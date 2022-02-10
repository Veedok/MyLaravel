<!DOCTYPE html>
<html lang="en">



<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <script src="{{ asset('js/j.js') }}"></script>
    <x-header></x-header>
            <x-nav></x-nav>
    <main>
        @yield('content')
        <div class="black_line">
            <div class="container black_line_container">
                <div class="advantages">
                    <div class="icon_advantages_1"></div>
                    <h2>Free Delivery</h2><span>Worldwide delivery on all. Authorit tively morph next-generation innov
                        tion with extensive models.</span>
                </div>
                <div class="advantages">
                    <div class="icon_advantages_2"></div>
                    <h2>Sales &amp; discounts</h2><span>Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion with extensive models.</span>
                </div>
                <div class="advantages">
                    <div class="icon_advantages_3"></div>
                    <h2>Quality assurance</h2><span>Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion with extensive models.</span>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
    <script src="https://kit.fontawesome.com/5b30aa6394.js" crossorigin="anonymous"></script>
</body>

</html>
@stack('js')
