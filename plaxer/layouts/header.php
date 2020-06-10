<?php
include '../panel/func/conn.php';
$ayarsor=$db->prepare("SELECT * FROM ayar where id=1");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from promo-theme.com/plaxer/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 12:33:22 GMT -->
<!-- Added by HTTrack -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type"><!-- /Added by HTTrack -->
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="http://gmpg.org/xfn/11" rel="profile">
	<meta content="#000" name="theme-color">
	<title><?php echo $ayarcek['title'] ?></title>
	<link href='http://use.typekit.net/' rel='dns-prefetch'>
	<link href='http://s.w.org/' rel='dns-prefetch'>
	<link href="feed/index.php" rel="alternate" title="Plaxer &raquo; Feed" type="application/rss+xml">
	<link href="comments/feed/index.php" rel="alternate" title="Plaxer &raquo; Comments Feed" type="application/rss+xml">
	<script>
	           window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/promo-theme.com\/plaxer\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.3"}};
	           !function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<style>
	img.wp-smiley,
	img.emoji {
	   display: inline !important;
	   border: none !important;
	   box-shadow: none !important;
	   height: 1em !important;
	   width: 1em !important;
	   margin: 0 .07em !important;
	   vertical-align: -0.1em !important;
	   background: none !important;
	   padding: 0 !important;
	}
	</style>
	<link href='wp-admin/css/color-picker.min1852.css?ver=5.3.3' id='wp-color-picker-css' media='all' rel='stylesheet'>
	<link href='wp-includes/css/dist/block-library/style.min1852.css?ver=5.3.3' id='wp-block-library-css' media='all' rel='stylesheet'>
	<link href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style747d.css?ver=2.4.5' id='wc-block-style-css' media='all' rel='stylesheet'>
	<link href='wp-content/plugins/contact-form-7/includes/css/stylesb62d.css?ver=5.1.6' id='contact-form-7-css' media='all' rel='stylesheet'>
	<style id='woocommerce-inline-inline-css'>
	.woocommerce form .form-row .required { visibility: visible; }
	</style>
	<link href='wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.min87b5.css?ver=2.7.22' id='font-awesome-css' media='all' rel='stylesheet'>
	<link href='wp-content/themes/plaxer/css/iconfont1852.css?ver=5.3.3' id='plaxer-icons-css' media='all' rel='stylesheet'>
	<link href='wp-content/plugins/js_composer/assets/css/js_composer.min9b2d.css?ver=6.1' id='js_composer_front-css' media='all' rel='stylesheet'>
	<link href='wp-content/themes/plaxer/css/fontawesome.min1852.css?ver=5.3.3' id='fontawesome-css' media='all' rel='stylesheet'>
	<link href='wp-content/themes/plaxer/style1852.css?ver=5.3.3' id='plaxer-style-css' media='all' rel='stylesheet'>
	<link href='wp-content/plugins/pt-plaxer-addons/assets/css/swiper268f.css?ver=4.5.0' id='swiper-css' media='all' rel='stylesheet'>
	<link href='wp-content/themes/plaxer/css/main1852.css?ver=5.3.3' id='plaxer-main-style-css' media='all' rel='stylesheet'>
	<link href='wp-content/themes/plaxer/css/woocommerce1852.css?ver=5.3.3' id='woocommerce-general-css' media='all' rel='stylesheet'>
	<link href='wp-content/themes/plaxer/css/woocommerce-layout1852.css?ver=5.3.3' id='woocommerce-layout-css' media='all' rel='stylesheet'>
	<link href='wp-content/themes/plaxer/css/select21852.css?ver=5.3.3' id='select2-css' media='all' rel='stylesheet'>
	<link href='../../use.typekit.net/fir4xfr68b3.css?ver=1' id='plaxer-typekit-css' media='all' rel='stylesheet'>
	<link href='wp-content/plugins/pt-plaxer-addons/assets/css/photoswipe.css' id='photoswipe-css' media='all' rel='stylesheet'>
	<link href='wp-content/plugins/pt-plaxer-addons/assets/css/pt-addons1852.css?ver=5.3.3' id='pt-addons-css' media='all' rel='stylesheet'>
	<script src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'>
	</script>
	<script src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'>
	</script>
	<script src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'>
	</script>
	<script>
	/* <![CDATA[ */
	var wc_add_to_cart_params = {"ajax_url":"\/plaxer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/plaxer\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/promo-theme.com\/plaxer\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
	/* ]]> */
	</script>
	<script src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min7e2e.js?ver=3.8.1'>
	</script>
	<script src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart9b2d.js?ver=6.1'>
	</script>
	<script>
	/* <![CDATA[ */
	var zilla_likes = {"ajaxurl":"https:\/\/promo-theme.com\/plaxer\/wp-admin\/admin-ajax.php"};
	/* ]]> */
	</script>
	<script src='wp-content/plugins/pt-plaxer-addons/assets/js/zilla-likes1852.js?ver=5.3.3'>
	</script>
	<link href='wp-json/index.php' rel='https://api.w.org/'>
	<link href="xmlrpc0db0.php?rsd" rel="EditURI" title="RSD" type="application/rsd+xml">
	<link href="wp-includes/wlwmanifest.xml" rel="wlwmanifest" type="application/wlwmanifest+xml">
	<meta content="WordPress 5.3.3" name="generator">
	<meta content="WooCommerce 3.8.1" name="generator">
	<link href="index.php" rel="canonical">
	<link href='index.php' rel='shortlink'>
	<link href="wp-json/oembed/1.0/embeddf0c.json?url=https%3A%2F%2Fpromo-theme.com%2Fplaxer%2F" rel="alternate" type="application/json+oembed">
	<link href="wp-json/oembed/1.0/embed4d18?url=https%3A%2F%2Fpromo-theme.com%2Fplaxer%2F&amp;format=xml" rel="alternate" type="text/xml+oembed"><noscript>
	<style>
	.woocommerce-product-gallery{ opacity: 1 !important; }
	</style></noscript>
	<style>
	.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
	</style>
	<style>
	.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
	</style>
	<meta content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." name="generator">
	<link href="wp-content/uploads/2019/12/cropped-favicon-70x70.png" rel="icon" sizes="32x32">
	<link href="wp-content/uploads/2019/12/cropped-favicon-300x300.png" rel="icon" sizes="192x192">
	<link href="wp-content/uploads/2019/12/cropped-favicon-300x300.png" rel="apple-touch-icon-precomposed">
	<meta content="https://promo-theme.com/plaxer/wp-content/uploads/2019/12/cropped-favicon-300x300.png" name="msapplication-TileImage">
	<style class="options-output" title="dynamic-css">
	.site-header .site-logo, .site-header .site-logo a{width:160px;}body{font-family: proxima-nova;font-weight: 400;font-size: 16px;}h1, .h1{font-family: raleway;font-weight: 600;font-size: 60px;}h2, .h2{font-family: raleway;font-weight: 600;font-size: 48px;}h3, .h3{font-family: raleway;font-weight: 600;font-size: 40px;}h4, .h4{font-family: raleway;font-weight: 600;font-size: 36px;}h5, .h5{font-family: raleway;font-weight: 600;font-size: 30px;}h6, .h6{font-family: raleway;font-weight: 600;font-size: 24px;}.site-footer .site-logo, .site-footer .site-logo a{width:139px;}
	</style><noscript>
	<style>
	.wpb_animate_when_almost_visible { opacity: 1; }
	</style></noscript>
</head>
<body class="home page-template page-template-template-landing page-template-template-landing-php page page-id-14 theme-plaxer woocommerce-no-js dark-scheme preloader-true header-container header-light header-logo-left header-space-false right-click-disable-false popup-download-link-true mobile-images-false project-image-download-hide custom-cursor-false navigation-hover-style1 chrome windows wpb-js-composer js-comp-ver-6.1 vc_responsive">
	<div id="page">
		<div class="preloader-area">
			<div class="preloader-folding-cube">
				<div class="preloader-cube1 preloader-cube"></div>
				<div class="preloader-cube2 preloader-cube"></div>
				<div class="preloader-cube4 preloader-cube"></div>
				<div class="preloader-cube3 preloader-cube"></div>
			</div>
		</div>
		<header class="site-header light-color">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="logo-block col-auto">
						<div class="site-logo">
							<a data-magic-cursor="link" href="index.php"><img alt="Plaxer" class="light" src="images/logo1.png"><img alt="Plaxer" class="dark" src="images/logo1.png">
						</div>
					</div>
					<div class="right col-auto">
						<nav class="navigation visible_menu">
							<ul class="menu" id="menu-navigation">
								<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-40" id="menu-item-40">
									<a href="index.php"><span>Anasayfa</span></a>
									
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53" id="menu-item-53">
									<a href="blog.php"><span>Blog</span></a>
									
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-56" id="menu-item-56">
									<a href="gallery.php"><span>Galeri</span></a>
									
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54" id="menu-item-54">
									<a href="about.php"><span>Hakkımızda</span></a>
									
								</li>
							
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47" id="menu-item-47">
									<a href="contact.php"><span>İletişim</span></a>
								</li>
								
							</ul>
						</nav>
						<div class="header-search-button">
							<i class="base-icon-magnifying-glass"></i>
						</div>
					
					<div class="sidebar-butter" data-magic-cursor="link-small">
						<span></span><span></span><span></span>
					</div>
				</div>
			</div>
		</header>