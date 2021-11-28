@section('current_url', 'home')
@include(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')
<!-- Slider
============================================= -->
<section id="slider" class="slider-element revslider-wrap include-header h-auto">
    <div class="slider-inner">
        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        @if (count($banners) > 0)

        <div id="rev_slider_679_1_wrapper" class="rev_slider_wrapper fullwidth-container"  style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
            <div id="rev_slider_679_1" class="rev_slider fullwidthbanner" style="display:none; " data-version="5.1.4">
                <ul style="color: #fff;">
                @foreach ($banners as $banner)
                    <!-- SLIDE  -->
                    <li class=" " data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000"  data-saveperformance="on"">
                        <!-- MAIN IMAGE -->
                        <img src="{{ $banner->getMedia('image')[0]->getUrl() }}"  alt="" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->


                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                        data-x="middle" data-hoffset="0"
                        data-y="top" data-voffset="230"
                        data-fontsize="['60','50','40','34']"
                        data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                        data-speed="800"
                        data-start="1200"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;">{{ $banner->en_title }}</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                        data-x="middle" data-hoffset="0"
                        data-y="top" data-voffset="340"
                        data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                        data-speed="800"
                        data-start="1400"
                        data-easing="easeOutQuad"
                        data-width="['650','650','480','360']"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-textAlign="center"
                        data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;">{{($lang == 'en') ? $banner->en_subtitle :  $banner->jp_subtitle}}</div>


                    </li>

                @endforeach

                </ul>

            </div>
        </div><!-- END REVOLUTION SLIDER -->

        @endif
    </div>
</section>

   <div >
    <div class="fancy-title title-bottom-border mt-4" style="padding: 0rem 1.5rem; max-width: 100%;">
        <h1>Product Applications</h1>
    </div>
    <div class=" clearfix" style="padding: 0rem 1.5rem; max-width: 100%;">
        <div id="oc-fbox" class="owl-carousel fbox-carousel carousel-widget mb-5" data-margin="35"  data-autoplay="2000" data-loop="true" data-pagi="false" data-items-xs="2" data-items-md="3" data-items-xl="5">
            @foreach ($product_types as $product_type)
            <div class="oc-item">
                <div class="feature-box fbox-center fbox-bg fbox-border fbox-effect" style="min-height: 370px; margin-top: 0px;">
                    <a href="{{ url('/'.$lang.'/product-application/'.$product_type->id)}}" class="mt-4" ><img src="{{ $product_type->getMedia('image')[0]->getUrl('thumb_200') }}"  style="width: auto; height: auto;"></a>
                    <div class="fbox-content mt-4">
                        <a href="{{ url('/'.$lang.'/product-application/'.$product_type->id)}}"><h4>{{ $product_type->en_title}}</h4></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<div class="row align-items-stretch" style="max-width: 100%; --bs-gutter-x: 0rem;">

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #1abc9c;">
        <div>
            <h3 class="text-uppercase" style="font-weight: 600;">Our Products</h3>
            <p style="line-height: 1.8;">We take pride in our products manufactured with state-of-the-art equipment, maintaining high-quality products for our clients.</p>
            <a href="{{url('/'.$lang.'/product-list')}}" class="button button-border button-light button-rounded text-uppercase m-0">Learn More</a>
            <i class="icon-cog bgicon"></i>
        </div>
    </div>

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;">
        <div>
            <h3 class="text-uppercase" style="font-weight: 600;">We are ISO Certified</h3>
            <p style="line-height: 1.8;"> Known by our state-of-the-art technology and practices in manufacturing, backed by years of experience and multiple ISO certifications.</p>
            <a href="{{url('/'.$lang.'/about')}}" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
            <i class="icon-globe bgicon"></i>
        </div>
    </div>

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;">
        <div>
            <h3 class="text-uppercase" style="font-weight: 600;">Get in Touch</h3>
            <p style="line-height: 1.8;">We would love to hear from you! Please let us know if you are interested in our products, or just want to inquire anything about us.</p>
            <a href="{{url('/'.$lang.'/contact')}}" class="button button-border button-light button-rounded text-uppercase m-0">Inquire Now</a>
            <i class="icon-phone bgicon"></i>
        </div>
    </div>


</div>

@include('client.layouts.footer')
