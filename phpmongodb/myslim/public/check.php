
<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"
	itemscope 
	itemtype="http://schema.org/Article" 
	prefix="og: http://ogp.me/ns#" > <!--<![endif]-->
<head>
    <title>Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở nào? | Tech Talk</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="" />
    <meta property="og:image" content="https://static.techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr.png" /><meta name="author" content="Ai Hien">
<link rel="icon" type="image/png" href="https://static.techtalk.vn/wp-content/uploads/2016/02/favicon-1.png">
<!-- All in One SEO Pack 2.3.8 by Michael Torbert of Semper Fi Web Design[297,394] -->
<meta name="description" itemprop="description" content="Hãy tưởng tượng tổ chức của bạn đang muốn thực hiện search engine đầu tiên, đang muốn dùng 1 search engine khác - như những gì mà users của Google Search" />

<meta name="keywords" itemprop="keywords" content="elasticsearch,search,solr" />

<link rel="canonical" href="https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" />
<meta property="og:title" content="Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở nào? | Tech Talk" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" />
<meta property="og:image" content="https://static.techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr-1024x536.png" />
<meta property="og:site_name" content="Tech Talk" />
<meta property="fb:app_id" content="580972292069229" />
<meta property="og:description" content="Hãy tưởng tượng tổ chức của bạn đang muốn thực hiện search engine đầu tiên, đang muốn dùng 1 search engine khác - như những gì mà users của Google Search Appliance (GSA) đang làm hoặc đang cố tiết kiệm tiền bằng cách chuyển sang 1 open source mới. Bạn - 1 developer tài năng, giỏi giang - được triệu hồi để giải quyết vấn đề khó nhằn đó. Bạn cần rất nhiều thứ liên quan đến business, nhưng về cốt lõi, đó chính là vấn đề liên quan đến &quot;big data và search&quot; Bạn cần phải extract rất nhiều nội dung từ nhiều nguồn dữ liệu, hiểu được insights của chúng, từ đó mới giúp doanh nghiệp của bạn phát triển và đạt được mục tiêu đề ra trong năm. One Shot Có 2 sự lựa chọn: Elasticsearch hoặc Solr. Cả 2 đều đứng vững vàng ở 2 vị trí đầu trong các search engines thương mại nguồn mở (theo DB-Engines)  Vậy nên chọn công cụ nào? Tùy thuộc vào yêu cầu của bạn. Behind Facebook Search: Infrastructure &amp; Technology Hồ Chí Minh: 17h30 – 21h00 thứ 3, ngày 24/01/2017  Bước đầu tiên, bạn cần hiểu rõ ứng dụng phải" />
<meta property="article:published_time" content="2017-01-24T08:00:51Z" />
<meta property="article:modified_time" content="2017-01-26T11:06:49Z" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở nào? | Tech Talk" />
<meta name="twitter:description" content="Hãy tưởng tượng tổ chức của bạn đang muốn thực hiện search engine đầu tiên, đang muốn dùng 1 search engine khác - như những gì mà users của Google Search Appliance (GSA) đang làm hoặc đang cố tiết kiệm tiền bằng cách chuyển sang 1 open source mới. Bạn - 1 developer tài năng, giỏi giang - được triệu hồi để giải quyết vấn đề khó nhằn đó. Bạn cần rất nhiều thứ liên quan đến business, nhưng về cốt lõi, đó chính là vấn đề liên quan đến &quot;big data và search&quot; Bạn cần phải extract rất nhiều nội dung từ nhiều nguồn dữ liệu, hiểu được insights của chúng, từ đó mới giúp doanh nghiệp của bạn phát triển và đạt được mục tiêu đề ra trong năm. One Shot Có 2 sự lựa chọn: Elasticsearch hoặc Solr. Cả 2 đều đứng vững vàng ở 2 vị trí đầu trong các search engines thương mại nguồn mở (theo DB-Engines)  Vậy nên chọn công cụ nào? Tùy thuộc vào yêu cầu của bạn. Behind Facebook Search: Infrastructure &amp; Technology Hồ Chí Minh: 17h30 – 21h00 thứ 3, ngày 24/01/2017  Bước đầu tiên, bạn cần hiểu rõ ứng dụng phải" />
<meta name="twitter:image" content="https://static.techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr-1024x536.png" />
<meta itemprop="image" content="https://static.techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr-1024x536.png" />
<!-- /all in one seo pack -->
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Tech Talk &raquo; Feed" href="https://techtalk.vn/feed" />
<link rel="alternate" type="application/rss+xml" title="Tech Talk &raquo; Comments Feed" href="https://techtalk.vn/comments/feed" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/techtalk.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.2"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
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
<link rel='stylesheet' id='crayon-css'  href='https://static.techtalk.vn/wp-content/plugins/crayon-syntax-highlighter/css/min/crayon.min.css?ver=_2.7.2_beta' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://static.techtalk.vn/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.2.5.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
</style>
<link rel='stylesheet' id='google_font_open_sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C400%2C600%2C700&#038;subset=latin%2Cvietnamese&#038;ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-style-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A400%2C700&#038;subset=latin%2Cvietnamese&#038;ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='https://static.techtalk.vn/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.12' type='text/css' media='all' />
<link rel='stylesheet' id='td-theme-css'  href='https://static.techtalk.vn/wp-content/themes/Newspaper/style.css?ver=7.3c' type='text/css' media='all' />
<link rel='stylesheet' id='td-theme-child-css'  href='https://static.techtalk.vn/wp-content/themes/Newspaper-child/style.css?ver=7.3c' type='text/css' media='all' />
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js?ver=1.12.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var CrayonSyntaxSettings = {"version":"_2.7.2_beta","is_admin":"0","ajaxurl":"https:\/\/techtalk.vn\/wp-admin\/admin-ajax.php","prefix":"crayon-","setting":"crayon-setting","selected":"crayon-setting-selected","changed":"crayon-setting-changed","special":"crayon-setting-special","orig_value":"data-orig-value","debug":""};
var CrayonSyntaxStrings = {"copy":"Press %s to Copy, %s to Paste","minimize":"Click To Expand Code"};
/* ]]> */
</script>
<script type='text/javascript' src='https://static.techtalk.vn/wp-content/plugins/crayon-syntax-highlighter/js/min/crayon.min.js?ver=_2.7.2_beta'></script>
<script type='text/javascript' src='https://static.techtalk.vn/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.5.1'></script>
<script type='text/javascript' src='https://static.techtalk.vn/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.5.1'></script>
<link rel='https://api.w.org/' href='https://techtalk.vn/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://techtalk.vn/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://techtalk.vn/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='Giới thiệu về BEM &#8211; A Front end Methodology (phần 1)' href='https://techtalk.vn/gioi-thieu-ve-bem-a-front-end-methodology-phan-1.html' />
<link rel='next' title='Hack khách hàng của Facebook Fanpage' href='https://techtalk.vn/hack-khach-hang-cua-facebook-fanpage.html' />
<meta name="generator" content="WordPress 4.7.2" />
<link rel='shortlink' href='https://techtalk.vn/?p=13952' />
<link rel="alternate" type="application/json+oembed" href="https://techtalk.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" />
<link rel="alternate" type="text/xml+oembed" href="https://techtalk.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html&#038;format=xml" />
<!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://static.techtalk.vn/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="https://static.techtalk.vn/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.2.5.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />

<!-- JS generated by theme -->

<script>
    
    

	    var tdBlocksArray = []; //here we store all the items for the current page

	    //td_block class - each ajax block uses a object of this class for requests
	    function tdBlock() {
		    this.id = '';
		    this.block_type = 1; //block type id (1-234 etc)
		    this.atts = '';
		    this.td_column_number = '';
		    this.td_current_page = 1; //
		    this.post_count = 0; //from wp
		    this.found_posts = 0; //from wp
		    this.max_num_pages = 0; //from wp
		    this.td_filter_value = ''; //current live filter value
		    this.is_ajax_running = false;
		    this.td_user_action = ''; // load more or infinite loader (used by the animation)
		    this.header_color = '';
		    this.ajax_pagination_infinite_stop = ''; //show load more at page x
	    }


        // td_js_generator - mini detector
        (function(){
            var htmlTag = document.getElementsByTagName("html")[0];

            if ( navigator.userAgent.indexOf("MSIE 10.0") > -1 ) {
                htmlTag.className += ' ie10';
            }

            if ( !!navigator.userAgent.match(/Trident.*rv\:11\./) ) {
                htmlTag.className += ' ie11';
            }

            if ( /(iPad|iPhone|iPod)/g.test(navigator.userAgent) ) {
                htmlTag.className += ' td-md-is-ios';
            }

            var user_agent = navigator.userAgent.toLowerCase();
            if ( user_agent.indexOf("android") > -1 ) {
                htmlTag.className += ' td-md-is-android';
            }

            if ( -1 !== navigator.userAgent.indexOf('Mac OS X')  ) {
                htmlTag.className += ' td-md-is-os-x';
            }

            if ( /chrom(e|ium)/.test(navigator.userAgent.toLowerCase()) ) {
               htmlTag.className += ' td-md-is-chrome';
            }

            if ( -1 !== navigator.userAgent.indexOf('Firefox') ) {
                htmlTag.className += ' td-md-is-firefox';
            }

            if ( -1 !== navigator.userAgent.indexOf('Safari') && -1 === navigator.userAgent.indexOf('Chrome') ) {
                htmlTag.className += ' td-md-is-safari';
            }

        })();




        var tdLocalCache = {};

        ( function () {
            "use strict";

            tdLocalCache = {
                data: {},
                remove: function (resource_id) {
                    delete tdLocalCache.data[resource_id];
                },
                exist: function (resource_id) {
                    return tdLocalCache.data.hasOwnProperty(resource_id) && tdLocalCache.data[resource_id] !== null;
                },
                get: function (resource_id) {
                    return tdLocalCache.data[resource_id];
                },
                set: function (resource_id, cachedData) {
                    tdLocalCache.remove(resource_id);
                    tdLocalCache.data[resource_id] = cachedData;
                }
            };
        })();

    
    
var td_viewport_interval_list=[{"limitBottom":767,"sidebarWidth":228},{"limitBottom":1018,"sidebarWidth":300},{"limitBottom":1140,"sidebarWidth":324}];
var td_animation_stack_effect="type0";
var tds_animation_stack=true;
var td_animation_stack_specific_selectors=".entry-thumb, img";
var td_animation_stack_general_selectors=".td-animation-stack img, .post img";
var td_ajax_url="https:\/\/techtalk.vn\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=7.3";
var td_get_template_directory_uri="https:\/\/techtalk.vn\/wp-content\/themes\/Newspaper";
var tds_snap_menu="smart_snap_always";
var tds_logo_on_sticky="show_header_logo";
var tds_header_style="";
var td_please_wait="Vui long ch\u1edd...";
var td_email_user_pass_incorrect="Ng\u01b0\u1eddi d\u00f9ng ho\u1eb7c m\u1eadt kh\u1ea9u kh\u00f4ng ch\u00ednh x\u00e1c!";
var td_email_user_incorrect="Email ho\u1eb7c t\u00e0i kho\u1ea3n kh\u00f4ng ch\u00ednh x\u00e1c!";
var td_email_incorrect="Email kh\u00f4ng \u0111\u00fang!";
var tds_more_articles_on_post_enable="";
var tds_more_articles_on_post_time_to_wait="";
var tds_more_articles_on_post_pages_distance_from_top=0;
var tds_theme_color_site_wide="#ec1f27";
var tds_smart_sidebar="enabled";
var tdThemeName="Newspaper";
var td_magnific_popup_translation_tPrev="Tr\u01b0\u1edbc (Left arrow key)";
var td_magnific_popup_translation_tNext="Ti\u1ebfp (Right arrow key)";
var td_magnific_popup_translation_tCounter="%curr% c\u1ee7a %total%";
var td_magnific_popup_translation_ajax_tError="Kh\u00f4ng th\u1ec3 t\u1ea3i n\u1ed9i dung t\u1ea1i %url%";
var td_magnific_popup_translation_image_tError="Kh\u00f4ng th\u1ec3 t\u1ea3i \u1ea3nh #%curr%";
var td_ad_background_click_link="";
var td_ad_background_click_target="";
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74969413-1', 'auto');
  ga('send', 'pageview');

</script><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="post-template-default single single-post postid-13952 single-format-standard elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao wpb-js-composer js-comp-ver-4.12 vc_responsive td-animation-stack-type0 td-full-layout" itemscope="itemscope" itemtype="https://schema.org/WebPage">

        <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>
    
    <div class="td-menu-background"></div>
<div id="td-mobile-nav">
    <div class="td-mobile-container">
        <!-- mobile menu top section -->
        <div class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">
                
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.facebook.com/Techtalkvietnam/" title="Facebook">
                <i class="td-icon-font td-icon-facebook"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.youtube.com/channel/UC-T4to_yv4ocCOd6AVagvEg" title="Youtube">
                <i class="td-icon-font td-icon-youtube"></i>
            </a>
        </span>            </div>
            <!-- close button -->
            <div class="td-mobile-close">
                <a href="#"><i class="td-icon-close-mobile"></i></a>
            </div>
        </div>

        <!-- login section -->
        
        <!-- menu section -->
        <div class="td-mobile-content">
            <div class="menu-main-menu-container"><ul id="menu-main-menu" class="td-mobile-main-menu"><li id="menu-item-56" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first menu-item-56"><a href="http://techtalk.vn/tech">Công nghệ</a></li>
<li id="menu-item-3035" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-has-children menu-item-3035"><a href="https://techtalk.vn/category/dev">Lập trình<i class="td-icon-menu-right td-element-after"></i></a>
<ul class="sub-menu">
	<li id="menu-item-0" class="menu-item-0"><a href="https://techtalk.vn/category/dev/lap-trinh-ung-dung">Lập trình ứng dụng</a></li>
	<li class="menu-item-0"><a href="https://techtalk.vn/category/dev/lap-trinh-web">Lập trình web</a></li>
