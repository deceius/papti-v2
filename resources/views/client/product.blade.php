@extends('client.layouts.footer')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-dark" style="background-image:url('/assets/images/headers/products.png'); padding: 150px 0;">
    <div class="container clearfix">
        <h1>Products</h1>

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
					<div id="portfolio" class="portfolio row grid-container  text-center mb-4">

						@foreach ($products as $product)
                        
                        
                          <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                                        <a href="{{ url('/'.$lang.'/product/'.$product->id)}}">
                                        <div class="card">
                                         <div class="card-body row" >
<div class="col-md-12">
                                                <img src="{{ $product->getMedia('product')[0]->getUrl('thumb_200') }}" alt="{{ $product->en_name }}" width=80%>
                                            </div>
                                            <div class="col-md-12 fbox-content">
                                                <h3>{{ ($lang == 'en') ? $product->en_name : $product->jp_name }}</h3>
                                            </div>
                                            
                                          </div>
                                        </div>
                                    </a>
                                      </div>
                        @endforeach



					</div><!-- #portfolio end -->
                    <p class="text-center"><strong>Sales Department:</strong> TEL (046) 437 2705 to 07 loc. 104, 105, 134, 145</p>
				</div>
			</div>
		</section><!-- #content end -->


@endsection

@extends(($lang == 'en') ? 'client.layouts.header' : 'client.layouts.header_jp')
