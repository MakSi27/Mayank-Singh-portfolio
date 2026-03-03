@extends('master')


@section('head_scripts')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="oYk3yjGzcM4WyRHSDNdHLe9wlkBNfwXoXnFJZycZ">

<title>Mayank Singh | Data Scientist & Python Developer</title>

<meta name="description"
    content="Mayank Singh is a Data Science and Python Developer specializing in data analysis, machine learning, automation, and building intelligent data-driven solutions.">

<link rel="canonical" href="index.html">
<meta name="robots" content="index, follow">

<meta property="og:site_name" content="Mayank Singh Portfolio">
<meta property="og:type" content="website">
<meta property="og:title" content="Mayank Singh | Data Scientist & Python Developer">
<meta property="og:description"
    content="Explore the portfolio of Mayank Singh, a Data Scientist and Python Developer working on data analysis, machine learning models, and real-world AI projects.">
<meta property="og:url" content="index.html">
<meta property="og:image" content="storage/general/logo.png">

<meta name="twitter:title" content="Mayank Singh | Data Scientist & Python Developer">
<meta name="twitter:description"
    content="Portfolio of Mayank Singh showcasing data science projects, Python development, machine learning, and analytics work.">


    <link rel="sitemap" title="Sitemap" href="sitemap.xml" type="application/xml">
    <link rel="icon" type="image/x-icon" href="asset/favicon.png">
    <!-- <link rel="preload" as="image" href="asset/newsletter-popup.webp" /> -->

   


    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/language-publicd1f1.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/content-styles.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/fonts7ac4.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/style7ac4.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/animate.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/odometer.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/swiper-bundle.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/styles7ac4.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/theme7ac4.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/announcemente209.min.css')}}">

    
    <link href="index.html" hreflang="x-default" rel="alternate" />
    <link href="index.html" hreflang="en" rel="alternate" />
    <link href="index.html" hreflang="en-us" rel="alternate" />
    <link href="ar.html" hreflang="ar" rel="alternate" />
    <link href="vi.html" hreflang="vi" rel="alternate" />
    <link href="fr.html" hreflang="fr" rel="alternate" />
    <link href="id.html" hreflang="id" rel="alternate" />
    <link href="tr.html" hreflang="tr" rel="alternate" />
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="ar/feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="vi/feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="fr/feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="id/feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="tr/feed/posts">




    <script>
        window.siteUrl = "index.html";
    </script>
	
    <style>
        :root {
            --primary-color: #1b4ef5;
            --primary-color-rgb: 27, 78, 245;
            --primary: #1b4ef5;
        }
    </style>
     <style>
        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewygfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewsgfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewcgfwnoitd.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewygfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewsgfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewcgfwnoitd.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewygfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewsgfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewcgfwnoitd.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewygfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewsgfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewcgfwnoitd.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewygfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewsgfwnoitddy4.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Geist';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(asset/sgeistv4gybyhwuxid8gmewcgfwnoitd.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style>
        :root {
            --primary-font: "Geist", sans-serif;
            --secondary-font: "Mono", sans-serif;
            --display-font: "Grotesk", sans-serif;
        }
    </style>
	<style>


	</style>

    <script
        type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebSite","name":"mayank - AI SaaS Platform","url":"https:\/\/mayank.botble.com"}
    </script>
    <script
        type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Organization","name":"mayank - AI SaaS Platform","url":"https:\/\/mayank.botble.com","logo":{"@type":"ImageObject","url":"https:\/\/mayank.botble.com\/storage\/general\/logo.png"}}
    </script>

@endsection