</ul>
</li>
<li id="menu-item-57" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-57"><a href="http://techtalk.vn/resources">Tools &#038; Tips</a></li>
<li id="menu-item-309" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-309"><a href="https://techtalk.vn/category/su-kien">Sự kiện</a></li>
<li id="menu-item-14222" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14222"><a href="https://techtalk.vn/category/chuyen-gia-noi">Chuyên gia nói</a></li>
<li id="menu-item-13675" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13675"><a href="https://techtalk.vn/category/tam-su-coder">Tâm sự coder</a></li>
<li id="menu-item-212" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-212"><a href="http://devvui.com">Devvui</a></li>
</ul></div>        </div>
    </div>

    <!-- register/login section -->
    </div>    <div class="td-search-background"></div>
<div class="td-search-wrap-mob">
	<div class="td-drop-down-search" aria-labelledby="td-header-search-button">
		<form method="get" class="td-search-form" action="https://techtalk.vn/">
			<!-- close button -->
			<div class="td-search-close">
				<a href="#"><i class="td-icon-close-mobile"></i></a>
			</div>
			<div role="search" class="td-search-input">
				<span>Tìm kiếm</span>
				<input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off" />
			</div>
		</form>
		<div id="td-aj-search-mob"></div>
	</div>
</div>    
    
    <div id="td-outer-wrap">
    
        <!--
Header style 1
-->

<div class="td-header-wrap td-header-style-1">

    <div class="td-header-top-menu-full">
        <div class="td-container td-header-row td-header-top-menu">
            <!-- LOGIN MODAL -->

                <div  id="login-form" class="white-popup-block mfp-hide mfp-with-anim">
                    <div class="td-login-wrap">
                        <a href="#" class="td-back-button"><i class="td-icon-modal-back"></i></a>
                        <div id="td-login-div" class="td-login-form-div td-display-block">
                            <div class="td-login-panel-title">Sign in</div>
                            <div class="td-login-panel-descr">Đăng nhập tài khoản</div>
                            <div class="td_display_err"></div>
                            <div class="td-login-inputs"><input class="td-login-input" type="text" name="login_email" id="login_email" value="" required><label>Tài khoản</label></div>
	                        <div class="td-login-inputs"><input class="td-login-input" type="password" name="login_pass" id="login_pass" value="" required><label>mật khẩu của bạn</label></div>
                            <input type="button" name="login_button" id="login_button" class="wpb_button btn td-login-button" value="Login">
                            <div class="td-login-info-text"><a href="#" id="forgot-pass-link">Forgot your password? Get help</a></div>
                            
                        </div>

                        

                         <div id="td-forgot-pass-div" class="td-login-form-div td-display-none">
                            <div class="td-login-panel-title">Password recovery</div>
                            <div class="td-login-panel-descr">Khởi tạo mật khẩu</div>
                            <div class="td_display_err"></div>
                            <div class="td-login-inputs"><input class="td-login-input" type="text" name="forgot_email" id="forgot_email" value="" required><label>email của bạn</label></div>
                            <input type="button" name="forgot_button" id="forgot_button" class="wpb_button btn td-login-button" value="Send My Password">
                            <div class="td-login-info-text">Mật khẩu đã được gửi vào email của bạn.</div>
                        </div>
                    </div>
                </div>
                        </div>
    </div>

    <div class="td-banner-wrap-full td-logo-wrap-full">
        <div class="td-container td-header-row td-header-header">
            <div class="td-header-sp-logo">
                            <a class="td-main-logo" href="https://techtalk.vn/">
                <img src="https://static.techtalk.vn/wp-content/uploads/2016/02/logoretina.png" alt=""/>
                <span class="td-visual-hidden">Tech Talk</span>
            </a>
                    </div>
            <div class="td-header-sp-recs">
                <div class="td-header-rec-wrap">
    <div class="td-a-rec td-a-rec-id-header  "><div class="td-all-devices" id="b-g-i-net-Y3hiMzZpOFBWVzQ9"></div></div>
</div>            </div>
        </div>
    </div>

    <div class="td-header-menu-wrap-full">
        <div class="td-header-menu-wrap td-header-gradient">
            <div class="td-container td-header-row td-header-main-menu">
                <div id="td-header-menu" role="navigation">
    <div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>
    <div class="td-main-menu-logo td-logo-in-header">
        		<a class="td-mobile-logo td-sticky-header" href="https://techtalk.vn/">
			<img class="td-retina-data" data-retina="https://static.techtalk.vn/wp-content/uploads/2016/02/mobile.png" src="https://static.techtalk.vn/wp-content/uploads/2016/02/mobile.png" alt=""/>
		</a>
			<a class="td-header-logo td-sticky-header" href="https://techtalk.vn/">
			<img src="https://static.techtalk.vn/wp-content/uploads/2016/02/logoretina.png" alt=""/>
		</a>
	    </div>
    <div class="menu-main-menu-container"><ul id="menu-main-menu-1" class="sf-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first td-menu-item td-mega-menu menu-item-56"><a href="http://techtalk.vn/tech">Công nghệ</a>
<ul class="sub-menu">
	<li class="menu-item-0"><div class="td-container-border"><div class="td-mega-grid"><div class="td_block_wrap td_block_mega_menu td_uid_2_58daa4b69560b_rand td-no-subcats td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_2_58daa4b69560b" ><script>var block_td_uid_2_58daa4b69560b = new tdBlock();
block_td_uid_2_58daa4b69560b.id = "td_uid_2_58daa4b69560b";
block_td_uid_2_58daa4b69560b.atts = '{"limit":"5","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"1","category_ids":"","custom_title":"","custom_url":"","show_child_cat":30,"sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_2_58daa4b69560b_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_2_58daa4b69560b.td_column_number = "3";
block_td_uid_2_58daa4b69560b.block_type = "td_block_mega_menu";
block_td_uid_2_58daa4b69560b.post_count = "5";
block_td_uid_2_58daa4b69560b.found_posts = "1222";
block_td_uid_2_58daa4b69560b.header_color = "";
block_td_uid_2_58daa4b69560b.ajax_pagination_infinite_stop = "";
block_td_uid_2_58daa4b69560b.max_num_pages = "245";
tdBlocksArray.push(block_td_uid_2_58daa4b69560b);
</script><div id=td_uid_2_58daa4b69560b class="td_block_inner"><div class="td-mega-row"><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/nguoi-dung-kien-micrsoft-do-bi-mat-du-lieu-sau-khi-nang-cap-windows-10.html" rel="bookmark" title="Người dùng kiện Micrsoft do bị mất dữ liệu sau khi nâng cấp Windows 10"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/thinkstockphotos-506505112-100713189-large-218x150.jpg" alt="" title="Người dùng kiện Micrsoft do bị mất dữ liệu sau khi nâng cấp Windows 10"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/nguoi-dung-kien-micrsoft-do-bi-mat-du-lieu-sau-khi-nang-cap-windows-10.html" rel="bookmark" title="Người dùng kiện Micrsoft do bị mất dữ liệu sau khi nâng cấp Windows 10">Người dùng kiện Micrsoft do bị mất dữ liệu sau khi&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/hay-xay-dung-mot-rest-api-serverless-hoa-voi-angular-persistence-va.html" rel="bookmark" title="Hãy xây dựng một REST API serverless hoá với Angular, Persistence và"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/1-A3cp3Q48OLI3FxfafhbbvQ-218x150.png" alt="" title="Hãy xây dựng một REST API serverless hoá với Angular, Persistence và"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/hay-xay-dung-mot-rest-api-serverless-hoa-voi-angular-persistence-va.html" rel="bookmark" title="Hãy xây dựng một REST API serverless hoá với Angular, Persistence và">Hãy xây dựng một REST API serverless hoá với Angular, Persistence&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/ket-hop-cong-nghe-vao-tri-nao-khong-con-la-chuyen-vien-tuong.html" rel="bookmark" title="Kết hợp công nghệ vào trí não &#8211; Không còn là chuyện viễn tưởng"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/490597796.0-218x150.jpg" alt="" title="Kết hợp công nghệ vào trí não &#8211; Không còn là chuyện viễn tưởng"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/ket-hop-cong-nghe-vao-tri-nao-khong-con-la-chuyen-vien-tuong.html" rel="bookmark" title="Kết hợp công nghệ vào trí não &#8211; Không còn là chuyện viễn tưởng">Kết hợp công nghệ vào trí não &#8211; Không còn là&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/phong-van-doc-quyen-voi-dai-dien-ban-giam-khao-cua-the-finlab-cycle-2.html" rel="bookmark" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/presentation-218x150.jpg" alt="" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/phong-van-doc-quyen-voi-dai-dien-ban-giam-khao-cua-the-finlab-cycle-2.html" rel="bookmark" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2">Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/huyen-thoai-starcraft-da-tro-lai-do-hoa-moi-hoan-toan-ho-tro-4k.html" rel="bookmark" title="Huyền thoại StarCraft đã trở lại, đồ họa mới hoàn toàn hỗ trợ 4K"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/169ddc3024cd14d7ce3d3f4a4a832ae6-218x150.jpg" alt="" title="Huyền thoại StarCraft đã trở lại, đồ họa mới hoàn toàn hỗ trợ 4K"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/huyen-thoai-starcraft-da-tro-lai-do-hoa-moi-hoan-toan-ho-tro-4k.html" rel="bookmark" title="Huyền thoại StarCraft đã trở lại, đồ họa mới hoàn toàn hỗ trợ 4K">Huyền thoại StarCraft đã trở lại, đồ họa mới hoàn toàn&#8230;</a></h3>            </div>
        </div>
        </div></div></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_2_58daa4b69560b" data-td_block_id="td_uid_2_58daa4b69560b"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_2_58daa4b69560b" data-td_block_id="td_uid_2_58daa4b69560b"><i class="td-icon-font td-icon-menu-right"></i></a></div><div class="clearfix"></div></div> <!-- ./block1 --></div></div></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent td-menu-item td-mega-menu menu-item-3035"><a href="https://techtalk.vn/category/dev">Lập trình</a>
<ul class="sub-menu">
	<li class="menu-item-0"><div class="td-container-border"><div class="td-mega-grid"><div class="td_block_wrap td_block_mega_menu td_uid_3_58daa4b69f1a1_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_3_58daa4b69f1a1" ><script>var block_td_uid_3_58daa4b69f1a1 = new tdBlock();
block_td_uid_3_58daa4b69f1a1.id = "td_uid_3_58daa4b69f1a1";
block_td_uid_3_58daa4b69f1a1.atts = '{"limit":4,"sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"19","category_ids":"","custom_title":"","custom_url":"","show_child_cat":30,"sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_3_58daa4b69f1a1_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_3_58daa4b69f1a1.td_column_number = "3";
block_td_uid_3_58daa4b69f1a1.block_type = "td_block_mega_menu";
block_td_uid_3_58daa4b69f1a1.post_count = "4";
block_td_uid_3_58daa4b69f1a1.found_posts = "956";
block_td_uid_3_58daa4b69f1a1.header_color = "";
block_td_uid_3_58daa4b69f1a1.ajax_pagination_infinite_stop = "";
block_td_uid_3_58daa4b69f1a1.max_num_pages = "239";
tdBlocksArray.push(block_td_uid_3_58daa4b69f1a1);
</script><div class="td_mega_menu_sub_cats"><div class="block-mega-child-cats"><a class="cur-sub-cat mega-menu-sub-cat-td_uid_3_58daa4b69f1a1" id="td_uid_4_58daa4b6a4429" data-td_block_id="td_uid_3_58daa4b69f1a1" data-td_filter_value="" href="https://techtalk.vn/category/dev">Tất cả</a><a class="mega-menu-sub-cat-td_uid_3_58daa4b69f1a1"  id="td_uid_5_58daa4b6a45ac" data-td_block_id="td_uid_3_58daa4b69f1a1" data-td_filter_value="129" href="https://techtalk.vn/category/dev/lap-trinh-ung-dung">Lập trình ứng dụng</a><a class="mega-menu-sub-cat-td_uid_3_58daa4b69f1a1"  id="td_uid_6_58daa4b6a47d0" data-td_block_id="td_uid_3_58daa4b69f1a1" data-td_filter_value="131" href="https://techtalk.vn/category/dev/lap-trinh-web">Lập trình web</a></div></div><div id=td_uid_3_58daa4b69f1a1 class="td_block_inner"><div class="td-mega-row"><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/chia-se-co-ban-su-dung-machine-learning-de-giai-quyet-bai-toan.html" rel="bookmark" title="Chia sẻ cơ bản sử dụng machine learning để giải quyết bài toán."><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/ml-218x150.png" alt="" title="Chia sẻ cơ bản sử dụng machine learning để giải quyết bài toán."/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/chia-se-co-ban-su-dung-machine-learning-de-giai-quyet-bai-toan.html" rel="bookmark" title="Chia sẻ cơ bản sử dụng machine learning để giải quyết bài toán.">Chia sẻ cơ bản sử dụng machine learning để giải quyết&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/kham-pha-nghe-product-4-ngay-toi-nen-bat-dau-tu-dau.html" rel="bookmark" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/mindset-218x150.jpg" alt="" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/kham-pha-nghe-product-4-ngay-toi-nen-bat-dau-tu-dau.html" rel="bookmark" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?">Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/chan-dung-dan-dien-gia-sieu-khung-cua-break-into-the-iot-generation.html" rel="bookmark" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/iot-speaker-ad-218x150.jpg" alt="" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/chan-dung-dan-dien-gia-sieu-khung-cua-break-into-the-iot-generation.html" rel="bookmark" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation">Chân dung dàn diễn giả “siêu khủng” của Break into the&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/internet-of-things-nhung-nguy-co-tiem-an-ve-bao-mat.html" rel="bookmark" title="Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo mật"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/News_CloudSecurity-218x150.jpg" alt="" title="Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo mật"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/internet-of-things-nhung-nguy-co-tiem-an-ve-bao-mat.html" rel="bookmark" title="Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo mật">Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo&#8230;</a></h3>            </div>
        </div>
        </div></div></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_3_58daa4b69f1a1" data-td_block_id="td_uid_3_58daa4b69f1a1"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_3_58daa4b69f1a1" data-td_block_id="td_uid_3_58daa4b69f1a1"><i class="td-icon-font td-icon-menu-right"></i></a></div><div class="clearfix"></div></div> <!-- ./block1 --></div></div></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-mega-menu menu-item-57"><a href="http://techtalk.vn/resources">Tools &#038; Tips</a>
