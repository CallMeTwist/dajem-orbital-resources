@extends('layouts.master', [
    $title = 'About Us',
    $tags = "data-page='about' data-page-parent='about'"
])

@section('css')

    <link rel="stylesheet" href="/assets/css/about.min.css">

@endsection

@section('header')

    <header class="page primary-bg">
        <div class="container">
            <div class="section_header">
                <span class="subtitle subtitle--extended">Building communities</span>
                <h1 class="title">About</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs_item"><a href="/">Home</a></li>
                    <li class="breadcrumbs_item breadcrumbs_item--current"><span>About</span></li>
                </ul>
            </div>
        </div>
        <div class="media">
            <picture>
                <img class="lazy" data-src="/assets/img/plan.png" src="/assets/img/plan.png" alt="media">
            </picture>
        </div>
    </header>

@endsection

@section('content')

    <section class="about section">
        <div class="container">
            <div class="main">
                <div class="section_header"><span class=subtitle data-aos=fade-down>Who we are</span>
                    <h2 class="title" data-aos=fade-right>Bringing <span class=highlight>Your Ideas</span> and Innovations to Life</h2>
                    <p class="text" data-aos=fade-up data-aos-delay=50>Welcome to {{ config('app.name') }}, where your real estate dreams turn into reality. With years of experience in the industry, we are dedicated to providing exceptional real estate services tailored to meet your unique needs. Whether you're buying, selling, or investing, our team of expert professionals is committed to guiding you through every step of the process with transparency, integrity, and a deep understanding of the market.</p>
                </div>
                <ul class="checklist">
                    <li class=checklist_item data-aos=fade-up><i class="icon-arrow_right icon"></i> Enhancing quality of life</li>
                    <li class=checklist_item data-aos=fade-up data-aos-delay=50><i class="icon-arrow_right icon"></i> Comprehensive solutions at your fingertips</li>
                    <li class=checklist_item data-aos=fade-up data-aos-delay=100><i class="icon-arrow_right icon"></i> Innovation in every project</li>
                    <li class=checklist_item data-aos=fade-up data-aos-delay=100><i class="icon-arrow_right icon"></i> Excellence in real estate and land development</li>
                </ul>
                <div class="wrapper" data-aos="fade-up"><a class="btn" href="{{ route('contact') }}">Consult now</a></div>
            </div>
            <div class="" data-aos="zoom-in" data-aos-duration="700">
                <picture>
                    <img class="" data-src="/assets/img/dajemimage.png" src="/assets/img/dajemimage.png" alt="About Us">
                </picture>
                <div class="text-right mt-3">
                    <h4 class="highlight">Surv. Ekpete-Edeh Chukwudi Emmanuel</h4>
                    <p><i>CEO & Principal Consultant</i></p>
                </div>
            </div>
        </div>
    </section>

    <section class="quote primary-bg section">
        <div class="container">
            <div class="quote_header section_header">
                <svg class="quote_header-icon" width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0" maskUnits="userSpaceOnUse" x="0" y="0" width="160" height="160"><path fill-rule="evenodd" clip-rule="evenodd" d="M90.7095 160H69.3158C68.7996 160 68.299 159.825 67.8942 159.504C67.49 159.184 67.2065 158.736 67.0896 158.233L63.476 142.704C57.8216 141.218 52.3954 138.971 47.3457 136.025L33.8281 144.457C33.3898 144.731 32.8717 144.848 32.3581 144.79C31.8447 144.731 31.3662 144.5 31.0007 144.135L15.8672 128.994C15.5025 128.629 15.272 128.152 15.213 127.639C15.1541 127.127 15.2703 126.609 15.5426 126.171L23.9723 112.658C21.0277 107.607 18.7817 102.18 17.2958 96.5255L1.77142 92.9368C1.26798 92.8205 0.818802 92.5376 0.497106 92.1328C0.175415 91.7286 0.000186552 91.2274 0 90.7106V69.2892C0.000186552 68.7724 0.175415 68.2712 0.497106 67.8664C0.818802 67.4622 1.26798 67.1793 1.77142 67.063L17.2958 63.4743C18.7827 57.8211 21.0295 52.3956 23.9746 47.3462L15.5426 33.8285C15.2688 33.3902 15.1516 32.872 15.2101 32.3585C15.2687 31.8451 15.4995 31.3666 15.8649 31.0011L31.003 15.8628C31.3685 15.4983 31.8468 15.2682 32.3598 15.2101C32.8727 15.152 33.3903 15.2693 33.8281 15.5428L47.3411 23.9725C52.3913 21.0276 57.8173 18.7808 63.4711 17.2937L67.0846 1.76461C67.2027 1.26165 67.4875 0.813452 67.8924 0.493013C68.2972 0.172575 68.799 -0.00120015 69.3158 6.23909e-06H90.7095C91.2263 0.000192793 91.7275 0.175423 92.1317 0.497118C92.5365 0.818818 92.8195 1.268 92.9357 1.77145L96.5244 17.296C102.178 18.783 107.603 21.0298 112.652 23.9748L126.17 15.5428C126.608 15.269 127.126 15.1517 127.64 15.2103C128.153 15.2688 128.632 15.4997 128.997 15.8651L144.135 31.0034C144.5 31.369 144.73 31.8472 144.788 32.3601C144.846 32.8732 144.729 33.3907 144.455 33.8285L136.026 47.3416C138.971 52.391 141.217 57.8167 142.704 63.4693L158.229 67.058C158.732 67.1743 159.182 67.4579 159.503 67.8621C159.825 68.2663 160 68.7681 160 69.2842V90.7063C160 91.223 159.825 91.7242 159.503 92.1284C159.182 92.5326 158.732 92.8162 158.229 92.9325L142.704 96.5211C141.217 102.174 138.971 107.599 136.026 112.649L144.455 126.171C144.729 126.609 144.846 127.128 144.788 127.642C144.729 128.155 144.498 128.633 144.133 128.998L128.995 144.137C128.629 144.502 128.151 144.732 127.638 144.79C127.125 144.848 126.608 144.731 126.17 144.457L112.657 136.027C107.607 138.972 102.182 141.219 96.5287 142.706L92.9407 158.231C92.8238 158.735 92.5396 159.184 92.1342 159.505C91.7287 159.827 91.2269 160.001 90.7095 160ZM71.1303 155.428H88.89L92.3848 140.313C92.4806 139.899 92.6895 139.521 92.988 139.219C93.2871 138.917 93.6639 138.705 94.0762 138.605C100.221 137.132 106.095 134.699 111.482 131.396C111.843 131.173 112.259 131.055 112.684 131.055C113.109 131.055 113.526 131.173 113.887 131.396L127.045 139.607L139.617 127.035L131.404 113.888C131.181 113.527 131.062 113.11 131.062 112.685C131.062 112.261 131.181 111.845 131.404 111.483C134.708 106.097 137.141 100.222 138.613 94.0773C138.713 93.665 138.925 93.2882 139.226 92.9891C139.528 92.6906 139.907 92.4816 140.321 92.3859L155.426 88.8911V71.1087L140.311 67.6133C139.898 67.5182 139.519 67.3092 139.217 67.0107C138.916 66.7116 138.703 66.3348 138.604 65.9219C137.132 59.7774 134.699 53.903 131.395 48.5165C131.171 48.1553 131.053 47.7389 131.053 47.3142C131.053 46.8895 131.171 46.4732 131.395 46.1119L139.605 32.9531L127.034 20.3817L113.887 28.5942C113.525 28.8162 113.109 28.9336 112.684 28.9336C112.26 28.9336 111.843 28.8162 111.482 28.5942C106.096 25.2904 100.221 22.8574 94.0762 21.3851C93.6639 21.2857 93.2871 21.0732 92.988 20.7716C92.6895 20.4701 92.4806 20.0913 92.3848 19.6777L88.89 4.57144H71.1303L67.6125 19.6891C67.5168 20.1023 67.3078 20.4806 67.0093 20.7818C66.7102 21.0829 66.334 21.295 65.9211 21.3943C59.7767 22.8666 53.9024 25.2996 48.5159 28.6034C48.1547 28.8268 47.7384 28.9451 47.3137 28.9451C46.8889 28.9451 46.4726 28.8268 46.1114 28.6034L32.9527 20.3931L20.3814 32.9645L28.5916 46.1234C28.815 46.4846 28.9334 46.9009 28.9334 47.3257C28.9334 47.7504 28.815 48.1667 28.5916 48.5279C25.2878 53.9144 22.8549 59.7886 21.3826 65.9337C21.2831 66.346 21.0707 66.7228 20.7692 67.0219C20.4676 67.3204 20.0887 67.5294 19.6751 67.6251L4.57139 71.1087V88.8911L19.6866 92.3859C20.1002 92.4816 20.479 92.6906 20.7805 92.9891C21.0821 93.2882 21.2945 93.665 21.394 94.0773C22.8663 100.222 25.2993 106.097 28.603 111.483C28.8265 111.845 28.9448 112.261 28.9448 112.685C28.9448 113.11 28.8265 113.527 28.603 113.888L20.3929 127.046L32.9641 139.618L46.1228 131.408C46.4841 131.184 46.9004 131.066 47.3251 131.066C47.7498 131.066 48.1661 131.184 48.5274 131.408C53.9144 134.711 59.7885 137.143 65.9329 138.617C66.3452 138.716 66.722 138.928 67.0205 139.23C67.319 139.531 67.5286 139.909 67.6243 140.322L71.1303 155.428Z" fill="white"></path></mask><g mask="url(#mask0)"><path d="M67.8942 159.504L67.2725 160.288L67.273 160.288L67.8942 159.504ZM67.0896 158.233L68.0636 158.006L68.0635 158.006L67.0896 158.233ZM63.476 142.704L64.45 142.477L64.3134 141.89L63.7303 141.737L63.476 142.704ZM47.3457 136.025L47.8496 135.161L47.3284 134.857L46.8164 135.176L47.3457 136.025ZM33.8281 144.457L33.2988 143.608L33.2985 143.609L33.8281 144.457ZM32.3581 144.79L32.245 145.783H32.245L32.3581 144.79ZM31.0007 144.135L30.2935 144.842L30.294 144.842L31.0007 144.135ZM15.8672 128.994L15.1599 129.701L15.16 129.701L15.8672 128.994ZM15.213 127.639L16.2065 127.525L16.2065 127.525L15.213 127.639ZM15.5426 126.171L14.6942 125.642L14.6936 125.643L15.5426 126.171ZM23.9723 112.658L24.8207 113.187L25.14 112.676L24.8362 112.154L23.9723 112.658ZM17.2958 96.5255L18.263 96.2714L18.1095 95.6872L17.521 95.5512L17.2958 96.5255ZM1.77142 92.9368L1.99665 91.9625L1.99648 91.9625L1.77142 92.9368ZM0.497106 92.1328L1.28001 91.5106L1.27955 91.5101L0.497106 92.1328ZM0 90.7106H-1L-1 90.711L0 90.7106ZM0 69.2892L-1 69.2888V69.2892H0ZM0.497106 67.8664L-0.285332 67.2437L-0.285804 67.2443L0.497106 67.8664ZM1.77142 67.063L1.99648 68.0373L1.99665 68.0373L1.77142 67.063ZM17.2958 63.4743L17.521 64.4486L18.1093 64.3126L18.2629 63.7287L17.2958 63.4743ZM23.9746 47.3462L24.8384 47.8501L25.1423 47.3289L24.823 46.817L23.9746 47.3462ZM15.5426 33.8285L16.3911 33.2993L16.3907 33.2986L15.5426 33.8285ZM15.2101 32.3585L16.2037 32.4719L16.2037 32.4717L15.2101 32.3585ZM15.8649 31.0011L15.1578 30.294L15.8649 31.0011ZM31.003 15.8628L30.2969 15.1548L30.2959 15.1557L31.003 15.8628ZM32.3598 15.2101L32.4723 16.2038L32.4724 16.2038L32.3598 15.2101ZM33.8281 15.5428L33.2983 16.3909L33.2988 16.3913L33.8281 15.5428ZM47.3411 23.9725L46.8118 24.821L47.3237 25.1403L47.8448 24.8364L47.3411 23.9725ZM63.4711 17.2937L63.7254 18.2608L64.3084 18.1075L64.445 17.5203L63.4711 17.2937ZM67.0846 1.76461L66.1111 1.53592L66.1106 1.53797L67.0846 1.76461ZM69.3158 6.23909e-06L69.3134 1.00001H69.3158V6.23909e-06ZM90.7095 6.23909e-06L90.7099 -0.999994H90.7095V6.23909e-06ZM92.1317 0.497118L91.509 1.27955L91.5095 1.28001L92.1317 0.497118ZM92.9357 1.77145L91.9614 1.9965L91.9614 1.99667L92.9357 1.77145ZM96.5244 17.296L95.5501 17.5212L95.6861 18.1095L96.27 18.2631L96.5244 17.296ZM112.652 23.9748L112.149 24.8386L112.67 25.1426L113.182 24.8233L112.652 23.9748ZM126.17 15.5428L126.699 16.3913L126.7 16.3906L126.17 15.5428ZM127.64 15.2103L127.753 14.2168L127.753 14.2168L127.64 15.2103ZM128.997 15.8651L128.289 16.5718L128.29 16.5722L128.997 15.8651ZM144.135 31.0034L144.843 30.2968L144.842 30.2963L144.135 31.0034ZM144.788 32.3601L143.794 32.4722L143.794 32.4733L144.788 32.3601ZM144.455 33.8285L143.607 33.2986L143.607 33.2992L144.455 33.8285ZM136.026 47.3416L135.177 46.8124L134.858 47.3243L135.162 47.8454L136.026 47.3416ZM142.704 63.4693L141.737 63.7237L141.891 64.3076L142.479 64.4436L142.704 63.4693ZM158.229 67.058L158.004 68.0323L158.229 67.058ZM158.229 92.9325L158.004 91.9582L158.229 92.9325ZM142.704 96.5211L142.479 95.5468L141.891 95.6828L141.737 96.2668L142.704 96.5211ZM136.026 112.649L135.162 112.145L134.858 112.666L135.177 113.178L136.026 112.649ZM144.455 126.171L143.607 126.7L143.607 126.701L144.455 126.171ZM144.788 127.642L145.781 127.755L145.782 127.755L144.788 127.642ZM144.133 128.998L144.84 129.706L144.133 128.998ZM128.995 144.137L129.702 144.844L129.702 144.844L128.995 144.137ZM127.638 144.79L127.526 143.796L127.525 143.796L127.638 144.79ZM126.17 144.457L126.7 143.609L126.699 143.608L126.17 144.457ZM112.657 136.027L113.186 135.179L112.674 134.859L112.153 135.163L112.657 136.027ZM96.5287 142.706L96.2744 141.739L95.6904 141.892L95.5544 142.481L96.5287 142.706ZM92.9407 158.231L93.9148 158.457L93.915 158.456L92.9407 158.231ZM71.1303 155.428L70.1562 155.654L70.3358 156.428H71.1303V155.428ZM88.89 155.428V156.428H89.6852L89.8643 155.653L88.89 155.428ZM92.3848 140.313L91.4106 140.087L91.4105 140.088L92.3848 140.313ZM92.988 139.219L92.2779 138.515L92.2772 138.516L92.988 139.219ZM94.0762 138.605L93.8431 137.633L93.8416 137.633L94.0762 138.605ZM111.482 131.396L112.005 132.249L112.008 132.247L111.482 131.396ZM113.887 131.396L114.416 130.548L114.412 130.546L113.887 131.396ZM127.045 139.607L126.516 140.455L127.19 140.876L127.752 140.314L127.045 139.607ZM139.617 127.035L140.324 127.742L140.886 127.18L140.465 126.505L139.617 127.035ZM131.404 113.888L130.553 114.414L130.556 114.418L131.404 113.888ZM131.404 111.483L132.255 112.009L132.256 112.006L131.404 111.483ZM138.613 94.0773L137.641 93.8427L137.641 93.8443L138.613 94.0773ZM139.226 92.9891L138.523 92.2783L138.521 92.2798L139.226 92.9891ZM140.321 92.3859L140.095 91.4116L140.095 91.4116L140.321 92.3859ZM155.426 88.8911L155.652 89.8653L156.426 89.6861V88.8911H155.426ZM155.426 71.1087H156.426V70.3136L155.652 70.1344L155.426 71.1087ZM140.311 67.6133L140.537 66.639L140.536 66.6388L140.311 67.6133ZM139.217 67.0107L138.513 67.7208L138.514 67.7215L139.217 67.0107ZM138.604 65.9219L137.631 66.1548L137.632 66.1561L138.604 65.9219ZM131.395 48.5165L132.247 47.9936L132.245 47.9908L131.395 48.5165ZM131.395 46.1119L130.546 45.5826L130.544 45.5862L131.395 46.1119ZM139.605 32.9531L140.453 33.4824L140.874 32.808L140.312 32.246L139.605 32.9531ZM127.034 20.3817L127.741 19.6746L127.178 19.1122L126.504 19.5336L127.034 20.3817ZM113.887 28.5942L114.41 29.4467L114.417 29.4424L113.887 28.5942ZM111.482 28.5942L112.006 27.7422L112.005 27.7418L111.482 28.5942ZM94.0762 21.3851L93.8416 22.3572L93.8432 22.3576L94.0762 21.3851ZM92.988 20.7716L92.2773 21.4751L92.2779 21.4758L92.988 20.7716ZM92.3848 19.6777L91.4105 19.9031L91.4106 19.9033L92.3848 19.6777ZM88.89 4.57144L89.8643 4.34605L89.6851 3.57144H88.89V4.57144ZM71.1303 4.57144V3.57144H70.3363L70.1563 4.3448L71.1303 4.57144ZM67.6125 19.6891L66.6385 19.4625L66.6384 19.4633L67.6125 19.6891ZM67.0093 20.7818L67.7188 21.4865L67.7196 21.4857L67.0093 20.7818ZM65.9211 21.3943L66.1541 22.3668L66.155 22.3666L65.9211 21.3943ZM48.5159 28.6034L47.9931 27.7509L47.9899 27.7529L48.5159 28.6034ZM46.1114 28.6034L45.582 29.4518L45.5854 29.4538L46.1114 28.6034ZM32.9527 20.3931L33.482 19.5447L32.8076 19.1239L32.2456 19.686L32.9527 20.3931ZM20.3814 32.9645L19.6743 32.2574L19.1123 32.8195L19.533 33.4939L20.3814 32.9645ZM28.5916 46.1234L29.4421 45.5973L29.44 45.594L28.5916 46.1234ZM28.5916 48.5279L27.7411 48.0019L27.7392 48.0051L28.5916 48.5279ZM21.3826 65.9337L22.3547 66.1683L22.3551 66.1667L21.3826 65.9337ZM20.7692 67.0219L21.4726 67.7327L21.4734 67.7319L20.7692 67.0219ZM19.6751 67.6251L19.8999 68.5995L19.9007 68.5993L19.6751 67.6251ZM4.57139 71.1087L4.34664 70.1343L3.57139 70.3131V71.1087H4.57139ZM4.57139 88.8911H3.57139V89.6862L4.34612 89.8654L4.57139 88.8911ZM19.6866 92.3859L19.9122 91.4116L19.9119 91.4116L19.6866 92.3859ZM20.7805 92.9891L21.4847 92.279L21.484 92.2784L20.7805 92.9891ZM21.394 94.0773L22.3665 93.8443L22.3661 93.8428L21.394 94.0773ZM28.603 111.483L27.7506 112.006L27.7525 112.009L28.603 111.483ZM28.603 113.888L29.4514 114.417L29.4535 114.414L28.603 113.888ZM20.3929 127.046L19.5445 126.517L19.1237 127.191L19.6858 127.754L20.3929 127.046ZM32.9641 139.618L32.257 140.325L32.8191 140.888L33.4935 140.467L32.9641 139.618ZM46.1228 131.408L45.5961 130.558L45.5935 130.56L46.1228 131.408ZM48.5274 131.408L48.0006 132.258L48.0047 132.261L48.5274 131.408ZM65.9329 138.617L65.6997 139.59L65.6997 139.59L65.9329 138.617ZM67.0205 139.23L66.3098 139.933L66.3105 139.934L67.0205 139.23ZM67.6243 140.322L66.6501 140.548L66.6502 140.548L67.6243 140.322ZM90.7095 159H69.3158V161H90.7095V159ZM69.3158 159C69.0258 159 68.744 158.902 68.5154 158.721L67.273 160.288C67.8541 160.749 68.5734 161 69.3158 161V159ZM68.516 158.721C68.2885 158.541 68.1293 158.289 68.0636 158.006L66.1155 158.459C66.2836 159.182 66.6915 159.826 67.2725 160.288L68.516 158.721ZM68.0635 158.006L64.45 142.477L62.5021 142.931L66.1156 158.459L68.0635 158.006ZM63.7303 141.737C58.1634 140.274 52.8211 138.062 47.8496 135.161L46.8417 136.888C51.9697 139.88 57.4799 142.162 63.2218 143.671L63.7303 141.737ZM46.8164 135.176L33.2988 143.608L34.3574 145.305L47.875 136.873L46.8164 135.176ZM33.2985 143.609C33.0515 143.763 32.7598 143.829 32.4712 143.796L32.245 145.783C32.9835 145.867 33.7281 145.698 34.3577 145.305L33.2985 143.609ZM32.4713 143.796C32.1831 143.763 31.9136 143.633 31.7074 143.427L30.294 144.842C30.8188 145.366 31.5063 145.699 32.245 145.783L32.4713 143.796ZM31.708 143.428L16.5745 128.287L15.16 129.701L30.2935 144.842L31.708 143.428ZM16.5746 128.287C16.3692 128.082 16.2396 127.813 16.2065 127.525L14.2195 127.753C14.3043 128.491 14.6358 129.176 15.1599 129.701L16.5746 128.287ZM16.2065 127.525C16.1733 127.237 16.2387 126.946 16.3917 126.7L14.6936 125.643C14.3019 126.273 14.1348 127.017 14.2196 127.753L16.2065 127.525ZM16.3911 126.701L24.8207 113.187L23.1238 112.129L14.6942 125.642L16.3911 126.701ZM24.8362 112.154C21.9371 107.182 19.7259 101.838 18.263 96.2714L16.3286 96.7797C17.8375 102.522 20.1182 108.033 23.1084 113.162L24.8362 112.154ZM17.521 95.5512L1.99665 91.9625L1.5462 93.9111L17.0706 97.4998L17.521 95.5512ZM1.99648 91.9625C1.71281 91.8969 1.46053 91.7378 1.28001 91.5106L-0.285798 92.7549C0.177077 93.3374 0.823155 93.7441 1.54637 93.9112L1.99648 91.9625ZM1.27955 91.5101C1.09865 91.2828 1.0001 91.0009 1 90.7103L-1 90.711C-0.999732 91.4538 -0.74782 92.1744 -0.285338 92.7555L1.27955 91.5101ZM1 90.7106V69.2892H-1V90.7106H1ZM1 69.2896C1.0001 68.999 1.09858 68.7169 1.28002 68.4885L-0.285804 67.2443C-0.747754 67.8256 -0.999732 68.5459 -1 69.2888L1 69.2896ZM1.27954 68.4891C1.46019 68.2622 1.71272 68.1029 1.99648 68.0373L1.54637 66.0886C0.82325 66.2557 0.177417 66.6622 -0.285332 67.2437L1.27954 68.4891ZM1.99665 68.0373L17.521 64.4486L17.0706 62.5L1.5462 66.0887L1.99665 68.0373ZM18.2629 63.7287C19.7269 58.1629 21.9389 52.8213 24.8384 47.8501L23.1107 46.8424C20.1202 51.9699 17.8386 57.4793 16.3287 63.2199L18.2629 63.7287ZM24.823 46.817L16.3911 33.2993L14.6942 34.3578L23.1261 47.8755L24.823 46.817ZM16.3907 33.2986C16.2367 33.0521 16.1708 32.7607 16.2037 32.4719L14.2166 32.2452C14.1324 32.9834 14.3009 33.7283 14.6946 34.3584L16.3907 33.2986ZM16.2037 32.4717C16.2366 32.183 16.3665 31.9138 16.5721 31.7082L15.1578 30.294C14.6325 30.8193 14.3007 31.5072 14.2166 32.2453L16.2037 32.4717ZM16.5721 31.7082L31.7101 16.5699L30.2959 15.1557L15.1578 30.294L16.5721 31.7082ZM31.7092 16.5709C31.9148 16.3659 32.1838 16.2365 32.4723 16.2038L32.2473 14.2165C31.5098 14.3 30.8223 14.6307 30.2969 15.1548L31.7092 16.5709ZM32.4724 16.2038C32.7608 16.1711 33.052 16.237 33.2983 16.3909L34.358 14.6947C33.7286 14.3015 32.9846 14.1329 32.2471 14.2165L32.4724 16.2038ZM33.2988 16.3913L46.8118 24.821L47.8704 23.1241L34.3574 14.6944L33.2988 16.3913ZM47.8448 24.8364C52.817 21.937 58.1591 19.725 63.7254 18.2608L63.2167 16.3266C57.4755 17.8367 51.9656 20.1182 46.8373 23.1087L47.8448 24.8364ZM64.445 17.5203L68.0586 1.99124L66.1106 1.53797L62.4971 17.0671L64.445 17.5203ZM68.0581 1.99329C68.1246 1.70997 68.2851 1.45751 68.513 1.2771L67.2717 -0.291073C66.69 0.169397 66.2808 0.813336 66.1111 1.53592L68.0581 1.99329ZM68.513 1.2771C68.7403 1.09717 69.0225 0.999324 69.3134 1L69.3181 -0.999991C68.5755 -1.00172 67.854 -0.752023 67.2717 -0.291073L68.513 1.2771ZM69.3158 1.00001H90.7095V-0.999994H69.3158V1.00001ZM90.7092 1.00001C90.9999 1.00011 91.2817 1.09865 91.509 1.27955L92.7544 -0.285319C92.1733 -0.747808 91.4527 -0.999726 90.7099 -0.999994L90.7092 1.00001ZM91.5095 1.28001C91.7367 1.46054 91.8959 1.71283 91.9614 1.9965L93.9101 1.54639C93.743 0.823182 93.3363 0.1771 92.7539 -0.285779L91.5095 1.28001ZM91.9614 1.99667L95.5501 17.5212L97.4987 17.0708L93.91 1.54623L91.9614 1.99667ZM96.27 18.2631C101.836 19.7271 107.177 21.9391 112.149 24.8386L113.156 23.111C108.029 20.1204 102.519 17.8389 96.7788 16.3289L96.27 18.2631ZM113.182 24.8233L126.699 16.3913L125.641 14.6944L112.123 23.1264L113.182 24.8233ZM126.7 16.3906C126.946 16.237 127.237 16.1709 127.527 16.2039L127.753 14.2168C127.015 14.1326 126.27 14.3009 125.64 14.695L126.7 16.3906ZM127.527 16.2039C127.815 16.2368 128.085 16.3667 128.289 16.5718L129.704 15.1584C129.179 14.6326 128.491 14.3009 127.753 14.2168L127.527 16.2039ZM128.29 16.5722L143.428 31.7105L144.842 30.2963L129.704 15.158L128.29 16.5722ZM143.427 31.71C143.633 31.9155 143.762 32.1841 143.794 32.4722L145.782 32.2481C145.698 31.5102 145.367 30.8225 144.843 30.2968L143.427 31.71ZM143.794 32.4733C143.827 32.7611 143.761 33.052 143.607 33.2986L145.303 34.3584C145.696 33.7293 145.866 32.9852 145.781 32.2469L143.794 32.4733ZM143.607 33.2992L135.177 46.8124L136.874 47.8709L145.304 34.3578L143.607 33.2992ZM135.162 47.8454C138.061 52.8168 140.273 58.1585 141.737 63.7237L143.671 63.2149C142.161 57.4749 139.88 51.9653 136.889 46.8378L135.162 47.8454ZM142.479 64.4436L158.004 68.0323L158.454 66.0837L142.929 62.495L142.479 64.4436ZM158.004 68.0323C158.287 68.0977 158.54 68.2574 158.721 68.4845L160.286 67.2396C159.823 66.6583 159.177 66.2508 158.454 66.0837L158.004 68.0323ZM158.721 68.4845C158.901 68.712 159 68.9944 159 69.2842H161C161 68.5417 160.748 67.8205 160.286 67.2396L158.721 68.4845ZM159 69.2842V90.7063H161V69.2842H159ZM159 90.7063C159 90.9965 158.902 91.2784 158.721 91.5059L160.286 92.7509C160.748 92.1701 161 91.4495 161 90.7063H159ZM158.721 91.5059C158.54 91.7331 158.287 91.8927 158.004 91.9582L158.454 93.9068C159.177 93.7396 159.823 93.3322 160.286 92.7509L158.721 91.5059ZM158.004 91.9582L142.479 95.5468L142.929 97.4955L158.454 93.9068L158.004 91.9582ZM141.737 96.2668C140.273 101.833 138.061 107.174 135.162 112.145L136.889 113.153C139.88 108.025 142.161 102.516 143.671 96.7755L141.737 96.2668ZM135.177 113.178L143.607 126.7L145.304 125.642L136.874 112.12L135.177 113.178ZM143.607 126.701C143.761 126.948 143.827 127.239 143.794 127.528L145.782 127.755C145.866 127.016 145.697 126.271 145.303 125.641L143.607 126.701ZM143.794 127.528C143.762 127.816 143.631 128.086 143.426 128.291L144.84 129.706C145.365 129.181 145.697 128.493 145.781 127.755L143.794 127.528ZM143.426 128.291L128.288 143.43L129.702 144.844L144.84 129.706L143.426 128.291ZM128.289 143.429C128.083 143.634 127.814 143.763 127.526 143.796L127.75 145.783C128.488 145.7 129.176 145.369 129.702 144.844L128.289 143.429ZM127.525 143.796C127.237 143.829 126.946 143.763 126.7 143.609L125.64 145.305C126.269 145.698 127.013 145.867 127.751 145.783L127.525 143.796ZM126.699 143.608L113.186 135.179L112.128 136.876L125.641 145.305L126.699 143.608ZM112.153 135.163C107.182 138.063 101.84 140.275 96.2744 141.739L96.7831 143.673C102.524 142.163 108.033 139.882 113.161 136.891L112.153 135.163ZM95.5544 142.481L91.9664 158.006L93.915 158.456L97.5031 142.931L95.5544 142.481ZM91.9666 158.005C91.9009 158.288 91.7411 158.54 91.5129 158.721L92.7555 160.289C93.3381 159.827 93.7467 159.181 93.9148 158.457L91.9666 158.005ZM91.5129 158.721C91.2849 158.902 91.0026 159 90.7108 159L90.7083 161C91.4513 161.001 92.1726 160.751 92.7555 160.289L91.5129 158.721ZM71.1303 156.428H88.89V154.428H71.1303V156.428ZM89.8643 155.653L93.3591 140.538L91.4105 140.088L87.9157 155.203L89.8643 155.653ZM93.359 140.539C93.4129 140.306 93.5306 140.092 93.6987 139.923L92.2772 138.516C91.8484 138.949 91.5482 139.493 91.4106 140.087L93.359 140.539ZM93.698 139.923C93.867 139.753 94.0793 139.633 94.3108 139.577L93.8416 137.633C93.2485 137.776 92.7072 138.082 92.2779 138.515L93.698 139.923ZM94.3093 139.578C100.557 138.08 106.528 135.606 112.005 132.249L110.959 130.544C105.662 133.791 99.8858 136.184 93.8431 137.633L94.3093 139.578ZM112.008 132.247C112.211 132.121 112.445 132.055 112.684 132.055V130.055C112.074 130.055 111.476 130.225 110.956 130.546L112.008 132.247ZM112.684 132.055C112.923 132.055 113.158 132.121 113.361 132.247L114.412 130.546C113.893 130.225 113.294 130.055 112.684 130.055V132.055ZM113.357 132.245L126.516 140.455L127.574 138.758L114.416 130.548L113.357 132.245ZM127.752 140.314L140.324 127.742L138.91 126.328L126.338 138.899L127.752 140.314ZM140.465 126.505L132.252 113.358L130.556 114.418L138.769 127.565L140.465 126.505ZM132.255 113.362C132.129 113.159 132.062 112.924 132.062 112.685H130.062C130.062 113.297 130.233 113.895 130.553 114.414L132.255 113.362ZM132.062 112.685C132.062 112.447 132.129 112.213 132.255 112.009L130.553 110.958C130.233 111.476 130.062 112.074 130.062 112.685H132.062ZM132.256 112.006C135.615 106.53 138.088 100.558 139.586 94.3103L137.641 93.8443C136.193 99.8871 133.8 105.664 130.552 110.961L132.256 112.006ZM139.585 94.3119C139.641 94.0803 139.761 93.8676 139.931 93.6984L138.521 92.2798C138.09 92.7087 137.784 93.2497 137.641 93.8427L139.585 94.3119ZM139.93 93.6998C140.099 93.532 140.313 93.4141 140.546 93.3601L140.095 91.4116C139.501 91.5492 138.956 91.8492 138.523 92.2783L139.93 93.6998ZM140.546 93.3601L155.652 89.8653L155.201 87.9168L140.095 91.4116L140.546 93.3601ZM156.426 88.8911V71.1087H154.426V88.8911H156.426ZM155.652 70.1344L140.537 66.639L140.086 68.5876L155.201 72.083L155.652 70.1344ZM140.536 66.6388C140.304 66.5855 140.091 66.4682 139.921 66.3L138.514 67.7215C138.947 68.1502 139.492 68.4509 140.087 68.5879L140.536 66.6388ZM139.922 66.3007C139.751 66.1318 139.632 65.9196 139.576 65.6876L137.632 66.1561C137.775 66.75 138.08 67.2914 138.513 67.7208L139.922 66.3007ZM139.576 65.6889C138.08 59.4421 135.606 53.4698 132.247 47.9937L130.542 49.0393C133.791 54.3362 136.184 60.1127 137.631 66.1548L139.576 65.6889ZM132.245 47.9908C132.12 47.7877 132.053 47.5534 132.053 47.3142H130.053C130.053 47.9244 130.223 48.5228 130.544 49.0422L132.245 47.9908ZM132.053 47.3142C132.053 47.075 132.12 46.8407 132.245 46.6376L130.544 45.5862C130.223 46.1056 130.053 46.704 130.053 47.3142H132.053ZM132.243 46.6413L140.453 33.4824L138.756 32.4237L130.546 45.5826L132.243 46.6413ZM140.312 32.246L127.741 19.6746L126.327 21.0888L138.898 33.6602L140.312 32.246ZM126.504 19.5336L113.357 27.7461L114.417 29.4424L127.564 21.2298L126.504 19.5336ZM113.364 27.7418C113.159 27.8673 112.924 27.9336 112.684 27.9336V29.9336C113.293 29.9336 113.89 29.7651 114.41 29.4467L113.364 27.7418ZM112.684 27.9336C112.444 27.9336 112.209 27.8671 112.006 27.7422L110.959 29.4463C111.478 29.7652 112.076 29.9336 112.684 29.9336V27.9336ZM112.005 27.7418C106.529 24.383 100.557 21.9095 94.3092 20.4127L93.8432 22.3576C99.8859 23.8054 105.663 26.1979 110.959 29.4467L112.005 27.7418ZM94.3108 20.4131C94.079 20.3571 93.8667 20.2376 93.698 20.0675L92.2779 21.4758C92.7075 21.9089 93.2488 22.2142 93.8416 22.3572L94.3108 20.4131ZM93.6987 20.0681C93.5306 19.8984 93.4129 19.685 93.359 19.4521L91.4106 19.9033C91.5482 20.4975 91.8484 21.0418 92.2773 21.4751L93.6987 20.0681ZM93.3591 19.4523L89.8643 4.34605L87.9158 4.79683L91.4105 19.9031L93.3591 19.4523ZM88.89 3.57144H71.1303V5.57144H88.89V3.57144ZM70.1563 4.3448L66.6385 19.4625L68.5865 19.9158L72.1043 4.79808L70.1563 4.3448ZM66.6384 19.4633C66.5845 19.6956 66.467 19.9084 66.2991 20.0778L67.7196 21.4857C68.1486 21.0528 68.449 20.509 68.5867 19.9149L66.6384 19.4633ZM66.2999 20.077C66.131 20.247 65.9193 20.3662 65.6873 20.422L66.155 22.3666C66.7488 22.2237 67.2895 21.9187 67.7188 21.4865L66.2999 20.077ZM65.6881 20.4218C59.4414 21.9186 53.4692 24.3921 47.9931 27.7509L49.0388 29.4558C54.3355 26.207 60.112 23.8145 66.1541 22.3668L65.6881 20.4218ZM47.9899 27.7529C47.7867 27.8786 47.5526 27.9451 47.3137 27.9451V29.9451C47.9242 29.9451 48.5227 29.775 49.042 29.4538L47.9899 27.7529ZM47.3137 27.9451C47.0748 27.9451 46.8406 27.8786 46.6374 27.7529L45.5854 29.4538C46.1046 29.775 46.7031 29.9451 47.3137 29.9451V27.9451ZM46.6407 27.755L33.482 19.5447L32.4233 21.2415L45.582 29.4518L46.6407 27.755ZM32.2456 19.686L19.6743 32.2574L21.0885 33.6716L33.6598 21.1002L32.2456 19.686ZM19.533 33.4939L27.7432 46.6527L29.44 45.594L21.2298 32.4352L19.533 33.4939ZM27.7411 46.6494C27.8668 46.8526 27.9334 47.0867 27.9334 47.3257H29.9334C29.9334 46.7151 29.7632 46.1166 29.4421 45.5973L27.7411 46.6494ZM27.9334 47.3257C27.9334 47.5646 27.8668 47.7987 27.7411 48.0019L29.4421 49.054C29.7632 48.5347 29.9334 47.9362 29.9334 47.3257H27.9334ZM27.7392 48.0051C24.3804 53.4812 21.9069 59.4533 20.4101 65.7007L22.3551 66.1667C23.8028 60.1239 26.1953 54.3475 29.444 49.0508L27.7392 48.0051ZM20.4105 65.6991C20.3546 65.9309 20.235 66.1433 20.0649 66.312L21.4734 67.7319C21.9064 67.3024 22.2116 66.761 22.3547 66.1683L20.4105 65.6991ZM20.0657 66.3112C19.8959 66.4793 19.6825 66.597 19.4496 66.6509L19.9007 68.5993C20.495 68.4617 21.0393 68.1616 21.4726 67.7327L20.0657 66.3112ZM19.4504 66.6507L4.34664 70.1343L4.79613 72.0831L19.8999 68.5995L19.4504 66.6507ZM3.57139 71.1087V88.8911H5.57139V71.1087H3.57139ZM4.34612 89.8654L19.4613 93.3602L19.9119 91.4116L4.79665 87.9168L4.34612 89.8654ZM19.461 93.3601C19.6939 93.414 19.9073 93.5317 20.077 93.6997L21.484 92.2784C21.0507 91.8494 20.5064 91.5492 19.9122 91.4116L19.461 93.3601ZM20.0764 93.6991C20.2465 93.8678 20.366 94.08 20.4218 94.3117L22.3661 93.8428C22.2231 93.25 21.9178 92.7085 21.4847 92.279L20.0764 93.6991ZM20.4215 94.3103C21.9183 100.558 24.3918 106.53 27.7506 112.006L29.4555 110.961C26.2067 105.664 23.8143 99.8871 22.3665 93.8443L20.4215 94.3103ZM27.7525 112.009C27.8783 112.213 27.9448 112.447 27.9448 112.685H29.9448C29.9448 112.075 29.7746 111.477 29.4535 110.957L27.7525 112.009ZM27.9448 112.685C27.9448 112.924 27.8782 113.159 27.7525 113.362L29.4535 114.414C29.7748 113.895 29.9448 113.296 29.9448 112.685H27.9448ZM27.7546 113.359L19.5445 126.517L21.2413 127.576L29.4514 114.417L27.7546 113.359ZM19.6858 127.754L32.257 140.325L33.6713 138.911L21.1 126.339L19.6858 127.754ZM33.4935 140.467L46.6522 132.256L45.5935 130.56L32.4348 138.77L33.4935 140.467ZM46.6496 132.258C46.8521 132.133 47.0859 132.066 47.3251 132.066V130.066C46.7148 130.066 46.116 130.236 45.5961 130.558L46.6496 132.258ZM47.3251 132.066C47.5643 132.066 47.7981 132.133 48.0006 132.258L49.0541 130.558C48.5342 130.236 47.9354 130.066 47.3251 130.066V132.066ZM48.0047 132.261C53.4813 135.618 59.4532 138.091 65.6997 139.59L66.1662 137.645C60.1239 136.195 54.3474 133.803 49.05 130.556L48.0047 132.261ZM65.6997 139.59C65.9311 139.645 66.1425 139.764 66.3098 139.933L67.7313 138.526C67.3016 138.092 66.7593 137.787 66.1661 137.645L65.6997 139.59ZM66.3105 139.934C66.479 140.104 66.5965 140.316 66.6501 140.548L68.5986 140.097C68.4606 139.501 68.1591 138.958 67.7306 138.525L66.3105 139.934ZM66.6502 140.548L70.1562 155.654L72.1044 155.202L68.5984 140.096L66.6502 140.548Z" fill="#344F6B"></path></g><path d="M124.066 79.9994H124.566V79.9989L124.066 79.9994ZM80.0007 35.9341L80.0012 35.4341L79.5017 35.4335L79.5007 35.9331L80.0007 35.9341ZM80 36.2417H79.5L80.5 36.2427L80 36.2417ZM80 35.9341H80.5V35.4341H80V35.9341ZM55.5183 43.3605L55.2405 42.9448L55.2405 42.9448L55.5183 43.3605ZM39.2884 63.1368L39.7503 63.3282L39.7504 63.3282L39.2884 63.1368ZM36.7808 88.5967L37.2712 88.4992L37.2712 88.4992L36.7808 88.5967ZM48.8407 111.16L48.4871 111.513L48.4872 111.513L48.8407 111.16ZM71.4034 123.219L71.5009 122.729L71.5009 122.729L71.4034 123.219ZM96.8633 120.711L96.672 120.25L96.6719 120.25L96.8633 120.711ZM116.64 104.482L117.055 104.76L117.055 104.76L116.64 104.482ZM119.911 53.3326L119.495 53.6104V53.6104L119.911 53.3326ZM128 79.9994L128.5 80V79.9994H128ZM79.9994 128V128.5H80L79.9994 128ZM53.3327 119.911L53.6105 119.495H53.6105L53.3327 119.911ZM35.6538 98.369L36.1158 98.1777H36.1158L35.6538 98.369ZM32.9223 70.6359L33.4127 70.7335L33.4127 70.7335L32.9223 70.6359ZM46.0589 46.0589L45.7054 45.7053L45.7054 45.7053L46.0589 46.0589ZM70.6359 32.9224L70.7335 33.4127L70.7335 33.4127L70.6359 32.9224ZM98.369 35.6538L98.5604 35.1919V35.1919L98.369 35.6538ZM124.566 80.0001V79.9994H123.566V80.0001H124.566ZM124.566 79.9989C124.552 68.1839 119.853 56.8565 111.498 48.5018L110.791 49.2089C118.959 57.3763 123.553 68.4499 123.566 80L124.566 79.9989ZM111.498 48.5018C103.144 40.1471 91.8162 35.4475 80.0012 35.4341L80.0001 36.4341C91.5502 36.4472 102.624 41.0415 110.791 49.2089L111.498 48.5018ZM79.5007 35.9331L79.5 36.2407L80.5 36.2427L80.5007 35.9351L79.5007 35.9331ZM80.5 36.2417V35.9341H79.5V36.2417H80.5ZM80 35.4341C71.1855 35.4341 62.5696 38.0478 55.2405 42.9448L55.7961 43.7763C62.9607 38.9891 71.3833 36.4341 80 36.4341V35.4341ZM55.2405 42.9448C47.9117 47.8418 42.1996 54.802 38.8265 62.9455L39.7504 63.3282C43.0477 55.3674 48.6317 48.5634 55.7961 43.7762L55.2405 42.9448ZM38.8265 62.9455C35.4533 71.0885 34.5708 80.0496 36.2904 88.6943L37.2712 88.4992C35.5902 80.0484 36.4529 71.2884 39.7503 63.3282L38.8265 62.9455ZM36.2904 88.6943C38.01 97.3397 42.2545 105.28 48.4871 111.513L49.1943 110.806C43.1014 104.713 38.9522 96.9506 37.2712 88.4992L36.2904 88.6943ZM48.4872 111.513C54.7198 117.746 62.6605 121.99 71.3058 123.71L71.5009 122.729C63.0495 121.048 55.2871 116.899 49.1943 110.806L48.4872 111.513ZM71.3058 123.71C79.9506 125.429 88.9117 124.547 97.0546 121.173L96.6719 120.25C88.7117 123.547 79.9517 124.41 71.5009 122.729L71.3058 123.71ZM97.0546 121.173C105.198 117.801 112.158 112.088 117.055 104.76L116.224 104.204C111.437 111.368 104.633 116.953 96.672 120.25L97.0546 121.173ZM117.055 104.76C121.952 97.4305 124.566 88.8146 124.566 80.0001H123.566C123.566 88.6168 121.011 97.0394 116.224 104.204L117.055 104.76ZM119.495 53.6104C124.714 61.4215 127.5 70.6054 127.5 79.9994H128.5C128.5 70.4076 125.655 61.0304 120.326 53.0549L119.495 53.6104ZM127.5 79.9989C127.486 92.5927 122.477 104.667 113.572 113.572L114.279 114.279C123.371 105.187 128.486 92.8586 128.5 80L127.5 79.9989ZM113.572 113.572C104.667 122.477 92.5927 127.486 79.9989 127.5L80 128.5C92.8586 128.486 105.187 123.371 114.279 114.279L113.572 113.572ZM79.9994 127.5C70.6054 127.5 61.4215 124.714 53.6105 119.495L53.0549 120.326C61.0304 125.655 70.4076 128.5 79.9994 128.5V127.5ZM53.6105 119.495C45.7991 114.276 39.7109 106.857 36.1158 98.1777L35.1919 98.5604C38.8627 107.422 45.0791 114.997 53.0549 120.326L53.6105 119.495ZM36.1158 98.1777C32.5206 89.4983 31.5799 79.9474 33.4127 70.7335L32.4319 70.5384C30.5606 79.9462 31.521 89.6983 35.1919 98.5604L36.1158 98.1777ZM33.4127 70.7335C35.2456 61.519 39.7695 53.0555 46.4125 46.4124L45.7054 45.7053C38.9225 52.4882 34.3034 61.1299 32.4319 70.5384L33.4127 70.7335ZM46.4125 46.4124C53.0555 39.7695 61.519 35.2455 70.7335 33.4127L70.5384 32.432C61.1299 34.3033 52.4882 38.9225 45.7054 45.7053L46.4125 46.4124ZM70.7335 33.4127C79.9473 31.5799 89.4983 32.5206 98.1777 36.1157L98.5604 35.1919C89.6983 31.521 79.9462 30.5605 70.5384 32.432L70.7335 33.4127ZM98.1777 36.1157C106.857 39.7109 114.276 45.7991 119.495 53.6104L120.326 53.0549C114.997 45.0791 107.422 38.8627 98.5604 35.1919L98.1777 36.1157Z" fill="#344F6B"></path></svg>
                <span class="subtitle">Who we are</span>
                <h3 class="title">We take pride in building lasting relationships based on trust, professionalism, and results. Whether you're a first-time homebuyer, a seasoned investor, or a business owner seeking new premises, we are here to help you navigate the real estate market with ease.</h3>
                <span class="author">Surv. Ekpete-Edeh Chukwudi Emmanuel</span>
            </div>
        </div>
    </section>

    <section class="reviews section">
        <div class="container">
            <div class="reviews_header-wrapper">
                <div class="reviews_header section_header">
                    <span class="subtitle">Our reviews</span>
                    <h2 class="title">What <span class="highlight">Our Clients</span> Say</h2>
                </div>
                <div class="swiper-controls reviews_slider-controls">
                    <a class="swiper-button swiper-button-next" href="#">
                        <i class="icon-arrow_left icon"></i>
                    </a>
                    <a class="swiper-button swiper-button-prev" href="#">
                        <i class="icon-arrow_right icon"></i>
                    </a>
                </div>
            </div>
            <div class="reviews_slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" style="transform: translate3d(-3960px, 0px, 0px); transition-duration: 0ms;">
                    @foreach(\App\Models\Testimonial::all() as $testimonial)
                        <div class="reviews_slider-slide swiper-slide swiper-slide-duplicate" data-swiper-slide-index="{{ $testimonial->id }}" style="width: 630px; margin-right: 30px;">
                            <div class="rating"><i class="icon-star icon"></i> <i class="icon-star icon"></i> <i class="icon-star icon"></i> <i class="icon-star icon"></i> <i class="icon-star icon"></i></div>
                            <p class="main">{{ $testimonial->message }}</p>
                            <div class="media">
                                <div class="media_avatar avatar">
                                    <picture>
                                        <source data-srcset="{{ asset($testimonial->image) }}" srcset="{{ asset($testimonial->image) }}" type="image/jpg" />
                                        <img class="lazy" data-src="{{ asset($testimonial->image) }}" src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" />
                                    </picture>
                                </div>
                                <div class="media_info"><span class="name">{{ $testimonial->name }}</span> <span class="details">{{ $testimonial->title }}</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection