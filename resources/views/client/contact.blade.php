
@section('current_url', 'contact')
@include(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')

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
                <div class=" col-lg-9">


                       <p>
                           @if ($lang == 'en')
                           We will send your inquiry to the e-mail address you have provided. Please take a moment to fill in all the fields, and after confirming the contents, our staff will contact you.
                           @else
                           お問い合わせ内容をご登録頂いたメールアドレスに連絡致します。お手数ですが、全ての項目をご記入頂き、内容を確認後、担当よりご連絡させて頂きます。
                           @endif

                       </p>
                        <form class="mb-0" action="/sendEmail" method="post" role="form">
                            @csrf
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="template-contactform-name">{{ ($lang == 'en') ? 'Your Name' : 'お名前'}} <small>*</small></label>
                                    <input type="text" id="name" name="name" value="" class="sm-form-control required" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="template-contactform-name">{{ ($lang == 'en') ? 'Company Name' : '会社名'}} <small>*</small></label>
                                    <input type="text" id="company" name="company" value="" class="sm-form-control required" />
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="template-contactform-email">{{ ($lang == 'en') ? 'Email Address' : 'メールアドレス'}} <small>*</small></label>
                                    <input type="email" id="email" name="email" value="" class="required sm-form-control" />
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="template-contactform-phone">{{ ($lang == 'en') ? 'Contact Number' : '電話番号 '}}</label>
                                    <input type="text" id="contact" name="contact" value="" class="sm-form-control" />
                                </div>


                                <div class="col-md-12 form-group">
                                    <label for="template-contactform-service">{{ ($lang == 'en') ? 'Inquiry Item' : '電話番号 '}}</label>
                                    <select id="type" name="type" class="sm-form-control">
                                        <option value="">-- Select One --</option>
                                        <option value="About our Products">{{ ($lang == 'en') ? 'About our product' : '製品について '}}</option>
                                        <option value="Recruitment / Hiring">{{ ($lang == 'en') ? 'Recruitment / Hiring' : '募集・採用情報 '}}</option>
                                        <option value="Others">{{ ($lang == 'en') ? 'Others' : 'その他 '}}</option>
                                    </select>
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">{{ ($lang == 'en') ? 'Inquiry Details' : 'お問い合わせ内容'}} <small>*</small></label>
                                    <textarea class="required sm-form-control" id="details" name="details" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" >Submit</button>
                                </div>
                            </div>
                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col-lg-3">

                    <address>
                        <strong>Address:</strong><br>
                        {{ $profile->company_address }}<br>
                    </address>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> {{ $profile->email_sales }}


                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
<!-- #content end -->

@include('client.layouts.footer')