<ul class="sub-menu">
	<li class="menu-item-0"><div class="td-container-border"><div class="td-mega-grid"><div class="td_block_wrap td_block_mega_menu td_uid_7_58daa4b6a7c61_rand td-no-subcats td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_7_58daa4b6a7c61" ><script>var block_td_uid_7_58daa4b6a7c61 = new tdBlock();
block_td_uid_7_58daa4b6a7c61.id = "td_uid_7_58daa4b6a7c61";
block_td_uid_7_58daa4b6a7c61.atts = '{"limit":"5","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"20","category_ids":"","custom_title":"","custom_url":"","show_child_cat":30,"sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_7_58daa4b6a7c61_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_7_58daa4b6a7c61.td_column_number = "3";
block_td_uid_7_58daa4b6a7c61.block_type = "td_block_mega_menu";
block_td_uid_7_58daa4b6a7c61.post_count = "5";
block_td_uid_7_58daa4b6a7c61.found_posts = "205";
block_td_uid_7_58daa4b6a7c61.header_color = "";
block_td_uid_7_58daa4b6a7c61.ajax_pagination_infinite_stop = "";
block_td_uid_7_58daa4b6a7c61.max_num_pages = "41";
tdBlocksArray.push(block_td_uid_7_58daa4b6a7c61);
</script><div id=td_uid_7_58daa4b6a7c61 class="td_block_inner"><div class="td-mega-row"><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/top-5-website-de-hoc-lap-trinh-online.html" rel="bookmark" title="Top 5 website để học lập trình online"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/Coding-for-beginners-home_big-218x150.jpg" alt="" title="Top 5 website để học lập trình online"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/top-5-website-de-hoc-lap-trinh-online.html" rel="bookmark" title="Top 5 website để học lập trình online">Top 5 website để học lập trình online</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/cac-kenh-youtube-ma-developer-va-designer-khong-the-khong-subscribe.html" rel="bookmark" title="Các kênh Youtube mà developer và designer không thể không Subscribe"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/1-I0ybAcQg-FeMsipN5MxkTQ-218x150.jpeg" alt="" title="Các kênh Youtube mà developer và designer không thể không Subscribe"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/cac-kenh-youtube-ma-developer-va-designer-khong-the-khong-subscribe.html" rel="bookmark" title="Các kênh Youtube mà developer và designer không thể không Subscribe">Các kênh Youtube mà developer và designer không thể không Subscribe</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/tai-lieu-test-driven-development-in-ruby-a-practical-introduction-to-tdd-using-problem-and-solution-domain-analysis.html" rel="bookmark" title="[Tài liệu] Test Driven Development in Ruby: A Practical Introduction to TDD Using Problem and Solution Domain Analysis"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/11/keep-calm-and-code-in-ruby-218x150.png" alt="" title="[Tài liệu] Test Driven Development in Ruby: A Practical Introduction to TDD Using Problem and Solution Domain Analysis"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/tai-lieu-test-driven-development-in-ruby-a-practical-introduction-to-tdd-using-problem-and-solution-domain-analysis.html" rel="bookmark" title="[Tài liệu] Test Driven Development in Ruby: A Practical Introduction to TDD Using Problem and Solution Domain Analysis">[Tài liệu] Test Driven Development in Ruby: A Practical Introduction to&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/tai-lieu-pro-mern-stack-lap-trinh-ung-dung-web-full-stack-voi-mongo-express-react-va-node.html" rel="bookmark" title="[Tài liệu] Pro MERN Stack &#8211; Lập Trình  Ứng Dụng Web Full Stack với Mongo, Express, React, và Node"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/12/Successful-Web-Developer-218x150.jpg" alt="" title="[Tài liệu] Pro MERN Stack &#8211; Lập Trình  Ứng Dụng Web Full Stack với Mongo, Express, React, và Node"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/tai-lieu-pro-mern-stack-lap-trinh-ung-dung-web-full-stack-voi-mongo-express-react-va-node.html" rel="bookmark" title="[Tài liệu] Pro MERN Stack &#8211; Lập Trình  Ứng Dụng Web Full Stack với Mongo, Express, React, và Node">[Tài liệu] Pro MERN Stack &#8211; Lập Trình  Ứng Dụng&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/tai-lieu-reactjs-qua-vi-du-xay-dung-ung-dung-web-hien-dai-voi-react.html" rel="bookmark" title="[Tài liệu] ReactJS qua Ví Dụ: Xây dựng Ứng Dụng Web hiện đại với React"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/06/techtalk-reactjs-218x150.png" alt="" title="[Tài liệu] ReactJS qua Ví Dụ: Xây dựng Ứng Dụng Web hiện đại với React"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/tai-lieu-reactjs-qua-vi-du-xay-dung-ung-dung-web-hien-dai-voi-react.html" rel="bookmark" title="[Tài liệu] ReactJS qua Ví Dụ: Xây dựng Ứng Dụng Web hiện đại với React">[Tài liệu] ReactJS qua Ví Dụ: Xây dựng Ứng Dụng Web&#8230;</a></h3>            </div>
        </div>
        </div></div></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_7_58daa4b6a7c61" data-td_block_id="td_uid_7_58daa4b6a7c61"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_7_58daa4b6a7c61" data-td_block_id="td_uid_7_58daa4b6a7c61"><i class="td-icon-font td-icon-menu-right"></i></a></div><div class="clearfix"></div></div> <!-- ./block1 --></div></div></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent td-menu-item td-mega-menu menu-item-309"><a href="https://techtalk.vn/category/su-kien">Sự kiện</a>
<ul class="sub-menu">
	<li class="menu-item-0"><div class="td-container-border"><div class="td-mega-grid"><div class="td_block_wrap td_block_mega_menu td_uid_8_58daa4b6ae897_rand td-no-subcats td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_8_58daa4b6ae897" ><script>var block_td_uid_8_58daa4b6ae897 = new tdBlock();
block_td_uid_8_58daa4b6ae897.id = "td_uid_8_58daa4b6ae897";
block_td_uid_8_58daa4b6ae897.atts = '{"limit":"5","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"25","category_ids":"","custom_title":"","custom_url":"","show_child_cat":30,"sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_8_58daa4b6ae897_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_8_58daa4b6ae897.td_column_number = "3";
block_td_uid_8_58daa4b6ae897.block_type = "td_block_mega_menu";
block_td_uid_8_58daa4b6ae897.post_count = "5";
block_td_uid_8_58daa4b6ae897.found_posts = "173";
block_td_uid_8_58daa4b6ae897.header_color = "";
block_td_uid_8_58daa4b6ae897.ajax_pagination_infinite_stop = "";
block_td_uid_8_58daa4b6ae897.max_num_pages = "35";
tdBlocksArray.push(block_td_uid_8_58daa4b6ae897);
</script><div id=td_uid_8_58daa4b6ae897 class="td_block_inner"><div class="td-mega-row"><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/phong-van-doc-quyen-voi-dai-dien-ban-giam-khao-cua-the-finlab-cycle-2.html" rel="bookmark" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/presentation-218x150.jpg" alt="" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/phong-van-doc-quyen-voi-dai-dien-ban-giam-khao-cua-the-finlab-cycle-2.html" rel="bookmark" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2">Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/kham-pha-nghe-product-4-ngay-toi-nen-bat-dau-tu-dau.html" rel="bookmark" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/mindset-218x150.jpg" alt="" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/kham-pha-nghe-product-4-ngay-toi-nen-bat-dau-tu-dau.html" rel="bookmark" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?">Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/chan-dung-dan-dien-gia-sieu-khung-cua-break-into-the-iot-generation.html" rel="bookmark" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/iot-speaker-ad-218x150.jpg" alt="" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/chan-dung-dan-dien-gia-sieu-khung-cua-break-into-the-iot-generation.html" rel="bookmark" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation">Chân dung dàn diễn giả “siêu khủng” của Break into the&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/internet-of-things-nhung-nguy-co-tiem-an-ve-bao-mat.html" rel="bookmark" title="Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo mật"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/News_CloudSecurity-218x150.jpg" alt="" title="Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo mật"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/internet-of-things-nhung-nguy-co-tiem-an-ve-bao-mat.html" rel="bookmark" title="Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo mật">Internet of things &#8211; Những nguy cơ tiềm ẩn về bảo&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/dai-tiec-mobile-lon-nhat-toan-quoc-da-khoi-dong.html" rel="bookmark" title="Đại tiệc Mobile lớn nhất toàn quốc đã khởi động"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/hinh-feature-218x150.jpg" alt="" title="Đại tiệc Mobile lớn nhất toàn quốc đã khởi động"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/dai-tiec-mobile-lon-nhat-toan-quoc-da-khoi-dong.html" rel="bookmark" title="Đại tiệc Mobile lớn nhất toàn quốc đã khởi động">Đại tiệc Mobile lớn nhất toàn quốc đã khởi động</a></h3>            </div>
        </div>
        </div></div></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_8_58daa4b6ae897" data-td_block_id="td_uid_8_58daa4b6ae897"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_8_58daa4b6ae897" data-td_block_id="td_uid_8_58daa4b6ae897"><i class="td-icon-font td-icon-menu-right"></i></a></div><div class="clearfix"></div></div> <!-- ./block1 --></div></div></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-mega-menu menu-item-14222"><a href="https://techtalk.vn/category/chuyen-gia-noi">Chuyên gia nói</a>
<ul class="sub-menu">
	<li class="menu-item-0"><div class="td-container-border"><div class="td-mega-grid"><div class="td_block_wrap td_block_mega_menu td_uid_9_58daa4b6b3a0f_rand td-no-subcats td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_9_58daa4b6b3a0f" ><script>var block_td_uid_9_58daa4b6b3a0f = new tdBlock();
block_td_uid_9_58daa4b6b3a0f.id = "td_uid_9_58daa4b6b3a0f";
block_td_uid_9_58daa4b6b3a0f.atts = '{"limit":"5","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"639","category_ids":"","custom_title":"","custom_url":"","show_child_cat":30,"sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_9_58daa4b6b3a0f_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_9_58daa4b6b3a0f.td_column_number = "3";
block_td_uid_9_58daa4b6b3a0f.block_type = "td_block_mega_menu";
block_td_uid_9_58daa4b6b3a0f.post_count = "5";
block_td_uid_9_58daa4b6b3a0f.found_posts = "40";
block_td_uid_9_58daa4b6b3a0f.header_color = "";
block_td_uid_9_58daa4b6b3a0f.ajax_pagination_infinite_stop = "";
block_td_uid_9_58daa4b6b3a0f.max_num_pages = "8";
tdBlocksArray.push(block_td_uid_9_58daa4b6b3a0f);
</script><div id=td_uid_9_58daa4b6b3a0f class="td_block_inner"><div class="td-mega-row"><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/nhung-quy-tac-gay-soc-trong-phat-trien-phan-mem.html" rel="bookmark" title="Những quy tắc gây sốc trong phát triển phần mềm"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/reece-218x150.jpg" alt="" title="Những quy tắc gây sốc trong phát triển phần mềm"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/nhung-quy-tac-gay-soc-trong-phat-trien-phan-mem.html" rel="bookmark" title="Những quy tắc gây sốc trong phát triển phần mềm">Những quy tắc gây sốc trong phát triển phần mềm</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/con-duong-tro-thanh-cao-thu-web-developer-ban-chon-huong-di-nao.html" rel="bookmark" title="Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn hướng đi nào?"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/road-218x150.png" alt="" title="Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn hướng đi nào?"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/con-duong-tro-thanh-cao-thu-web-developer-ban-chon-huong-di-nao.html" rel="bookmark" title="Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn hướng đi nào?">Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/gia-nhu-tao-loading-facebook-bang-css-that-don-gian.html" rel="bookmark" title="Giá như tạo loading Facebook bằng CSS thật đơn giản!"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/08/facebookfeatured-796x398-218x150.jpg" alt="" title="Giá như tạo loading Facebook bằng CSS thật đơn giản!"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/gia-nhu-tao-loading-facebook-bang-css-that-don-gian.html" rel="bookmark" title="Giá như tạo loading Facebook bằng CSS thật đơn giản!">Giá như tạo loading Facebook bằng CSS thật đơn giản!</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/fintech-viet-nam-se-phat-trien-manh-me-trong-thoi-gian-sap-toi.html" rel="bookmark" title="FinTech Việt Nam sẽ phát triển mạnh mẽ trong thời gian sắp tới"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/IMG_7120-218x150.jpg" alt="" title="FinTech Việt Nam sẽ phát triển mạnh mẽ trong thời gian sắp tới"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/fintech-viet-nam-se-phat-trien-manh-me-trong-thoi-gian-sap-toi.html" rel="bookmark" title="FinTech Việt Nam sẽ phát triển mạnh mẽ trong thời gian sắp tới">FinTech Việt Nam sẽ phát triển mạnh mẽ trong thời gian&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/khong-biet-ro-5-dieu-nay-cac-startup-rat-kho-thanh-cong.html" rel="bookmark" title="Không biết rõ 5 điều này, các Startup rất khó thành công"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/startup-218x150.jpg" alt="" title="Không biết rõ 5 điều này, các Startup rất khó thành công"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/khong-biet-ro-5-dieu-nay-cac-startup-rat-kho-thanh-cong.html" rel="bookmark" title="Không biết rõ 5 điều này, các Startup rất khó thành công">Không biết rõ 5 điều này, các Startup rất khó thành&#8230;</a></h3>            </div>
        </div>
        </div></div></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_9_58daa4b6b3a0f" data-td_block_id="td_uid_9_58daa4b6b3a0f"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_9_58daa4b6b3a0f" data-td_block_id="td_uid_9_58daa4b6b3a0f"><i class="td-icon-font td-icon-menu-right"></i></a></div><div class="clearfix"></div></div> <!-- ./block1 --></div></div></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-mega-menu menu-item-13675"><a href="https://techtalk.vn/category/tam-su-coder">Tâm sự coder</a>
