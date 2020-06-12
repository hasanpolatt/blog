<footer class="site-footer">
			<div class="scroll-to-top-button">
				<i class="base-icon-next-1"></i><span>başa dön</span>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<div class="site-logo">
							<a data-magic-cursor="link" href="index.php"><img alt="Plaxer" class="light" src="images/logo1.png"><img alt="Plaxer" class="dark" src="images/logo1.png"></a>
						</div>
						<div class="widget widget_text" id="text-2">
							<div class="textwidget">
								<script>
								(function() {
								if ( ! window.mc4wp) {
								window.mc4wp = {
								    listeners: [],
								    forms    : {
								        on: function (event, callback) {
								            window.mc4wp.listeners.push(
								                {
								                    event   : event,
								                    callback: callback
								                }
								            );
								        }
								    }
								}
								}
								})();
								</script><!-- Mailchimp for WordPress v4.7.4 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
								<form class="mc4wp-form mc4wp-form-151" data-id="151" data-name="Subscribe Form" id="mc4wp-form-1" method="post" name="mc4wp-form-1">
									<div class="mc4wp-form-fields">
										<div class="subscribe-form">
											<div class="input-row">
												<input class="input" name="EMAIL" placeholder="Enter your email" required="" type="email">
											</div><button type="submit"><i class="base-icon-right-arrow"></i><span>Subscribe</span></button>
										</div>
									</div><label style="display: none !important;">Leave this field empty if you're human: <input autocomplete="off" name="_mc4wp_honeypot" tabindex="-1" type="text" value=""></label><input name="_mc4wp_timestamp" type="hidden" value="1591441731"><input name="_mc4wp_form_id" type="hidden" value="151"><input name="_mc4wp_form_element_id" type="hidden" value="mc4wp-form-1">
									<div class="mc4wp-response"></div>
								</form><!-- / Mailchimp for WordPress Plugin -->
							</div>
						</div>
						<div class="widget_text widget widget_custom_html" id="custom_html-3">
							<div class="textwidget custom-html-widget">
								<div class="text-t1">
									The world without photography will be meaningless to us.
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-3">
						<div class="widget_text widget widget_custom_html" id="custom_html-4">
							<h6 class="widget-title">Adres</h6>
							<div class="textwidget custom-html-widget">
								<p>Baker Street 223b London, CA 70413<br>
								<strong>Open:</strong> 9:30 AM 5:30PM</p>
								<div class="contact-row">
									<div class="label">
										Phone:
									</div>
									<div class="value">
										+1 (800) 456 37 11
									</div>
								</div>
								<div class="contact-row">
									<div class="label">
										Email:
									</div>
									<div class="value">
										support@promo-theme.com
									</div>
								</div>
							</div>
						</div>
						<div class="social-links-widget widget">
							<div class="social-links">
								<a href="#" target="_self"><i class="base-icon-instagram-social-network-logo-of-photo-camera"></i></a><a href="#" target="_self"><i class="fab fa-facebook-f"></i></a><a href="#" target="_self"><i class="fab fa-twitter"></i></a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-3">
							<h6 class="widget-title">Son Gönderiler</h6>
                            <?php
                            $iceriksor=$db->prepare("SELECT * FROM posts ORDER BY title DESC LIMIT 2 ");
                            $iceriksor->execute(array(0));
                            while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>
                            <div class="widget widget_recent_entries" id="recent-posts-3">
							<ul>
								<li>
									<a href="pubg/kills-you-slowly-2/index.html"><?php echo $icerikcek['title'] ?></a>
                                    <span class="post-date"><?php echo substr($icerikcek['detail'], 0,50) ?>...</span>
								</li>
							</ul>

						</div>
                            <?php } ?>
					</div>
					<div class="col-12 col-sm-4 col-md-3">
						<div class="widget widget_recent_comments" id="recent-comments-3">
							<h6 class="widget-title">Son Yorumlar</h6>
							<ul id="recentcomments">
								<li class="recentcomments">
									<span class="comment-author-link">Elena Cobsky</span> - <a href="streams/driving-engagement-online/index.html#comment-7">Driving Engagement Online</a>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="left-text">
						© 2019, Hasan Polat <a href="#">Team</a> | <a href="#">Privacy Policy</a>
					</div>
					<div class="right-text">
						Tüm Hakları Saklıdır.
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script id="wpb-modifications" type="text/html">
	</script>
	<script>
	(function() {function addEventListener(element,event,handler) {
	   if (element.addEventListener) {
	       element.addEventListener( event,handler, false );
	   } else if (element.attachEvent) {
	       element.attachEvent( 'on' + event,handler );
	   }
	}
	function maybePrefixUrlField() {
	   if (this.value.trim() !== '' && this.value.indexOf( 'http' ) !== 0) {
	       this.value = "http://" + this.value;
	   }
	}

	var urlFields = document.querySelectorAll( '.mc4wp-form input[type="url"]' );
	if ( urlFields && urlFields.length > 0 ) {
	   for ( var j = 0; j < urlFields.length; j++ ) {
	       addEventListener( urlFields[j],'blur',maybePrefixUrlField );
	   }
	}
	/* test if browser supports date fields */
	var testInput = document.createElement( 'input' );
	testInput.setAttribute( 'type', 'date' );
	if ( testInput.type !== 'date') {

	   /* add placeholder & pattern to all date fields */
	   var dateFields = document.querySelectorAll( '.mc4wp-form input[type="date"]' );
	   for (var i = 0; i < dateFields.length; i++) {
	       if ( ! dateFields[i].placeholder) {
	           dateFields[i].placeholder = 'YYYY-MM-DD';
	       }
	       if ( ! dateFields[i].pattern) {
	           dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
	       }
	   }
	}
	})();
	</script> 
	<script>
	       var c = document.body.className;
	       c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
	       document.body.className = c;
	</script>
	<link href='wp-content/plugins/pt-plaxer-addons/assets/css/pt-inline1852.css?ver=5.3.3' id='pt-inline-css' media='all' rel='stylesheet'>
	<style id='pt-inline-inline-css'>
	.vc_column_container-5edb79434b687{background-size:cover !important;background-position:50% 50% !important}
	.banner-item-5de8ad22213fb .heading-block .h{font-size:30px !important}@media (min-width:576px){.banner-item-5de8ad22213fb .heading-block .h{font-size:48px !important}}
	.banner-item-5de8ad22213fb .bg-overlay .image{background-position:50% 50%}.banner-item-5de8ad22213fb .bg-overlay .image{background-size:cover}
	.banner-item-5dedee51a2bb4 .heading-block .h{font-size:30px !important}@media (min-width:576px){.banner-item-5dedee51a2bb4 .heading-block .h{font-size:48px !important}}
	.banner-item-5dedee51a2bb4 .bg-overlay .image{background-position:50% 50%}.banner-item-5dedee51a2bb4 .bg-overlay .image{background-size:cover}
	.banner-item-5dedeeb59d092 .heading-block .h{font-size:30px !important}@media (min-width:576px){.banner-item-5dedeeb59d092 .heading-block .h{font-size:48px !important}}
	.banner-item-5dedeeb59d092 .bg-overlay .image{background-position:50% 50%}.banner-item-5dedeeb59d092 .bg-overlay .image{background-size:cover}
	.vc_row-5de8e4454e074{margin-bottom:150px !important}
	.vc_row-5de8e4454e074 .bg-overlay .gradient{background-image:-webkit-linear-gradient(90deg, #110513 0%, #100b19 100%);background-image:-o-linear-gradient(90deg, #110513 0%, #100b19 100%);background-image:linear-gradient(90deg, #110513 0%, #100b19 100%)}
	.vc_column_container-5edb79434d344{background-size:cover !important;background-position:50% 50% !important}
	.icon-box-block-5de8daaadc355{margin-top:0px !important;margin-bottom:-50px !important}
	.vc_row-5de8f1267e941{margin-bottom:95px !important}
	.vc_column_container-5de8f7db729f1{background-size:cover !important;background-position:50% 50% !important}
	.vc_column_container-5de8f7e73d809{background-size:cover !important;background-position:50% 50% !important}
	.video-block-5de8f0bce2747 .bg-overlay .image{background-position:50% 50%}.video-block-5de8f0bce2747 .bg-overlay .image{background-size:cover}
	.vc_column_container-5edb79434e394{background-size:cover !important;background-position:50% 50% !important}
	.vc_row-5dede4351b934{margin-top:50px !important;margin-bottom:10px !important}
	.vc_column_container-5edb79439a843{background-size:cover !important;background-position:50% 50% !important}
	@media (min-width:768px){.matches-block-5dea249adb32b{margin-top:-65px !important}}
	.vc_row-5dede58f0c913{padding-top:110px !important;padding-bottom:100px !important}
	.vc_row-5dede58f0c913 .bg-overlay .image{background-position:50% 100%}.vc_row-5dede58f0c913 .bg-overlay .image{background-size:cover}
	.vc_column_container-5edb7943a2433{background-size:cover !important;background-position:50% 50% !important}
	.heading-5dede55f2d010{margin-top:0px !important;margin-bottom:0px !important}
	@media (min-width:992px){.heading-5dede55f2d010 .h{font-size:40px !important}}
	.heading-5dede55f2d010 .h{text-transform:uppercase !important}.heading-5dede55f2d010 .h{font-weight:700 !important}
	.wpb_text_column-5dede57148015{margin-top:20px !important;margin-bottom:20px !important;max-width:390px !important}
	.vc_row-5dee157a3d61e{margin-top:100px !important;margin-bottom:55px !important}
	.vc_column_container-5dee11f37619f{background-size:cover !important;background-position:50% 50% !important}
	.vc_column_container-5edb7943a2cb7{background-size:cover !important;background-position:50% 50% !important}
	.wpb_text_column-5dee171287052{margin-top:-5px !important}
	.photo-carousel-block-5dee177999b09 .swiper-slide{width:185px}
	</style>
	<script>
	/* <![CDATA[ */
	var wpcf7 = {"apiSettings":{"root":"https:\/\/promo-theme.com\/plaxer\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/contact-form-7/includes/js/scriptsb62d.js?ver=5.1.6'>
	</script> 
	<script src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'>
	</script> 
	<script>
	/* <![CDATA[ */
	var woocommerce_params = {"ajax_url":"\/plaxer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/plaxer\/?wc-ajax=%%endpoint%%"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7e2e.js?ver=3.8.1'>
	</script> 
	<script>
	/* <![CDATA[ */
	var wc_cart_fragments_params = {"ajax_url":"\/plaxer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/plaxer\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_700bf9de335fd69d7965a802cea344d6","fragment_name":"wc_fragments_700bf9de335fd69d7965a802cea344d6","request_timeout":"5000"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7e2e.js?ver=3.8.1'>
	</script> 
	<script src='wp-content/themes/plaxer/js/magic-cursor8a54.js?ver=1.0.0'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/isotope.pkgd.min7c45.js?ver=3.0.6'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/jquery.scrollbar.min22c9.js?ver=0.2.10'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/swiper.min268f.js?ver=4.5.0'>
	</script> 
	<script src='wp-content/themes/plaxer/js/scripts.js'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/js_composer_front.min8a54.js?ver=1.0.0'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/parallax.min.js'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/photoswipe.min0235.js?ver=4.1.1'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/photoswipe-ui-default.min0235.js?ver=4.1.1'>
	</script> 
	<script src='wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0'>
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/load-posts8a54.js?ver=1.0.0'>
	</script> 
	<script>
	/* <![CDATA[ */
	var yprm_ajax = {"url":"https:\/\/promo-theme.com\/plaxer\/wp-admin\/admin-ajax.php"};
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/pt-scripts8a54.js?ver=1.0.0'>
	</script> 
	<script>
	jQuery(document).ready(function (jQuery) {
	     if(jQuery('.banner-area-5de8ad746455c .banner-slider').find('.banner-item').length > 1){
	     var $area = jQuery('.banner-area-5de8ad746455c'),
	       $slider = $area.find('.banner-slider');
	   
	     var $banner_slider_swiper = new Swiper($slider, {
	       loop: true,
	       speed: 800,
	       
	       
	       navigation: {
	         nextEl: $area.find('.next'),
	         prevEl: $area.find('.prev'),
	       },
	       pagination: {
	         clickable: true,
	         el: $slider.find('.banner-pagination'),
	         renderBullet: function (index, className) {
	           return '<span class="' + className + '"><span>' + leadZero(index + 1) + '<\/span><\/span>';
	         }
	       },
	       on: {
	         
	         slideChange: function() {
	           control_video($slider.find('.swiper-slide .video'), 'pause');
	         },
	         slideChangeTransitionEnd: function() {
	           control_video($slider.find('.swiper-slide-active .video'), 'play');
	         }
	       },
	     });
	     
	   }
	   });
	jQuery(document).ready(function (jQuery) {
	     var $tournaments_block = jQuery('.tournaments-block-5df38143f6125'),
	     $tournaments_block_swiper = new Swiper($tournaments_block.find('.swiper-container'), {
	       loop: true,
	       
	       spaceBetween: 30,
	       watchSlidesVisibility: true,
	       loopAdditionalSlides: 2,
	       navigation: {
	         nextEl: $tournaments_block.find('.next'),
	         prevEl: $tournaments_block.find('.prev'),
	       },
	       slidesPerView: 'auto'
	     });
	   });
	jQuery(document).ready(function (jQuery) {
	     var $gallery_carousel = jQuery('.photo-carousel-block-5dee177999b09'),
	   $gallery_carousel_swiper = new Swiper($gallery_carousel, {
	     loop: true,
	     
	     slidesPerView: 'auto',
	     centeredSlides: true,
	   });
	   });
	</script> 
	<script src='wp-includes/js/wp-embed.min1852.js?ver=5.3.3'>
	</script> 
	<script>
	/* <![CDATA[ */
	var mc4wp_forms_config = [];
	/* ]]> */
	</script> 
	<script src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min125b.js?ver=4.7.4'>
	</script> <!--[if lte IE 9]>
<script src='https://promo-theme.com/plaxer/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.7.4'></script>
<![endif]-->
	<!-- Mirrored from promo-theme.com/plaxer/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 12:34:34 GMT -->
	<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Object Caching 31/951 objects using disk
Page Caching using disk: enhanced 

Served from: promo-theme.com @ 2020-06-06 11:08:51 by W3 Total Cache
-->
</body>
</html>