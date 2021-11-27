
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">


			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2021 PAPTI.<br>
							{{-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> --}}
						</div>

						<div class="col-md-6 text-center text-md-end">

							<div class="clear"></div>

							<!--<i class="icon-envelope2"></i> info@papti.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +123456789 <span class="middot">&middot;</span>-->
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/assets/js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="/assets/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="/assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="/assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

	<script src="/assets/js/plugins.infinitescroll.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
	<script>
		var tpj=jQuery;
		var revapi31;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if(tpj("#rev_slider_679_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_679_1");
			}else{
				revapi31 = tpj("#rev_slider_679_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullwidth",
					dottedOverlay:"none",
					delay:16000,
					hideThumbs:200,
					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,
					navigation: {
	                    keyboardNavigation: "on",
	                    keyboard_direction: "horizontal",
	                    mouseScrollNavigation: "off",
	                    onHoverStop: "off",
	                    touch: {
	                        touchenabled: "on",
	                        swipe_threshold: 75,
	                        swipe_min_touches: 1,
	                        swipe_direction: "horizontal",
	                        drag_block_vertical: false
	                    },
	                    arrows: {
	                        style: "hades",
	                        enable: true,
	                        hide_onmobile: false,
	                        hide_onleave: false,
	                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
	                        left: {
	                            h_align: "left",
	                            v_align: "center",
	                            h_offset: 10,
	                            v_offset: 0
	                        },
	                        right: {
	                            h_align: "right",
	                            v_align: "center",
	                            h_offset: 10,
	                            v_offset: 0
	                        }
	                    },
	                },
					responsiveLevels:[1140,1024,778,480],
					visibilityLevels:[1140,1024,778,480],
					gridwidth:[1140,1024,778,480],
					gridheight:[900,768,960,720],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

            revapi31.on("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
			});

			revapi31.on("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});
		});	/*ready*/
	</script>

    <script>

        // jQuery(window).on( 'load', function(){

        //     let $container = $('#posts');

        //     function blogTimelineEntries() {
        //         $('.post-timeline').find('.entry:not(.entry-date-section)').each( function(){
        //             let position = $(this).position();
        //             if( position.left === 0 ) {
        //                 $(this).removeClass('alt');
        //             } else {
        //                 $(this).addClass('alt');
        //             }
        //             $(this).find('.entry-timeline').fadeIn();
        //         });

        //         $('.entry').next().next().find('.entry-timeline').css({ 'top': '70px' });
        //     }

        //     $container.on( 'layoutComplete', function() {
        //         blogTimelineEntries();
        //     });

        //     $(window).resize(function() {
        //         $container.isotope('layout');
        //         setTimeout( function(){
        //             blogTimelineEntries();
        //         }, 2500 );
        //     });

        // });

    </script>

</body>
</html>
