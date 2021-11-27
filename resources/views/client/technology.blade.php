@extends('client.layouts.footer')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-dark" style="background-image:url('/assets/images/headers/technology.png'); padding: 150px 0;">
    <div class="container clearfix">
        <h1>Technology</h1>
    </div>
</section>
<!-- #page-title end -->


<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix mb-4 mt-4">
            @foreach ($technology as $tech)
            <div class="fancy-title title-bottom-border">
                <h3>{{ $tech->en_title }}</h3>
            </div>
            <div id="oc-testi" class="mb-4 mt-4 owl-carousel testimonials-carousel carousel-widget" data-margin="20" data-items-sm="1" data-items-md="1" data-items-xl="1">
                                    @foreach ( $tech->getMedia('tech') as $tech_img)
                                    <div class="oc-item">
                                        <div class="testimonial">
                                            <div  class="text-center">
                                                <center><img style="max-height: 300px; display: block; width: auto; height: auto;" src="{{ $tech_img->getUrl() }}" alt="Customer Testimonails" ></center>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
					</div>
            <p>{{ $tech->en_description }}</p>
            @endforeach
        </div>

        {{-- <div class="container clearfix mb-4 mt-4">
            			<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="20" data-items-sm="1" data-items-md="1" data-items-xl="1">
                                    @foreach ($technology as $tech)
                                    <div class="oc-item">
                                        <div class="testimonial">
                                            <div  class="text-center">
                                                <center><img style="max-height: 300px; display: block; width: auto; height: auto;" src="{{ $tech->getMedia('tech')[0]->getUrl() }}" alt="Customer Testimonails" ></center>
                                            </div>
                                            <div class="testi-content">
                                                <h3 class="fancy-title title-bottom-border">{{ ($lang == 'en') ? $tech->en_title : $tech->jp_title}}</h3>
                                                <div class="text-muted">
                                                    {{ ($lang == 'en') ? $tech->en_description : $tech->jp_description }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
					</div>
        </div> --}}
    </div>
</section><!-- #content end -->

@endsection

@extends(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')
