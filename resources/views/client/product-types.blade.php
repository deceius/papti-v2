

@section('current_url', 'product-list')
@include(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-dark" style="background-image:url('/assets/images/headers/products.png'); padding: 150px 0;">
    <div class="container clearfix">
        <h1>Product Applications</h1>

    </div>
</section>
<!-- #page-title end -->


		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">



					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container gutter-20 mb-4" >

                        @foreach ($product_types as $product_type)
                                    <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                                        <div class="card">
                                         <div class="card-body row">
                                            <div class="col-md-12">
                                                <div class="portfolio-image">
                                                    <img src="{{ $product_type->getMedia('image')[0]->getUrl('thumb_200') }}" alt="{{ $product_type->en_name }}" width=80%>

                                            </div>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark animated fadeOut" data-hover-animate="fadeIn" style="animation-duration: 600ms;">
                                                     <a href="{{ url('/'.$lang.'/product-application/'.$product_type->id)}}" class="overlay-trigger-icon bg-light text-dark animated fadeOutUpSmall" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" style="animation-duration: 350ms;"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark animated fadeOut" data-hover-animate="fadeIn" style="animation-duration: 600ms;"></div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 fbox-content mt-4">
                                                <h3>{{ ($lang == 'en') ? $product_type->en_title : $product_type->jp_title }}</h3>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                        @endforeach


					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->


@include('client.layouts.footer')

