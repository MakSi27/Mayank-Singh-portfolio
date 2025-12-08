@extends('master')

@section('head_scripts')
    <title>Self Site</title>
    <link rel='stylesheet' id='elementor-post-7595-css' href='{{ asset('css/index-stylesheet.min.css') }}' type='text/css'
        media='all' />
        <link rel="alternate" type="application/rss+xml" title="web-design-agencey &raquo; Feed" href="{{asset('assets/index.html')}}" />
    <link rel="alternate" type="application/rss+xml" title="web-design-agencey &raquo; Comments Feed"
        href="{{asset('assets/index-2.html')}}" />
        <link rel='stylesheet' id='elementor-post-7595-css' href='{{ asset('css/post-75958f33.min.css') }}'
        type='text/css' media='all' />
    <link rel="stylesheet" href="{{ asset('css/new-home.min.css') }}">
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
<style>
    /*! elementor - v3.23.0 - 05-08-2024 */
    .elementor-widget-divider {
    --divider-border-style: none;
    --divider-border-width: 1px;
    --divider-color: #0c0d0e;
    --divider-icon-size: 20px;
    --divider-element-spacing: 10px;
    --divider-pattern-height: 24px;
    --divider-pattern-size: 20px;
    --divider-pattern-url: none;
    --divider-pattern-repeat: repeat-x
    }

    .elementor-widget-divider .elementor-divider {
    display: flex
    }

    .elementor-widget-divider .elementor-divider__text {
    font-size: 15px;
    line-height: 1;
    max-width: 95%
    }

    .elementor-widget-divider .elementor-divider__element {
    margin: 0 var(--divider-element-spacing);
    flex-shrink: 0
    }

    .elementor-widget-divider .elementor-icon {
    font-size: var(--divider-icon-size)
    }

    .elementor-widget-divider .elementor-divider-separator {
    display: flex;
    margin: 0;
    direction: ltr
    }

    .elementor-widget-divider--view-line_icon .elementor-divider-separator,
    .elementor-widget-divider--view-line_text .elementor-divider-separator {
    align-items: center
    }

    .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
    .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
    .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
    .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
    display: block;
    content: "";
    border-block-end: 0;
    flex-grow: 1;
    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
    }

    .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
    flex-grow: 0;
    flex-shrink: 100
    }

    .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
    content: none
    }

    .elementor-widget-divider--element-align-left .elementor-divider__element {
    margin-left: 0
    }

    .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
    flex-grow: 0;
    flex-shrink: 100
    }

    .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
    content: none
    }

    .elementor-widget-divider--element-align-right .elementor-divider__element {
    margin-right: 0
    }

    .elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
    flex-grow: 0;
    flex-shrink: 100
    }

    .elementor-widget-divider--element-align-start .elementor-divider-separator:before {
    content: none
    }

    .elementor-widget-divider--element-align-start .elementor-divider__element {
    margin-inline-start: 0
    }

    .elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
    flex-grow: 0;
    flex-shrink: 100
    }

    .elementor-widget-divider--element-align-end .elementor-divider-separator:after {
    content: none
    }

    .elementor-widget-divider--element-align-end .elementor-divider__element {
    margin-inline-end: 0
    }

    .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
    }

    .elementor-widget-divider--separator-type-pattern {
    --divider-border-style: none
    }

    .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
    .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
    width: 100%;
    min-height: var(--divider-pattern-height);
    -webkit-mask-size: var(--divider-pattern-size) 100%;
    mask-size: var(--divider-pattern-size) 100%;
    -webkit-mask-repeat: var(--divider-pattern-repeat);
    mask-repeat: var(--divider-pattern-repeat);
    background-color: var(--divider-color);
    -webkit-mask-image: var(--divider-pattern-url);
    mask-image: var(--divider-pattern-url)
    }

    .elementor-widget-divider--no-spacing {
    --divider-pattern-size: auto
    }

    .elementor-widget-divider--bg-round {
    --divider-pattern-repeat: round
    }

    .rtl .elementor-widget-divider .elementor-divider__text {
    direction: rtl
    }

    .e-con-inner>.elementor-widget-divider,
    .e-con>.elementor-widget-divider {
    width: var(--container-widget-width, 100%);
    --flex-grow: var(--container-widget-flex-grow)
    }
</style>
@endsection