<ul class="sub-menu">
	<li class="menu-item-0"><div class="td-container-border"><div class="td-mega-grid"><div class="td_block_wrap td_block_mega_menu td_uid_10_58daa4b6b8d49_rand td-no-subcats td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_10_58daa4b6b8d49" ><script>var block_td_uid_10_58daa4b6b8d49 = new tdBlock();
block_td_uid_10_58daa4b6b8d49.id = "td_uid_10_58daa4b6b8d49";
block_td_uid_10_58daa4b6b8d49.atts = '{"limit":"5","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"593","category_ids":"","custom_title":"","custom_url":"","show_child_cat":30,"sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_10_58daa4b6b8d49_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_10_58daa4b6b8d49.td_column_number = "3";
block_td_uid_10_58daa4b6b8d49.block_type = "td_block_mega_menu";
block_td_uid_10_58daa4b6b8d49.post_count = "5";
block_td_uid_10_58daa4b6b8d49.found_posts = "31";
block_td_uid_10_58daa4b6b8d49.header_color = "";
block_td_uid_10_58daa4b6b8d49.ajax_pagination_infinite_stop = "";
block_td_uid_10_58daa4b6b8d49.max_num_pages = "7";
tdBlocksArray.push(block_td_uid_10_58daa4b6b8d49);
</script><div id=td_uid_10_58daa4b6b8d49 class="td_block_inner"><div class="td-mega-row"><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/series-nhap-mon-lap-trinh-cong-viec-thuong-ngay-cua-mot-lap-trinh-vien.html" rel="bookmark" title="Series nhập môn lập trình – Công việc thường ngày của một lập trình viên"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/02/20141215190648-15-characteristics-good-programmer-1485406123185-218x150.jpeg" alt="" title="Series nhập môn lập trình – Công việc thường ngày của một lập trình viên"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/series-nhap-mon-lap-trinh-cong-viec-thuong-ngay-cua-mot-lap-trinh-vien.html" rel="bookmark" title="Series nhập môn lập trình – Công việc thường ngày của một lập trình viên">Series nhập môn lập trình – Công việc thường ngày của&#8230;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/tai-sao-gioi-lap-trinh-thu-ghet-internet-explorer.html" rel="bookmark" title="Tại sao giới lập trình thù ghét Internet Explorer?"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/05/techtalk-IE-218x150.jpg" alt="" title="Tại sao giới lập trình thù ghét Internet Explorer?"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/tai-sao-gioi-lap-trinh-thu-ghet-internet-explorer.html" rel="bookmark" title="Tại sao giới lập trình thù ghét Internet Explorer?">Tại sao giới lập trình thù ghét Internet Explorer?</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/mot-ngay-lam-viec-cua-lap-trinh-vien-kieu-mau.html" rel="bookmark" title="Một ngày làm việc của Lập Trình Viên &#8220;Kiểu Mẫu&#8221;"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/04/Nic-picture-blog-sm-218x150.jpg" alt="" title="Một ngày làm việc của Lập Trình Viên &#8220;Kiểu Mẫu&#8221;"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/mot-ngay-lam-viec-cua-lap-trinh-vien-kieu-mau.html" rel="bookmark" title="Một ngày làm việc của Lập Trình Viên &#8220;Kiểu Mẫu&#8221;">Một ngày làm việc của Lập Trình Viên &#8220;Kiểu Mẫu&#8221;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/code-de-an-hay-code-de-vui.html" rel="bookmark" title="Code để &#8220;ăn&#8221; hay code để &#8220;vui&#8221;"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/techtalk-code-laptrinhvui-218x150.jpg" alt="" title="Code để &#8220;ăn&#8221; hay code để &#8220;vui&#8221;"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/code-de-an-hay-code-de-vui.html" rel="bookmark" title="Code để &#8220;ăn&#8221; hay code để &#8220;vui&#8221;">Code để &#8220;ăn&#8221; hay code để &#8220;vui&#8221;</a></h3>            </div>
        </div>
        </div><div class="td-mega-span">
        <div class="td_module_mega_menu td_mod_mega_menu">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/top-phim-le-dan-lap-trinh-phai-coi-trong-doi.html" rel="bookmark" title="Top phim (lẻ) dân lập trình phải coi trong đời!"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/11/DF-06839_r-218x150.jpg" alt="" title="Top phim (lẻ) dân lập trình phải coi trong đời!"/></a></div>                            </div>

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/top-phim-le-dan-lap-trinh-phai-coi-trong-doi.html" rel="bookmark" title="Top phim (lẻ) dân lập trình phải coi trong đời!">Top phim (lẻ) dân lập trình phải coi trong đời!</a></h3>            </div>
        </div>
        </div></div></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_10_58daa4b6b8d49" data-td_block_id="td_uid_10_58daa4b6b8d49"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_10_58daa4b6b8d49" data-td_block_id="td_uid_10_58daa4b6b8d49"><i class="td-icon-font td-icon-menu-right"></i></a></div><div class="clearfix"></div></div> <!-- ./block1 --></div></div></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-212"><a href="http://devvui.com">Devvui</a></li>
</ul></div></div>


<div class="td-search-wrapper">
    <div id="td-top-search">
        <!-- Search -->
        <div class="header-search-wrap">
            <div class="dropdown header-search">
                <a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                <a id="td-header-search-button-mob" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="header-search-wrap">
	<div class="dropdown header-search">
		<div class="td-drop-down-search" aria-labelledby="td-header-search-button">
			<form method="get" class="td-search-form" action="https://techtalk.vn/">
				<div role="search" class="td-head-form-search-wrap">
					<input id="td-header-search" type="text" value="" name="s" autocomplete="off" /><input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="Tìm kiếm" />
				</div>
			</form>
			<div id="td-aj-search"></div>
		</div>
	</div>
</div>            </div>
        </div>
    </div>

</div><div class="td-main-content-wrap">

    <div class="td-container td-post-template-default ">
        <div class="td-crumb-container"><div class="entry-crumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="" class="entry-crumb" itemprop="url" href="https://techtalk.vn/"><span itemprop="title">Trang Chủ</span></a></span> <i class="td-icon-right td-bread-sep"></i> <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Xem tất cả các bài viết trong Công nghệ" class="entry-crumb" itemprop="url" href="https://techtalk.vn/category/tech"><span itemprop="title">Công nghệ</span></a></span> <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span class="td-bred-no-url-last" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><meta itemprop="title" content = "Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở..."><meta itemprop="url" content = "https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html">Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở...</span></div></div>

        <div class="td-pb-row">
                                    <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                
    <article id="post-13952" class="post-13952 post type-post status-publish format-standard has-post-thumbnail hentry category-tech category-featured category-dev category-lap-trinh-web category-su-kien tag-elasticsearch tag-search tag-solr" itemscope itemtype="https://schema.org/Article">
        <div class="td-post-header">

            
            <header class="td-post-title">
                <h1 class="entry-title">Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở nào?</h1>

                

                <div class="td-module-meta-info">
                                        <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-01-24T08:00:51+00:00" >January 24, 2017</time></span>                                        <div class="td-post-views"><i class="td-icon-views"></i><span class="td-nr-views-13952">897</span></div>                </div>

            </header>

        </div>

        <div class="td-post-sharing td-post-sharing-top td-with-like">
				<div class="td-default-sharing">
		            <a class="td-social-sharing-buttons td-social-facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-facebook"></i><div class="td-social-but-text">Chia sẻ Facebook</div></a>
		            <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=Elasticsearch+%26+Solr+%E2%80%93+B%E1%BA%A1n+n%C3%AAn+l%E1%BB%B1a+ch%E1%BB%8Dn+Search+Engine+Ngu%E1%BB%93n+M%E1%BB%9F+n%C3%A0o%3F&url=https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html&via=Tech+Talk"  ><i class="td-icon-twitter"></i><div class="td-social-but-text">Tweet</div></a>
		            <a class="td-social-sharing-buttons td-social-google" href="http://plus.google.com/share?url=https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-googleplus"></i></a>
		            <a class="td-social-sharing-buttons td-social-pinterest" href="http://pinterest.com/pin/create/button/?url=https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html&amp;media=https://techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr.png&description=Elasticsearch+%26+Solr+%E2%80%93+B%E1%BA%A1n+n%C3%AAn+l%E1%BB%B1a+ch%E1%BB%8Dn+Search+Engine+Ngu%E1%BB%93n+M%E1%BB%9F+n%C3%A0o%3F" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-pinterest"></i></a>
		            <a class="td-social-sharing-buttons td-social-whatsapp" href="whatsapp://send?text=Elasticsearch+%26+Solr+%E2%80%93+B%E1%BA%A1n+n%C3%AAn+l%E1%BB%B1a+ch%E1%BB%8Dn+Search+Engine+Ngu%E1%BB%93n+M%E1%BB%9F+n%C3%A0o%3F%20-%20https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" ><i class="td-icon-whatsapp"></i></a>
	            </div><div class="td-classic-sharing"><ul><li class="td-classic-facebook"><iframe frameBorder="0" src="https://www.facebook.com/plugins/like.php?href=https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe></li><li class="td-classic-twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" data-text="Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở nào?" data-via="" data-lang="en">tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li></ul></div></div>

        <div class="td-post-content">

        <div class="td-post-featured-image"><img width="696" height="364" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr-696x364.png" alt="" title="elastic-seach-solr"/></div>
        <p>Hãy tưởng tượng tổ chức của bạn đang muốn thực hiện search engine đầu tiên, đang muốn dùng 1 search engine khác &#8211; như <a href="http://www.searchtechnologies.com/replace-google-search-appliance">những gì mà users của Google Search Appliance (GSA) đang làm</a> hoặc đang cố tiết kiệm tiền bằng cách chuyển sang 1 open source mới. Bạn &#8211; 1 developer tài năng, giỏi giang &#8211; được triệu hồi để giải quyết vấn đề khó nhằn đó. Bạn cần rất nhiều thứ liên quan đến business, nhưng về cốt lõi, đó chính là vấn đề liên quan đến &#8220;big data và search&#8221;</p>
<p>Bạn cần phải extract rất nhiều nội dung từ nhiều nguồn dữ liệu, hiểu được insights của chúng, từ đó mới giúp doanh nghiệp của bạn phát triển và đạt được mục tiêu đề ra trong năm.</p>
<h4><strong>One Shot</strong></h4>
<div class="td-a-rec td-a-rec-id-content_inline  "><span class="td-adspot-title">Thông tin cho Dev</span><div class="td-all-devices" id="b-g-i-net-aFJjUXBuU05uTVk9"></div></div><p>Có 2 sự lựa chọn: Elasticsearch hoặc Solr. Cả 2 đều đứng vững vàng ở 2 vị trí đầu trong các search engines thương mại nguồn mở (theo <a href="http://db-engines.com/en/ranking/search+engine" target="_blank">DB-Engines</a>)</p>
<p><img class="aligncenter" src="http://www.searchtechnologies.com/images/blog-graphics/enterprise-search-engines-ranking.jpg" /></p>
<p><strong>Vậy nên chọn công cụ nào?</strong></p>
<p>Tùy thuộc vào yêu cầu của bạn.</p>
<blockquote class="td_quote_box td_box_center"><p><span style="color: #ff0000;"><strong><a style="color: #ff0000;" href="https://www.facebook.com/events/377717339251997/?ref=1&amp;action_history=%5B%7B%22surface%22%3A%22permalink%22%2C%22mechanism%22%3A%22surface%22%2C%22extra_data%22%3A%5B%5D%7D%5D" data-testid="event-permalink-event-name">Behind Facebook Search: Infrastructure &amp; Technology</a></strong></span></p><div><ul style="list-style:none;display:inline-block;padding:10px;font-size:14px; text-align: left; border:1px solid #e1e1e1; width:100%; background-color: #f5f5f5;"><li style="margin:0 0 3px 0">
      <p style="margin:0;"><a target="_blank" style="color:#be5656;text-decoration:none; font-weight: 600;font-size: 14px;" href="https://topdev.vn/detail-jobs/HN--Lap-Trinh-Vien-NET-Mobile--Attractive-Salary-2650">(HN) | Lập Trình Viên .NET, Mobile | Attractive Salary</a>
        <span style="color: #488fc5;"> &mdash;&nbsp;VCS Viet Nam</span>

      </p>
        

        <li style="margin:0 0 3px 0">
      <p style="margin:0;"><a target="_blank" style="color:#be5656;text-decoration:none; font-weight: 600;font-size: 14px;" href="https://topdev.vn/detail-jobs/HN--Web-Designer-UIUX-HTML--Attractive-Salary-2834">(HN) | Web Designer (UI/UX, HTML) | Attractive Salary</a>
        <span style="color: #488fc5;"> &mdash;&nbsp;AZEBIZ</span>

      </p>
        

        <li style="margin:0 0 3px 0">
      <p style="margin:0;"><a target="_blank" style="color:#be5656;text-decoration:none; font-weight: 600;font-size: 14px;" href="https://topdev.vn/detail-jobs/HCM-Senior-Front-end-Developer--Salary-700--1200-2850">[HCM] (Senior) Front-end Developer | Salary $700 - $1200</a>
        <span style="color: #488fc5;"> &mdash;&nbsp;SK - Global JSC</span>

      </p>
        

        <li style="font-size:9px; text-align: right; color:black;margin-bottom: -30px;">
      <span style="position: relative; bottom:24px;">Jobs by</span>
      <a target="_blank" href="https://topdev.vn/" style="display: inline-block;">
        <img src="https://topdev.vn/app/css/images/logo_new@2x.png" style="width:50px">
      </a>
    </li></ul></div>
