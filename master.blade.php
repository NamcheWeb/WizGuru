<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<title><?php
        $page_title = isset($page_title) ? ($page_title). ' | ' : '';
        $page_title =$page_title?:( isset($content) ? ($content->name). ' | ' : '');
        $page_title = isset($is_home) ?'Home | ':$page_title ;
        if (isset($settings->meta_title) && is_string($settings->meta_title)) {
            echo $page_title . $settings->meta_title;
        } else {
            echo 'WizGuru Education Consultancy';
        }
        ?></title>


    <meta property="og:description" content="" />
    <meta property="og:image" content="{{asset('assets/frontend/assets/images/profile.jpg')}}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="WizGuru Education Consultancy" />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">


    <!-- Stylesheets -->
    <link href="{{asset('assets/frontend/assets/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/assets/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/frontend/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/frontend/assets/images/favicon.png')}}" type="image/x-icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('assets/frontend/assets/js/respond.js')}}"></script><![endif]-->


    <script src="{{asset('assets/frontend/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/assets/js/forms/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/assets/js/forms/common.js')}}"></script>
    <script>
        function site_url(url) {
            return "<?php echo url('') ?>/" + url;
        }
    </script>

    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"9779705420851","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
        window.onload = () => {
            _waEmbed(wa_btnSetting);
        };
    </script>
</head>

<body>

<div class="page-wrapper color-scheme-red">
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')

</div><!-- End Page Wrapper -->
    <!-- Scroll To Top -->
    <!--<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-arrow-up"></span></div>-->

{{--    <script src="{{asset('assets/frontend/assets/js/jquery.js')}}"></script>--}}
    <script src="{{asset('assets/frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/sticky_sidebar.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/appear.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/script.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/choose_destination.js')}}"></script>


    <script>
        const slides = document.querySelectorAll('.slide');
        const navArrows = document.querySelector('.nav-arrows');

        if (slides.length <= 1) {
            navArrows.style.display = 'none';
        }

        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) slide.classList.add('active');
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(() => {
            if (slides.length > 1) nextSlide();
        }, 5000);
    </script>


</body>

</html>
