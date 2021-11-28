

@section('current_url', 'about')
@include(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')
<style>
    .papti-about table, tr, td {
            border: none;
    }
    .papti-about h1, h2, h3, h4 {
            margin-bottom: 0px;
    }
</style>
<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
    <div id="page-menu-wrap">
        <div class="container">
            <div class="page-menu-row">

                <div class="page-menu-title"> <span>Company Profile</span></div>

                <nav class="page-menu-nav one-page-menu">
                    <ul class="page-menu-container">
                        {{-- <li class="page-menu-item"><a href="#" data-href="#section-president"><div>President</div></a></li> --}}
                        <li class="page-menu-item"><a href="#" data-href="#section-about"><div>Profile</div></a></li>
                        <li class="page-menu-item"><a href="#" data-href="#section-work"><div>History</div></a></li>
                        <li class="page-menu-item"><a href="#" data-href="#section-services"><div>Certification</div></a></li>
                        <li class="page-menu-item"><a href="#" data-href="#section-pricing"><div>IMS Policy</div></a></li>
                        {{-- <li class="page-menu-item"><a href="blog.html"><div>Blog</div></a></li>
                        <li class="page-menu-item"><a href="#" data-href="#section-testimonials" class="no-offset"><div>Testimonials</div></a></li>
                        <li class="page-menu-item"><a href="#" data-href="#section-contact"><div>Contact</div></a></li> --}}
                    </ul>
                </nav>

                <div id="page-menu-trigger"><i class="icon-reorder"></i></div>

            </div>
        </div>
    </div>
</div><!-- #page-menu end -->

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-dark" style="background-image:url('/assets/images/headers/about.jpg'); padding: 150px 0;">
    <div class="container clearfix">
        <h1>About Us</h1>
        <span>Everything you need to know about PAPTI</span>
    </div>
</section>
<!-- #page-title end -->

<!-- Content
============================================= -->
<div data-aos="fade-up">
    <section id="content-wrap  clearfix">
        <div class="section mt-0 border-top-0"  style="margin-bottom: 0px;">
            <div class="container clearfix">
                <div class="heading-block center m-0">
                    <h3>Philippine Advanced Processing Technology, Inc. (PAPTI)</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- #content end -->

    <!-- Content
    ============================================= -->
    <section class="content clearfix">
        <div class="content-wrap clearfix"   style="padding-top: 0px; margin-bottom: 0px; padding-bottom: 0px;">

            <section id="section-president" class="page-section">
                <div class="row align-items-stretch ">
                    <div class="col-md-6 col-padding min-vh-75 order-md-last" style="background: url('{{ $pres_message->getMedia('image')[0]->getUrl() }}') center center no-repeat; background-size: cover;"></div>

                    <div class="col-md-6 col-padding" style="background-color: #F5F5F5;">
                        <div>
                            <div class="heading-block">



                                <h3>{{ ($lang == 'en') ? $pres_message->en_name : $pres_message->jp_name }} </h3>
                                   <span class="before-heading color">President</span>
                            </div>

                            <div class="row col-mb-50">
                                <div class="col-lg-11" style="text-align:justify;">
                                    {!!  ($lang == 'en') ? $pres_message->en_message : $pres_message->jp_message !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-about" class="page-section row align-items-stretch page-section pt-0 clearfix topmargin-lg"  data-aos="fade-up">
                <div class="heading-block center">
                    <h2>Company Information</h2>
                </div>

                <div class="row align-items-stretch"  style="padding-top: 0px; margin: 0px 0px 0px 0px;">
                     <!--<div class="col-md-4 col-padding" style="background: url('/assets/images/papti.png') center center no-repeat; background-size: cover;"></div>-->

                    <div class="col-md-12 col-padding" style="background-color: #F5F5F5;">
                        <div>

                            <div class="row col-mb-90">

                                <div class="col-lg-12">

                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0"><strong>Company Name:</strong></td>
                                                <td class="border-top-0">{{ $profile->company_name }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date Established:</strong></td>
                                                <td>{{ $profile->date_established }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Capital:</strong></td>
                                                <td>{{ $profile->capital }}</td>
                                            </tr>
                                             </tr>
                                            <tr>
                                                <td><strong>Sales Email:</strong></td>
                                                <td>{{ $profile->email_sales }}</td>
                                             </tr>
                                             <tr>
                                                <td><strong>HR Email:</strong></td>
                                                <td>{{ $profile->email_hr }}</td>
                                             </tr>
                                             <tr>
                                                <td><strong>Company Email:</strong></td>
                                                <td>{{ $profile->email_company }}</td>
                                             </tr>
                                             <tr>
                                                <td><strong>Production Line:</strong></td>
                                                <td>{{  ($lang == 'en') ?  $profile->en_production_line :  $profile->jp_production_line}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tabs tabs-bordered clearfix ui-tabs ui-corner-all ui-widget ui-widget-content" id="tab-2">

                                    <ul class="tab-nav clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" role="tablist">
                                        <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabs-5" aria-labelledby="ui-id-5" aria-selected="true" aria-expanded="true"><a href="#tabs-5" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-5">PAPTI Cavite</a></li>
                                        <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-6" aria-labelledby="ui-id-6" aria-selected="false" aria-expanded="false"><a href="#tabs-6" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-6">PAPTI Batangas</a></li>
                                        <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-7" aria-labelledby="ui-id-7" aria-selected="false" aria-expanded="false"><a href="#tabs-7" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-7">PAPTI Thailand</a></li>
                                          </ul>

                                    <div class="tab-container" style="background: white;">

                                        <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-5" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="false">
                                            <div class="row">
                                                <div class="col-md-5 mb-4">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1552.311390563898!2d120.872863!3d14.4026402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33962cec6eaa5413%3A0x85c74a98754a6f91!2sPhilippine%20Advanced%20Processing%20Technology%2C%20Inc.!5e1!3m2!1sen!2sph!4v1638080798293!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                </div>
                                                <div class="col-md-7">
                                                    <img src="/assets/images/papti/papti-cavite.jpg" width=100% class="mb-4">
                                                    <h4 style="mb-4">Main Factory / Office</h4>
                                                    <p>{{ $profile->company_address }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-6" aria-labelledby="ui-id-6" role="tabpanel" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-5 mb-4">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1554.9145029514452!2d121.1794818!3d14.0236172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6959c730b38f%3A0xd0407197c506db8d!2sPAPTI%20Lipa%20-%20Philippine%20Advance%20Processing%20Technology%20Inc.!5e1!3m2!1sen!2sph!4v1638080786505!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                </div>
                                                <div class="col-md-7">
                                                    <img src="/assets/images/papti/papti-batangas.jpg" width=100% class="mb-4">
                                                    <h4 style="mb-4">Production Factory / Office</h4>
                                                    <p>{{ $profile->factory_address }}</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-7" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-5 mb-4">
                                                    <img src="/assets/images/papti/papti-thailand.jpg" width=100% class="mb-4">
                                                </div>
                                                <div class="col-md-7">
                                                    <h4 style="mb-4">Sales Office</h4>
                                                    <p>{{ $profile->sales_address }}</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <section id="section-work" class="page-section topmargin-lg"  data-aos="fade-up">

                <div class="heading-block center">
                    <h2>History</h2>
                </div>

                <div class="container clearfix">
                    <div class="position-relative">




                        <div class="postcontent col-lg-9">

							<!-- Posts
							============================================= -->
							<div id="posts" class="post-timeline">
                    @if (count($history) > 0)
                                @foreach ($history as $history)

								    <div class="entry"  data-aos="fade-up">
									<div class="entry-timeline" style="padding-top: 20px; font-size: 1.3rem;">
										{{ $history->year_date }}
										<div class="timeline-divider"></div>
									</div>
									<div class="entry-image">
										<blockquote>
											{!! ($lang == 'en') ? $history->en_description : $history->jp_description !!}
											<footer>&nbsp;</footer>
										</blockquote>
									</div>

								</div>

                            @endforeach

                        @endif
							</div><!-- #posts end -->

						</div><!-- .postcontent end -->

                    </div>
                </div>
            </section>


            <section id="section-services" class="page-section topmargin-lg"  data-aos="fade-up">
                <div class="heading-block center">
                    <h2>Certification</h2>
                </div>


                    <div class="col-md-12 col-padding" style="background-color: #F5F5F5;">
                        <div>

                            <div class="row col-mb-50">

                                <div class="col-lg-12">
                                    {!! ($lang == 'en') ? $policy->en_iso : $policy->jp_iso !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

            <section id="section-pricing" class="page-section topmargin-lg"  data-aos="fade-up">
                <div class="heading-block center">
                    <h2>Integrated Management System (IMS) Policy</h2>
                </div>
                <div class="col-md-12" style="background-color: #F5F5F5;" >
                    <div>
                        <div class="row align-items-stretch" style="max-width: 100%;">
                            <div class="col-md-4" style="background: url('/assets/images/PAPTI-3.jpg') center center no-repeat; background-size: cover;"></div>
                            <div class="col-lg-8 col-padding">
                                {!! ($lang == 'en') ? $policy->en_ims : $policy->jp_ims !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>

</div>

@include('client.layouts.footer')

