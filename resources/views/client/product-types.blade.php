@extends('client.layouts.footer')

@section('content')

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
                                        <a href="{{ url('/'.$lang.'/product-type/'.$product_type->id)}}">
                                        <div class="card">
                                         <div class="card-body row" >
<div class="col-md-12">
                                                <img src="{{ $product_type->getMedia('product_type')[0]->getUrl('thumb_200') }}" alt="{{ $product_type->en_name }}" width=80%>
                                            </div>
                                            <div class="col-md-12 fbox-content">
                                                <h3>{{ $product_type->name }}</h3>
                                            </div>
                                            
                                          </div>
                                        </div>
                                    </a>
                                      </div>
                        @endforeach


					</div><!-- #portfolio end -->

				</div>
			</div>
		</section><!-- #content end -->


@endsection

@extends(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')