@section('main_content')

	<body id="page-home" class="counter-scroll">


	<!-- pop-up section -->


		<!-- <div class="modal fade newsletter-popup" id="newsletter-popup" tabindex="-1" aria-hidden="true" data-delay="5"
			title="Stay Updated with AI News" data-url="https://mayank.botble.com/ajax/newsletter/popup">
		</div> -->

		
	<!-- pop-up section -->
	


		<!-- Scroll Top -->
		<button id="goTop">
			<span class="border-progress"></span>
			<span class="icon icon-arrow-top"></span>
		</button>

		<div id="wrapper">
			<span class="line_page"></span>
			<div class="overlay_body"></div>
			<div class="texture_page">
				<div class="bg-texture"></div>
				<div class="temp"></div>
				<div class="bg-texture"></div>
			</div>

			<div class="hero-video">
				<video class="" muted autoplay loop playsinline>
					<source src="asset/BlackHole.mp4" type="video/mp4">
				</video>
				<div class="orther-overlay"></div>
			</div>


			<!-- Header -->
			<header id="header" class="tf-header">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-5 col-lg-3">
							<div class="header-left">
								<a href="index.html" class="logo-site">
									<!-- <img src="asset/logo.png" alt="mayank - AI SaaS Platform"> -->
								</a>
							</div>
						</div>
						<div class="col-6 d-none d-lg-block">
							<nav class="box-navigation">
								<ul class="box-nav-menu main-nav_menu">
									<li class="menu-item  ">
										<a href="{{asset('resume')}}"
											class="item-link tf-btn style-transparent text-body-3 animate-btn">
											My Resume
										</a>
									</li>
								</ul>

							</nav>
						</div>
						<div class="col-7 col-lg-3">
							<div class="header-right">
								<div class="btn_group">
									<a href="#mobileMenu" class="btn-menu_mobile d-lg-none" data-bs-toggle="offcanvas">
										<i class="icon icon-menu"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<span class="br-line"></span>
			<!-- /Header -->


			<!-- section-1 -->

			<section data-block-id="hero" class="section-hero">
	<!-- == Head Section -->
	<div class="sect-header">
		<div class="container">
			<div class="s-meta text-caption font-2">
				<p class="s-number_order wg-counter">
					[ <span class="text-white">0<span class="odometer" data-number="01">0</span></span> / 09 ]
				</p>
				<p class="s-label">[ <span class="text-white hacker-text_transform">HERO</span> ]</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Tagline Section -->
	<div class="sect-tagline">
		<div class="container">
			<div class="sect-tagline_inner">
				<span class="hafl-plus pst-left_bot wow bounceInScale"></span>
				<span class="hafl-plus pst-right_bot wow bounceInScale"></span>
				<p class="s-name text-caption font-2">
					<span class="bar-group type-left">
						<span class="bar_center"></span>
					</span>
					<span class="hacker-text_transform no-delay">
						DATA SCIENCE • AI • MACHINE LEARNING
					</span>
					<span class="bar-group type-right">
						<span class="bar_center"></span>
					</span>
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Main Section -->
	<div class="sect-main">
		<div class="container">
			<div class="sect-title wow fadeInUp">
				<h1 class="s-title font-3">
					Hi, I’m Mayank Singh.
					<br>
					<span class="text-change_wrap">
						<span class="text-change_rotating">
							Data<span class="icon icon icon-gpt"></span>Science
						</span>
						
						<span class="text-change_rotating">
							AI<span class="icon icon icon-gemini"></span>Enthusiast
						</span>
						<span class="text-change_rotating">
							ML<span class="icon icon icon-cloud"></span>passionate
						</span>
					</span>
				</h1>
				<p class="s-sub_title">
					B.Tech student passionate about transforming data into insights through analytics, machine learning,
					and real-world AI-driven solutions.
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Brand -->
	<div class="tf-brand">
		<div class="container">
			<div class="tf-brand_inner">
				<h5 class="title text-caption font-2 letter-space-0 fw-normal wg-counter wow fadeInUp">
					PROJECTS BUILT ACROSS <span class="odometer" data-number="8">3</span>+ DATA DOMAINS
				</h5>
				<div class="infiniteSlide infiniteSlide_brand" data-clone="3">
					<div class="image-brand">
						<img class="lazyload" src="asset/brand-1.png"
							data-src="asset/brand-1.png" alt="Brand">
					</div>
					<div class="image-brand">
						<img class="lazyload" src="asset/brand-2.png"
							data-src="asset/brand-2.png" alt="Brand">
					</div>
					<div class="image-brand">
						<img class="lazyload" src="asset/brand-3.png"
							data-src="asset/brand-3.png" alt="Brand">
					</div>
					<div class="image-brand">
						<img class="lazyload" src="asset/brand-4.png"
							data-src="asset/brand-4.png" alt="Brand">
					</div>
					<div class="image-brand">
						<img class="lazyload" src="asset/brand-5.png"
							data-src="asset/brand-5.png" alt="Brand">
					</div>
					<div class="image-brand">
						<img class="lazyload" src="asset/brand-6.png"
							data-src="asset/brand-6.png" alt="Brand">
					</div>
				</div>
				<span class="hafl-plus pst-left_bot item_bot wow bounceInScale"></span>
				<span class="hafl-plus pst-right_bot item_bot wow bounceInScale"></span>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Bottom Section -->
	<div class="sect-bottom">
		<div class="container">
			<div class="box-hacker has-overlay_linear mx-1">
				<p class="hacker-text text-caption font-2 text-uppercase hackerText">
					python sql pandas numpy scikit-learn tensorflow pytorch data-analytics machine-learning deep-learning
					eda predictive-modeling neural-networks statistics visualization tableau powerbi github deployment
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>
</section>


			<!-- section-1 -->






			<!-- section-2 -->



			<section data-block-id="features" class="section-feature" id="features">
	<!-- == Head Section -->
	<div class="sect-header">
		<div class="container">
			<div class="s-meta text-caption font-2">
				<p class="s-number_order wg-counter">
					[ <span class="text-white">0<span class="odometer" data-number="02">0</span></span> / 09 ]
				</p>
				<p class="s-label">[ <span class="text-white hacker-text_transform">FEATURES</span> ]</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Tagline Section -->
	<div class="sect-tagline">
		<div class="container">
			<div class="sect-tagline_inner">
				<span class="hafl-plus pst-left_bot wow bounceInScale"></span>
				<span class="hafl-plus pst-right_bot wow bounceInScale"></span>
				<p class="s-name text-caption font-2">
					<span class="bar-group type-left">
						<span class="bar_center"></span>
					</span>
					<span class="hacker-text_transform no-delay">
						END-TO-END DATA PROJECTS. REAL-WORLD ML APPLICATIONS.
					</span>
					<span class="bar-group type-right">
						<span class="bar_center"></span>
					</span>
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Main Section -->
	<div class="sect-main flat-animate-tab">
		<div class="s-img_item wow bounceInScale">
			<img class="lazyload" src="asset/smoke-blue.webp"
				data-src="asset/smoke-blue.webp" alt="Item">
		</div>
		<div class="container">
			<div class="sect-title wow fadeInUp">
				<h2 class="s-title font-3">
					What I Build as a Data Scientist
				</h2>
				<p class="s-sub_title">
					From raw data to deployed models, I work across analytics, machine learning, visualization, and
					statistical modeling to solve practical problems.
				</p>
			</div>

			<div class="tab-content">
				<div class="tab-pane active show" id="feature-0" role="tabpanel">
					<div class="image-with-text wow fadeInUp">
						<img class="lazyload" src="asset/image-creator.webp"
							data-src="asset/image-creator.webp" alt="EDA & SQL">
						<div class="sect-title box-text">
							<h4 class="s-title">EDA & SQL Analytics</h4>
							<p class="s-sub_title text-body-3">
								Perform in-depth exploratory data analysis using Python and SQL to uncover patterns,
								trends, and business insights from complex datasets.
							</p>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="feature-1" role="tabpanel">
					<div class="image-with-text">
						<img class="lazyload" src="asset/image-enhance.webp"
							data-src="asset/image-enhance.webp" alt="Machine Learning">
						<div class="sect-title box-text">
							<h4 class="s-title">Machine Learning Models</h4>
							<p class="s-sub_title text-body-3">
								Build and evaluate supervised learning models for regression and classification,
								focusing on performance, interpretability, and real-world usability.
							</p>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="feature-2" role="tabpanel">
					<div class="image-with-text">
						<img class="lazyload" src="asset/video-creator.webp"
							data-src="asset/video-creator.webp" alt="Deep Learning">
						<div class="sect-title box-text">
							<h4 class="s-title">Deep Learning & Neural Networks</h4>
							<p class="s-sub_title text-body-3">
								Design and train neural networks using TensorFlow and PyTorch for complex problems,
								including high-dimensional and unstructured data.
							</p>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="feature-3" role="tabpanel">
					<div class="image-with-text">
						<img class="lazyload" src="asset/text-creator.webp"
							data-src="asset/text-creator.webp" alt="NLP">
						<div class="sect-title box-text">
							<h4 class="s-title">Natural Language Processing</h4>
							<p class="s-sub_title text-body-3">
								Develop NLP solutions such as sentiment analysis systems to extract meaning and insights
								from large-scale text data.
							</p>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="feature-4" role="tabpanel">
					<div class="image-with-text">
						<img class="lazyload" src="asset/code-composer.webp"
							data-src="asset/code-composer.webp" alt="Data Engineering">
						<div class="sect-title box-text">
							<h4 class="s-title">Data Engineering & Automation</h4>
							<p class="s-sub_title text-body-3">
								Automate data collection using web scraping pipelines and prepare clean, structured
								datasets ready for analysis and modeling.
							</p>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="feature-5" role="tabpanel">
					<div class="image-with-text">
						<img class="lazyload" src="asset/website-builder.webp"
							data-src="asset/website-builder.webp" alt="Visualization">
						<div class="sect-title box-text">
							<h4 class="s-title">Data Visualization & Dashboards</h4>
							<p class="s-sub_title text-body-3">
								Create interactive dashboards using Tableau and Power BI to communicate insights
								clearly to both technical and non-technical stakeholders.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<span class="br-line"></span>

		<div class="container">
			<div class="position-relative">
				<ul class="tab-can_do position-relative mx-1" role="tablist">
					<li class="nav-tab-item active" role="presentation">
						<a href="#feature-0" data-bs-toggle="tab"
							class="btn_tab tf-btn style-transparent text-body-3 animate-btn active"
							role="tab">EDA & SQL</a>
					</li>
					<li class="nav-tab-item" role="presentation">
						<a href="#feature-1" data-bs-toggle="tab"
							class="btn_tab tf-btn style-transparent text-body-3 animate-btn"
							role="tab">Machine Learning</a>
					</li>
					<li class="nav-tab-item" role="presentation">
						<a href="#feature-2" data-bs-toggle="tab"
							class="btn_tab tf-btn style-transparent text-body-3 animate-btn"
							role="tab">Deep Learning</a>
					</li>
					<li class="nav-tab-item" role="presentation">
						<a href="#feature-3" data-bs-toggle="tab"
							class="btn_tab tf-btn style-transparent text-body-3 animate-btn"
							role="tab">NLP</a>
					</li>
					<li class="nav-tab-item" role="presentation">
						<a href="#feature-4" data-bs-toggle="tab"
							class="btn_tab tf-btn style-transparent text-body-3 animate-btn"
							role="tab">Automation</a>
					</li>
					<li class="nav-tab-item" role="presentation">
						<a href="#feature-5" data-bs-toggle="tab"
							class="btn_tab tf-btn style-transparent text-body-3 animate-btn"
							role="tab">Visualization</a>
					</li>
				</ul>
				<span class="hafl-plus pst-left_bot item_bot wow bounceInScale"></span>
				<span class="hafl-plus pst-right_bot item_bot wow bounceInScale"></span>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Bottom Section -->
	<div class="sect-bottom">
		<div class="container">
			<div class="box-hacker has-overlay_linear">
				<p class="hacker-text text-caption font-2 text-uppercase hackerText">
					eda sql python pandas numpy scikit-learn machine-learning deep-learning nlp neural-networks
					data-visualization tableau powerbi statistics pca automation deployment
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>
</section>


			<style>
				.shortcode-lazy-loading {
					position: relative;
					min-height: 12rem;
				}

				.loading-spinner {
					align-items: center;
					background: hsla(0, 0%, 100%, 0.5);
					display: flex;
					height: 100%;
					inset-inline-start: 0;
					justify-content: center;
					position: absolute;
					top: 0;
					width: 100%;
					z-index: 1;

					&:after {
						animation: loading-spinner-rotation 0.5s linear infinite;
						border-color: var(--primary-color) transparent var(--primary-color) transparent;
						border-radius: 50%;
						border-style: solid;
						border-width: 1px;
						content: ' ';
						display: block;
						height: 40px;
						position: absolute;
						top: calc(50% - 20px);
						width: 40px;
						z-index: 1;
					}
				}

				@keyframes loading-spinner-rotation {
					0% {
						transform: rotate(0deg);
					}

					100% {
						transform: rotate(360deg);
					}
				}
			</style>

			<!-- section-2 -->





			<!-- section-3 -->



			<section data-shortcode-id="sc_1770572995_0" data-shortcode-name="benefits" data-block-id="benefits"
	class="section-benefit shortcode-lazy-loading-loaded">
	<!-- == Head Section -->
	<div class="sect-header">
		<div class="container">
			<div class="s-meta text-caption font-2">
				<p class="s-number_order wg-counter counted">
					[ <span class="text-white">0<span class="odometer" data-number="03">03</span></span> / 09 ]
				</p>
				<p class="s-label">[ <span class="text-white hacker-text_transform">BENEFITS</span> ]</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Tagline Section -->
	<div class="sect-tagline">
		<div class="container">
			<div class="sect-tagline_inner">
				<span class="hafl-plus pst-left_bot wow bounceInScale animated animated"></span>
				<span class="hafl-plus pst-right_bot wow bounceInScale animated animated"></span>
				<p class="s-name text-caption font-2">
					<span class="bar-group type-left">
						<span class="bar_center"></span>
					</span>
					<span class="hacker-text_transform no-delay">
						WHY MY APPROACH TO DATA SCIENCE WORKS.
					</span>
					<span class="bar-group type-right">
						<span class="bar_center"></span>
					</span>
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Main Section -->
	<div class="sect-main">
		<div class="container">
			<div class="place-video">
				<div class="visual-object">
					<div class="object_img wow bounceInScale animated animated">
						<div class="image">
							<img src="asset/visual-object.png" alt="Visual">
						</div>
						<span class="hafl-plus start-0 top-0 rotate-top_left wow bounceInScale animated animated"></span>
						<span class="hafl-plus end-0 top-0 rotate-top_right wow bounceInScale animated animated"></span>
					</div>
				</div>
				<div class="sect-title wow fadeInUp animated animated">
					<h2 class="s-title font-3">
						Built on strong fundamentals. <br>Driven by real-world problems.
					</h2>
					<p class="s-sub_title">
						I combine mathematics, programming, and domain understanding to build reliable, explainable,
						and scalable data-driven solutions.
					</p>
				</div>
			</div>

			<div class="position-relative">
				<div class="grid-box_icon tf-grid-layout sm-col-2 md-col-3">

					<div class="box-icon-text wow fadeInUp animated animated">
						<div class="icon">
							<img src="asset/platform.png" alt="End-to-end thinking">
						</div>
						<div class="content">
							<p class="title text-main-2">End-to-end mindset</p>
							<p class="sub-title text-body-3">
								I handle the full data lifecycle — data collection, cleaning, analysis, modeling,
								visualization, and deployment.
							</p>
						</div>
					</div>

					<div class="box-icon-text wow fadeInUp animated animated">
						<div class="icon">
							<img src="asset/ai-core.png" alt="Strong ML foundation">
						</div>
						<div class="content">
							<p class="title text-main-2">Strong ML foundations</p>
							<p class="sub-title text-body-3">
								Solid understanding of machine learning algorithms, evaluation metrics, and model
								interpretability.
							</p>
						</div>
					</div>

					<div class="box-icon-text wow fadeInUp animated animated">
						<div class="icon">
							<img src="asset/control.png" alt="Mathematics driven">
						</div>
						<div class="content">
							<p class="title text-main-2">Mathematics-driven approach</p>
							<p class="sub-title text-body-3">
								Decisions are backed by statistics, linear algebra, probability, and optimization — not
								just APIs.
							</p>
						</div>
					</div>

					<div class="box-icon-text wow fadeInUp animated animated">
						<div class="icon">
							<img src="asset/speed.png" alt="Efficient execution">
						</div>
						<div class="content">
							<p class="title text-main-2">Efficient execution</p>
							<p class="sub-title text-body-3">
								I focus on writing clean, optimized code and delivering results within realistic time
								constraints.
							</p>
						</div>
					</div>

					<div class="box-icon-text wow fadeInUp animated animated">
						<div class="icon">
							<img src="asset/secure.png" alt="Reproducible work">
						</div>
						<div class="content">
							<p class="title text-main-2">Reproducible & clean work</p>
							<p class="sub-title text-body-3">
								Every project follows proper documentation, version control, and reproducible
								experiments.
							</p>
						</div>
					</div>

					<div class="box-icon-text wow fadeInUp animated animated">
						<div class="icon">
							<img src="asset/evolving.png" alt="Continuous learning">
						</div>
						<div class="content">
							<p class="title text-main-2">Continuous learning</p>
							<p class="sub-title text-body-3">
								Actively improving through certifications, research reading, and hands-on experimentation
								in AI and ML.
							</p>
						</div>
					</div>

				</div>

				<span class="hafl-plus pst-left_bot item_bot wow bounceInScale"></span>
				<span class="hafl-plus pst-right_bot item_bot wow bounceInScale"></span>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Bottom Section -->
	<div class="sect-bottom">
		<div class="container">
			<div class="box-hacker has-overlay_linear mx-1">
				<p class="hacker-text text-caption font-2 text-uppercase hackerText">
					end-to-end-ml statistics probability linear-algebra python sql data-pipelines model-evaluation
					reproducibility documentation version-control continuous-learning
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>
</section>



			<!-- section-3 -->




			<!-- section-4 -->



			<section data-shortcode-id="sc_1770572995_0" data-shortcode-name="how-to" data-block-id="how-to"
	class="section-how-to shortcode-lazy-loading-loaded" id="howToUse">
	<!-- == Head Section -->
	<div class="sect-header">
		<div class="container">
			<div class="s-meta text-caption font-2">
				<p class="s-number_order wg-counter counted">
					[ <span class="text-white">0<span class="odometer" data-number="04">04</span></span> / 09 ]
				</p>
				<p class="s-label">[ <span class="text-white hacker-text_transform">HOW I WORK</span> ]</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Tagline Section -->
	<div class="sect-tagline">
		<div class="container">
			<div class="sect-tagline_inner">
				<span class="hafl-plus pst-left_bot wow bounceInScale animated animated"></span>
				<span class="hafl-plus pst-right_bot wow bounceInScale animated animated"></span>
				<p class="s-name text-caption font-2">
					<span class="bar-group type-left">
						<span class="bar_center"></span>
					</span>
					<span class="hacker-text_transform no-delay">
						HOW I APPROACH DATA SCIENCE PROJECTS.
					</span>
					<span class="bar-group type-right">
						<span class="bar_center"></span>
					</span>
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Main Section -->
	<div class="sect-main flat-animate-tab">
		<div class="s-img_item wow bounceInScale animated animated">
			<img class="lazyload"
				src="asset/gradient-ring-bg.webp"
				data-src="asset/gradient-ring-bg.webp"
				alt="Background">
		</div>
		<div class="container">
			<div class="sect-title wow fadeInUp animated animated">
				<h2 class="s-title font-3 m-0">
					From problem statement to insight — <br>in three structured steps.
				</h2>
			</div>

			<div class="row">
				<div class="col-md-6 offset-xl-1 col-xl-4">
					<div class="tab-content mb-md-0 sticky-top wow fadeInUp" style="top: 110px;">
						<div class="tab-pane active show" id="step1" role="tabpanel">
							<div class="image-how_to wow bounceInScale">
								<img class="lazyload"
									src="asset/step-1.webp"
									data-src="asset/step-1.webp"
									alt="Define the problem">
								<span class="hafl-plus start-0 top-0 rotate-top_left"></span>
								<span class="hafl-plus end-0 top-0 rotate-top_right"></span>
								<span class="hafl-plus start-0 bottom-0 item_bot rotate-bot_left"></span>
								<span class="hafl-plus end-0 bottom-0 item_bot rotate-bot_right"></span>
							</div>
						</div>

						<div class="tab-pane" id="step2" role="tabpanel">
							<div class="image-how_to">
								<img class="lazyload"
									src="asset/step-2.webp"
									data-src="asset/step-2.webp"
									alt="Analyze and model">
								<span class="hafl-plus start-0 top-0 rotate-top_left"></span>
								<span class="hafl-plus end-0 top-0 rotate-top_right"></span>
								<span class="hafl-plus start-0 bottom-0 item_bot rotate-bot_left"></span>
								<span class="hafl-plus end-0 bottom-0 item_bot rotate-bot_right"></span>
							</div>
						</div>

						<div class="tab-pane" id="step3" role="tabpanel">
							<div class="image-how_to">
								<img class="lazyload"
									src="asset/step-3.webp"
									data-src="asset/step-3.webp"
									alt="Deploy and evaluate">
								<span class="hafl-plus start-0 top-0 rotate-top_left"></span>
								<span class="hafl-plus end-0 top-0 rotate-top_right"></span>
								<span class="hafl-plus start-0 bottom-0 item_bot rotate-bot_left"></span>
								<span class="hafl-plus end-0 bottom-0 item_bot rotate-bot_right"></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 offset-xl-2 col-xl-4">
					<ul class="tab-how_to position-relative mx-1 wow fadeInUp" role="tablist">
						<li class="nav-tab-item" role="presentation">
							<div data-bs-toggle="tab" data-bs-target="#step1" class="btn_tab active"
								aria-selected="true" role="tab">
								<p class="number-step text-caption font-2">STEP 01</p>
								<h5 class="name" data-text="Understand the problem">Understand the problem</h5>
								<p class="desc">
									Define objectives, understand the business or research context, and identify the right
									metrics before touching the data.
								</p>
							</div>
						</li>

						<li class="br-line has-dot"></li>

						<li class="nav-tab-item" role="presentation">
							<div data-bs-toggle="tab" data-bs-target="#step2" class="btn_tab"
								aria-selected="true" role="tab">
								<p class="number-step text-caption font-2">STEP 02</p>
								<h5 class="name" data-text="Analyze & build models">Analyze & build models</h5>
								<p class="desc">
									Perform EDA, feature engineering, statistical analysis, and apply machine learning or
									deep learning models.
								</p>
							</div>
						</li>

						<li class="br-line has-dot"></li>

						<li class="nav-tab-item" role="presentation">
							<div data-bs-toggle="tab" data-bs-target="#step3" class="btn_tab"
								aria-selected="true" role="tab">
								<p class="number-step text-caption font-2">STEP 03</p>
								<h5 class="name" data-text="Evaluate & deploy">Evaluate & deploy</h5>
								<p class="desc">
									Evaluate performance, interpret results, document insights, and deploy models using
									dashboards or web apps.
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="position-relative has-hafl_plus">
				<span class="hafl-plus pst-left_bot item_bot wow bounceInScale"></span>
				<span class="hafl-plus pst-right_bot item_bot wow bounceInScale"></span>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Bottom Section -->
	<div class="sect-bottom">
		<div class="container">
			<div class="box-hacker has-overlay_linear mx-1">
				<p class="hacker-text text-caption font-2 text-uppercase hackerText">
					problem-definition eda feature-engineering machine-learning deep-learning model-evaluation
					deployment dashboards documentation
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>
</section>



			<!-- section-4 -->


			<!-- section-5 -->

			<section data-shortcode-id="sc_1770572995_0" data-shortcode-name="pricing" data-block-id="pricing"
	class="section-pricing shortcode-lazy-loading-loaded" id="pricing">

	<!-- == Head Section -->
	<div class="sect-header">
		<div class="container">
			<div class="s-meta text-caption font-2">
				<p class="s-number_order wg-counter counted">
					[ <span class="text-white">0<span class="odometer" data-number="05">05</span></span> / 09 ]
				</p>
				<p class="s-label">[ <span class="text-white hacker-text_transform">SKILLS</span> ]</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Tagline Section -->
	<div class="sect-tagline">
		<div class="container">
			<div class="sect-tagline_inner">
				<span class="hafl-plus pst-left_bot wow bounceInScale animated animated"
					style="visibility: visible;"></span>
				<span class="hafl-plus pst-right_bot wow bounceInScale animated animated"
					style="visibility: visible;"></span>
				<h6 class="s-name text-caption font-2">
					<span class="bar-group type-left">
						<span class="bar_center"></span>
					</span>
					<span class="hacker-text_transform no-delay">TECHNICAL EXPERTISE STACK.</span>
					<span class="bar-group type-right">
						<span class="bar_center"></span>
					</span>
				</h6>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Main Section -->
	<div class="sect-main">
		<div class="container">
			<div class="sect-title wow fadeInUp animated animated" style="visibility: visible;">
				<h2 class="s-title font-3 m-0">
					Skills that power <br>real-world solutions
				</h2>
			</div>

			<div class="grid-pricing">

				<!-- CORE PROGRAMMING -->
				<div class="wg-plan wow fadeInUp" style="visibility: hidden; animation-name: none;">
					<div class="content">
						<div class="plan-header">
							<p class="plan_type text-body-1">
								Core Programming
							</p>
							<div class="plan_price">
								<h3 class="price-amount">Advanced</h3>
								<p class="price-duration text-body-3">
									proficiency
								</p>
							</div>
							<p class="plan-description">
								Strong foundation in programming and problem-solving.
							</p>
							
						</div>
						<span class="br-line has-dot"></span>
						<div class="plan-feature">
							<p class="feature_title">Skills Included</p>
							<ul class="features_list">
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Python (Advanced)</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> SQL & Database Design</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Data Structures & Algorithms</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Git & Version Control</li>
							</ul>
						</div>
					</div>
					<div class="item">
						<img class="lazyloaded" src="asset/color-bg-3.webp" alt="BG">
					</div>
				</div>

				<!-- DATA SCIENCE -->
				<div class="wg-plan type-2 wow fadeInUp" style="visibility: hidden; animation-name: none;">
					<div class="content">
						<div class="plan-header">
							<p class="plan_type text-body-1">
								Data Science
							</p>
							<div class="plan_price">
								<h3 class="price-amount">Professional</h3>
								<p class="price-duration text-body-3">
									level
								</p>
							</div>
							<p class="plan-description">
								Transforming raw data into meaningful insights.
							</p>
							
						</div>
						<span class="br-line has-dot"></span>
						<div class="plan-feature">
							<p class="feature_title">Skills Included</p>
							<ul class="features_list">
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Pandas & NumPy</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Data Cleaning & EDA</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Data Visualization</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Statistics & Probability</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Feature Engineering</li>
							</ul>
						</div>
					</div>
					<div class="item">
						<img class="lazyloaded" src="asset/color-bg-3.webp" alt="BG">
					</div>
				</div>

				<!-- AI & MACHINE LEARNING -->
				<div class="wg-plan wow fadeInUp" style="visibility: hidden; animation-name: none;">
					<div class="content">
						<div class="plan-header">
							<p class="plan_type text-body-1">
								AI & Machine Learning
							</p>
							<div class="plan_price">
								<h3 class="price-amount">Expert</h3>
								<p class="price-duration text-body-3">
									skillset
								</p>
							</div>
							<p class="plan-description">
								Building intelligent systems with real-world impact.
							</p>
							
						</div>
						<span class="br-line has-dot"></span>
						<div class="plan-feature">
							<p class="feature_title">Skills Included</p>
							<ul class="features_list">
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Machine Learning Algorithms</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Scikit-Learn</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Deep Learning (TensorFlow / PyTorch)</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Neural Networks</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> Model Deployment</li>
								<li><span class="icon"><img src="asset/check.svg" alt="Check"></span> API Integration</li>
							</ul>
						</div>
					</div>
					<div class="item">
						<img class="lazyloaded" src="asset/color-bg-3.webp" alt="BG">
					</div>
				</div>

			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Bottom Section -->
	<div class="sect-bottom">
		<div class="container">
			<div class="box-hacker has-overlay_linear">
				<p class="hacker-text text-caption font-2 text-uppercase hackerText">
					data · algorithms · intelligence · models · insights · analytics · learning · deployment · innovation
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>
</section>


			
			<!-- section-5 -->



			<!-- section-6 -->


			<section data-shortcode-id="sc_1770572995_0" data-shortcode-name="testimonials" data-block-id="testimonials"
	class="section-testimonial shortcode-lazy-loading-loaded">
	<!-- == Head Section -->
	<div class="sect-header">
		<div class="container">
			<div class="s-meta text-caption font-2">
				<p class="s-number_order wg-counter counted">
					[ <span class="text-white">0<span class="odometer" data-number="06">06</span></span> / 09 ]
				</p>
				<p class="s-label">[ <span class="text-white hacker-text_transform">INSIGHTS</span> ]</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Tagline Section -->
	<div class="sect-tagline">
		<div class="container">
			<div class="sect-tagline_inner">
				<span class="hafl-plus pst-left_bot wow bounceInScale animated"></span>
				<span class="hafl-plus pst-right_bot wow bounceInScale animated"></span>
				<h6 class="s-name text-caption font-2">
					<span class="bar-group type-left"><span class="bar_center"></span></span>
					<span class="hacker-text_transform no-delay">WISDOM FROM LEADERS WHO SHAPED TECHNOLOGY.</span>
					<span class="bar-group type-right"><span class="bar_center"></span></span>
				</h6>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Main Section -->
	<div class="sect-main">
		<div class="s-img_item wow bounceInScale animated">
			<div class="globe-cont">
				<img class="globe-img lazyloaded" src="asset/globe-bg.webp" alt="Globe">
			</div>
			<img class="img-2 lazyloaded" src="asset/color-bg.webp" alt="Image">
		</div>

		<div class="container">
			<div class="sect-title wow fadeInUp animated">
				<h2 class="s-title font-3 m-0">
					Quotes & advice <br>from tech pioneers.
				</h2>
			</div>

			<div class="testimonial-slide-wrap">
				<div class="overflow-hidden has-overlay_linear type-2 mx-1">
					<div class="infiniteslide_wrap">
						<div class="infiniteSlide infiniteSlide-tes">

							<!-- Quote 1 -->
							<div class="wg-testimonial">
								<div class="tes-author">
									<div class="author_image">
										<img class="lazyload" src="asset/avt-1.jpg" alt="Elon Musk">
									</div>
									<div class="author_info">
										<a href="#" class="link name">Elon Musk</a>
										<p class="text-body-3">@elonmusk</p>
									</div>
								</div>
								<p class="tes-text">
									Focus on <span class="text-main-2">learning fundamentals</span>. Technologies change,
									but strong problem-solving skills stay forever.
								</p>
							</div>

							<!-- Quote 2 -->
							<div class="wg-testimonial">
								<div class="tes-author">
									<div class="author_image">
										<img class="lazyload" src="asset/avt-2.jpg" alt="Sundar Pichai">
									</div>
									<div class="author_info">
										<a href="#" class="link name">Sundar Pichai</a>
										<p class="text-body-3">@sundarpichai</p>
									</div>
								</div>
								<p class="tes-text">
									Keep pushing yourself beyond comfort. That’s where
									<span class="text-main-2">real innovation</span> begins.
								</p>
							</div>

							<!-- Quote 3 -->
							<div class="wg-testimonial">
								<div class="tes-author">
									<div class="author_image">
										<img class="lazyload" src="asset/avt-3.jpg" alt="Satya Nadella">
									</div>
									<div class="author_info">
										<a href="#" class="link name">Satya Nadella</a>
										<p class="text-body-3">@satyanadella</p>
									</div>
								</div>
								<p class="tes-text">
									Don’t be a know-it-all. Be a
									<span class="text-main-2">learn-it-all</span>.
								</p>
							</div>

							<!-- Quote 4 -->
							<div class="wg-testimonial">
								<div class="tes-author">
									<div class="author_image">
										<img class="lazyload" src="asset/avt-4.jpg" alt="Mark Zuckerberg">
									</div>
									<div class="author_info">
										<a href="#" class="link name">Mark Zuckerberg</a>
										<p class="text-body-3">@zuck</p>
									</div>
								</div>
								<p class="tes-text">
									The biggest risk is
									<span class="text-main-2">not taking any risk</span> in a fast-changing tech world.
								</p>
							</div>

							<!-- Quote 5 -->
							<div class="wg-testimonial">
								<div class="tes-author">
									<div class="author_image">
										<img class="lazyload" src="asset/avt-5.jpg" alt="Steve Jobs">
									</div>
									<div class="author_info">
										<a href="#" class="link name">Steve Jobs</a>
										<p class="text-body-3">@stevejobs</p>
									</div>
								</div>
								<p class="tes-text">
									Stay hungry. Stay foolish.
									That’s how <span class="text-main-2">great products</span> are built.
								</p>
							</div>

							<!-- Quote 6 -->
							<div class="wg-testimonial">
								<div class="tes-author">
									<div class="author_image">
										<img class="lazyload" src="asset/avt-6.jpg" alt="Bill Gates">
									</div>
									<div class="author_info">
										<a href="#" class="link name">Bill Gates</a>
										<p class="text-body-3">@billgates</p>
									</div>
								</div>
								<p class="tes-text">
									Success today requires the
									<span class="text-main-2">ability to adapt</span> and keep learning.
								</p>
							</div>

						</div>
					</div>
				</div>
				<span class="hafl-plus pst-left_bot item_bot z-1 wow bounceInScale"></span>
				<span class="hafl-plus pst-right_bot item_bot z-1 wow bounceInScale"></span>
			</div>
		</div>
	</div>
	<span class="br-line"></span>

	<!-- == Bottom Section -->
	<div class="sect-bottom">
		<div class="container">
			<div class="box-hacker has-overlay_linear mx-1">
				<p class="hacker-text text-caption font-2 text-uppercase hackerText">
					LEARN. BUILD. FAIL. IMPROVE. REPEAT.
				</p>
			</div>
		</div>
	</div>
	<span class="br-line"></span>