<p>Hồ Chí Minh: 17h30 – 21h00 thứ 3, ngày 24/01/2017</p>
<p><a href="https://getticket.vn/event/Behind-Facebook-Search-Infrastructure--Technology-23"><img class="alignnone wp-image-10472 " src="http://techtalk.vn/wp-content/uploads/2016/10/9.png" alt="9" width="150" height="45" /></a></p></blockquote>
<p><strong>Bước đầu tiên, bạn cần hiểu rõ ứng dụng phải build là gì. </strong>Tiếp theo, xem thử công cụ search nào đang rào đón. Nếu bạn vẫn đang phân vân chọn giữa nguồn mở và các giải pháp mang tính thương mại, <a href="http://www.searchtechnologies.com/search-engine-evaluation-criteria">bạn có thể tải tài liệu miễn phí của chúng tôi </a>để biết được 10 tiêu chuẩn chính cần căn nhắc khi lựa chọn 1 search engine.</p>
<h4><strong>Feature Rundown</strong></h4>
<p><strong>Tuổi đời &amp; mức độ trưởng thành</strong></p>
<p>Trong trường hợp này, Solr có tuổi đời lâu hơn vì ra đời năm 2004, dưới bàn tay của Yonik Seely của CNET Networks, sau đó CNET Networks contribute cho Apache vào năm 2006. Đến năm 2007, Solr trở thành project hàng đầu năm 2007. Mặc khác, Elasticsearch chính thức xuất hiện năm 2010, dù trước đó đã được người sáng lập Shay Bannon khởi động từ 2001 dưới cái tên Compass. Shay Bannon đã tạo nên Elastic Stack product family &#8211; 1 kẻ đáng gờm về search và log analytics space.</p>
<p>Như vậy, về độ tuổi và mức độ trưởng thành, Solr có lợi thế hơn vì có mặt sớm hơn trên thị trường.</p>
<p><strong>Cộng đồng và nguồn mở</strong></p>
<p>Cả 2 đều có cộng đồng rất active. Nếu xem Github, bạn sẽ thấy đây là những dự án nguồn mở nổi tiếng với rất nhiều releases.</p>
<p><img class="align-center" src="http://www.searchtechnologies.com/images/blog-graphics/apache-lucene-solr-github.JPG" alt="apache lucene solr github" data-entity-type="" data-entity-uuid="" /></p>
<p><img class="align-center" src="http://www.searchtechnologies.com/images/blog-graphics/elasticsearch-github.JPG" alt="elasticsearch github" data-entity-type="" data-entity-uuid="" /></p>
<p>Một chi tiết quan trọng chính là Elasticsearch lẫn Solr tuy đều được release theo bản quyền của Apache, đều là nguồn mở nhưng cách hoạt động lại có chút khác biệt. Với Elasticsearch, tuy mọi người có thể đề xuất contributions nhưng chỉ có nhân viên của Elastic (công ty đằng sau Elasticsearch và Elastic Stack) mới có thể chấp nhận những contributions đó.</p>
<p>Điều này tốt hay xấu, còn tùy thuộc vào cách nhìn nhận của bạn. Nếu có 1 tính năng bạn cần và bạn đóng góp nó cho cộng đồng với chất lượng đầy đủ, tính năng đó có thể được chấp nhận đưa vào Solr. Với Elsaticsearch, Elastic sẽ quyết định liệu 1 contribution có được chấp nhận hay không. Vì thế, trong Solr có nhiều lựa chọn tính năng hơn. Mặt khác, contributions cho Elasticsearch, sau khi trải qua nhiều cấp độ kiểm tra chất lượng, lại có độ nhất quán và chất lượng cao hơn.</p>
<p><strong>Documentation</strong></p>
<p>Cả Elasticsearch và Solr đều có những hướng dẫn tham khảo tài liệu hay. Elasticsearch có Github thì Solr sử dụng Atlassian Confuence.</p>
<p>Tham khảo 2 link sau:</p>
<ul>
<li><a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/index.html">Elasticsearch Reference Guide</a></li>
<li><a href="https://cwiki.apache.org/confluence/display/solr/Apache+Solr+Reference+Guide">Solr Reference Guide</a></li>
</ul>
<p><strong>Core technology</strong></p>
<p>Về mặt kĩ thuật, cả Elasticsearch và Solr đều là các search engines khác nhau nhưng ẩn sâu bên trong, chúng đều dùng Lucene được build &#8220;trên vai của những kẻ khổng lồ&#8221;.</p>
<p>Lý do tôi gọi Lucene là &#8220;kẻ khổng lồ&#8221;? Vì Lucene chính là thư viện phần mềm thu hồi thông tin thực sự đứng đằng sau rất nhiều search engines. Nó cực kì nhanh, cực kì vững vàng. Vì vậy, Lucene là sự lựa chọn hoàn hảo cho vị trí &#8220;trái tim&#8221; của 1 search engine.</p>
<figure id="attachment_13937" style="width: 600px" class="wp-caption aligncenter"><a href="https://getticket.vn/event/Behind-Facebook-Search-Infrastructure--Technology-23"><img class="wp-image-13937" src="https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698.jpg" alt="Bí mật đằng sau công nghệ tìm kiếm của Facebook. Đăng kí ngay!" width="600" height="347" srcset="https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698.jpg 1020w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-300x174.jpg 300w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-768x444.jpg 768w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-696x403.jpg 696w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-726x420.jpg 726w" sizes="(max-width: 600px) 100vw, 600px" /></a><figcaption class="wp-caption-text"><strong>Bí mật đằng sau công nghệ tìm kiếm của Facebook.<a href="https://getticket.vn/event/Behind-Facebook-Search-Infrastructure--Technology-23"> Đăng kí ngay!</a></strong></figcaption></figure>
<p><strong>Java APIs và REST</strong></p>
<p>Elasticsearch có REST API “Web 2.0” hơn nhưng Solr có Java API với SolrJ tốt hơn &#8211; hoặc SolrNet nếu bạn sử dụng các công nghệ của Microsoft. Elasticsearch có Nest và Elasticsearch.Net. REST API của Solr có thể kém linh hoạt hơn nhưng lại đáp ứng tuyệt hảo những gì bạn cần: indexing và querying. Elasticsearch gọi JSON, nên nếu bạn dùng JSON thì đây Elasticsearch là 1 lựa chọn tốt. Solr cũng hỗ trợ JSON tốt nhưng đó là thời gian gần đây thôi, lúc ban đầu Solr nhắm đến XML.</p>
<p><strong>Content processing</strong></p>
<p><img class="align-right aligncenter" src="http://www.searchtechnologies.com/images/blog-graphics/content%20processing.jpg" alt="content processing" data-entity-type="" data-entity-uuid="" /></p>
<p>Vì cả Elasticsearch và Solr đều expose 1 API, nên bạn dễ index nội dung từ ứng dụng tùy chỉnh của mình hoặc từ các ứng dụng đang tồn tại và có thể configure được. Ví dụ, <a href="http://www.searchtechnologies.com/aspire">framework processing content Aspire </a>của chúng tôi có thể kết nối đến nhiều nguồn dữ liệu và post lên cả Elasticsearch hoặc Solr.</p>
<p>Solr cũng có 1 tính năng để extract text từ các files binary sử dụng Apcache Tika. Nhờ đó bạn có thể tải lên 1 PDF thông qua ExtractRequestHandler và Solr sẽ làm phần việc còn lại.</p>
<p>Mặc khác, Elasticsearch lại hoạt động tốt với Logstash &#8211; Logstash có thể xử lý dữ liệu từ nguồn bất kì và index dữ liệu đó.</p>
<p><strong>Scalability</strong></p>
<p>Scaling là yếu tố chính mà bạn cần cân nhắc. Trong tình huống này, Elasticsearch đang giành phần thắng vì Solr vẫn ràng buộc với Master-Slave. Tuy nhiên, SolrCloud gần đây đã bắt đầu nhập cuộc. Với sự hỗ trợ của Zookeeper, bạn có thể scale 1 cụm Solr dễ dàng hơn, nhanh hơn so với các phiên bản cũ của Solr với Master-Slave. Tuy vẫn cần cải thiện nhiều hơn nhưng trong tương lai, bạn có thể &#8220;nhồi nhét&#8221; và tìm kiếm các datasets trong Solr.</p>
<p><strong>Hỗ trợ vendor</strong></p>
<p>Rất nhiều công ty xem xét yếu tố này khi quyết định lựa chọn product nào phù hợp nhất. Ví dụ, Cloudera chọn Solr để tích hợp vào nguồn mở <a href="http://www.cloudera.com/products/apache-hadoop/key-cdh-components.html" target="_blank">CDH (Cloudera Distribution Including Hadoop)</a>. Ngoài ra, rất nhiều vendors khác đã chọn Elasticsearch cho các giải pháp riêng của họ.</p>
<p><strong>Tầm nhìn &amp; hệ sinh thái</strong></p>
<p>Solr thiên về text search. Elasticsearch hướng đến log analytics bằng cách tạo ra Elastic stack &#8211; đại diện cho Elasticsearch, Logstash,  Kibana và Beats. Cả 2 đều có tầm nhìn rõ ràng và đều đang tiến bước mạnh mẽ theo định hướng của mình.</p>
<p>Đừng quên, cả 2 đều đang là nền tảng của rất nhiều platforms về search và big data hàng đầu như Elasticsearch là 1 phần trong Azure Search của Microsoft còn Solr đã được tích hợp vào Cloudera Search.</p>
<p><strong>Hiệu suất</strong></p>
<p>Theo kinh nghiệm mà tôi nghe được từ rất nhiều lập trình viên, cả 2 engiesn đều hoạt động ổn định. Vì vậy, trong phần lớn các trường hợp sử dụng, dù là ứng dụng search nội bộ hay bên ngoài, thì vấn đề hiệu suất/ công năng cũng không quá quan trọng nếu lập trình viên design và configure chúng 1 cách phù hợp.</p>
<p><strong>Quản trị web</strong></p>
<p>Solr có tích hợp web administration còn Elasticsearch có rất nhiều plugins tính phí liên quan đến bảo mật, alerting và monitoring. <a href="https://www.elastic.co/products" target="_blank">Danh sách này</a> sẽ cho bạn thấy toàn bộ product family của Elastic.</p>
<figure id="attachment_13937" style="width: 600px" class="wp-caption aligncenter"><img class="wp-image-13937" src="https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698.jpg" alt="Bí mật đằng sau công nghệ tìm kiếm của Facebook. Đăng kí ngay!" width="600" height="347" srcset="https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698.jpg 1020w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-300x174.jpg 300w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-768x444.jpg 768w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-696x403.jpg 696w, https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_4698-726x420.jpg 726w" sizes="(max-width: 600px) 100vw, 600px" /><figcaption class="wp-caption-text"><strong>Bí mật đằng sau công nghệ tìm kiếm của Facebook. <a href="https://getticket.vn/event/Behind-Facebook-Search-Infrastructure--Technology-23">Đăng kí ngay!</a></strong></figcaption></figure>
<p><strong>Visualization</strong></p>
<p>Có rất nhiều cách để visualize dữ liệu trong Elasticsearch và Solr &#8211; bạn có thể xây dựng visualization dashboard hoặc sử dụng các tính năng visualization chuẩn của search engine. Nhưng có 1 điểm khác biệt lưu ý.</p>
<p><strong>Solr tập trung chủ yếu vào text search. </strong>Solr dần trở thành chuẩn bị cho các ứng dụng search. Nhưng <strong>Elasticsearch lại đi theo định hướng khác, không chỉ search mà còn giải quyết vấn đề log analytics và visualization </strong>với Elastic Stack.</p>
<p>Dưới đây là 1 số visualizations bạn có thể làm với Kibana 5.</p>
<p><img class="align-center aligncenter" src="http://www.searchtechnologies.com/images/blog-graphics/kibana-5-dashboard.png" alt="kibana 5 dashboard" data-entity-type="" data-entity-uuid="" />Nhìn chung, cả Elasticsearch và Solr đều là những lựa chọn nguồn mở tuyệt vời, hỗ trợ bạn lấy được nhiều thứ từ data nhất có thể. Tùy thuộc vào yêu cầu, kinh phí, thời gian và mức độ phức tạp của dự án để bạn lựa chọn công cụ nào phù hợp hơn. <a href="http://www.searchtechnologies.com/search-engine-evaluation-criteria">Tham khảo thêm ebook này</a> để có 1 lựa chọn chính xác.</p>
<p style="text-align: right;">Nguồn: Techtalk via <a href="http://www.searchtechnologies.com/blog/solr-vs-elasticsearch-top-open-source-search">SearchTechnologies</a></p>
<h2></h2>
<p style="text-align: center;"><strong><i>***</i></strong></p>
<p>&nbsp;</p>
<table>
<tbody>
<tr style="height: 158px;">
<td style="height: 158px;">
<p style="text-align: center;"><span style="color: #ff0000;"><strong>Sự kiện <a style="color: #ff0000;" href="https://www.facebook.com/events/377717339251997/?ref=1&amp;action_history=%5B%7B%22surface%22%3A%22permalink%22%2C%22mechanism%22%3A%22surface%22%2C%22extra_data%22%3A%5B%5D%7D%5D" data-testid="event-permalink-event-name">Behind Facebook Search: Infrastructure &amp; Technology</a></strong></span></p>
<ul>
<li>Hồ Chí Minh: 17h30 – 21h00 thứ 3, ngày 24/01/2017</li>
<li>Đăng kí ngay tại: <a href="https://getticket.vn/event/Behind-Facebook-Search-Infrastructure--Technology-23">https://getticket.vn/event/Behind-Facebook-Search-Infrastructure&#8211;Technology-23</a></li>
<li>Hotline: Ms. Ngọc Đỗ | 08 6273 3497 | 0944 685 243 | ngoc.do@applancer.net</li>
</ul>
</td>
</tr>
</tbody>
</table>
</p><div class="td-a-rec td-a-rec-id-content_bottom  "><div class="td-all-devices" id="b-g-i-net-VGlQQWtzTDVsdVE9"></div></div>        </div>


        <footer>
                        
            <div class="td-post-source-tags">
                                <ul class="td-tags td-post-small-box clearfix"><li><span>TAGS</span></li><li><a href="https://techtalk.vn/tag/elasticsearch">elasticsearch</a></li><li><a href="https://techtalk.vn/tag/search">search</a></li><li><a href="https://techtalk.vn/tag/solr">solr</a></li></ul>            </div>

            <div class="td-post-sharing td-post-sharing-bottom td-with-like"><span class="td-post-share-title">CHIA SẺ</span>
            <div class="td-default-sharing">
	            <a class="td-social-sharing-buttons td-social-facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-facebook"></i><div class="td-social-but-text">Facebook</div></a>
	            <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=Elasticsearch+%26+Solr+%E2%80%93+B%E1%BA%A1n+n%C3%AAn+l%E1%BB%B1a+ch%E1%BB%8Dn+Search+Engine+Ngu%E1%BB%93n+M%E1%BB%9F+n%C3%A0o%3F&url=https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html&via=Tech+Talk"><i class="td-icon-twitter"></i><div class="td-social-but-text">Twitter</div></a>
	            <a class="td-social-sharing-buttons td-social-google" href="http://plus.google.com/share?url=https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-googleplus"></i></a>
	            <a class="td-social-sharing-buttons td-social-pinterest" href="http://pinterest.com/pin/create/button/?url=https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html&amp;media=https://techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr.png&description=Elasticsearch+%26+Solr+%E2%80%93+B%E1%BA%A1n+n%C3%AAn+l%E1%BB%B1a+ch%E1%BB%8Dn+Search+Engine+Ngu%E1%BB%93n+M%E1%BB%9F+n%C3%A0o%3F" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-pinterest"></i></a>
	            <a class="td-social-sharing-buttons td-social-whatsapp" href="whatsapp://send?text=Elasticsearch+%26+Solr+%E2%80%93+B%E1%BA%A1n+n%C3%AAn+l%E1%BB%B1a+ch%E1%BB%8Dn+Search+Engine+Ngu%E1%BB%93n+M%E1%BB%9F+n%C3%A0o%3F%20-%20https%3A%2F%2Ftechtalk.vn%2Felasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" ><i class="td-icon-whatsapp"></i></a>
            </div><div class="td-classic-sharing"><ul><li class="td-classic-facebook"><iframe frameBorder="0" src="https://www.facebook.com/plugins/like.php?href=https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe></li><li class="td-classic-twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" data-text="Elasticsearch &#038; Solr &#8211; Bạn nên lựa chọn Search Engine Nguồn Mở nào?" data-via="" data-lang="en">tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li></ul></div></div>            <div class="fb-comments" data-href="https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html" data-numposts="20" width="100%" data-colorscheme="light" data-version="v2.5"></div>
            <div class="td-block-row td-post-next-prev"><div class="td-block-span6 td-post-prev-post"><div class="td-post-next-prev-content"><span>Bài viết trước</span><a href="https://techtalk.vn/gioi-thieu-ve-bem-a-front-end-methodology-phan-1.html">Giới thiệu về BEM &#8211; A Front end Methodology (phần 1)</a></div></div><div class="td-next-prev-separator"></div><div class="td-block-span6 td-post-next-post"><div class="td-post-next-prev-content"><span>Bài kế tiếp</span><a href="https://techtalk.vn/hack-khach-hang-cua-facebook-fanpage.html">Hack khách hàng của Facebook Fanpage</a></div></div></div>            <div class="td-author-name vcard author" style="display: none"><span class="fn"><a href="https://techtalk.vn/author/hiennguyen">Ai Hien</a></span></div>	        <span style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person"><meta itemprop="name" content="Ai Hien"></span><meta itemprop="datePublished" content="2017-01-24T08:00:51+00:00"><meta itemprop="dateModified" content="2017-01-26T11:06:49+00:00"><meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://techtalk.vn/elasticsearch-solr-ban-nen-lua-chon-search-engine-nguon-mo-nao.html"/><span style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization"><span style="display: none;" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="https://static.techtalk.vn/wp-content/uploads/2016/02/logoretina.png"></span><meta itemprop="name" content="Tech Talk"></span><meta itemprop="headline " content="Elasticsearch &amp; Solr - Bạn nên lựa chọn Search Engine Nguồn Mở nào?"><span style="display: none;" itemprop="image" itemscope itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="https://static.techtalk.vn/wp-content/uploads/2017/01/elastic-seach-solr.png"><meta itemprop="width" content="1200"><meta itemprop="height" content="628"></span>        </footer>

    </article> <!-- /.post -->

    <div class="td_block_wrap td_block_related_posts td_uid_13_58daa4b702955_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_13_58daa4b702955" ><script>var block_td_uid_13_58daa4b702955 = new tdBlock();
