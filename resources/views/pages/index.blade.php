@extends('master_hero')



@section('head_scripts')

	<link rel="stylesheet" id="wpo_min-header-0-css"
		href="{{asset('css/wpo-minify-header-d39cbc9d.min.css')}}"
		type="text/css" media="all" />

	<script type="text/javascript"
		src="{{asset('js/wpo-minify-header-169e1450.min.js')}}"
		id="wpo_min-header-0-js"></script>
	<title>Mayank Singh-Portfolio</title>
	 
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style>
		img:is([sizes="auto" i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px;
		}
	</style>
	<style id="classic-theme-styles-inline-css" type="text/css">
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(0.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em;
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none;
		}
	</style>
	<style id="global-styles-inline-css" type="text/css">
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
					rgba(6, 147, 227, 1) 0%,
					rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
					rgb(122, 220, 180) 0%,
					rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
					rgba(252, 185, 0, 1) 0%,
					rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
					rgba(255, 105, 0, 1) 0%,
					rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
					rgb(238, 238, 238) 0%,
					rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
					rgb(74, 234, 220) 0%,
					rgb(151, 120, 209) 20%,
					rgb(207, 42, 186) 40%,
					rgb(238, 44, 130) 60%,
					rgb(251, 105, 98) 80%,
					rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
					rgb(255, 206, 236) 0%,
					rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
					rgb(254, 205, 165) 0%,
					rgb(254, 45, 45) 50%,
					rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
					rgb(255, 203, 112) 0%,
					rgb(199, 81, 192) 50%,
					rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg,
					rgb(255, 245, 203) 0%,
					rgb(182, 227, 212) 50%,
					rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg,
					rgb(202, 248, 128) 0%,
					rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg,
					rgb(2, 3, 129) 0%,
					rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
				6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<script type="text/javascript" id="wcf--addons-js-extra">
		/* <![CDATA[ */
		var WCF_ADDONS_JS = {
			ajaxUrl:
				"https:\/\/crowdytheme.com\/wp\/arolax\/it-consultancy-agency\/wp-admin\/admin-ajax.php",
			_wpnonce: "f83cdd6091",
			post_id: "5",
			i18n: {
				okay: "Okay",
				cancel: "Cancel",
				submit: "Submit",
				success: "Success",
				warning: "Warning",
			},
			smoothScroller: null,
			mode: "",
			isLoggedIn: "",
		};
		/* ]]> */
	</script>
	<script type="text/javascript" id="wpo_min-header-0-js-extra">
		/* <![CDATA[ */
		var WCF_ADDONS_JS = {
			ajaxUrl:
				"https:\/\/crowdytheme.com\/wp\/arolax\/it-consultancy-agency\/wp-admin\/admin-ajax.php",
			_wpnonce: "f83cdd6091",
			post_id: "5",
			i18n: {
				okay: "Okay",
				cancel: "Cancel",
				submit: "Submit",
				success: "Success",
				warning: "Warning",
			},
			smoothScroller: null,
			mode: "",
			isLoggedIn: "",
		};
		/* ]]> */
	</script>
	<style>
		.e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {

			.e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {

			.e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
	</style>
	<style type="text/css" id="wp-custom-css">
		.swiper-container {
			overflow: hidden;
		}

		/** Mega Menu CSS Start **/
		@media (min-width: 1200px) {

			.Mayank-element-b7b6d24,
			.Mayank-element-32eb3e9,
			#menu-item-15664 {
				position: static !important;
			}

			#menu-item-15664>.sub-menu {
				width: 96%;
				display: grid;
				grid-template-columns: 1fr 1fr 1fr 1fr;
				left: 2%;
				top: 80px;
				border-radius: 5px;
				padding: 0;
			}

			#menu-item-15664 .sub-menu .sub-menu {
				position: static;
				opacity: 0;
				visibility: hidden;
				transform: unset;
				border-radius: 0;
				border: 0;
			}

			#menu-item-15664:hover .sub-menu .sub-menu {
				opacity: 1;
				visibility: visible;
				box-shadow: none;
			}

			#menu-item-15664>.sub-menu>li {
				border-right: 1px solid #ddd;
			}

			#menu-item-15664>.sub-menu>li:last-child {
				border-right: none;
			}

			#menu-item-15664>.sub-menu>li>a {
				border-bottom: 1px solid #ddd;
				text-transform: uppercase;
				padding: 18px 30px;
				pointer-events: none;
			}

			#menu-item-15664 .wcf-submenu-indicator {
				display: none;
			}
		}

		.sub-menu .menu-item a .menu-text:after {
			display: block;
			content: "";
			border-bottom: solid 1px #121212;
			transform: scaleX(0);
			width: 0;
			transition: transform 250ms ease-in-out;
		}

		.sub-menu .menu-item a:hover .menu-text:after {
			transform: scaleX(1);
			width: 100%;
			transform-origin: 0% 100%;
		}
	</style>

@endsection

@section('main_content')

