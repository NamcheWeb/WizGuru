<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <div class="big-column col-xl-12 col-lg-12 col-md-12">
                    <div class="row">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-12 col-sm-12">

                            <div class="footer-widget links-widget">
                                <h2 class="widget-title text-white">WizGuru</h2>
                                <div class="widget-content">
                                    <p class="text-white">
                                        {!! strip_tags($footer_content->description )!!}
                                    </p>

                                    <ul class="list mt-4 mb-4">
                                        <li><i class="fa fa-map-marker"></i> {{ $settings->address}}</li>
                                        <li><a href="#" style="pointer-events: none"><i class="fa fa-phone fa-flip-horizontal"></i> {{ $settings->phone}}</a></li>
                                        <li><i class="fa fa-envelope"></i> {{ $settings->email}}</li>
                                    </ul>

                                    <div class="social-link">

                                        <a href="{{ $settings->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $settings->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $settings->tiktok}}" target="_blank"><i class="fa-brands fa-tiktok "></i></a>
                                        <a href="{{ $settings->linkedin}}"><i class="fab fa-linkedin"></i></a>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="footer-column col-lg-2 col-md-4 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Quick Links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        @forelse ($footer_menu_first as $value)
                                                <?php $menu_data = check_menu_links($value); ?>
                                            <li> <a {{ $menu_data['target'] }} href="{{ $menu_data['page_url'] }}" > {{ $value->name }} </a> </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Our Services</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        @foreach($all_services as $dest)
                                            <li>
                                                <a href="{{url('/services/'. $dest->slug )}}">
                                                    {{ $dest->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Study Destinations</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        @foreach($all_destinations as $dest)
                                            <li>
                                                <a href="{{url('/destination/'. $dest->slug )}}">
                                                    {{ $dest->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright-text text-center">&copy; Copyright<?php echo date('Y'); ?>. All Rights Reserved by <span class="text-white">WizGuru Education Consultancy</span></div>
        </div>
    </div>

</footer>
<!-- End Main Footer -->
