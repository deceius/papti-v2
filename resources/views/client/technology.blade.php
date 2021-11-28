

@include(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')

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
                                    @foreach ( $tech->getMedia('image') as $tech_img)
                                    <div class="oc-item">
                                        <div class="testimonial">
                                            <div  class="text-center">
                                                <center><img style="max-height: 300px; display: block; width: auto; height: auto;" src="{{ $tech_img->getUrl() }}" alt="Customer Testimonails" ></center>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
					</div>
            <p>{{ ($lang == 'en') ? $tech->en_description : $tech->jp_description }}</p>
            @endforeach
        </div>

    </div>
</section><!-- #content end -->

@include('client.layouts.footer')