<div data-Mayank-type="wp-page" data-Mayank-id="5" class="Mayank         		Mayank-5">
    <div class="Mayank-element Mayank-element-2051587  e-flex e-con-boxed e-con e-parent" data-id="2051587"
		data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-580a41d e-con-full e-flex e-con e-child" data-id="580a41d"
				data-element_type="container"
				data-settings='{"background_background":"classic","wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-e94e1ed Mayank-widget Mayank-widget-wcf--floating-elements"
					data-id="e94e1ed" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","fade-from":"in","data-duration":0.75,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"ease":"power2.out"}'
					data-widget_type="wcf--floating-elements.default">
					<div class="Mayank-widget-container">
						<div class="wcf--floating-elements">
							<div class="floating-element wcf-live-anim- Mayank-repeater-item-45cdebd">
								<img decoding="async"
									src="images/floatingImag.svg"
									alt="floatingImag" />
							</div>
						</div>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-32dcee0 Mayank-widget Mayank-widget-wcf--button"
					data-id="32dcee0" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","delay":0.3,"data-duration":0.75,"fade-offset":20,"aae_method":"from","aae_trigger":"on_scroll","fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--button.default">
					<div class="Mayank-widget-container">
						<div class="wcf__btn">
							<a href="#projects" rel="nofollow"
								class="wcf-btn-default btn-hover-none">
								Explore My Projects
							</a>
						</div>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-297afa6 Mayank-widget__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="297afa6" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","delay":0.45,"data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">
							Mayank Singh, Data Scientist, AI and Machine Learning Engineer
						</h2>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-9347b6d Mayank-widget__width-initial Mayank-widget-mobile__width-inherit wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="9347b6d" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","delay":0.6,"data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">
							Transforming complex data into intelligent insights to drive innovation and real-world impact
						</h2>
					</div>
				</div>
			</div>
			<div class="Mayank-element Mayank-element-aa7bb1a e-con-full e-flex e-con e-child" data-id="aa7bb1a"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-8a2c595 e-con-full e-flex e-con e-child"
					data-id="8a2c595" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-e958e8e e-con-full e-flex e-con e-child"
						data-id="e958e8e" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-c6165fd Mayank-widget Mayank-widget-wcf--image"
							data-id="c6165fd" data-element_type="widget"
							data-settings='{"wcf-animation":"fade","data-duration":0.65,"fade-offset":20,"wcf-image-animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
							data-widget_type="wcf--image.default">
							<div class="Mayank-widget-container">
								<div class="wcf--image">
									<img fetchpriority="high" decoding="async" width="915" height="522"
										src="images/banner-right.webp"
										class="attachment-full size-full wp-image-2613" alt="" srcset="
                              images/banner-right.webp         915w,
                              images/banner-right-300x171.webp 300w,
                              images/banner-right-768x438.webp 768w
                            " sizes="(max-width: 915px) 100vw, 915px" />
								</div>
							</div>
						</div>
					</div>
					<div class="aae-disable-transition Mayank-element Mayank-element-da17b1c e-con-full e-flex e-con e-child"
						data-id="da17b1c" data-element_type="container"
						data-settings='{"background_background":"classic","wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.3,"data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","fade-from":"bottom","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-ab160a0 Mayank-absolute Mayank-widget Mayank-widget-image"
							data-id="ab160a0" data-element_type="widget"
							data-settings='{"_position":"absolute","wcf-image-animation":"none","wcf-animation":"none"}'
							data-widget_type="image.default">
							<div class="Mayank-widget-container">
								<img decoding="async" width="20" height="40"
									src="images/img-r-2.webp"
									class="attachment-full size-full wp-image-3343" alt="" />
							</div>
						</div>
						<div class="Mayank-element Mayank-element-b39cbbb Mayank-widget__width-inherit wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
							data-id="b39cbbb" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="wcf--counter.default">
							<div class="Mayank-widget-container">
								<div class="wcf--counter">
									<div class="count">
										<span class="wcf--counter-number-prefix"></span>
										<span class="wcf--counter-number" style="    font-size: 30px;">Python Developer</span>
										<span class="wcf--counter-number-suffix"></span>
									</div>

									<div class="title">focused on writing clean and efficient code.</div>
								</div>
							</div>
						</div>
						<div class="Mayank-element Mayank-element-39ba1c3 Mayank-widget Mayank-widget-image"
							data-id="39ba1c3" data-element_type="widget"
							data-settings='{"wcf-image-animation":"none","wcf-animation":"none"}'
							data-widget_type="image.default">
							<div class="Mayank-widget-container">
								<img decoding="async" width="47" height="47"
									src="images/hero_icon.svg"
									class="attachment-full size-full wp-image-2627" alt="" />
							</div>
						</div>
					</div>
					<div class="aae-disable-transition Mayank-element Mayank-element-96146ad e-con-full e-flex e-con e-child"
						data-id="96146ad" data-element_type="container"
						data-settings='{"background_background":"classic","wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.3,"data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","fade-from":"bottom","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-78beeae Mayank-widget__width-inherit wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
							data-id="78beeae" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="wcf--counter.default">
							<div class="Mayank-widget-container">
								<div class="wcf--counter">
									<div class="count">
										<span class="wcf--counter-number-prefix"></span>
											<span class="wcf--counter-number" style="    font-size: 30px;">Doing...</span>
										
									</div>

									<div class="title">
										AI, ML, and automation projects that make data work smarter.
									</div>
								</div>
							</div>
						</div>
						<div class="Mayank-element Mayank-element-d304be7 Mayank-widget Mayank-widget-image"
							data-id="d304be7" data-element_type="widget"
							data-settings='{"wcf-image-animation":"none","wcf-animation":"none"}'
							data-widget_type="image.default">
							<div class="Mayank-widget-container">
								<img loading="lazy" decoding="async" width="160" height="55"
									src="images/aiml-hero.png"
									class="attachment-full size-full wp-image-2634" alt="" />
							</div>
						</div>
					</div>
					<div class="aae-disable-transition Mayank-element Mayank-element-aac432b e-con-full e-flex e-con e-child"
						data-id="aac432b" data-element_type="container"
						data-settings='{"background_background":"classic","wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.3,"fade-from":"right","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-2da3720 Mayank-widget Mayank-widget-wcf--video-popup"
							data-id="2da3720" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="wcf--video-popup.default">
							<div class="Mayank-widget-container">
								<div class="wcf--video-popup">
									<button class="wcf-popup-btn" data-src="https://www.youtube.com/embed/Es9X1du3SVM"
										aria-label="Popup Video Open Icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-play" viewBox="0 0 448 512"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
											</path>
										</svg>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="aae-disable-transition Mayank-element Mayank-element-3bb74be e-flex e-con-boxed e-con e-parent"
		data-id="3bb74be" data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-c4daa6c e-con-full e-flex e-con e-child" data-id="c4daa6c"
				data-element_type="container"
				data-settings='{"background_background":"classic","wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-b6132bd e-con-full e-flex e-con e-child"
					data-id="b6132bd" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-69bb1a3 Mayank-widget__width-initial Mayank-widget-mobile_extra__width-inherit Mayank-widget-mobile__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
						data-id="69bb1a3" data-element_type="widget"
						data-settings='{"wcf_text_animation":"none","wcf-animation":"none"}'
						data-widget_type="wcf--title.default">
						<div class="Mayank-widget-container">
							
						</div>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-b5345ad e-con-full e-flex e-con e-child"
					data-id="b5345ad" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-5e92ed0 Mayank-widget Mayank-widget-image-carousel"
						data-id="5e92ed0" data-element_type="widget"
						data-settings='{"slides_to_show":"6","slides_to_scroll":"1","navigation":"none","slides_to_show_tablet":"4","slides_to_scroll_tablet":"1","slides_to_show_mobile_extra":"3","slides_to_show_mobile":"2","image_spacing_custom_tablet":{"unit":"px","size":50,"sizes":[]},"autoplay":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","autoplay_speed":5000,"infinite":"yes","speed":500,"image_spacing_custom":{"unit":"px","size":20,"sizes":[]},"image_spacing_custom_widescreen":{"unit":"px","size":"","sizes":[]},"image_spacing_custom_laptop":{"unit":"px","size":"","sizes":[]},"image_spacing_custom_tablet_extra":{"unit":"px","size":"","sizes":[]},"image_spacing_custom_mobile_extra":{"unit":"px","size":"","sizes":[]},"image_spacing_custom_mobile":{"unit":"px","size":"","sizes":[]},"wcf-animation":"none"}'
						data-widget_type="image-carousel.default">
						<div class="Mayank-widget-container">
							<div class="Mayank-image-carousel-wrapper swiper" role="region"
								aria-roledescription="carousel" aria-label="Image Carousel" dir="ltr">
								<div class="Mayank-image-carousel swiper-wrapper" aria-live="off">
									<div class="swiper-slide" role="group" aria-roledescription="slide"
										aria-label="1 of 5">
										<figure class="swiper-slide-inner">
											<img decoding="async" class="swiper-slide-image"
												src="{{asset('images/python.png')}}"
												alt="client-01" />
										</figure>
									</div>
									<div class="swiper-slide" role="group" aria-roledescription="slide"
										aria-label="2 of 5">
										<figure class="swiper-slide-inner">
											<img decoding="async" class="swiper-slide-image"
												src="{{asset('images/sql.png')}}"
												alt="client-02" />
										</figure>
									</div>
									<div class="swiper-slide" role="group" aria-roledescription="slide"
										aria-label="3 of 5">
										<figure class="swiper-slide-inner">
											<img decoding="async" class="swiper-slide-image"
												src="{{asset('images/aiml.png')}}"
												alt="client-03" />
										</figure>
									</div>
									<div class="swiper-slide" role="group" aria-roledescription="slide"
										aria-label="4 of 5">
										<figure class="swiper-slide-inner">
											<img decoding="async" class="swiper-slide-image"
												src="{{asset('images/git.png')}}"
												alt="client-05" />
										</figure>
									</div>
									<div class="swiper-slide" role="group" aria-roledescription="slide"
										aria-label="5 of 5">
										<figure class="swiper-slide-inner">
											<img decoding="async" class="swiper-slide-image"
												src="{{asset('images/js.png')}}"
												alt="client-06" />
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="Mayank-element Mayank-element-248a90a e-flex e-con-boxed e-con e-parent" data-id="248a90a"
		data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-761c3c4 e-con-full e-flex e-con e-child" data-id="761c3c4"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-0407eea wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="0407eea" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">
							<span class="highlight">// </span> &nbsp; 01 - about us
						</h2>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-be62999 Mayank-widget__width-initial Mayank-widget-tablet__width-initial Mayank-widget-mobile_extra__width-inherit wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="be62999" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">I’m Mayank Singh, a Data Scientist and AI/ML Engineer</h2>
					</div>
				</div>
			</div>
			<div class="Mayank-element Mayank-element-46ccd0c e-con-full e-flex e-con e-child" data-id="46ccd0c"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-8ec633e Mayank-widget__width-initial wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
					data-id="8ec633e" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--counter.default">
					<div class="Mayank-widget-container">
						<div class="wcf--counter">
							<div class="count">
								<span class="wcf--counter-number-prefix"></span>
								<span class="wcf--counter-number" data-duration="2000" data-to-value="25"
									data-from-value="0" data-delimiter=",">0</span>
								<span class="wcf--counter-number-suffix">+</span>
							</div>
						</div>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-f856de9 Mayank-widget__width-inherit wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="f856de9" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						
							
							<p class="wcf--title"><span class="highlight">Projects Completed <br> </span>I combine my engineering knowledge with data science, AI, and machine learning skills to create innovative projects and meaningful solutions that demonstrate my passion and dedication.
						</p>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-e9b3ea8 Mayank-widget-divider--view-line Mayank-widget Mayank-widget-divider"
					data-id="e9b3ea8" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","fade-from":"in","data-duration":0.75,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"ease":"power2.out"}'
					data-widget_type="divider.default">
					<div class="Mayank-widget-container">
						<div class="Mayank-divider">
							<span class="Mayank-divider-separator"> </span>
						</div>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-3a9ff2b Mayank-position-left Mayank-view-default Mayank-mobile-position-top Mayank-widget Mayank-widget-icon-box"
					data-id="3a9ff2b" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="icon-box.default">
					<div class="Mayank-widget-container">
						<div class="Mayank-icon-box-wrapper">
							<div class="Mayank-icon-box-icon">
								<span class="Mayank-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="54" height="40" viewBox="0 0 54 40"
										fill="none">
										<path
											d="M13.9869 0.597731C13.9801 0.599135 13.9733 0.600555 13.9664 0.601993C13.5836 0.681708 13.0332 0.812917 12.3711 1.01767C11.0452 1.42767 9.28075 2.12976 7.51965 3.29678C4.01617 5.61841 0.500002 9.79191 0.500003 17.28L0.500007 39.5L22.0352 39.5L22.0352 22.3868L16.9151 22.3868C12.4739 22.3868 8.23244 19.4876 7.86928 14.8938M13.9869 0.597731L7.86928 14.8938M13.9869 0.597731L13.9869 4.49274C13.8807 4.51764 13.758 4.54935 13.6216 4.58944C13.147 4.72892 12.5025 4.9712 11.8149 5.38424C10.434 6.21383 8.89496 7.72485 8.21192 10.4196M13.9869 0.597731L8.21192 10.4196M7.86928 14.8938C7.74474 13.3191 7.78592 11.7039 8.21192 10.4196M7.86928 14.8938C7.86928 14.8938 7.86928 14.8938 7.86928 14.8938L8.21192 10.4196M44.7645 0.601987C44.7714 0.60055 44.7782 0.59913 44.785 0.597726L44.785 4.49273C44.6789 4.51763 44.5561 4.54934 44.4197 4.58943C43.9451 4.72892 43.3006 4.97119 42.6131 5.38424C41.2321 6.21382 39.6931 7.72484 39.01 10.4196C38.584 11.7039 38.5429 13.3191 38.6674 14.8938C39.0306 19.4876 43.272 22.3868 47.7132 22.3868L52.8333 22.3868L52.8333 39.5L31.2981 39.5L31.2981 17.28C31.2981 9.79191 34.8143 5.61841 38.3178 3.29677C40.0789 2.12975 41.8433 1.42767 43.1692 1.01767C43.8313 0.812912 44.3817 0.681702 44.7645 0.601987Z"
											stroke="#566E7C"></path>
									</svg>
								</span>
							</div>

							<div class="Mayank-icon-box-content">
								<p class="Mayank-icon-box-description">
									I’m passionate about exploring AI and data-driven solutions and turning ideas into projects that showcase my skills and creativity.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="aae-disable-transition Mayank-element Mayank-element-2b0aa1c e-con-full e-flex e-con e-child"
					data-id="2b0aa1c" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-0f63db6 e-con-full e-flex e-con e-child"
						data-id="0f63db6" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-6dbee15 Mayank-widget__width-initial Mayank-widget-mobile__width-inherit wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
							data-id="6dbee15" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="wcf--counter.default">
							<div class="Mayank-widget-container">
								<div class="wcf--counter">
									<div class="count">
										<span class="wcf--counter-number-prefix"></span>
										<span class="wcf--counter-number" data-duration="2000" data-to-value="4.5"
											data-from-value="0" data-delimiter=",">0</span>
										<span class="wcf--counter-number-suffix">*</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="Mayank-element Mayank-element-2228900 e-con-full e-flex e-con e-child"
						data-id="2228900" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-0f43f55 wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
							data-id="0f43f55" data-element_type="widget"
							data-settings='{"wcf_text_animation":"none","wcf-animation":"none"}'
							data-widget_type="wcf--title.default">
							<div class="Mayank-widget-container">
								<h2 class="wcf--title">Julian Bray</h2>
							</div>
						</div>
						<div class="Mayank-element Mayank-element-e1cf7c9 wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
							data-id="e1cf7c9" data-element_type="widget"
							data-settings='{"wcf_text_animation":"none","wcf-animation":"none"}'
							data-widget_type="wcf--title.default">
							<div class="Mayank-widget-container">
								<h2 class="wcf--title">CEO, Habib@arolax</h2>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="Mayank-element Mayank-element-7e341fb e-con-full e-flex e-con e-child" data-id="7e341fb"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-9182dd4 e-con-full e-flex e-con e-child"
					data-id="9182dd4" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-3552465 Mayank-widget Mayank-widget-image"
						data-id="3552465" data-element_type="widget"
						data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf-image-animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
						data-widget_type="image.default">
						<div class="Mayank-widget-container">
							<img loading="lazy" decoding="async" width="410" height="572"
								src="images/about-us.webp"
								class="attachment-full size-full wp-image-2429" alt="" srcset="
                          images/about-us.webp         410w,
                          images/about-us-215x300.webp 215w
                        " sizes="(max-width: 410px) 100vw, 410px" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="Mayank-element Mayank-element-0e769cd e-flex e-con-boxed e-con e-parent" data-id="0e769cd"
		data-element_type="container"
		data-settings='{"background_background":"classic","wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-ffe6ebf e-con-full e-flex e-con e-child" data-id="ffe6ebf"
				data-element_type="container"
				data-settings='{"background_background":"classic","wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-68d4437 Mayank-widget Mayank-widget-arolax--service-slider"
					data-id="68d4437" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="arolax--service-slider.default">
					<div class="Mayank-widget-container">
						<div class="axs_slider_wrapper"
							data-settings='{"loop":true,"speed":500,"allowTouchMove":"true","slidesPerView":"auto","spaceBetween":20,"autoplay":{"delay":3000,"disableOnInteraction":"true"},"pagination":{"el":".Mayank-element-68d4437 .swiper-pagination","type":"fraction"},"breakpoints":{"767":{"slidesPerView":"auto"},"880":{"slidesPerView":"auto"},"1024":{"slidesPerView":"auto"},"1200":{"slidesPerView":"auto"},"1366":{"slidesPerView":"auto"},"2400":{"slidesPerView":"auto"}}}'>
							<div class="arolax_service_slider swiper" style="position: static">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="slide">
											<div class="content">
												<div class="sec-title-wrap">
													<div class="sec-title">02 - Expertise</div>
												</div>
												<div class="content-wrap">
													<div class="ts-pagination">
														<div class="swiper-pagination"></div>
													</div>
													<div class="title">Data Analysis</div>
													<div class="text">
														I analyze datasets to extract insights, trends, and patterns using Python, pandas, and visualization tools.

													</div>
													<div class="wc-btn-wrapper style-1">
														<a href=""
															target="_blank" rel="nofollow" class="wc-btn-group">
															<span class="wc-btn-play">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-arrow-right"
																	viewBox="0 0 448 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																	</path>
																</svg>
															</span>
															<span class="wc-btn-primary">
																More details
															</span>
															<span class="wc-btn-play">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-arrow-right"
																	viewBox="0 0 448 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																	</path>
																</svg>
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="image">
												<img decoding="async"
													src="images/service-slide-2.webp"
													alt="Image" />
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="slide">
											<div class="content">
												<div class="sec-title-wrap">
													<div class="sec-title">02 - Expertise</div>
												</div>
												<div class="content-wrap">
													<div class="ts-pagination">
														<div class="swiper-pagination"></div>
													</div>
													<div class="title">Machine Learning</div>
													<div class="text">
														I build machine learning models to solve problems and make predictions using scikit-learn, TensorFlow, and PyTorch.
													</div>
													<div class="wc-btn-wrapper style-1">
														<a href=""
															target="_blank" rel="nofollow" class="wc-btn-group">
															<span class="wc-btn-play">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-arrow-right"
																	viewBox="0 0 448 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																	</path>
																</svg>
															</span>
															<span class="wc-btn-primary">
																More details
															</span>
															<span class="wc-btn-play">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-arrow-right"
																	viewBox="0 0 448 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																	</path>
																</svg>
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="image">
												<img decoding="async"
													src="images/service-slideA.webp"
													alt="Image" />
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="slide">
											<div class="content">
												<div class="sec-title-wrap">
													<div class="sec-title">02 - Expertise</div>
												</div>
												<div class="content-wrap">
													<div class="ts-pagination">
														<div class="swiper-pagination"></div>
													</div>
													<div class="title">AI Solutions</div>
													<div class="text">
														I create AI-powered solutions to automate processes, analyze patterns, and assist in data-driven decision making.
													</div>
													<div class="wc-btn-wrapper style-1">
														<a href=""
															target="_blank" rel="nofollow" class="wc-btn-group">
															<span class="wc-btn-play">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-arrow-right"
																	viewBox="0 0 448 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																	</path>
																</svg>
															</span>
															<span class="wc-btn-primary">
																More details
															</span>
															<span class="wc-btn-play">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-arrow-right"
																	viewBox="0 0 448 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
																	</path>
																</svg>
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="image">
												<img decoding="async"
													src="images/service-slide-2.webp"
													alt="Image" />
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- navigation and pagination -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="Mayank-element Mayank-element-7bc9bc1 e-flex e-con-boxed e-con e-parent" data-id="7bc9bc1"
		data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-d43cc23 Mayank-widget__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
				data-id="d43cc23" data-element_type="widget"
				data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
				data-widget_type="wcf--title.default">
				<div class="Mayank-widget-container">
					<h2 class="wcf--title">
						My Academic & Professional Achievements
					</h2>
				</div>
			</div>
			<div class="Mayank-element Mayank-element-a1c9baf e-con-full e-flex e-con e-child" data-id="a1c9baf"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="aae-disable-transition Mayank-element Mayank-element-b3bb148 e-con-full e-flex e-con e-child"
					data-id="b3bb148" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-1018ebd Mayank-widget__width-initial wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
						data-id="1018ebd" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
						data-widget_type="wcf--counter.default">
						<div class="Mayank-widget-container">
							<div class="wcf--counter">
								<div class="count">
									<span class="wcf--counter-number-prefix"></span>
									<span class="wcf--counter-number" data-duration="2000" data-to-value="2"
										data-from-value="0" data-delimiter=",">0</span>
									<span class="wcf--counter-number-suffix"></span>
								</div>

								<div class="title">Research Papers</div>
							</div>
						</div>
					</div>
				</div>
				<div class="aae-disable-transition Mayank-element Mayank-element-9d75723 e-con-full e-flex e-con e-child"
					data-id="9d75723" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.25,"fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-6a1fa65 Mayank-widget__width-initial wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
						data-id="6a1fa65" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
						data-widget_type="wcf--counter.default">
						<div class="Mayank-widget-container">
							<div class="wcf--counter">
								<div class="count">
									<span class="wcf--counter-number-prefix"></span>
									<span class="wcf--counter-number" data-duration="2000" data-to-value="25"
										data-from-value="0" data-delimiter=",">0</span>
									<span class="wcf--counter-number-suffix">+</span>
								</div>

								<div class="title">Projects Completed</div>
							</div>
						</div>
					</div>
				</div>
				<div class="aae-disable-transition Mayank-element Mayank-element-c0ef3cf e-con-full e-flex e-con e-child"
					data-id="c0ef3cf" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.35,"data-duration":0.75,"aae_method":"from","aae_trigger":"on_scroll","fade-from":"bottom","ease":"power2.out","fade-offset":50,"wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-f54721c Mayank-widget__width-initial wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
						data-id="f54721c" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
						data-widget_type="wcf--counter.default">
						<div class="Mayank-widget-container">
							<div class="wcf--counter">
								<div class="count">
									<span class="wcf--counter-number-prefix"></span>
									<span class="wcf--counter-number" data-duration="2000" data-to-value="8"
										data-from-value="0" data-delimiter=",">0</span>
									<span class="wcf--counter-number-suffix">+</span>
								</div>

								<div class="title">Professional Certificates</div>
							</div>
						</div>
					</div>
				</div>
				<div class="aae-disable-transition Mayank-element Mayank-element-48e325e e-con-full e-flex e-con e-child"
					data-id="48e325e" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.45,"fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-412ddc8 Mayank-widget__width-initial wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
						data-id="412ddc8" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
						data-widget_type="wcf--counter.default">
						<div class="Mayank-widget-container">
							<div class="wcf--counter">
								<div class="count">
									<span class="wcf--counter-number-prefix"></span>
									<span class="wcf--counter-number" data-duration="2000" data-to-value="50"
										data-from-value="0" data-delimiter=",">0</span>
									<span class="wcf--counter-number-suffix">+</span>
								</div>

								<div class="title">GitHub Contributions</div>
							</div>
						</div>
					</div>
				</div>
				<div class="aae-disable-transition Mayank-element Mayank-element-bd84d58 e-con-full e-flex e-con e-child"
					data-id="bd84d58" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.55,"fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-765fc5e Mayank-widget__width-initial wcf-position-column Mayank-widget Mayank-widget-wcf--counter"
						data-id="765fc5e" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
						data-widget_type="wcf--counter.default">
						<div class="Mayank-widget-container">
							<div class="wcf--counter">
								<div class="count">
									<span class="wcf--counter-number-prefix"></span>
									<span class="wcf--counter-number" data-duration="2000" data-to-value="2"
										data-from-value="0" data-delimiter=",">0</span>
									<span class="wcf--counter-number-suffix">+</span>
								</div>

								<div class="title">Hackathons Participated</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="Mayank-element Mayank-element-7e9c2ff e-flex e-con-boxed e-con e-parent" data-id="7e9c2ff"
		data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner"  style="
    	padding-block-end: 0;">
			<div class="aae-disable-transition Mayank-element Mayank-element-491f69b e-con-full e-flex e-con e-child"
				data-id="491f69b" data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","background_background":"classic","wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-26cc115 e-con-full e-flex e-con e-child"
					data-id="26cc115" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-13ec2af Mayank-widget-mobile_extra__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
						data-id="13ec2af" data-element_type="widget"
						data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
						data-widget_type="wcf--title.default">
						<div class="Mayank-widget-container">
							<h2 class="wcf--title">
								<span class="highlight">// </span> &nbsp; 04 - Skills
							</h2>
						</div>
					</div>
					<div class="Mayank-element Mayank-element-7a1d6a9 Mayank-widget__width-initial Mayank-widget-mobile_extra__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
						data-id="7a1d6a9" data-element_type="widget"
						data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
						data-widget_type="wcf--title.default">
						<div class="Mayank-widget-container">
							<h2 class="wcf--title">My Learning Progress</h2>
						</div>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-06f9f9a e-con-full e-flex e-con e-child"
					data-id="06f9f9a" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-e766e49 Mayank-widget Mayank-widget-image"
						data-id="e766e49" data-element_type="widget"
						data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf-image-animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
						data-widget_type="image.default">
						<div class="Mayank-widget-container">
							<img loading="lazy" decoding="async" width="320" height="320"
								src="images/success.webp"
								class="attachment-full size-full wp-image-2353" alt="Skills Illustration" />
						</div>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-f47cb22 e-con-full e-flex e-con e-child"
					data-id="f47cb22" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="Mayank-element Mayank-element-bd63495 Mayank-icon-list--layout-traditional Mayank-list-item-link-full_width Mayank-widget Mayank-widget-icon-list"
						data-id="bd63495" data-element_type="widget"
						data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
						data-widget_type="icon-list.default">
						<div class="Mayank-widget-container">
							<ul class="Mayank-icon-list-items">
								<li class="Mayank-icon-list-item">
									<span class="Mayank-icon-list-text">Data Science - 90% proficiency</span>
								</li>
								<li class="Mayank-icon-list-item">
									<span class="Mayank-icon-list-text">Machine Learning - 85% proficiency</span>
								</li>
								<li class="Mayank-icon-list-item">
									<span class="Mayank-icon-list-text">AI & Deep Learning - 80% proficiency</span>
								</li>
								<li class="Mayank-icon-list-item">
									<span class="Mayank-icon-list-text">Python & Development - 95% proficiency</span>
								</li>
								<li class="Mayank-icon-list-item">
									<span class="Mayank-icon-list-text">Other Certifications & Skills - 70% progress</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="Mayank-element Mayank-element-200bb28 e-flex e-con-boxed e-con 	e-parent" data-id="200bb28"
		data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-efa1480 e-con-full e-flex e-con e-child" data-id="efa1480"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-4044931 Mayank-widget-mobile_extra__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="4044931" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">
							<span class="highlight">// </span> &nbsp; 05 - Skill Mastery Process
						</h2>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-885c0c4 Mayank-widget__width-initial Mayank-widget-mobile_extra__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="885c0c4" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">
							Steps I follow to master new skills
						</h2>
					</div>
				</div>
			</div>
			<div class="Mayank-element Mayank-element-519b89a e-con-full e-flex e-con e-child" data-id="519b89a"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-8bb130b e-con-full e-flex e-con e-child"
					data-id="8bb130b" data-element_type="container"
					data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
					<div class="aae-disable-transition Mayank-element Mayank-element-f3fe767 e-con-full e-flex e-con e-child"
						data-id="f3fe767" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-0e68e57 Mayank-absolute e-transform Mayank-widget Mayank-widget-image"
							data-id="0e68e57" data-element_type="widget"
							data-settings='{"_position":"absolute","_transform_rotateZ_effect_mobile":{"unit":"deg","size":90,"sizes":[]},"wcf-image-animation":"none","wcf-animation":"none","_transform_rotateZ_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateZ_effect_widescreen":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_laptop":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_tablet_extra":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile_extra":{"unit":"deg","size":"","sizes":[]}}'
							data-widget_type="image.default">
							<div class="Mayank-widget-container">
								<img loading="lazy" decoding="async" width="22" height="45"
									src="images/hununulu.webp"
									class="attachment-full size-full wp-image-3314" alt="" />
							</div>
						</div>
						<div class="Mayank-element Mayank-element-944aa29 Mayank-position-top Mayank-widget Mayank-widget-image-box"
							data-id="944aa29" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="image-box.default">
							<div class="Mayank-widget-container">
								<div class="Mayank-image-box-wrapper">
									<figure class="Mayank-image-box-img">
										<img loading="lazy" decoding="async" width="69" height="46"
											src="images/step_01.png"
											class="attachment-full size-full wp-image-2303" alt="" />
									</figure>
									<div class="Mayank-image-box-content">
										<h3 class="Mayank-image-box-title">
											Learn Theory
										</h3>
										<p class="Mayank-image-box-description">
											Study the concepts through courses, tutorials, and books.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="aae-disable-transition Mayank-element Mayank-element-bbee9f8 e-con-full e-flex e-con e-child"
						data-id="bbee9f8" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.25,"fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-3609f49 Mayank-position-top Mayank-widget Mayank-widget-image-box"
							data-id="3609f49" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="image-box.default">
							<div class="Mayank-widget-container">
								<div class="Mayank-image-box-wrapper">
									<figure class="Mayank-image-box-img">
										<img loading="lazy" decoding="async" width="76" height="46"
											src="images/step_02.png"
											class="attachment-full size-full wp-image-2325" alt="" />
									</figure>
									<div class="Mayank-image-box-content">
										<h3 class="Mayank-image-box-title">
											Hands-On Practice
										</h3>
										<p class="Mayank-image-box-description">
											Apply concepts by doing mini-projects and coding exercises.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="Mayank-element Mayank-element-b584e03 Mayank-absolute Mayank-widget Mayank-widget-image"
							data-id="b584e03" data-element_type="widget"
							data-settings='{"_position":"absolute","wcf-image-animation":"none","wcf-animation":"none"}'
							data-widget_type="image.default">
							<div class="Mayank-widget-container">
								<img loading="lazy" decoding="async" width="46" height="25"
									src="images/hununulu-2.webp"
									class="attachment-full size-full wp-image-3324" alt="" />
							</div>
						</div>
					</div>
					<div class="aae-disable-transition Mayank-element Mayank-element-da20071 e-con-full e-flex e-con e-child"
						data-id="da20071" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-8029c35 Mayank-position-top Mayank-widget Mayank-widget-image-box"
							data-id="8029c35" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="image-box.default">
							<div class="Mayank-widget-container">
								<div class="Mayank-image-box-wrapper">
									<figure class="Mayank-image-box-img">
										<img loading="lazy" decoding="async" width="74" height="46"
											src="images/step_03.png"
											class="attachment-full size-full wp-image-2326" alt="" />
									</figure>
									<div class="Mayank-image-box-content">
										<h3 class="Mayank-image-box-title">
											Real-World Application
										</h3>
										<p class="Mayank-image-box-description">
											Implement the skills in real projects, internships, or hackathons.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="Mayank-element Mayank-element-d6f7ff7 Mayank-absolute e-transform Mayank-widget Mayank-widget-image"
							data-id="d6f7ff7" data-element_type="widget"
							data-settings='{"_position":"absolute","_transform_rotateZ_effect_mobile":{"unit":"deg","size":90,"sizes":[]},"wcf-image-animation":"none","wcf-animation":"none","_transform_rotateZ_effect":{"unit":"px","size":"","sizes":[]},"_transform_rotateZ_effect_widescreen":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_laptop":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_tablet_extra":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_tablet":{"unit":"deg","size":"","sizes":[]},"_transform_rotateZ_effect_mobile_extra":{"unit":"deg","size":"","sizes":[]}}'
							data-widget_type="image.default">
							<div class="Mayank-widget-container">
								<img loading="lazy" decoding="async" width="22" height="45"
									src="images/hununulu.webp"
									class="attachment-full size-full wp-image-3314" alt="" />
							</div>
						</div>
					</div>
					<div class="aae-disable-transition Mayank-element Mayank-element-2de7e35 e-con-full e-flex e-con e-child"
						data-id="2de7e35" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"fade","delay":0.25,"fade-from":"left","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","ease":"power2.out","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-9d47a4b Mayank-position-top Mayank-widget Mayank-widget-image-box"
							data-id="9d47a4b" data-element_type="widget" data-settings='{"wcf-animation":"none"}'
							data-widget_type="image-box.default">
							<div class="Mayank-widget-container">
								<div class="Mayank-image-box-wrapper">
									<figure class="Mayank-image-box-img">
										<img loading="lazy" decoding="async" width="77" height="46"
											src="images/step_04.png"
											class="attachment-full size-full wp-image-2327" alt="" />
									</figure>
									<div class="Mayank-image-box-content">
										<h3 class="Mayank-image-box-title">
											Certification & Documentation
										</h3>
										<p class="Mayank-image-box-description">
											Earn certificates, document your learning, and showcase achievements on GitHub.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="Mayank-element Mayank-element-a07e7e1 e-flex e-con-boxed e-con e-parent" data-id="a07e7e1"
		data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-7327295 e-flex e-con-boxed e-con e-child" data-id="7327295"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","background_background":"classic","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="e-con-inner">
					<div class="Mayank-element Mayank-element-62889ad e-con-full e-flex e-con e-child"
						data-id="62889ad" data-element_type="container"
						data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
						<div class="Mayank-element Mayank-element-f9f6b7d Mayank-widget__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
							data-id="f9f6b7d" data-element_type="widget"
							data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
							data-widget_type="wcf--title.default">
							<div class="Mayank-widget-container">
								<h2 class="wcf--title">Frequently Asked Questions</h2>
							</div>
						</div>
						<div class="Mayank-element Mayank-element-5a94978 Mayank-widget Mayank-widget-accordion"
							data-id="5a94978" data-element_type="widget"
							data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
							data-widget_type="accordion.skin-wcf-accordion">
							<div class="Mayank-widget-container">
								<style>
									.wcf--inner--accrodion--body {
										gap: 60px;
										display: -webkit-box;
										display: -ms-flexbox;
										display: flex;
										padding: 0;
										padding-top: 10px;
										padding-bottom: 25px;
									}

									.Mayank-accordion-item {
										overflow: hidden;
										position: relative;
									}
								</style>
								<div class="Mayank-accordion" data-active="yes">
									<div class="Mayank-accordion-item">
										<div id="Mayank-tab-title-9491" class="Mayank-tab-title" data-active="yes"
											data-indexkey="5a94978_0">
											<span class="Mayank-accordion-icon Mayank-accordion-icon-right"
												aria-hidden="true">
												<span class="Mayank-accordion-icon-closed"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13V16C13 16.2652 12.8946 16.5196 12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071C11.1054 16.5196 11 16.2652 11 16V13H8C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
												<span class="Mayank-accordion-icon-opened"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13C12.5 13 13 13 12.5 13C12 13 12.2652 13 12 13C11.7348 13 12 13 11.5 13C11 13 11.5 13 11 13L8 13C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11C11.5 11 11 11 11.5 11C12 11 11.5 11 12 11C12.2652 11 12 11 12.5 11C13 11 12.5 11 13 11L16 11C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
											</span>
											<div class="Mayank-accordion-title" tabindex="0">
												<span class="Mayank-accordion-title-icon"></span>
												Who am I and what is my background?
											</div>
										</div>
										<div id="Mayank-tab-content-9491"
											class="Mayank-tab-content Mayank-clearfix" data-active="yes"
											data-indexkey="5a94978_0">
											<div class="wcf--inner--accrodion--body">
												<div class="wcf--content">
													<p>
														I am Mayank Singh, an engineering student passionate about data science, AI, and ML. I have a software development background and enjoy working on real-world projects that combine coding, analytics, and AI.
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="Mayank-accordion-item">
										<div id="Mayank-tab-title-9492" class="Mayank-tab-title" data-active=""
											data-indexkey="5a94978_1">
											<span class="Mayank-accordion-icon Mayank-accordion-icon-right"
												aria-hidden="true">
												<span class="Mayank-accordion-icon-closed"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13V16C13 16.2652 12.8946 16.5196 12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071C11.1054 16.5196 11 16.2652 11 16V13H8C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
												<span class="Mayank-accordion-icon-opened"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13C12.5 13 13 13 12.5 13C12 13 12.2652 13 12 13C11.7348 13 12 13 11.5 13C11 13 11.5 13 11 13L8 13C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11C11.5 11 11 11 11.5 11C12 11 11.5 11 12 11C12.2652 11 12 11 12.5 11C13 11 12.5 11 13 11L16 11C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
											</span>
											<div class="Mayank-accordion-title" tabindex="0">
												<span class="Mayank-accordion-title-icon"></span>
												Why did I choose to pursue Data Science and AI?
											</div>
										</div>
										<div id="Mayank-tab-content-9492"
											class="Mayank-tab-content Mayank-clearfix" data-active=""
											data-indexkey="5a94978_1">
											<div class="wcf--inner--accrodion--body">
												<div class="wcf--content">
													<p>
														I first became interested in data and artificial intelligence during my higher secondary school. Learning about how data drives decisions and how AI can solve complex problems sparked my curiosity. Since then, I’ve been eager to explore these fields, develop my skills, and contribute to building innovative technologies in data science and AI.
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="Mayank-accordion-item">
										<div id="Mayank-tab-title-9493" class="Mayank-tab-title" data-active=""
											data-indexkey="5a94978_2">
											<span class="Mayank-accordion-icon Mayank-accordion-icon-right"
												aria-hidden="true">
												<span class="Mayank-accordion-icon-closed"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13V16C13 16.2652 12.8946 16.5196 12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071C11.1054 16.5196 11 16.2652 11 16V13H8C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
												<span class="Mayank-accordion-icon-opened"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13C12.5 13 13 13 12.5 13C12 13 12.2652 13 12 13C11.7348 13 12 13 11.5 13C11 13 11.5 13 11 13L8 13C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11C11.5 11 11 11 11.5 11C12 11 11.5 11 12 11C12.2652 11 12 11 12.5 11C13 11 12.5 11 13 11L16 11C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
											</span>
											<div class="Mayank-accordion-title" tabindex="0">
												<span class="Mayank-accordion-title-icon"></span>
												What technical skills do I have?
											</div>
										</div>
										<div id="Mayank-tab-content-9493"
											class="Mayank-tab-content Mayank-clearfix" data-active=""
											data-indexkey="5a94978_2">
											<div class="wcf--inner--accrodion--body">
												<div class="wcf--content">
													<p> I have a strong and comprehensive set of technical skills spanning Data Science, Machine Learning, Deep Learning, Artificial Intelligence, Programming, and related tools.</p><br>
												<table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
													<tr style="background-color: #f2f2f2;">
														<th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Category</th>
														<th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Skills & Tools</th>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Data Science</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">Python (NumPy, Pandas, Matplotlib, Seaborn), R, MATLAB</td>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Machine Learning</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">scikit-learn, XGBoost, LightGBM, CatBoost</td>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Deep Learning</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">TensorFlow, Keras, PyTorch, OpenCV</td>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Programming & Scripting</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">Python, R, JavaScript</td>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Version Control</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">Git, GitHub</td>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Data Visualization & Analysis</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">Matplotlib, Seaborn, Plotly, Tableau (optional)</td>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Databases</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">SQL, MongoDB</td>
													</tr>
													
													<tr>
														<td style="border: 1px solid #ddd; padding: 8px;"><strong>Other Tools & Platforms</strong></td>
														<td style="border: 1px solid #ddd; padding: 8px;">Jupyter Notebook, VS Code, Anaconda, Google Colab</td>
													</tr>
													</table>

												</div>
											</div>
										</div>
									</div>
									<div class="Mayank-accordion-item">
										<div id="Mayank-tab-title-9494" class="Mayank-tab-title" data-active=""
											data-indexkey="5a94978_3">
											<span class="Mayank-accordion-icon Mayank-accordion-icon-right"
												aria-hidden="true">
												<span class="Mayank-accordion-icon-closed"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13V16C13 16.2652 12.8946 16.5196 12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071C11.1054 16.5196 11 16.2652 11 16V13H8C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
												<span class="Mayank-accordion-icon-opened"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13C12.5 13 13 13 12.5 13C12 13 12.2652 13 12 13C11.7348 13 12 13 11.5 13C11 13 11.5 13 11 13L8 13C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11C11.5 11 11 11 11.5 11C12 11 11.5 11 12 11C12.2652 11 12 11 12.5 11C13 11 12.5 11 13 11L16 11C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
											</span>
											<div class="Mayank-accordion-title" tabindex="0">
												<span class="Mayank-accordion-title-icon"></span>
												What are your strengths in a professional setting?
											</div>
										</div>
										<div id="Mayank-tab-content-9494"
											class="Mayank-tab-content Mayank-clearfix" data-active=""
											data-indexkey="5a94978_3">
											<div class="wcf--inner--accrodion--body">
												<div class="wcf--content">
												
													<p>
													I am highly <strong>disciplined</strong> and have a strong <strong>work ethic</strong>, always committed to delivering <strong>high-quality results</strong>. I pay great <strong>attention to detail</strong> and ensure <strong>accuracy</strong> in all tasks I undertake. I am <strong>proactive</strong> and take <strong>initiative</strong> to solve problems efficiently, anticipating potential challenges before they arise. I have excellent <strong>organizational</strong> and <strong>time management skills</strong>, which help me meet <strong>deadlines</strong> consistently. I work effectively both <strong>independently</strong> and <strong>collaboratively</strong>, adapting to team dynamics with strong <strong>communication</strong> and <strong>interpersonal skills</strong>. <strong>Integrity</strong>, <strong>reliability</strong>, and a <strong>positive attitude</strong> are central to my professional approach, and I strive to maintain <strong>ethical standards</strong> in every project I contribute to.
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="Mayank-accordion-item">
										<div id="Mayank-tab-title-9495" class="Mayank-tab-title" data-active=""
											data-indexkey="5a94978_4">
											<span class="Mayank-accordion-icon Mayank-accordion-icon-right"
												aria-hidden="true">
												<span class="Mayank-accordion-icon-closed"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13V16C13 16.2652 12.8946 16.5196 12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071C11.1054 16.5196 11 16.2652 11 16V13H8C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11V8C11 7.73478 11.1054 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7C12.2652 7 12.5196 7.10536 12.7071 7.29289C12.8946 7.48043 13 7.73478 13 8V11H16C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
												<span class="Mayank-accordion-icon-opened"><svg
														xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24">
														<path
															d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C23.9966 8.81846 22.7312 5.76821 20.4815 3.51852C18.2318 1.26883 15.1815 0.00344108 12 0ZM12 22C10.0222 22 8.08879 21.4135 6.4443 20.3147C4.79981 19.2159 3.51809 17.6541 2.76121 15.8268C2.00433 13.9996 1.8063 11.9889 2.19215 10.0491C2.578 8.10929 3.53041 6.32746 4.92894 4.92893C6.32746 3.53041 8.10929 2.578 10.0491 2.19215C11.9889 1.80629 13.9996 2.00433 15.8268 2.7612C17.6541 3.51808 19.2159 4.79981 20.3147 6.4443C21.4135 8.08879 22 10.0222 22 12C21.9971 14.6513 20.9426 17.1931 19.0679 19.0678C17.1931 20.9426 14.6513 21.9971 12 22ZM17 12C17 12.2652 16.8946 12.5196 16.7071 12.7071C16.5196 12.8946 16.2652 13 16 13H13C12.5 13 13 13 12.5 13C12 13 12.2652 13 12 13C11.7348 13 12 13 11.5 13C11 13 11.5 13 11 13L8 13C7.73479 13 7.48043 12.8946 7.2929 12.7071C7.10536 12.5196 7 12.2652 7 12C7 11.7348 7.10536 11.4804 7.2929 11.2929C7.48043 11.1054 7.73479 11 8 11H11C11.5 11 11 11 11.5 11C12 11 11.5 11 12 11C12.2652 11 12 11 12.5 11C13 11 12.5 11 13 11L16 11C16.2652 11 16.5196 11.1054 16.7071 11.2929C16.8946 11.4804 17 11.7348 17 12Z">
														</path>
													</svg></span>
											</span>
											<div class="Mayank-accordion-title" tabindex="0">
												<span class="Mayank-accordion-title-icon"></span>
												How do I handle challenges?
											</div>
										</div>
										<div id="Mayank-tab-content-9495"
											class="Mayank-tab-content Mayank-clearfix" data-active=""
											data-indexkey="5a94978_4">
											<div class="wcf--inner--accrodion--body">
												<div class="wcf--content">
													<p>
														I approach challenges with a structured and thoughtful mindset. First, I carefully analyze the problem to understand its root causes and potential impacts. Then, I research and explore possible solutions, evaluating the pros and cons of each approach. I break the problem down into manageable steps and prioritize tasks based on urgency and importance. I implement solutions iteratively, testing and refining them as needed, learning from any mistakes along the way. Throughout the process, I stay resilient, adaptable, and focused, ensuring that challenges are not just obstacles but opportunities to grow and improve my skills.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="Mayank-element Mayank-element-41f6d2a e-flex e-con-boxed e-con e-parent" data-id="41f6d2a"
		data-element_type="container"
		data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
		<div class="e-con-inner">
			<div class="Mayank-element Mayank-element-0113ca6 e-con-full e-flex e-con e-child" data-id="0113ca6"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-d6e55ed Mayank-widget-mobile_extra__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="d6e55ed" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">
							<span class="highlight">// </span> &nbsp; 07 - My Projects
						</h2>
					</div>
				</div>
				<div class="Mayank-element Mayank-element-ec0abf7 Mayank-widget__width-initial Mayank-widget-mobile_extra__width-initial wcf-t-animation-none Mayank-widget Mayank-widget-wcf--title"
					data-id="ec0abf7" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"wcf_text_animation":"none","aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--title.default">
					<div class="Mayank-widget-container">
						<h2 class="wcf--title">Portfolio Showcase</h2>
					</div>
				</div>
			</div>
			<div class="Mayank-element Mayank-element-8ce0af9 e-con-full e-flex e-con e-child" data-id="8ce0af9"
				data-element_type="container"
				data-settings='{"wcf_enable_cursor_hover_effect_text":"View","wcf-animation":"none","wcf_enable_horizontal_scroll":"no"}'>
				<div class="Mayank-element Mayank-element-0ea148d wcf--image-effect-zoom-in Mayank-widget Mayank-widget-wcf--posts"
					data-id="0ea148d" data-element_type="widget"
					data-settings='{"wcf-animation":"fade","data-duration":0.75,"fade-offset":40,"aae_method":"from","aae_trigger":"on_scroll","delay":0.15,"fade-from":"bottom","ease":"power2.out"}'
					data-widget_type="wcf--posts.default">
					<div class="Mayank-widget-container">
						<div class="wcf__posts style-1">
							<div class="wcf-posts">
								<article
									class="wcf-post post-2202 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-business tag-design tag-develop tag-software">
									<div class="thumb">
										<a href="how-to-create-your-purpose-filled-career-comfortable/"
											aria-label="How to create your purpose-filled career comfortable">
											<img loading="lazy" decoding="async" width="300" height="208"
												src="images/blog-01-300x208.webp"
												class="attachment-medium size-medium wp-image-2205" alt="blog-01"
												srcset="
                                  images/blog-01-300x208.webp 300w,
                                  images/blog-01.webp         390w
                                " sizes="(max-width: 300px) 100vw, 300px" />
										</a>
									</div>

									<div class="content">
										<ul class="wcf-taxonomy">
											<li>
												<a>Machine Learning</a>
											</li>
										</ul>
										<h3 class="title">
											<a href="">
												<span class="highlight"></span> Machine Learning Model for Predictive Analytics
											</a>
										</h3>
									</div>
								</article>
								<article
									class="wcf-post post-2079 post type-post status-publish format-standard has-post-thumbnail hentry category-business">
									<div class="thumb">
										<a href="how-to-create-your-purpose-filled-career-comfortable-clothes-3/"
											aria-label="How to create your purpose-filled career comfortable clothes">
											<img loading="lazy" decoding="async" width="300" height="208"
												src="images/blog-02-300x208.webp"
												class="attachment-medium size-medium wp-image-2207" alt="" srcset="
                                  images/blog-02-300x208.webp 300w,
                                  images/blog-02.webp         390w
                                " sizes="(max-width: 300px) 100vw, 300px" />
										</a>
									</div>

									<div class="content">
										<ul class="wcf-taxonomy">
											<li>
												<a
													href="">Data Analysis</a>
											</li>
										</ul>
										<h3 class="title">
											<a
												href="#">
												<span class="highlight"></span> Data Analysis on Sales Dataset
											</a>
										</h3>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('footer_scripts')