block_td_uid_13_58daa4b702955.id = "td_uid_13_58daa4b702955";
block_td_uid_13_58daa4b702955.atts = '{"limit":3,"sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_custom_related","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_13_58daa4b702955_rand","offset":"","css":"","live_filter":"cur_post_same_tags","live_filter_cur_post_id":13952,"live_filter_cur_post_author":"14"}';
block_td_uid_13_58daa4b702955.td_column_number = "3";
block_td_uid_13_58daa4b702955.block_type = "td_block_related_posts";
block_td_uid_13_58daa4b702955.post_count = "2";
block_td_uid_13_58daa4b702955.found_posts = "2";
block_td_uid_13_58daa4b702955.header_color = "";
block_td_uid_13_58daa4b702955.ajax_pagination_infinite_stop = "";
block_td_uid_13_58daa4b702955.max_num_pages = "1";
tdBlocksArray.push(block_td_uid_13_58daa4b702955);
</script><h4 class="td-related-title"><a id="td_uid_14_58daa4b704ecc" class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id="td_uid_13_58daa4b702955" href="#">BÀI VIẾT LIÊN QUAN</a><a id="td_uid_15_58daa4b704f12" class="td-related-right" data-td_filter_value="td_related_more_from_author" data-td_block_id="td_uid_13_58daa4b702955" href="#">XEM THÊM</a></h4><div id=td_uid_13_58daa4b702955 class="td_block_inner">

	<div class="td-related-row">

	<div class="td-related-span4">

        <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/phat-trien-search-box-hoan-hao-khong-de-nhu-ban-nghi.html" rel="bookmark" title="Phát triển Search Box hoàn hảo: Không dễ như bạn nghĩ"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/1-Z6yFlnqeyqNRxnhtFQk65w-218x150.png" alt="" title="Phát triển Search Box hoàn hảo: Không dễ như bạn nghĩ"/></a></div>                            </div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/phat-trien-search-box-hoan-hao-khong-de-nhu-ban-nghi.html" rel="bookmark" title="Phát triển Search Box hoàn hảo: Không dễ như bạn nghĩ">Phát triển Search Box hoàn hảo: Không dễ như bạn nghĩ</a></h3>            </div>
        </div>
        
	</div> <!-- ./td-related-span4 -->

	<div class="td-related-span4">

        <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
            <div class="td-module-image">
                <div class="td-module-thumb"><a href="https://techtalk.vn/nhan-tai-facebook-doi-ngu-tiki-ban-chuyen-search-engine-cuoi-nam.html" rel="bookmark" title="Nhân tài Facebook &#038; đội ngũ Tiki bàn chuyện Search Engine cuối năm!"><img width="218" height="150" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/01/IMG_3632-218x150.jpg" alt="" title="Nhân tài Facebook &#038; đội ngũ Tiki bàn chuyện Search Engine cuối năm!"/></a></div>                            </div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/nhan-tai-facebook-doi-ngu-tiki-ban-chuyen-search-engine-cuoi-nam.html" rel="bookmark" title="Nhân tài Facebook &#038; đội ngũ Tiki bàn chuyện Search Engine cuối năm!">Nhân tài Facebook &#038; đội ngũ Tiki bàn chuyện Search Engine cuối năm!</a></h3>            </div>
        </div>
        
	</div> <!-- ./td-related-span4 --></div><!--./row-fluid--></div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_13_58daa4b702955" data-td_block_id="td_uid_13_58daa4b702955"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page ajax-page-disabled" id="next-page-td_uid_13_58daa4b702955" data-td_block_id="td_uid_13_58daa4b702955"><i class="td-icon-font td-icon-menu-right"></i></a></div></div> <!-- ./block -->
                            </div>
                        </div>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <aside class="widget widget_weblizar_facebook_likebox"><div class="block-title"><span>Follow Us</span></div>		<style>
		@media (max-width:767px) {
			.fb_iframe_widget {
				width: 100%;
			}
			.fb_iframe_widget span {
				width: 100% !important;
			}
			.fb_iframe_widget iframe {
				width: 100% !important;
			}
			._8r {
				margin-right: 5px;
				margin-top: -4px !important;
			}
		}
		</style>
        <div style="display:block;width:100%;float:left;overflow:hidden;margin-bottom:20px">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like-box" style="background-color: auto;" data-small-header="true" data-height="560" data-href="https://www.facebook.com/Techtalkvietnam/" data-show-border="true" data-show-faces="true" data-stream="false" data-width="324" data-force-wall="false"></div>
			<div style="display:none;">Facebook By Weblizar Powered By Weblizar</div>
		</div>
        </aside><div class="td-a-rec td-a-rec-id-sidebar  "><div class="td-all-devices" id="b-g-i-net-S2hMTi9WOVJEcmM9"></div></div><div class="td_block_wrap td_block_18 td_block_widget td_uid_17_58daa4b7079f4_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_17_58daa4b7079f4" ><script>var block_td_uid_17_58daa4b7079f4 = new tdBlock();
block_td_uid_17_58daa4b7079f4.id = "td_uid_17_58daa4b7079f4";
block_td_uid_17_58daa4b7079f4.atts = '{"limit":"3","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"639","category_ids":"","custom_title":"Chuy\u00ean gia n\u00f3i","custom_url":"https:\/\/techtalk.vn\/category\/chuyen-gia-noi","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_17_58daa4b7079f4_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_17_58daa4b7079f4.td_column_number = "1";
block_td_uid_17_58daa4b7079f4.block_type = "td_block_18";
block_td_uid_17_58daa4b7079f4.post_count = "3";
block_td_uid_17_58daa4b7079f4.found_posts = "40";
block_td_uid_17_58daa4b7079f4.header_color = "#";
block_td_uid_17_58daa4b7079f4.ajax_pagination_infinite_stop = "";
block_td_uid_17_58daa4b7079f4.max_num_pages = "14";
tdBlocksArray.push(block_td_uid_17_58daa4b7079f4);
</script><div class="td-block-title-wrap"><h4 class="block-title"><a href="https://techtalk.vn/category/chuyen-gia-noi">Chuyên gia nói</a></h4></div><div id=td_uid_17_58daa4b7079f4 class="td_block_inner td-column-1">
        <div class="td_module_mx8 td_module_wrap td-animation-stack">
            <div class="meta-info-container">
                <div class="td-module-thumb"><a href="https://techtalk.vn/nhung-quy-tac-gay-soc-trong-phat-trien-phan-mem.html" rel="bookmark" title="Những quy tắc gây sốc trong phát triển phần mềm"><img width="504" height="385" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/reece-504x385.jpg" alt="" title="Những quy tắc gây sốc trong phát triển phần mềm"/></a></div>
                <div class="td-module-meta-info">
                    <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/nhung-quy-tac-gay-soc-trong-phat-trien-phan-mem.html" rel="bookmark" title="Những quy tắc gây sốc trong phát triển phần mềm">Những quy tắc gây sốc trong phát triển phần mềm</a></h3>                                        <span class="td-author-date">
                                                <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-22T08:00:11+00:00" >March 22, 2017</time></span>                                            </span>
                </div>
            </div>

        </div>

        
        <div class="td_module_mx2 td_module_wrap td-animation-stack">

            <div class="td-module-thumb"><a href="https://techtalk.vn/con-duong-tro-thanh-cao-thu-web-developer-ban-chon-huong-di-nao.html" rel="bookmark" title="Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn hướng đi nào?"><img width="80" height="60" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/road-80x60.png" alt="" title="Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn hướng đi nào?"/></a></div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/con-duong-tro-thanh-cao-thu-web-developer-ban-chon-huong-di-nao.html" rel="bookmark" title="Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn hướng đi nào?">Con đường trở thành cao thủ Web Developer &#8211; Bạn chọn hướng đi nào?</a></h3>                <div class="td-module-meta-info">
                                                            <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-21T11:27:47+00:00" >March 21, 2017</time></span>                                    </div>
            </div>

        </div>

        
        <div class="td_module_mx2 td_module_wrap td-animation-stack">

            <div class="td-module-thumb"><a href="https://techtalk.vn/gia-nhu-tao-loading-facebook-bang-css-that-don-gian.html" rel="bookmark" title="Giá như tạo loading Facebook bằng CSS thật đơn giản!"><img width="80" height="60" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2016/08/facebookfeatured-796x398-80x60.jpg" alt="" title="Giá như tạo loading Facebook bằng CSS thật đơn giản!"/></a></div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/gia-nhu-tao-loading-facebook-bang-css-that-don-gian.html" rel="bookmark" title="Giá như tạo loading Facebook bằng CSS thật đơn giản!">Giá như tạo loading Facebook bằng CSS thật đơn giản!</a></h3>                <div class="td-module-meta-info">
                                                            <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-09T19:00:38+00:00" >March 9, 2017</time></span>                                    </div>
            </div>

        </div>

        </div><div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_17_58daa4b7079f4" data-td_block_id="td_uid_17_58daa4b7079f4"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_17_58daa4b7079f4" data-td_block_id="td_uid_17_58daa4b7079f4"><i class="td-icon-font td-icon-menu-right"></i></a></div></div> <!-- ./block --><div class="td_block_wrap td_block_9 td_block_widget td_uid_18_58daa4b70c6d9_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_18_58daa4b70c6d9" ><script>var block_td_uid_18_58daa4b70c6d9 = new tdBlock();
