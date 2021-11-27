@extends('client.layouts.footer')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-dark" style="background-image:url('/assets/images/headers/careers2.png'); padding: 150px 0;">
    <div class="container clearfix">
        <h1>Recruitment</h1>
    </div>
</section>
<!-- #page-title end -->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix mb-4 ">
            <div class="fancy-title title-border title-center">
                <h1>Join our growing team and be a part of an exciting journey!</h1>
            </div>
            <img src="/assets/images/papti/papti-rec.JPG" width=100% class="mb-4">
            <div class="fancy-title title-bottom-border">
                <h2>Our Company</h2>
            </div>
            <div class="row mt-10">
                
                <div class="col-lg-12">
                    <div class="heading-block center">
                        <h3>Mission</h3>
                </div>
                    <p>{!! ($lang == 'en') ? $profile->en_mission : $profile->jp_mission !!}</p>
                </div>
                <div class="col-lg-12">
                                    <div class="heading-block center">
                        <h3>Vision</h3>
                </div>
                    <p>{!! ($lang == 'en') ? $profile->en_vision : $profile->jp_vision !!}</p>
                </div>
            </div>
           
                            <div class="heading-block center">
                    <h2>{!! $profile->en_recruitment_title !!}</h2>
                </div>
            <p>{!! ($lang == 'en') ? $profile->en_recruitment_details : $profile->jp_recruitment_details !!}</p>
            <p>Please send inquiry for interested applicants or send resume at:<br><a href="mailto:paptirecruitment@gmail.com" target="_blank">paptirecruitment@gmail.com</a></p>

        </div>


    </div>
</section><!-- #content end -->



@endsection

@extends(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')
