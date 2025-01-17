@extends('layouts.master', [
    $title = 'Our Services',
    $tags = "data-page='services' data-page-parent='services'"
])

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/services.min.css') }}">
@endsection

@section('header')

    <header class="page primary-bg">
        <div class="container">
            <div class="section_header">
                <span class="subtitle subtitle--extended">Building communities</span>
                <h1 class="title">Our Services</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs_item"><a href="/">Home</a></li>
                    <li class="breadcrumbs_item breadcrumbs_item--current"><span>Services</span></li>
                </ul>
            </div>
        </div>
        <div class="media">
            <picture>
                <img class="" data-src="/assets/img/plan.png" src="/assets/img/plan.png" alt="media">
            </picture>
        </div>
    </header>

@endsection

@section('content')
    <section class="services section">
        <div class=container>
            <div class="services_header section_header"><span class=subtitle>What we do</span>
                <h2 class=title data-aos=fade-right data-aos-duration=500>Services</h2>
            </div>
            <ul class=services_list>
                <li class=services_list-item data-aos=fade-up>
                    <div class=wrapper><span class=number>01</span>
                        <h4 class=title>Estate Management</h4>
                        <p class=description>Efficiently managing properties, ensuring seamless operations, tenant satisfaction, and maximizing asset value through professional oversight.</p><a class="link link-arrow" href=single-service.html>Details <i class="icon-arrow_right icon"></i></a></div>
                </li>
                <li class=services_list-item data-aos=fade-up>
                    <div class=wrapper><span class=number>02</span>
                        <h4 class=title>Construction Services</h4>
                        <p class=description>Delivering high-quality construction projects on time and within budget, with a focus on safety and sustainability.</p><a class="link link-arrow" href=single-service.html>Details <i class="icon-arrow_right icon"></i></a></div>
                </li>
                <li class=services_list-item data-aos=fade-up>
                    <div class=wrapper><span class=number>03</span>
                        <h4 class=title> Sales and Marketing</h4>
                        <p class=description>Strategic property promotion and sales, leveraging market insights to drive results and maximize property value.</p><a class="link link-arrow" href=single-service.html>Details <i class="icon-arrow_right icon"></i></a></div>
                </li>
                <li class=services_list-item data-aos=fade-up>
                    <div class=wrapper><span class=number>04</span>
                        <h4 class=title>Property Appraisal</h4>
                        <p class=description>Accurate property valuations, providing reliable insights into market value for informed decision-making.</p><a class="link link-arrow" href=single-service.html>Details <i class="icon-arrow_right icon"></i></a></div>
                </li>
                <li class=services_list-item data-aos=fade-up>
                    <div class=wrapper><span class=number>05</span>
                        <h4 class=title>Real Estate Consulting</h4>
                        <p class=description>Expert advice on real estate investments, helping you navigate trends and optimize your portfolio.</p><a class="link link-arrow" href=single-service.html>Details <i class="icon-arrow_right icon"></i></a></div>
                </li>
                <li class=services_list-item data-aos=fade-up>
                    <div class=wrapper><span class=number>06</span>
                        <h4 class=title>Leasing Services</h4>
                        <p class=description>Streamlined leasing processes, connecting landlords with tenants and managing agreements efficiently.</p><a class="link link-arrow" href=single-service.html>Details <i class="icon-arrow_right icon"></i></a></div>
                </li>
            </ul>
        </div>
    </section>
    <section class="numbers primary-bg section">
        <div class=container>
            <div class=numbers_main>
                <div class="numbers_header section_header"><span class=subtitle>What we do</span>
                    <h2 class=title>Building The Future on a <span class=highlight>Foundation of Excellence</span></h2>
                    <p class=text>Our commitment is to build with quality and precision, ensuring every project stands out. We focus on innovative solutions and exceptional craftsmanship to deliver superior results. Trust us to create spaces that reflect excellence and meet your highest standards.</p>
                </div>
                <ul class=numbers_list>
                    <li class=numbers_list-item>
                        <h2 class="countNum number" data-suffix=% data-value=99>0</h2><span class=label>Building Control<br>Approval Rate</span></li>
                    <li class=numbers_list-item>
                        <h2 class="countNum number" data-suffix=+ data-value=320>0</h2><span class=label>Active Projects in<br>Construction Management</span></li>
                    <li class=numbers_list-item>
                        <h2 class="countNum number" data-suffix=+ data-value=200>0</h2><span class=label>Completed Projects<br>Every Year</span></li>
                    <li class=numbers_list-item>
                        <h2 class="countNum number" data-separator=. data-value=1135>0</h2><span class=label>Satisfied and Valued Clients<br></span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about section-nopb">
        <div class=container>
            <div class=main>
                <div class=section_header><span class=subtitle data-aos=fade-down>The Choice is Yours, the Expertise is Ours</span>
                    <h2 class=title data-aos=fade-right>Navigating Your Real Estate Journey with <span class=highlight>Professional Guidance</span></h2>
                    <p class=text data-aos=fade-up data-aos-delay=50>We offer personalized solutions tailored to your unique needs. Our experienced team is dedicated to providing expert advice and support throughout your real estate journey, ensuring a seamless and successful experience</p>
                </div>
                <ul class=achievements>
                    <li class=achievements_item data-aos=fade-up data-aos-delay=100><svg class=advantages-icon width=40 height=40 viewBox="0 0 40 40" fill=none xmlns=http://www.w3.org/2000/svg><g clip-path=url(#clip01)><path d="M36.4062 6.5625L21.4062 0.3125C20.9375 0.15625 20.4688 0.078125 20 0.078125C19.4531 0.078125 18.9844 0.15625 18.5156 0.3125L3.51562 6.5625C2.10938 7.1875 1.25 8.51562 1.25 10C1.25 25.5469 10.1562 36.25 18.5156 39.7656C19.4531 40.1562 20.4688 40.1562 21.4062 39.7656C28.125 36.9531 38.75 27.3438 38.75 10C38.75 8.51562 37.8125 7.1875 36.4062 6.5625ZM20.4688 37.4219C20.1562 37.5781 19.7656 37.5781 19.4531 37.4219C11.875 34.375 3.75 23.75 3.75 10C3.75 9.53125 3.98438 9.0625 4.45312 8.90625L19.4531 2.65625C19.7656 2.5 20.1562 2.5 20.4688 2.65625L35.4688 8.90625C35.9375 9.0625 36.25 9.53125 36.1719 10C36.25 23.75 28.125 34.375 20.4688 37.4219ZM31.0938 12.0312C30.7031 11.7188 30.1562 11.7188 29.7656 12.0312L17.0312 24.6875L11.6406 19.2969C11.25 18.9062 10.625 18.9062 10.3125 19.2969L9.60938 19.9219C9.21875 20.3125 9.21875 20.8594 9.60938 21.25L16.3281 28.0469C16.7188 28.3594 17.2656 28.3594 17.6562 28.0469L31.7188 14.0625C32.1094 13.6719 32.1094 13.125 31.7188 12.7344L31.0938 12.0312Z" fill=#0DA574 /></g><defs><clipPath id=clip01><rect width=40 height=40 fill=white /></clipPath></defs></svg>                            <span class=label>Successfully Completed Projects</span></li>
                    <li class=achievements_item data-aos=fade-up data-aos-delay=150><svg class=advantages-icon width=41 height=40 viewBox="0 0 41 40" fill=none xmlns=http://www.w3.org/2000/svg><g clip-path=url(#clip02)><path d="M39.4688 28.8281L29.8594 19.2188L33.7656 15.3125L39.0781 10C40.5625 8.51562 40.5625 6.17188 39.0781 4.6875L35.5625 1.17188C34.8594 0.390625 33.9219 0 32.9062 0C31.9688 0 31.0312 0.390625 30.25 1.17188L24.9375 6.48438L21.0312 10.3906L11.4219 0.78125C10.9531 0.3125 10.3281 0 9.70312 0C9.07812 0 8.45312 0.3125 7.98438 0.78125L0.953125 7.73438C-0.0625 8.75 -0.0625 10.3125 0.953125 11.25L10.5625 20.8594L1.73438 29.6875L0.25 38.125C0.015625 39.2969 1.10938 40.2344 2.125 40L10.5625 38.5156L19.3906 29.6875L29 39.2969C29.3906 39.7656 30.0156 40 30.7188 40C31.3438 40 31.9688 39.7656 32.4375 39.2969L39.4688 32.2656C40.4844 31.3281 40.4844 29.7656 39.4688 28.8281ZM32.0469 2.89062C32.3594 2.57812 33.4531 2.57812 33.8438 2.89062L37.3594 6.40625C37.8281 6.95312 37.8281 7.73438 37.3594 8.20312L33.7656 11.7969L28.4531 6.48438L32.0469 2.89062ZM2.67188 9.53125L9.70312 2.57812L14.0781 6.875L11.0312 10C10.7969 10.2344 10.7969 10.625 11.0312 10.8594L11.8906 11.7188C12.125 11.9531 12.5156 11.9531 12.75 11.7188L15.875 8.67188L19.3125 12.1094L12.2812 19.1406L2.67188 9.53125ZM9.3125 36.25L2.90625 37.3438L4 30.9375L26.6562 8.28125L31.9688 13.5938L9.3125 36.25ZM30.7188 37.5781L21.1094 27.9688L28.1406 20.9375L31.5781 24.375L28.5312 27.5C28.2969 27.7344 28.2969 28.125 28.5312 28.3594L29.3906 29.2188C29.625 29.4531 30.0156 29.4531 30.25 29.2188L33.375 26.1719L37.75 30.5469L30.7188 37.5781Z" fill=#0DA574 /></g><defs><clipPath id=clip02><rect width=40 height=40 fill=white transform=translate(0.25) /></clipPath></defs></svg>                            <span class=label>Simplicity In Design With Practically In Mind</span></li>
                    <li class=achievements_item data-aos=fade-up data-aos-delay=200><svg class=advantages-icon width=41 height=40 viewBox="0 0 41 40" fill=none xmlns=http://www.w3.org/2000/svg><g clip-path=url(#clip04)><path d="M37.75 27.5V25C37.75 17.1094 32.4375 10.4688 25.25 8.35938V7.5C25.25 6.17188 24.0781 5 22.75 5H17.75C16.3438 5 15.25 6.17188 15.25 7.5V8.35938C7.98438 10.4688 2.75 17.1094 2.75 25V27.5C1.34375 27.5 0.25 28.6719 0.25 30V32.5C0.25 33.9062 1.34375 35 2.75 35H37.75C39.0781 35 40.25 33.9062 40.25 32.5V30C40.25 28.6719 39.0781 27.5 37.75 27.5ZM5.25 25C5.25 18.9062 9 13.6719 14.3125 11.4062L16.3438 19.5312C16.4219 19.8438 16.6562 20 17.0469 20C17.3594 20 17.6719 19.6875 17.75 19.2969V7.5H22.75V19.2969C22.75 19.6875 23.0625 20 23.375 20C23.7656 20 24 19.8438 24.0781 19.5312L26.1094 11.4062C31.4219 13.6719 35.25 18.9062 35.25 25V27.5H5.25V25ZM37.75 32.5H2.75V30H37.75V32.5Z" fill=#0DA574 /></g><defs><clipPath id=clip04><rect width=40 height=40 fill=white transform=translate(0.25) /></clipPath></defs></svg>                            <span class=label>High Level of Construction Control Approval</span></li>
                </ul>
            </div>
            <div class=media data-aos=zoom-in data-aos-duration=700>
                <picture>
                    <img data-src=img/about/02.jpg src=/assets/img/about/landimage(1).jpg alt=media>
                </picture>
            </div>
        </div>
    </section>
    <section class="about revert section">
        <div class=container>
            <div class=main>
                <div class=section_header><span class=subtitle data-aos=fade-down>We build only quality things</span>
                    <h2 class=title data-aos=fade-right>Trusted Quality for Over <span class=highlight>20 Years</span></h2>
                    <p class=text data-aos=fade-up data-aos-delay=50>Committed to excellence, we deliver reliable solutions and exceptional service, consistently meeting high standards and exceeding expectations.</p>
                </div>
                <ul class=skills>
                    <li class=skills_item><span class=label data-aos=zoom-in data-aos-duration=400>Industry</span> <span class=progressLine id=industry data-value=90 data-fill=#0DA574></span></li>
                    <li class=skills_item><span class=label data-aos=zoom-in data-aos-duration=400>Engineering</span> <span class="progressLine" id=engineering data-value=96 data-fill=#FFC631></span></li>
                    <li class=skills_item><span class=label data-aos=zoom-in data-aos-duration=400>Factory</span> <span class=progressLine id=factory data-value=89 data-fill=#0DA574></span></li>
                    <li class=skills_item><span class=label data-aos=zoom-in data-aos-duration=400>Construction</span> <span class=progressLine id=construction data-value=99 data-fill=#FFC631></span></li>
                </ul>
            </div>
            <div class=media data-aos=zoom-in data-aos-duration=700>
                <picture>
                    <img data-src=img/about/03.jpg src=/assets/img/about/landimage2.jpg alt=media>
                </picture>
            </div>
        </div>
    </section>
{{--    <div class="gallery presentation" data-role=gallery>--}}
{{--        <div class=gallery_item>--}}
{{--            <a class=media href=/assets/img/gallery/10full.jpg data-caption="Fresh Concept Construction Renovation" data-role=gallery-link>--}}
{{--                <picture>--}}
{{--                    <img data-src=img/gallery/10.jpg src=/assets/img/gallery/10.jpg alt=@@caption>--}}
{{--                </picture>--}}
{{--                <div class=overlay>--}}
{{--                    <div class="overlay_header section_header"><span class=subtitle>Our gallery</span></div>--}}
{{--                    <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span class=overlay_label>Special Projects</span></div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class=gallery_item>--}}
{{--            <a class=media href=/assets/img/gallery/08full.jpg data-caption="Fresh Concept Construction Renovation" data-role=gallery-link>--}}
{{--                <picture>--}}
{{--                    <img class="" data-src=img/gallery/08.jpg src=/assets/img/gallery/08.jpg alt=@@caption>--}}
{{--                </picture>--}}
{{--                <div class=overlay>--}}
{{--                    <div class="overlay_header section_header"><span class=subtitle>Our gallery</span></div>--}}
{{--                    <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span class=overlay_label>Special Projects</span></div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class=gallery_item>--}}
{{--            <a class=media href=/assets/img/gallery/02full.jpg data-caption="Fresh Concept Construction Renovation" data-role=gallery-link>--}}
{{--                <picture>--}}
{{--                    <img data-src=/assets/img/gallery/02.jpg src=/assets/img/gallery/02.jpg alt=@@caption>--}}
{{--                </picture>--}}
{{--                <div class=overlay>--}}
{{--                    <div class="overlay_header section_header"><span class=subtitle>Our gallery</span></div>--}}
{{--                    <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span class=overlay_label>Special Projects</span></div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class=gallery_item>--}}
{{--            <a class=media href=/assets/img/gallery/09full.jpg data-caption="Fresh Concept Construction Renovation" data-role=gallery-link>--}}
{{--                <picture>--}}
{{--                    <img data-src=/assets/img/gallery/09.jpg src=/assets/img/gallery/09.jpg alt=@@caption>--}}
{{--                </picture>--}}
{{--                <div class=overlay>--}}
{{--                    <div class="overlay_header section_header"><span class=subtitle>Our gallery</span></div>--}}
{{--                    <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span class=overlay_label>Special Projects</span></div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
    <section class="contact section">
        <div class=container>
            <div class=contact_form>
                <div class="contact_form-header section_header"><span class=subtitle>Contact us</span>
                    <h2 class=title>Do You Have any <span class=highlight>Questions?</span></h2>
                </div>
                <form action=form.php class="contact_form-form contact-form d-flex flex-wrap justify-content-between" method=POST name=feedbackForm data-type=feedback>
                    <input class="contact-form_field contact-form_field--half field required" name=feedbackName id=feedbackName type=text placeholder="Full name">
                    <input class="contact-form_field contact-form_field--half field required" data-type=tel type=text name=feedbackTel id=feedbackTel placeholder=Phone>
                    <input class="contact-form_field field required" data-type=email type=text name=feedbackEmail id=feedbackEmail placeholder="Email Address">
                    <textarea class="contact-form_field field required" data-type=message name=feedbackMessage id=feedbackMessage placeholder=Message></textarea>
                    <button type=submit class="contact-form_btn btn">Send message</button>
                </form>
            </div>
            <div class=contact_info>
                <h3 class=contact_info-header>Are You Going to Implement Project?</h3>
                <ul class=contact-info>
                    <li class=contact-info_group><span class=name>Address</span> <span class=content>{{ get_settings()->address}}</span></li>
                    <li class=contact-info_group><span class=name>Email</span> <span class="content d-inline-flex flex-column"><a class=link href=mailto:{{ get_settings()->email }}>{{ get_settings()->email }}</a></span></li>
                    <li class=contact-info_group><span class=name>Phone</span> <span class="content d-inline-flex flex-column"><a class=link href=tel:+{{ get_settings()->phone }}>{{ get_settings()->phone }}</a> <a class=link href=tel:{{ get_settings()->help_line }}>{{ get_settings()->help_line }}</a></span></li>
                </ul>
                <ul class=socials>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=Facebook><i class=icon-facebook></i></a></li>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=Instagram><i class=icon-instagram></i></a></li>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=Twitter><i class=icon-twitter></i></a></li>
                    <li class=socials_item><a class=socials_item-link href=# target=_blank rel="noopener noreferrer" aria-label=WhatsApp><i class=icon-whatsapp></i></a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