</section>



			<!-- section-6 -->








			

		

			

			<footer class="tf-footer">
				<!-- == Head Section -->
				<div class="sect-header">
					<div class="container">
						<div class="s-meta text-caption font-2">
							<p class="s-number_order wg-counter counted">
								[ <span class="text-white">0<span class="odometer odometer-auto-theme" data-number="9">
										<div class="odometer-inside"><span class="odometer-digit"><span
													class="odometer-digit-spacer">8</span><span
													class="odometer-digit-inner"><span class="odometer-ribbon"><span
															class="odometer-ribbon-inner"><span
																class="odometer-value">9</span></span></span></span></span>
										</div>
									</span></span> / 09 ]
							</p>
							<p class="s-label">[ <span class="text-white hacker-text_transform">FOOTER</span> ]</p>
						</div>
					</div>
				</div>
				<span class="br-line"></span>

				<div class="footer-body">
					<div class="container">
						<div class="footer-inner-wrap">
							<div class="ft-bg_item">
								<svg width="373" height="386" viewBox="0 0 373 386" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M-20.3652 -169.377C51.9466 -197.973 130.337 -194.64 201.386 -163.785C231.304 -150.528 258.727 -133.254 282.736 -110.949C325.964 -70.7761 355.318 -17.9054 366.564 40.0342C370.265 59.0818 371.768 77.9351 372.479 97.3115C324.873 97.9552 277.174 97.3313 229.544 97.3271C228.079 63.7031 218.981 32.1199 196.393 6.23145C170.252 -23.7257 132.349 -44.3264 92.4482 -46.8164L92.4463 -46.8174L90.7129 -46.9082C54.3262 -48.5912 18.7081 -35.9096 -8.44531 -11.5557C-37.0303 14.0029 -54.4167 49.7508 -56.9043 87.9697L-57.0107 89.791C-58.2989 113.813 -54.005 142.076 -42.9033 163.783C-37.1848 174.963 -28.8153 185.968 -20.3926 195.226C8.465 226.937 42.7258 240.173 84.667 242.23C85.1421 289.797 84.7639 337.418 84.6768 384.998C46.9504 384.917 10.0955 377.981 -24.6406 363.084L-24.6416 363.083L-26.3154 362.364C-97.0673 331.734 -152.954 274.473 -181.853 202.93C-209.496 132.075 -207.915 53.1455 -177.453 -16.5449L-177.451 -16.5488C-147.535 -86.389 -90.9913 -141.4 -20.3652 -169.377Z"
										stroke="white" stroke-opacity="0.1"></path>
									<path
										d="M228.492 98.3174L228.516 241.184L85.663 241.254L85.706 144.073C85.7042 128.812 85.4327 113.528 85.746 98.29L228.492 98.3174Z"
										stroke="white" stroke-opacity="0.1"></path>
									<path
										d="M372.401 242.25L372.441 384.994L229.428 384.997C230.355 369.412 229.587 353.391 229.583 337.813L229.664 242.22L372.401 242.25Z"
										stroke="white" stroke-opacity="0.1"></path>
								</svg>
							</div>
							<div class="footer-inner_link tf-grid-layout tf-col-2 lg-col-4">
								<a href="#" class="footer-logo logo-site">
									<!-- <img class=" ls-is-cached lazyloaded"
										src="asset/logo.png"
										data-src="asset/logo.png"
										alt="mayank - AI SaaS Platform"> -->
								</a>
								<div class="footer-col-block wow fadeInLeft animated animated"
									style="visibility: visible; animation-name: fadeInLeft;">
									<h5 class="footer-heading footer-heading-mobile font-2">Pages</h5>
									<div class="tf-collapse-content">
										<ul class="footer-menu-list">
											<li>
												<a href="{{asset('resume')}}" title="My Resume"
													class="link text-main-2">My Resume</a>
											</li>
										</ul>
									</div>
								</div>

							</div>
							<span class="br-line has-dot"></span>
							<div class="footer-inner_bottom">
								<p class="text-caption font-2">
									© 2026 Mayank Singh. All Rights Reserved.
								</p>

								<a href="#" class="text-caption font-2 link back-to-top">
									BACK TO TOP
								</a>
							</div>
						</div>
					</div>
				</div>
			</footer>


		</div>

		<!-- Mobile Menu -->
		<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
			<div class="canvas-header">
				<div class="logo-site">
					<!-- <img class="lazyload" src="asset/logo.png"
						data-src="asset/logo.png" alt="mayank - AI SaaS Platform"> -->
				</div>
				<div class="btn_group">
					<!-- <a href="#pricing" class="tf-btn style-2">
						Get started
					</a> -->
					<span class="icon-close-popup" data-bs-dismiss="offcanvas">
						<i class="icon-close"></i>
					</span>
				</div>
			</div>
			<span class="br-line"></span>
			<div class="canvas-body">
				<ul class="nav-ul-mb gap-0" id="wrapper-menu-navigation">
					<li class="nav-item  ">
						<a href="{{asset('resume')}}" class="nav-link">
							My Resume
						</a>
					</li>
				</ul>

			</div>
			<div class="canvas-footer"></div>
		</div>
		<!-- /Mobile Menu -->










		<div data-site-cookie-name="cookie_for_consent"></div>
		<div data-site-cookie-lifetime="7300"></div>
		<div data-site-cookie-domain="{{asset('/')}}"></div>
		<div data-site-session-secure=""></div>


	</body>






