
@section('current_url',  'product_'.$id)
@include(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')

		<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-dark" style="background-image:url('/assets/images/headers/products.png'); padding: 150px 0;">
            <div class="container clearfix">
                <h1>Product Information</h1>

            </div>
        </section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row">
                        <!-- Portfolio Single Content
						============================================= -->
						<div class="col-lg-8 portfolio-single-content">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>{{ ($lang == 'en') ? $product->en_name : $product->jp_name }}</h2>
							</div>
							<p>{{($lang == 'en') ? $product->en_description : $product->jp_description}}</p>
							<!-- Portfolio Single - Description End -->

							<div class="line" style="margin: 1rem 0;"></div>

							<p class="text-center"><strong>Sales Department:</strong> TEL (046) 437 2705 to 07 loc. 104, 105, 134, 145</p>
						</div><!-- .portfolio-single-content end -->
						<!-- Portfolio Single Image
						============================================= -->
						<div class="col-lg-4 portfolio-single-image">
							<img src="{{ $product->getMedia('image')[0]->getUrl() }}" alt="{{ $product->en_name}}">
						</div><!-- .portfolio-single-image end -->



					</div>

				</div>
			</div>
		</section><!-- #content end -->

@include('client.layouts.footer')


