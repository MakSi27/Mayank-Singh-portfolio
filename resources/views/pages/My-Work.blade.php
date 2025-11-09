@extends('master')



@section('head_scripts')
    <title>extra ordinary</title>
    <link rel="stylesheet" href="{{ asset('css/new-home.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/extra-ordinary.min.css') }}">
    <link rel='stylesheet' id='arolax-style-css' href="{{ asset('css/master77ae.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href="{{ asset('css/custom-frontend-lite.min4515.min.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-3-css' href="{{ asset('css/post-34515.min.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css' href="{{ asset('css/global4916.min.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-8265-css' href="{{ asset('css/post-8265dd4c.min.css') }}" type='text/css'
        media='all' />
        
        <link rel='stylesheet' id='elementor-post-7595-css' href='{{ asset('css/post-75958f33.min.css') }}'
        type='text/css' media='all' />

    <link rel="pingback" href="https://crowdytheme.com/wp/arolax/branding-agency/xmlrpc.php" />
    <link rel="alternate" type="application/rss+xml" title="extra ordinary &raquo; Feed"
        href="https://crowdytheme.com/wp/arolax/branding-agency/feed/" />
    <link rel="alternate" type="application/rss+xml" title="extra ordinary &raquo; Comments Feed"
        href="https://crowdytheme.com/wp/arolax/branding-agency/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/crowdytheme.com\/wp\/arolax\/branding-agency\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
@endsection

@section('main_content')

  


                    <div data-elementor-type="wp-page" data-elementor-id="8265" class="elementor elementor-8265">
                        <div class="elementor-element elementor-element-bc96a54 e-flex e-con-boxed e-con e-parent"
                            data-id="bc96a54" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-fc6d198 e-con-full e-flex e-con e-child"
                                    data-id="fc6d198" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-ebcc5c6 e-con-full e-flex e-con e-child"
                                        data-id="ebcc5c6" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-36b5d07 e-con-full e-flex e-con e-child"
                                            data-id="36b5d07" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-11c8ca9 elementor-widget__width-initial elementor-widget-mobile__width-initial wcf-t-animation-char elementor-widget elementor-widget-wcf--title"
                                                data-id="11c8ca9" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;char&quot;,&quot;text_delay&quot;:1,&quot;text_stagger&quot;:0.05,&quot;text_translate_x&quot;:60,&quot;text_duration&quot;:1,&quot;text_translate_y&quot;:0,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--title.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="wcf--title">We sharp brand Value</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5d295e7 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                data-id="5d295e7" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:1,&quot;ease&quot;:&quot;bounce&quot;,&quot;fade-offset&quot;:150,&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5}"
                                                data-widget_type="wcf--title.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="wcf--title">Pro</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e86fb49 e-con-full e-flex e-con e-child"
                                        data-id="e86fb49" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-d794597 e-con-full e-flex e-con e-child"
                                            data-id="d794597" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-3fbeb6d elementor-widget elementor-widget-arolax--video"
                                                data-id="3fbeb6d" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;in&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                data-widget_type="arolax--video.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        .arolax--video {
                                                            position: relative;
                                                            cursor: pointer;
                                                        }

                                                        .arolax--video svg {
                                                            width: 1em;
                                                            height: 1em;
                                                        }

                                                        .arolax--video .play-video {
                                                            width: 160px;
                                                            height: 160px;
                                                            display: inline-flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            border: 1px solid #fff;
                                                            color: #fff;
                                                            fill: #fff;
                                                            border-radius: 50%;
                                                            transition: all 0.5s;
                                                            font-size: 24px;
                                                            position: absolute;
                                                            left: 50%;
                                                            top: 50%;
                                                            transform: translate(-50%, -50%);
                                                            pointer-events: none;
                                                        }
                                                    </style>
                                                    <div class="arolax--video">
                                                        <video class="video">
                                                            <source
                                                                src="https://crowdytheme.com/assets/wp-content/uploads/2024/06/arolux-branding-agency-video.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                        <div class="play-video">
                                                            <i aria-hidden="true"
                                                                class="arolax-theme arolax-wcf-icon icon-wcf-play-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-617e56f e-con-full e-flex e-con e-child"
                                    data-id="617e56f" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-a8140e6 e-con-full e-flex e-con e-child"
                                        data-id="a8140e6" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-ca2aa28 wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                            data-id="ca2aa28" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="wcf--title">Who we are</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3a09cf5 e-con-full e-flex e-con e-child"
                                        data-id="3a09cf5" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-625ab51 wcf-t-animation-text_move elementor-widget elementor-widget-wcf--title"
                                            data-id="625ab51" data-element_type="widget"
                                            data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_rotation&quot;:-80,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="wcf--title">Arolax is a full-service brand agency for purpose
                                                    driven companies. We build brands that look good, sound good, and
                                                    do good.</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-bacabed elementor-widget elementor-widget-wcf--arolax-button"
                                            data-id="bacabed" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                            data-widget_type="wcf--arolax-button.default">
                                            <div class="elementor-widget-container">
                                                <div class="wc-btn-wrapper style-1">
                                                    <a href="https://crowdytheme.com/wp/arolax/branding-agency/about-us-dark/"
                                                        class="wc-btn-group">
                                                        <span class="wc-btn-play">
                                                            <i aria-hidden="true"
                                                                class="arolax-theme arolax-wcf-icon icon-wcf-arrow-up1"></i>
                                                        </span>
                                                        <span class="wc-btn-primary">
                                                            Get started </span>
                                                        <span class="wc-btn-play">
                                                            <i aria-hidden="true"
                                                                class="arolax-theme arolax-wcf-icon icon-wcf-arrow-up1"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c41142f e-flex e-con-boxed e-con e-parent"
                            data-id="c41142f" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-ba1662b e-con-full e-flex e-con e-child"
                                    data-id="ba1662b" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-7649025 e-con-full e-flex e-con e-child"
                                        data-id="7649025" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-a423401 wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                            data-id="a423401" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="wcf--title">Selected work</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-00fb563 e-con-full e-flex e-con e-child"
                                        data-id="00fb563" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-5b3e8a6 elementor-view-framed elementor-position-left elementor-vertical-align-bottom elementor-shape-circle elementor-widget elementor-widget-icon-box"
                                            data-id="5b3e8a6" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet"
                                                    href="{{asset('css/custom-widget-icon-box.mind286.min.css')}}">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <a href="#" class="elementor-icon elementor-animation-"
                                                            tabindex="-1">
                                                            <i aria-hidden="true"
                                                                class="arolax-theme arolax-wcf-icon icon-wcf-wcf-wcf-dribbble"></i>
                                                        </a>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <a href="#">
                                                                Follow </a>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            Dribbble </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-fdfec04 elementor-view-framed elementor-position-left elementor-vertical-align-bottom elementor-vertical-align-bottom elementor-shape-circle elementor-widget elementor-widget-icon-box"
                                            data-id="fdfec04" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <a href="#" class="elementor-icon elementor-animation-"
                                                            tabindex="-1">
                                                            <i aria-hidden="true"
                                                                class="arolax-theme arolax-wcf-icon icon-wcf-behance"></i>
                                                        </a>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <a href="#">
                                                                Follow </a>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            Behance </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-f0b1a5d e-con-full e-grid e-con e-child"
                                    data-id="f0b1a5d" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-50460a0 e-con-full e-flex e-con e-child"
                                        data-id="50460a0" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_tilt&quot;:&quot;yes&quot;,&quot;wcf_max_tilt&quot;:10,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;,&quot;wcf_tilt_perspective&quot;:1000,&quot;wcf_tilt_scale&quot;:1,&quot;wcf_tilt_speed&quot;:3000}">
                                        <div class="elementor-element elementor-element-32d2a3e e-con-full thumb e-flex e-con e-child"
                                            data-id="32d2a3e" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-a25f3f9 elementor-widget elementor-widget-image"
                                                data-id="a25f3f9" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;reveal&quot;,&quot;image-ease&quot;:&quot;power2.out&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.23.0 - 05-08-2024 */
                                                        .elementor-widget-image {
                                                            text-align: center
                                                        }

                                                        .elementor-widget-image a {
                                                            display: inline-block
                                                        }

                                                        .elementor-widget-image a img[src$=".svg"] {
                                                            width: 48px
                                                        }

                                                        .elementor-widget-image img {
                                                            vertical-align: middle;
                                                            display: inline-block
                                                        }
                                                    </style> <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/smart-t-shirt-artwork/">
                                                        <img fetchpriority="high" decoding="async" width="845"
                                                            height="650"
                                                            src="images/portfolio-img-1.webp"
                                                            class="attachment-full size-full wp-image-311"
                                                            alt=""
                                                            srcset="images/portfolio-img-1.webp 845w, images/portfolio-img-1-300x231.webp 300w, images/portfolio-img-1-768x591.webp 768w"
                                                            sizes="(max-width: 845px) 100vw, 845px" /> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8a3fe67 e-con-full e-flex e-con e-child"
                                            data-id="8a3fe67" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-5051c9d elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-wcf--arolax-button"
                                                data-id="5051c9d" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                data-widget_type="wcf--arolax-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wc-btn-wrapper style-3">
                                                        <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/smart-t-shirt-artwork/"
                                                            class="wc-btn-primary btn-text-flip">
                                                            <span data-text="Smart T-shirt Artwork">
                                                                Smart T-shirt Artwork </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-babc626 e-con-full e-flex e-con e-child"
                                                data-id="babc626" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-f1f7224 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="f1f7224" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/branding/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Branding">
                                                                    Branding </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-224116a elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="224116a" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/business/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Business">
                                                                    Business </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-44147e9 e-con-full e-flex e-con e-child"
                                        data-id="44147e9" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_tilt&quot;:&quot;yes&quot;,&quot;wcf_max_tilt&quot;:10,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;,&quot;wcf_tilt_perspective&quot;:1000,&quot;wcf_tilt_scale&quot;:1,&quot;wcf_tilt_speed&quot;:3000}">
                                        <div class="elementor-element elementor-element-fa8e84c e-con-full thumb e-flex e-con e-child"
                                            data-id="fa8e84c" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-fea60a8 elementor-widget elementor-widget-image"
                                                data-id="fea60a8" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;reveal&quot;,&quot;image-ease&quot;:&quot;power2.out&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/crafted-payment-get-way/">
                                                        <img decoding="async" width="845" height="650"
                                                            src="images/portfolio-img-2.webp"
                                                            class="attachment-full size-full wp-image-312"
                                                            alt=""
                                                            srcset="images/portfolio-img-2.webp 845w, images/portfolio-img-2-300x231.webp 300w, images/portfolio-img-2-768x591.webp 768w"
                                                            sizes="(max-width: 845px) 100vw, 845px" /> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-51afb6a e-con-full e-flex e-con e-child"
                                            data-id="51afb6a" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-d1eda6f elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-wcf--arolax-button"
                                                data-id="d1eda6f" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                data-widget_type="wcf--arolax-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wc-btn-wrapper style-3">
                                                        <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/crafted-payment-get-way/"
                                                            class="wc-btn-primary btn-text-flip">
                                                            <span data-text="Crafted Payment Get-way">
                                                                Crafted Payment Get-way </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7cbf43f e-con-full e-flex e-con e-child"
                                                data-id="7cbf43f" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-7d5ee9a elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="7d5ee9a" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/branding/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Branding">
                                                                    Branding </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d8c793b elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="d8c793b" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/business/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Business">
                                                                    Business </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-585a85f e-con-full e-flex e-con e-child"
                                        data-id="585a85f" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_tilt&quot;:&quot;yes&quot;,&quot;wcf_max_tilt&quot;:10,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;,&quot;wcf_tilt_perspective&quot;:1000,&quot;wcf_tilt_scale&quot;:1,&quot;wcf_tilt_speed&quot;:3000}">
                                        <div class="elementor-element elementor-element-7e468eb e-con-full thumb e-flex e-con e-child"
                                            data-id="7e468eb" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-d3c583e elementor-widget elementor-widget-image"
                                                data-id="d3c583e" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;reveal&quot;,&quot;image-ease&quot;:&quot;power2.out&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/wild-code-zem-boxes/">
                                                        <img decoding="async" width="845" height="650"
                                                            src="images/portfolio-img-3.webp"
                                                            class="attachment-full size-full wp-image-307"
                                                            alt=""
                                                            srcset="images/portfolio-img-3.webp 845w, images/portfolio-img-3-300x231.webp 300w, images/portfolio-img-3-768x591.webp 768w"
                                                            sizes="(max-width: 845px) 100vw, 845px" /> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a585001 e-con-full e-flex e-con e-child"
                                            data-id="a585001" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-5b7a245 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-wcf--arolax-button"
                                                data-id="5b7a245" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--arolax-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wc-btn-wrapper style-3">
                                                        <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/wild-code-zem-boxes/"
                                                            class="wc-btn-primary btn-text-flip">
                                                            <span data-text="Wild Code Zem Boxes">
                                                                Wild Code Zem Boxes </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c14e507 e-con-full e-flex e-con e-child"
                                                data-id="c14e507" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-0b26272 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="0b26272" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/branding/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Branding">
                                                                    Branding </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-45d1991 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="45d1991" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/business/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Business">
                                                                    Business </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b25de5a e-con-full e-flex e-con e-child"
                                        data-id="b25de5a" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_tilt&quot;:&quot;yes&quot;,&quot;wcf_max_tilt&quot;:10,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;,&quot;wcf_tilt_perspective&quot;:1000,&quot;wcf_tilt_scale&quot;:1,&quot;wcf_tilt_speed&quot;:3000}">
                                        <div class="elementor-element elementor-element-930c880 e-con-full thumb e-flex e-con e-child"
                                            data-id="930c880" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-73198ea elementor-widget elementor-widget-image"
                                                data-id="73198ea" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;reveal&quot;,&quot;image-ease&quot;:&quot;power2.out&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/floral-business-card/">
                                                        <img loading="lazy" decoding="async" width="845"
                                                            height="650"
                                                            src="images/portfolio-img-4.webp"
                                                            class="attachment-full size-full wp-image-308"
                                                            alt=""
                                                            srcset="images/portfolio-img-4.webp 845w, images/portfolio-img-4-300x231.webp 300w, images/portfolio-img-4-768x591.webp 768w"
                                                            sizes="(max-width: 845px) 100vw, 845px" /> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a008168 e-con-full e-flex e-con e-child"
                                            data-id="a008168" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-2c5881f elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-wcf--arolax-button"
                                                data-id="2c5881f" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--arolax-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wc-btn-wrapper style-3">
                                                        <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/floral-business-card/"
                                                            class="wc-btn-primary btn-text-flip">
                                                            <span data-text="Floral Business Card">
                                                                Floral Business Card </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a713865 e-con-full e-flex e-con e-child"
                                                data-id="a713865" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-cae5dc8 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="cae5dc8" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/branding/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Branding">
                                                                    Branding </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f74ad93 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="f74ad93" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/business/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Business">
                                                                    Business </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e4cee8b e-con-full e-flex e-con e-child"
                                        data-id="e4cee8b" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_tilt&quot;:&quot;yes&quot;,&quot;wcf_max_tilt&quot;:10,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;,&quot;wcf_tilt_perspective&quot;:1000,&quot;wcf_tilt_scale&quot;:1,&quot;wcf_tilt_speed&quot;:3000}">
                                        <div class="elementor-element elementor-element-1288bf7 e-con-full thumb e-flex e-con e-child"
                                            data-id="1288bf7" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-21476fa elementor-widget elementor-widget-image"
                                                data-id="21476fa" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;reveal&quot;,&quot;image-ease&quot;:&quot;power2.out&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/colyfate-font-design/">
                                                        <img loading="lazy" decoding="async" width="845"
                                                            height="650"
                                                            src="images/portfolio-img-5.webp"
                                                            class="attachment-full size-full wp-image-309"
                                                            alt=""
                                                            srcset="images/portfolio-img-5.webp 845w, images/portfolio-img-5-300x231.webp 300w, images/portfolio-img-5-768x591.webp 768w"
                                                            sizes="(max-width: 845px) 100vw, 845px" /> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ee8815b e-con-full e-flex e-con e-child"
                                            data-id="ee8815b" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-8663b29 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-wcf--arolax-button"
                                                data-id="8663b29" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--arolax-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wc-btn-wrapper style-3">
                                                        <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/colyfate-font-design/"
                                                            class="wc-btn-primary btn-text-flip">
                                                            <span data-text="Colyfate Font Design">
                                                                Colyfate Font Design </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a161499 e-con-full e-flex e-con e-child"
                                                data-id="a161499" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-1c2b1e7 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="1c2b1e7" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/branding/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Branding">
                                                                    Branding </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-085c176 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="085c176" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/business/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Business">
                                                                    Business </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0365d67 e-con-full e-flex e-con e-child"
                                        data-id="0365d67" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_tilt&quot;:&quot;yes&quot;,&quot;wcf_max_tilt&quot;:10,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;,&quot;wcf_tilt_perspective&quot;:1000,&quot;wcf_tilt_scale&quot;:1,&quot;wcf_tilt_speed&quot;:3000}">
                                        <div class="elementor-element elementor-element-29caac3 e-con-full thumb e-flex e-con e-child"
                                            data-id="29caac3" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-d80343e elementor-widget elementor-widget-image"
                                                data-id="d80343e" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;reveal&quot;,&quot;image-ease&quot;:&quot;power2.out&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/watch-mockup-design/">
                                                        <img loading="lazy" decoding="async" width="845"
                                                            height="650"
                                                            src="images/portfolio-img-6.webp"
                                                            class="attachment-full size-full wp-image-310"
                                                            alt=""
                                                            srcset="images/portfolio-img-6.webp 845w, images/portfolio-img-6-300x231.webp 300w, images/portfolio-img-6-768x591.webp 768w"
                                                            sizes="(max-width: 845px) 100vw, 845px" /> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b665508 e-con-full e-flex e-con e-child"
                                            data-id="b665508" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-72b1f83 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-wcf--arolax-button"
                                                data-id="72b1f83" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--arolax-button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wc-btn-wrapper style-3">
                                                        <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolios/watch-mockup-design/"
                                                            class="wc-btn-primary btn-text-flip">
                                                            <span data-text="Watch Mockup Design">
                                                                Watch Mockup Design </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c4ce1e0 e-con-full e-flex e-con e-child"
                                                data-id="c4ce1e0" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-65b13ba elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="65b13ba" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/branding/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Branding">
                                                                    Branding </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9c04807 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="9c04807" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-3">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/portfolio-category/business/"
                                                                class="wc-btn-primary btn-text-flip">
                                                                <span data-text="Business">
                                                                    Business </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a4afb3f e-con-full e-flex e-con e-child"
                                    data-id="a4afb3f" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-75a02a6 elementor-widget__width-initial elementor-widget-tablet__width-inherit wcf-t-animation-text_move elementor-widget elementor-widget-wcf--text"
                                        data-id="75a02a6" data-element_type="widget"
                                        data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--text.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--text">We are delivering brands with high objectives the
                                                strategy and the creativity it takes to have that impact, by the
                                                professional team with any creativity.</div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-475be1b elementor-widget elementor-widget-wcf--arolax-button"
                                        data-id="475be1b" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                        data-widget_type="wcf--arolax-button.default">
                                        <div class="elementor-widget-container">
                                            <div class="wc-btn-wrapper style-1">
                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/work-dark/"
                                                    class="wc-btn-group">
                                                    <span class="wc-btn-play">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-eye"
                                                            viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="wc-btn-primary">
                                                        View all works </span>
                                                    <span class="wc-btn-play">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-eye"
                                                            viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                            </path>
                                                        </svg> </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3697e32 e-flex e-con-boxed e-con e-parent"
                            data-id="3697e32" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-0acaeb9 e-con-full e-flex e-con e-child"
                                    data-id="0acaeb9" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-45cebb4 wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="45cebb4" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">Designing great products is so hard. But we've done
                                                more than 150 of them in this year.</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-8ef6735 e-con-full e-flex e-con e-child"
                                    data-id="8ef6735" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div data-speed="0.9"
                                        class="elementor-element elementor-element-bd9daa4 elementor-widget-tablet__width-initial elementor-widget elementor-widget-wcf--image"
                                        data-id="bd9daa4" data-element_type="widget"
                                        data-settings="{&quot;wcf-image-animation&quot;:&quot;reveal&quot;,&quot;image-ease&quot;:&quot;power2.out&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--image.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--image">
                                                <img loading="lazy" decoding="async" width="266" height="515"
                                                    src="https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/line-img-light.webp"
                                                    class="attachment-full size-full wp-image-8300" alt=""
                                                    srcset="https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/line-img-light.webp 266w, https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/line-img-light-155x300.webp 155w"
                                                    sizes="(max-width: 266px) 100vw, 266px" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e5b3b66 e-con-full e-flex e-con e-child"
                                        data-id="e5b3b66" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-49db846 wcf-t-animation-char elementor-widget elementor-widget-wcf--title"
                                            data-id="49db846" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;char&quot;,&quot;text_duration&quot;:1.5,&quot;text_stagger&quot;:0.15,&quot;text_translate_x&quot;:-250,&quot;text_delay&quot;:0.15,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_translate_y&quot;:0,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="wcf--title">150</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cdd0b90 e-flex e-con-boxed e-con e-parent"
                            data-id="cdd0b90" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-ce52b1b e-con-full e-flex e-con e-child"
                                    data-id="ce52b1b" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-9c24b93 wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="9c24b93" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">We solve your brand problem in a different method</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4bafd43 e-con-full e-grid e-con e-child"
                                    data-id="4bafd43" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div data-wcf-wrapper-link="{&quot;href&quot;:&quot;#&quot;}"
                                        class="elementor-element elementor-element-2d41d2e e-con-full e-flex e-con e-child"
                                        data-id="2d41d2e" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-a473323 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="a473323" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">01</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3ecf9c9 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                            data-id="3ecf9c9" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon elementor-animation-">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="60" viewBox="0 0 60 60" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M31.9162 2.9388C31.1796 2.56688 30.2839 2.56688 29.5472 2.9388L11.2414 12.1811C9.56866 13.0256 9.56866 15.2118 11.2414 16.0563L29.5472 25.2986C30.2839 25.6705 31.1796 25.6705 31.9162 25.2986L50.2221 16.0563C51.8948 15.2118 51.8948 13.0256 50.2221 12.1811L31.9162 2.9388ZM28.1258 0.613661C29.7464 -0.204553 31.717 -0.204554 33.3376 0.613661L51.6434 9.85594C55.3234 11.7139 55.3234 16.5235 51.6435 18.3814L33.3376 27.6237C31.717 28.4419 29.7464 28.4419 28.1258 27.6237L9.81997 18.3814C6.14002 16.5235 6.14001 11.7139 9.81997 9.85594L28.1258 0.613661ZM6.50704 24.2564C4.88265 23.4749 2.92683 24.5451 2.92683 26.2154V46.5981C2.92683 47.4071 3.41177 48.1518 4.19205 48.5411L21.2652 57.0596C22.8907 57.8706 24.878 56.8018 24.878 55.1167V34.4297C24.878 33.6086 24.3787 32.8549 23.5802 32.4707L6.50704 24.2564ZM0 26.2154C0 22.5407 4.30281 20.1863 7.87647 21.9057L24.9496 30.12C26.7062 30.9651 27.8049 32.6234 27.8049 34.4297V55.1167C27.8049 58.824 23.4327 61.1754 19.8567 59.3912L2.78349 50.8727C1.06686 50.0162 0 48.3778 0 46.5981V26.2154ZM57.0732 26.2154C57.0732 24.5451 55.1173 23.4749 53.493 24.2564L36.4198 32.4707C35.6213 32.8549 35.122 33.6086 35.122 34.4297V55.1167C35.122 56.8018 37.1093 57.8706 38.7348 57.0596L55.8079 48.5411C56.5882 48.1518 57.0732 47.4071 57.0732 46.5981V26.2154ZM52.1235 21.9057C55.6972 20.1863 60 22.5407 60 26.2154V46.5981C60 48.3778 58.9331 50.0162 57.2165 50.8727L40.1433 59.3912C36.5673 61.1754 32.1951 58.824 32.1951 55.1167V34.4297C32.1951 32.6234 33.2938 30.9651 35.0504 30.12L52.1235 21.9057Z"
                                                                    fill="white"></path>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Brand Strategy </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            We closely collaborate with our clients to understand the needs
                                                            and goals of the key to design </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-wcf-wrapper-link="{&quot;href&quot;:&quot;#&quot;}"
                                        class="elementor-element elementor-element-5248478 e-con-full e-flex e-con e-child"
                                        data-id="5248478" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.25,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-421ee5d wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="421ee5d" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">02</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2041f66 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                            data-id="2041f66" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon elementor-animation-">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="60" viewBox="0 0 60 60" fill="none">
                                                                <path
                                                                    d="M38.0488 22.2261C38.0488 22.9319 37.4872 23.504 36.7944 23.504H18.8153C18.1226 23.504 17.561 22.9319 17.561 22.2261C17.561 21.5203 18.1226 20.9482 18.8153 20.9482H36.7944C37.4872 20.9482 38.0488 21.5203 38.0488 22.2261Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M18.8153 39.1587C18.1226 39.1587 17.561 38.5865 17.561 37.8807C17.561 37.175 18.1226 36.6028 18.8153 36.6028H26.5505C27.2433 36.6028 27.8049 37.175 27.8049 37.8807C27.8049 38.5865 27.2433 39.1587 26.5505 39.1587H18.8153Z"
                                                                    fill="white"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M51.9512 19.6047C51.9512 16.2805 50.2355 13.2012 47.434 11.4972L30.7264 1.33498C27.8 -0.445009 24.1507 -0.444991 21.2243 1.33502L4.51718 11.4972C1.71566 13.2012 1.03467e-06 16.2805 8.92043e-07 19.6046L0 40.3957C-1.42625e-07 43.7199 1.71572 46.7993 4.5173 48.5033L21.2244 58.6651C24.1508 60.445 27.7999 60.445 30.7263 58.6651L47.4338 48.5033C50.2355 46.7993 51.9512 43.7199 51.9512 40.3957V31.7041H58.7456C59.4384 31.7041 60 31.1319 60 30.4261C60 29.7204 59.4384 29.1482 58.7456 29.1482H51.9512V19.6047ZM49.0244 29.1482V19.6047C49.0244 17.3302 47.8505 15.2233 45.9336 14.0574L29.2261 3.89524C27.2238 2.67736 24.7269 2.67737 22.7246 3.89527L6.01753 14.0574C4.1007 15.2233 2.92683 17.3302 2.92683 19.6046L2.92683 40.3957C2.92683 42.6702 4.10074 44.7771 6.01762 45.943L22.7247 56.1048C24.727 57.3226 27.2238 57.3226 29.226 56.1048L45.9336 45.943C47.8505 44.7771 49.0244 42.6702 49.0244 40.3957V31.7041H18.8153C18.1226 31.7041 17.561 31.1319 17.561 30.4261C17.561 29.7204 18.1226 29.1482 18.8153 29.1482H49.0244Z"
                                                                    fill="white"></path>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Brand Identity </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            We closely collaborate with our clients to understand the needs
                                                            and goals of the key to design </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-wcf-wrapper-link="{&quot;href&quot;:&quot;#&quot;}"
                                        class="elementor-element elementor-element-112bc73 e-con-full e-flex e-con e-child"
                                        data-id="112bc73" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.35,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-a46ac83 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="a46ac83" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">03</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ad120a3 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                            data-id="ad120a3" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon elementor-animation-">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="60" viewBox="0 0 60 60" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M25.3473 6.10168V17.2881C25.3473 19.0011 23.9196 20.3898 22.1584 20.3898C20.3972 20.3898 18.9694 19.0011 18.9694 17.2881V6.10168C18.9694 4.38866 20.3972 2.99999 22.1584 2.99999C23.9196 2.99999 25.3473 4.38866 25.3473 6.10168ZM15.8851 6.10168C15.8851 2.73181 18.6937 0 22.1584 0C25.6231 0 28.4317 2.73181 28.4317 6.10168V17.2881C28.4317 20.6579 25.6231 23.3898 22.1584 23.3898C18.6937 23.3898 15.8851 20.6579 15.8851 17.2881V6.10168ZM46.4975 9.45896C43.5289 9.45896 41.1223 11.7996 41.1223 14.687C41.1223 17.5744 43.5289 19.9151 46.4975 19.9151C49.4661 19.9151 51.8726 17.5744 51.8726 14.687C51.8726 11.7996 49.4661 9.45896 46.4975 9.45896ZM54.957 14.687C54.957 10.1428 51.1695 6.45897 46.4975 6.45896C41.8254 6.45896 38.038 10.1428 38.038 14.687C38.038 19.2312 41.8254 22.915 46.4975 22.915C51.1695 22.915 54.957 19.2312 54.957 14.687ZM49.6107 48.9609C53.0861 45.5233 55.5505 41.2641 56.8066 36.6374C57.0921 35.5859 56.8004 34.6443 56.0752 33.8798C55.31 33.0731 54.0598 32.4916 52.6189 32.4916H30L7.38115 32.4916C5.94022 32.4916 4.68996 33.0731 3.92481 33.8798C3.19961 34.6443 2.90792 35.5859 3.19341 36.6374C4.44955 41.2641 6.91392 45.5233 10.3893 48.9609C15.5994 54.1143 22.6546 57 30 57C37.3454 57 44.4006 54.1143 49.6107 48.9609ZM59.7888 37.4034C60.9486 33.1316 57.1614 29.4916 52.6189 29.4916H30L7.38115 29.4916C2.83859 29.4916 -0.948558 33.1316 0.211248 37.4034C1.60208 42.5261 4.33237 47.2486 8.19008 51.0643C13.9744 56.7857 21.8197 60 30 60C38.1803 60 46.0256 56.7857 51.8099 51.0643C55.6676 47.2486 58.3979 42.5261 59.7888 37.4034Z"
                                                                    fill="white"></path>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Brand Guidelines </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            We closely collaborate with our clients to understand the needs
                                                            and goals of the key to design </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-wcf-wrapper-link="{&quot;href&quot;:&quot;#&quot;}"
                                        class="elementor-element elementor-element-0bdd2a7 e-con-full e-flex e-con e-child"
                                        data-id="0bdd2a7" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.45,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-dfb6fe9 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="dfb6fe9" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">04</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-562a3f0 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                            data-id="562a3f0" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon elementor-animation-">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="60" viewBox="0 0 60 60" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M40.1426 22.9837V37.0149H48.8252C54.9856 37.0149 60 42.1716 60 48.5068C60 54.8421 54.9842 60 48.8252 60C42.6649 60 37.6492 54.842 37.6492 48.5068V39.5805H22.3521V48.5081C22.3521 54.8421 17.3376 60 11.1773 60H11.1748C5.01454 60 0 54.8421 0 48.5081C0 42.1747 5.01661 37.0163 11.1773 37.0163H19.8586V22.9851H11.1773C5.01545 22.9851 0 17.8268 0 11.4932C0 5.15827 5.01673 0 11.1773 0C17.3375 0 22.3521 5.15776 22.3521 11.4932V20.4208H37.6492V11.4919C37.6492 5.15695 42.6646 0 48.8252 0C54.9858 0 60 5.15564 60 11.4906C60 17.8259 54.9842 22.9837 48.8252 22.9837H40.1426ZM40.1426 11.4919V20.4208H48.8252C53.6146 20.4208 57.5065 16.4162 57.5065 11.4919C57.5065 6.56707 53.6141 2.56424 48.8252 2.56424C44.0353 2.56424 40.1426 6.56681 40.1426 11.4919ZM11.1773 20.4208H19.8599V11.4932C19.8599 6.56732 15.9678 2.56424 11.1786 2.56424C6.38892 2.56424 2.49477 6.56656 2.49477 11.4932C2.49477 16.4176 6.38986 20.4191 11.1773 20.4208ZM19.8586 48.5068V39.5792H11.1773C6.38788 39.5792 2.49349 43.5812 2.49349 48.5068C2.49349 53.4316 6.38587 57.4344 11.1748 57.4344C15.9643 57.4344 19.8586 53.4324 19.8586 48.5068ZM37.6492 22.9837H22.3521V37.0149H37.6492V22.9837ZM48.8252 39.5792H40.1426V48.5055C40.1426 53.4316 44.035 57.4344 48.8252 57.4344C53.6144 57.4344 57.5065 53.4314 57.5065 48.5055C57.5065 43.5818 53.6139 39.5792 48.8252 39.5792Z"
                                                                    fill="white"></path>
                                                            </svg> </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                Brand Support </span>
                                                        </h3>

                                                        <p class="elementor-icon-box-description">
                                                            We closely collaborate with our clients to understand the needs
                                                            and goals of the key to design </p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-30a4e77 e-con-full e-flex e-con e-child"
                                    data-id="30a4e77" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-b2bd9a8 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                        data-id="b2bd9a8" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--text.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--text">Save your precious time for finding a solution.</div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ec5c097 elementor-widget elementor-widget-wcf--arolax-button"
                                        data-id="ec5c097" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--arolax-button.default">
                                        <div class="elementor-widget-container">
                                            <div class="wc-btn-wrapper style-3">
                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/contact-us-dark/"
                                                    class="wc-btn-primary btn-text-flip">
                                                    <span data-text="Contact us now">
                                                        Contact us now </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8afebd6 e-flex e-con-boxed e-con e-parent"
                            data-id="8afebd6" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-41d25d8 e-con-full e-flex e-con e-child"
                                    data-id="41d25d8" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-ded1be2 elementor-widget__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="ded1be2" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">Our standard design thinking process</h2>
                                        </div>
                                    </div>
                                    <div data-speed="0.8"
                                        class="elementor-element elementor-element-d31892c elementor-widget__width-initial elementor-widget elementor-widget-wcf--image"
                                        data-id="d31892c" data-element_type="widget"
                                        data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--image.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--image">
                                                <img loading="lazy" decoding="async" width="372" height="319"
                                                    src="images/floating-img.webp"
                                                    class="attachment-full size-full wp-image-654" alt=""
                                                    srcset="images/floating-img.webp 372w, images/floating-img-300x257.webp 300w"
                                                    sizes="(max-width: 372px) 100vw, 372px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-dbc4f37 e-con-full e-flex e-con e-child"
                                    data-id="dbc4f37" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-c0e7674 elementor-widget-laptop__width-initial elementor-hidden-mobile elementor-widget elementor-widget-wcf--image"
                                        data-id="c0e7674" data-element_type="widget"
                                        data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--image.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--image">
                                                <img loading="lazy" decoding="async" width="58" height="200"
                                                    src="https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/left-half-circle-dark.webp"
                                                    class="attachment-full size-full wp-image-8310" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-650f396 e-con-full e-flex e-con e-child"
                                        data-id="650f396" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-offset&quot;:150,&quot;ease&quot;:&quot;bounce&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-99d641e wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="99d641e" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">Step &#8211; 01</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ad43d0a e-con-full e-flex e-con e-child"
                                            data-id="ad43d0a" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-e62603a elementor-widget__width-initial elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="e62603a" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon elementor-animation-grow-rotate">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="38" viewBox="0 0 40 38">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M36.0002 0H11.335C9.12939 0 7.33522 1.80194 7.33522 4.01709V6.65494C7.34751 7.53593 8.66006 7.52804 8.66848 6.6549V4.01709C8.66848 2.54043 9.8647 1.33903 11.335 1.33903H36.0002C37.4708 1.33903 38.6667 2.54043 38.6667 4.01709V24.1026C38.6667 25.5795 37.4708 26.7806 36.0002 26.7806H29.2942C28.9258 26.7806 28.6276 27.0801 28.6276 27.4501C28.6276 27.8202 28.9258 28.1196 29.2942 28.1196H36.0002C38.2058 28.1196 40 26.3177 40 24.1026V4.01709C40 1.80194 38.2058 0 36.0002 0ZM12.5107 19.8481C12.2721 20.1317 11.8508 20.1651 11.571 19.9272C11.2901 19.6886 11.2549 19.2656 11.4925 18.9838L17.1611 12.2536C15.898 10.5828 17.2252 7.96901 19.3345 8.03418C21.1745 7.99528 22.5264 9.99619 21.8101 11.6926L25.5371 14.414C26.0653 14.0303 26.8625 13.9477 27.4639 14.2281L34.4655 6.69515H32.0005C31.1226 6.68008 31.1261 5.37059 32.0005 5.35612H36.0002C36.3626 5.37186 36.6523 5.65704 36.6669 6.02564V10.0427C36.6523 10.9244 35.3473 10.9206 35.3336 10.0427V7.72447L28.4342 15.1473C29.1519 16.4221 28.1297 18.1151 26.6674 18.0769C25.3603 18.0991 24.3479 16.7513 24.7589 15.5007L21.0197 12.7705C20.2818 13.4217 19.0683 13.5868 18.1814 13.1161L12.5107 19.8481ZM26.6674 15.3988C27.5435 15.4145 27.5434 16.7223 26.6674 16.7379C25.7914 16.7222 25.7915 15.4143 26.6674 15.3988ZM20.4139 11.492C21.057 10.6589 20.3942 9.3401 19.3345 9.3732C18.5992 9.3732 18.0013 9.97374 18.0013 10.7122C17.978 11.9921 19.6988 12.538 20.4139 11.492ZM12.0015 31.4672C13.9807 31.4672 15.8857 30.9859 17.5883 30.0835L20.6579 35.3791C22.2694 38.3531 26.6533 38.911 28.9719 36.4597C31.419 34.1333 30.8526 29.733 27.8957 28.1098C27.8958 28.1098 22.6097 25.0191 22.6097 25.0191C24.1183 22.1195 24.4327 18.6572 23.3466 15.4878C23.161 14.7423 22.0285 14.8825 22.0342 15.6601C24.5101 22.6093 19.429 30.1807 12.0014 30.1281C6.27054 30.2468 1.21655 25.1724 1.33556 19.4159C1.22558 12.1001 8.83509 6.77619 15.6407 9.34654C16.465 9.63798 16.9153 8.39854 16.095 8.08781C8.44089 5.19635 -0.123027 11.186 0.00229271 19.4161C-0.13084 25.8913 5.5534 31.6014 12.0015 31.4672ZM20.4857 27.9366C21.0284 27.3916 21.506 26.7969 21.9271 26.1694L27.2246 29.2671C29.4368 30.4809 29.8598 33.7729 28.0292 35.5131C26.2957 37.3459 23.0141 36.9284 21.8102 34.7055C21.8102 34.7056 18.7302 29.3921 18.7302 29.3921C19.3525 28.9667 19.9417 28.483 20.4857 27.9366ZM15.1913 12.7811C15.9839 13.1519 16.5548 11.9706 15.7713 11.5754C12.4591 9.96798 8.48044 10.644 5.8696 13.2587C0.427404 18.7155 4.38022 28.1713 12.0012 28.1141C18.9178 28.1904 23.177 20.0912 19.0777 14.3884C18.5683 13.6772 17.4902 14.4462 17.9907 15.1633C20.0612 18.0947 19.7243 22.0748 17.1906 24.626C14.3287 27.4931 9.67341 27.4924 6.81355 24.6274C1.09639 18.6639 7.71686 9.31342 15.1913 12.7811ZM29.3337 24.7721C28.4556 24.7574 28.4595 23.4469 29.3336 23.433H36.6665C37.5446 23.4477 37.5406 24.7582 36.6665 24.7721H29.3337ZM36.6666 20.755H32.6668C31.7917 20.7692 31.7897 22.0794 32.6669 22.094H36.6666C37.5418 22.0798 37.5438 20.7695 36.6666 20.755ZM16.001 3.34758C16.8785 3.36257 16.8757 4.67214 16.001 4.68661H10.6681C9.79058 4.67157 9.79339 3.36204 10.668 3.34758H16.001Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e39bcb5 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="e39bcb5" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.23.0 - 05-08-2024 */
                                                        .elementor-heading-title {
                                                            padding: 0;
                                                            margin: 0;
                                                            line-height: 1
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                            color: inherit;
                                                            font-size: inherit;
                                                            line-height: inherit
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                            font-size: 15px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                            font-size: 19px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                            font-size: 29px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                            font-size: 39px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                            font-size: 59px
                                                        }
                                                    </style>
                                                    <h3 class="elementor-heading-title elementor-size-default">User
                                                        Research</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4256028 e-con-full e-flex e-con e-child"
                                        data-id="4256028" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;ease&quot;:&quot;bounce&quot;,&quot;fade-offset&quot;:150,&quot;delay&quot;:0.3,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-b39fe62 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="b39fe62" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">Step &#8211; 02</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-01b6cfe e-con-full e-flex e-con e-child"
                                            data-id="01b6cfe" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-7228318 elementor-widget__width-initial elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="7228318" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon elementor-animation-grow-rotate">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="40" viewBox="0 0 35 40">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M17.2414 4.13793C17.0585 4.13793 16.8831 4.06527 16.7537 3.93594C16.6244 3.8066 16.5517 3.63118 16.5517 3.44828V0.689655C16.5517 0.506747 16.6244 0.331331 16.7537 0.201995C16.8831 0.0726599 17.0585 0 17.2414 0C17.4243 0 17.5997 0.0726599 17.729 0.201995C17.8584 0.331331 17.931 0.506747 17.931 0.689655V3.44828C17.931 3.63118 17.8584 3.8066 17.729 3.93594C17.5997 4.06527 17.4243 4.13793 17.2414 4.13793ZM10.3456 5.98668C10.2245 5.9868 10.1054 5.95499 10.0004 5.89445C9.89547 5.83391 9.8083 5.74679 9.74772 5.64185L8.36841 3.25288C8.32241 3.17442 8.29239 3.08764 8.28006 2.99752C8.26774 2.90741 8.27337 2.81575 8.29662 2.72782C8.31986 2.63989 8.36027 2.55742 8.41552 2.48517C8.47077 2.41293 8.53976 2.35232 8.61853 2.30684C8.69729 2.26136 8.78428 2.23192 8.87447 2.22019C8.96466 2.20847 9.05628 2.2147 9.14406 2.23853C9.23183 2.26236 9.31403 2.30332 9.38591 2.35904C9.45779 2.41477 9.51794 2.48416 9.56289 2.56323L10.9422 4.95219C11.0027 5.05698 11.0346 5.17585 11.0346 5.29685C11.0346 5.41785 11.0028 5.53672 10.9424 5.64154C10.8819 5.74636 10.795 5.83344 10.6902 5.89402C10.5855 5.9546 10.4666 5.98655 10.3456 5.98668ZM4.95035 10.9419C5.05509 11.0027 5.17408 11.0346 5.29518 11.0344C5.44699 11.0343 5.59456 10.9842 5.71499 10.8918C5.83543 10.7994 5.92201 10.6698 5.9613 10.5232C6.0006 10.3766 5.99041 10.2211 5.93231 10.0808C5.87422 9.94054 5.77147 9.82337 5.64001 9.74746L3.25035 8.36814C3.09203 8.27813 2.90454 8.2544 2.72879 8.30211C2.55304 8.34983 2.40329 8.46512 2.31223 8.62284C2.22117 8.78055 2.19619 8.96789 2.24274 9.14395C2.28929 9.32002 2.40359 9.47052 2.5607 9.56263L4.95035 10.9419ZM3.44828 17.931H0.689655C0.506747 17.931 0.331331 17.8584 0.201995 17.729C0.07266 17.5997 0 17.4243 0 17.2414C0 17.0585 0.07266 16.8831 0.201995 16.7537C0.331331 16.6244 0.506747 16.5517 0.689655 16.5517H3.44828C3.63118 16.5517 3.8066 16.6244 3.93594 16.7537C4.06527 16.8831 4.13793 17.0585 4.13793 17.2414C4.13793 17.4243 4.06527 17.5997 3.93594 17.729C3.8066 17.8584 3.63118 17.931 3.44828 17.931ZM2.48748 26.0645C2.60792 26.1569 2.75549 26.207 2.9073 26.207C3.02839 26.2073 3.14739 26.1754 3.25212 26.1146L5.64178 24.7353C5.72085 24.6904 5.79024 24.6302 5.84596 24.5583C5.90169 24.4864 5.94265 24.4042 5.96648 24.3165C5.99031 24.2287 5.99654 24.1371 5.98482 24.0469C5.97309 23.9567 5.94365 23.8697 5.89817 23.7909C5.85269 23.7122 5.79208 23.6432 5.71983 23.5879C5.64758 23.5327 5.56512 23.4923 5.47719 23.469C5.38926 23.4458 5.2976 23.4402 5.20749 23.4525C5.11737 23.4648 5.03059 23.4948 4.95212 23.5408L2.56247 24.9201C2.431 24.996 2.32825 25.1132 2.27016 25.2535C2.21207 25.3937 2.20188 25.5492 2.24117 25.6959C2.28046 25.8425 2.36704 25.9721 2.48748 26.0645ZM31.5746 26.207C31.4536 26.2073 31.3346 26.1754 31.2298 26.1146L28.8402 24.7353C28.7611 24.6904 28.6917 24.6302 28.636 24.5583C28.5803 24.4864 28.5393 24.4042 28.5155 24.3165C28.4916 24.2287 28.4854 24.1371 28.4971 24.0469C28.5089 23.9567 28.5383 23.8697 28.5838 23.7909C28.6293 23.7122 28.6899 23.6432 28.7621 23.5879C28.8344 23.5327 28.9168 23.4923 29.0048 23.469C29.0927 23.4458 29.1843 23.4402 29.2745 23.4525C29.3646 23.4648 29.4514 23.4948 29.5298 23.5408L31.9195 24.9201C32.0509 24.996 32.1537 25.1132 32.2118 25.2535C32.2699 25.3937 32.2801 25.5492 32.2408 25.6959C32.2015 25.8425 32.1149 25.9721 31.9945 26.0645C31.874 26.1569 31.7265 26.207 31.5746 26.207ZM31.0345 17.931H33.7931C33.976 17.931 34.1514 17.8584 34.2808 17.729C34.4101 17.5997 34.4828 17.4243 34.4828 17.2414C34.4828 17.0585 34.4101 16.8831 34.2808 16.7537C34.1514 16.6244 33.976 16.5517 33.7931 16.5517H31.0345C30.8516 16.5517 30.6762 16.6244 30.5468 16.7537C30.4175 16.8831 30.3448 17.0585 30.3448 17.2414C30.3448 17.4243 30.4175 17.5997 30.5468 17.729C30.6762 17.8584 30.8516 17.931 31.0345 17.931ZM28.2761 16.5517H24.8278C24.8278 15.8201 24.5372 15.1184 24.0198 14.6011C23.5025 14.0837 22.8008 13.7931 22.0692 13.7931C21.3376 13.7931 20.6359 14.0837 20.1186 14.6011C19.6012 15.1184 19.3106 15.8201 19.3106 16.5517H17.9313V14.3559C17.9312 14.2456 17.9046 14.137 17.8539 14.0391C17.8031 13.9412 17.7297 13.8569 17.6396 13.7933C17.5496 13.7297 17.4456 13.6885 17.3364 13.6734C17.2272 13.6582 17.1159 13.6695 17.012 13.7062C16.8033 13.784 16.579 13.8101 16.3581 13.7823C16.1372 13.7546 15.9263 13.6737 15.7434 13.5467C15.5605 13.4197 15.4111 13.2504 15.3079 13.0531C15.2047 12.8558 15.1508 12.6364 15.1508 12.4138C15.1508 12.1911 15.2047 11.9718 15.3079 11.7745C15.4111 11.5772 15.5605 11.4078 15.7434 11.2809C15.9263 11.1539 16.1372 11.073 16.3581 11.0453C16.579 11.0175 16.8033 11.0436 17.012 11.1214C17.1159 11.1581 17.2272 11.1693 17.3364 11.1542C17.4456 11.139 17.5496 11.0979 17.6396 11.0343C17.7297 10.9707 17.8031 10.8864 17.8539 10.7885C17.9046 10.6906 17.9312 10.582 17.9313 10.4717V6.2069C17.9313 6.02399 17.8586 5.84857 17.7293 5.71924C17.5999 5.5899 17.4245 5.51724 17.2416 5.51724C14.563 5.51965 11.9659 6.43925 9.88258 8.12301C7.79928 9.80676 6.35536 12.1531 5.7911 14.7717C5.22684 17.3903 5.57628 20.1231 6.78125 22.5154C7.98623 24.9077 9.97408 26.8153 12.414 27.9207V28.9655H11.7244C11.1756 28.9655 10.6494 29.1835 10.2614 29.5715C9.87338 29.9595 9.65541 30.4858 9.65541 31.0345V32.4138C9.65541 32.9625 9.87338 33.4888 10.2614 33.8768C10.6494 34.2648 11.1756 34.4828 11.7244 34.4828H12.414V36.5517C12.4151 37.4659 12.7788 38.3424 13.4252 38.9888C14.0717 39.6353 14.9481 39.9989 15.8623 40H18.6209C19.5351 39.9989 20.4116 39.6353 21.058 38.9888C21.7045 38.3424 22.0681 37.4659 22.0692 36.5517V34.4828H22.7589C23.3076 34.4828 23.8338 34.2648 24.2218 33.8768C24.6098 33.4888 24.8278 32.9625 24.8278 32.4138V31.0345C24.8278 30.4858 24.6098 29.9595 24.2218 29.5715C23.8338 29.1835 23.3076 28.9655 22.7589 28.9655H22.0692V27.9207C24.1279 26.9976 25.8749 25.4976 27.0989 23.6023C28.3228 21.707 28.9713 19.4975 28.9657 17.2414C28.9657 17.0585 28.8931 16.8831 28.7638 16.7537C28.6344 16.6244 28.459 16.5517 28.2761 16.5517ZM16.552 6.91931V9.65517C15.8203 9.65517 15.1187 9.94581 14.6013 10.4632C14.084 10.9805 13.7933 11.6822 13.7933 12.4138C13.7933 13.1454 14.084 13.8471 14.6013 14.3644C15.1187 14.8818 15.8203 15.1724 16.552 15.1724V16.5517H14.3561C14.2458 16.5518 14.137 16.5783 14.0391 16.6291C13.9411 16.6799 13.8568 16.7534 13.7931 16.8436C13.7295 16.9337 13.6884 17.0378 13.6733 17.1471C13.6582 17.2564 13.6696 17.3677 13.7064 17.4717C13.7842 17.6803 13.8103 17.9047 13.7826 18.1256C13.7548 18.3465 13.674 18.5574 13.547 18.7403C13.42 18.9232 13.2506 19.0726 13.0533 19.1758C12.856 19.279 12.6367 19.3329 12.414 19.3329C12.1914 19.3329 11.972 19.279 11.7747 19.1758C11.5775 19.0726 11.4081 18.9232 11.2811 18.7403C11.1541 18.5574 11.0733 18.3465 11.0455 18.1256C11.0177 17.9047 11.0438 17.6803 11.1216 17.4717C11.1585 17.3677 11.1698 17.2564 11.1547 17.1471C11.1397 17.0378 11.0986 16.9337 11.0349 16.8436C10.9713 16.7534 10.8869 16.6799 10.789 16.6291C10.691 16.5783 10.5823 16.5518 10.472 16.5517H6.91954C7.08979 14.0531 8.15929 11.7008 9.93015 9.92992C11.701 8.15906 14.0534 7.08956 16.552 6.91931ZM13.3623 26.8276C11.5588 26.1034 9.99699 24.8837 8.8574 23.3094C7.71781 21.7351 7.04693 19.8705 6.9223 17.931H9.65541C9.65541 18.6627 9.94604 19.3643 10.4634 19.8817C10.9807 20.399 11.6824 20.6897 12.414 20.6897C13.1457 20.6897 13.8473 20.399 14.3647 19.8817C14.882 19.3643 15.1726 18.6627 15.1726 17.931H16.552V20.1269C16.5521 20.2372 16.5786 20.3458 16.6293 20.4437C16.6801 20.5415 16.7536 20.6258 16.8436 20.6895C16.9336 20.7531 17.0376 20.7942 17.1468 20.8094C17.2561 20.8245 17.3673 20.8133 17.4713 20.7766C17.6799 20.6988 17.9042 20.6727 18.1251 20.7004C18.3461 20.7282 18.557 20.809 18.7398 20.936C18.9227 21.063 19.0721 21.2324 19.1753 21.4297C19.2785 21.627 19.3324 21.8463 19.3324 22.069C19.3324 22.2916 19.2785 22.511 19.1753 22.7082C19.0721 22.9055 18.9227 23.0749 18.7398 23.2019C18.557 23.3289 18.3461 23.4097 18.1251 23.4375C17.9042 23.4653 17.6799 23.4392 17.4713 23.3614C17.3673 23.3247 17.2561 23.3134 17.1468 23.3286C17.0376 23.3437 16.9336 23.3848 16.8436 23.4485C16.7536 23.5121 16.6801 23.5964 16.6293 23.6943C16.5786 23.7922 16.5521 23.9008 16.552 24.011V28.9655H13.7933V27.4662C13.7932 27.329 13.7521 27.1949 13.6753 27.0811C13.5985 26.9673 13.4895 26.8791 13.3623 26.8276ZM20.6899 36.5517C20.6899 37.1004 20.4719 37.6267 20.0839 38.0147C19.6959 38.4027 19.1696 38.6207 18.6209 38.6207H15.8623C15.3136 38.6207 14.7873 38.4027 14.3993 38.0147C14.0113 37.6267 13.7933 37.1004 13.7933 36.5517V34.4828H15.1726V36.5517C15.1726 36.7346 15.2453 36.91 15.3746 37.0394C15.504 37.1687 15.6794 37.2414 15.8623 37.2414C16.0452 37.2414 16.2206 37.1687 16.35 37.0394C16.4793 36.91 16.552 36.7346 16.552 36.5517V34.4828H17.9313V36.5517C17.9313 36.7346 18.0039 36.91 18.1333 37.0394C18.2626 37.1687 18.438 37.2414 18.6209 37.2414C18.8038 37.2414 18.9792 37.1687 19.1086 37.0394C19.2379 36.91 19.3106 36.7346 19.3106 36.5517V34.4828H20.6899V36.5517ZM22.7589 30.3448C22.9418 30.3448 23.1172 30.4175 23.2465 30.5468C23.3759 30.6762 23.4485 30.8516 23.4485 31.0345V32.4138C23.4485 32.5967 23.3759 32.7721 23.2465 32.9015C23.1172 33.0308 22.9418 33.1034 22.7589 33.1034H11.7244C11.5415 33.1034 11.366 33.0308 11.2367 32.9015C11.1074 32.7721 11.0347 32.5967 11.0347 32.4138V31.0345C11.0347 30.8516 11.1074 30.6762 11.2367 30.5468C11.366 30.4175 11.5415 30.3448 11.7244 30.3448H22.7589ZM21.1209 26.8276C20.9936 26.8791 20.8845 26.9675 20.8077 27.0814C20.7309 27.1953 20.6899 27.3295 20.6899 27.4669V28.9655H17.9313V24.8276C18.6629 24.8276 19.3646 24.5369 19.8819 24.0196C20.3992 23.5023 20.6899 22.8006 20.6899 22.069C20.6899 21.3373 20.3992 20.6357 19.8819 20.1183C19.3646 19.601 18.6629 19.3103 17.9313 19.3103V17.931H20.1271C20.2375 17.931 20.3462 17.9044 20.4441 17.8537C20.5421 17.8029 20.6264 17.7293 20.6901 17.6392C20.7537 17.5491 20.7948 17.445 20.8099 17.3357C20.825 17.2264 20.8136 17.115 20.7768 17.011C20.699 16.8024 20.6729 16.5781 20.7007 16.3572C20.7284 16.1362 20.8093 15.9253 20.9363 15.7425C21.0633 15.5596 21.2326 15.4102 21.4299 15.307C21.6272 15.2038 21.8466 15.1499 22.0692 15.1499C22.2918 15.1499 22.5112 15.2038 22.7085 15.307C22.9058 15.4102 23.0751 15.5596 23.2021 15.7425C23.3291 15.9253 23.41 16.1362 23.4377 16.3572C23.4655 16.5781 23.4394 16.8024 23.3616 17.011C23.3248 17.115 23.3134 17.2264 23.3285 17.3357C23.3436 17.445 23.3847 17.5491 23.4483 17.6392C23.512 17.7293 23.5963 17.8029 23.6943 17.8537C23.7922 17.9044 23.9009 17.931 24.0113 17.931H27.5637C27.4385 19.8707 26.7671 21.7354 25.627 23.3097C24.487 24.884 22.9248 26.1036 21.1209 26.8276ZM22.271 0.201995C22.4003 0.0726599 22.5757 0 22.7586 0C25.867 0.00346825 28.8471 1.2398 31.045 3.43775C33.243 5.6357 34.4793 8.61577 34.4828 11.7241C34.4828 11.907 34.4101 12.0825 34.2808 12.2118C34.1514 12.3411 33.976 12.4138 33.7931 12.4138H29.5283C29.4179 12.4137 29.3092 12.3872 29.2113 12.3364C29.1133 12.2856 29.029 12.2121 28.9653 12.122C28.9017 12.0318 28.8606 11.9277 28.8455 11.8184C28.8304 11.7091 28.8418 11.5978 28.8786 11.4938C28.9564 11.2852 28.9825 11.0608 28.9547 10.8399C28.927 10.619 28.8461 10.4081 28.7191 10.2252C28.5922 10.0423 28.4228 9.89293 28.2255 9.78974C28.0282 9.68655 27.8089 9.63265 27.5862 9.63265C27.3636 9.63265 27.1442 9.68655 26.9469 9.78974C26.7496 9.89293 26.5803 10.0423 26.4533 10.2252C26.3263 10.4081 26.2454 10.619 26.2177 10.8399C26.1899 11.0608 26.216 11.2852 26.2938 11.4938C26.3306 11.5978 26.342 11.7091 26.3269 11.8184C26.3118 11.9277 26.2707 12.0318 26.2071 12.122C26.1435 12.2121 26.0591 12.2856 25.9611 12.3364C25.8632 12.3872 25.7545 12.4137 25.6441 12.4138H22.7586C22.5757 12.4138 22.4003 12.3411 22.271 12.2118C22.1416 12.0825 22.069 11.907 22.069 11.7241V9.65517C21.3373 9.65517 20.6357 9.36453 20.1183 8.84719C19.601 8.32985 19.3103 7.62818 19.3103 6.89655C19.3103 6.16492 19.601 5.46325 20.1183 4.94591C20.6357 4.42857 21.3373 4.13793 22.069 4.13793V0.689655C22.069 0.506747 22.1416 0.331331 22.271 0.201995ZM29.5368 9.08384C30.0542 9.60119 30.3448 10.3029 30.3448 11.0345H33.0807C32.9104 8.5359 31.8409 6.18354 30.0701 4.41268C28.2992 2.64181 25.9469 1.57231 23.4483 1.40207V4.95448C23.4482 5.06474 23.4216 5.17336 23.3709 5.27125C23.3201 5.36914 23.2467 5.45343 23.1566 5.51706C23.0666 5.58069 22.9626 5.62181 22.8534 5.63696C22.7442 5.65211 22.6329 5.64085 22.529 5.60414C22.3203 5.52636 22.096 5.50024 21.8751 5.52801C21.6542 5.55578 21.4433 5.63662 21.2604 5.76361C21.0775 5.89061 20.9281 6.05999 20.8249 6.25728C20.7217 6.45457 20.6678 6.6739 20.6678 6.89655C20.6678 7.1192 20.7217 7.33854 20.8249 7.53583C20.9281 7.73312 21.0775 7.9025 21.2604 8.02949C21.4433 8.15648 21.6542 8.23732 21.8751 8.26509C22.096 8.29286 22.3203 8.26674 22.529 8.18897C22.6329 8.15225 22.7442 8.141 22.8534 8.15615C22.9626 8.1713 23.0666 8.21241 23.1566 8.27604C23.2467 8.33967 23.3201 8.42397 23.3709 8.52185C23.4216 8.61974 23.4482 8.72836 23.4483 8.83862V11.0345H24.8276C24.8276 10.3029 25.1182 9.60119 25.6356 9.08384C26.1529 8.5665 26.8546 8.27586 27.5862 8.27586C28.3178 8.27586 29.0195 8.5665 29.5368 9.08384Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b93ebf9 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="b93ebf9" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Define
                                                        Problems</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5e12692 e-con-full e-flex e-con e-child"
                                        data-id="5e12692" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.45,&quot;ease&quot;:&quot;bounce&quot;,&quot;fade-offset&quot;:150,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-672fdd0 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="672fdd0" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">Step &#8211; 03</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4fcb42e e-con-full e-flex e-con e-child"
                                            data-id="4fcb42e" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-74a052b elementor-widget__width-initial elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="74a052b" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon elementor-animation-grow-rotate">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="41"
                                                                height="41" viewBox="0 0 41 41">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M11.5202 33.2715C11.6846 33.2715 11.8429 33.3344 11.9624 33.4474L14.6968 36.2036C14.8132 36.3207 14.8785 36.4791 14.8785 36.6442C14.8785 36.8094 14.8132 36.9678 14.6968 37.0849L11.953 39.8255C11.8949 39.884 11.8257 39.9304 11.7496 39.9621C11.6734 39.9937 11.5917 40.01 11.5093 40.0099C11.3438 40.0092 11.1853 39.9429 11.0686 39.8255L8.328 37.0849C8.21159 36.9678 8.14626 36.8094 8.14626 36.6442C8.14626 36.4791 8.21159 36.3207 8.328 36.2036L9.38425 35.1442C7.42107 32.5324 6.18838 29.4452 5.81274 26.1995C5.4371 22.9538 5.93204 19.6666 7.24675 16.6754L3.64362 20.2692C3.84246 20.6772 3.89019 21.1426 3.77834 21.5825C3.66648 22.0224 3.40229 22.4084 3.03269 22.672C2.6631 22.9355 2.21205 23.0594 1.75969 23.0218C1.30733 22.9842 0.882963 22.7874 0.561992 22.4664C0.241021 22.1455 0.0442371 21.7211 0.00660731 21.2687C-0.0310225 20.8164 0.0929394 20.3653 0.356465 19.9957C0.619991 19.6261 1.00601 19.3619 1.44594 19.2501C1.88586 19.1382 2.35119 19.186 2.75925 19.3848L8.84988 13.3035C8.43569 12.6861 8.24873 11.9439 8.32094 11.204C8.39315 10.464 8.72004 9.772 9.24578 9.24626C9.77151 8.72053 10.4635 8.39363 11.2035 8.32143C11.9434 8.24922 12.6856 8.43618 13.303 8.85036L19.3843 2.75971C19.1847 2.35325 19.1357 1.88925 19.2457 1.45004C19.3558 1.01083 19.6178 0.624796 19.9854 0.360429C20.353 0.0960608 20.8024 -0.0295518 21.2538 0.00587517C21.7052 0.0413022 22.1294 0.235478 22.4513 0.553956C22.7731 0.872433 22.9718 1.29462 23.012 1.74562C23.0521 2.19663 22.9313 2.64728 22.6708 3.01765C22.4103 3.38801 22.0271 3.65414 21.5891 3.76881C21.151 3.88349 20.6866 3.8393 20.278 3.64409L16.6749 7.23786C19.6669 5.92445 22.9545 5.43106 26.2002 5.80836C29.4459 6.18565 32.5327 7.42003 35.1436 9.38474L36.203 8.33161C36.3201 8.2152 36.4785 8.14987 36.6436 8.14987C36.8088 8.14987 36.9672 8.2152 37.0843 8.33161L39.8249 11.0722C39.883 11.1303 39.9291 11.1992 39.9606 11.2751C39.992 11.351 40.0082 11.4323 40.0082 11.5144C40.0082 11.5966 39.992 11.6779 39.9606 11.7538C39.9291 11.8297 39.883 11.8986 39.8249 11.9566L37.0843 14.6973C36.9672 14.8137 36.8088 14.879 36.6436 14.879C36.4785 14.879 36.3201 14.8137 36.203 14.6973L33.4468 11.9629C33.3888 11.9045 33.343 11.8352 33.3119 11.7591C33.2808 11.6829 33.265 11.6014 33.2655 11.5191C33.2654 11.3541 33.3305 11.1957 33.4468 11.0785L34.253 10.2941C31.3782 8.17592 27.9141 7.00738 24.3436 6.95137C20.7731 6.89535 17.2741 7.95465 14.3343 9.98162C14.6654 10.5906 14.7902 11.2904 14.6901 11.9763C14.59 12.6622 14.2703 13.2972 13.7789 13.786C13.2876 14.2749 12.651 14.5914 11.9646 14.6881C11.2782 14.7848 10.579 14.6564 9.97175 14.3223C7.94479 17.2622 6.8855 20.7612 6.94151 24.3317C6.99753 27.9022 8.16606 31.3662 10.2843 34.2411L11.078 33.4474C11.1975 33.3344 11.3557 33.2715 11.5202 33.2715ZM38.5061 11.5066L36.6499 9.65037L34.7936 11.5066L36.6499 13.3629L38.5061 11.5066ZM20.975 1.27289C20.8457 1.29902 20.7271 1.36295 20.6343 1.45658C20.5727 1.51811 20.5238 1.59118 20.4904 1.67161C20.4571 1.75204 20.4399 1.83826 20.4399 1.92533C20.4399 2.0124 20.4571 2.09862 20.4904 2.17905C20.5238 2.25948 20.5727 2.33255 20.6343 2.39408C20.7271 2.48772 20.8457 2.55165 20.975 2.57777C21.1043 2.60389 21.2384 2.59103 21.3603 2.54081C21.4823 2.49059 21.5865 2.40528 21.6599 2.2957C21.7333 2.18612 21.7725 2.05721 21.7725 1.92533C21.7725 1.79345 21.7333 1.66455 21.6599 1.55497C21.5865 1.44539 21.4823 1.36008 21.3603 1.30986C21.2384 1.25964 21.1043 1.24677 20.975 1.27289ZM10.769 9.70894C10.5315 9.80768 10.3157 9.95239 10.1343 10.1347C9.85992 10.4086 9.67299 10.7578 9.59713 11.1379C9.52127 11.5181 9.55989 11.9122 9.7081 12.2704C9.85631 12.6287 10.1074 12.9349 10.4297 13.1503C10.752 13.3657 11.131 13.4807 11.5186 13.4807C11.9063 13.4807 12.2852 13.3657 12.6075 13.1503C12.9298 12.9349 13.1809 12.6287 13.3292 12.2704C13.4774 11.9122 13.516 11.5181 13.4401 11.1379C13.3643 10.7578 13.1773 10.4086 12.903 10.1347C12.7215 9.95239 12.5058 9.80768 12.2682 9.70894C12.0306 9.6102 11.7759 9.55937 11.5186 9.55937C11.2614 9.55937 11.0066 9.6102 10.769 9.70894ZM1.9404 21.726C2.10637 21.7335 2.26915 21.6787 2.39675 21.5723C2.45835 21.5108 2.50723 21.4377 2.54057 21.3573C2.57392 21.2768 2.59108 21.1906 2.59108 21.1035C2.59108 21.0165 2.57392 20.9303 2.54057 20.8498C2.50723 20.7694 2.45835 20.6963 2.39675 20.6348C2.27168 20.5119 2.10335 20.443 1.928 20.443C1.75265 20.443 1.58431 20.5119 1.45925 20.6348C1.35284 20.7624 1.298 20.9252 1.3055 21.0911C1.313 21.2571 1.3823 21.4143 1.49978 21.5318C1.61726 21.6493 1.77443 21.7185 1.9404 21.726ZM9.66238 36.6317L11.5186 38.488L13.3749 36.6317L11.5186 34.7755L9.66238 36.6317ZM35.5623 27.0634L39.6623 29.1134C39.7527 29.1566 39.8314 29.2208 39.8918 29.3008C39.9522 29.3807 39.9924 29.474 40.0092 29.5728C40.0236 29.6711 40.0145 29.7714 39.9824 29.8654C39.9503 29.9594 39.8963 30.0444 39.8248 30.1134L30.1123 39.826C29.9956 39.9433 29.8372 40.0096 29.6717 40.0103C29.6384 40.0134 29.605 40.0134 29.5717 40.0103C29.4729 39.9936 29.3796 39.9533 29.2997 39.8929C29.2198 39.8326 29.1555 39.7539 29.1123 39.6635L27.0623 35.5634L20.2748 32.954C20.1946 32.9233 20.1215 32.8764 20.0602 32.8162C19.9989 32.756 19.9507 32.6837 19.9186 32.604L13.4467 16.4133C13.4019 16.3008 13.3907 16.1777 13.4146 16.059C13.4385 15.9403 13.4963 15.8311 13.5811 15.7446L15.7404 13.5852C15.8268 13.4993 15.9365 13.4405 16.0558 13.4161C16.1752 13.3916 16.2991 13.4026 16.4123 13.4477L32.6029 19.9196C32.6826 19.9517 32.7549 20 32.8151 20.0613C32.8753 20.1226 32.9222 20.1956 32.9529 20.2759L35.5623 27.0634ZM15.1029 15.9883L14.7561 16.3321L20.9779 31.8853L27.3592 34.3384L34.3373 27.3603L31.8842 20.979L16.3311 14.7571L15.9873 15.104L24.0467 23.1634C24.7993 22.6322 25.7239 22.4028 26.6375 22.5206C27.5511 22.6383 28.3873 23.0945 28.9807 23.7991C29.5741 24.5037 29.8816 25.4053 29.8422 26.3256C29.8029 27.2459 29.4197 28.118 28.7683 28.7694C28.1169 29.4208 27.2449 29.804 26.3245 29.8433C25.4042 29.8827 24.5026 29.5752 23.798 28.9818C23.0935 28.3884 22.6372 27.5522 22.5195 26.6386C22.4018 25.7249 22.6312 24.8004 23.1623 24.0478L15.1029 15.9883ZM27.7049 24.2917C27.2712 23.9348 26.7272 23.7392 26.1654 23.7384C25.5212 23.7378 24.903 23.9929 24.4467 24.4478C24.0491 24.8445 23.8013 25.3669 23.7457 25.9258C23.69 26.4848 23.8298 27.0458 24.1414 27.5132C24.4529 27.9806 24.9168 28.3255 25.4542 28.4892C25.9915 28.6529 26.569 28.6253 27.0882 28.411C27.6074 28.1967 28.0363 27.809 28.3017 27.314C28.5672 26.8189 28.6528 26.2472 28.544 25.6961C28.4351 25.145 28.1386 24.6487 27.7049 24.2917ZM28.2811 35.2041L29.8436 38.3291L38.3217 29.8509L35.1967 28.2884L28.2811 35.2041Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ed434ba elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="ed434ba" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Design and
                                                        Prototype </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-baf0544 e-con-full e-flex e-con e-child"
                                        data-id="baf0544" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.6,&quot;fade-offset&quot;:150,&quot;ease&quot;:&quot;bounce&quot;,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-53a43e0 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="53a43e0" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">Step &#8211; 04</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-aad02e8 e-con-full e-flex e-con e-child"
                                            data-id="aad02e8" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-db14944 elementor-widget__width-initial elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="db14944" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon elementor-animation-grow-rotate">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="40" viewBox="0 0 40 40">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.46392 3.60157C9.50984 3.81016 9.63876 3.98282 9.81174 4.09532C9.95118 4.18594 10.1192 4.23751 10.2952 4.23751C10.3521 4.23751 10.41 4.23204 10.4679 4.22032C10.9275 4.13126 11.2231 3.71016 11.1281 3.27891L10.5461 0.635945C10.4514 0.204695 10.0017 -0.0718671 9.54223 0.0164142C9.08256 0.105477 8.78702 0.527352 8.88189 0.95782L9.46392 3.60157ZM37.8974 20.0727L36.6196 17.3469C36.544 17.1852 36.46 17.025 36.37 16.8711C35.8371 15.9578 34.9625 15.2695 33.9075 14.9344C32.8559 14.6 31.7158 14.6445 30.697 15.0602L30.2046 15.2609L29.5754 13.9188L29.1116 12.9289C28.9531 12.5906 28.742 12.2844 28.4869 12.0172C28.1044 11.6164 27.6231 11.3031 27.0716 11.1039C26.1569 10.7734 25.1618 10.7977 24.2688 11.1711L22.635 11.8352L22.5741 11.7563L22.5205 11.6898C22.4809 11.643 22.4403 11.5977 22.3988 11.5531C22.2964 11.4445 22.1881 11.3445 22.0739 11.2539C21.9074 11.1219 21.7286 11.0094 21.5377 10.9164C20.6437 10.4828 19.5683 10.5188 18.341 11.025L17.172 11.507L15.6587 8.27891C15.0426 6.96407 13.8993 6.06251 12.5219 5.80469C11.2271 5.56173 9.90858 5.90548 8.99478 6.72344C7.62349 7.95079 7.22943 9.79297 7.99026 11.4164L13.7228 23.7219C13.2429 23.6305 12.7371 23.5891 12.2237 23.6008C10.8905 23.6313 9.69167 24.0289 8.88887 24.6992C8.83628 24.7313 8.78671 24.7695 8.7413 24.8133C7.93465 25.5922 7.53695 26.5344 7.5911 27.5383C7.65879 28.793 8.42295 30.0297 9.8008 31.1156L9.82205 31.132L21.6058 39.8289C21.7582 39.9414 21.9438 40 22.1313 40C22.2471 40 22.3635 39.9773 22.4732 39.932L39.3543 32.9734C39.6453 32.8531 39.8406 32.5906 39.8604 32.2938L39.9522 30.9141C40.1986 27.2148 39.4882 23.4656 37.8974 20.0727ZM38.2563 30.8148L38.1966 31.7094L22.2562 38.2812L10.8843 29.8883C9.89755 29.107 9.33104 28.2445 9.28855 27.4578C9.26095 26.9477 9.44746 26.4727 9.84308 26.0438C9.87162 26.0227 9.8989 25.9992 9.92493 25.9742C10.9422 24.9914 13.4787 24.9234 14.8034 25.8352L17.7304 28.4711C17.8951 28.6195 18.1071 28.693 18.3189 28.693C18.4306 28.693 18.5422 28.6719 18.6469 28.6313L18.6769 28.6188C18.7699 28.5781 18.8565 28.5219 18.9318 28.4484C19.2569 28.1313 19.2461 27.6266 18.9077 27.3219L16.0598 24.7563L9.54702 10.7766C8.97624 9.5586 9.4937 8.47969 10.1684 7.87579C10.6742 7.42344 11.4486 7.22813 12.1891 7.36719C13.0278 7.52422 13.7075 8.07579 14.1033 8.91954L19.0366 19.4438C19.1765 19.7422 19.488 19.9195 19.8149 19.9195C19.9291 19.9195 20.0452 19.8984 20.1564 19.8523C20.586 19.675 20.7812 19.2047 20.5923 18.8023L17.8562 12.9656L19.0254 12.4836C19.7592 12.1813 20.3418 12.1297 20.7569 12.3313C21.0508 12.4742 21.2985 12.757 21.4931 13.1719L24.4025 19.3781C24.4306 19.4383 24.4656 19.493 24.5063 19.543C24.5317 19.5742 24.5593 19.6031 24.5888 19.6297C24.6266 19.6641 24.6675 19.6945 24.7108 19.7211C24.7444 19.7414 24.7795 19.7602 24.8158 19.7766C24.929 19.8273 25.0538 19.8547 25.1808 19.8547C25.2303 19.8547 25.2802 19.8508 25.3298 19.8422C25.3947 19.8313 25.4593 19.8125 25.5223 19.7867C25.9518 19.6094 26.147 19.1398 25.9582 18.7367L23.3926 13.2641L24.9492 12.6313L24.959 12.6273C25.1441 12.55 25.3373 12.5 25.5332 12.4789C25.6727 12.4633 25.8134 12.4625 25.9535 12.4758C26.0122 12.4813 26.0708 12.4898 26.1291 12.5008C26.2412 12.5211 26.3524 12.5508 26.4614 12.5906C26.9549 12.7688 27.3438 13.1164 27.5563 13.5703L31.0135 20.9461C31.0395 21.0016 31.0715 21.0523 31.1083 21.0992C31.1648 21.1711 31.2329 21.232 31.3089 21.2813C31.4501 21.3719 31.6188 21.4219 31.7918 21.4219C31.9059 21.4219 32.022 21.4008 32.1333 21.3547C32.315 21.2797 32.4547 21.1523 32.5413 21C32.6593 20.7914 32.6781 20.5367 32.5692 20.3047L30.8885 16.7195L31.3747 16.5211C32.6889 15.9852 34.1957 16.4641 34.8793 17.6359C34.9457 17.75 35.0079 17.8688 35.0639 17.9883L36.3417 20.7141C37.8237 23.875 38.4858 27.368 38.2563 30.8148ZM34.9175 30.6031L34.0793 30.9484C33.983 30.9883 33.8984 31.0422 33.8273 31.107C33.5811 31.332 33.4962 31.6852 33.6424 31.9977C33.7822 32.2969 34.0939 32.475 34.4211 32.475C34.535 32.475 34.6509 32.4531 34.7618 32.407L35.6 32.0625C36.0298 31.8859 36.2254 31.4156 36.0369 31.0133C35.8485 30.6102 35.3474 30.4266 34.9175 30.6031ZM22.5841 35.6938L31.5359 32.0117C31.9659 31.8352 32.4669 32.0188 32.6553 32.4211C32.7825 32.693 32.7348 32.9953 32.5583 33.218C32.4733 33.3258 32.3583 33.4141 32.2186 33.4711L23.2667 37.1531C23.1557 37.1984 23.0398 37.2203 22.9259 37.2203C22.5987 37.2203 22.287 37.0422 22.1473 36.7438C21.9588 36.3406 22.1544 35.8703 22.5841 35.6938ZM1.88414 2.64063C2.28309 2.87266 2.40629 3.36329 2.15906 3.73751C1.99828 3.98126 1.72033 4.11485 1.43593 4.11485C1.28326 4.11485 1.12862 4.07657 0.989284 3.99532L0.402467 3.65469C0.00351529 3.42344 -0.11968 2.93204 0.127439 2.55782C0.374558 2.1836 0.898163 2.06798 1.29722 2.30001L1.88414 2.64063ZM3.80861 5.75626L5.62113 6.87423C5.76515 6.96329 5.92708 7.00548 6.08735 7.00548C6.13703 7.00548 6.18649 7.00157 6.23523 6.99376C6.29354 6.98438 6.35082 6.96876 6.40601 6.94766C6.56107 6.88907 6.69927 6.78751 6.79809 6.64688C7.05594 6.27891 6.94711 5.78438 6.55503 5.54298L4.74241 4.42501C4.35023 4.18282 3.8235 4.28516 3.56555 4.65313C3.3077 5.02032 3.41653 5.51485 3.80861 5.75626ZM5.02806 10.1766C5.48783 10.0875 5.93708 10.3648 6.03205 10.7961C6.12692 11.2266 5.83138 11.6484 5.37172 11.7375L2.55291 12.2836C2.52375 12.2891 2.4946 12.2938 2.46565 12.2969C2.43701 12.2992 2.40847 12.3 2.38025 12.3C1.98557 12.3 1.63192 12.0406 1.54892 11.6641C1.45405 11.2328 1.74959 10.8117 2.20926 10.7227L5.02806 10.1766ZM8.17021 14.8992C7.77803 14.657 7.2512 14.7594 6.99335 15.1273L5.41171 17.382C5.15386 17.75 5.26268 18.2438 5.65476 18.4859C5.79868 18.5742 5.96062 18.6172 6.12088 18.6172C6.39727 18.6172 6.66834 18.4906 6.83152 18.2578L8.41317 16.0031C8.67111 15.6352 8.56219 15.1406 8.17021 14.8992ZM18.3125 9.01641C17.9178 9.01641 17.5642 8.75704 17.4812 8.38048C17.3863 7.95001 17.682 7.52813 18.1415 7.43907L20.0207 7.07501C20.4803 6.98594 20.9298 7.26329 21.0247 7.69454C21.1196 8.12579 20.824 8.54688 20.3644 8.63594L18.4852 9.00001C18.4272 9.01094 18.3694 9.01641 18.3125 9.01641ZM23.5977 7.99376C23.6546 7.99376 23.7125 7.98829 23.7704 7.97735L24.3577 7.86329C24.8174 7.77422 25.1129 7.35313 25.018 6.92188C24.9605 6.66016 24.7725 6.45548 24.5309 6.35469C24.3742 6.28907 24.1949 6.26719 24.0141 6.30235L23.4267 6.41641C22.9671 6.50548 22.6715 6.92657 22.7664 7.35782C22.8494 7.73438 23.203 7.99376 23.5977 7.99376ZM15.36 5.07032C15.1997 5.07032 15.0378 5.02735 14.8939 4.93907C14.5018 4.69688 14.393 4.20313 14.6508 3.83516L16.2325 1.58048C16.3897 1.35626 16.6471 1.23048 16.913 1.2211C17.083 1.21563 17.2563 1.25782 17.4093 1.35235C17.8013 1.59376 17.9102 2.08829 17.6523 2.45626L16.0706 4.71094C15.9075 4.94376 15.6364 5.07032 15.36 5.07032Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c1d85d6 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="c1d85d6" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Evaluation
                                                        & Testing</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f0a1442 elementor-widget-laptop__width-initial elementor-hidden-mobile elementor-widget elementor-widget-wcf--image"
                                        data-id="f0a1442" data-element_type="widget"
                                        data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--image.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--image">
                                                <img loading="lazy" decoding="async" width="57" height="200"
                                                    src="https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/right-half-circle-dark.webp"
                                                    class="attachment-full size-full wp-image-8311" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-72bd0f4 e-con-full e-flex e-con e-parent"
                            data-id="72bd0f4" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_start&quot;:&quot;top top&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-6d3dfcf elementor-widget elementor-widget-wcf--image"
                                data-id="6d3dfcf" data-element_type="widget"
                                data-settings="{&quot;wcf-image-animation&quot;:&quot;scale&quot;,&quot;wcf-scale-start&quot;:1.2,&quot;wcf-animation-start&quot;:&quot;top center&quot;,&quot;wcf-scale-end&quot;:1,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                data-widget_type="wcf--image.default">
                                <div class="elementor-widget-container">
                                    <div class="wcf--image">
                                        <img loading="lazy" decoding="async" width="1920" height="1000"
                                            src="images/divider-img.webp"
                                            class="attachment-full size-full wp-image-804" alt=""
                                            srcset="images/divider-img.webp 1920w, images/divider-img-300x156.webp 300w, images/divider-img-1024x533.webp 1024w, images/divider-img-768x400.webp 768w, images/divider-img-1536x800.webp 1536w"
                                            sizes="(max-width: 1920px) 100vw, 1920px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-eb5d0ee e-flex e-con-boxed e-con e-parent"
                            data-id="eb5d0ee" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-bed91b2 e-con-full e-flex e-con e-child"
                                    data-id="bed91b2" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-dc52391 elementor-widget__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="dc52391" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">What they say about us</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c014e1a e-con-full e-flex e-con e-child"
                                    data-id="c014e1a" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-1e377dd e-con-full e-flex e-con e-child"
                                        data-id="1e377dd" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-7581809 wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                            data-id="7581809" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="wcf--title">4.9</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ed68cb7 elementor-widget elementor-widget-rating"
                                            data-id="ed68cb7" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="rating.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.23.0 - 05-08-2024 */
                                                    .elementor-widget-rating {
                                                        --e-rating-gap: 0px;
                                                        --e-rating-icon-font-size: 16px;
                                                        --e-rating-icon-color: #ccd6df;
                                                        --e-rating-icon-marked-color: #f0ad4e;
                                                        --e-rating-icon-marked-width: 100%;
                                                        --e-rating-justify-content: flex-start
                                                    }

                                                    .elementor-widget-rating .e-rating {
                                                        display: flex;
                                                        justify-content: var(--e-rating-justify-content)
                                                    }

                                                    .elementor-widget-rating .e-rating-wrapper {
                                                        display: flex;
                                                        justify-content: inherit;
                                                        flex-direction: row;
                                                        flex-wrap: wrap;
                                                        width: -moz-fit-content;
                                                        width: fit-content;
                                                        margin-block-end: calc(0px - var(--e-rating-gap));
                                                        margin-inline-end: calc(0px - var(--e-rating-gap))
                                                    }

                                                    .elementor-widget-rating .e-rating .e-icon {
                                                        position: relative;
                                                        margin-block-end: var(--e-rating-gap);
                                                        margin-inline-end: var(--e-rating-gap)
                                                    }

                                                    .elementor-widget-rating .e-rating .e-icon-wrapper.e-icon-marked {
                                                        --e-rating-icon-color: var(--e-rating-icon-marked-color);
                                                        width: var(--e-rating-icon-marked-width);
                                                        position: absolute;
                                                        z-index: 1;
                                                        height: 100%;
                                                        left: 0;
                                                        top: 0;
                                                        overflow: hidden
                                                    }

                                                    .elementor-widget-rating .e-rating .e-icon-wrapper :is(i, svg) {
                                                        display: flex;
                                                        flex-shrink: 0
                                                    }

                                                    .elementor-widget-rating .e-rating .e-icon-wrapper i {
                                                        font-size: var(--e-rating-icon-font-size);
                                                        color: var(--e-rating-icon-color)
                                                    }

                                                    .elementor-widget-rating .e-rating .e-icon-wrapper svg {
                                                        width: auto;
                                                        height: var(--e-rating-icon-font-size);
                                                        fill: var(--e-rating-icon-color)
                                                    }
                                                </style>
                                                <div class="e-rating" itemtype="https://schema.org/Rating"
                                                    itemscope="" itemprop="reviewRating">
                                                    <meta itemprop="worstRating" content="0">
                                                    <meta itemprop="bestRating" content="5">
                                                    <div class="e-rating-wrapper" itemprop="ratingValue"
                                                        content="5" role="img" aria-label="Rated 5 out of 5">
                                                        <div class="e-icon">
                                                            <div class="e-icon-wrapper e-icon-marked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                            <div class="e-icon-wrapper e-icon-unmarked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="e-icon">
                                                            <div class="e-icon-wrapper e-icon-marked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                            <div class="e-icon-wrapper e-icon-unmarked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="e-icon">
                                                            <div class="e-icon-wrapper e-icon-marked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                            <div class="e-icon-wrapper e-icon-unmarked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="e-icon">
                                                            <div class="e-icon-wrapper e-icon-marked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                            <div class="e-icon-wrapper e-icon-unmarked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="e-icon">
                                                            <div class="e-icon-wrapper e-icon-marked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                            <div class="e-icon-wrapper e-icon-unmarked">
                                                                <i aria-hidden="true"
                                                                    class="sassly-theme sassly-wcf-icon icon-wcf-star-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6501b7f elementor-widget-mobile__width-inherit elementor-widget-laptop__width-initial elementor-widget-tablet__width-initial elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                            data-id="6501b7f" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--text.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--text">(40+ reviews)</div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-206f614 elementor-widget-laptop__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                            data-id="206f614" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="wcf--title">Helping world-class company by creative design.
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f5c2a34 e-con-full e-flex e-con e-child"
                                        data-id="f5c2a34" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-0300ed4 elementor-widget elementor-widget-arolax--testimonial"
                                            data-id="0300ed4" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="arolax--testimonial.default">
                                            <div class="elementor-widget-container">
                                                <div class="arolax_testimonial_wrapper arolax__testimonial-3"
                                                    data-settings="{&quot;loop&quot;:true,&quot;speed&quot;:700,&quot;allowTouchMove&quot;:&quot;false&quot;,&quot;slidesPerView&quot;:&quot;2&quot;,&quot;spaceBetween&quot;:0,&quot;effect&quot;:&quot;slide&quot;,&quot;autoplay&quot;:{&quot;delay&quot;:3000,&quot;disableOnInteraction&quot;:&quot;true&quot;},&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;.elementor-element-0300ed4 .wcf-arrow-next&quot;,&quot;prevEl&quot;:&quot;.elementor-element-0300ed4 .wcf-arrow-prev&quot;},&quot;breakpoints&quot;:{&quot;767&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;880&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;1024&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;1366&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;2400&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;}}}">

                                                    <div class="arolax_testimonial_slider swiper"
                                                        style="position: static" dir="ltr">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="slide elementor-repeater-item-d5bde0d">
                                                                    <div class="top_text">Default Text </div>
                                                                    <div class="top-wrap">
                                                                        <div class="quote">
                                                                            <img decoding="async"
                                                                                src="images/quote-icon.webp"
                                                                                alt="Quote">
                                                                        </div>
                                                                    </div>
                                                                    <div class="feedback">
                                                                        As a startup that moves quickly and often, they have
                                                                        been able to roll with the <span>punches</span> at a
                                                                        high standard. Whether for our
                                                                        <span>marketing</span> or product design needs
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div class="author">
                                                                            <div class="info">
                                                                                <div class="name">David Heyman</div>
                                                                                <div class="designation">CEO, Amazon</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="logo">
                                                                            <img decoding="async"
                                                                                src="https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/client-logo-light.webp"
                                                                                alt="Quote">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="slide elementor-repeater-item-b9d6e55">
                                                                    <div class="top_text">Default Text </div>
                                                                    <div class="top-wrap">
                                                                        <div class="quote">
                                                                            <img decoding="async"
                                                                                src="images/quote-icon.webp"
                                                                                alt="Quote">
                                                                        </div>
                                                                    </div>
                                                                    <div class="feedback">
                                                                        The team delivers <span>high-quality</span> and
                                                                        thoughtful work. They've been a <span>great
                                                                            partner</span> through out the process. They
                                                                        simply go the extra mile! </div>
                                                                    <div class="wrap">
                                                                        <div class="author">
                                                                            <div class="info">
                                                                                <div class="name">Mike D. Brown</div>
                                                                                <div class="designation">CEO, Alaxa</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="logo">
                                                                            <img decoding="async"
                                                                                src="https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/client-logo-light.webp"
                                                                                alt="Quote">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="slide elementor-repeater-item-6fd67be">
                                                                    <div class="top_text">Default Text </div>
                                                                    <div class="top-wrap">
                                                                        <div class="quote">
                                                                            <img decoding="async"
                                                                                src="images/quote-icon.webp"
                                                                                alt="Quote">
                                                                        </div>
                                                                    </div>
                                                                    <div class="feedback">
                                                                        As a startup that moves quickly and often, they have
                                                                        been able to roll with the <span>punches</span> at a
                                                                        high standard. Whether for our
                                                                        <span>marketing</span> or product design needs
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div class="author">
                                                                            <div class="info">
                                                                                <div class="name">John Doe</div>
                                                                                <div class="designation">Designer</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="logo">
                                                                            <img decoding="async"
                                                                                src="https://crowdytheme.com/wp/arolax/branding-agency/wp-content/uploads/sites/13/2024/07/client-logo-light.webp"
                                                                                alt="Quote">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- navigation and pagination -->
                                                    <div class="ts-navigation">
                                                        <div class="wcf-arrow wcf-arrow-prev" role="button"
                                                            tabindex="0">
                                                            <i aria-hidden="true"
                                                                class="arolax-theme arolax-wcf-icon icon-wcf-arrow-left"></i>
                                                        </div>
                                                        <div class="wcf-arrow wcf-arrow-next" role="button"
                                                            tabindex="0">
                                                            <i aria-hidden="true"
                                                                class="arolax-theme arolax-wcf-icon icon-wcf-arrow-right-1"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-560142d e-con-full e-flex e-con e-child"
                                    data-id="560142d" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-9e86f4e elementor-widget elementor-widget-wcf--brand-slider"
                                        data-id="9e86f4e" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--brand-slider.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf__slider-wrapper wcf--brand-slider-wrapper "
                                                data-settings="{&quot;loop&quot;:true,&quot;speed&quot;:5000,&quot;allowTouchMove&quot;:false,&quot;slidesPerView&quot;:&quot;7&quot;,&quot;spaceBetween&quot;:20,&quot;autoplay&quot;:{&quot;delay&quot;:1,&quot;disableOnInteraction&quot;:&quot;true&quot;},&quot;breakpoints&quot;:{&quot;767&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;,&quot;spaceBetween&quot;:20},&quot;880&quot;:{&quot;slidesPerView&quot;:&quot;4&quot;,&quot;spaceBetween&quot;:20},&quot;1024&quot;:{&quot;slidesPerView&quot;:&quot;4&quot;,&quot;spaceBetween&quot;:20},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;5&quot;,&quot;spaceBetween&quot;:20},&quot;1366&quot;:{&quot;slidesPerView&quot;:&quot;7&quot;,&quot;spaceBetween&quot;:20},&quot;2400&quot;:{&quot;slidesPerView&quot;:&quot;7&quot;,&quot;spaceBetween&quot;:20}}}">
                                                <!-- Slider main container -->
                                                <div class="wcf__slider swiper" dir="ltr"
                                                    style="position: static">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="images/brand-logo-1-light.png"
                                                                alt="brand-logo-1-light" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="images/brand-logo-6-light.png"
                                                                alt="brand-logo-6-light" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="images/brand-logo-7-light.png"
                                                                alt="brand-logo-7-light" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="images/brand-logo-5-light.png"
                                                                alt="brand-logo-5-light" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="images/brand-logo-3-light.png"
                                                                alt="brand-logo-3-light" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="images/brand-logo-4-light.png"
                                                                alt="brand-logo-4-light" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="images/brand-logo-2-light.png"
                                                                alt="brand-logo-2-light" /></div>
                                                    </div>
                                                    <!-- navigation and pagination -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e9c970e e-flex e-con-boxed e-con e-parent"
                            data-id="e9c970e" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-2932dc9 e-con-full e-flex e-con e-child"
                                    data-id="2932dc9" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-6557194 elementor-widget__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="6557194" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">The talented team behind the creative design</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d47cefb elementor-widget__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                        data-id="d47cefb" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--text.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--text">Our dedication and commitment to excellence ensure that
                                                your business thrives in the ever-evolving digital realm.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9f554df e-con-full e-grid e-con e-child"
                                    data-id="9f554df" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-ec11884 e-con-full e-flex e-con e-child"
                                        data-id="ec11884" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-92a917f e-con-full e-flex e-con e-child"
                                            data-id="92a917f" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-8ed9923 elementor-widget elementor-widget-image"
                                                data-id="8ed9923" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/">
                                                        <img loading="lazy" decoding="async" width="190"
                                                            height="230"
                                                            src="images/team-img-1.webp"
                                                            class="attachment-full size-full wp-image-1219"
                                                            alt="" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7f74ff7 e-con-full e-flex e-con e-child"
                                                data-id="7f74ff7" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-90ccac7 e-con-full e-flex e-con e-child"
                                                    data-id="90ccac7" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-2e3c765 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="2e3c765" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Kamal Abraham">
                                                                        Kamal Abraham </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-469e1c5 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                        data-id="469e1c5" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--text">CEO, Alaska</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d9fc661 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="d9fc661" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-2">
                                                            <a href="#" class="wc-btn-group">
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-linkdin"></i>
                                                                </span>
                                                                <span class="wc-btn-primary">
                                                                    LinkedIn </span>
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-linkdin"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-54381c0 e-con-full e-flex e-con e-child"
                                        data-id="54381c0" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-bd94b0e e-con-full e-flex e-con e-child"
                                            data-id="bd94b0e" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-20dc1d9 elementor-widget elementor-widget-image"
                                                data-id="20dc1d9" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/">
                                                        <img loading="lazy" decoding="async" width="190"
                                                            height="230"
                                                            src="images/team-img-2.webp"
                                                            class="attachment-full size-full wp-image-1214"
                                                            alt="" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1fe5b15 e-con-full e-flex e-con e-child"
                                                data-id="1fe5b15" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-aecbcf7 e-con-full e-flex e-con e-child"
                                                    data-id="aecbcf7" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-c604ba6 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="c604ba6" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Selina Gomaze">
                                                                        Selina Gomaze </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-07f61d6 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                        data-id="07f61d6" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--text">Jr. Executive</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-80da636 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="80da636" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-2">
                                                            <a href="#" class="wc-btn-group">
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-twitter"></i>
                                                                </span>
                                                                <span class="wc-btn-primary">
                                                                    Twitter </span>
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-twitter"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8675f27 e-con-full e-flex e-con e-child"
                                        data-id="8675f27" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-ff6fa14 e-con-full e-flex e-con e-child"
                                            data-id="ff6fa14" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-d8e2c5c elementor-widget elementor-widget-image"
                                                data-id="d8e2c5c" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/">
                                                        <img loading="lazy" decoding="async" width="190"
                                                            height="230"
                                                            src="images/team-img-3.webp"
                                                            class="attachment-full size-full wp-image-1215"
                                                            alt="" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-bb52944 e-con-full e-flex e-con e-child"
                                                data-id="bb52944" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-7172d35 e-con-full e-flex e-con e-child"
                                                    data-id="7172d35" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-16009ee elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="16009ee" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Pedrik Vadra">
                                                                        Pedrik Vadra </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-86c9f02 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                        data-id="86c9f02" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--text">Logo Designer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c03482a elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="c03482a" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-2">
                                                            <a href="#" class="wc-btn-group">
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-linkdin"></i>
                                                                </span>
                                                                <span class="wc-btn-primary">
                                                                    LinkedIn </span>
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-linkdin"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-fe3dae7 e-con-full e-flex e-con e-child"
                                        data-id="fe3dae7" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-113e875 e-con-full e-flex e-con e-child"
                                            data-id="113e875" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-301de36 elementor-widget elementor-widget-image"
                                                data-id="301de36" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/">
                                                        <img loading="lazy" decoding="async" width="190"
                                                            height="230"
                                                            src="images/team-img-4.webp"
                                                            class="attachment-full size-full wp-image-1216"
                                                            alt="" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a8b9d4a e-con-full e-flex e-con e-child"
                                                data-id="a8b9d4a" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-dc4cd33 e-con-full e-flex e-con e-child"
                                                    data-id="dc4cd33" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-da2e0b6 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="da2e0b6" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Thomas Ribbon">
                                                                        Thomas Ribbon </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b34106e wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                        data-id="b34106e" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--text">Sr. Designer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-43baf14 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="43baf14" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-2">
                                                            <a href="#" class="wc-btn-group">
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-twitter"></i>
                                                                </span>
                                                                <span class="wc-btn-primary">
                                                                    Twitter </span>
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-twitter"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-12e63c9 e-con-full e-flex e-con e-child"
                                        data-id="12e63c9" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-fec4110 e-con-full e-flex e-con e-child"
                                            data-id="fec4110" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-2f54484 elementor-widget elementor-widget-image"
                                                data-id="2f54484" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/">
                                                        <img loading="lazy" decoding="async" width="190"
                                                            height="230"
                                                            src="images/team-img-5.webp"
                                                            class="attachment-full size-full wp-image-1217"
                                                            alt="" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-722184c e-con-full e-flex e-con e-child"
                                                data-id="722184c" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-451c4fb e-con-full e-flex e-con e-child"
                                                    data-id="451c4fb" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-1554be4 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="1554be4" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Jonathon Deo">
                                                                        Jonathon Deo </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-33c7d56 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                        data-id="33c7d56" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--text">Designer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-00788c1 elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="00788c1" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-2">
                                                            <a href="#" class="wc-btn-group">
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-linkdin"></i>
                                                                </span>
                                                                <span class="wc-btn-primary">
                                                                    LinkedIn </span>
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-linkdin"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-37de8ec e-con-full e-flex e-con e-child"
                                        data-id="37de8ec" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-f12a326 e-con-full e-flex e-con e-child"
                                            data-id="f12a326" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-d2b8929 elementor-widget elementor-widget-image"
                                                data-id="d2b8929" data-element_type="widget"
                                                data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a
                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/">
                                                        <img loading="lazy" decoding="async" width="190"
                                                            height="230"
                                                            src="images/team-img-6.webp"
                                                            class="attachment-full size-full wp-image-1218"
                                                            alt="" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f440cc2 e-con-full e-flex e-con e-child"
                                                data-id="f440cc2" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-a98dc49 e-con-full e-flex e-con e-child"
                                                    data-id="a98dc49" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-1d66124 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="1d66124" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/team-details-dark/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Angel D. Mariya">
                                                                        Angel D. Mariya </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-c1763b9 wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                        data-id="c1763b9" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--text">Jr. Designer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9c7c60c elementor-widget elementor-widget-wcf--arolax-button"
                                                    data-id="9c7c60c" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--arolax-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wc-btn-wrapper style-2">
                                                            <a href="#" class="wc-btn-group">
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-facebook"></i>
                                                                </span>
                                                                <span class="wc-btn-primary">
                                                                    Facebook </span>
                                                                <span class="wc-btn-play">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-facebook"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-80220d0 e-flex e-con-boxed e-con e-parent"
                            data-id="80220d0" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf_pin_area_start&quot;:&quot;bottom bottom&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-3cc3cff e-con-full e-flex e-con e-child"
                                    data-id="3cc3cff" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-8bc91e0 elementor-widget__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="8bc91e0" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">Journal from arolax</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ed0994b elementor-widget elementor-widget-wcf--arolax-button"
                                        data-id="ed0994b" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--arolax-button.default">
                                        <div class="elementor-widget-container">
                                            <div class="wc-btn-wrapper style-1">
                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/blog-pages/"
                                                    class="wc-btn-group">
                                                    <span class="wc-btn-play">
                                                        <i aria-hidden="true"
                                                            class="arolax-theme arolax-wcf-icon icon-wcf-arrow-up1"></i>
                                                    </span>
                                                    <span class="wc-btn-primary">
                                                        Read all posts </span>
                                                    <span class="wc-btn-play">
                                                        <i aria-hidden="true"
                                                            class="arolax-theme arolax-wcf-icon icon-wcf-arrow-up1"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ba47af1 e-con-full e-flex e-con e-child"
                                    data-id="ba47af1" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-bcd644e wcf--image-effect-zoom-in elementor-widget elementor-widget-wcf--posts"
                                        data-id="bcd644e" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--posts.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf__posts style-1">
                                                <div class="wcf-posts">
                                                    <article
                                                        class="wcf-post post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-branding">
                                                        <div class="thumb">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/a-simple-guide-to-retrieval-auto-generated-read-content-models/"
                                                                aria-label="A simple guide to retrieval auto generated read content models">
                                                                <img loading="lazy" decoding="async" width="1290"
                                                                    height="550"
                                                                    src="images/blog-img-1.webp"
                                                                    class="attachment-full size-full wp-image-1302"
                                                                    alt=""
                                                                    srcset="images/blog-img-1.webp 1290w, images/blog-img-1-300x128.webp 300w, images/blog-img-1-1024x437.webp 1024w, images/blog-img-1-768x327.webp 768w"
                                                                    sizes="(max-width: 1290px) 100vw, 1290px" /> </a>
                                                        </div>

                                                        <div class="content">
                                                            <ul class="wcf-taxonomy">
                                                                <li><a
                                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/category/branding/">Branding</a>
                                                                </li>
                                                            </ul>
                                                            <ul class="wcf-meta">
                                                                <li>
                                                                    <span>
                                                                        June 27, 2024 </span>
                                                                </li>
                                                            </ul>
                                                            <h3 class="title">
                                                                <a
                                                                    href="https://crowdytheme.com/wp/arolax/branding-agency/a-simple-guide-to-retrieval-auto-generated-read-content-models/">
                                                                    A simple guide to retrieval auto generated read content
                                                                    models </a>
                                                            </h3>
                                                        </div>
                                                    </article>
                                                    <article
                                                        class="wcf-post post-1280 post type-post status-publish format-standard has-post-thumbnail hentry category-branding">
                                                        <div class="thumb">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/the-complex-but-awesome-css-border-image-property-for-web-design/"
                                                                aria-label="The complex but awesome CSS border-image property for web design">
                                                                <img loading="lazy" decoding="async" width="1290"
                                                                    height="550"
                                                                    src="images/blog-img-2.webp"
                                                                    class="attachment-full size-full wp-image-1300"
                                                                    alt=""
                                                                    srcset="images/blog-img-2.webp 1290w, images/blog-img-2-300x128.webp 300w, images/blog-img-2-1024x437.webp 1024w, images/blog-img-2-768x327.webp 768w"
                                                                    sizes="(max-width: 1290px) 100vw, 1290px" /> </a>
                                                        </div>

                                                        <div class="content">
                                                            <ul class="wcf-taxonomy">
                                                                <li><a
                                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/category/branding/">Branding</a>
                                                                </li>
                                                            </ul>
                                                            <ul class="wcf-meta">
                                                                <li>
                                                                    <span>
                                                                        June 27, 2024 </span>
                                                                </li>
                                                            </ul>
                                                            <h3 class="title">
                                                                <a
                                                                    href="https://crowdytheme.com/wp/arolax/branding-agency/the-complex-but-awesome-css-border-image-property-for-web-design/">
                                                                    The complex but awesome CSS border-image property for
                                                                    web design </a>
                                                            </h3>
                                                        </div>
                                                    </article>
                                                    <article
                                                        class="wcf-post post-1283 post type-post status-publish format-standard has-post-thumbnail hentry category-branding">
                                                        <div class="thumb">
                                                            <a href="https://crowdytheme.com/wp/arolax/branding-agency/refining-your-mobile-on-boarding-experience-using-visual-analytics/"
                                                                aria-label="Refining your mobile on boarding experience using visual analytics">
                                                                <img loading="lazy" decoding="async" width="1290"
                                                                    height="550"
                                                                    src="images/blog-img-3.webp"
                                                                    class="attachment-full size-full wp-image-1301"
                                                                    alt=""
                                                                    srcset="images/blog-img-3.webp 1290w, images/blog-img-3-300x128.webp 300w, images/blog-img-3-1024x437.webp 1024w, images/blog-img-3-768x327.webp 768w"
                                                                    sizes="(max-width: 1290px) 100vw, 1290px" /> </a>
                                                        </div>

                                                        <div class="content">
                                                            <ul class="wcf-taxonomy">
                                                                <li><a
                                                                        href="https://crowdytheme.com/wp/arolax/branding-agency/category/branding/">Branding</a>
                                                                </li>
                                                            </ul>
                                                            <ul class="wcf-meta">
                                                                <li>
                                                                    <span>
                                                                        June 27, 2024 </span>
                                                                </li>
                                                            </ul>
                                                            <h3 class="title">
                                                                <a
                                                                    href="https://crowdytheme.com/wp/arolax/branding-agency/refining-your-mobile-on-boarding-experience-using-visual-analytics/">
                                                                    Refining your mobile on boarding experience using visual
                                                                    analytics </a>
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
                        <div class="elementor-element elementor-element-3f8bfa4 e-flex e-con-boxed e-con e-parent"
                            data-id="3f8bfa4" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_pin_area&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_area_start&quot;:&quot;top top&quot;,&quot;wcf_pin_area_end&quot;:&quot;bottom top&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-5aba245 e-con-full e-flex e-con e-child"
                                    data-id="5aba245" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-7b4c363 wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="7b4c363" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">Have a project in mind?</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1393538 elementor-widget__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                        data-id="1393538" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">Let’s work together</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-66c77fd elementor-widget elementor-widget-wcf--arolax-button"
                                        data-id="66c77fd" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--arolax-button.default">
                                        <div class="elementor-widget-container">
                                            <div class="wc-btn-wrapper style-1">
                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/contact-us-dark/"
                                                    class="wc-btn-group">
                                                    <span class="wc-btn-play">
                                                        <i aria-hidden="true"
                                                            class="arolax-theme arolax-wcf-icon icon-wcf-arrow-up1"></i>
                                                    </span>
                                                    <span class="wc-btn-primary">
                                                        Get in touch </span>
                                                    <span class="wc-btn-play">
                                                        <i aria-hidden="true"
                                                            class="arolax-theme arolax-wcf-icon icon-wcf-arrow-up1"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .elementor-1354 .elementor-element.elementor-element-f93946f {
                            --display: flex;
                            --flex-direction: column;
                            --container-widget-width: 100%;
                            --container-widget-height: initial;
                            --container-widget-flex-grow: 0;
                            --container-widget-align-self: initial;
                            --flex-wrap-mobile: wrap;
                            --gap: 0px 0px;
                            --background-transition: 0.3s;
                            --border-radius: 80px 80px 0px 0px;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f93946f:not(.elementor-motion-effects-element-type-background),
                        .elementor-1354 .elementor-element.elementor-element-f93946f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                            background-color: #121212;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f93946f,
                        .elementor-1354 .elementor-element.elementor-element-f93946f::before {
                            --border-transition: 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-726a214 {
                            --display: flex;
                            --flex-direction: row;
                            --container-widget-width: initial;
                            --container-widget-height: 100%;
                            --container-widget-flex-grow: 1;
                            --container-widget-align-self: stretch;
                            --flex-wrap-mobile: wrap;
                            --gap: 0px 0px;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 20px;
                            --padding-right: 20px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-edd456c {
                            --display: flex;
                            --background-transition: 0.3s;
                            --padding-top: 130px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8941a42 .widget-image-caption {
                            margin-top: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                            --display: flex;
                            --gap: 10px 10px;
                            --background-transition: 0.3s;
                            border-style: solid;
                            --border-style: solid;
                            border-width: 0px 0px 0px 1px;
                            --border-top-width: 0px;
                            --border-right-width: 0px;
                            --border-bottom-width: 0px;
                            --border-left-width: 1px;
                            border-color: #FFFFFF1A;
                            --border-color: #FFFFFF1A;
                            --padding-top: 130px;
                            --padding-bottom: 123px;
                            --padding-left: 110px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-2e98be9,
                        .elementor-1354 .elementor-element.elementor-element-2e98be9::before {
                            --border-transition: 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-12b22b6 {
                            --display: flex;
                            --flex-direction: row;
                            --container-widget-width: initial;
                            --container-widget-height: 100%;
                            --container-widget-flex-grow: 1;
                            --container-widget-align-self: stretch;
                            --flex-wrap-mobile: wrap;
                            --gap: 0px 0px;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 71px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8d88a96 {
                            --display: flex;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-7c23f5c>.elementor-widget-container {
                            margin: 0px 0px 4px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-7c23f5c .wcf--title {
                            color: #FFFFFF;
                            font-family: "Instrument Sans", Sans-serif;
                            font-size: 30px;
                            font-weight: 600;
                        }

                        .elementor-1354 .elementor-element.elementor-element-7c23f5c .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a12dc4d {
                            --display: flex;
                            --gap: 0px 0px;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a12dc4d .wcf-image-hover {
                            background-image: url(../wp-content/plugins/elementor/assets/images/placeholder.png);
                        }

                        .elementor-1354 .elementor-element.elementor-element-84afb16 .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-84afb16 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-84afb16 .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-84afb16 .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-84afb16 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-84afb16 .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-84afb16 .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-84afb16 .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-84afb16 .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-84afb16 .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-84afb16 .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-06dab0d .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-06dab0d .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-06dab0d .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-06dab0d .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-06dab0d .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-06dab0d .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-06dab0d .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-06dab0d .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-06dab0d .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-06dab0d .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-06dab0d .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-15198ea .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-15198ea .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-15198ea .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-15198ea .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-15198ea .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-15198ea .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-15198ea .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-15198ea .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-15198ea .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-15198ea .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-15198ea .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-01b37ed .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-01b37ed .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-01b37ed .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-01b37ed .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-01b37ed .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-01b37ed .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-01b37ed .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-01b37ed .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-01b37ed .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-01b37ed .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-01b37ed .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-f07ecc6 .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-54ccd06 {
                            --display: flex;
                            --gap: 25px 25px;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-4c7cdc0>.elementor-widget-container {
                            margin: 0px 0px 4px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-4c7cdc0 .wcf--title {
                            color: #FFFFFF;
                            font-family: "Instrument Sans", Sans-serif;
                            font-size: 30px;
                            font-weight: 600;
                        }

                        .elementor-1354 .elementor-element.elementor-element-4c7cdc0 .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1354 .elementor-element.elementor-element-72ea050 {
                            --display: flex;
                            --gap: 0px 0px;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-72ea050 .wcf-image-hover {
                            background-image: url(https://crowdytheme.com/wp/arolax/branding-agency/wp-content/plugins/elementor/assets/images/placeholder.png );
                        }

                        .elementor-1354 .elementor-element.elementor-element-5be936a .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-5be936a .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-5be936a .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-5be936a .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-5be936a .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-5be936a .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-5be936a .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-5be936a .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-5be936a .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-5be936a .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-5be936a .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-9b30336 .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-9b30336 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-9b30336 .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-9b30336 .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-9b30336 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-9b30336 .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-9b30336 .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-9b30336 .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-9b30336 .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-9b30336 .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-9b30336 .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-6715e14 .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-6715e14 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-6715e14 .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-6715e14 .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-6715e14 .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-6715e14 .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-6715e14 .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-6715e14 .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-6715e14 .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-6715e14 .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-6715e14 .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ae0888a .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ae0888a .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-ae0888a .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ae0888a .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ae0888a .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-ae0888a .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-ae0888a .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ae0888a .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-ae0888a .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-ae0888a .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ae0888a .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-18036fa .btn-text-flip {
                            flex-direction: row;
                        }

                        .elementor-1354 .elementor-element.elementor-element-18036fa .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-18036fa .btn-border-crop {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.67em;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-18036fa .wc-btn-primary {
                            background-color: #02010100;
                            border-radius: 0px 0px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-18036fa .wc-btn-primary,
                        .elementor-1354 .elementor-element.elementor-element-18036fa .btn-text-flip span,
                        .elementor-1354 .elementor-element.elementor-element-18036fa .btn-border-crop {
                            color: #999999;
                            fill: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-18036fa .wc-btn-primary:hover,
                        .elementor-1354 .elementor-element.elementor-element-18036fa .btn-text-flip:hover span,
                        .elementor-1354 .elementor-element.elementor-element-18036fa .btn-border-crop:hover {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-18036fa .wc-btn-primary:hover {
                            background-color: #02010100;
                            border-color: #02010100;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a9b13f1 {
                            --display: flex;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-1e031bb>.elementor-widget-container {
                            margin: 0px 0px 4px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-1e031bb .wcf--title {
                            color: #FFFFFF;
                            font-family: "Instrument Sans", Sans-serif;
                            font-size: 30px;
                            font-weight: 600;
                        }

                        .elementor-1354 .elementor-element.elementor-element-1e031bb .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1354 .elementor-element.elementor-element-c8e17a4>.elementor-widget-container {
                            margin: 0px 0px 18px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-c8e17a4 .wcf--text {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-c8e17a4 .wcf--text,
                        .elementor-1354 .elementor-element.elementor-element-c8e17a4 .wcf--text * {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.42em;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 {
                            width: 100%;
                            max-width: 100%;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7>.elementor-widget-container {
                            background-color: #202020;
                            border-radius: 20px 20px 20px 20px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mailchimp-form {
                            gap: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .input input {
                            color: #FFFFFF;
                            font-family: "Kanit", Sans-serif;
                            font-size: 16px;
                            font-weight: 400;
                            line-height: 1.5em;
                            background-color: #F8F8F900;
                            padding: 25px 0px 26px 5px;
                            border-style: none;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .input-wrapper {
                            flex: 0 0 80.5%;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .input input::-webkit-input-placeholder {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .input input::-moz-placeholder {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .input input:-ms-input-placeholder {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .input input:-moz-placeholder {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .input .icon {
                            color: #999999;
                            fill: #999999;
                            font-size: 13px;
                            background-color: #02010100;
                            padding: 0px 10px 0px 25px;
                            border-style: none;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button i {
                            font-size: 20px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button svg {
                            font-size: 20px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                            background-color: #F8F8F900;
                            border-style: none;
                            padding: 0px 0px 26px 0px;
                            margin: 0px 0px 0px 0px;
                            width: 19.5%;
                        }

                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button:hover,
                        .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button:focus {
                            color: #BAE900;
                            fill: #BAE900;
                        }

                        .elementor-1354 .elementor-element.elementor-element-5245235 {
                            --display: flex;
                            --flex-direction: row;
                            --container-widget-width: initial;
                            --container-widget-height: 100%;
                            --container-widget-flex-grow: 1;
                            --container-widget-align-self: stretch;
                            --flex-wrap-mobile: wrap;
                            --gap: 0px 0px;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-d64dd26 {
                            --display: flex;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-cccf229>.elementor-widget-container {
                            margin: 0px 0px 4px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-cccf229 .wcf--title {
                            color: #FFFFFF;
                            font-family: "Instrument Sans", Sans-serif;
                            font-size: 30px;
                            font-weight: 600;
                        }

                        .elementor-1354 .elementor-element.elementor-element-cccf229 .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1354 .elementor-element.elementor-element-bef95ff {
                            width: var(--container-widget-width, 183px);
                            max-width: 183px;
                            --container-widget-width: 183px;
                            --container-widget-flex-grow: 0;
                        }

                        .elementor-1354 .elementor-element.elementor-element-bef95ff>.elementor-widget-container {
                            margin: 0px 0px 5px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-bef95ff .wcf--text {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-bef95ff .wcf--text,
                        .elementor-1354 .elementor-element.elementor-element-bef95ff .wcf--text * {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            text-decoration: underline;
                            line-height: 1.333em;
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6>.elementor-widget-container {
                            margin: 0px 0px 0px 0px;
                            padding: 0px 60px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                            padding-bottom: calc(0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                            margin-top: calc(0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                            margin-right: calc(0px/2);
                            margin-left: calc(0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-items.elementor-inline-items {
                            margin-right: calc(-0px/2);
                            margin-left: calc(-0px/2);
                        }

                        body.rtl .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                            left: calc(-0px/2);
                        }

                        body:not(.rtl) .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                            right: calc(-0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-icon i {
                            transition: color 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-icon svg {
                            transition: fill 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 {
                            --e-icon-list-icon-size: 14px;
                            --icon-vertical-offset: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-item>.elementor-icon-list-text,
                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-item>a {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.333em;
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-text {
                            color: #999999;
                            transition: color 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-item:hover .elementor-icon-list-text {
                            color: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a40cadb {
                            --display: flex;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-212348b>.elementor-widget-container {
                            margin: 0px 0px 4px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-212348b .wcf--title {
                            color: #FFFFFF;
                            font-family: "Instrument Sans", Sans-serif;
                            font-size: 30px;
                            font-weight: 600;
                        }

                        .elementor-1354 .elementor-element.elementor-element-212348b .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1354 .elementor-element.elementor-element-388c28e {
                            width: var(--container-widget-width, 183px);
                            max-width: 183px;
                            --container-widget-width: 183px;
                            --container-widget-flex-grow: 0;
                        }

                        .elementor-1354 .elementor-element.elementor-element-388c28e>.elementor-widget-container {
                            margin: 0px 0px 5px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-388c28e .wcf--text {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-388c28e .wcf--text,
                        .elementor-1354 .elementor-element.elementor-element-388c28e .wcf--text * {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            text-decoration: underline;
                            line-height: 1.333em;
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1>.elementor-widget-container {
                            margin: 0px 0px 0px 0px;
                            padding: 0px 60px 0px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                            padding-bottom: calc(0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                            margin-top: calc(0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                            margin-right: calc(0px/2);
                            margin-left: calc(0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-items.elementor-inline-items {
                            margin-right: calc(-0px/2);
                            margin-left: calc(-0px/2);
                        }

                        body.rtl .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                            left: calc(-0px/2);
                        }

                        body:not(.rtl) .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                            right: calc(-0px/2);
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-icon i {
                            transition: color 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-icon svg {
                            transition: fill 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 {
                            --e-icon-list-icon-size: 14px;
                            --icon-vertical-offset: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-item>.elementor-icon-list-text,
                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-item>a {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 1.333em;
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-text {
                            color: #999999;
                            transition: color 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-item:hover .elementor-icon-list-text {
                            color: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-0695eb5 {
                            --display: flex;
                            --background-transition: 0.3s;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-0695eb5,
                        .elementor-1354 .elementor-element.elementor-element-0695eb5::before {
                            --border-transition: 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ec75e3a>.elementor-widget-container {
                            margin: 0px 0px 4px 0px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ec75e3a .wcf--title {
                            color: #FFFFFF;
                            font-family: "Instrument Sans", Sans-serif;
                            font-size: 30px;
                            font-weight: 600;
                        }

                        .elementor-1354 .elementor-element.elementor-element-ec75e3a .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1354 .elementor-element.elementor-element-11efa3f>.elementor-widget-container {
                            margin: 0px 0px 0px -4px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-11efa3f .wcf--social-icons ul {
                            display: flex;
                            flex-direction: row;
                            gap: 15px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-11efa3f .wcf-social-icon {
                            color: #999999;
                            fill: #999999;
                            --icon-size: 20px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-11efa3f .wcf-social-icon:hover,
                        .elementor-1354 .elementor-element.elementor-element-11efa3f .wcf-social-icon:focus {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a9c83aa {
                            --display: flex;
                            --flex-direction: column;
                            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
                            --container-widget-height: initial;
                            --container-widget-flex-grow: 0;
                            --container-widget-align-self: initial;
                            --flex-wrap-mobile: wrap;
                            --align-items: center;
                            --background-transition: 0.3s;
                            border-style: solid;
                            --border-style: solid;
                            border-width: 1px 0px 0px 0px;
                            --border-top-width: 1px;
                            --border-right-width: 0px;
                            --border-bottom-width: 0px;
                            --border-left-width: 0px;
                            border-color: #FFFFFF1A;
                            --border-color: #FFFFFF1A;
                            --padding-top: 30px;
                            --padding-bottom: 32px;
                            --padding-left: 20px;
                            --padding-right: 20px;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a9c83aa,
                        .elementor-1354 .elementor-element.elementor-element-a9c83aa::before {
                            --border-transition: 0.3s;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a12300e {
                            text-align: center;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text {
                            color: #999999;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text,
                        .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text * {
                            font-family: "Kanit", Sans-serif;
                            font-size: 18px;
                            font-weight: 500;
                            line-height: 1.333em;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text a:hover,
                        .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text a:focus {
                            color: #999999 !important;
                        }

                        @media(min-width:768px) {
                            .elementor-1354 .elementor-element.elementor-element-f93946f {
                                --content-width: 1760px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --width: 37.7%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --width: 62.3%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8d88a96 {
                                --width: 28%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-54ccd06 {
                                --width: 31.3%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a9b13f1 {
                                --width: 40.7%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-d64dd26 {
                                --width: 28%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a40cadb {
                                --width: 31.3%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-0695eb5 {
                                --width: 40.7%;
                            }
                        }

                        @media(max-width:1366px) and (min-width:768px) {
                            .elementor-1354 .elementor-element.elementor-element-726a214 {
                                --width: 100%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --width: 30%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --width: 70%;
                            }
                        }

                        @media(max-width:1200px) and (min-width:768px) {
                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --width: 23%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --width: 77%;
                            }
                        }

                        @media(max-width:1024px) and (min-width:768px) {
                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --width: 20%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --width: 80%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8d88a96 {
                                --width: 30%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-54ccd06 {
                                --width: 30%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a9b13f1 {
                                --width: 40%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-d64dd26 {
                                --width: 30%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a40cadb {
                                --width: 30%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-0695eb5 {
                                --width: 40%;
                            }
                        }

                        @media(max-width:880px) and (min-width:768px) {
                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --width: 25%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --width: 75%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8d88a96 {
                                --width: 50%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-54ccd06 {
                                --width: 50%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a9b13f1 {
                                --width: 100%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-d64dd26 {
                                --width: 50%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a40cadb {
                                --width: 50%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-0695eb5 {
                                --width: 100%;
                            }
                        }

                        @media(max-width:1366px) {
                            .elementor-1354 .elementor-element.elementor-element-f93946f {
                                --margin-top: 0px;
                                --margin-bottom: 0px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-726a214 {
                                --padding-top: 0px;
                                --padding-bottom: 0px;
                                --padding-left: 20px;
                                --padding-right: 20px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --padding-top: 120px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --padding-top: 120px;
                                --padding-bottom: 115px;
                                --padding-left: 80px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .input-wrapper {
                                flex: 0 0 80%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button {
                                width: 20%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-5245235 {
                                --gap: 0px 0px;
                            }
                        }

                        @media(max-width:1200px) {
                            .elementor-1354 .elementor-element.elementor-element-f93946f {
                                --border-radius: 60px 60px 0px 0px;
                                --margin-top: 0px;
                                --margin-bottom: 0px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --padding-top: 120px;
                                --padding-bottom: 115px;
                                --padding-left: 40px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .input-wrapper {
                                flex: 0 0 77%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button {
                                width: 23%;
                            }
                        }

                        @media(max-width:1024px) {
                            .elementor-1354 .elementor-element.elementor-element-f93946f {
                                --margin-top: 0px;
                                --margin-bottom: 0px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --padding-top: 100px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 30px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --padding-top: 100px;
                                --padding-bottom: 90px;
                                --padding-left: 30px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-12b22b6 {
                                --padding-top: 0px;
                                --padding-bottom: 40px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-7c23f5c .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-4c7cdc0 .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-1e031bb .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-c8e17a4 .wcf--text,
                            .elementor-1354 .elementor-element.elementor-element-c8e17a4 .wcf--text * {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .input-wrapper {
                                flex: 0 0 80%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .input .icon {
                                padding: 0px 10px 0px 20px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button i {
                                font-size: 20px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button svg {
                                font-size: 20px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 .wcf-mc-button {
                                width: 20%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-cccf229 .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-item>.elementor-icon-list-text,
                            .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-item>a {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-212348b .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-item>.elementor-icon-list-text,
                            .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-item>a {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-ec75e3a .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text,
                            .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text * {
                                font-size: 16px;
                            }
                        }

                        @media(max-width:880px) {
                            .elementor-1354 .elementor-element.elementor-element-f93946f {
                                --border-radius: 50px 50px 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --padding-top: 90px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 30px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --padding-top: 90px;
                                --padding-bottom: 56px;
                                --padding-left: 40px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-12b22b6 {
                                --gap: 0px 0px;
                                --flex-wrap: wrap;
                                --padding-top: 0px;
                                --padding-bottom: 40px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8d88a96 {
                                --gap: 15px 15px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-7c23f5c>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-7c23f5c .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-54ccd06 {
                                --gap: 15px 15px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-4c7cdc0>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-4c7cdc0 .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a9b13f1 {
                                --gap: 15px 15px;
                                --margin-top: 43px;
                                --margin-bottom: 2px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-1e031bb>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-1e031bb .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-c8e17a4 {
                                width: var(--container-widget-width, 350px);
                                max-width: 350px;
                                --container-widget-width: 350px;
                                --container-widget-flex-grow: 0;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8621bd7 {
                                width: 100%;
                                max-width: 100%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-5245235 {
                                --gap: 12px 0px;
                                --flex-wrap: wrap;
                            }

                            .elementor-1354 .elementor-element.elementor-element-d64dd26 {
                                --gap: 10px 10px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-cccf229>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-cccf229 .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-item>.elementor-icon-list-text,
                            .elementor-1354 .elementor-element.elementor-element-dbc8cd6 .elementor-icon-list-item>a {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a40cadb {
                                --gap: 10px 10px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-212348b>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-212348b .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-item>.elementor-icon-list-text,
                            .elementor-1354 .elementor-element.elementor-element-3cdcdf1 .elementor-icon-list-item>a {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-0695eb5 {
                                --margin-top: 34px;
                                --margin-bottom: 0px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-ec75e3a>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-ec75e3a .wcf--title {
                                font-size: 26px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text,
                            .elementor-1354 .elementor-element.elementor-element-a12300e .wcf--text * {
                                font-size: 16px;
                            }
                        }

                        @media(max-width:767px) {
                            .elementor-1354 .elementor-element.elementor-element-f93946f {
                                --border-radius: 40px 40px 0px 0px;
                                --padding-top: 60px;
                                --padding-bottom: 30px;
                                --padding-left: 15px;
                                --padding-right: 15px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-726a214 {
                                --gap: 0px 0px;
                                --padding-top: 0px;
                                --padding-bottom: 20px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-edd456c {
                                --padding-top: 0px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8941a42 img {
                                width: 130px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-2e98be9 {
                                --gap: 0px 0px;
                                border-width: 0px 0px 0px 0px;
                                --border-top-width: 0px;
                                --border-right-width: 0px;
                                --border-bottom-width: 0px;
                                --border-left-width: 0px;
                                --padding-top: 40px;
                                --padding-bottom: 40px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-12b22b6 {
                                --gap: 20px 20px;
                                --padding-top: 0px;
                                --padding-bottom: 25px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-8d88a96 {
                                --gap: 10px 10px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-7c23f5c .wcf--title {
                                font-size: 24px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-84afb16 .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-84afb16 .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-06dab0d .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-06dab0d .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-15198ea .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-15198ea .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-01b37ed .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-01b37ed .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-f07ecc6 .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-f07ecc6 .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-54ccd06 {
                                --gap: 10px 10px;
                                --padding-top: 15px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-4c7cdc0 .wcf--title {
                                font-size: 24px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-5be936a .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-5be936a .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-9b30336 .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-9b30336 .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-6715e14 .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-6715e14 .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-ae0888a .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-ae0888a .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-18036fa .wc-btn-primary,
                            .elementor-1354 .elementor-element.elementor-element-18036fa .btn-border-crop {
                                font-size: 16px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a9b13f1 {
                                --gap: 10px 10px;
                                --margin-top: 15px;
                                --margin-bottom: 17px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-1e031bb .wcf--title {
                                font-size: 24px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-c8e17a4 {
                                width: 100%;
                                max-width: 100%;
                            }

                            .elementor-1354 .elementor-element.elementor-element-c8e17a4>.elementor-widget-container {
                                margin: 5px 0px 15px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-5245235 {
                                --gap: 0px 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-cccf229 .wcf--title {
                                font-size: 24px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a40cadb {
                                --margin-top: 0px;
                                --margin-bottom: 0px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                                --padding-top: 40px;
                                --padding-bottom: 40px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-212348b .wcf--title {
                                font-size: 24px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-0695eb5 {
                                --margin-top: 0px;
                                --margin-bottom: 0px;
                                --margin-left: 0px;
                                --margin-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-ec75e3a .wcf--title {
                                font-size: 24px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a9c83aa {
                                --flex-direction: column-reverse;
                                --container-widget-width: 100%;
                                --container-widget-height: initial;
                                --container-widget-flex-grow: 0;
                                --container-widget-align-self: initial;
                                --flex-wrap-mobile: wrap;
                                --justify-content: center;
                                --padding-top: 20px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a12300e.elementor-element {
                                --align-self: center;
                            }

                            .elementor-1354 .elementor-element.elementor-element-a12300e {
                                text-align: left;
                            }
                        }

                        /* Start custom CSS for container, class: .elementor-element-a12dc4d */
                        .elementor-1354 .elementor-element.elementor-element-a12dc4d .btn-text-flip span:before {
                            text-align: left;
                        }

                        .elementor-1354 .elementor-element.elementor-element-a12dc4d .btn-text-flip {
                            perspective: unset;
                        }

                        /* End custom CSS */
                        /* Start custom CSS for container, class: .elementor-element-72ea050 */
                        .elementor-1354 .elementor-element.elementor-element-72ea050 .btn-text-flip span:before {
                            text-align: left;
                        }

                        .elementor-1354 .elementor-element.elementor-element-72ea050 .btn-text-flip {
                            perspective: unset;
                        }

                        /* End custom CSS */
                    </style>
                    <div data-elementor-type="wp-post" data-elementor-id="1354" class="elementor elementor-1354">
                        <div class="elementor-element elementor-element-f93946f e-flex e-con-boxed e-con e-parent"
                            data-id="f93946f" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-726a214 e-con-full e-flex e-con e-child"
                                    data-id="726a214" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-edd456c e-con-full e-flex e-con e-child"
                                        data-id="edd456c" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-8941a42 elementor-widget elementor-widget-wcf--site-logo"
                                            data-id="8941a42" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--site-logo.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <figure class="wp-caption">
                                                        <a href="images/footer-logo-light.webp"
                                                            aria-label="Site Logo">
                                                            <img width="200" height="54"
                                                                src="images/footer-logo-light.webp"
                                                                class="attachment-full size-full wp-image-1371"
                                                                alt="" /> </a>
                                                        <figcaption class="widget-image-caption wp-caption-text">
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2e98be9 e-con-full e-flex e-con e-child"
                                        data-id="2e98be9" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-12b22b6 e-con-full e-flex e-con e-child"
                                            data-id="12b22b6" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-8d88a96 e-con-full e-flex e-con e-child"
                                                data-id="8d88a96" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-7c23f5c wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="7c23f5c" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="wcf--title">Services</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a12dc4d e-con-full e-flex e-con e-child"
                                                    data-id="a12dc4d" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-84afb16 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="84afb16" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="#" class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="UI/UX Design">
                                                                        UI/UX Design </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-06dab0d elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="06dab0d" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="#" class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Web Design">
                                                                        Web Design </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-15198ea elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="15198ea" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="#" class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Branding">
                                                                        Branding </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-01b37ed elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="01b37ed" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="#" class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="WebFlow">
                                                                        WebFlow </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-f07ecc6 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="f07ecc6" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="#" class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Development">
                                                                        Development </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-54ccd06 e-con-full e-flex e-con e-child"
                                                data-id="54ccd06" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-4c7cdc0 wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="4c7cdc0" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="wcf--title">Company</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-72ea050 e-con-full e-flex e-con e-child"
                                                    data-id="72ea050" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-5be936a elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="5be936a" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Home">
                                                                        Home </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9b30336 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="9b30336" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="#" class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Agency">
                                                                        Agency </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6715e14 elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="6715e14" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="#" class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Achievement">
                                                                        Achievement </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ae0888a elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="ae0888a" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/career/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Career">
                                                                        Career </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-18036fa elementor-widget elementor-widget-wcf--arolax-button"
                                                        data-id="18036fa" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--arolax-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wc-btn-wrapper style-3">
                                                                <a href="https://crowdytheme.com/wp/arolax/branding-agency/contact-us/"
                                                                    class="wc-btn-primary btn-text-flip">
                                                                    <span data-text="Contact Us">
                                                                        Contact Us </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a9b13f1 e-con-full e-flex e-con e-child"
                                                data-id="a9b13f1" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-1e031bb wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="1e031bb" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="wcf--title">Agency</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c8e17a4 elementor-widget-mobile_extra__width-initial elementor-widget-mobile__width-inherit wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                    data-id="c8e17a4" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--text.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--text">Feel free to reach out if you want to
                                                            collaborate with us, or simply have a chat.</div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8621bd7 elementor-widget-mobile_extra__width-inherit elementor-widget__width-inherit elementor-widget elementor-widget-wcf--mailchimp"
                                                    data-id="8621bd7" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--mailchimp.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--mailchimp">
                                                            <div class="mailchimp-response-message"></div>
                                                            <form class="wcf-mailchimp-form wcf--form-wrapper"
                                                                data-key="dzFjMmYwYzEwZDBhYThlYzQ2MmQ1M2ZhZWNkYmQ1MzA4ZjczYS11czEwdzFjMmY="
                                                                data-list-id="bb9bc4e11b" data-double-opt=""
                                                                data-list-tags="">
                                                                <div class="input-wrapper">
                                                                    <span class="elementor-screen-only">Email</span>

                                                                    <div class="input before">
                                                                        <div class="icon">
                                                                            <i aria-hidden="true"
                                                                                class="sassly-theme sassly-wcf-icon icon-wcf-envelop1"></i>
                                                                        </div>
                                                                        <input required="" type="email"
                                                                            id="email" name="email"
                                                                            placeholder="Enter your email">
                                                                    </div>
                                                                </div>
                                                                <button class="wcf-mc-button" type="submit"
                                                                    name="wcf-mailchimp" aria-label="Mailchimp Button">
                                                                    <i aria-hidden="true"
                                                                        class="sassly-theme sassly-wcf-icon icon-wcf-kite"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5245235 e-con-full e-flex e-con e-child"
                                            data-id="5245235" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-d64dd26 e-con-full e-flex e-con e-child"
                                                data-id="d64dd26" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-cccf229 wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="cccf229" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="wcf--title">New York</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-bef95ff elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                    data-id="bef95ff" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--text.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--text">1772 Street Charleston, New York</div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-dbc8cd6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="dbc8cd6" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <link rel="stylesheet"
                                                            href="{{asset('css/custom-widget-icon-list.min3f5e.min.css')}}">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <a href="tel:+1%20287-360-633">

                                                                    <span class="elementor-icon-list-text">+1
                                                                        287-360-633</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="mailto:info@yourwebsite.com">

                                                                    <span
                                                                        class="elementor-icon-list-text">info@yourwebsite.com</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a40cadb e-con-full e-flex e-con e-child"
                                                data-id="a40cadb" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-212348b wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="212348b" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="wcf--title">London</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-388c28e elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                                    data-id="388c28e" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--text.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--text">1772 Street Charleston, New York</div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3cdcdf1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="3cdcdf1" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <a href="tel:+1%20287-360-633">

                                                                    <span class="elementor-icon-list-text">+1
                                                                        287-360-633</span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <a href="mailto:info@yourwebsite.com">

                                                                    <span
                                                                        class="elementor-icon-list-text">info@yourwebsite.com</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0695eb5 e-con-full e-flex e-con e-child"
                                                data-id="0695eb5" data-element_type="container"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-ec75e3a wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="ec75e3a" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="wcf--title">Follow Us</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-11efa3f elementor-widget elementor-widget-wcf--social-icons"
                                                    data-id="11efa3f" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--social-icons.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--social-icons">
                                                            <ul>
                                                                <li>
                                                                    <a class="elementor-icon wcf-social-icon social-icon-facebook-f elementor-repeater-item-77237ae"
                                                                        href="#" target="_blank">
                                                                        <span
                                                                            class="elementor-screen-only">Facebook-f</span>
                                                                        <svg class="e-font-icon-svg e-fab-facebook-f"
                                                                            viewBox="0 0 320 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                                            </path>
                                                                        </svg> </a>
                                                                </li>
                                                                <li>
                                                                    <a class="elementor-icon wcf-social-icon social-icon-twitter elementor-repeater-item-3d56888"
                                                                        href="#" target="_blank">
                                                                        <span class="elementor-screen-only">Twitter</span>
                                                                        <svg class="e-font-icon-svg e-fab-twitter"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                            </path>
                                                                        </svg> </a>
                                                                </li>
                                                                <li>
                                                                    <a class="elementor-icon wcf-social-icon social-icon-instagram elementor-repeater-item-7fe7168"
                                                                        href="#" target="_blank">
                                                                        <span
                                                                            class="elementor-screen-only">Instagram</span>
                                                                        <svg class="e-font-icon-svg e-fab-instagram"
                                                                            viewBox="0 0 448 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                                            </path>
                                                                        </svg> </a>
                                                                </li>
                                                                <li>
                                                                    <a class="elementor-icon wcf-social-icon social-icon-linkedin elementor-repeater-item-02b619e"
                                                                        href="#" target="_blank">
                                                                        <span
                                                                            class="elementor-screen-only">Linkedin</span>
                                                                        <svg class="e-font-icon-svg e-fab-linkedin"
                                                                            viewBox="0 0 448 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                                                            </path>
                                                                        </svg> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a9c83aa e-con-full e-flex e-con e-child"
                                    data-id="a9c83aa" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-a12300e wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
                                        data-id="a12300e" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--text.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf--text">© 2024 &#8211; 2025  <span style="color: #ffffff"><a
                                                        href="https://themeforest.net/user/crowdytheme">crowdyTheme</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- #page -->
            </div>
        </div>


        <style id='wcf-scroll-to-top-inline-css' type='text/css'>
            .wcf-scroll-to-top {
                bottom: 5px;
                right: 15px;
                width: 35px;
                height: 35px;
                z-index: 9999;
                background-color: #BAE900;
                border-radius: 5px;
                font-size: 16px;
                color: #121212;
                fill: #121212;
                mix-blend-mode: normal;
            }

            .wcf-scroll-to-top.scroll-to-circle {
                width: 35px;
                height: 35px;
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
                "ajaxUrl": "https:\/\/crowdytheme.com\/wp\/arolax\/branding-agency\/wp-admin\/admin-ajax.php",
                "_wpnonce": "de38716b20"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" id="wcf--addons-js-extra">
            /* <![CDATA[ */
            var WCF_ADDONS_JS = {
                "ajaxUrl": "https:\/\/crowdytheme.com\/wp\/arolax\/branding-agency\/wp-admin\/admin-ajax.php",
                "_wpnonce": "26316aba22",
                "post_id": "8265",
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
                "ajax_url": "https:\/\/crowdytheme.com\/wp\/arolax\/branding-agency\/wp-admin\/admin-ajax.php",
                "cart_update_qty_change": ""
            };
            /* ]]> */
        </script>
        <script type="text/javascript" id="elementor-frontend-js-before">
            /* <![CDATA[ */
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close",
                    "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                    "a11yCarouselPrevSlideMessage": "Previous slide",
                    "a11yCarouselNextSlideMessage": "Next slide",
                    "a11yCarouselFirstSlideMessage": "This is the first slide",
                    "a11yCarouselLastSlideMessage": "This is the last slide",
                    "a11yCarouselPaginationBulletMessage": "Go to slide"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile Portrait",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Landscape",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet": {
                            "label": "Tablet Portrait",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Landscape",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": true
                        }
                    }
                },
                "version": "3.23.4",
                "is_static": false,
                "experimentalFeatures": {
                    "e_optimized_css_loading": true,
                    "e_font_icon_svg": true,
                    "additional_custom_breakpoints": true,
                    "container": true,
                    "container_grid": true,
                    "e_swiper_latest": true,
                    "e_nested_atomic_repeaters": true,
                    "e_optimized_control_loading": true,
                    "e_onboarding": true,
                    "home_screen": true,
                    "ai-layout": true,
                    "e_lazyload": true,
                    "e_element_cache": true
                },
                "urls": {
                    "assets": "https:\/\/crowdytheme.com\/wp\/arolax\/branding-agency\/wp-content\/plugins\/elementor\/assets\/",
                    "ajaxurl": "https:\/\/crowdytheme.com\/wp\/arolax\/branding-agency\/wp-admin\/admin-ajax.php"
                },
                "nonces": {
                    "floatingButtonsClickTracking": "29c5cdb9da"
                },
                "swiperClass": "swiper",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet",
                        "viewport_tablet_extra", "viewport_laptop", "viewport_widescreen"
                    ],
                    "wcf_enable_preloader": "yes",
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description",
                    "wcf_enable_cursor": "yes",
                    "wcf_cursor_breakpoint": "mobile"
                },
                "post": {
                    "id": 8265,
                    "title": "Home%20Dark%20%E2%80%93%20Branding%20Agency",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
            /* ]]> */
        </script>
            </body>


    </html>
@endsection


@section('footer_scripts')
<link rel='stylesheet' id='elementor-post-13-css' href='{{asset('css/post-137cdd.min.css')}}' type='text/css' media='all' />
            
            
            <link rel='stylesheet' id='arolax-button-css'
                href="{{asset('css/arolax-buttonb6a4.min.css')}}" type='text/css'
                media='all' />
            <link rel='stylesheet' id='e-animations-css'
                href="{{asset('css/animations.mind5d5.min.css')}}"
                type='text/css' media='all' />
            <link rel='stylesheet' id='elementor-post-1354-css'
                href="{{asset('css/post-13543f5e.min.css')}}" type='text/css'
                media='all' />
            <link rel='stylesheet' id='wcf--mailchimp-css'
                href="{{asset('css/mailchimpb6a4.min.css')}}"
                type='text/css' media='all' />
                <script type="text/javascript" src="{{asset('js/videob6a4.min.js')}}"
                id="arolax-video-js"></script>
            
            <script type="text/javascript" defer
                src="{{asset('js/mailchimpb6a4.min.js')}}"
                id="wcf--mailchimp-js"></script>
            
            
    
@endsection