@endsection

@section('footer_scripts')
		<script data-pagespeed-no-defer="1" src="{{asset('asset/jquery-3.7.1.min.js')}}"></script>
		<script src="{{asset('asset/gsap.min.js')}}"></script>
		<script src="{{asset('asset/swiper-bundle.min.js')}}"></script>
		<script src="{{asset('asset/wow.min.js')}}"></script>
		<script src="{{asset('asset/odometer.min.js')}}"></script>
		<script src="{{asset('asset/lazysize.min.js')}}"></script>
		<script src="{{asset('asset/bootstrap.min.js')}}"></script>
		<script src="{{asset('asset/ScrollTrigger.min.js')}}"></script>
		<script src="{{asset('asset/SplitText.min.js')}}"></script>
		<script src="{{asset('asset/ScrollSmooth.min.js')}}"></script>
		<script src="{{asset('asset/infinityslide.min.js')}}"></script>
		<script src="{{asset('asset/carousel.min.js')}}"></script>
		<script src="{{asset('asset/main7ac4.min.js')}}"></script>
		<script src="{{asset('asset/theme7ac4.min.js')}}"></script>
		<script src="{{asset('asset/language-publicd1f1.min.js')}}"></script>
		<script src="{{asset('asset/newsletter98f3.min.js')}}"></script>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				function checkCookie(name) {
					return document.cookie.split(';').some((item) => item.trim().startsWith(name + '='));
				}

				setTimeout(function () {
					const cookieName = document.querySelector('div[data-site-cookie-name]').getAttribute(
						'data-site-cookie-name') || 'cookie_for_consent';
					if (!checkCookie(cookieName)) {
						const siteNotice = document.querySelector('.js-site-notice');
						if (siteNotice) {
							siteNotice.classList.add('site-notice--visible');
						}
					}
				}, 1000);
			});

			window.addEventListener('load', function () {
				if (typeof gtag !== 'undefined') {
					gtag('consent', 'default', {
						'ad_storage': 'denied',
						'analytics_storage': 'denied'
					});

					document.addEventListener('click', function (event) {
						if (event.target.classList.contains('js-site-notice-agree')) {
							const categories = document.querySelectorAll('.js-cookie-category:checked');
							const consents = {
								'ad_storage': 'denied',
								'analytics_storage': 'denied'
							};

							categories.forEach(function (category) {
								if (category.value === 'marketing') {
									consents.ad_storage = 'granted';
								}
								if (category.value === 'analytics') {
									consents.analytics_storage = 'granted';
								}
							});

							gtag('consent', 'update', consents);
						}
					});
				}

				window.botbleCookieConsent = (function () {
					const COOKIE_NAME = document.querySelector('div[data-site-cookie-name]').getAttribute(
						'data-site-cookie-name') || 'cookie_for_consent';
					const COOKIE_DOMAIN = document.querySelector('div[data-site-cookie-domain]').getAttribute(
						'data-site-cookie-domain') || window.location.hostname;
					const COOKIE_LIFETIME = parseInt(document.querySelector('div[data-site-cookie-lifetime]')
						.getAttribute('data-site-cookie-lifetime') || '36000', 10);
					const SESSION_SECURE = document.querySelector('div[data-site-session-secure]').getAttribute(
						'data-site-session-secure') || '';

					const cookieDialog = document.querySelector('.js-site-notice');
					const cookieCategories = document.querySelector('.site-notice__categories');
					const customizeButton = document.querySelector('.js-site-notice-customize');

					if (cookieDialog) {
						if (cookieCategories) {
							cookieCategories.style.display = 'none';
						}

						if (!cookieExists(COOKIE_NAME)) {
							setTimeout(function () {
								cookieDialog.classList.add('site-notice--visible');
							}, 800);
						}
					}

					function consentWithCookies() {
						const categories = {};
						document.querySelectorAll('.js-cookie-category:checked').forEach(function (checkbox) {
							categories[checkbox.value] = true;
						});
						setCookie(COOKIE_NAME, JSON.stringify(categories), COOKIE_LIFETIME);
						hideCookieDialog();
					}

					function savePreferences() {
						consentWithCookies();

						if (cookieCategories) {
							const slideUpAnimation = cookieCategories.animate(
								[{
									opacity: 1,
									height: cookieCategories.offsetHeight + 'px'
								},
								{
									opacity: 0,
									height: 0
								}
								], {
								duration: 300,
								easing: 'ease-out'
							}
							);

							slideUpAnimation.onfinish = function () {
								cookieCategories.style.display = 'none';
							};
						}

						if (customizeButton) {
							customizeButton.classList.remove('active');
						}
					}

					function rejectAllCookies() {
						if (cookieExists(COOKIE_NAME)) {
							const secure = window.location.protocol === 'https:' ? '; Secure' : '';
							document.cookie = COOKIE_NAME +
								'=; expires=Thu, 01 Jan 1970 00:00:00 UTC; domain=' +
								COOKIE_DOMAIN +
								'; path=/; SameSite=Lax' +
								secure +
								SESSION_SECURE;
						}

						if (typeof gtag !== 'undefined') {
							gtag('consent', 'update', {
								'ad_storage': 'denied',
								'analytics_storage': 'denied'
							});
						}

						hideCookieDialog();
					}

					function cookieExists(name) {
						const cookie = getCookie(name);
						return cookie !== null && cookie !== undefined;
					}

					function getCookie(name) {
						const value = `; ${document.cookie}`;
						const parts = value.split(`; ${name}=`);
						if (parts.length === 2) {
							return parts.pop().split(';').shift();
						}
						return null;
					}

					function hideCookieDialog() {
						if (cookieDialog) {
							cookieDialog.classList.remove('site-notice--visible');
							cookieDialog.style.display = 'none';
						}
					}

					function setCookie(name, value, expirationInDays) {
						const date = new Date();
						date.setTime(date.getTime() + expirationInDays * 24 * 60 * 60 * 1000);
						const secure = window.location.protocol === 'https:' ? ';Secure' : '';
						document.cookie =
							name +
							'=' +
							value +
							';expires=' +
							date.toUTCString() +
							';domain=' +
							COOKIE_DOMAIN +
							';path=/' +
							';SameSite=Lax' +
							secure +
							SESSION_SECURE;
					}

					function toggleCustomizeView() {
						if (!cookieCategories) return;

						if (cookieCategories.style.display === 'none') {
							cookieCategories.style.height = '0';
							cookieCategories.style.opacity = '0';
							cookieCategories.style.display = 'block';

							const height = cookieCategories.scrollHeight;
							const slideDownAnimation = cookieCategories.animate(
								[{
									opacity: 0,
									height: 0
								},
								{
									opacity: 1,
									height: height + 'px'
								}
								], {
								duration: 300,
								easing: 'ease-in'
							}
							);

							slideDownAnimation.onfinish = function () {
								cookieCategories.style.height = 'auto';
								cookieCategories.style.opacity = '1';
							};

							if (customizeButton) {
								customizeButton.classList.add('active');
							}
						} else {
							const slideUpAnimation = cookieCategories.animate(
								[{
									opacity: 1,
									height: cookieCategories.offsetHeight + 'px'
								},
								{
									opacity: 0,
									height: 0
								}
								], {
								duration: 300,
								easing: 'ease-out'
							}
							);

							slideUpAnimation.onfinish = function () {
								cookieCategories.style.display = 'none';
							};

							if (customizeButton) {
								customizeButton.classList.remove('active');
							}
						}
					}

					if (cookieExists(COOKIE_NAME)) {
						hideCookieDialog();
					}

					document.addEventListener('click', function (event) {
						if (event.target.classList.contains('js-site-notice-agree')) {
							consentWithCookies();
						} else if (event.target.classList.contains('js-site-notice-reject')) {
							rejectAllCookies();
						} else if (event.target.classList.contains('js-site-notice-customize')) {
							toggleCustomizeView();
						} else if (event.target.classList.contains('js-site-notice-save')) {
							savePreferences();
						}
					});

					return {
						consentWithCookies: consentWithCookies,
						rejectAllCookies: rejectAllCookies,
						hideCookieDialog: hideCookieDialog,
						savePreferences: savePreferences,
					};
				})();
			});
		</script>


		<script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'9cab06667c80ce66',t:'MTc3MDU1MjYzOA=='};var a=document.createElement('script');a.src='asset/maind41d.min.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();
		</script>
		<script defer
			src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
			integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
			data-cf-beacon='{"version":"2024.11.0","token":"5b1d398e9dad401ba2616b3d90f896ee","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
			crossorigin="anonymous">
		</script>
				<script>
			window.ThemeToastConfig = {
				position: "bottom",
				alignment: "right",
				offsetX: 15,
				offsetY: 15,
				timeout: 5000,
				successIcon: "",
				errorIcon: ""
			};
		</script>
		<script src="{{asset('asset/toaste209.min.js')}}"></script>
		<script src="{{asset('asset/announcemente209.min.js')}}"></script>
		<script>
			var lazyLoadShortcodeBlocks = function () {
				document.querySelectorAll('.shortcode-lazy-loading').forEach(function (element) {
					var name = element.getAttribute('data-name');
					var attributes = JSON.parse(element.getAttribute('data-attributes'));
					var shortcodeId = element.getAttribute('data-shortcode-id');

					const url = 'ajax/render-ui-blocks.html';
					const csrfToken = 'oYk3yjGzcM4WyRHSDNdHLe9wlkBNfwXoXnFJZycZ';

					const urlParams = new URLSearchParams(window.location.search);
					const refLang = urlParams.get('ref_lang');

					document.body.classList.add('lazy-loading-active');

					const requestBody = {
						name,
						shortcodeId,
						attributes: {
							...attributes
						}
					};

					if (refLang) {
						requestBody.ref_lang = refLang;
					}

					fetch(url, {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json',
							'Accept': 'application/json',
							'X-CSRF-TOKEN': csrfToken
						},
						body: JSON.stringify(requestBody)
					})
						.then(response => {
							if (!response.ok) {
								throw new Error('Network response was not ok');
							}
							return response.json();
						})
						.then(({
							error,
							data
						}) => {
							if (error) {
								return;
							}

							const tempDiv = document.createElement('div');
							tempDiv.innerHTML = data;
							const firstChild = tempDiv.firstElementChild;
							if (firstChild) {
								firstChild.classList.add('shortcode-lazy-loading-loaded');

								const shortcodeId = element.getAttribute('data-shortcode-id');
								if (shortcodeId && !firstChild.getAttribute('data-shortcode-id')) {
									firstChild.setAttribute('data-shortcode-id', shortcodeId);
									firstChild.setAttribute('data-shortcode-name', name);
								}

								data = tempDiv.innerHTML;
							}

							const scripts = tempDiv.querySelectorAll('script');

							element.outerHTML = data;

							scripts.forEach(function (oldScript) {
								const newScript = document.createElement('script');
								if (oldScript.src) {
									newScript.src = oldScript.src;
								} else {
									newScript.textContent = oldScript.textContent;
								}
								Array.from(oldScript.attributes).forEach(function (attr) {
									newScript.setAttribute(attr.name, attr.value);
								});
								document.body.appendChild(newScript);
							});

							document.dispatchEvent(new CustomEvent('shortcode.loaded', {
								detail: {
									name,
									attributes,
									html: data
								}
							}));

							if (typeof Theme !== 'undefined' && typeof Theme.lazyLoadInstance !== 'undefined') {
								Theme.lazyLoadInstance.update()
							}

							setTimeout(function () {
								const remainingLoaders = document.querySelectorAll(
									'.shortcode-lazy-loading');
								if (remainingLoaders.length === 0) {
									document.body.classList.remove('lazy-loading-active');
								}
							}, 100);
						})
						.catch(error => {
							console.error('Fetch error:', error);
							document.body.classList.remove('lazy-loading-active');
						});
				});
			};

			window.addEventListener('load', function () {
				lazyLoadShortcodeBlocks();
			});
		</script>
		<style>
			.site-notice {
				position: fixed;
				bottom: 0;
				left: 0;
				right: 0;
				padding: 8px;
				z-index: 99999;
				display: none;
				box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
			}

			.site-notice.site-notice--visible {
				display: block;
			}

			.site-notice.site-notice-full-width .site-notice-body {
				margin: 0 auto;
			}

			.site-notice.site-notice-minimal {
				padding: 0;
				right: unset;
				border-radius: 5px;
				bottom: 1em;
				flex-direction: column;
				left: 1em;
			}

			.site-notice.site-notice-minimal .site-notice-body {
				margin: 0 16px 16px;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
				max-width: 400px !important;
			}

			.site-notice.site-notice-minimal .site-notice__inner {
				flex-direction: column;
				align-items: stretch;
				gap: 12px;
				padding: 4px;
			}

			.site-notice.site-notice-minimal .site-notice__message {
				font-size: 13px;
				line-height: 1.5;
				padding: 12px 12px 0;
			}

			.site-notice.site-notice-minimal .site-notice__actions {
				margin: 0;
				padding: 8px 12px 12px;
				justify-content: flex-end;
				gap: 8px;
			}

			.site-notice.site-notice-minimal .site-notice__actions button {
				min-width: auto;
				padding: 6px 12px;
				font-size: 12px;
			}

			.site-notice.site-notice-minimal .site-notice__categories {
				padding: 12px;
				margin-top: 0;
			}

			.site-notice.site-notice-minimal .site-notice__categories .cookie-category {
				padding: 8px;
				margin-bottom: 8px;
			}

			.site-notice.site-notice-minimal .site-notice__categories .cookie-category:last-child {
				margin-bottom: 0;
			}

			.site-notice.site-notice-minimal .site-notice__categories .cookie-category__description {
				font-size: 12px;
			}

			.site-notice.site-notice-minimal .site-notice__categories .cookie-consent__save {
				padding: 8px 0 0;
				margin-top: 8px;
			}

			.site-notice.site-notice-minimal .site-notice__categories .cookie-consent__save .cookie-consent__save-button {
				font-size: 12px;
				padding: 6px 12px;
			}

			.site-notice .site-notice-body {
				padding: 8px 15px;
				border-radius: 4px;
			}

			.site-notice .site-notice__inner {
				display: flex;
				align-items: center;
				gap: 1rem;
				flex-wrap: wrap;
			}

			.site-notice .site-notice__message {
				margin: 0;
				line-height: 1.4;
				font-size: 14px;
				flex: 1;
				min-width: 200px;
			}

			.site-notice .site-notice__message a {
				color: inherit;
				text-decoration: underline;
			}

			.site-notice .site-notice__message a:hover {
				text-decoration: none;
			}

			.site-notice .site-notice__categories {
				display: none;
				margin-top: 1rem;
				padding-top: 1rem;
				border-top: 1px solid rgba(255, 255, 255, 0.1);
			}

			.site-notice .site-notice__categories .cookie-category {
				margin-bottom: 1rem;
				padding: 0.75rem;
				border: 1px solid rgba(255, 255, 255, 0.1);
				border-radius: 4px;
			}

			.site-notice .site-notice__categories .cookie-category__label {
				display: flex;
				align-items: center;
				gap: 0.5rem;
				margin-bottom: 0.5rem;
				cursor: pointer;
			}

			.site-notice .site-notice__categories .cookie-category__label input[type="checkbox"] {
				margin: 0;
				padding: 0;
				border: none;
				border-radius: 0;
				box-shadow: none;
				font-size: initial;
				height: initial;
				width: auto;
			}

			.site-notice .site-notice__categories .cookie-category__label input[type="checkbox"]:disabled {
				opacity: 0.5;
				cursor: not-allowed;
			}

			.site-notice .site-notice__categories .cookie-category__name {
				font-weight: bold;
			}

			.site-notice .site-notice__categories .cookie-category__description {
				margin: 0;
				font-size: 0.9em;
				opacity: 0.8;
			}

			.site-notice .site-notice__categories .cookie-consent__save {
				margin-top: 1rem;
				padding: .75rem;
			}

			[dir="rtl"] .site-notice .site-notice__categories .cookie-consent__save {
				text-align: left;
			}

			.site-notice .site-notice__categories .cookie-consent__save .cookie-consent__save-button {
				padding: 6px;
				border-radius: 4px;
				cursor: pointer;
				transition: all 0.3s ease;
				font-size: 13px;
				min-width: 100px;
				text-align: center;
				font-weight: bold;
			}

			.site-notice .site-notice__categories .cookie-consent__save .cookie-consent__save-button:hover {
				transform: translateY(-1px);
				box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			}

			.site-notice .site-notice__categories .cookie-consent__save .cookie-consent__save-button:active {
				transform: translateY(0);
			}

			.site-notice .site-notice__actions {
				display: flex;
				gap: 0.5rem;
				flex-wrap: wrap;
				justify-content: flex-end;
				margin-left: auto;
			}

			[dir="rtl"] .site-notice .site-notice__actions {
				margin-left: 0;
				margin-right: auto;
			}

			.site-notice .site-notice__actions button {
				padding: 6px;
				border-radius: 4px;
				cursor: pointer;
				transition: all 0.3s ease;
				font-size: 13px;
				min-width: 100px;
				text-align: center;
			}

			.site-notice .site-notice__actions button:hover {
				transform: translateY(-1px);
				box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			}

			.site-notice .site-notice__actions button:active {
				transform: translateY(0);
			}

			.site-notice .cookie-consent__actions .site-notice__reject {
				font-weight: 500;
				opacity: 0.95;
			}

			.site-notice .cookie-consent__actions .site-notice__reject:hover {
				opacity: 1;
			}

			.site-notice .cookie-consent__actions .site-notice__customize {
				font-weight: 500;
				opacity: 0.95;
			}

			.site-notice .cookie-consent__actions .site-notice__customize:hover {
				opacity: 1;
			}

			.site-notice .cookie-consent__actions .site-notice__customize.active {
				opacity: 0.8;
				transform: translateY(0);
				box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
			}

			.site-notice .cookie-consent__actions .site-notice__agree {
				font-weight: bold;
				position: relative;
			}

			.site-notice .cookie-consent__actions .site-notice__agree:before {
				content: '';
				position: absolute;
				inset: -2px;
				border-radius: 6px;
				background: rgba(255, 255, 255, 0.1);
				z-index: -1;
			}

			@media (max-width: 767px) {
				.site-notice .site-notice__inner {
					flex-direction: column;
					align-items: stretch;
					gap: 0.75rem;
				}

				[dir="rtl"] .site-notice .site-notice__inner {
					flex-direction: column;
				}

				.site-notice .site-notice__actions {
					justify-content: center;
					margin-left: 0;
					gap: 0.4rem;
					flex-wrap: wrap;
				}

				[dir="rtl"] .site-notice .site-notice__actions {
					margin-right: 0;
				}

				.site-notice .site-notice__actions button {
					flex: none;
					min-width: 70px;
					max-width: 100px;
					padding: 6px 10px;
					font-size: 11px;
					white-space: nowrap;
					overflow: hidden;
					text-overflow: ellipsis;
					border-radius: 3px;
				}
			}
		</style>
@endsection