@extends('client.layouts.footer')

@section('content')


<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-dark" style="background-image:url('/assets/images/headers/contact.png'); padding: 150px 0;">
    <div class="container clearfix">
        <h1>Contact Us</h1>

    </div>
</section>
<!-- #page-title end -->


<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
                ============================================= -->
                <div class="postcontent col-lg-9">


                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Company Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">Contact Number</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                </div>


                                <div class="col-md-8 form-group">
                                    <label for="template-contactform-service">Inquiry Item</label>
                                    <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                        <option value="">-- Select One --</option>
                                        <option value="About our Products">About our Products</option>
                                        <option value="Recruitment / Hiring">Recruitment / Hiring</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Inquiry Details <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col-lg-3">

                    <address>
                        <strong>Address:</strong><br>
                        {{ $profile->address }}<br>
                    </address>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> {{ $profile->email_sales }}


                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
<!-- #content end -->


@endsection

@extends(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')
