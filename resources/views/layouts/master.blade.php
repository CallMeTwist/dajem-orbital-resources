<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Real Estate, Real Estate Development, Estate Surveyors, Enugu" />
    <meta name="author" content="The Pragmatic Programmer" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />

    <title>{{ $title ?? '' }} | {{ config('app.name') }}</title>
    <link rel="stylesheet preload" as=style href="/assets/css/preload.min.css">
    <link rel="stylesheet preload" as=style href="/assets/css/icomoon.css">
    <link rel="stylesheet preload" as=style href="/assets/css/libs.min.css">
    <link rel="stylesheet preload" as=style href="/kit/assets/css/helpers.css">

    @yield('css')

    <link rel=stylesheet href="/assets/css/floatbutton.min.css">
</head>
<body>
    <header class="header" {!! $tags !!}>
        <div class="container d-flex">
            <a class=brand href="/">
                <img class="img-fluid" src="/assets/img/logo.png" alt="" style="max-width: 150px;">
            </a>
            <nav class="header_nav collapse" id="headerMenu">
                <ul class=header_nav-list>
                    <li class=header_nav-list_item>
                        <a class="nav-item nav-link" href="/" data-page=home data-single=true><span class=nav-item_text>Home</span></a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item nav-link" href="{{ route('about') }}" data-page=about data-single=true><span class=nav-item_text>Who We Are</span></a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item nav-link" href="{{ route('services') }}" data-page=services data-single=true><span class=nav-item_text>What We Do</span></a>
                    </li>
                    <li class="header_nav-list_item dropdown"><a class="nav-link nav-item dropdown-toggle" href="#" data-bs-toggle=collapse data-bs-target=#projectsMenu data-trigger=dropdown data-page-parent=projects data-main-link=true aria-expanded=false aria-controls=projectsMenu><span class=nav-item_text>Our Assets </span><span class="icon icon-chevron_right"></span></a>
                        <div
                            class="dropdown-menu collapse" id=projectsMenu>
                            <ul class=dropdown-list>
                                <li class=list-item><a class="dropdown-item nav-item" data-page=projects data-page-parent=services href="{{ route('projects') }}" data-main=true>Projects</a></li>
                                <li class=list-item><a class="dropdown-item nav-item" data-page=single-service data-page-parent=services href="#">Inspections</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=header_nav-list_item>
                        <a class="nav-item nav-link" href="{{ route('contact') }}" data-page=contacts data-single=true><span class=nav-item_text>Contact Us</span></a>
                    </li>
                </ul>
            </nav>
            <button class=header_trigger data-bs-toggle=collapse data-bs-target=#headerMenu aria-controls=headerMenu aria-expanded=false>
                <span class="line line--short"></span>
                <span class=line></span> <span class="line line--short"></span>
                <span class=line></span>
            </button>
        </div>
    </header>

    @yield('header')

    <main>

        @yield('content')

    </main>

    <footer class="footer primary-bg">
        <div class=container>
            <div class=footer_main>
                <div class=footer_main-block><a class=brand href=/><img class=brand_logo src="/assets/img/logo2.png" alt="Dajem" style="width: 150px; height: auto;"></a>
                    <p class="footer_main-block_subtitle footer_main-block_subtitle--brand">Providing Excellence and Innovation in Every Project. Your Trusted Partner for All Real Estate Needs.</p>
                </div>
                <div class=footer_main-block>
                    <h4 class=footer_main-block_title>Contacts</h4>
                    <div class=group-wrapper><i class="icon-call icon"></i>
                        <div class=group><a href=tel:{{ get_settings()->phone }}>{{ get_settings()->phone }}</a> <a href=tel:{{ get_settings()->help_line }}>{{ get_settings()->help_line }}</a></div>
                    </div>
                    <div class="group-wrapper">
                        <i class="icon-location icon"></i>
                        <div class="group">
                            <span>
                                @php
                                    $addressParts = explode(',', get_settings()->address, 5);
                                @endphp
                                @foreach($addressParts as $part)
                                    {{ trim($part) }}@if(!$loop->last)<br>@endif
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>
                <div class=footer_main-block>
                    <h4 class=footer_main-block_title>Company</h4>
                    <ul class=footer_main-block_nav>
                        <li class=list-item><a class="nav-link link" href={{ route('about') }} data-page=about><i class="icon-chevron_right icon"></i> About</a></li>
                        <li class=list-item><a class="nav-link link" href={{ route('services') }} data-page=services><i class="icon-chevron_right icon"></i> Services</a></li>
                        <li class=list-item><a class="nav-link link" href={{ route('projects') }} data-page=projects><i class="icon-chevron_right icon"></i> Projects</a></li>
                        <li class=list-item><a class="nav-link link" href={{ route('welcome') }} data-page=home><i class="icon-chevron_right icon"></i> Home</a></li>
                    </ul>
                </div>
                <div class=footer_main-block>
                    <h4 class=footer_main-block_title>Subscribe to Our News</h4>
                    <p class="footer_main-block_subtitle footer_main-block_subtitle--newsletter">Find out about the last days and the latest promotions of our Corporation</p>
                    <form class=footer_main-block_form data-type=newsletter action=# method=POST name=newsletterForm id=newsletterForm><input class="field required" name=newsletterEmail id=newsletterEmail type=text placeholder=Email data-type=email> <button class="btn btn--submit btn--static" type=submit aria-label=Subscribe><span class=text>Subscribe</span> <i class="icon-paperplane icon"></i></button></form>
                </div>
            </div>
            <div class=footer_secondary>
                <p class=footer_secondary-copyright><span>&copy; Dajem Orbital Resources</span> <span>All rights reserved Copyrights <span id=currentYear></span></span>
                </p>
                <ul class=socials>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=Facebook><i class=icon-facebook></i></a></li>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=Instagram><i class=icon-instagram></i></a></li>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=Twitter><i class=icon-twitter></i></a></li>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=WhatsApp><i class=icon-whatsapp></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <button id=scrollTrigger type=button><i class="icon icon-arrow_right"></i></button>

    <script src=https://www.youtube.com/player_api></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/assets/js/common.min.js"></script>
    <script src="/assets/js/index.min.js"></script>
    <script src="assets/js/demo.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'undefined');
    </script>

    @yield('js')

</body>
</html>
