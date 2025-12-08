 
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="assets/xmlrpc.php" />

    <link rel='dns-prefetch' href='{{asset('http://fonts.googleapis.com/')}}' />
    
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/crowdytheme.com\/wp\/arolax\/web-design-agencey\/wp-includes\/js\/wp-emoji-release.min.js"
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
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
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
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
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
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
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
    <link rel='stylesheet' id='arolax-fonts-css'
        href='{{asset('https://fonts.googleapis.com/css?family=DM+Sans%3A300%2C400%3B500%2C600%2C700%2C800%2C900%7CPT+Serif%3A400%3B500%2C600%2C700&amp;ver=2')}}'
        type='text/css' media='all' />


    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/arolax-galleryb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/arolax-tabsb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/arolax-testimonialb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/brand-sliderb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/buttonb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/custom-frontend-lite.min5938-2.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/custom-widget-icon-list.min8f33.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/icon-boxb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/post-35938-2.min.css') }}' type='text/css'
        media='all' />

    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/post-138638de.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/post-603301d5.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/postsb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/social-iconsb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/teamb6a4.min.css') }}' type='text/css'
        media='all' />

    <link rel='stylesheet' id='wcf--addons-css' href='{{ asset('css/wcf-addonsb6a4.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='magnific-popup-css' defer href='{{ asset('css/magnific-popupb6a4.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wcf--addons-ex-css' href='{{ asset('css/wcf-addons-exb6a4.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wcf--addons-pro-css' href='{{ asset('css/wcf-addons-prob6a4.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='meanmenu-css' href='{{ asset('css/meanmenu.min77ae.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css' defer href='{{ asset('css/bootstrap.min77ae.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='arolax-style-css' href='{{ asset('css/master77ae.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wcf-custom-icons-css' href='{{ asset('css/custom-icons.min77ae.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('css/custom-frontend-lite.min5938.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='{{ asset('css/swiper.min94a4.min.css') }}' type='text/css'
        media='all' />
    {{-- <link rel='stylesheet' id='elementor-post-3-css' href='{{ asset('css/post-35938.min.css') }}' type='text/css'
        media='all' /> --}}
    <link rel='stylesheet' id='elementor-global-css' href='{{ asset('css/global1e88.min.css') }}' type='text/css'
        media='all' />
    
    










    <link rel='stylesheet' id='google-fonts-1-css'
        href='{{ asset('https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CTeko%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CKanit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.6.1') }}'
        type='text/css' media='all' />
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com/')}}" crossorigin>
    <script type="text/javascript" src="{{ asset('js/jquery.minf43b.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate.min5589.min.js') }}" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="{{asset('assets/index-3.html')}}" />
    <link rel="alternate" title="JSON" type="application/json" href="{{asset('assets/7595.json')}}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{asset('assets/xmlrpc0db0.php')}}" />
    <meta name="generator" content="WordPress 6.6.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href="{{asset('assets/index0734.html')}}" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="{{asset('assets/embedcf05.json?url=https%3A%2F%2Fcrowdytheme.com%2Fwp%2Farolax%2Fweb-design-agencey%2Fhome-dark%2F')}}" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="{{asset('assets/embed8d81?url=https%3A%2F%2Fcrowdytheme.com%2Fwp%2Farolax%2Fweb-design-agencey%2Fhome-dark%2F&amp;format=xml')}}" />
    <style id="arolax-theme-global-css">
        @media (max-width: 767.98px) {
            .element {
                color: #ffbc00;
            }
        }
    </style>


    <style type="text/css">
        .offcanvas__logo {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 30px;
            padding-left: 0px;
        }

        .offcanvas__logo p {
            padding-top: 20px;
            padding-right: 0px;
            padding-bottom: 10px;
            padding-left: 0px;
        }

        .animation-preloader img {
            width: 100px;
            height: 200px;
        }
    </style>
    
    <style type="text/css" id="wp-custom-css">
        /** Mega Menu CSS Start **/
        @media (min-width: 1200px) {

            .elementor-element-b7b6d24,
            .elementor-element-32eb3e9,
            #menu-item-8063 {
                position: static !important;
            }

            #menu-item-8063>.sub-menu {
                width: 96%;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                left: 2%;
                top: 80px;
                border-radius: 5px;
                padding: 0
            }

            #menu-item-8063 .sub-menu .sub-menu {
                position: static;
                opacity: 0;
                visibility: hidden;
                transform: unset;
                border-radius: 0;
                border: 0;
            }

            #menu-item-8063:hover .sub-menu .sub-menu {
                opacity: 1;
                visibility: visible;
            }


            #menu-item-8063>.sub-menu>li {
                border-right: 1px solid #ddd;
            }

            #menu-item-8063>.sub-menu>li:last-child {
                border-right: none;
            }

            #menu-item-8063>.sub-menu>li>a {
                border-bottom: 1px solid #ddd;
                text-transform: uppercase;
                padding: 18px 30px;
                pointer-events: none;
            }

            #menu-item-8063 .wcf-submenu-indicator {
                display: none;
            }
        }

        .sub-menu .menu-item a .menu-text:after {
            display: block;
            content: '';
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