@section('main_content')

    
                    <div data-elementor-type="wp-page" data-elementor-id="7595" class="elementor elementor-7595">
                        <div class="elementor-element elementor-element-d3528ce e-con-full e-flex e-con e-parent"
                            data-id="d3528ce" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-75a45f4 e-flex e-con-boxed e-con e-child"
                                data-id="75a45f4" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-52cf0a3 e-con-full e-flex e-con e-child"
                                        data-id="52cf0a3" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-ac8608d wcf-t-animation-char elementor-widget elementor-widget-wcf--title"
                                            data-id="ac8608d" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;char&quot;,&quot;text_duration&quot;:1.2,&quot;text_stagger&quot;:0.04,&quot;text_translate_x&quot;:50,&quot;text_delay&quot;:0.15,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_translate_y&quot;:0,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="wcf--title">We are Skilled in</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-01358a4 e-con-full e-flex e-con e-child"
                                            data-id="01358a4" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-1a85108 e-con-full e-flex e-con e-child"
                                                data-id="1a85108" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-f6b85e2 wcf-t-animation-text_move elementor-widget elementor-widget-heading"
                                                    data-id="f6b85e2" data-element_type="widget"
                                                    data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.3,&quot;text_rotation_di&quot;:&quot;y&quot;,&quot;text_rotation&quot;:-40,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        
                                                        <h2 class="elementor-heading-title elementor-size-default">App </h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-24178fa elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="24178fa" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cd9cff7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="cd9cff7" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-99dbe88 e-con-full e-flex e-con e-child"
                                                data-id="99dbe88" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-70f26dc wcf-t-animation-text_move elementor-widget elementor-widget-wcf--title"
                                                    data-id="70f26dc" data-element_type="widget"
                                                    data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.5,&quot;text_rotation_di&quot;:&quot;y&quot;,&quot;text_rotation&quot;:-40,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="wcf--title">and</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-624b12c e-con-full e-flex e-con e-child"
                                                data-id="624b12c" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.5,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-b672f83 e-con-full e-flex e-con e-child"
                                                    data-id="b672f83" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-b1069d1 e-flex e-con-boxed e-con e-child"
                                                        data-id="b1069d1" data-element_type="container"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                        <div class="e-con-inner">
                                                            <div class="elementor-element elementor-element-e9c4746 wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                                data-id="e9c4746" data-element_type="widget"
                                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2
                                                                        class="elementor-heading-title elementor-size-default">
                                                                        website development</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9df391b e-con-full e-flex e-con e-child"
                                                    data-id="9df391b" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-cb7abbf e-con-full e-flex e-con e-child"
                                                        data-id="cb7abbf" data-element_type="container"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                        <div class="elementor-element elementor-element-34c3477 elementor-widget elementor-widget-wcf--image"
                                                            data-id="34c3477" data-element_type="widget"
                                                            data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                            data-widget_type="wcf--image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="wcf--image">
                                                                    <img decoding="async" width="82" height="84"
                                                                        src="images/text-img.webp"
                                                                        class="attachment-large size-large wp-image-43"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1369445 e-con-full e-flex e-con e-child"
                                            data-id="1369445" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-68a187c e-con-full e-flex e-con e-child"
                                                data-id="68a187c" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-9c18412 e-con-full e-flex e-con e-child"
                                                    data-id="9c18412" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-1df6f7d elementor-widget elementor-widget-wcf--image"
                                                        data-id="1df6f7d" data-element_type="widget"
                                                        data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--image">
                                                                <img decoding="async" width="50" height="80"
                                                                    src="images/scroll.png"
                                                                    class="attachment-thumbnail size-thumbnail wp-image-7604"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a3f7924 e-con-full e-flex e-con e-child"
                                                    data-id="a3f7924" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-9a42484 wcf-t-animation-word elementor-widget elementor-widget-text-editor"
                                                        data-id="9a42484" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;word&quot;,&quot;text_delay&quot;:0.9,&quot;text_duration&quot;:1.3,&quot;text_translate_x&quot;:-40,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_translate_y&quot;:0,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.23.0 - 05-08-2024 */
                                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                    background-color: #69727d;
                                                                    color: #fff
                                                                }

                                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                    color: #69727d;
                                                                    border: 3px solid;
                                                                    background-color: transparent
                                                                }

                                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                    margin-top: 8px
                                                                }

                                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                    width: 1em;
                                                                    height: 1em
                                                                }

                                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                                    float: left;
                                                                    text-align: center;
                                                                    line-height: 1;
                                                                    font-size: 50px
                                                                }

                                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                    display: inline-block
                                                                }
                                                            </style>
                                                            <p>We are a full-service digital agency focused on app and website development. Our team is dedicated to building fascinating user experiences with exceptional UI design<br />and functionality. </p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-819ca57 elementor-widget elementor-widget-wcf--button"
                                                        data-id="819ca57" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:1,&quot;fade-from&quot;:&quot;left&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                        data-widget_type="wcf--button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf__btn icon-position-after">
                                                                <a href="../about-us-01/index.html"
                                                                    class="wcf-btn-underline">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="21" height="7"
                                                                        viewBox="0 0 21 7" fill="none">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M11.726 0.366792C12.0758 -0.0606525 12.7058 -0.123655 13.1332 0.226073L20.8014 6.50003H1C0.447715 6.50003 0 6.05231 0 5.50003C0 4.94775 0.447715 4.50003 1 4.50003H15.1986L11.8668 1.77399C11.4393 1.42426 11.3763 0.794237 11.726 0.366792Z"
                                                                            fill="white"></path>
                                                                    </svg> get started now </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-41c2c4c e-con-full elementor-hidden-mobile e-flex e-con e-child"
                                        data-id="41c2c4c" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-3e84089 e-con-full e-flex e-con e-child"
                                            data-id="3e84089" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-baa7444 elementor-widget elementor-widget-wcf--floating-elements"
                                                data-id="baa7444" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--floating-elements.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf--floating-elements">
                                                        <div
                                                            class="floating-element wcf-live-anim- elementor-repeater-item-01dbe21    elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile">
                                                            <img decoding="async" src="images/hero-shape.png"
                                                                alt="hero-shape" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-34aad57 e-con-full e-flex e-con e-child"
                                                data-id="34aad57" data-element_type="container"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div data-speed="1.1"
                                                    class="elementor-element elementor-element-81b8cf6 elementor-widget elementor-widget-image"
                                                    data-id="81b8cf6" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.5,&quot;fade-offset&quot;:70,&quot;data-duration&quot;:2,&quot;ease&quot;:&quot;bounce&quot;,&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;fade-from&quot;:&quot;top&quot;}"
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
                                                        </style> <img fetchpriority="high" decoding="async"
                                                            width="210" height="420"
                                                            src="images/Group-1000003642.png"
                                                            class="attachment-full size-full wp-image-7503"
                                                            alt=""
                                                            srcset="images/Group-1000003642.png 210w, images/Group-1000003642-150x300.png 150w"
                                                            sizes="(max-width: 210px) 100vw, 210px" />
                                                    </div>
                                                </div>
                                                <div data-speed="0.9"
                                                    class="elementor-element elementor-element-cb48386 elementor-widget elementor-widget-image"
                                                    data-id="cb48386" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.5,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;fade-offset&quot;:70,&quot;data-duration&quot;:2,&quot;ease&quot;:&quot;bounce&quot;,&quot;wcf-image-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="251"
                                                            height="500" src="images/1-1.jpg"
                                                            class="attachment-large size-large wp-image-402"
                                                            alt=""
                                                            srcset="images/1-1.jpg 251w, images/1-1-151x300.jpg 151w"
                                                            sizes="(max-width: 251px) 100vw, 251px" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2e8d545 e-con-full e-flex e-con e-child"
                                                data-id="2e8d545" data-element_type="container"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <!-- <div class="elementor-element elementor-element-65a5bce e-con-full e-flex e-con e-child"
                                                    data-id="65a5bce" data-element_type="container"
                                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                    <div class="elementor-element elementor-element-22e300c elementor-widget elementor-widget-wcf--video-popup"
                                                        data-id="22e300c" data-element_type="widget"
                                                        data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="wcf--video-popup.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wcf--video-popup">
                                                                <a class="wcf-popup-btn "
                                                                    href="#"
                                                                    aria-label="Popup Video Open Icon">
                                                                    <i aria-hidden="true"
                                                                        class="arolax-theme arolax-wcf-icon icon-wcf-play-icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6ab6305 wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                        data-id="6ab6305" data-element_type="widget"
                                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                Watch <br>
                                                                Video</h2>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="elementor-element elementor-element-dfe69e2 e-con-full e-flex e-con e-child"
                                                data-id="dfe69e2" data-element_type="container"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-566d34f elementor-widget elementor-widget-wcf--image"
                                                    data-id="566d34f" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="80"
                                                                height="50" src="images/arrow-btn.png"
                                                                class="attachment-large size-large wp-image-7609"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c99ec24 elementor-widget elementor-widget-wcf--image"
                                                    data-id="c99ec24" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="160"
                                                                height="55" src="images/thumb.webp"
                                                                class="attachment-large size-large wp-image-44"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5e04214 wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="5e04214" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="wcf--title"> we have <span class="highlight">
                                                                 experienced</span> developers
                                                           </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-affbc87 e-con-full elementor-hidden-mobile e-flex e-con e-child"
                                            data-id="affbc87" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-ccda57a e-con-full e-flex e-con e-child"
                                                data-id="ccda57a" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-36ed1a0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="36ed1a0" data-element_type="widget"
                                                    data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Building</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Outstanding</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Design &</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-text">Development</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ebce2eb elementor-widget elementor-widget-wcf--floating-elements"
                                data-id="ebce2eb" data-element_type="widget"
                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                data-widget_type="wcf--floating-elements.default">
                                <div class="elementor-widget-container">
                                    <div class="wcf--floating-elements">
                                        <div
                                            class="floating-element wcf-live-anim- elementor-repeater-item-b34ecdc      elementor-hidden-mobile_extra elementor-hidden-mobile">
                                            <img decoding="async" src="images/shape-border.webp" alt="shape-border" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-078aa45 e-con-full e-flex e-con e-parent"
                            data-id="078aa45" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-a796447 e-con-full e-flex e-con e-child"
                                data-id="a796447" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="elementor-element elementor-element-8068804 e-con-full e-flex e-con e-child"
                                    data-id="8068804" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                </div>
                                <div class="elementor-element elementor-element-450b92c e-con-full e-flex e-con e-child"
                                    data-id="450b92c" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-f5003e6 elementor-widget elementor-widget-wcf--brand-slider"
                                        data-id="f5003e6" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;data-duration&quot;:0.75,&quot;fade-offset&quot;:40,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;ease&quot;:&quot;power2.out&quot;}"
                                        data-widget_type="wcf--brand-slider.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf__slider-wrapper wcf--brand-slider-wrapper "
                                                data-settings="{&quot;loop&quot;:true,&quot;speed&quot;:5000,&quot;allowTouchMove&quot;:false,&quot;slidesPerView&quot;:&quot;5&quot;,&quot;spaceBetween&quot;:20,&quot;autoplay&quot;:{&quot;delay&quot;:1,&quot;disableOnInteraction&quot;:&quot;true&quot;},&quot;breakpoints&quot;:{&quot;767&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;,&quot;spaceBetween&quot;:20},&quot;880&quot;:{&quot;slidesPerView&quot;:&quot;4&quot;,&quot;spaceBetween&quot;:20},&quot;1024&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;,&quot;spaceBetween&quot;:20},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;5&quot;,&quot;spaceBetween&quot;:20},&quot;1366&quot;:{&quot;slidesPerView&quot;:&quot;5&quot;,&quot;spaceBetween&quot;:20},&quot;2400&quot;:{&quot;slidesPerView&quot;:&quot;5&quot;,&quot;spaceBetween&quot;:20}}}">
                                                <!-- Slider main container -->
                                                <div class="wcf__slider swiper" dir="ltr"
                                                    style="position: static">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image" src="images/logo-1.webp"
                                                                alt="logo-1.webp" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image" src="images/logo-2.webp"
                                                                alt="logo-2.webp" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image" src="images/logo-3.webp"
                                                                alt="logo-3.webp" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image" src="images/logo-4.webp"
                                                                alt="logo-4.webp" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image" src="images/logo-5.webp"
                                                                alt="logo-5.webp" /></div>
                                                        <div class="swiper-slide"><img decoding="async"
                                                                class="swiper-slide-image" src="images/logo-6.webp"
                                                                alt="logo-6.webp" /></div>
                                                    </div>
                                                    <!-- navigation and pagination -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5ed9c2f e-flex e-con-boxed e-con e-parent"
                            data-id="5ed9c2f" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-2c92ed3 e-con-full e-flex e-con e-child"
                                    data-id="2c92ed3" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-04207ae e-con-full e-flex e-con e-child"
                                        data-id="04207ae" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-5ea34fa highlight wcf-t-animation-word elementor-widget elementor-widget-wcf--title"
                                            data-id="5ea34fa" data-element_type="widget"
                                            data-settings="{&quot;wcf_text_animation&quot;:&quot;word&quot;,&quot;text_duration&quot;:1.4,&quot;text_stagger&quot;:0.04,&quot;text_translate_x&quot;:-50,&quot;text_delay&quot;:0.15,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_translate_y&quot;:0,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--title.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="wcf--title"><span class="highlight">01 who we are</span> Have a Brilliant Idea? Enhance Your <span class="highlight-2"> Digital Presence</span> with Our App and Website Development Services!</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2e8beb6 e-con-full e-flex e-con e-child"
                                        data-id="2e8beb6" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div data-speed="0.85"
                                            class="elementor-element elementor-element-ed45553 elementor-hidden-mobile elementor-widget elementor-widget-wcf--image"
                                            data-id="ed45553" data-element_type="widget"
                                            data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="wcf--image.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--image">
                                                    <img loading="lazy" decoding="async" width="142"
                                                        height="87" src="images/design-shape-1.png"
                                                        class="attachment-large size-large wp-image-7677"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9910fcb e-con-full e-flex e-con e-child"
                                    data-id="9910fcb" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                  
                                    <div class="elementor-element elementor-element-a7671ab e-con-full e-flex e-con e-child"
                                        data-id="a7671ab" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-9192b03 e-con-full e-flex e-con e-child"
                                            data-id="9192b03" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-626b4a7 wcf-t-animation-text_move elementor-widget elementor-widget-text-editor"
                                                data-id="626b4a7" data-element_type="widget"
                                                data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Consumers today rely heavily on digital means to research products. At our agency, we understand this shift and specialize in developing engaging apps and websites that help brands stand out. In fact, 51% of consumers emphasize the importance of seamless digital experiences when choosing products.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-44b7336 elementor-widget elementor-widget-wcf--button"
                                                data-id="44b7336" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;on-scroll&quot;:&quot;1&quot;,&quot;fade_animation_breakpoint&quot;:&quot;mobile&quot;,&quot;ease&quot;:&quot;bounce&quot;,&quot;delay&quot;:0.15,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5,&quot;fade-offset&quot;:50,&quot;fade_breakpoint_min_max&quot;:&quot;min&quot;}"
                                                data-widget_type="wcf--button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf__btn icon-position-after">
                                                        <div class="btn-wrapper">
                                                            <a href="../about-us-01/index.html"
                                                                class="wcf-btn-circle btn-item btn-hover-bgchange">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 14 14">
                                                                    <path
                                                                        d="M3.49146 0.25V1.5876H11.53L0.9375 12.683L1.83777 13.626L12.4303 2.53061V10.9508H13.7073V0.25H3.49146Z">
                                                                    </path>
                                                                </svg> Explore Us <br> More </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3e0f7d5 e-con-full e-flex e-con e-child"
                                        data-id="3e0f7d5" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-1e166c4 e-con-full e-flex e-con e-child"
                                            data-id="1e166c4" data-element_type="container"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-7773746 e-con-full e-flex e-con e-child"
                                                data-id="7773746" data-element_type="container"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.2,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-67dd1b1 elementor-widget elementor-widget-wcf--image"
                                                    data-id="67dd1b1" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="28"
                                                                height="25" src="images/quote-left.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7681"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f1635e6 wcf-t-animation-none elementor-widget elementor-widget-text-editor"
                                                    data-id="f1635e6" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Make your business prosper with our great team of experts. We’ll
                                                            make your.</p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7de578d wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="7de578d" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="wcf--title">1.8<span class="highlight">x</span></h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d6dcaca wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
                                                    data-id="d6dcaca" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--title.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="wcf--title">Faster Service</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d0c9d71 e-con-full e-flex e-con e-parent"
                            data-id="d0c9d71" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-ef6d495 e-flex e-con-boxed e-con e-child"
                                data-id="ef6d495" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-3a5bc64 e-con-full e-flex e-con e-child"
                                        data-id="3a5bc64" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-56b0a0f e-con-full e-flex e-con e-child"
                                            data-id="56b0a0f" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-2f6351a elementor-widget elementor-widget-wcf--floating-elements"
                                                data-id="2f6351a" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;ease&quot;:&quot;bounce&quot;,&quot;fade-offset&quot;:70,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5}"
                                                data-widget_type="wcf--floating-elements.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf--floating-elements">
                                                        <div
                                                            class="floating-element wcf-live-anim-wiggle elementor-repeater-item-b3a5ab4       elementor-hidden-mobile">
                                                            <img decoding="async" src="images/ok-img.webp"
                                                                alt="ok-img" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-cd1dda2 wcf-t-animation-text_reveal elementor-widget elementor-widget-heading"
                                                data-id="cd1dda2" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Empower Your Vision with Our App and Website Development Expertise</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0ccc16e e-con-full e-flex e-con e-child"
                                                data-id="0ccc16e" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-15aaea1 elementor-widget__width-initial wcf-t-animation-text_move elementor-widget elementor-widget-text-editor"
                                                    data-id="15aaea1" data-element_type="widget"
                                                    data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Our collaborative approach in app and website development helps bring your digital vision to life, making it a vibrant reality for your target audience.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c9096ae e-con-full e-flex e-con e-child"
                                        data-id="c9096ae" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-0d9d65e e-con-full e-flex e-con e-child"
                                            data-id="0d9d65e" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-f0a07b8 elementor-widget__width-initial elementor-widget elementor-widget-wcf--icon-box"
                                                data-id="f0a07b8" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                data-widget_type="wcf--icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf__iconbox style-">
                                                        <div class="elementor-icon icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="60" viewBox="0 0 60 60" fill="none">
                                                                <path
                                                                    d="M30.0115 7.23803e-06C24.723 -0.00367286 19.5281 1.39604 14.9573 4.05635C14.2603 4.47264 13.573 4.90839 12.9147 5.3634C7.44186 9.15007 3.38539 14.6509 1.38526 20.9984C-0.614867 27.3458 -0.444969 34.1786 1.86838 40.4188C1.96519 40.7092 2.08145 40.9899 2.19762 41.2706C2.39124 41.7482 2.59467 42.2131 2.80765 42.6649C2.8851 42.8391 2.96255 43.0135 3.04968 43.1877C5.89744 49.0029 10.5494 53.7411 16.3114 56.695C22.0734 59.6489 28.6363 60.6601 35.0202 59.5776C41.4041 58.4951 47.2666 55.377 51.7327 50.6887C56.1988 46.0004 59.0289 39.9934 59.8004 33.5645C59.8876 32.8771 59.9553 32.1802 59.9843 31.4831C59.9843 30.9894 59.9843 30.515 59.9843 30.0116C59.9843 22.0587 56.8278 14.4309 51.208 8.8038C45.5881 3.17665 37.9644 0.010269 30.0115 7.23803e-06ZM1.93621 30.0116C1.93916 25.2663 3.14495 20.5993 5.44066 16.4464C7.73637 12.2934 11.0471 8.7901 15.0639 6.26368C18.2802 7.83988 20.9705 10.315 22.8088 13.3891C22.0143 13.9806 21.4205 14.8014 21.1073 15.7411C20.7941 16.6807 20.7767 17.6939 21.0574 18.6438C21.3382 19.5936 21.9035 20.4345 22.6772 21.053C23.4509 21.6714 24.3955 22.0376 25.3839 22.1021C25.3839 22.3345 25.3839 22.5571 25.3839 22.7895C25.38 24.5233 25.129 26.2478 24.6385 27.9108C16.7655 30.074 9.55333 34.1592 3.64979 39.7993C2.49553 36.6661 1.91506 33.3505 1.93621 30.0116ZM23.8835 30.147C22.4514 33.4234 20.0952 36.2115 17.1034 38.1699C14.1117 40.1283 10.6139 41.1722 7.03819 41.174C6.40763 41.176 5.77747 41.1436 5.15042 41.077C10.4659 36.0325 16.878 32.288 23.8835 30.1373V30.147ZM30.0115 58.0869C24.8848 58.0846 19.8567 56.6786 15.4723 54.0213C11.088 51.3641 7.51493 47.5571 5.14073 43.0133C5.77 43.0714 6.39928 43.1102 7.07696 43.1102C11.2855 43.1049 15.3886 41.7934 18.8203 39.3571C22.252 36.9207 24.8431 33.4795 26.236 29.5081C36.8666 26.8406 48.0935 27.9458 57.9999 32.6351C57.3459 39.6025 54.1135 46.0746 48.9361 50.7828C43.7587 55.491 37.0095 58.0958 30.0115 58.0869ZM58.0869 30.5635C48.3041 26.105 37.327 24.9859 26.8458 27.3783C27.1992 25.8708 27.3811 24.3282 27.388 22.7798C27.388 22.4603 27.388 22.1408 27.388 21.8117C28.4446 21.4145 29.3293 20.6607 29.8889 19.6804C30.4485 18.7001 30.6478 17.5551 30.4526 16.4433C30.2573 15.3315 29.6797 14.3229 28.8196 13.5919C27.9595 12.8609 26.8709 12.4537 25.7422 12.4404C25.3766 12.4407 25.0123 12.4861 24.6578 12.5758C22.8395 9.47138 20.2392 6.89784 17.1162 5.11168C21.3949 2.88658 26.1747 1.80118 30.9948 1.96011C35.8149 2.11904 40.513 3.51693 44.6358 6.01905C48.7587 8.52117 52.1673 12.0431 54.5335 16.2455C56.8997 20.4478 58.1435 25.1889 58.145 30.0116C58.0869 30.1858 58.0772 30.3698 58.0675 30.5538L58.0869 30.5635Z"
                                                                    fill="#121212"></path>
                                                            </svg>
                                                        </div>

                                                        <h3 class="title">
                                                            Dedicated App and Web Development Team </h3>

                                                        <div class="desc">
                                                            <p>Connect with top-tier developers led by senior experts to craft bespoke digital solutions that elevate your brand.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b70cbf3 e-con-full e-flex e-con e-child"
                                            data-id="b70cbf3" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-5079cab elementor-widget__width-initial elementor-widget elementor-widget-wcf--icon-box"
                                                data-id="5079cab" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.25,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                data-widget_type="wcf--icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf__iconbox style-">
                                                        <div class="elementor-icon icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="60" viewBox="0 0 60 60" fill="none">
                                                                <path
                                                                    d="M30.0115 7.23803e-06C24.723 -0.00367286 19.5281 1.39604 14.9573 4.05635C14.2603 4.47264 13.573 4.90839 12.9147 5.3634C7.44186 9.15007 3.38539 14.6509 1.38526 20.9984C-0.614867 27.3458 -0.444969 34.1786 1.86838 40.4188C1.96519 40.7092 2.08145 40.9899 2.19762 41.2706C2.39124 41.7482 2.59467 42.2131 2.80765 42.6649C2.8851 42.8391 2.96255 43.0135 3.04968 43.1877C5.89744 49.0029 10.5494 53.7411 16.3114 56.695C22.0734 59.6489 28.6363 60.6601 35.0202 59.5776C41.4041 58.4951 47.2666 55.377 51.7327 50.6887C56.1988 46.0004 59.0289 39.9934 59.8004 33.5645C59.8876 32.8771 59.9553 32.1802 59.9843 31.4831C59.9843 30.9894 59.9843 30.515 59.9843 30.0116C59.9843 22.0587 56.8278 14.4309 51.208 8.8038C45.5881 3.17665 37.9644 0.010269 30.0115 7.23803e-06ZM1.93621 30.0116C1.93916 25.2663 3.14495 20.5993 5.44066 16.4464C7.73637 12.2934 11.0471 8.7901 15.0639 6.26368C18.2802 7.83988 20.9705 10.315 22.8088 13.3891C22.0143 13.9806 21.4205 14.8014 21.1073 15.7411C20.7941 16.6807 20.7767 17.6939 21.0574 18.6438C21.3382 19.5936 21.9035 20.4345 22.6772 21.053C23.4509 21.6714 24.3955 22.0376 25.3839 22.1021C25.3839 22.3345 25.3839 22.5571 25.3839 22.7895C25.38 24.5233 25.129 26.2478 24.6385 27.9108C16.7655 30.074 9.55333 34.1592 3.64979 39.7993C2.49553 36.6661 1.91506 33.3505 1.93621 30.0116ZM23.8835 30.147C22.4514 33.4234 20.0952 36.2115 17.1034 38.1699C14.1117 40.1283 10.6139 41.1722 7.03819 41.174C6.40763 41.176 5.77747 41.1436 5.15042 41.077C10.4659 36.0325 16.878 32.288 23.8835 30.1373V30.147ZM30.0115 58.0869C24.8848 58.0846 19.8567 56.6786 15.4723 54.0213C11.088 51.3641 7.51493 47.5571 5.14073 43.0133C5.77 43.0714 6.39928 43.1102 7.07696 43.1102C11.2855 43.1049 15.3886 41.7934 18.8203 39.3571C22.252 36.9207 24.8431 33.4795 26.236 29.5081C36.8666 26.8406 48.0935 27.9458 57.9999 32.6351C57.3459 39.6025 54.1135 46.0746 48.9361 50.7828C43.7587 55.491 37.0095 58.0958 30.0115 58.0869ZM58.0869 30.5635C48.3041 26.105 37.327 24.9859 26.8458 27.3783C27.1992 25.8708 27.3811 24.3282 27.388 22.7798C27.388 22.4603 27.388 22.1408 27.388 21.8117C28.4446 21.4145 29.3293 20.6607 29.8889 19.6804C30.4485 18.7001 30.6478 17.5551 30.4526 16.4433C30.2573 15.3315 29.6797 14.3229 28.8196 13.5919C27.9595 12.8609 26.8709 12.4537 25.7422 12.4404C25.3766 12.4407 25.0123 12.4861 24.6578 12.5758C22.8395 9.47138 20.2392 6.89784 17.1162 5.11168C21.3949 2.88658 26.1747 1.80118 30.9948 1.96011C35.8149 2.11904 40.513 3.51693 44.6358 6.01905C48.7587 8.52117 52.1673 12.0431 54.5335 16.2455C56.8997 20.4478 58.1435 25.1889 58.145 30.0116C58.0869 30.1858 58.0772 30.3698 58.0675 30.5538L58.0869 30.5635Z"
                                                                    fill="#121212"></path>
                                                            </svg>
                                                        </div>

                                                        <h3 class="title">
                                                            Product Design and Development Team </h3>

                                                        <div class="desc">
                                                            <p>Engage with our experienced product design managers to craft user-centric digital interfaces that drive engagement and sales.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d782076 e-con-full e-flex e-con e-child"
                                            data-id="d782076" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-3c1089b elementor-widget__width-initial elementor-widget elementor-widget-wcf--icon-box"
                                                data-id="3c1089b" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.35,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                data-widget_type="wcf--icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf__iconbox style-">
                                                        <div class="elementor-icon icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="62"
                                                                height="61" viewBox="0 0 62 61" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M27 8.5V26.5C27 30.0898 24.0899 33 20.5 33C16.9102 33 14 30.0899 14 26.5V8.5C14 4.91015 16.9102 2 20.5 2C24.0899 2 27 4.91015 27 8.5ZM12 8.5C12 3.80558 15.8056 0 20.5 0C25.1944 0 29 3.80558 29 8.5V26.5C29 31.1944 25.1944 35 20.5 35C15.8056 35 12 31.1944 12 26.5V8.5ZM41.5 22C44.5376 22 47 19.5376 47 16.5C47 13.4624 44.5376 11 41.5 11C38.4624 11 36 13.4624 36 16.5C36 19.5376 38.4624 22 41.5 22ZM41.5 24C45.6421 24 49 20.6421 49 16.5C49 12.3579 45.6421 9 41.5 9C37.3579 9 34 12.3579 34 16.5C34 20.6421 37.3579 24 41.5 24ZM42.8632 58.6403C39.1021 60.1982 35.071 61 31 61C26.929 61 22.8979 60.1982 19.1368 58.6403C15.3757 57.0824 11.9583 54.7989 9.07968 51.9203C6.20107 49.0417 3.91763 45.6243 2.35973 41.8632C0.801836 38.1021 0 34.071 0 30V29H0.999999L7.5 29L7.5 31L2.01725 31C2.13687 34.4672 2.87779 37.8876 4.20749 41.0978C5.66487 44.6163 7.801 47.8132 10.4939 50.5061C13.1868 53.199 16.3837 55.3351 19.9022 56.7925C23.4206 58.2499 27.1917 59 31 59C34.8083 59 38.5794 58.2499 42.0978 56.7925C45.6163 55.3351 48.8132 53.199 51.5061 50.5061C54.199 47.8132 56.3351 44.6163 57.7925 41.0978C59.1222 37.8877 59.8631 34.4672 59.9828 31L33.5 31V29L61 29H62V30C62 34.071 61.1982 38.1021 59.6403 41.8632C58.0824 45.6243 55.7989 49.0417 52.9203 51.9203C50.0417 54.7989 46.6243 57.0824 42.8632 58.6403Z"
                                                                    fill="#121212"></path>
                                                            </svg>
                                                        </div>

                                                        <h3 class="title">
                                                            End-to-End Development Team </h3>

                                                        <div class="desc">
                                                            <p>Engage our full-spectrum team to take your project from concept to completion, ensuring a market-ready, fully-realized digital product.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="elementor-element elementor-element-4d99757 e-con-full e-flex e-con e-parent"
                            data-id="4d99757" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-25ea5cf e-flex e-con-boxed e-con e-child"
                                data-id="25ea5cf" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-d9e9e16 e-con-full e-flex e-con e-child"
                                        data-id="d9e9e16" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-3409d79 e-con-full e-flex e-con e-child"
                                            data-id="3409d79" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-147489e wcf-t-animation-text_reveal elementor-widget elementor-widget-heading"
                                                data-id="147489e" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Empowering Your Digital Vision with
                                                        Expert Development
                                                         </h2>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="elementor-element elementor-element-8ae8728 e-con-full e-flex e-con e-child"
                                        data-id="8ae8728" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-451d2d9 wcf-tabs-direction-row wcf-tabs-mobile elementor-widget elementor-widget-arolax--tabs"
                                            data-id="451d2d9" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                            data-widget_type="arolax--tabs.default">
                                            <div class="elementor-widget-container">
                                                <div class="wcf--tabs arolax--tabs">
                                                    <div class="tabs-wrapper" role="tablist">

                                                           <div id="tab-title-7244" class="tab-title tab-desktop-title"
                                                            aria-selected="false" data-tab="4" role="tab"
                                                            tabindex="-1" aria-controls="tab-content-7244">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                    height="26" viewBox="0 0 28 26" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M7.0697 18.3809C6.12819 17.9807 5.24967 17.4483 4.47499 16.7768C2.37146 14.9557 1.16628 12.3432 1.16628 9.6087C1.16628 4.31035 5.61485 0 11.0831 0C16.5513 0 20.9999 4.31035 20.9999 9.6087C20.9999 12.7038 19.4354 15.5559 16.9398 17.3386L15.275 15.7255C14.4175 14.8901 13.0455 14.742 12.0211 15.3683L7.0697 18.3809ZM8.16638 8.06C8.16638 9.38148 9.2759 10.4565 10.6398 10.4565H11.5264C11.9254 10.4565 12.2498 10.7708 12.2498 11.1687C12.2498 11.5553 11.9254 11.8696 11.5264 11.8696H9.0414C8.55839 11.8696 8.16638 12.2494 8.16638 12.7174C8.16638 13.1854 8.55839 13.5652 9.0414 13.5652H10.2081V14.4119C10.2081 14.8799 10.6001 15.2597 11.0831 15.2597C11.5661 15.2597 11.9581 14.8799 11.9581 14.4119V13.5223C13.1155 13.3233 13.9998 12.3455 13.9998 11.1574C13.9998 9.83591 12.8903 8.76087 11.5264 8.76087H10.6398C10.2407 8.76087 9.91641 8.44661 9.91641 8.0487C9.91641 7.66209 10.2407 7.34783 10.6398 7.34783H13.1248C13.6078 7.34783 13.9998 6.968 13.9998 6.5C13.9998 6.032 13.6078 5.65217 13.1248 5.65217H11.9581V4.80435C11.9581 4.33635 11.5661 3.95652 11.0831 3.95652C10.6001 3.95652 10.2081 4.33635 10.2081 4.80435V5.69513C9.05073 5.89409 8.16638 6.87191 8.16638 8.06ZM22.1666 12.4348H26.8333C27.4785 12.4348 28 12.9412 28 13.5652V18.087C28 18.5437 27.7165 18.9563 27.2802 19.1315C27.1355 19.1891 26.9838 19.2174 26.8333 19.2174C26.53 19.2174 26.2313 19.1021 26.0085 18.8862L24.4999 17.4245L18.9069 22.8427C18.4507 23.2847 17.7133 23.2847 17.2572 22.8427L13.2438 18.954L1.77994 25.8304C1.5886 25.9457 1.37743 26 1.16743 26C0.776587 26 0.395081 25.8101 0.174578 25.4642C-0.16376 24.934 0.00424221 24.2376 0.552584 23.9087L12.8028 16.5609C13.2601 16.2862 13.8598 16.3506 14.2413 16.7225L18.0832 20.445L22.8503 15.8261L21.3417 14.3644C21.0081 14.0411 20.9077 13.555 21.0886 13.1323C21.2682 12.7106 21.6952 12.4348 22.1666 12.4348Z"
                                                                        fill="#121212"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Cost effective </div>
                                                                <p class="desc">High-quality app and website development tailored to your budget without compromising on performance or features
                                                                     </p>
                                                            </div>
                                                        </div>
                                                        <div id="tab-title-7241" class="tab-title tab-desktop-title"
                                                            aria-selected="true" data-tab="1" role="tab"
                                                            tabindex="0" aria-controls="tab-content-7241">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" viewBox="0 0 25 25" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M24.1667 6.66667H19.1667C18.7083 6.66667 18.3333 6.29167 18.3333 5.425V0.833333C18.3333 0.61232 18.4211 0.400358 18.5774 0.244078C18.7337 0.0877973 18.9457 0 19.1667 0C20.7138 0 22.1975 0.614582 23.2915 1.70854C24.3854 2.80251 25 4.28624 25 5.83333C25 6.05435 24.9122 6.26631 24.7559 6.42259C24.5996 6.57887 24.3877 6.66667 24.1667 6.66667ZM10.25 10.9C10.527 11.8218 11.0306 12.6594 11.7148 13.3363C12.399 14.0133 13.242 14.5079 14.1667 14.775C14.7095 14.925 15.2702 15.0006 15.8333 15C17.3804 15 18.8642 14.3854 19.9581 13.2915C21.0521 12.1975 21.6667 10.7138 21.6667 9.16668C21.6667 8.94566 21.5789 8.7337 21.4226 8.57742C21.2663 8.42114 21.0543 8.33335 20.8333 8.33335H17.9167C17.5851 8.33335 17.2672 8.20165 17.0328 7.96723C16.7984 7.73281 16.6667 7.41487 16.6667 7.08334V4.16668C16.6667 3.94566 16.5789 3.7337 16.4226 3.57742C16.2663 3.42114 16.0543 3.33334 15.8333 3.33334C14.9633 3.33163 14.1038 3.52456 13.318 3.89802C12.5322 4.27147 11.8398 4.81599 11.2917 5.49168C10.6912 6.24044 10.2825 7.12438 10.101 8.06684C9.9195 9.00929 9.97064 9.9818 10.25 10.9ZM2.86612 9.53278C3.10054 9.29836 3.41848 9.16667 3.75 9.16667H6.25C6.58152 9.16667 6.89946 9.29836 7.13388 9.53278C7.3683 9.7672 7.5 10.0851 7.5 10.4167V21.6667H2.5V10.4167C2.5 10.0851 2.6317 9.7672 2.86612 9.53278ZM25 23.3333H0V25H25V23.3333ZM11.25 15.8333C10.9185 15.8333 10.6005 15.965 10.3661 16.1994C10.1317 16.4339 10 16.7518 10 17.0833V21.6667H15V17.0833C15 16.7518 14.8683 16.4339 14.6339 16.1994C14.3995 15.965 14.0815 15.8333 13.75 15.8333H11.25ZM17.8661 18.6994C18.1005 18.465 18.4185 18.3333 18.75 18.3333H21.25C21.5815 18.3333 21.8995 18.465 22.1339 18.6994C22.3683 18.9339 22.5 19.2518 22.5 19.5833V21.6667H17.5V19.5833C17.5 19.2518 17.6317 18.9339 17.8661 18.6994ZM0 0H11.6667V1.66667H0V0ZM7.5 3.33333H0V5H7.5V3.33333Z"
                                                                        fill="#121212"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Creativity </div>
                                                                <p class="desc">Creative solutions for intuitive UI/UX and seamless user experience across all platforms
                                                                     </p>
                                                            </div>
                                                        </div>
                                                        <div id="tab-title-7242" class="tab-title tab-desktop-title"
                                                            aria-selected="false" data-tab="2" role="tab"
                                                            tabindex="-1" aria-controls="tab-content-7242">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" viewBox="0 0 25 25" fill="none">
                                                                    <path
                                                                        d="M21.1538 14.4231C21.1538 20.2645 16.4184 25 10.5769 25C4.73545 25 0 20.2645 0 14.4231C0 8.58161 4.73545 3.84615 10.5769 3.84615C11.108 3.84615 11.5385 4.27665 11.5385 4.80769V13.4615H20.1923C20.7234 13.4615 21.1538 13.892 21.1538 14.4231ZM14.4231 0C13.892 0 13.4615 0.430496 13.4615 0.961539V10.5769C13.4615 11.108 13.892 11.5385 14.4231 11.5385H24.0385C24.5695 11.5385 25 11.108 25 10.5769C24.9934 4.7382 20.2618 0.00662368 14.4231 0Z"
                                                                        fill="#121212"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                CUSTOMER CENTRICITY</div>
                                                                <p class="desc">
                                                                Our approach focuses on delivering solutions that prioritize your customers' needs. We create applications and websites that provide intuitive user experiences, ensuring your business goals align with your customers’ expectations. Through customer-first design and agile development, we guarantee solutions that resonate with your audience. </p>
                                                            </div>
                                                        </div>
                                                        <div id="tab-title-7243" class="tab-title tab-desktop-title"
                                                            aria-selected="false" data-tab="3" role="tab"
                                                            tabindex="-1" aria-controls="tab-content-7243">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" viewBox="0 0 25 25" fill="none">
                                                                    <path
                                                                        d="M17.8374 9.89764C18.2918 9.02899 19.0793 8.37591 20.0586 8.06069C20.4684 7.92844 20.8908 7.87772 21.3112 7.87591V2.71739C21.3112 1.2192 20.0073 0 18.4051 0H2.90607C1.30386 0 0 1.2192 0 2.71739V20.8333C0 22.3315 1.30386 23.5507 2.90607 23.5507H12.5436L12.4389 23.2663C12.0176 22.1168 12.0999 20.8886 12.6685 19.8025L17.8374 9.89764ZM3.87476 5.43478H15.499C16.0347 5.43478 16.4677 5.84058 16.4677 6.34058C16.4677 6.84058 16.0347 7.24638 15.499 7.24638H3.87476C3.33907 7.24638 2.90607 6.84058 2.90607 6.34058C2.90607 5.84058 3.33907 5.43478 3.87476 5.43478ZM3.87476 9.05797H14.5303C15.066 9.05797 15.499 9.46377 15.499 9.96377C15.499 10.4638 15.066 10.8696 14.5303 10.8696H3.87476C3.33907 10.8696 2.90607 10.4638 2.90607 9.96377C2.90607 9.46377 3.33907 9.05797 3.87476 9.05797ZM10.6556 18.1159H3.87476C3.33907 18.1159 2.90607 17.7101 2.90607 17.2101C2.90607 16.7101 3.33907 16.3043 3.87476 16.3043H10.6556C11.1913 16.3043 11.6243 16.7101 11.6243 17.2101C11.6243 17.7101 11.1913 18.1159 10.6556 18.1159ZM3.87476 14.4928C3.33907 14.4928 2.90607 14.087 2.90607 13.587C2.90607 13.087 3.33907 12.6812 3.87476 12.6812H12.593C13.1286 12.6812 13.5616 13.087 13.5616 13.587C13.5616 14.087 13.1286 14.4928 12.593 14.4928H3.87476ZM24.8023 13.0752L19.6315 22.9837C19.2895 23.6368 18.6976 24.1259 17.9643 24.3614L16.1326 24.9502C16.0289 24.9837 15.9214 25 15.8177 25C15.4157 25 15.0399 24.7645 14.9023 24.3886L14.2717 22.6757C14.0189 21.9873 14.0683 21.25 14.4093 20.5987L19.5801 10.692C19.8058 10.2572 20.201 9.93116 20.6902 9.77355C21.1785 9.61594 21.7045 9.64493 22.1694 9.8587L23.9111 10.6531C24.3761 10.865 24.7248 11.2346 24.8934 11.692C25.0619 12.1495 25.03 12.6404 24.8023 13.0752Z"
                                                                        fill="#121212"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                <div class="title">
                                                                    Responsibility </div>
                                                                <p class="desc">
                                                                Responsibility in delivering robust and scalable solutions on time and within budget </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabs-content-wrapper">
                                                        <div class="tab-item">
                                                            <div class="tab-title tab-mobile-title" aria-selected="true"
                                                                data-tab="1" role="tab" tabindex="0"
                                                                aria-controls="tab-content-7241" aria-expanded="false">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="25" height="25"
                                                                        viewBox="0 0 25 25" fill="none">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M24.1667 6.66667H19.1667C18.7083 6.66667 18.3333 6.29167 18.3333 5.425V0.833333C18.3333 0.61232 18.4211 0.400358 18.5774 0.244078C18.7337 0.0877973 18.9457 0 19.1667 0C20.7138 0 22.1975 0.614582 23.2915 1.70854C24.3854 2.80251 25 4.28624 25 5.83333C25 6.05435 24.9122 6.26631 24.7559 6.42259C24.5996 6.57887 24.3877 6.66667 24.1667 6.66667ZM10.25 10.9C10.527 11.8218 11.0306 12.6594 11.7148 13.3363C12.399 14.0133 13.242 14.5079 14.1667 14.775C14.7095 14.925 15.2702 15.0006 15.8333 15C17.3804 15 18.8642 14.3854 19.9581 13.2915C21.0521 12.1975 21.6667 10.7138 21.6667 9.16668C21.6667 8.94566 21.5789 8.7337 21.4226 8.57742C21.2663 8.42114 21.0543 8.33335 20.8333 8.33335H17.9167C17.5851 8.33335 17.2672 8.20165 17.0328 7.96723C16.7984 7.73281 16.6667 7.41487 16.6667 7.08334V4.16668C16.6667 3.94566 16.5789 3.7337 16.4226 3.57742C16.2663 3.42114 16.0543 3.33334 15.8333 3.33334C14.9633 3.33163 14.1038 3.52456 13.318 3.89802C12.5322 4.27147 11.8398 4.81599 11.2917 5.49168C10.6912 6.24044 10.2825 7.12438 10.101 8.06684C9.9195 9.00929 9.97064 9.9818 10.25 10.9ZM2.86612 9.53278C3.10054 9.29836 3.41848 9.16667 3.75 9.16667H6.25C6.58152 9.16667 6.89946 9.29836 7.13388 9.53278C7.3683 9.7672 7.5 10.0851 7.5 10.4167V21.6667H2.5V10.4167C2.5 10.0851 2.6317 9.7672 2.86612 9.53278ZM25 23.3333H0V25H25V23.3333ZM11.25 15.8333C10.9185 15.8333 10.6005 15.965 10.3661 16.1994C10.1317 16.4339 10 16.7518 10 17.0833V21.6667H15V17.0833C15 16.7518 14.8683 16.4339 14.6339 16.1994C14.3995 15.965 14.0815 15.8333 13.75 15.8333H11.25ZM17.8661 18.6994C18.1005 18.465 18.4185 18.3333 18.75 18.3333H21.25C21.5815 18.3333 21.8995 18.465 22.1339 18.6994C22.3683 18.9339 22.5 19.2518 22.5 19.5833V21.6667H17.5V19.5833C17.5 19.2518 17.6317 18.9339 17.8661 18.6994ZM0 0H11.6667V1.66667H0V0ZM7.5 3.33333H0V5H7.5V3.33333Z"
                                                                            fill="#121212"></path>
                                                                    </svg>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title">
                                                                        Creativity </div>
                                                                    <p class="desc">
                                                                        Add the best talent on the market, an agile skilled
                                                                        management & seamless
                                                                        involvement </p>
                                                                </div>
                                                            </div>
                                                            <div id="tab-content-7241" class="tab-content"
                                                                data-tab="1" role="tabpanel"
                                                                aria-labelledby="tab-title-7241" tabindex="0">
                                                                <p><img loading="lazy" decoding="async"
                                                                        class="alignnone wp-image-993 size-full"
                                                                        src="images/graph-with-img.png" alt=""
                                                                        width="740" height="510"
                                                                        srcset="images/graph-with-img.png 740w, images/graph-with-img-300x207.png 300w"
                                                                        sizes="(max-width: 740px) 100vw, 740px" /></p>
                                                            </div>
                                                        </div>
                                                        <div class="tab-item">
                                                            <div class="tab-title tab-mobile-title"
                                                                aria-selected="false" data-tab="2" role="tab"
                                                                tabindex="-1" aria-controls="tab-content-7242"
                                                                aria-expanded="false">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="25" height="25"
                                                                        viewBox="0 0 25 25" fill="none">
                                                                        <path
                                                                            d="M21.1538 14.4231C21.1538 20.2645 16.4184 25 10.5769 25C4.73545 25 0 20.2645 0 14.4231C0 8.58161 4.73545 3.84615 10.5769 3.84615C11.108 3.84615 11.5385 4.27665 11.5385 4.80769V13.4615H20.1923C20.7234 13.4615 21.1538 13.892 21.1538 14.4231ZM14.4231 0C13.892 0 13.4615 0.430496 13.4615 0.961539V10.5769C13.4615 11.108 13.892 11.5385 14.4231 11.5385H24.0385C24.5695 11.5385 25 11.108 25 10.5769C24.9934 4.7382 20.2618 0.00662368 14.4231 0Z"
                                                                            fill="#121212"></path>
                                                                    </svg>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title">
                                                                        Relationships </div>
                                                                    <p class="desc">
                                                                        Add the best talent on the market, an agile skilled
                                                                        management & seamless
                                                                        involvement </p>
                                                                </div>
                                                            </div>
                                                            <div id="tab-content-7242" class="tab-content"
                                                                data-tab="2" role="tabpanel"
                                                                aria-labelledby="tab-title-7242" tabindex="0">
                                                                <p><img loading="lazy" decoding="async"
                                                                        class="alignnone wp-image-2991 size-full"
                                                                        src="images/t1.webp" alt=""
                                                                        width="740" height="510"
                                                                        srcset="images/t1.webp 740w, images/t1-300x207.webp 300w"
                                                                        sizes="(max-width: 740px) 100vw, 740px" /></p>
                                                            </div>
                                                        </div>
                                                        <div class="tab-item">
                                                            <div class="tab-title tab-mobile-title"
                                                                aria-selected="false" data-tab="3" role="tab"
                                                                tabindex="-1" aria-controls="tab-content-7243"
                                                                aria-expanded="false">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="25" height="25"
                                                                        viewBox="0 0 25 25" fill="none">
                                                                        <path
                                                                            d="M17.8374 9.89764C18.2918 9.02899 19.0793 8.37591 20.0586 8.06069C20.4684 7.92844 20.8908 7.87772 21.3112 7.87591V2.71739C21.3112 1.2192 20.0073 0 18.4051 0H2.90607C1.30386 0 0 1.2192 0 2.71739V20.8333C0 22.3315 1.30386 23.5507 2.90607 23.5507H12.5436L12.4389 23.2663C12.0176 22.1168 12.0999 20.8886 12.6685 19.8025L17.8374 9.89764ZM3.87476 5.43478H15.499C16.0347 5.43478 16.4677 5.84058 16.4677 6.34058C16.4677 6.84058 16.0347 7.24638 15.499 7.24638H3.87476C3.33907 7.24638 2.90607 6.84058 2.90607 6.34058C2.90607 5.84058 3.33907 5.43478 3.87476 5.43478ZM3.87476 9.05797H14.5303C15.066 9.05797 15.499 9.46377 15.499 9.96377C15.499 10.4638 15.066 10.8696 14.5303 10.8696H3.87476C3.33907 10.8696 2.90607 10.4638 2.90607 9.96377C2.90607 9.46377 3.33907 9.05797 3.87476 9.05797ZM10.6556 18.1159H3.87476C3.33907 18.1159 2.90607 17.7101 2.90607 17.2101C2.90607 16.7101 3.33907 16.3043 3.87476 16.3043H10.6556C11.1913 16.3043 11.6243 16.7101 11.6243 17.2101C11.6243 17.7101 11.1913 18.1159 10.6556 18.1159ZM3.87476 14.4928C3.33907 14.4928 2.90607 14.087 2.90607 13.587C2.90607 13.087 3.33907 12.6812 3.87476 12.6812H12.593C13.1286 12.6812 13.5616 13.087 13.5616 13.587C13.5616 14.087 13.1286 14.4928 12.593 14.4928H3.87476ZM24.8023 13.0752L19.6315 22.9837C19.2895 23.6368 18.6976 24.1259 17.9643 24.3614L16.1326 24.9502C16.0289 24.9837 15.9214 25 15.8177 25C15.4157 25 15.0399 24.7645 14.9023 24.3886L14.2717 22.6757C14.0189 21.9873 14.0683 21.25 14.4093 20.5987L19.5801 10.692C19.8058 10.2572 20.201 9.93116 20.6902 9.77355C21.1785 9.61594 21.7045 9.64493 22.1694 9.8587L23.9111 10.6531C24.3761 10.865 24.7248 11.2346 24.8934 11.692C25.0619 12.1495 25.03 12.6404 24.8023 13.0752Z"
                                                                            fill="#121212"></path>
                                                                    </svg>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title">
                                                                        Responsibility </div>
                                                                    <p class="desc">
                                                                        Add the best talent on the market, an agile skilled
                                                                        management & seamless
                                                                        involvement </p>
                                                                </div>
                                                            </div>
                                                            <div id="tab-content-7243" class="tab-content"
                                                                data-tab="3" role="tabpanel"
                                                                aria-labelledby="tab-title-7243" tabindex="0">
                                                                <p><img loading="lazy" decoding="async"
                                                                        class="alignnone wp-image-2992 size-full"
                                                                        src="images/t2.webp" alt=""
                                                                        width="740" height="510"
                                                                        srcset="images/t2.webp 740w, images/t2-300x207.webp 300w"
                                                                        sizes="(max-width: 740px) 100vw, 740px" /></p>
                                                            </div>
                                                        </div>
                                                        <div class="tab-item">
                                                            <div class="tab-title tab-mobile-title"
                                                                aria-selected="false" data-tab="4" role="tab"
                                                                tabindex="-1" aria-controls="tab-content-7244"
                                                                aria-expanded="false">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="28" height="26"
                                                                        viewBox="0 0 28 26" fill="none">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M7.0697 18.3809C6.12819 17.9807 5.24967 17.4483 4.47499 16.7768C2.37146 14.9557 1.16628 12.3432 1.16628 9.6087C1.16628 4.31035 5.61485 0 11.0831 0C16.5513 0 20.9999 4.31035 20.9999 9.6087C20.9999 12.7038 19.4354 15.5559 16.9398 17.3386L15.275 15.7255C14.4175 14.8901 13.0455 14.742 12.0211 15.3683L7.0697 18.3809ZM8.16638 8.06C8.16638 9.38148 9.2759 10.4565 10.6398 10.4565H11.5264C11.9254 10.4565 12.2498 10.7708 12.2498 11.1687C12.2498 11.5553 11.9254 11.8696 11.5264 11.8696H9.0414C8.55839 11.8696 8.16638 12.2494 8.16638 12.7174C8.16638 13.1854 8.55839 13.5652 9.0414 13.5652H10.2081V14.4119C10.2081 14.8799 10.6001 15.2597 11.0831 15.2597C11.5661 15.2597 11.9581 14.8799 11.9581 14.4119V13.5223C13.1155 13.3233 13.9998 12.3455 13.9998 11.1574C13.9998 9.83591 12.8903 8.76087 11.5264 8.76087H10.6398C10.2407 8.76087 9.91641 8.44661 9.91641 8.0487C9.91641 7.66209 10.2407 7.34783 10.6398 7.34783H13.1248C13.6078 7.34783 13.9998 6.968 13.9998 6.5C13.9998 6.032 13.6078 5.65217 13.1248 5.65217H11.9581V4.80435C11.9581 4.33635 11.5661 3.95652 11.0831 3.95652C10.6001 3.95652 10.2081 4.33635 10.2081 4.80435V5.69513C9.05073 5.89409 8.16638 6.87191 8.16638 8.06ZM22.1666 12.4348H26.8333C27.4785 12.4348 28 12.9412 28 13.5652V18.087C28 18.5437 27.7165 18.9563 27.2802 19.1315C27.1355 19.1891 26.9838 19.2174 26.8333 19.2174C26.53 19.2174 26.2313 19.1021 26.0085 18.8862L24.4999 17.4245L18.9069 22.8427C18.4507 23.2847 17.7133 23.2847 17.2572 22.8427L13.2438 18.954L1.77994 25.8304C1.5886 25.9457 1.37743 26 1.16743 26C0.776587 26 0.395081 25.8101 0.174578 25.4642C-0.16376 24.934 0.00424221 24.2376 0.552584 23.9087L12.8028 16.5609C13.2601 16.2862 13.8598 16.3506 14.2413 16.7225L18.0832 20.445L22.8503 15.8261L21.3417 14.3644C21.0081 14.0411 20.9077 13.555 21.0886 13.1323C21.2682 12.7106 21.6952 12.4348 22.1666 12.4348Z"
                                                                            fill="#121212"></path>
                                                                    </svg>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="title">
                                                                        Cost effective </div>
                                                                    <p class="desc">
                                                                        Add the best talent on the market, an agile skilled
                                                                        management & seamless
                                                                        involvement </p>
                                                                </div>
                                                            </div>
                                                            <div id="tab-content-7244" class="tab-content"
                                                                data-tab="4" role="tabpanel"
                                                                aria-labelledby="tab-title-7244" tabindex="0">
                                                                <p><img loading="lazy" decoding="async"
                                                                        class="alignnone wp-image-2993 size-full"
                                                                        src="images/t3.webp" alt=""
                                                                        width="740" height="510"
                                                                        srcset="images/t3.webp 740w, images/t3-300x207.webp 300w"
                                                                        sizes="(max-width: 740px) 100vw, 740px" /></p>
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
                        <div class="elementor-element elementor-element-d3c07c3 e-con-full e-flex e-con e-parent"
                            data-id="d3c07c3" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-551c9ea e-flex e-con-boxed e-con e-child"
                                data-id="551c9ea" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-3671fd6 e-con-full e-flex e-con e-child"
                                        data-id="3671fd6" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-a4be3b8 e-con-full e-flex e-con e-child"
                                            data-id="a4be3b8" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-436615a wcf-t-animation-text_reveal elementor-widget elementor-widget-heading"
                                                data-id="436615a" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_duration&quot;:0.5,&quot;text_stagger&quot;:0.01,&quot;text_delay&quot;:0.15,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Our Arolax
                                                        Technology Expertise includes</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a87a989 e-con-full e-flex e-con e-child"
                                            data-id="a87a989" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-865812d e-con-full e-flex e-con e-child"
                                                data-id="865812d" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.45,&quot;fade-from&quot;:&quot;right&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-9d412d6 elementor-widget elementor-widget-wcf--image"
                                                    data-id="9d412d6" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="100"
                                                                height="100" src="images/icon-1.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7697"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1edf080 wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                    data-id="1edf080" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            WordPress</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-effd66d e-con-full e-flex e-con e-child"
                                                data-id="effd66d" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.3,&quot;fade-from&quot;:&quot;right&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-a7325ca elementor-widget elementor-widget-wcf--image"
                                                    data-id="a7325ca" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="120"
                                                                height="120" src="images/icon-2.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7698"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9fb7d3a wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                    data-id="9fb7d3a" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            React.js</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-efdc37a e-con-full e-flex e-con e-child"
                                                data-id="efdc37a" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-685f703 elementor-widget elementor-widget-wcf--image"
                                                    data-id="685f703" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="88"
                                                                height="100" src="images/icon-3.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7699"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7465f3e wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                    data-id="7465f3e" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Node.js
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f8879dc e-con-full e-flex e-con e-child"
                                                data-id="f8879dc" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.3,&quot;fade-from&quot;:&quot;left&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-8ef6240 elementor-widget elementor-widget-wcf--image"
                                                    data-id="8ef6240" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="80"
                                                                height="100" src="images/icon-4.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7700"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a56aafa wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                    data-id="a56aafa" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Flutter
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d8da3be e-con-full e-flex e-con e-child"
                                                data-id="d8da3be" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;delay&quot;:0.45,&quot;fade-from&quot;:&quot;left&quot;,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-26620eb elementor-widget elementor-widget-wcf--image"
                                                    data-id="26620eb" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="106"
                                                                height="100" src="images/icon-5.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7701"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-58450b4 wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                    data-id="58450b4" data-element_type="widget"
                                                    data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Redux
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-42802ad e-con-full e-flex e-con e-parent"
                            data-id="42802ad" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-5e9e211 e-con-full e-flex e-con e-child"
                                data-id="5e9e211" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="elementor-element elementor-element-c0148db e-con-full e-flex e-con e-child"
                                    data-id="c0148db" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-adeb6c6 e-con-full e-flex e-con e-child"
                                        data-id="adeb6c6" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-54e3a56 elementor-widget elementor-widget-arolax--gallery"
                                            data-id="54e3a56" data-element_type="widget"
                                            data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="arolax--gallery.default">
                                            <div class="elementor-widget-container">
                                                <div class="gallery--slider">
                                                    <div class="g-slider--title">
                                                        <div class="progress-circle" style="--value:0"></div>
                                                        <h2 class="g-title">
                                                            Case Study </h2>
                                                    </div>
                                                    <div class="g-slider--one-wrap" dir="ltr">
                                                        <div class="g-slider--one">
                                                            <a class="item" href="#" target="_blank"
                                                                rel="nofollow">
                                                                <div class="source">
                                                                    <img decoding="async" src="images/project-1.webp"
                                                                        alt="Mastartery">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="#" target="_blank"
                                                                rel="nofollow">
                                                                <div class="source">
                                                                    <img decoding="async" src="images/project-2.webp"
                                                                        alt="Mastartery">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="#" target="_blank"
                                                                rel="nofollow">
                                                                <div class="source">
                                                                    <video muted autoplay loop>
                                                                        <source
                                                                            src="#"
                                                                            type="video/mp4">
                                                                    </video>
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="#" target="_blank"
                                                                rel="nofollow">
                                                                <div class="source">
                                                                    <img decoding="async"
                                                                        src="images/Rectangle-7031.webp" alt="Agencey ">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Agencey </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="#" target="_blank"
                                                                rel="nofollow">
                                                                <div class="source">
                                                                    <img decoding="async"
                                                                        src="images/Rectangle-7030.webp"
                                                                        alt="Consultant">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Consultant </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="g-slider--two-wrap" dir="rtl">
                                                        <div class="g-slider--two">
                                                            <a class="item" href="# #" target="_blank _blank"
                                                                rel="nofollow nofollow">
                                                                <div class="source">
                                                                    <img decoding="async" src="images/project-4.webp"
                                                                        alt="Mastartery">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="# #" target="_blank _blank"
                                                                rel="nofollow nofollow">
                                                                <div class="source">
                                                                    <img decoding="async" src="images/project-5.webp"
                                                                        alt="Mastartery">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="# #" target="_blank _blank"
                                                                rel="nofollow nofollow">
                                                                <div class="source">
                                                                    <img decoding="async"
                                                                        src="images/Rectangle-968-2.webp"
                                                                        alt="Mastartery">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="# #" target="_blank _blank"
                                                                rel="nofollow nofollow">
                                                                <div class="source">
                                                                    <img decoding="async"
                                                                        src="images/Rectangle-968-1.webp"
                                                                        alt="Mastartery">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="item" href="# #" target="_blank _blank"
                                                                rel="nofollow nofollow">
                                                                <div class="source">
                                                                    <img decoding="async"
                                                                        src="images/Rectangle-968.webp"
                                                                        alt="Mastartery">
                                                                </div>
                                                                <div class="content-wrap">
                                                                    <div class="icon-wrap">
                                                                        <div class="icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="none">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.0249186 -2.09988e-06L0.0249182 2.20346L12.2385 2.20346L1.28959e-06 14.4419L1.55808 16L13.7965 3.76154L13.7965 15.9751L16 15.9751L16 6.93295e-07L15.8623 -2.40791e-08L13.7965 3.0803e-07L0.0249186 -2.09988e-06Z"
                                                                                    fill="#121212"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h2 class="title">
                                                                            Mastartery </h2>
                                                                        <p class="desc">Design - 2019</p>
                                                                    </div>
                                                                </div>
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
                        <div class="elementor-element elementor-element-64acaf5 e-con-full e-flex e-con e-parent"
                            data-id="64acaf5" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-b0617ee e-flex e-con-boxed e-con e-child"
                                data-id="b0617ee" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-f82f639 e-con-full e-flex e-con e-child"
                                        data-id="f82f639" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-0b6a18d e-con-full e-flex e-con e-child"
                                            data-id="0b6a18d" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-cc94e6a elementor-widget elementor-widget-wcf--floating-elements"
                                                data-id="cc94e6a" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;ease&quot;:&quot;bounce&quot;,&quot;fade-offset&quot;:70,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;fade-from&quot;:&quot;top&quot;,&quot;data-duration&quot;:1.5}"
                                                data-widget_type="wcf--floating-elements.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf--floating-elements">
                                                        <div
                                                            class="floating-element wcf-live-anim- elementor-repeater-item-b3a5ab4       elementor-hidden-mobile">
                                                            <img decoding="async" src="images/ok-img.webp"
                                                                alt="ok-img" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2041531 wcf-t-animation-word elementor-widget elementor-widget-wcf--title"
                                                data-id="2041531" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;word&quot;,&quot;text_stagger&quot;:0.03,&quot;text_translate_x&quot;:50,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_translate_y&quot;:0,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--title.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="wcf--title">we <span class="highlight">provide </span>
                                                        premium Makora service</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-91d8e8a e-con-full e-flex e-con e-child"
                                                data-id="91d8e8a" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-ec66696 elementor-widget__width-initial wcf-t-animation-text_move elementor-widget elementor-widget-text-editor"
                                                    data-id="ec66696" data-element_type="widget"
                                                    data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Our ability to combine expertise and systems thinking is what
                                                            fuels us as a team. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1f956d9 e-con-full e-flex e-con e-child"
                                        data-id="1f956d9" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_hover_image&quot;:&quot;yes&quot;,&quot;wcf_enable_hover_image_editor&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-f8fe1ca e-con-full e-flex e-con e-child"
                                            data-id="f8fe1ca" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-9d95ca6 wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="9d95ca6" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">01.</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0bd59b2 e-con-full e-flex e-con e-child"
                                            data-id="0bd59b2" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-3bb7a4a wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="3bb7a4a" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default"><a
                                                            href="../services-details-01/index.html">Web  <br>
                                                            Development</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-aac43e5 e-con-full e-flex e-con e-child"
                                            data-id="aac43e5" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-9650e77 wcf-t-animation-none elementor-widget elementor-widget-text-editor"
                                                data-id="9650e77" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Our team delivers premium web development services that turn ideas into scalable, robust digital experiences. Whether you're starting a new project or enhancing an existing site, we provide:</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-606a509 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="606a509" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Custom Web Design & Development</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Responsive and Adaptive Designs</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">SEO-Optimized Solutions</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-793d6bb e-con-full e-flex e-con e-child"
                                            data-id="793d6bb" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-1ba572b e-con-full e-flex e-con e-child"
                                                data-id="1ba572b" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-bd0d350 elementor-widget elementor-widget-wcf--image"
                                                    data-id="bd0d350" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="45"
                                                                height="45" src="images/service-1.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7717"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bdfc149 e-con-full e-flex e-con e-child"
                                        data-id="bdfc149" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_hover_image&quot;:&quot;yes&quot;,&quot;wcf_enable_hover_image_editor&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-0b7020a e-con-full e-flex e-con e-child"
                                            data-id="0b7020a" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-c40df8e wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="c40df8e" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">02.</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ba72a2e e-con-full e-flex e-con e-child"
                                            data-id="ba72a2e" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-45fc7c7 wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="45fc7c7" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default"><a
                                                            href="../services-details-01/index.html">App <br> Development</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-dcbc384 e-con-full e-flex e-con e-child"
                                            data-id="dcbc384" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-b53a265 wcf-t-animation-none elementor-widget elementor-widget-text-editor"
                                                data-id="b53a265" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Build cutting-edge applications tailored to your business goals. We specialize in creating native, hybrid, and cross-platform apps that deliver smooth performance across devices. Our services include:</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-94c8a5f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="94c8a5f" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">iOS & Android Development</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Cross-Platform Apps</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">UI/UX Optimization</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f97d79b e-con-full e-flex e-con e-child"
                                            data-id="f97d79b" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-a6854b9 e-con-full e-flex e-con e-child"
                                                data-id="a6854b9" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-bef343c elementor-widget elementor-widget-wcf--image"
                                                    data-id="bef343c" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="45"
                                                                height="45" src="images/service-2.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7719"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4d6b8ae e-con-full e-flex e-con e-child"
                                        data-id="4d6b8ae" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_hover_image&quot;:&quot;yes&quot;,&quot;wcf_enable_hover_image_editor&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-4aa7ace e-con-full e-flex e-con e-child"
                                            data-id="4aa7ace" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-598d1ab wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="598d1ab" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">03.</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-bdde1b5 e-con-full e-flex e-con e-child"
                                            data-id="bdde1b5" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-b4ebd2a wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="b4ebd2a" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default"><a
                                                            href="../services-details-01/index.html">E-commerce <br> Development</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0b60200 e-con-full e-flex e-con e-child"
                                            data-id="0b60200" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-50b2fdd wcf-t-animation-none elementor-widget elementor-widget-text-editor"
                                                data-id="50b2fdd" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>We design and develop high-performance e-commerce platforms that help your business succeed online. From product management to secure payment gateways, our services ensure seamless shopping experiences for your customers:.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9ded5b8 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="9ded5b8" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Custom E-commerce Platforms</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Payment Gateway Integration</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">E-commerce SEO</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c1a0e61 e-con-full e-flex e-con e-child"
                                            data-id="c1a0e61" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-2c1362e e-con-full e-flex e-con e-child"
                                                data-id="2c1362e" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-71d1833 elementor-widget elementor-widget-wcf--image"
                                                    data-id="71d1833" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="45"
                                                                height="45" src="images/service-3.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7720"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9b8cf00 e-con-full e-flex e-con e-child"
                                        data-id="9b8cf00" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf_enable_hover_image&quot;:&quot;yes&quot;,&quot;wcf_enable_hover_image_editor&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-5130607 e-con-full e-flex e-con e-child"
                                            data-id="5130607" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-75bee97 wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="75bee97" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">04.</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9b20ff7 e-con-full e-flex e-con e-child"
                                            data-id="9b20ff7" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-8a631cc wcf-t-animation-none elementor-widget elementor-widget-heading"
                                                data-id="8a631cc" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default"><a
                                                            href="../services-details-01/index.html">UI/UX <br>
                                                            Design</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3b371c5 e-con-full e-flex e-con e-child"
                                            data-id="3b371c5" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-36867f0 wcf-t-animation-none elementor-widget elementor-widget-text-editor"
                                                data-id="36867f0" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Our design team specializes in crafting engaging and intuitive interfaces that deliver seamless user experiences. We focus on creating designs that are not only aesthetically appealing but also functional, ensuring that every interaction feels natural and enhances user satisfaction. Our services include:</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-da0159a elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="da0159a" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Mobile & Web UI Design</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Interaction Design</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true"
                                                                    class="arolax-theme arolax-wcf-icon icon-wcf-wcf-plus"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">UX Research &
                                                                Plan</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2ab2158 e-con-full e-flex e-con e-child"
                                            data-id="2ab2158" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-2bbe53b e-con-full e-flex e-con e-child"
                                                data-id="2bbe53b" data-element_type="container"
                                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                                <div class="elementor-element elementor-element-f972c3f elementor-widget elementor-widget-wcf--image"
                                                    data-id="f972c3f" data-element_type="widget"
                                                    data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                    data-widget_type="wcf--image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wcf--image">
                                                            <img loading="lazy" decoding="async" width="45"
                                                                height="45" src="images/service-4.png"
                                                                class="attachment-thumbnail size-thumbnail wp-image-7721"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-28a08b0 e-con-full e-flex e-con e-parent"
                            data-id="28a08b0" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div data-speed="0.85"
                                class="elementor-element elementor-element-31f5bcb elementor-widget elementor-widget-wcf--image"
                                data-id="31f5bcb" data-element_type="widget"
                                data-settings="{&quot;wcf-image-animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                data-widget_type="wcf--image.default">
                                <div class="elementor-widget-container">
                                    <div class="wcf--image">
                                        <img loading="lazy" decoding="async" width="1920" height="950"
                                            src="images/lg-img.webp" class="attachment-full size-full wp-image-19"
                                            alt=""
                                            srcset="images/lg-img.webp 1920w, images/lg-img-300x148.webp 300w, images/lg-img-1024x507.webp 1024w, images/lg-img-768x380.webp 768w, images/lg-img-1536x760.webp 1536w"
                                            sizes="(max-width: 1920px) 100vw, 1920px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ccc8a29 e-con-full e-flex e-con e-parent"
                            data-id="ccc8a29" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-53e41ed e-flex e-con-boxed e-con e-child"
                                data-id="53e41ed" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-ea97da2 e-con-full e-flex e-con e-child"
                                        data-id="ea97da2" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-b819196 e-con-full e-flex e-con e-child"
                                            data-id="b819196" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-cf686d2 wcf-t-animation-text_reveal elementor-widget elementor-widget-wcf--title"
                                                data-id="cf686d2" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--title.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="wcf--title">Trusted clients testimonial</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-fa9ab0b elementor-widget__width-initial wcf-t-animation-text_move elementor-widget elementor-widget-text-editor"
                                                data-id="fa9ab0b" data-element_type="widget"
                                                data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Consumers today rely heavily on digital means to research products.
                                                        We research a brand of bldend </p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-519d6f2 elementor-widget elementor-widget-wcf--button"
                                                data-id="519d6f2" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;on-scroll&quot;:&quot;1&quot;,&quot;data-duration&quot;:1,&quot;fade_animation_breakpoint&quot;:&quot;mobile&quot;,&quot;fade-offset&quot;:60,&quot;ease&quot;:&quot;bounce&quot;,&quot;delay&quot;:0.15,&quot;fade-from&quot;:&quot;top&quot;,&quot;fade_breakpoint_min_max&quot;:&quot;min&quot;}"
                                                data-widget_type="wcf--button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf__btn icon-position-after">
                                                        <div class="btn-wrapper">
                                                            <a href="../team-page/index.html"
                                                                class="wcf-btn-circle btn-item btn-hover-bgchange">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 14 14">
                                                                    <path
                                                                        d="M3.49146 0.25V1.5876H11.53L0.9375 12.683L1.83777 13.626L12.4303 2.53061V10.9508H13.7073V0.25H3.49146Z">
                                                                    </path>
                                                                </svg> Explore Us <br> More </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3376026 e-con-full e-flex e-con e-child"
                                            data-id="3376026" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-e060fd7 elementor-widget elementor-widget-arolax--testimonial"
                                                data-id="e060fd7" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;delay&quot;:0.15,&quot;on-scroll&quot;:1,&quot;data-duration&quot;:1.5,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50}"
                                                data-widget_type="arolax--testimonial.default">
                                                <div class="elementor-widget-container">
                                                    <div class="arolax_testimonial_wrapper arolax__testimonial-4"
                                                        data-settings="{&quot;loop&quot;:true,&quot;speed&quot;:500,&quot;allowTouchMove&quot;:&quot;false&quot;,&quot;slidesPerView&quot;:&quot;1&quot;,&quot;spaceBetween&quot;:20,&quot;effect&quot;:&quot;cards&quot;,&quot;autoplay&quot;:{&quot;delay&quot;:3000,&quot;disableOnInteraction&quot;:&quot;true&quot;},&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;.elementor-element-e060fd7 .wcf-arrow-next&quot;,&quot;prevEl&quot;:&quot;.elementor-element-e060fd7 .wcf-arrow-prev&quot;},&quot;pagination&quot;:{&quot;el&quot;:&quot;.elementor-element-e060fd7 .swiper-pagination&quot;,&quot;clickable&quot;:true},&quot;breakpoints&quot;:{&quot;767&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;880&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;1024&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;1366&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;2400&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;}}}">

                                                        <div class="arolax_testimonial_slider swiper"
                                                            style="position: static" dir="ltr">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="slide elementor-repeater-item-6af42b7">
                                                                        <div class="content">
                                                                            <div class="logo">
                                                                                <img decoding="async"
                                                                                    src="images/rating.png"
                                                                                    alt="Quote">
                                                                            </div>
                                                                            <div class="top_text">Default Text </div>
                                                                            <div class="feedback">
                                                                                We full service digital agency that build’s
                                                                                fascinating users experiences... </div>
                                                                            <div class="quote">
                                                                                <img decoding="async"
                                                                                    src="images/quote-style-1.svg"
                                                                                    alt="Quote">
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrap">
                                                                            <div class="image">
                                                                                <img decoding="async"
                                                                                    src="images/test-img-3.webp"
                                                                                    alt="Image">
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name">Ceyhan Özçivit</div>
                                                                                <div class="designation">Mid-Level
                                                                                    Developer</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="slide elementor-repeater-item-f22b06c">
                                                                        <div class="content">
                                                                            <div class="logo">
                                                                                <img decoding="async"
                                                                                    src="images/rating.png"
                                                                                    alt="Quote">
                                                                            </div>
                                                                            <div class="top_text">Default Text </div>
                                                                            <div class="feedback">
                                                                                We full service digital agency that build’s
                                                                                fascinating users experiences... </div>
                                                                            <div class="quote">
                                                                                <img decoding="async"
                                                                                    src="images/quote-style-1.svg"
                                                                                    alt="Quote">
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrap">
                                                                            <div class="image">
                                                                                <img decoding="async"
                                                                                    src="images/test-img-3.webp"
                                                                                    alt="Image">
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name">Ceyhan Özçivit</div>
                                                                                <div class="designation">Mid-Level
                                                                                    Developer</div>
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

                                                        <div class="ts-pagination">
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-fcd8226 e-con-full e-flex e-con e-parent"
                            data-id="fcd8226" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-96d9bbe e-con-full e-flex e-con e-child"
                                data-id="96d9bbe" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="elementor-element elementor-element-1b2b26b e-con-full e-flex e-con e-child"
                                    data-id="1b2b26b" data-element_type="container"
                                    data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-0b69af0 wcf-t-animation-text_move elementor-widget elementor-widget-wcf--title"
                                        data-id="0b69af0" data-element_type="widget"
                                        data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">Introducing arolax
                                                skilled team!</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-20c1746 e-con-full e-flex e-con e-child"
                                        data-id="20c1746" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-919a4d7 elementor-widget__width-initial wcf-t-animation-text_move elementor-widget elementor-widget-text-editor"
                                            data-id="919a4d7" data-element_type="widget"
                                            data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Our ability to combine expertise and systems thinking is what fuels us as
                                                    a team. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a4778ac e-flex e-con-boxed e-con e-child"
                                data-id="a4778ac" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-5f87198 e-con-full e-flex e-con e-child"
                                        data-id="5f87198" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-c24eaaf e-con-full e-flex e-con e-child"
                                            data-id="c24eaaf" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-f226b8d elementor-widget-mobile_extra__width-initial elementor-widget elementor-widget-wcf--team"
                                                data-id="f226b8d" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf--team style-1">
                                                        <div class="thumb"> <a href="../team-details/index.html"
                                                                target="_blank" rel="nofollow"
                                                                aria-label="Ceyhan Özçivit">
                                                                <img loading="lazy" decoding="async" width="299"
                                                                    height="410" src="images/team-1.jpg"
                                                                    class="attachment-full size-full wp-image-1302"
                                                                    alt=""
                                                                    srcset="images/team-1.jpg 299w, images/team-1-219x300.jpg 219w"
                                                                    sizes="(max-width: 299px) 100vw, 299px" /> </a>
                                                        </div>
                                                        <div class="content">
                                                            <h3 class="name"> <a href="../team-details/index.html"
                                                                    target="_blank" rel="nofollow">
                                                                    Ceyhan Özçivit </a>
                                                            </h3>
                                                            <div class="designation">
                                                                Mid-Level Developer </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-speed="1.1"
                                                class="elementor-element elementor-element-f308db8 elementor-widget-mobile_extra__width-initial elementor-widget elementor-widget-wcf--team"
                                                data-id="f308db8" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf--team style-1">
                                                        <div class="thumb"> <a href="../team-details/index.html"
                                                                target="_blank" rel="nofollow"
                                                                aria-label="Özge Törer">
                                                                <img loading="lazy" decoding="async" width="300"
                                                                    height="411" src="images/team-2.jpg"
                                                                    class="attachment-full size-full wp-image-1303"
                                                                    alt=""
                                                                    srcset="images/team-2.jpg 300w, images/team-2-219x300.jpg 219w"
                                                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                                                        </div>
                                                        <div class="content">
                                                            <h3 class="name"> <a href="../team-details/index.html"
                                                                    target="_blank" rel="nofollow">
                                                                    Özge Törer </a>
                                                            </h3>
                                                            <div class="designation">
                                                                Mid-Level Web Designer </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-speed="0.9"
                                                class="elementor-element elementor-element-563650a elementor-widget-mobile_extra__width-initial elementor-widget elementor-widget-wcf--team"
                                                data-id="563650a" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf--team style-1">
                                                        <div class="thumb"> <a href="../team-details/index.html"
                                                                target="_blank" rel="nofollow"
                                                                aria-label="Tuya Terekh">
                                                                <img loading="lazy" decoding="async" width="300"
                                                                    height="411" src="images/team-3.jpg"
                                                                    class="attachment-full size-full wp-image-1304"
                                                                    alt=""
                                                                    srcset="images/team-3.jpg 300w, images/team-3-219x300.jpg 219w"
                                                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                                                        </div>
                                                        <div class="content">
                                                            <h3 class="name"> <a href="../team-details/index.html"
                                                                    target="_blank" rel="nofollow">
                                                                    Tuya Terekh </a>
                                                            </h3>
                                                            <div class="designation">
                                                                Senior Developer </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-speed="1.1"
                                                class="elementor-element elementor-element-41e319c elementor-widget-mobile_extra__width-initial elementor-widget elementor-widget-wcf--team"
                                                data-id="41e319c" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf--team style-1">
                                                        <div class="thumb"> <a href="../team-details/index.html"
                                                                target="_blank" rel="nofollow"
                                                                aria-label="Aşenur Özkan">
                                                                <img loading="lazy" decoding="async" width="300"
                                                                    height="411" src="images/team-4.jpg"
                                                                    class="attachment-full size-full wp-image-1305"
                                                                    alt=""
                                                                    srcset="images/team-4.jpg 300w, images/team-4-219x300.jpg 219w"
                                                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                                                        </div>
                                                        <div class="content">
                                                            <h3 class="name"> <a href="../team-details/index.html"
                                                                    target="_blank" rel="nofollow">
                                                                    Aşenur Özkan </a>
                                                            </h3>
                                                            <div class="designation">
                                                                Lead Developer </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="elementor-element elementor-element-19cf871 e-con-full e-flex e-con e-parent"
                            data-id="19cf871" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-b55df37 e-con-full e-flex e-con e-child"
                                data-id="b55df37" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="elementor-element elementor-element-584081f e-con-full e-flex e-con e-child"
                                    data-id="584081f" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                    <div class="elementor-element elementor-element-c0a4105 wcf-t-animation-text_reveal elementor-widget-mobile__width-inherit elementor-widget__width-initial elementor-widget elementor-widget-wcf--title"
                                        data-id="c0a4105" data-element_type="widget"
                                        data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_animation_breakpoint&quot;:&quot;mobile&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_breakpoint_min_max&quot;:&quot;min&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                        data-widget_type="wcf--title.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="wcf--title">Let’s start your experience with Arolax</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-10aeb51 elementor-widget elementor-widget-wcf--button"
                                        data-id="10aeb51" data-element_type="widget"
                                        data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;bottom&quot;,&quot;data-duration&quot;:1.15,&quot;fade_animation_breakpoint&quot;:&quot;mobile&quot;,&quot;on-scroll&quot;:&quot;1&quot;,&quot;delay&quot;:0.15,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;fade_breakpoint_min_max&quot;:&quot;min&quot;}"
                                        data-widget_type="wcf--button.default">
                                        <div class="elementor-widget-container">
                                            <div class="wcf__btn icon-position-after">
                                                <a href="../contact-us/index.html" class="wcf-btn-underline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21"
                                                        height="7" viewBox="0 0 21 7">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.726 0.366792C12.0758 -0.0606525 12.7058 -0.123655 13.1332 0.226073L20.8014 6.50003H1C0.447715 6.50003 0 6.05231 0 5.50003C0 4.94775 0.447715 4.50003 1 4.50003H15.1986L11.8668 1.77399C11.4393 1.42426 11.3763 0.794237 11.726 0.366792Z">
                                                        </path>
                                                    </svg> Let’s get in touch </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-63d2ea4 e-con-full e-flex e-con e-parent"
                            data-id="63d2ea4" data-element_type="container"
                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                            <div class="elementor-element elementor-element-245e458 e-flex e-con-boxed e-con e-child"
                                data-id="245e458" data-element_type="container"
                                data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-6b4597b e-con-full e-flex e-con e-child"
                                        data-id="6b4597b" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-e02963a e-con-full e-flex e-con e-child"
                                            data-id="e02963a" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-def310a wcf-t-animation-text_reveal elementor-widget elementor-widget-heading"
                                                data-id="def310a" data-element_type="widget"
                                                data-settings="{&quot;wcf_text_animation&quot;:&quot;text_reveal&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">journal
                                                        insight of arolax</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4e6304e e-con-full e-flex e-con e-child"
                                            data-id="4e6304e" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-2c55b17 elementor-widget__width-initial wcf-t-animation-text_move elementor-widget elementor-widget-text-editor"
                                                data-id="2c55b17" data-element_type="widget"
                                                data-settings="{&quot;text_transform_origin&quot;:&quot;top center -50&quot;,&quot;wcf_text_animation&quot;:&quot;text_move&quot;,&quot;text_delay&quot;:0.15,&quot;text_duration&quot;:1,&quot;text_stagger&quot;:0.02,&quot;text_on_scroll&quot;:&quot;yes&quot;,&quot;text_rotation_di&quot;:&quot;x&quot;,&quot;text_rotation&quot;:&quot;-80&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Our ability to combine expertise and systems thinking is what fuels
                                                        us as a team. </p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-72a168d elementor-widget elementor-widget-wcf--button"
                                                data-id="72a168d" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;fade&quot;,&quot;fade-from&quot;:&quot;left&quot;,&quot;data-duration&quot;:1.15,&quot;fade_animation_breakpoint&quot;:&quot;mobile&quot;,&quot;on-scroll&quot;:&quot;1&quot;,&quot;delay&quot;:0.15,&quot;ease&quot;:&quot;power2.out&quot;,&quot;fade-offset&quot;:50,&quot;fade_breakpoint_min_max&quot;:&quot;min&quot;}"
                                                data-widget_type="wcf--button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf__btn icon-position-after">
                                                        <a href="../wcf-template/blog-archive/index.html"
                                                            class="wcf-btn-underline">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="21"
                                                                height="7" viewBox="0 0 21 7">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M11.726 0.366792C12.0758 -0.0606525 12.7058 -0.123655 13.1332 0.226073L20.8014 6.50003H1C0.447715 6.50003 0 6.05231 0 5.50003C0 4.94775 0.447715 4.50003 1 4.50003H15.1986L11.8668 1.77399C11.4393 1.42426 11.3763 0.794237 11.726 0.366792Z">
                                                                </path>
                                                            </svg> All blog </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8325eb8 e-con-full e-flex e-con e-child"
                                        data-id="8325eb8" data-element_type="container"
                                        data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                        <div class="elementor-element elementor-element-5944f3f e-con-full e-flex e-con e-child"
                                            data-id="5944f3f" data-element_type="container"
                                            data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
                                            <div class="elementor-element elementor-element-74fb5e6 wcf--image-effect-zoom-in elementor-widget elementor-widget-wcf--posts"
                                                data-id="74fb5e6" data-element_type="widget"
                                                data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
                                                data-widget_type="wcf--posts.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wcf__posts style-4">
                                                        <div class="wcf-posts">
                                                            <article
                                                                class="wcf-post post-1714 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                                                                <div class="thumb">
                                                                    <a href="../arolax-development-tech-agency-we-talent-meet-opportunity/index.html"
                                                                        aria-label="arolax development tech agency we talent meet opportunity">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="360" height="455"
                                                                            src="images/about-2.webp"
                                                                            class="attachment-full size-full wp-image-10"
                                                                            alt=""
                                                                            srcset="images/about-2.webp 360w, images/about-2-237x300.webp 237w"
                                                                            sizes="(max-width: 360px) 100vw, 360px" />
                                                                    </a>
                                                                </div>

                                                                <div class="content">
                                                                    <div class="author">
                                                                        <div class="author-img">
                                                                            <img alt=''
                                                                                src='images/avatar.png'
                                                                                class='avatar avatar-60 photo'
                                                                                height='60' width='60' />
                                                                        </div>
                                                                        <div class="author-bio">
                                                                            <p>
                                                                                Written by <a
                                                                                    href="../author/admin/index.html">
                                                                                    WealCoder </a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="wcf-meta">
                                                                    </ul>
                                                                    <h3 class="title">
                                                                        <a
                                                                            href="../arolax-development-tech-agency-we-talent-meet-opportunity/index.html">
                                                                            Makora development tech agency we talent meet
                                                                            opportunity </a>
                                                                    </h3>
                                                                    <div class="desc">
                                                                        <p>We lead by the design philosophy that every deal
                                                                            only visually&#8230;</p>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article
                                                                class="wcf-post post-1712 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                                                                <div class="thumb">
                                                                    <a href="../arolax-selected-32-best-web-agency-and-development-tool/index.html"
                                                                        aria-label="Arolax selected 32+ best web agency and development tool">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="330" height="180"
                                                                            src="images/about-1.webp"
                                                                            class="attachment-full size-full wp-image-9"
                                                                            alt=""
                                                                            srcset="images/about-1.webp 330w, images/about-1-300x164.webp 300w"
                                                                            sizes="(max-width: 330px) 100vw, 330px" />
                                                                    </a>
                                                                </div>

                                                                <div class="content">
                                                                    <div class="author">
                                                                        <div class="author-img">
                                                                            <img alt=''
                                                                                src='images/avatar.png'
                                                                                class='avatar avatar-60 photo'
                                                                                height='60' width='60' />
                                                                        </div>
                                                                        <div class="author-bio">
                                                                            <p>
                                                                                Written by <a
                                                                                    href="../author/admin/index.html">
                                                                                    WealCoder </a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="wcf-meta">
                                                                    </ul>
                                                                    <h3 class="title">
                                                                        <a
                                                                            href="../arolax-selected-32-best-web-agency-and-development-tool/index.html">
                                                                            Makora selected 32+ best web agency and
                                                                            development tool </a>
                                                                    </h3>
                                                                    <div class="desc">
                                                                        <p>We lead by the design philosophy that every deal
                                                                            only visually&#8230;</p>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article
                                                                class="wcf-post post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                                                                <div class="thumb">
                                                                    <a href="../hello-world/index.html"
                                                                        aria-label="Arolax selected 32+ best web agency and development tool">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="365" height="280"
                                                                            src="images/blog-1.webp"
                                                                            class="attachment-full size-full wp-image-11"
                                                                            alt=""
                                                                            srcset="images/blog-1.webp 365w, images/blog-1-300x230.webp 300w"
                                                                            sizes="(max-width: 365px) 100vw, 365px" />
                                                                    </a>
                                                                </div>

                                                                <div class="content">
                                                                    <div class="author">
                                                                        <div class="author-img">
                                                                            <img alt=''
                                                                                src='images/avatar.png'
                                                                                class='avatar avatar-60 photo'
                                                                                height='60' width='60' />
                                                                        </div>
                                                                        <div class="author-bio">
                                                                            <p>
                                                                                Written by <a
                                                                                    href="../author/admin/index.html">
                                                                                    WealCoder </a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="wcf-meta">
                                                                    </ul>
                                                                    <h3 class="title">
                                                                        <a href="../hello-world/index.html">
                                                                            Makora selected 32+ best web agency and
                                                                            development tool </a>
                                                                    </h3>
                                                                    <div class="desc">
                                                                        <p>Welcome to Makora Agency Theme Sites. This is
                                                                            your first post. Edit or delete it, then start
                                                                            writing!</p>
                                                                    </div>
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
                        </div>
                    </div>
                    <style>
                        .elementor-1386 .elementor-element.elementor-element-6f1edb4 {
                            --display: flex;
                            --flex-direction: column;
                            --container-widget-width: 100%;
                            --container-widget-height: initial;
                            --container-widget-flex-grow: 0;
                            --container-widget-align-self: initial;
                            --flex-wrap-mobile: wrap;
                            --background-transition: 0.3s;
                            border-style: none;
                            --border-style: none;
                            --margin-top: 0px;
                            --margin-bottom: 0px;
                            --margin-left: 0px;
                            --margin-right: 0px;
                            --padding-top: 130px;
                            --padding-bottom: 110px;
                            --padding-left: 20px;
                            --padding-right: 20px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-6f1edb4:not(.elementor-motion-effects-element-type-background),
                        .elementor-1386 .elementor-element.elementor-element-6f1edb4>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                            background-color: #171717;
                        }

                        .elementor-1386 .elementor-element.elementor-element-6f1edb4,
                        .elementor-1386 .elementor-element.elementor-element-6f1edb4::before {
                            --border-transition: 0.3s;
                        }

                        .elementor-1386 .elementor-element.elementor-element-8a1ff10 {
                            width: var(--container-widget-width, 790px);
                            max-width: 790px;
                            --container-widget-width: 790px;
                            --container-widget-flex-grow: 0;
                            text-align: center;
                        }

                        .elementor-1386 .elementor-element.elementor-element-8a1ff10>.elementor-widget-container {
                            margin: 0px 0px 20px 0px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-8a1ff10.elementor-element {
                            --align-self: center;
                        }

                        .elementor-1386 .elementor-element.elementor-element-8a1ff10 .wcf--title {
                            color: #FFFFFF;
                            font-family: "Teko", Sans-serif;
                            font-size: 40px;
                            font-weight: 700;
                            text-transform: uppercase;
                            line-height: 50px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-8a1ff10 .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1386 .elementor-element.elementor-element-fc7f1a3 {
                            width: var(--container-widget-width, 890px);
                            max-width: 890px;
                            --container-widget-width: 890px;
                            --container-widget-flex-grow: 0;
                            text-align: center;
                        }

                        .elementor-1386 .elementor-element.elementor-element-fc7f1a3.elementor-element {
                            --align-self: center;
                        }

                        .elementor-1386 .elementor-element.elementor-element-fc7f1a3 .wcf--title {
                            color: #FFFFFF;
                            font-family: "Teko", Sans-serif;
                            font-size: 190px;
                            font-weight: 700;
                            text-transform: uppercase;
                            line-height: 0.83em;
                        }

                        .elementor-1386 .elementor-element.elementor-element-fc7f1a3 .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1386 .elementor-element.elementor-element-056e84e>.elementor-widget-container {
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-056e84e {
                            text-align: center;
                        }

                        .elementor-1386 .elementor-element.elementor-element-056e84e .elementor-heading-title {
                            color: #FFFFFF;
                            font-family: "Kanit", Sans-serif;
                            font-size: 50px;
                            font-weight: 300;
                            text-decoration: underline;
                        }

                        .elementor-1386 .elementor-element.elementor-element-bfc9cf1 {
                            --display: flex;
                            --flex-direction: row;
                            --container-widget-width: initial;
                            --container-widget-height: 100%;
                            --container-widget-flex-grow: 1;
                            --container-widget-align-self: stretch;
                            --flex-wrap-mobile: wrap;
                            --gap: 0px 0px;
                            --background-transition: 0.3s;
                            border-style: none;
                            --border-style: none;
                            --margin-top: -1px;
                            --margin-bottom: 0px;
                            --margin-left: 0px;
                            --margin-right: 0px;
                            --padding-top: 40px;
                            --padding-bottom: 30px;
                            --padding-left: 15px;
                            --padding-right: 15px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-bfc9cf1:not(.elementor-motion-effects-element-type-background),
                        .elementor-1386 .elementor-element.elementor-element-bfc9cf1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                            background-color: #171717;
                        }

                        .elementor-1386 .elementor-element.elementor-element-bfc9cf1,
                        .elementor-1386 .elementor-element.elementor-element-bfc9cf1::before {
                            --border-transition: 0.3s;
                        }

                        .elementor-1386 .elementor-element.elementor-element-e647c8d {
                            --display: flex;
                            --flex-direction: column;
                            --container-widget-width: 100%;
                            --container-widget-height: initial;
                            --container-widget-flex-grow: 0;
                            --container-widget-align-self: initial;
                            --flex-wrap-mobile: wrap;
                            --background-transition: 0.3s;
                            --margin-top: 0px;
                            --margin-bottom: 0px;
                            --margin-left: 0px;
                            --margin-right: 0px;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-e647c8d.e-con {
                            --align-self: center;
                        }

                        .elementor-1386 .elementor-element.elementor-element-f1f20d5 {
                            text-align: left;
                        }

                        .elementor-1386 .elementor-element.elementor-element-f1f20d5 .wcf--title {
                            color: #FFFFFF;
                            font-family: "Teko", Sans-serif;
                            font-size: 22px;
                            font-weight: 400;
                            text-transform: uppercase;
                        }

                        .elementor-1386 .elementor-element.elementor-element-f1f20d5 .wcf--title .highlight {
                            color: #f00000;
                        }

                        .elementor-1386 .elementor-element.elementor-element-a45e836 {
                            --display: flex;
                            --flex-direction: column;
                            --container-widget-width: 100%;
                            --container-widget-height: initial;
                            --container-widget-flex-grow: 0;
                            --container-widget-align-self: initial;
                            --flex-wrap-mobile: wrap;
                            --background-transition: 0.3s;
                            --margin-top: 0px;
                            --margin-bottom: 0px;
                            --margin-left: 0px;
                            --margin-right: 0px;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                            padding-bottom: calc(45px/2);
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                            margin-top: calc(45px/2);
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                            margin-right: calc(45px/2);
                            margin-left: calc(45px/2);
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items {
                            margin-right: calc(-45px/2);
                            margin-left: calc(-45px/2);
                        }

                        body.rtl .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                            left: calc(-45px/2);
                        }

                        body:not(.rtl) .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                            right: calc(-45px/2);
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-icon i {
                            transition: color 0.3s;
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-icon svg {
                            transition: fill 0.3s;
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd {
                            --e-icon-list-icon-size: 14px;
                            --icon-vertical-offset: 0px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-item>.elementor-icon-list-text,
                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-item>a {
                            font-family: "Teko", Sans-serif;
                            font-size: 22px;
                            font-weight: 400;
                            text-transform: uppercase;
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-text {
                            text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                            color: #FFFFFF;
                            transition: color 0.3s;
                        }

                        .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-item:hover .elementor-icon-list-text {
                            color: #555555;
                        }

                        .elementor-1386 .elementor-element.elementor-element-7f73dcc {
                            --display: flex;
                            --flex-direction: column;
                            --container-widget-width: 100%;
                            --container-widget-height: initial;
                            --container-widget-flex-grow: 0;
                            --container-widget-align-self: initial;
                            --flex-wrap-mobile: wrap;
                            --background-transition: 0.3s;
                            --margin-top: 0px;
                            --margin-bottom: 0px;
                            --margin-left: 0px;
                            --margin-right: 0px;
                            --padding-top: 0px;
                            --padding-bottom: 0px;
                            --padding-left: 0px;
                            --padding-right: 0px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-7f73dcc.e-con {
                            --align-self: center;
                        }

                        .elementor-1386 .elementor-element.elementor-element-e03ae04>.elementor-widget-container {
                            margin: 0px 0px 0px 0px;
                            padding: 0px 0px 0px 0px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-e03ae04 .wcf--social-icons ul {
                            justify-content: flex-end;
                            align-items: flex-end;
                            display: flex;
                            flex-direction: row;
                            gap: 15px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-e03ae04 .wcf-social-icon {
                            color: #FFFFFF;
                            fill: #FFFFFF;
                            --icon-size: 20px;
                        }

                        .elementor-1386 .elementor-element.elementor-element-e03ae04 .wcf-social-icon:hover,
                        .elementor-1386 .elementor-element.elementor-element-e03ae04 .wcf-social-icon:focus {
                            color: #555555;
                            fill: #555555;
                        }

                        @media(max-width:1366px) {
                            .elementor-1386 .elementor-element.elementor-element-6f1edb4 {
                                --padding-top: 80px;
                                --padding-bottom: 80px;
                                --padding-left: 20px;
                                --padding-right: 20px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-f1f20d5 {
                                text-align: left;
                            }
                        }

                        @media(max-width:1200px) {
                            .elementor-1386 .elementor-element.elementor-element-6f1edb4 {
                                --gap: 0px 0px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-fc7f1a3 .wcf--title {
                                font-size: 150px;
                            }
                        }

                        @media(max-width:1024px) {
                            .elementor-1386 .elementor-element.elementor-element-f1f20d5 {
                                text-align: left;
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                                padding-bottom: calc(25px/2);
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                                margin-top: calc(25px/2);
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                                margin-right: calc(25px/2);
                                margin-left: calc(25px/2);
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items {
                                margin-right: calc(-25px/2);
                                margin-left: calc(-25px/2);
                            }

                            body.rtl .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                                left: calc(-25px/2);
                            }

                            body:not(.rtl) .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                                right: calc(-25px/2);
                            }
                        }

                        @media(max-width:880px) {
                            .elementor-1386 .elementor-element.elementor-element-6f1edb4 {
                                --padding-top: 60px;
                                --padding-bottom: 60px;
                                --padding-left: 20px;
                                --padding-right: 20px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-8a1ff10>.elementor-widget-container {
                                margin: 0px 0px 10px 0px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-fc7f1a3 .wcf--title {
                                font-size: 100px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-bfc9cf1 {
                                --padding-top: 30px;
                                --padding-bottom: 20px;
                                --padding-left: 15px;
                                --padding-right: 15px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-f1f20d5 {
                                text-align: left;
                            }

                            .elementor-1386 .elementor-element.elementor-element-f1f20d5 .wcf--title {
                                font-size: 18px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-a45e836 {
                                --justify-content: center;
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                                padding-bottom: calc(20px/2);
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                                margin-top: calc(20px/2);
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                                margin-right: calc(20px/2);
                                margin-left: calc(20px/2);
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items {
                                margin-right: calc(-20px/2);
                                margin-left: calc(-20px/2);
                            }

                            body.rtl .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                                left: calc(-20px/2);
                            }

                            body:not(.rtl) .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                                right: calc(-20px/2);
                            }

                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-item>.elementor-icon-list-text,
                            .elementor-1386 .elementor-element.elementor-element-be962dd .elementor-icon-list-item>a {
                                font-size: 18px;
                            }
                        }

                        @media(max-width:767px) {
                            .elementor-1386 .elementor-element.elementor-element-6f1edb4 {
                                --padding-top: 40px;
                                --padding-bottom: 40px;
                                --padding-left: 15px;
                                --padding-right: 15px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-8a1ff10>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-8a1ff10 .wcf--title {
                                font-size: 30px;
                                line-height: 40px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-fc7f1a3>.elementor-widget-container {
                                margin: 0px 0px 0px 0px;
                                padding: 20px 0px 0px 0px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-fc7f1a3 .wcf--title {
                                font-size: 60px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-056e84e .elementor-heading-title {
                                font-size: 30px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-bfc9cf1 {
                                --padding-top: 30px;
                                --padding-bottom: 20px;
                                --padding-left: 15px;
                                --padding-right: 15px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-e647c8d.e-con {
                                --order: 3;
                            }

                            .elementor-1386 .elementor-element.elementor-element-f1f20d5 {
                                text-align: center;
                            }

                            .elementor-1386 .elementor-element.elementor-element-a45e836 {
                                --padding-top: 10px;
                                --padding-bottom: 5px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-a45e836.e-con {
                                --order: 2;
                            }

                            .elementor-1386 .elementor-element.elementor-element-7f73dcc {
                                --padding-top: 0px;
                                --padding-bottom: 0px;
                                --padding-left: 0px;
                                --padding-right: 0px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-7f73dcc.e-con {
                                --order: 1;
                            }

                            .elementor-1386 .elementor-element.elementor-element-e03ae04 .wcf--social-icons ul {
                                justify-content: center;
                                align-items: center;
                            }
                        }

                        @media(min-width:768px) {
                            .elementor-1386 .elementor-element.elementor-element-6f1edb4 {
                                --content-width: 1520px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-bfc9cf1 {
                                --content-width: 1520px;
                            }

                            .elementor-1386 .elementor-element.elementor-element-e647c8d {
                                --width: 20%;
                            }

                            .elementor-1386 .elementor-element.elementor-element-a45e836 {
                                --width: 60%;
                            }

                            .elementor-1386 .elementor-element.elementor-element-7f73dcc {
                                --width: 20%;
                            }
                        }

                        @media(max-width:1366px) and (min-width:768px) {
                            .elementor-1386 .elementor-element.elementor-element-e647c8d {
                                --width: 30%;
                            }

                            .elementor-1386 .elementor-element.elementor-element-a45e836 {
                                --width: 50%;
                            }
                        }

                        /* Start custom CSS for heading, class: .elementor-element-056e84e */
                        .elementor-1386 .elementor-element.elementor-element-056e84e {
                            text-decoration-skip-ink: none;
                        }

                        /* End custom CSS */
                        /* Start custom CSS for container, class: .elementor-element-6f1edb4 */
                        .underline-offset {
                            text-underline-offset: 14px;
                            text-decoration-thickness: 2px !important;
                        }

                        /* End custom CSS */
                    </style>
                    


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
                    "assets": "https:\/\/crowdytheme.com\/wp\/arolax\/web-design-agencey\/wp-content\/plugins\/elementor\/assets\/",
                    "ajaxurl": "https:\/\/crowdytheme.com\/wp\/arolax\/web-design-agencey\/wp-admin\/admin-ajax.php"
                },
                "nonces": {
                    "floatingButtonsClickTracking": "77c6e4bb8a"
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
                    "id": 7595,
                    "title": "Home%20Dark%20%E2%80%93%20web-design-agencey",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
            /* ]]> */
        </script>

    </body>

    
@endsection

@section('footer')
<div data-elementor-type="wp-post" data-elementor-id="41" class="elementor elementor-41">
	<div class="elementor-element elementor-element-cb74098 e-con-full e-flex e-con e-parent" data-id="cb74098"
		data-element_type="container"
		data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
		<div class="elementor-element elementor-element-d2658e2 e-con-full e-flex e-con e-child" data-id="d2658e2"
			data-element_type="container"
			data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
			<div class="elementor-element elementor-element-b9c8e74 e-con-full e-flex e-con e-child" data-id="b9c8e74"
				data-element_type="container"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
				<div class="elementor-element elementor-element-e4eee91 e-con-full e-flex e-con e-child"
					data-id="e4eee91" data-element_type="container"
					data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
					<div class="elementor-element elementor-element-f8d9194 e-con-full e-flex e-con e-child"
						data-id="f8d9194" data-element_type="container"
						data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
						
						<div class="elementor-element elementor-element-6d2c3e5 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-heading"
							data-id="6d2c3e5" data-element_type="widget"
							data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
							data-widget_type="heading.default">
							<div class="elementor-element elementor-element-c9d63c7 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
								style="    max-width: 100%;
                                width: 100%;" data-id="c9d63c7" data-element_type="widget"
								data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
								data-widget_type="wcf--title.default">
								<div class="elementor-widget-container">
									<h3 class="wcf--title">Get in Touch with Me</h3>
								</div>
							</div>
							<div class="elementor-widget-container">

								<h2 class="elementor-heading-title elementor-size-default">I am open to professional opportunities in data science, machine learning, and artificial intelligence. I aim to apply my analytical and problem-solving skills to create impactful solutions and contribute to innovative projects.<div class="elementor-widget-container" style="    font-family: oak_suns, Sans-serif; font-size: 18px; font-weight: 600; line-height: 1.6em; color: #FFF; transition: color 0.3s;"><br>
							        <a href="mailto:mayanksingh2745@gmail.com">mayanksingh2745@gmail.com</a>
						        </h2>
                                <ul class="elementor-icon-list-items elementor-inline-items">
									<li class="elementor-icon-list-item elementor-inline-item">
                                        <a href="#" style="color: #9FAEB6; fill: #9FAEB6;">
                                            <span class="elementor-icon-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M512 96L127.9 96C110.3 96 96 110.5 96 128.3L96 511.7C96 529.5 110.3 544 127.9 544L512 544C529.6 544 544 529.5 544 511.7L544 128.3C544 110.5 529.6 96 512 96zM231.4 480L165 480L165 266.2L231.5 266.2L231.5 480L231.4 480zM198.2 160C219.5 160 236.7 177.2 236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160zM480.3 480L413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480z"/></svg> </span>
                                            <span class="elementor-icon-list-text"></span>
                                        </a>
									</li>
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <a href="#" style="color: #9FAEB6; fill: #9FAEB6;">
                                            <span class="elementor-icon-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M237.9 461.4C237.9 463.4 235.6 465 232.7 465C229.4 465.3 227.1 463.7 227.1 461.4C227.1 459.4 229.4 457.8 232.3 457.8C235.3 457.5 237.9 459.1 237.9 461.4zM206.8 456.9C206.1 458.9 208.1 461.2 211.1 461.8C213.7 462.8 216.7 461.8 217.3 459.8C217.9 457.8 216 455.5 213 454.6C210.4 453.9 207.5 454.9 206.8 456.9zM251 455.2C248.1 455.9 246.1 457.8 246.4 460.1C246.7 462.1 249.3 463.4 252.3 462.7C255.2 462 257.2 460.1 256.9 458.1C256.6 456.2 253.9 454.9 251 455.2zM316.8 72C178.1 72 72 177.3 72 316C72 426.9 141.8 521.8 241.5 555.2C254.3 557.5 258.8 549.6 258.8 543.1C258.8 536.9 258.5 502.7 258.5 481.7C258.5 481.7 188.5 496.7 173.8 451.9C173.8 451.9 162.4 422.8 146 415.3C146 415.3 123.1 399.6 147.6 399.9C147.6 399.9 172.5 401.9 186.2 425.7C208.1 464.3 244.8 453.2 259.1 446.6C261.4 430.6 267.9 419.5 275.1 412.9C219.2 406.7 162.8 398.6 162.8 302.4C162.8 274.9 170.4 261.1 186.4 243.5C183.8 237 175.3 210.2 189 175.6C209.9 169.1 258 202.6 258 202.6C278 197 299.5 194.1 320.8 194.1C342.1 194.1 363.6 197 383.6 202.6C383.6 202.6 431.7 169 452.6 175.6C466.3 210.3 457.8 237 455.2 243.5C471.2 261.2 481 275 481 302.4C481 398.9 422.1 406.6 366.2 412.9C375.4 420.8 383.2 435.8 383.2 459.3C383.2 493 382.9 534.7 382.9 542.9C382.9 549.4 387.5 557.3 400.2 555C500.2 521.8 568 426.9 568 316C568 177.3 455.5 72 316.8 72zM169.2 416.9C167.9 417.9 168.2 420.2 169.9 422.1C171.5 423.7 173.8 424.4 175.1 423.1C176.4 422.1 176.1 419.8 174.4 417.9C172.8 416.3 170.5 415.6 169.2 416.9zM158.4 408.8C157.7 410.1 158.7 411.7 160.7 412.7C162.3 413.7 164.3 413.4 165 412C165.7 410.7 164.7 409.1 162.7 408.1C160.7 407.5 159.1 407.8 158.4 408.8zM190.8 444.4C189.2 445.7 189.8 448.7 192.1 450.6C194.4 452.9 197.3 453.2 198.6 451.6C199.9 450.3 199.3 447.3 197.3 445.4C195.1 443.1 192.1 442.8 190.8 444.4zM179.4 429.7C177.8 430.7 177.8 433.3 179.4 435.6C181 437.9 183.7 438.9 185 437.9C186.6 436.6 186.6 434 185 431.7C183.6 429.4 181 428.4 179.4 429.7z"/></svg></span>
                                            <span class="elementor-icon-list-text"></span>
                                        </a>
									</li>
									
								</ul>
                            </div>
						</div>
                        
						
					</div>
					<div class="elementor-element elementor-element-d8d00b6 e-con-full e-flex e-con e-child"
						data-id="d8d00b6" data-element_type="container"
						data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
						<div class="elementor-element elementor-element-868c34b e-flex e-con-boxed e-con e-child"
							data-id="868c34b" data-element_type="container"
							data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
							<div class="e-con-inner">
								<div class="elementor-element elementor-element-744d705 e-con-full e-flex e-con e-child"
									data-id="744d705" data-element_type="container"
									data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
									<div class="elementor-element elementor-element-c9d63c7 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
										data-id="c9d63c7" data-element_type="widget"
										data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
										data-widget_type="wcf--title.default">
										<div class="elementor-widget-container">
											<h3 class="wcf--title">Know More</h3>
										</div>
									</div>
									<div class="elementor-element elementor-element-1b49034 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
										data-id="1b49034" data-element_type="widget"
										data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
										data-widget_type="icon-list.default">
										<div class="elementor-widget-container">
											<ul class="elementor-icon-list-items">
												<li class="elementor-icon-list-item">
													<a href="#">

														<span class="elementor-icon-list-text">Resume
</span>
													</a>
												</li>
												<li class="elementor-icon-list-item">
													<a href="#">

														<span class="elementor-icon-list-text">Projects</span>
													</a>
												</li>
												<li class="elementor-icon-list-item">
													<a href="#">

														<span class="elementor-icon-list-text">Certificates</span>
													</a>
												</li>
												<li class="elementor-icon-list-item">
													<a href="#">

														<span class="elementor-icon-list-text">Research</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-be55bad e-con-full e-flex e-con e-child"
									data-id="be55bad" data-element_type="container"
									data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
									<div class="elementor-element elementor-element-b5d5ac2 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
										data-id="b5d5ac2" data-element_type="widget"
										data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
										data-widget_type="wcf--title.default">
										<div class="elementor-widget-container">
											<h3 class="wcf--title">Pages</h3>
										</div>
									</div>
									<div class="elementor-element elementor-element-33c0887 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
										data-id="33c0887" data-element_type="widget"
										data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
										data-widget_type="icon-list.default">
										<div class="elementor-widget-container">
											<ul class="elementor-icon-list-items">
												<li class="elementor-icon-list-item">
													<a href="{{asset('/')}}">

														<span class="elementor-icon-list-text">Home</span>
													</a>
												</li>
												<li class="elementor-icon-list-item">
													<a href="{{asset('My-Work')}}">

														<span class="elementor-icon-list-text">My Work</span>
													</a>
												</li>
												<li class="elementor-icon-list-item">
													<a href="{{asset('About-Me')}}">

														<span class="elementor-icon-list-text">About Me</span>
													</a>
												</li>
												<li class="elementor-icon-list-item">
													<a href="{{asset('My-Learning')}}">

														<span class="elementor-icon-list-text">My Learning</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-786ffff e-con-full e-flex e-con e-child"
									data-id="786ffff" data-element_type="container"
									data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
									<div class="elementor-element elementor-element-c977ff0 elementor-widget__width-initial wcf-t-animation-none elementor-widget elementor-widget-wcf--title"
										data-id="c977ff0" data-element_type="widget"
										data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
										data-widget_type="wcf--title.default">
										<div class="elementor-widget-container">
											<h3 class="wcf--title">Where data meets innovation.</h3>
										</div>
									</div>
									<div class="elementor-element elementor-element-7186038 elementor-widget-mobile_extra__width-initial wcf-t-animation-none elementor-widget elementor-widget-text-editor"
										data-id="7186038" data-element_type="widget"
										data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<style>
												/*! elementor - v3.23.0 - 05-08-2024 */
												.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
													background-color: #69727d;
													color: #fff
												}

												.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
													color: #69727d;
													border: 3px solid;
													background-color: transparent
												}

												.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
													margin-top: 8px
												}

												.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
													width: 1em;
													height: 1em
												}

												.elementor-widget-text-editor .elementor-drop-cap {
													float: left;
													text-align: center;
													line-height: 1;
													font-size: 50px
												}

												.elementor-widget-text-editor .elementor-drop-cap-letter {
													display: inline-block
												}
											</style>Transforming raw data into meaningful insights for a smarter future.
										</div>
									</div>
									
<div class="elementor-element elementor-element-b9cb4d4 elementor-widget elementor-widget-wcf--site-logo"
							data-id="b9cb4d4" data-element_type="widget"
							data-settings="{&quot;wcf-animation&quot;:&quot;none&quot;}"
							data-widget_type="wcf--site-logo.default">
							<div class="elementor-widget-container">
								<div class="elementor-image">
									<a href="{{asset('/')}}" aria-label="Site Logo">
										<img width="188" height="51" src="images/hero-logo.PNG"
											class="attachment-full size-full wp-image-1483" alt="" />
									</a>
								</div>
							</div>
						</div>




								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-d5ca9a2 e-flex e-con-boxed e-con e-child"
					data-id="d5ca9a2" data-element_type="container"
					data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-41f7fe4 e-flex e-con-boxed e-con e-child"
							data-id="41f7fe4" data-element_type="container"
							data-settings="{&quot;wcf_enable_cursor_hover_effect_text&quot;:&quot;View&quot;,&quot;wcf-animation&quot;:&quot;none&quot;,&quot;wcf_pin_breakpoint&quot;:&quot;mobile&quot;}">
							<div class="e-con-inner">
								<div class="elementor-element elementor-element-79e4a5d wcf-t-animation-none elementor-widget elementor-widget-wcf--text"
									data-id="79e4a5d" data-element_type="widget"
									data-settings="{&quot;wcf_text_animation&quot;:&quot;none&quot;,&quot;wcf-animation&quot;:&quot;none&quot;}"
									data-widget_type="wcf--text.default">
									<div class="elementor-widget-container">
										<div class="wcf--text">© 2024 <span style="color: #ffffff"><a
													style="color: #ffffff"
													href="https://themeforest.net/user/crowdyflow/portfolio">CrowdyTheme</a>
											</span>Agency</div>
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
</div><!-- #page -->
</div>
</div>
<div class='wcf-scroll-to-top scroll-to-'><svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-up"
		viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
		<path
			d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
		</path>
	</svg></div>
<div class="wcf-cursor"></div>
<div class="wcf-cursor-follower"></div>
@endsection

@section('footer_scripts')

    <link rel='stylesheet' id='elementor-post-41-css'
    href="{{asset('css/post-41fefe.min.css')}}" type='text/css'
    media='all' />
    <link rel='stylesheet' id='wcf--mailchimp-css'
    href="{{asset('css/mailchimpb6a4.min.css')}}"
    type='text/css' media='all' />

    <link rel="stylesheet" href="{{asset('css/custom-widget-icon-list.min18e1.min.css')}}">
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
@endsection