block_td_uid_18_58daa4b70c6d9.id = "td_uid_18_58daa4b70c6d9";
block_td_uid_18_58daa4b70c6d9.atts = '{"limit":"3","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"593","category_ids":"","custom_title":"T\u00e2m s\u1ef1 coder","custom_url":"https:\/\/techtalk.vn\/category\/tam-su-coder","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"load_more","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_18_58daa4b70c6d9_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_18_58daa4b70c6d9.td_column_number = "1";
block_td_uid_18_58daa4b70c6d9.block_type = "td_block_9";
block_td_uid_18_58daa4b70c6d9.post_count = "3";
block_td_uid_18_58daa4b70c6d9.found_posts = "31";
block_td_uid_18_58daa4b70c6d9.header_color = "#";
block_td_uid_18_58daa4b70c6d9.ajax_pagination_infinite_stop = "";
block_td_uid_18_58daa4b70c6d9.max_num_pages = "11";
tdBlocksArray.push(block_td_uid_18_58daa4b70c6d9);
</script><div class="td-block-title-wrap"><h4 class="block-title"><a href="https://techtalk.vn/category/tam-su-coder">Tâm sự coder</a></h4></div><div id=td_uid_18_58daa4b70c6d9 class="td_block_inner">

	<div class="td-block-span12">

        <div class="td_module_8 td_module_wrap">

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/series-nhap-mon-lap-trinh-cong-viec-thuong-ngay-cua-mot-lap-trinh-vien.html" rel="bookmark" title="Series nhập môn lập trình – Công việc thường ngày của một lập trình viên">Series nhập môn lập trình – Công việc thường ngày của một lập trình...</a></h3>
                <div class="td-module-meta-info">
                                                            <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-27T07:00:16+00:00" >March 27, 2017</time></span>                                    </div>
            </div>

            
        </div>

        
	</div> <!-- ./td-block-span12 -->

	<div class="td-block-span12">

        <div class="td_module_8 td_module_wrap">

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/tai-sao-gioi-lap-trinh-thu-ghet-internet-explorer.html" rel="bookmark" title="Tại sao giới lập trình thù ghét Internet Explorer?">Tại sao giới lập trình thù ghét Internet Explorer?</a></h3>
                <div class="td-module-meta-info">
                                                            <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-26T19:00:55+00:00" >March 26, 2017</time></span>                                    </div>
            </div>

            
        </div>

        
	</div> <!-- ./td-block-span12 -->

	<div class="td-block-span12">

        <div class="td_module_8 td_module_wrap">

            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/mot-ngay-lam-viec-cua-lap-trinh-vien-kieu-mau.html" rel="bookmark" title="Một ngày làm việc của Lập Trình Viên &#8220;Kiểu Mẫu&#8221;">Một ngày làm việc của Lập Trình Viên &#8220;Kiểu Mẫu&#8221;</a></h3>
                <div class="td-module-meta-info">
                                                            <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-23T14:00:08+00:00" >March 23, 2017</time></span>                                    </div>
            </div>

            
        </div>

        
	</div> <!-- ./td-block-span12 --></div><div class="td-load-more-wrap"><a href="#" class="td_ajax_load_more td_ajax_load_more_js" id="next-page-td_uid_18_58daa4b70c6d9" data-td_block_id="td_uid_18_58daa4b70c6d9">Xem thêm<i class="td-icon-font td-icon-menu-down"></i></a></div></div> <!-- ./block --><div class="td_block_wrap td_block_18 td_block_widget td_uid_19_58daa4b70e0f1_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_19_58daa4b70e0f1" ><script>var block_td_uid_19_58daa4b70e0f1 = new tdBlock();
block_td_uid_19_58daa4b70e0f1.id = "td_uid_19_58daa4b70e0f1";
block_td_uid_19_58daa4b70e0f1.atts = '{"limit":"3","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"25","category_ids":"","custom_title":"S\u1ef1 ki\u1ec7n","custom_url":"https:\/\/techtalk.vn\/category\/su-kien","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"load_more","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_19_58daa4b70e0f1_rand","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
block_td_uid_19_58daa4b70e0f1.td_column_number = "1";
block_td_uid_19_58daa4b70e0f1.block_type = "td_block_18";
block_td_uid_19_58daa4b70e0f1.post_count = "3";
block_td_uid_19_58daa4b70e0f1.found_posts = "173";
block_td_uid_19_58daa4b70e0f1.header_color = "#";
block_td_uid_19_58daa4b70e0f1.ajax_pagination_infinite_stop = "";
block_td_uid_19_58daa4b70e0f1.max_num_pages = "58";
tdBlocksArray.push(block_td_uid_19_58daa4b70e0f1);
</script><div class="td-block-title-wrap"><h4 class="block-title"><a href="https://techtalk.vn/category/su-kien">Sự kiện</a></h4></div><div id=td_uid_19_58daa4b70e0f1 class="td_block_inner td-column-1">
        <div class="td_module_mx8 td_module_wrap td-animation-stack">
            <div class="meta-info-container">
                <div class="td-module-thumb"><a href="https://techtalk.vn/phong-van-doc-quyen-voi-dai-dien-ban-giam-khao-cua-the-finlab-cycle-2.html" rel="bookmark" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2"><img width="696" height="385" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/presentation-696x385.jpg" alt="" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2"/></a></div>
                <div class="td-module-meta-info">
                    <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/phong-van-doc-quyen-voi-dai-dien-ban-giam-khao-cua-the-finlab-cycle-2.html" rel="bookmark" title="Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2">Phỏng vấn độc quyền với Đại diện Ban Giám Khảo của The FinLab Cycle 2</a></h3>                                        <span class="td-author-date">
                                                <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-28T14:01:07+00:00" >March 28, 2017</time></span>                                            </span>
                </div>
            </div>

        </div>

        
        <div class="td_module_mx2 td_module_wrap td-animation-stack">

            <div class="td-module-thumb"><a href="https://techtalk.vn/kham-pha-nghe-product-4-ngay-toi-nen-bat-dau-tu-dau.html" rel="bookmark" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?"><img width="80" height="60" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/mindset-80x60.jpg" alt="" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?"/></a></div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/kham-pha-nghe-product-4-ngay-toi-nen-bat-dau-tu-dau.html" rel="bookmark" title="Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?">Khám phá nghề Product: 4 ngày tới, nên bắt đầu từ đâu?</a></h3>                <div class="td-module-meta-info">
                                                            <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-27T09:36:31+00:00" >March 27, 2017</time></span>                                    </div>
            </div>

        </div>

        
        <div class="td_module_mx2 td_module_wrap td-animation-stack">

            <div class="td-module-thumb"><a href="https://techtalk.vn/chan-dung-dan-dien-gia-sieu-khung-cua-break-into-the-iot-generation.html" rel="bookmark" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation"><img width="80" height="60" class="entry-thumb" src="https://static.techtalk.vn/wp-content/uploads/2017/03/iot-speaker-ad-80x60.jpg" alt="" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation"/></a></div>
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="https://techtalk.vn/chan-dung-dan-dien-gia-sieu-khung-cua-break-into-the-iot-generation.html" rel="bookmark" title="Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation">Chân dung dàn diễn giả “siêu khủng” của Break into the IoT Generation</a></h3>                <div class="td-module-meta-info">
                                                            <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2017-03-26T09:30:00+00:00" >March 26, 2017</time></span>                                    </div>
            </div>

        </div>

        </div><div class="td-load-more-wrap"><a href="#" class="td_ajax_load_more td_ajax_load_more_js" id="next-page-td_uid_19_58daa4b70e0f1" data-td_block_id="td_uid_19_58daa4b70e0f1">Xem thêm<i class="td-icon-font td-icon-menu-down"></i></a></div></div> <!-- ./block -->                            </div>
                        </div>
                            </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->


<!-- Footer -->
<div class="td-footer-wrapper">
    <div class="td-container">

	    <div class="td-pb-row">
		    <div class="td-pb-span12">
                		    </div>
	    </div>

        <div class="td-pb-row">

            <div class="td-pb-span12">
                            </div>
        </div>
    </div>

    <div class="td-footer-bottom-full">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span3"><aside class="footer-logo-wrap"><a href="https://techtalk.vn/"><img src="https://static.techtalk.vn/wp-content/uploads/2016/02/logoretina-300x99.png" alt="" title=""/></a></aside></div><div class="td-pb-span5"><aside class="footer-text-wrap"><div class="block-title"><span>VỀ CHÚNG TÔI</span></div>Chịu trách nhiệm nội dung: Lý Thị Diệu Huyền • © 2016 Công ty Cổ phần Applancer.
</br>Địa chỉ: 179 Đường Nguyễn Đình Chính, Phường 11, Quận PN, TP.HCM • Giấy phép MXH số 569/GP-BTTTT do Bộ TTTT cấp.
</br>Hotline: +84 944 685 243 (Ms Ngoc)<div class="footer-email-wrap">Liên hệ: <a href="mailto:hieuld@applancer.net">hieuld@applancer.net</a></div></aside></div><div class="td-pb-span4"><aside class="footer-social-wrap td-social-style-2"><div class="block-title"><span>THEO CHÚNG TÔI</span></div>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.facebook.com/Techtalkvietnam/" title="Facebook">
                <i class="td-icon-font td-icon-facebook"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.youtube.com/channel/UC-T4to_yv4ocCOd6AVagvEg" title="Youtube">
                <i class="td-icon-font td-icon-youtube"></i>
            </a>
        </span></aside></div>            </div>
        </div>
    </div>
</div>

<!-- Sub Footer -->
    </div><!--close content div-->
</div><!--close td-outer-wrap-->
<!-- <script type="text/javascript" src="https://topdev.vn/challenge/network/topdevnetwork.js"></script> -->
<script type="text/javascript">
$('div').removeClass('td-a-rec-id-custom_ad_1 td-a-rec-id-custom_ad_2');
</script>


    <!--

        Theme: Newspaper by tagDiv 2016
        Version: 7.3 (rara)
        Deploy mode: deploy
        Speed booster: v4.5

        uid: 58daa4b712394
    -->

    <script type='text/javascript' src='https://static.techtalk.vn/wp-content/themes/Newspaper/js/tagdiv_theme.min.js?ver=7.3'></script>
<script type='text/javascript' src='https://techtalk.vn/wp-includes/js/comment-reply.min.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://techtalk.vn/wp-includes/js/wp-embed.min.js?ver=4.7.2'></script>

<!-- JS generated by theme -->

