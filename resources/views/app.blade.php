@include('component.header')
<div class="body-wrapper overflow-hidden">

    @yield('content')


    @include('sections/posts')

    @include('sections/kegiatan')





    {{-- <section class="features-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <small class="text-primary fw-bold mb-2 d-block fs-3">ALMOST COVERED EVERYTHING</small>
                        <h2 class="fs-9 text-center mb-4 mb-lg-9 fw-bolder">Other Amazing Features & Flexibility
                            Provided</h2>
                    </div>
                </div>
            </div>
            <div class="demo-app-tabs">
                <nav>
                    <div class="nav nav-tabs position-relative justify-content-center mb-5" id="nav-tab"
                        role="tablist">
                        <button class="nav-link p-3 me-2 active" id="nav-bootstrap-features-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-bootstrap-features" type="button" role="tab"
                            aria-controls="nav-bootstrap-features" aria-selected="true"><img
                                src="dist/images/svgs/icon-bootstrap.svg" alt="" class="img-fluid"><span
                                class="d-block mt-2 fw-bold">Bootstrap</span></button>
                        <button class="nav-link p-3 me-2" id="nav-react-features-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-react-features" type="button" role="tab"
                            aria-controls="nav-react-features" aria-selected="false"><img
                                src="dist/images/svgs/icon-reactjs.svg" alt="" class="img-fluid"><span
                                class="d-block mt-2 fw-bold">React</span></button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-bootstrap-features" role="tabpanel"
                        aria-labelledby="nav-bootstrap-features-tab" tabindex="0">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-wand text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                                    <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant
                                        Admin.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-layout-sidebar text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Dark & Light Sidebar</h5>
                                    <p class="mb-0 text-dark">Included Dark and Light Sidebar for getting desire look
                                        and feel.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-archive text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">425+ Page Templates</h5>
                                    <p class="mb-0 text-dark">Yes, we have 5 demos & 79+ Pages per demo to make it
                                        easier.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">150+ UI Components</h5>
                                    <p class="mb-0 text-dark">Almost 150+ UI Components being given with Modernize
                                        Admin Pack.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-tag text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Bootstrap 5x</h5>
                                    <p class="mb-0 text-dark">Its been made with Bootstrap 5 and full responsive
                                        layout.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-diamond text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">2000+ Font Icons</h5>
                                    <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                                        Elegant Admin.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-device-desktop text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Fully Responsive</h5>
                                    <p class="mb-0 text-dark">All the layout of Modernize Admin is Fully Responsive and
                                        widely tested.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-database text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">SassBase CSS</h5>
                                    <p class="mb-0 text-dark">Our Css is written Sass Base to make your life easier.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                                    <p class="mb-0 text-dark">Customization will be easy as we understand your pain.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                                    <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                                        Charts.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                                    <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-refresh text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                                    <p class="mb-0 text-dark">We are constantly updating our pack with new features.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-book text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                                    <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to
                                        use.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-calendar text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                                    <p class="mb-0 text-dark">Calendar is available with our package & in nice design.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-brand-wechat text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                                    <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-react-features" role="tabpanel"
                        aria-labelledby="nav-react-features-tab" tabindex="0">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-wand text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                                    <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant
                                        Admin.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-shield-lock text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">JWT + Firebase Auth</h5>
                                    <p class="mb-0 text-dark">It is JSON Object is used to securely transfer
                                        information over the web.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-archive text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">50+ Page Templates</h5>
                                    <p class="mb-0 text-dark">Yes, we have 5 demos & 50+ Pages per demo to make it
                                        easier.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">45+ UI Components</h5>
                                    <p class="mb-0 text-dark">Almost 45+ UI Components being given with Modernize
                                        Admin Pack.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-tag text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Material Ui</h5>
                                    <p class="mb-0 text-dark">Its been made with Material Ui and full responsive
                                        layout.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-diamond text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">3400+ Font Icons</h5>
                                    <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                                        Elegant Admin.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-database text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Axios</h5>
                                    <p class="mb-0 text-dark">Axios is a promise-based HTTP Client for node.js and the
                                        browser.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-language text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">i18 React</h5>
                                    <p class="mb-0 text-dark">react-i18 is a powerful internationalization framework
                                        for React.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-building-carousel text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Slick Carousel</h5>
                                    <p class="mb-0 text-dark">The Last React Carousel You will Ever Need!</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                                    <p class="mb-0 text-dark">Customization will be easy as we understand your pain.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                                    <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                                        Charts.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                                    <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-refresh text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                                    <p class="mb-0 text-dark">We are constantly updating our pack with new features.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-book text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                                    <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to
                                        use.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-calendar text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                                    <p class="mb-0 text-dark">Calendar is available with our package & in nice design.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                                data-aos-duration="1000">
                                <div class="text-center mb-5">
                                    <i class="d-block ti ti-messages text-primary fs-10"></i>
                                    <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                                    <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="pt-8 pt-md-5 pb-5 pb-lg-10 pb-xl-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card c2a-box" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="1000">
                        <div class="card-body text-center p-4 pt-8">
                            <h3 class="fs-7 fw-semibold pt-6">Haven't found an answer to your question?</h3>
                            <p class="mb-8 pb-2 text-dark">Connect with us either on discord or email us</p>
                            <div class="d-sm-flex align-items-center justify-content-center gap-3 mb-4">
                                <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                                    class="btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow" type="button">Ask
                                    on Discord</a>
                                <a href="https://adminmart.com/support" target="_blank"
                                    class="btn btn-outline-secondary d-block" type="button">Submit Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
    </section>




</div>
{{-- footer --}}
@include('component.footer')


{{-- rsponsiv navbar --}}
@include('component.menubar')



</div>


@include('component.script')


</body>


<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/landingpage/index-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 05:33:38 GMT -->

</html>