<style>
	.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
		--display: flex;
		--flex-direction: row;
		--container-widget-width: initial;
		--container-widget-height: 100%;
		--container-widget-flex-grow: 1;
		--container-widget-align-self: stretch;
		--flex-wrap-mobile: wrap;
		--gap: 0px 0px;
		--row-gap: 0px;
		--column-gap: 0px;
		--flex-wrap: nowrap;
		--margin-top: 0px;
		--margin-bottom: 0px;
		--margin-left: 0px;
		--margin-right: 0px;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 20px;
		--padding-right: 20px;
		--z-index: 1;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2.e-con {
		--align-self: center;
		--flex-grow: 0;
		--flex-shrink: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-cd84db8 {
		--display: flex;
		--gap: 20px 0px;
		--row-gap: 20px;
		--column-gap: 0px;
		border-style: solid;
		--border-style: solid;
		border-width: 0px 1px 0px 0px;
		--border-top-width: 0px;
		--border-right-width: 1px;
		--border-bottom-width: 0px;
		--border-left-width: 0px;
		border-color: #234151;
		--border-color: #234151;
		--border-radius: 20px 0px 0px 0px;
		--padding-top: 100px;
		--padding-bottom: 0px;
		--padding-left: 160px;
		--padding-right: 100px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-cd84db8:not(.Mayank-motion-effects-element-type-background),
	.Mayank-3084 .Mayank-element.Mayank-element-cd84db8>.Mayank-motion-effects-container>.Mayank-motion-effects-layer {
		background-color: #052343;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-bae13dc {
		width: 100%;
		max-width: 100%;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-bae13dc>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 0px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-bae13dc .wcf--title {
		color: #ffffff;
		font-family: "Tropline", Sans-serif;
		font-size: 45px;
		font-weight: 700;
		line-height: 45px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-bae13dc .wcf--title .highlight {
		color: #f00000;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-d531154 {
		width: var(--container-widget-width, 380px);
		max-width: 380px;
		--container-widget-width: 380px;
		--container-widget-flex-grow: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-d531154>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 0px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-d531154 .wcf--title {
		color: #9faeb6;
		font-family: "oak_suns", Sans-serif;
		font-size: 18px;
		font-weight: 400;
		line-height: 26px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-d531154 .wcf--title .highlight {
		color: #f00000;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-e673b88 {
		--display: flex;
		--gap: 10px 10px;
		--row-gap: 10px;
		--column-gap: 10px;
		border-style: none;
		--border-style: none;
		--border-radius: 0px 20px 0px 0px;
		--padding-top: 100px;
		--padding-bottom: 30px;
		--padding-left: 110px;
		--padding-right: 180px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-e673b88:not(.Mayank-motion-effects-element-type-background),
	.Mayank-3084 .Mayank-element.Mayank-element-e673b88>.Mayank-motion-effects-container>.Mayank-motion-effects-layer {
		background-color: #001f3f;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a:not(.wcf-btn-mask, .wcf-btn-ellipse),
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.wcf-btn-mask:after,
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.wcf-btn-ellipse:before {
		background-color: #001f3f;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821>.Mayank-widget-container {
		--e-transform-rotateZ: -90deg;
	}

	body:not(.rtl) .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
		left: -58px;
	}

	body.rtl .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
		right: -58px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 {
		top: 51.466%;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a {
		flex-direction: row;
		font-family: "oak_suns", Sans-serif;
		font-weight: 600;
		text-transform: uppercase;
		line-height: 1em;
		fill: #ffffff;
		color: #ffffff;
		padding: 10px 16px 10px 15px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.wcf-btn-underline:after {
		background-color: #ffffff;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.wcf-btn-mask:after {
		color: #ffffff;
		padding: 10px 16px 10px 15px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a,
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-parallal-border:before,
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-parallal-border:after,
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-rollover-cross:before,
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-rollover-cross:after {
		border-style: solid;
		border-width: 1px 1px 1px 1px;
		border-color: #234151;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a:not(.wcf-btn-ellipse, .wcf-btn-circle, .wcf-btn-oval) {
		border-radius: 30px 30px 30px 30px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-parallal-border:before,
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-parallal-border:after {
		border-radius: 30px 30px 30px 30px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-rollover-cross:before,
	.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.btn-rollover-cross:after {
		border-radius: 30px 30px 30px 30px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-7e963dd {
		--display: flex;
		--flex-direction: row;
		--container-widget-width: initial;
		--container-widget-height: 100%;
		--container-widget-flex-grow: 1;
		--container-widget-align-self: stretch;
		--flex-wrap-mobile: wrap;
		--gap: 0px 0px;
		--row-gap: 0px;
		--column-gap: 0px;
		--padding-top: 0px;
		--padding-bottom: 50px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-10eb311 {
		--display: flex;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-cda3074 {
		width: var(--container-widget-width, 200px);
		max-width: 200px;
		--container-widget-width: 200px;
		--container-widget-flex-grow: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-cda3074>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-cda3074 .wcf--title {
		color: #ffffff;
		font-family: "Tropline", Sans-serif;
		font-size: 24px;
		font-weight: 700;
		line-height: 18px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-cda3074 .wcf--title .highlight {
		color: #f00000;
	}

	.Mayank-widget-icon-list .Mayank-icon-list-item:not(:last-child):after {
		border-color: var(--e-global-color-text);
	}

	.Mayank-widget-icon-list .Mayank-icon-list-icon i {
		color: var(--e-global-color-primary);
	}

	.Mayank-widget-icon-list .Mayank-icon-list-icon svg {
		fill: var(--e-global-color-primary);
	}

	.Mayank-widget-icon-list .Mayank-icon-list-item>.Mayank-icon-list-text,
	.Mayank-widget-icon-list .Mayank-icon-list-item>a {
		font-family: var(--e-global-typography-text-font-family), Sans-serif;
		font-weight: var(--e-global-typography-text-font-weight);
	}

	.Mayank-widget-icon-list .Mayank-icon-list-text {
		color: var(--e-global-color-secondary);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 50px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:last-child) {
		padding-block-end: calc(3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:first-child) {
		margin-block-start: calc(3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item {
		margin-inline: calc(3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-items.Mayank-inline-items {
		margin-inline: calc(-3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item:after {
		inset-inline-end: calc(-3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-icon i {
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-icon svg {
		transition: fill 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 {
		--e-icon-list-icon-size: 14px;
		--icon-vertical-offset: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-item>.Mayank-icon-list-text,
	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-item>a {
		font-family: "oak_suns", Sans-serif;
		font-size: 16px;
		font-weight: 500;
		line-height: 26px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-text {
		color: #9faeb6;
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-item:hover .Mayank-icon-list-text {
		color: #ffffff;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-33257ac {
		--display: flex;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-295d410 {
		width: var(--container-widget-width, 200px);
		max-width: 200px;
		--container-widget-width: 200px;
		--container-widget-flex-grow: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-295d410>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-295d410 .wcf--title {
		color: #ffffff;
		font-family: "Tropline", Sans-serif;
		font-size: 24px;
		font-weight: 700;
		line-height: 18px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-295d410 .wcf--title .highlight {
		color: #f00000;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 50px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:last-child) {
		padding-block-end: calc(3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:first-child) {
		margin-block-start: calc(3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item {
		margin-inline: calc(3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-items.Mayank-inline-items {
		margin-inline: calc(-3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item:after {
		inset-inline-end: calc(-3px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-icon i {
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-icon svg {
		transition: fill 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 {
		--e-icon-list-icon-size: 14px;
		--icon-vertical-offset: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-item>.Mayank-icon-list-text,
	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-item>a {
		font-family: "oak_suns", Sans-serif;
		font-size: 16px;
		font-weight: 500;
		line-height: 26px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-text {
		color: #9faeb6;
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-item:hover .Mayank-icon-list-text {
		color: #ffffff;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
		--display: flex;
		--gap: 28px 28px;
		--row-gap: 28px;
		--column-gap: 28px;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-d79acd5 {
		--display: flex;
		--flex-direction: row;
		--container-widget-width: initial;
		--container-widget-height: 100%;
		--container-widget-flex-grow: 1;
		--container-widget-align-self: stretch;
		--flex-wrap-mobile: wrap;
		--gap: 0px 25px;
		--row-gap: 0px;
		--column-gap: 25px;
		border-style: none;
		--border-style: none;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-2aa0112 {
		--display: flex;
		--justify-content: center;
		--margin-top: 0px;
		--margin-bottom: 0px;
		--margin-left: 0px;
		--margin-right: 0px;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-a4f032b {
		width: var(--container-widget-width, 200px);
		max-width: 200px;
		--container-widget-width: 200px;
		--container-widget-flex-grow: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-a4f032b>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-a4f032b .wcf--title {
		color: #ffffff;
		font-family: "Tropline", Sans-serif;
		font-size: 24px;
		font-weight: 700;
		line-height: 24px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-a4f032b .wcf--title .highlight {
		color: #f00000;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-4aea838 {
		--display: flex;
		--justify-content: center;
		--gap: 0px 0px;
		--row-gap: 0px;
		--column-gap: 0px;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-widget-text-editor {
		font-family: var(--e-global-typography-text-font-family), Sans-serif;
		font-weight: var(--e-global-typography-text-font-weight);
		color: var(--e-global-color-text);
	}

	.Mayank-widget-text-editor.Mayank-drop-cap-view-stacked .Mayank-drop-cap {
		background-color: var(--e-global-color-primary);
	}

	.Mayank-widget-text-editor.Mayank-drop-cap-view-framed .Mayank-drop-cap,
	.Mayank-widget-text-editor.Mayank-drop-cap-view-default .Mayank-drop-cap {
		color: var(--e-global-color-primary);
		border-color: var(--e-global-color-primary);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-c17ce85>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 0px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-c17ce85 {
		font-family: "oak_suns", Sans-serif;
		font-size: 14px;
		font-weight: 400;
		color: #9faeb6;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input input {
		background-color: #0d2a49;
		color: #ffffff;
		font-family: "Kanit", Sans-serif;
		font-size: 14px;
		font-weight: 300;
		line-height: 18px;
		padding: 20px 20px 20px 20px;
		border-style: none;
		border-radius: 15px 0px 0px 15px !important;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mc-button {
		background-color: #0d2a49;
		color: #ffffff;
		fill: #ffffff;
		border-style: none;
		border-radius: 0px 15px 15px 0px;
		padding: 20px 15px 20px 4px;
		margin: 0px 0px 0px 0px;
		width: 15%;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 {
		width: var(--container-widget-width, 450px);
		max-width: 450px;
		--container-widget-width: 450px;
		--container-widget-flex-grow: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mailchimp-form {
		gap: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input-wrapper {
		flex: 0 0 85%;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input input::-webkit-input-placeholder {
		color: #9faeb6;
		font-size: 16px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input input::-moz-placeholder {
		color: #9faeb6;
		font-size: 16px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input input:-ms-input-placeholder {
		color: #9faeb6;
		font-size: 16px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input input:-moz-placeholder {
		color: #9faeb6;
		font-size: 16px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input .icon {
		color: #000000;
		fill: #000000;
		font-size: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mc-button i {
		font-size: 20px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mc-button svg {
		font-size: 20px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mc-button:hover,
	.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mc-button:focus {
		color: #c9f31d;
		fill: #c9f31d;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-71130b0 {
		--display: flex;
		--flex-direction: row;
		--container-widget-width: initial;
		--container-widget-height: 100%;
		--container-widget-flex-grow: 1;
		--container-widget-align-self: stretch;
		--flex-wrap-mobile: wrap;
		--padding-top: 0px;
		--padding-bottom: 80px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-9b0175b {
		--display: flex;
		--margin-top: 0px;
		--margin-bottom: 0px;
		--margin-left: 0px;
		--margin-right: 0px;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-fdaf062 {
		width: var(--container-widget-width, 200px);
		max-width: 200px;
		--container-widget-width: 200px;
		--container-widget-flex-grow: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-fdaf062>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-fdaf062 .wcf--title {
		color: #ffffff;
		font-family: "Tropline", Sans-serif;
		font-size: 24px;
		font-weight: 700;
		line-height: 18px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-fdaf062 .wcf--title .highlight {
		color: #f00000;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 3px 60px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:last-child) {
		padding-block-end: calc(7px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:first-child) {
		margin-block-start: calc(7px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item {
		margin-inline: calc(7px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-items.Mayank-inline-items {
		margin-inline: calc(-7px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item:after {
		inset-inline-end: calc(-7px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-icon i {
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-icon svg {
		transition: fill 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 {
		--e-icon-list-icon-size: 14px;
		--icon-vertical-offset: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-item>.Mayank-icon-list-text,
	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-item>a {
		font-family: "oak_suns", Sans-serif;
		font-size: 16px;
		font-weight: 500;
		text-decoration: underline;
		line-height: 1.4em;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-text {
		color: #9faeb6;
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-item:hover .Mayank-icon-list-text {
		color: #ffffff;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-7db7cbd {
		--display: flex;
		--gap: 0px 0px;
		--row-gap: 0px;
		--column-gap: 0px;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-ef6e09f {
		width: var(--container-widget-width, 200px);
		max-width: 200px;
		--container-widget-width: 200px;
		--container-widget-flex-grow: 0;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-ef6e09f>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 0px 25px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-ef6e09f .wcf--title {
		color: #ffffff;
		font-family: "Tropline", Sans-serif;
		font-size: 24px;
		font-weight: 700;
		line-height: 18px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-ef6e09f .wcf--title .highlight {
		color: #f00000;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 60px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:last-child) {
		padding-block-end: calc(0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:first-child) {
		margin-block-start: calc(0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item {
		margin-inline: calc(0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-items.Mayank-inline-items {
		margin-inline: calc(-0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item:after {
		inset-inline-end: calc(-0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-icon i {
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-icon svg {
		transition: fill 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 {
		--e-icon-list-icon-size: 14px;
		--icon-vertical-offset: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-item>.Mayank-icon-list-text,
	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-item>a {
		font-family: "oak_suns", Sans-serif;
		font-size: 16px;
		font-weight: 400;
		line-height: 1.4em;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-text {
		color: #9faeb6;
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-item:hover .Mayank-icon-list-text {
		color: #ffffff;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb>.Mayank-widget-container {
		margin: 0px 0px 0px 0px;
		padding: 0px 60px 0px 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:last-child) {
		padding-block-end: calc(0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-items:not(.Mayank-inline-items) .Mayank-icon-list-item:not(:first-child) {
		margin-block-start: calc(0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item {
		margin-inline: calc(0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-items.Mayank-inline-items {
		margin-inline: calc(-0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-items.Mayank-inline-items .Mayank-icon-list-item:after {
		inset-inline-end: calc(-0px / 2);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-icon i {
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-icon svg {
		transition: fill 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb {
		--e-icon-list-icon-size: 14px;
		--icon-vertical-offset: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-item>.Mayank-icon-list-text,
	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-item>a {
		font-family: "oak_suns", Sans-serif;
		font-size: 18px;
		font-weight: 600;
		line-height: 1.6em;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-text {
		color: #ffffff;
		transition: color 0.3s;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-item:hover .Mayank-icon-list-text {
		color: #ffffff;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-ef1aecb {
		--display: flex;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-widget-image .widget-image-caption {
		color: var(--e-global-color-text);
		font-family: var(--e-global-typography-text-font-family), Sans-serif;
		font-weight: var(--e-global-typography-text-font-weight);
	}

	.Mayank-3084 .Mayank-element.Mayank-element-5572260 {
		text-align: left;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-3b5f390 {
		--display: flex;
		--flex-direction: row;
		--container-widget-width: initial;
		--container-widget-height: 100%;
		--container-widget-flex-grow: 1;
		--container-widget-align-self: stretch;
		--flex-wrap-mobile: wrap;
		border-style: solid;
		--border-style: solid;
		border-width: 1px 0px 0px 0px;
		--border-top-width: 1px;
		--border-right-width: 0px;
		--border-bottom-width: 0px;
		--border-left-width: 0px;
		border-color: #234151;
		--border-color: #234151;
		--padding-top: 29px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-bba659a {
		--display: flex;
		--justify-content: center;
		--margin-top: 0px;
		--margin-bottom: 0px;
		--margin-left: 0px;
		--margin-right: 0px;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-970aca2 .wcf--social-icons ul {
		display: flex;
		flex-direction: row;
		gap: 22px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-970aca2 .wcf-social-icon {
		color: #9faeb6;
		fill: #9faeb6;
		--icon-size: 20px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-2d48fa0 {
		--display: flex;
		--padding-top: 0px;
		--padding-bottom: 0px;
		--padding-left: 0px;
		--padding-right: 0px;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-c006e6f {
		text-align: right;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-c006e6f .wcf--title {
		color: #9faeb6;
		font-family: "oak_suns", Sans-serif;
		font-size: 16px;
		font-weight: 500;
	}

	.Mayank-3084 .Mayank-element.Mayank-element-c006e6f .wcf--title .highlight {
		color: #ffffff;
	}

	@media (min-width: 768px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--width: 1880%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cd84db8 {
			--width: 37%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-e673b88 {
			--width: 63%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-10eb311 {
			--width: 30%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-33257ac {
			--width: 30%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
			--width: 40%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2aa0112 {
			--width: 55%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-4aea838 {
			--width: 60%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9b0175b {
			--width: 42%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7db7cbd {
			--width: 42%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-ef1aecb {
			--width: 60%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-bba659a {
			--width: 42%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2d48fa0 {
			--width: 60%;
		}
	}

	@media (max-width: 1366px) and (min-width: 768px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-10eb311 {
			--width: 28%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-33257ac {
			--width: 28%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
			--width: 44%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2aa0112 {
			--width: 45%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9b0175b {
			--width: 38%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7db7cbd {
			--width: 38%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-bba659a {
			--width: 45%;
		}
	}

	@media (max-width: 1200px) and (min-width: 768px) {
		.Mayank-3084 .Mayank-element.Mayank-element-d79acd5 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2aa0112 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-4aea838 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9b0175b {
			--width: 40%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7db7cbd {
			--width: 40%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-ef1aecb {
			--width: 30%;
		}
	}

	@media (max-width: 1024px) and (min-width: 768px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cd84db8 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-e673b88 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-10eb311 {
			--width: 28%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-33257ac {
			--width: 28%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
			--width: 44%;
		}
	}

	@media (max-width: 880px) and (min-width: 768px) {
		.Mayank-3084 .Mayank-element.Mayank-element-10eb311 {
			--width: 33%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-33257ac {
			--width: 30%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
			--width: 47%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2aa0112 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-4aea838 {
			--width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9b0175b {
			--width: 40%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7db7cbd {
			--width: 35%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-ef1aecb {
			--width: 25%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-bba659a {
			--width: 50%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2d48fa0 {
			--width: 50%;
		}
	}

	@media (max-width: 1366px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--margin-top: 0px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cd84db8 {
			--padding-top: 100px;
			--padding-bottom: 0px;
			--padding-left: 20px;
			--padding-right: 40px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-e673b88 {
			--padding-top: 100px;
			--padding-bottom: 20px;
			--padding-left: 40px;
			--padding-right: 20px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7e963dd {
			--padding-top: 0px;
			--padding-bottom: 40px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 {
			--container-widget-width: 400px;
			--container-widget-flex-grow: 0;
			width: var(--container-widget-width, 400px);
			max-width: 400px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-71130b0 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--padding-top: 0px;
			--padding-bottom: 40px;
			--padding-left: 0px;
			--padding-right: 0px;
		}
	}

	@media (max-width: 1200px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--margin-top: 0px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
			--gap: 15px 0px;
			--row-gap: 15px;
			--column-gap: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-d79acd5 {
			--gap: 15px 0px;
			--row-gap: 15px;
			--column-gap: 0px;
			--flex-wrap: wrap;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 {
			--container-widget-width: 350px;
			--container-widget-flex-grow: 0;
			width: var(--container-widget-width, 350px);
			max-width: 350px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input-wrapper {
			flex: 0 0 83%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mc-button {
			width: 17%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1>.Mayank-widget-container {
			padding: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-08f8d93>.Mayank-widget-container {
			padding: 0px 0px 0px 0px;
		}
	}

	@media (max-width: 1024px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--flex-wrap: wrap;
			--margin-top: 0px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
			--padding-top: 0px;
			--padding-bottom: 0px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cd84db8 {
			--padding-top: 80px;
			--padding-bottom: 80px;
			--padding-left: 30px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-bae13dc .wcf--title {
			font-size: 40px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-d531154 {
			width: var(--container-widget-width, 550px);
			max-width: 550px;
			--container-widget-width: 550px;
			--container-widget-flex-grow: 0;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-e673b88 {
			--border-radius: 0px 0px 20px 0px;
			--padding-top: 100px;
			--padding-bottom: 60px;
			--padding-left: 30px;
			--padding-right: 30px;
		}

		body:not(.rtl) .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			left: 88%;
		}

		body.rtl .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			right: 88%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			top: 65%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a {
			font-size: 14px;
			padding: 11px 11px 11px 11px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a i {
			font-size: 11px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a svg {
			font-size: 11px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-463f821 .wcf__btn a.wcf-btn-mask:after {
			padding: 11px 11px 11px 11px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7e963dd {
			--padding-top: 0px;
			--padding-bottom: 40px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-item>a {
			font-size: 18px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-item>a {
			font-size: 18px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-c17ce85 {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 {
			--container-widget-width: 400px;
			--container-widget-flex-grow: 0;
			width: var(--container-widget-width, 400px);
			max-width: 400px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 label {
			margin: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .input-wrapper {
			flex: 0 0 80%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17 .wcf-mc-button {
			width: 15%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-item>a {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-item>a {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-item>a {
			font-size: 16px;
		}
	}

	@media (max-width: 880px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--padding-top: 0px;
			--padding-bottom: 0px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cd84db8 {
			--flex-direction: row;
			--container-widget-width: initial;
			--container-widget-height: 100%;
			--container-widget-flex-grow: 1;
			--container-widget-align-self: stretch;
			--flex-wrap-mobile: wrap;
			--gap: 020px 40px;
			--row-gap: 020px;
			--column-gap: 40px;
			--flex-wrap: wrap;
			--border-radius: 20px 20px 0px 0px;
			--padding-top: 80px;
			--padding-bottom: 80px;
			--padding-left: 20px;
			--padding-right: 20px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-bae13dc {
			width: var(--container-widget-width, 275px);
			max-width: 275px;
			--container-widget-width: 275px;
			--container-widget-flex-grow: 0;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-d531154 {
			--container-widget-width: 350px;
			--container-widget-flex-grow: 0;
			width: var(--container-widget-width, 350px);
			max-width: 350px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-e673b88 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--border-radius: 0px 0px 0px 0px;
			--padding-top: 80px;
			--padding-bottom: 20px;
			--padding-left: 30px;
			--padding-right: 30px;
		}

		body:not(.rtl) .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			left: 86%;
		}

		body.rtl .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			right: 86%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			top: 70%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7e963dd {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--flex-wrap: nowrap;
			--padding-top: 0px;
			--padding-bottom: 40px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-10eb311 {
			--gap: 15px 15px;
			--row-gap: 15px;
			--column-gap: 15px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cda3074>.Mayank-widget-container {
			margin: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cda3074 .wcf--title {
			font-size: 26px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-9fa24c8 .Mayank-icon-list-item>a {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-33257ac {
			--gap: 15px 15px;
			--row-gap: 15px;
			--column-gap: 15px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-295d410>.Mayank-widget-container {
			margin: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-295d410 .wcf--title {
			font-size: 26px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-1104981 .Mayank-icon-list-item>a {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
			--gap: 15px 15px;
			--row-gap: 15px;
			--column-gap: 15px;
			--margin-top: 0px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-d79acd5 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--flex-wrap: wrap;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2aa0112 {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-a4f032b>.Mayank-widget-container {
			margin: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-a4f032b {
			--container-widget-width: 100%;
			--container-widget-flex-grow: 0;
			width: var(--container-widget-width, 100%);
			max-width: 100%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-a4f032b .wcf--title {
			font-size: 26px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-4aea838 {
			--margin-top: 10px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-c17ce85 {
			width: var(--container-widget-width, 350px);
			max-width: 350px;
			--container-widget-width: 350px;
			--container-widget-flex-grow: 0;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-c17ce85>.Mayank-widget-container {
			padding: 0px 0px 10px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-71130b0 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--flex-wrap: wrap;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9b0175b {
			--gap: 20px 10px;
			--row-gap: 20px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-fdaf062>.Mayank-widget-container {
			margin: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-fdaf062 .wcf--title {
			font-size: 26px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-6e51fe1 .Mayank-icon-list-item>a {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7db7cbd {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-ef6e09f>.Mayank-widget-container {
			margin: 0px 0px 0px 0px;
			padding: 0px 0px 10px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-ef6e09f .wcf--title {
			font-size: 26px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-08f8d93 .Mayank-icon-list-item>a {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb>.Mayank-widget-container {
			margin: -10px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-item>.Mayank-icon-list-text,
		.Mayank-3084 .Mayank-element.Mayank-element-be0b5eb .Mayank-icon-list-item>a {
			font-size: 16px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-ef1aecb {
			--margin-top: 10px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-3b5f390 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--flex-wrap: wrap;
			--padding-top: 20px;
			--padding-bottom: 0px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-bba659a {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2d48fa0 {
			--margin-top: 10px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-c006e6f {
			text-align: right;
		}
	}

	@media (max-width: 767px) {
		.Mayank-3084 .Mayank-element.Mayank-element-95cdfa2 {
			--margin-top: 0px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
			--padding-top: 0px;
			--padding-bottom: 0px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-cd84db8 {
			--padding-top: 60px;
			--padding-bottom: 60px;
			--padding-left: 15px;
			--padding-right: 15px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-bae13dc .wcf--title {
			font-size: 36px;
			line-height: 36px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-e673b88 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--flex-wrap: wrap;
			--padding-top: 60px;
			--padding-bottom: 0px;
			--padding-left: 15px;
			--padding-right: 15px;
		}

		body:not(.rtl) .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			left: 69%;
		}

		body.rtl .Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			right: 69%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-463f821 {
			top: 82%;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7e963dd {
			--gap: 20px 20px;
			--row-gap: 20px;
			--column-gap: 20px;
			--flex-wrap: wrap;
			--padding-top: 0px;
			--padding-bottom: 25px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-10eb311 {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-33257ac {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
			--padding-top: 20px;
			--padding-bottom: 0px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-6b1954a {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
			--margin-top: 10px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-d79acd5 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-4aea838 {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-c17ce85>.Mayank-widget-container {
			padding: 0px 0px 0px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-301bf17>.Mayank-widget-container {
			margin: 0px 0px 20px 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-71130b0 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-9b0175b {
			--gap: 10px 0px;
			--row-gap: 10px;
			--column-gap: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-7db7cbd {
			--gap: 5px 0px;
			--row-gap: 5px;
			--column-gap: 0px;
			--margin-top: 0px;
			--margin-bottom: 0px;
			--margin-left: 0px;
			--margin-right: 0px;
			--padding-top: 40px;
			--padding-bottom: 20px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-ef1aecb {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-3b5f390 {
			--gap: 0px 0px;
			--row-gap: 0px;
			--column-gap: 0px;
			--padding-top: 20px;
			--padding-bottom: 20px;
			--padding-left: 0px;
			--padding-right: 0px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-970aca2 .wcf--social-icons ul {
			justify-content: center;
			align-items: center;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-2d48fa0 {
			--gap: 10px 10px;
			--row-gap: 10px;
			--column-gap: 10px;
		}

		.Mayank-3084 .Mayank-element.Mayank-element-c006e6f {
			text-align: center;
		}
	}

	/* Start custom CSS for container, class: .Mayank-element-cd84db8 */
	@media only screen and (min-width: 1367px) and (max-width: 1600px) {
		.footer_left {
			padding-left: 30px;
		}
	}

	/* End custom CSS */
	/* Start custom CSS for container, class: .Mayank-element-e673b88 */
	@media only screen and (min-width: 1367px) and (max-width: 1600px) {
		.footer_right {
			padding-right: 30px;
		}
	}

	/* End custom CSS */
</style>
<script type="speculationrules">
    {
      "prefetch": [
        {
          "source": "document",
          "where": {
            "and": [
              { "href_matches": "\/wp\/arolax\/it-consultancy-agency\/*" },
              {
                "not": {
                  "href_matches": [
                    "\/wp\/arolax\/it-consultancy-agency\/wp-*.php",
                    "\/wp\/arolax\/it-consultancy-agency\/wp-admin\/*",
                    "\/wp\/arolax\/it-consultancy-agency\/wp-content\/uploads\/sites\/61\/*",
                    "\/wp\/arolax\/it-consultancy-agency\/wp-content\/*",
                    "\/wp\/arolax\/it-consultancy-agency\/wp-content\/plugins\/*",
                    "\/wp\/arolax\/it-consultancy-agency\/wp-content\/themes\/arolax\/*",
                    "\/wp\/arolax\/it-consultancy-agency\/*\\?(.+)"
                  ]
                }
              },
              { "not": { "selector_matches": "a[rel~=\"nofollow\"]" } },
              {
                "not": { "selector_matches": ".no-prefetch, .no-prefetch a" }
              }
            ]
          },
          "eagerness": "conservative"
        }
      ]
    }
  </script>

<script>
	(() => {
		const scrollToTop = () => {
			const cursor = document.querySelector(".wcf-scroll-to-top");
			if (!cursor) return;

			// Circular progress animation
			if (cursor.classList.contains("scroll-to-circle")) {
				const progressPath = cursor.querySelector(".progress-circle path");
				if (!progressPath) return;

				const pathLength = progressPath.getTotalLength();
				progressPath.style.transition = "none";
				progressPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
				progressPath.style.strokeDashoffset = pathLength;
				progressPath.getBoundingClientRect(); // Trigger layout
				progressPath.style.transition = "stroke-dashoffset 10ms linear";

				const updateProgress = () => {
					const scroll = window.scrollY;
					const height =
						document.documentElement.scrollHeight - window.innerHeight;
					const progress = pathLength - (scroll * pathLength) / height;
					progressPath.style.strokeDashoffset = progress;
				};

				updateProgress();
				window.addEventListener("scroll", updateProgress);
			}

			// Toggle visibility on scroll
			const toggleVisibility = () => {
				if (window.scrollY > 100) {
					cursor.classList.add("show-scroll-to-top");
				} else {
					cursor.classList.remove("show-scroll-to-top");
				}
			};

			window.addEventListener("scroll", toggleVisibility);

			// Scroll to top on click
			cursor.addEventListener("click", () => {
				window.scrollTo({
					top: 0,
					behavior: "smooth",
				});
			});
		};

		scrollToTop();
	})();
</script>
<script>
	function aaerefreshOnImageLoad() {
		if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
			gsap.registerPlugin(ScrollTrigger);
		}
		document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
			if (img.complete) return;

			img.addEventListener("load", () => {
				if (
					typeof gsap !== "undefined" &&
					typeof ScrollTrigger !== "undefined"
				) {
					ScrollTrigger.refresh();
				}
			});
		});
	}

	document.addEventListener("DOMContentLoaded", aaerefreshOnImageLoad);
</script>
<script>
	const lazyloadRunObserver = () => {
		const lazyloadBackgrounds = document.querySelectorAll(
			`.e-con.e-parent:not(.e-lazyloaded)`
		);
		const lazyloadBackgroundObserver = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						let lazyloadBackground = entry.target;
						if (lazyloadBackground) {
							lazyloadBackground.classList.add("e-lazyloaded");
						}
						lazyloadBackgroundObserver.unobserve(entry.target);
					}
				});
			},
			{ rootMargin: "200px 0px 200px 0px" }
		);
		lazyloadBackgrounds.forEach((lazyloadBackground) => {
			lazyloadBackgroundObserver.observe(lazyloadBackground);
		});
	};
	const events = ["DOMContentLoaded", "Mayank/lazyload/observe"];
	events.forEach((event) => {
		document.addEventListener(event, lazyloadRunObserver);
	});
</script>
<script>
	(() => {
		// Preloader
		const aae_pro_preloader = () => {
			const preloaderEl = document.querySelector(".wcf-preloader");
			if (!preloaderEl) return;

			document.addEventListener("DOMContentLoaded", () => {
				setTimeout(() => {
					document.body.classList.remove("wcf-preloader-active");
					preloaderEl.remove();
				}, 500);
			});
		};

		aae_pro_preloader();
	})();
</script>
<style id="wcf-preloader-inline-css" type="text/css">
	.wcf-preloader {}

	.wcf-preloader {}
</style>
<style id="wcf-scroll-to-top-inline-css" type="text/css">
	.wcf-scroll-to-top {
		bottom: 5px;
		right: 15px;
		width: 35px;
		height: 35px;
		z-index: 9999;
		background-color: #fe5b2c;
		border-radius: 5px;
		font-size: 16px;
		color: #ffffff;
		fill: #ffffff;
		mix-blend-mode: normal;
	}

	.wcf-scroll-to-top.scroll-to-circle {
		width: 35px;
		height: 35px;
	}
</style>

<script type="text/javascript" id="wpo_min-footer-0-js-extra">
	/* <![CDATA[ */
	var AROLAX_ADDONS_JS = {
		ajaxUrl:
			"https:\/\/crowdytheme.com\/wp\/arolax\/it-consultancy-agency\/wp-admin\/admin-ajax.php",
		_wpnonce: "1121a2d984",
	};
	var arolax_obj = {
		ajax_url:
			"https:\/\/crowdytheme.com\/wp\/arolax\/it-consultancy-agency\/wp-admin\/admin-ajax.php",
		cart_update_qty_change: "",
	};
	/* ]]> */
</script>
<link rel="stylesheet" id="wpo_min-footer-0-css"
	href="{{asset('css/wpo-minify-footer-1e0a45a6.min.css')}}"
	type="text/css" media="all" />
<script type="text/javascript"
	src="{{asset('js/wpo-minify-footer-3509349d.min.js')}}"
	id="wpo_min-footer-0-js"></script>
<script type="text/javascript"
	src="{{asset('js/wpo-minify-footer-d5a175af.min.js')}}"
	id="wpo_min-footer-1-js"></script>
@endsection