<script>
    

                jQuery().ready(function jQuery_ready() {
                    tdAjaxCount.tdGetViewsCountsAjax("post","[13952]");
                });
            

	

		(function(){
			var html_jquery_obj = jQuery('html');

			if (html_jquery_obj.length && (html_jquery_obj.is('.ie8') || html_jquery_obj.is('.ie9'))) {

				var path = 'https://static.techtalk.vn/wp-content/themes/Newspaper-child/style.css';

				jQuery.get(path, function(data) {

					var str_split_separator = '#td_css_split_separator';
					var arr_splits = data.split(str_split_separator);
					var arr_length = arr_splits.length;

					if (arr_length > 1) {

						var dir_path = 'https://static.techtalk.vn/wp-content/themes/Newspaper';
						var splited_css = '';

						for (var i = 0; i < arr_length; i++) {
							if (i > 0) {
								arr_splits[i] = str_split_separator + ' ' + arr_splits[i];
							}
							//jQuery('head').append('<style>' + arr_splits[i] + '</style>');

							var formated_str = arr_splits[i].replace(/\surl\(\'(?!data\:)/gi, function regex_function(str) {
								return ' url(\'' + dir_path + '/' + str.replace(/url\(\'/gi, '').replace(/^\s+|\s+$/gm,'');
							});

							splited_css += "<style>" + formated_str + "</style>";
						}

						var td_theme_css = jQuery('link#td-theme-css');

						if (td_theme_css.length) {
							td_theme_css.after(splited_css);
						}
					}
				});
			}
		})();

	
	
</script>


<!-- Header style compiled by theme -->

<style>
    
.td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .td-header-style-12 .td-header-menu-wrap-full,
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .sf-menu ul .td-menu-item > a:hover,
    .sf-menu ul .sfHover > a,
    .sf-menu ul .current-menu-ancestor > a,
    .sf-menu ul .current-category-ancestor > a,
    .sf-menu ul .current-menu-item > a,
    .td-header-style-12 .td-affix,
    .header-search-wrap .td-drop-down-search:after,
    .header-search-wrap .td-drop-down-search .btn:hover,
    input[type=submit]:hover,
    .td-read-more a,
    .td-post-category:hover,
    .td-grid-style-1.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td-grid-style-5.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td_top_authors .td-active .td-author-post-count,
    .td_top_authors .td-active .td-author-comments-count,
    .td_top_authors .td_mod_wrap:hover .td-author-post-count,
    .td_top_authors .td_mod_wrap:hover .td-author-comments-count,
    .td-404-sub-sub-title a:hover,
    .td-search-form-widget .wpb_button:hover,
    .td-rating-bar-wrap div,
    .td_category_template_3 .td-current-sub-category,
    .dropcap,
    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper,
    .wpb_default,
    .wpb_default:hover,
    .td-left-smart-list:hover,
    .td-right-smart-list:hover,
    .woocommerce-checkout .woocommerce input.button:hover,
    .woocommerce-page .woocommerce a.button:hover,
    .woocommerce-account div.woocommerce .button:hover,
    #bbpress-forums button:hover,
    .bbp_widget_login .button:hover,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .widget_product_search input[type="submit"]:hover,
    .woocommerce .product a.button:hover,
    .woocommerce .product #respond input#submit:hover,
    .woocommerce .checkout input#place_order:hover,
    .woocommerce .woocommerce.widget .button:hover,
    .single-product .product .summary .cart .button:hover,
    .woocommerce-cart .woocommerce table.cart .button:hover,
    .woocommerce-cart .woocommerce .shipping-calculator-form .button:hover,
    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
    #bbpress-forums .bbp-pagination .current,
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
    .td-theme-slider:hover .slide-meta-cat a,
    a.vc_btn-black:hover,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .td-scroll-up,
    .td-smart-list-button:hover,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td_block_big_grid_9.td-grid-style-1 .td-post-category,
    .td_block_big_grid_9.td-grid-style-5 .td-post-category,
    .td-grid-style-6.td-hover-1 .td-module-thumb:after {
        background-color: #ec1f27;
    }

    .woocommerce .woocommerce-message .button:hover,
    .woocommerce .woocommerce-error .button:hover,
    .woocommerce .woocommerce-info .button:hover {
        background-color: #ec1f27 !important;
    }

    .woocommerce .product .onsale,
    .woocommerce.widget .ui-slider .ui-slider-handle {
        background: none #ec1f27;
    }

    .woocommerce.widget.widget_layered_nav_filters ul li a {
        background: none repeat scroll 0 0 #ec1f27 !important;
    }

    a,
    cite a:hover,
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td-mega-span h3 a:hover,
    .td_mod_mega_menu:hover .entry-title a,
    .header-search-wrap .result-msg a:hover,
    .top-header-menu li a:hover,
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .td-social-icon-wrap > a:hover,
    .td-header-sp-top-widget .td-social-icon-wrap a:hover,
    .td-page-content blockquote p,
    .td-post-content blockquote p,
    .mce-content-body blockquote p,
    .comment-content blockquote p,
    .wpb_text_column blockquote p,
    .td_block_text_with_title blockquote p,
    .td_module_wrap:hover .entry-title a,
    .td-subcat-filter .td-subcat-list a:hover,
    .td-subcat-filter .td-subcat-dropdown a:hover,
    .td_quote_on_blocks,
    .dropcap2,
    .dropcap3,
    .td_top_authors .td-active .td-authors-name a,
    .td_top_authors .td_mod_wrap:hover .td-authors-name a,
    .td-post-next-prev-content a:hover,
    .author-box-wrap .td-author-social a:hover,
    .td-author-name a:hover,
    .td-author-url a:hover,
    .td_mod_related_posts:hover h3 > a,
    .td-post-template-11 .td-related-title .td-related-left:hover,
    .td-post-template-11 .td-related-title .td-related-right:hover,
    .td-post-template-11 .td-related-title .td-cur-simple-item,
    .td-post-template-11 .td_block_related_posts .td-next-prev-wrap a:hover,
    .comment-reply-link:hover,
    .logged-in-as a:hover,
    #cancel-comment-reply-link:hover,
    .td-search-query,
    .td-category-header .td-pulldown-category-filter-link:hover,
    .td-category-siblings .td-subcat-dropdown a:hover,
    .td-category-siblings .td-subcat-dropdown a.td-current-sub-category,
    .widget a:hover,
    .widget_calendar tfoot a:hover,
    .woocommerce a.added_to_cart:hover,
    #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,
    #bbpress-forums .bbp-forum-freshness a:hover,
    #bbpress-forums .bbp-topic-freshness a:hover,
    #bbpress-forums .bbp-forums-list li a:hover,
    #bbpress-forums .bbp-forum-title:hover,
    #bbpress-forums .bbp-topic-permalink:hover,
    #bbpress-forums .bbp-topic-started-by a:hover,
    #bbpress-forums .bbp-topic-started-in a:hover,
    #bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,
    #bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,
    .widget_display_replies .bbp-author-name,
    .widget_display_topics .bbp-author-name,
    .footer-text-wrap .footer-email-wrap a,
    .td-subfooter-menu li a:hover,
    .footer-social-wrap a:hover,
    a.vc_btn-black:hover,
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td_module_17 .td-read-more a:hover,
    .td_module_18 .td-read-more a:hover,
    .td_module_19 .td-post-author-name a:hover,
    .td-instagram-user a {
        color: #ec1f27;
    }

    a.vc_btn-black.vc_btn_square_outlined:hover,
    a.vc_btn-black.vc_btn_outlined:hover,
    .td-mega-menu-page .wpb_content_element ul li a:hover {
        color: #ec1f27 !important;
    }

    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
    #bbpress-forums .bbp-pagination .current,
    .post .td_quote_box,
    .page .td_quote_box,
    a.vc_btn-black:hover {
        border-color: #ec1f27;
    }

    .td_wrapper_video_playlist .td_video_currently_playing:after {
        border-color: #ec1f27 !important;
    }

    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent #ec1f27 transparent;
    }

    .block-title > span,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td-related-title .td-cur-simple-item,
    .woocommerce .product .products h2,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more {
    	background-color: #ec1f27;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    	background-color: #ec1f27 !important;
    }

    .block-title,
    .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .woocommerce div.product .woocommerce-tabs ul.tabs:before {
        border-color: #ec1f27;
    }
    .td_block_wrap .td-subcat-item .td-cur-simple-item {
	    color: #ec1f27;
	}


    
    .td-grid-style-4 .entry-title
    {
        background-color: rgba(236, 31, 39, 0.7);
    }

    
    .block-title > span,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td-related-title .td-cur-simple-item,
    .woocommerce .product .products h2,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before {
        background-color: #ec1f27;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    	background-color: #ec1f27 !important;
    }

    .block-title,
    .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .woocommerce div.product .woocommerce-tabs ul.tabs:before {
        border-color: #ec1f27;
    }

    
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .top-header-menu li a:hover {
        color: #ec1f27;
    }

    
    .td-header-wrap .td-header-menu-wrap .sf-menu > li > a,
    .td-header-wrap .header-search-wrap .td-icon-search {
        color: #222222;
    }


    
    @media (max-width: 767px) {
        body .td-header-wrap .td-header-main-menu {
            background-color: #ffffff !important;
        }
    }


    
    @media (max-width: 767px) {
        body #td-top-mobile-toggle i,
        .td-header-wrap .header-search-wrap .td-icon-search {
            color: #ec1f27 !important;
        }
    }

    
    .post .td-post-header .entry-title {
        color: #333333;
    }
    .td_module_15 .entry-title a {
        color: #333333;
    }

    
    .td-module-meta-info .td-post-author-name a {
    	color: #333333;
    }

    
    .td-post-content,
    .td-post-content p {
    	color: #333333;
    }

    
    .td-post-content h1,
    .td-post-content h2,
    .td-post-content h3,
    .td-post-content h4,
    .td-post-content h5,
    .td-post-content h6 {
    	color: #333333;
    }

    
    .top-header-menu > li > a,
    .td-weather-top-widget .td-weather-now .td-big-degrees,
    .td-weather-top-widget .td-weather-header .td-weather-city,
    .td-header-sp-top-menu .td_data_time {
        font-family:Roboto;
	
    }
    
    .top-header-menu .menu-item-has-children li a {
    	font-family:Roboto;
	
    }
    
    ul.sf-menu > .td-menu-item > a {
        font-family:Roboto;
	
    }
    
    .sf-menu ul .td-menu-item a {
        font-family:Roboto;
	
    }
	
    .td_mod_mega_menu .item-details a {
        font-family:Roboto;
	
    }
    
    .td_mega_menu_sub_cats .block-mega-child-cats a {
        font-family:Roboto;
	
    }
    
    .td-mobile-content .td-mobile-main-menu > li > a {
        font-family:Roboto;
	
    }
    
    .td-mobile-content .sub-menu a {
        font-family:Roboto;
	
    }



	
    .block-title > span,
    .block-title > a,
    .widgettitle,
    .td-trending-now-title,
    .wpb_tabs li a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab > a,
    .td-related-title a,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a,
    .woocommerce .product .products h2 {
        font-family:Roboto;
	
    }
    
    .td-post-author-name a {
        font-family:Roboto;
	
    }
    
    .td-post-date .entry-date {
        font-family:Roboto;
	
    }
    
    .td-module-comments a,
    .td-post-views span,
    .td-post-comments a {
        font-family:Roboto;
	
    }
    
    .td-big-grid-meta .td-post-category,
    .td_module_wrap .td-post-category,
    .td-module-image .td-post-category {
        font-family:Roboto;
	
    }
    
    .td-subcat-filter .td-subcat-dropdown a,
    .td-subcat-filter .td-subcat-list a,
    .td-subcat-filter .td-subcat-dropdown span {
        font-family:Roboto;
	
    }
    
    .td-excerpt {
        font-family:Roboto;
	
    }


	
	.td_module_wrap .td-module-title {
		font-family:Roboto;
	
	}
     
	.td_block_trending_now .entry-title a,
	.td-theme-slider .td-module-title a,
    .td-big-grid-post .entry-title {
		font-family:Roboto;
	
	}
    
	.post .td-post-header .entry-title {
		font-family:Roboto;
	
	}
    
    .td-post-template-default .td-post-header .entry-title {
        font-family:Roboto;
	
    }
    
    .td-post-content p,
    .td-post-content {
        font-family:Roboto;
	font-size:16px;
	
    }
    
    .post blockquote p,
    .page blockquote p,
    .td-post-text-content blockquote p {
        font-family:Roboto;
	font-size:16px;
	font-style:italic;
	
    }
    
    .post .td_quote_box p,
    .page .td_quote_box p {
        font-family:Roboto;
	
    }
    
    .post .td_pull_quote p,
    .page .td_pull_quote p {
        font-family:Roboto;
	
    }
    
    .td-post-content li {
        font-family:Roboto;
	
    }
    
    .td-post-content h1 {
        font-family:Roboto;
	
    }
    
    .td-post-content h2 {
        font-family:Roboto;
	
    }
    
    .td-post-content h3 {
        font-family:Roboto;
	
    }
    
    .td-post-content h4 {
        font-family:Roboto;
	
    }
    
    .td-post-content h5 {
        font-family:Roboto;
	
    }
    
    .td-post-content h6 {
        font-family:Roboto;
	
    }





    
    .post .td-category a {
        font-family:Roboto;
	
    }
    
    .post header .td-post-author-name,
    .post header .td-post-author-name a {
        font-family:Roboto;
	
    }
    
    .post header .td-post-date .entry-date {
        font-family:Roboto;
	
    }
    
    .post header .td-post-views span,
    .post header .td-post-comments {
        font-family:Roboto;
	
    }
    
    .post .td-post-source-tags a,
    .post .td-post-source-tags span {
        font-family:Roboto;
	
    }
    
    .post .td-post-next-prev-content span {
        font-family:Roboto;
	
    }
    
    .post .td-post-next-prev-content a {
        font-family:Roboto;
	
    }
    
    .post .author-box-wrap .td-author-name a {
        font-family:Roboto;
	
    }
    
    .post .author-box-wrap .td-author-url a {
        font-family:Roboto;
	
    }
    
    .post .author-box-wrap .td-author-description {
        font-family:Roboto;
	
    }
    
    .td_block_related_posts .entry-title a {
        font-family:Roboto;
	
    }
    
    .post .td-post-share-title {
        font-family:Roboto;
	
    }
    
	.wp-caption-text,
	.wp-caption-dd {
		font-family:Roboto;
	
	}
    
    .td-post-template-default .td-post-sub-title,
    .td-post-template-1 .td-post-sub-title,
    .td-post-template-4 .td-post-sub-title,
    .td-post-template-5 .td-post-sub-title,
    .td-post-template-9 .td-post-sub-title,
    .td-post-template-10 .td-post-sub-title,
    .td-post-template-11 .td-post-sub-title {
        font-family:Roboto;
	
    }
    
    .td-post-template-2 .td-post-sub-title,
    .td-post-template-3 .td-post-sub-title,
    .td-post-template-6 .td-post-sub-title,
    .td-post-template-7 .td-post-sub-title,
    .td-post-template-8 .td-post-sub-title {
        font-family:Roboto;
	
    }




	
    .td-page-title,
    .woocommerce-page .page-title,
    .td-category-title-holder .td-page-title {
    	font-family:Roboto;
	
    }
    
    .td-page-content p,
    .td-page-content .td_block_text_with_title,
    .woocommerce-page .page-description > p,
    .wpb_text_column p {
    	font-family:Roboto;
	
    }
    
    .td-page-content h1,
    .wpb_text_column h1 {
    	font-family:Roboto;
	
    }
    
    .td-page-content h2,
    .wpb_text_column h2 {
    	font-family:Roboto;
	
    }
    
    .td-page-content h3,
    .wpb_text_column h3 {
    	font-family:Roboto;
	
    }
    
    .td-page-content h4,
    .wpb_text_column h4 {
    	font-family:Roboto;
	
    }
    
    .td-page-content h5,
    .wpb_text_column h5 {
    	font-family:Roboto;
	
    }
    
    .td-page-content h6,
    .wpb_text_column h6 {
    	font-family:Roboto;
	
    }




    
	.footer-text-wrap {
		font-family:Roboto;
	
	}
	
	.td-sub-footer-copy {
		font-family:Roboto;
	
	}
	
	.td-sub-footer-menu ul li a {
		font-family:Roboto;
	
	}




	
    .entry-crumbs a,
    .entry-crumbs span,
    #bbpress-forums .bbp-breadcrumb a,
    #bbpress-forums .bbp-breadcrumb .bbp-breadcrumb-current {
    	font-family:Roboto;
	
    }
    
    .category .td-category a {
    	font-family:Roboto;
	
    }
    
    .td-trending-now-display-area .entry-title {
    	font-family:Roboto;
	
    }
    
    .page-nav a,
    .page-nav span {
    	font-family:Roboto;
	
    }
    
    #td-outer-wrap span.dropcap {
    	font-family:Roboto;
	
    }
    
    .widget_archive a,
    .widget_calendar,
    .widget_categories a,
    .widget_nav_menu a,
    .widget_meta a,
    .widget_pages a,
    .widget_recent_comments a,
    .widget_recent_entries a,
    .widget_text .textwidget,
    .widget_tag_cloud a,
    .widget_search input,
    .woocommerce .product-categories a,
    .widget_display_forums a,
    .widget_display_replies a,
    .widget_display_topics a,
    .widget_display_views a,
    .widget_display_stats {
    	font-family:Roboto;
	
    }
    
	input[type="submit"],
	.td-read-more a,
	.vc_btn,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce #respond input#submit {
		font-family:Roboto;
	
	}
	
    body, p {
    	font-family:Roboto;
	
    }
</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=580972292069229";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="https://techtalk.vn/techtalknet.js" type="text/javascript"></script>
</body>
</html>
<!-- Dynamic page generated in 0.977 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-03-29 01:00:23 -->

<!-- Compression = gzip -->