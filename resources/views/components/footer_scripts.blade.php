<script type="text/javascript" src="{{ asset('js/wcf--global-core.minb6a4.min.js') }}" id="arolax-essential--global-core-js"></script>
<script type="text/javascript" src="{{ asset('js/wcf-addonsb6a4.min.js') }}" id="wcf--addons-js"></script>
<script type="text/javascript" src="{{ asset('js/gsap.minb6a4.min.js') }}" id="gsap-js"></script>
<script type="text/javascript" src="{{ asset('js/ScrollSmoother.minb6a4.min.js') }}" id="scrollSmoother-js"></script>
<script type="text/javascript" src="{{ asset('js/ScrollToPlugin.minb6a4.min.js') }}" id="scrollTo-js"></script>
<script type="text/javascript" src="{{ asset('js/ScrollTrigger.minb6a4.min.js') }}" id="scrollTrigger-js"></script>
<script type="text/javascript" src="{{ asset('js/SplitText.minb6a4.min.js') }}" id="split-text-js"></script>
<script type="text/javascript" defer src="{{ asset('js/jquery.magnific-popup.minb6a4.min.js') }}" id="magnific-popup-js"></script>
<script type="text/javascript" src="{{ asset('js/mixitup.minb6a4.min.js') }}" id="mixitup-js"></script>
<script type="text/javascript" src="{{ asset('js/wcf-addons-exb6a4.min.js') }}" id="wcf--addons-ex-js"></script>
<script type="text/javascript" src="{{ asset('js/wcf-addons-prob6a4.min.js') }}" id="wcf--addons-pro-js"></script>
<script type="text/javascript" defer src="{{ asset('js/bootstrap.bundle.min77ae.min.js') }}" id="bootstrap-js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.meanmenu.minb6a4.min.js') }}" id="meanmenu-js"></script>
<script type="text/javascript" src="{{ asset('js/script77ae.min.js') }}" id="arolax-script-js"></script>
<script type="text/javascript" src="{{ asset('js/nav-menub6a4.min.js') }}" id="wcf--nav-menu-js"></script>
<script type="text/javascript" src="{{ asset('js/sliderb6a4.min.js') }}" id="wcf--slider-js"></script>
<script type="text/javascript" src="{{ asset('js/arolax-tabsb6a4.min.js') }}" id="arolax-tabs-js"></script>
<script type="text/javascript" src="{{ asset('js/arolax-galleryb6a4.min.js') }}" id="arolax-gallery-js"></script>
<script type="text/javascript" src="{{ asset('js/arolax-testimonialb6a4.min.js') }}" id="arolax-testimonial-js"></script>
<script type="text/javascript" src="{{ asset('js/webpack.runtime.mind5d5.min.js') }}" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="{{ asset('js/frontend-modules.mind5d5.min.js') }}" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" defer src="{{ asset('js/waypoints.min05da.min.js') }}" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="{{ asset('js/core.minb37e.min.js') }}" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="{{ asset('js/frontend.mind5d5.min.js') }}" id="elementor-frontend-js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate.min5589.min.js') }}" id="elementor-frontend-js"></script>




<script type='text/javascript'>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>


<style id='wcf-preloader-inline-css' type='text/css'>
    .wcf-preloader {}

    .wcf-preloader {}
</style>


<style id='wcf-scroll-to-top-inline-css' type='text/css'>
    .wcf-scroll-to-top {
        bottom: 30px;
        right: 15px;
        width: 50px;
        height: 50px;
        z-index: 9999;
        background-color: #121212;
        border-radius: 5px;
        font-size: 16px;
        color: #FFFFFF;
        fill: #FFFFFF;
        mix-blend-mode: normal;
    }

    .wcf-scroll-to-top.scroll-to-circle {
        width: 50px;
        height: 50px;
    }
</style>

<style id='wcf-cursor-inline-css' type='text/css'>
    .wcf-cursor {
        width: px;
        height: px;
        border-color: #FFFFFF;
        mix-blend-mode: difference;
    }

    .wcf-cursor-follower {
        width: px;
        height: px;
        background-color: #FFFFFF;
        mix-blend-mode: difference;
    }
</style>

<script type="text/javascript" id="arolax-essential--global-core-js-extra">
    /* <![CDATA[ */
    var AROLAX_ADDONS_JS = {
        "ajaxUrl": "https:\/\/crowdytheme.com\/wp\/arolax\/web-design-agencey\/wp-admin\/admin-ajax.php",
        "_wpnonce": "621a210a66"
    };
    /* ]]> */
</script>

<script type="text/javascript" id="wcf--addons-js-extra">
    /* <![CDATA[ */
    var WCF_ADDONS_JS = {
        "ajaxUrl": "https:\/\/crowdytheme.com\/wp\/arolax\/web-design-agencey\/wp-admin\/admin-ajax.php",
        "_wpnonce": "b1873c848e",
        "post_id": "7595",
        "i18n": {
            "okay": "Okay",
            "cancel": "Cancel",
            "submit": "Submit",
            "success": "Success",
            "warning": "Warning"
        },
        "smoothScroller": null
    };
    /* ]]> */
</script>

<script type="text/javascript" id="arolax-script-js-extra">
    /* <![CDATA[ */
    var arolax_obj = {
        "ajax_url": "https:\/\/crowdytheme.com\/wp\/arolax\/web-design-agencey\/wp-admin\/admin-ajax.php",
        "cart_update_qty_change": ""
    };
    /* ]]> */
</script>
