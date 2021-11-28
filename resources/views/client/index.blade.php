

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
                    <li class=" " data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="url('{{ $banner->getMedia('image')[0]->getUrl() }}');" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
                        <!-- MAIN IMAGE -->
                        <img src="{{ $banner->getMedia('image')[0]->getUrl() }}"  alt="" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
                        data-x="middle" data-hoffset="0"
                        data-y="top" data-voffset="215"
                        data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                        data-speed="800"
                        data-start="1000"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"></div>

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
@include('client.layouts.footer')
