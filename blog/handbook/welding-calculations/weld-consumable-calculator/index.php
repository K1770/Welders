<!DOCTYPE html>
<html lang="en-AU" class="js">

<head>

    <script async="" src="./weld-consumable-calculator/files/gtm.js(1).Без названия"></script>
    <script type="text/javascript">
        if (!gform) {
            document.addEventListener("gform_main_scripts_loaded", function() {
                gform.scriptsLoaded = !0
            }), window.addEventListener("DOMContentLoaded", function() {
                gform.domLoaded = !0
            });
            var gform = {
                domLoaded: !1,
                scriptsLoaded: !1,
                initializeOnLoaded: function(o) {
                    gform.domLoaded && gform.scriptsLoaded ? o() : !gform.domLoaded && gform.scriptsLoaded ? window.addEventListener("DOMContentLoaded", o) : document.addEventListener("gform_main_scripts_loaded", o)
                },
                hooks: {
                    action: {},
                    filter: {}
                },
                addAction: function(o, n, r, t) {
                    gform.addHook("action", o, n, r, t)
                },
                addFilter: function(o, n, r, t) {
                    gform.addHook("filter", o, n, r, t)
                },
                doAction: function(o) {
                    gform.doHook("action", o, arguments)
                },
                applyFilters: function(o) {
                    return gform.doHook("filter", o, arguments)
                },
                removeAction: function(o, n) {
                    gform.removeHook("action", o, n)
                },
                removeFilter: function(o, n, r) {
                    gform.removeHook("filter", o, n, r)
                },
                addHook: function(o, n, r, t, i) {
                    null == gform.hooks[o][n] && (gform.hooks[o][n] = []);
                    var e = gform.hooks[o][n];
                    null == i && (i = n + "_" + e.length), null == t && (t = 10), gform.hooks[o][n].push({
                        tag: i,
                        callable: r,
                        priority: t
                    })
                },
                doHook: function(o, n, r) {
                    if (r = Array.prototype.slice.call(r, 1), null != gform.hooks[o][n]) {
                        var t, i = gform.hooks[o][n];
                        i.sort(function(o, n) {
                            return o.priority - n.priority
                        });
                        for (var e = 0; e < i.length; e++) "function" != typeof(t = i[e].callable) && (t = window[t]), "action" == o ? t.apply(null, r) : r[0] = t.apply(null, r)
                    }
                    if ("filter" == o) return r[0]
                },
                removeHook: function(o, n, r, t) {
                    if (null != gform.hooks[o][n])
                        for (var i = gform.hooks[o][n], e = i.length - 1; 0 <= e; e--) null != t && t != i[e].tag || null != r && r != i[e].priority || i.splice(e, 1)
                }
            }
        }
    </script>

    <title>Weld Consumable Calculator - Butt and Fillet Welds - Australian Welding Institute</title>


    <link rel="stylesheet" id="gravitydivi-forms-customizer-module-styles-css" href="./weld-consumable-calculator/files/style.min(2).css" type="text/css" media="all">

    <script type="text/javascript" src="./weld-consumable-calculator/files/jquery.min.js.Без названия" id="jquery-core-js"></script>


    <script type="text/javascript" src="./weld-consumable-calculator/files/confirm.min.js.Без названия" id="bp-confirm-js"></script>
    <script type="text/javascript" src="./weld-consumable-calculator/files/widget-members.min.js.Без названия" id="bp-widget-members-js"></script>


    <script type="text/javascript" src="./weld-consumable-calculator/files/jquery-scroll-to.min.js.Без названия" id="bp-jquery-scroll-to-js"></script>


    <link rel="stylesheet" id="et-core-unified-4525-cached-inline-styles" href="./weld-consumable-calculator/files/et-core-unified-4525-16398146063097.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)">
    <style>
        .back {
            background: rgb(238, 238, 238);
            border: 1px solid rgb(238, 238, 238);
            border-radius: 8px;
            padding: 36px 0 16px 0;
        }

        .pr-0 {
            padding-right: 0;
        }

        #main-content ul {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .main-p0-left {
            padding-left: 0 !important;
        }

        div.ginput_container {
            display: inline-block;
            padding: 0 !important;
            margin-top: 0 !important;
            height: 50px;
            padding-top: 50%;
            display: flex;
            align-items: center;
            /* text-decoration: underline; */
            background: #FFFFFF !important;
        }

        .et_pb_dcgd_gravity_divi_module .gform_wrapper select {
            padding: 0 !important;
            width: 100%;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #FFFFFF !important;


        }

        .gform-body>ul>li {
            width: 50%;

        }

        #field_3_1,
        #field_4_1 {
            width: 100%;
        }


        .flex_all {
            display: flex !important;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            width: 100% !important;

        }

        .gfield_description {
            margin-top: 0 !important;
            right: 21px !important;
            color: rgb(33, 134, 188) !important;
        }


        select {
            background: #FFFFFF !important;
            color: rgb(49, 124, 178) !important;
            border-bottom: 1px solid blue;
        }

        input {
            background: #FFFFFF !important;
            height: 100%;
        }

        .gfield_label {
            white-space: nowrap;
            color: #555 !important;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 400 !important;
        }

        .gfield_description {
            height: 100%;
            background: #FFFFFF !important;
            padding: 0 !important;
            display: flex;
            align-items: center;
            justify-content: flex-end;

        }

        .gfield_description {
            font-size: 1em !important;
        }

        :root {
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .w-100 {
            width: 100%;
        }

        .w-center {
            width: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .top {
            padding: 0 16px;
        }

        ul.gform_fields li.gfield {
            padding-right: 16px;
            padding-left: 16px;
        }

        .gfield_label {
            padding-left: 16px;
        }

        input {
            outline: none;
        }

        #field_3_12>.flex,
        #field_3_12>.flex>.ginput_container>input,
        #field_3_12>.flex>.gfield_description,
        #field_3_13>.flex,
        #field_3_13>.flex>.ginput_container>input,
        #field_3_13>.flex>.gfield_description,
        #field_3_14>.flex,
        #field_3_14>.flex>.ginput_container>input,
        #field_3_14>.flex>.gfield_description,
        #field_3_15>.flex,
        #field_3_15>.flex>.ginput_container>input,
        #field_3_15>.flex>.gfield_description,
        #field_4_5>.flex,
        #field_4_5>.flex>.ginput_container>input,
        #field_4_5>.flex>.gfield_description,
        #field_4_6>.flex,
        #field_4_6>.flex>.ginput_container>input,
        #field_4_6>.flex>.gfield_description,
        #field_4_7>.flex,
        #field_4_7>.flex>.ginput_container>input,
        #field_4_7>.flex>.gfield_description {
            background: #FFA500 !important;
        }

        @media (max-width: 1100px) {
            .gform-body>ul>li {
                width: 100% !important;
            }

            .w-center {
                width: 70%;

            }
        }

        select {
            outline: none;
        }
    </style>
</head>

<body>
    <div id="page-container" class="et-animated-content" style=" width:100%">

        <div id="et-main-area">

            <div id="main-content">

                <article id="post-4525" class="post-4525 page type-page status-publish hentry pmpro-has-access">

                    <div class="entry-content">
                        <div id="et-boc" class="et-boc">

                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section et_pb_section_0 et_section_regular back">

                                        <div class="et_pb_row et_pb_row_0">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">



                                                </div> <!-- .et_pb_text -->
                                            </div> <!-- .et_pb_column -->


                                        </div> <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_1">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child pr-0">

                                                <div class="et_pb_module et_pb_image et_pb_image_0">
                                                    <span class="et_pb_image_wrap "><img class="top w-100" loading="lazy" src="./weld-consumable-calculator/files/weld_cc.png" alt="" title=""></span>
                                                </div>
                                                <div class="et_pb_module et_pb_dcgd_gravity_divi_module et_pb_dcgd_gravity_divi_module_0">

                                                    <div class="et_pb_module_inner">
                                                        <div class="dcgd_gravity_divi_wrapper clearfix">
                                                            <div class="gf_browser_chrome gform_wrapper gform_legacy_markup_wrapper" id="gform_wrapper_3">
                                                                <form method="post" enctype="multipart/form-data" id="gform_3" action="https://welding.org.au/calculators/weld-consumable-calculator-butt-and-fillet-welds/" data-hs-cf-bound="true">
                                                                    <div class="gform_body gform-body">
                                                                        <ul id="gform_fields_3" class="flex_all gform_fields top_label form_sublabel_below description_below main-p0-left">
                                                                            <li id="field_3_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_1">Process<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                                    <div class="ginput_container ginput_container_select">
                                                                                        <select name="input_1" id="input_3_1" class="large gfield_select" aria-required="true" aria-invalid="false">
                                                                                            <option value="99">99 Submerged
                                                                                                Arc Welding</option>
                                                                                            <option value="92">92 MIG (GMAW)
                                                                                                short Arc</option>
                                                                                            <option value="95">95 MIG (GMAW)
                                                                                                spray arc</option>
                                                                                            <option value="98">98 MIG (GMAW)
                                                                                                pulsed arc</option>
                                                                                            <option value="82">82 Flux Cored
                                                                                                (FCAW) E70T-4</option>
                                                                                            <option value="85">85 Flux Cored
                                                                                                (FCAW) E71T-1</option>
                                                                                            <option value="88">88 Flux Cored
                                                                                                (FCAW)E70T-5</option>
                                                                                            <option value="92">92 Flux Cored
                                                                                                (FCAW) E70C-6M</option>
                                                                                            <option value="80">80 Hard
                                                                                                Facing Gas Covered</option>
                                                                                            <option value="56">56 Stick
                                                                                                (MMAW) GP's</option>
                                                                                            <option value="59">59 Stick
                                                                                                (MMAW) Low Hydrogen</option>
                                                                                            <option value="60">60 Stick
                                                                                                (MMAW) Iron powder</option>
                                                                                            <option value="65">65 Stick
                                                                                                (MMAW) hard Facing</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_10" class="gfield gf_left_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_10">Plate thickness
                                                                                        (T)</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_10" id="input_3_10" type="number" value="" class="medium" aria-invalid="false" aria-describedby="gfield_description_3_10" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_10">mm
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_11" class="gfield gf_right_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_11">Included bevel
                                                                                        angle (A)</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_11" id="input_3_11" type="number" value="" class="medium" aria-invalid="false" aria-describedby="gfield_description_3_11" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_11">degrees
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_4" class="gfield gf_left_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_4">Root gap (G)</label>
                                                                                    <div class="ginput_container ginput_container_text">
                                                                                        <input name="input_4" id="input_3_4" type="number" value="" class="medium" aria-describedby="gfield_description_3_4" aria-invalid="false" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_4">mm</div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_5" class="gfield gf_right_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_5">Root thickness
                                                                                        (R)</label>
                                                                                    <div class="ginput_container ginput_container_text">
                                                                                        <input name="input_5" id="input_3_5" type="number" value="" class="medium" aria-describedby="gfield_description_3_5" aria-invalid="false" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_5">mm</div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_6" class="gfield gf_left_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_6">Cap height
                                                                                        (C)</label>
                                                                                    <div class="ginput_container ginput_container_text">
                                                                                        <input name="input_6" id="input_3_6" type="number" value="" class="medium" aria-describedby="gfield_description_3_6" aria-invalid="false" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_6">mm
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_7" class="gfield gf_right_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_7">Weld length</label>
                                                                                    <div class="ginput_container ginput_container_text">
                                                                                        <input name="input_7" id="input_3_7" type="number" value="" class="medium" aria-describedby="gfield_description_3_7" aria-invalid="false" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_7">m </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_12" class="gfield gf_left_half sh_fix_right_descrption gfield_calculation field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_12">Opening width
                                                                                        (O)</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_12" id="input_3_12" type="text" value="" class="medium" readonly="readonly" aria-invalid="false" aria-describedby="gfield_description_3_12" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_12">mm
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_13" class="gfield gf_right_half sh_fix_right_descrption gfield_calculation field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_13">Consumable
                                                                                        usage</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_13" id="input_3_13" type="text" value="" class="medium" readonly="readonly" aria-invalid="false" aria-describedby="gfield_description_3_13" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_13">Kg/mtr
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_14" class="gfield gf_left_half sh_fix_right_descrption gfield_calculation field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_14">Total weld metal
                                                                                        weight</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_14" id="input_3_14" type="text" value="" class="medium" readonly="readonly" aria-invalid="false" aria-describedby="gfield_description_3_14" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_14">kg
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_3_15" class="gfield gf_right_half sh_fix_right_descrption gfield_calculation field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_3_15">Total consumable
                                                                                        required</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_15" id="input_3_15" type="text" value="" class="medium" readonly="readonly" aria-invalid="false" aria-describedby="gfield_description_3_15" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_3_15">kg
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div><!-- .dcgd_gravity_divi_wrapper -->
                                                    </div>
                                                </div>
                                            </div> <!-- .et_pb_column -->

                                        </div> <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_2">
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_dcgd_gravity_divi_module et_pb_dcgd_gravity_divi_module_1">

                                                    <div class="et_pb_module et_pb_image et_pb_image_1">
                                                        <span class="et_pb_image_wrap "><img class="top w-center" loading="lazy" src="./weld-consumable-calculator/files/fillet_weld.png" alt="" title=""></span>
                                                    </div>
                                                    <div class="et_pb_module_inner">
                                                        <div class="dcgd_gravity_divi_wrapper clearfix">
                                                            <div class="gf_browser_chrome gform_wrapper gform_legacy_markup_wrapper" id="gform_wrapper_4">
                                                                <form method="post" enctype="multipart/form-data" id="gform_4" action="https://welding.org.au/calculators/weld-consumable-calculator-butt-and-fillet-welds/" data-hs-cf-bound="true">
                                                                    <div class="gform_body gform-body">
                                                                        <ul id="gform_fields_4" class="flex_all gform_fields top_label form_sublabel_below description_below">
                                                                            <li id="field_4_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_4_1">Process<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                                    <div class="ginput_container ginput_container_select">
                                                                                        <select name="input_1" id="input_4_1" class="large gfield_select" aria-required="true" aria-invalid="false">
                                                                                            <option value="99">99 Submerged
                                                                                                Arc Welding</option>
                                                                                            <option value="92">92 MIG (GMAW)
                                                                                                short Arc</option>
                                                                                            <option value="95">95 MIG (GMAW)
                                                                                                spray arc</option>
                                                                                            <option value="98">98 MIG (GMAW)
                                                                                                pulsed arc</option>
                                                                                            <option value="82">82 Flux Cored
                                                                                                (FCAW) E70T-4</option>
                                                                                            <option value="85">85 Flux Cored
                                                                                                (FCAW) E71T-1</option>
                                                                                            <option value="88">88 Flux Cored
                                                                                                (FCAW)E70T-5</option>
                                                                                            <option value="92">92 Flux Cored
                                                                                                (FCAW) E70C-6M</option>
                                                                                            <option value="80">80 Hard
                                                                                                Facing Gas Covered</option>
                                                                                            <option value="56">56 Stick
                                                                                                (MMAW) GP's</option>
                                                                                            <option value="59">59 Stick
                                                                                                (MMAW) Low Hydrogen</option>
                                                                                            <option value="60">60 Stick
                                                                                                (MMAW) Iron powder</option>
                                                                                            <option value="65">65 Stick
                                                                                                (MMAW) hard Facing</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_4_8" class="gfield gf_left_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_4_8">Fillet size
                                                                                        (F)</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_8" id="input_4_8" type="number" value="" class="medium" aria-invalid="false" aria-describedby="gfield_description_4_8" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_4_8">mm</div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_4_9" class="gfield gf_right_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_4_9">Cap height
                                                                                        (C)</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_9" id="input_4_9" type="number" value="" class="medium" aria-invalid="false" aria-describedby="gfield_description_4_9" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_4_9">mm</div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_4_10" class="gfield gf_left_half sh_fix_right_descrption field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_4_10">Weld length</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_10" id="input_4_10" type="number" value="" class="medium" aria-invalid="false" aria-describedby="gfield_description_4_10" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_4_10">m</div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_4_5" class="gfield gf_right_half sh_fix_right_descrption gfield_calculation field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_4_5">Consumable
                                                                                        usage</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_5" id="input_4_5" type="text" value="" class="large" readonly="readonly" aria-invalid="false" aria-describedby="gfield_description_4_5" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_4_5">Kg/mtr
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_4_6" class="gfield gf_left_half sh_fix_right_descrption gfield_calculation field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_4_6">Total weld metal
                                                                                        weight</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_6" id="input_4_6" type="text" value="" class="medium" readonly="readonly" aria-invalid="false" aria-describedby="gfield_description_4_6" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_4_6">kg</div>
                                                                                </div>
                                                                            </li>
                                                                            <li id="field_4_7" class="gfield gf_right_half sh_fix_right_descrption gfield_calculation field_sublabel_below field_description_below gfield_visibility_visible">
                                                                                <div class="flex">
                                                                                    <label class="gfield_label" for="input_4_7">Total consumable
                                                                                        required</label>
                                                                                    <div class="ginput_container ginput_container_number">
                                                                                        <input name="input_7" id="input_4_7" type="text" value="" class="medium" readonly="readonly" aria-invalid="false" aria-describedby="gfield_description_4_7" dcvalue="">
                                                                                    </div>
                                                                                    <div class="gfield_description" id="gfield_description_4_7">kg</div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div><!-- .dcgd_gravity_divi_wrapper -->
                                                    </div>
                                                </div>
                                            </div> <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            </div> <!-- .et_pb_column -->
                                        </div> <!-- .et_pb_row -->
                                    </div> <!-- .et_pb_section -->
                                </div><!-- .et_builder_inner_content -->
                            </div><!-- .et-l -->
                        </div><!-- #et-boc -->
                    </div> <!-- .entry-content -->
                </article> <!-- .et_pb_post -->

            </div> <!-- #main-content -->

        </div> <!-- #page-container -->



        <link rel="stylesheet" id="gforms_formsmain_css-css" href="./weld-consumable-calculator/files/formsmain.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="gforms_ready_class_css-css" href="./weld-consumable-calculator/files/readyclass.min.css" type="text/css" media="all">

        <script type="text/javascript" id="gform_gravityforms-js-extra">
            /* <![CDATA[ */
            var gform_i18n = {
                "datepicker": {
                    "days": {
                        "monday": "Mon",
                        "tuesday": "Tue",
                        "wednesday": "Wed",
                        "thursday": "Thu",
                        "friday": "Fri",
                        "saturday": "Sat",
                        "sunday": "Sun"
                    },
                    "months": {
                        "january": "January",
                        "february": "February",
                        "march": "March",
                        "april": "April",
                        "may": "May",
                        "june": "June",
                        "july": "July",
                        "august": "August",
                        "september": "September",
                        "october": "October",
                        "november": "November",
                        "december": "December"
                    }
                }
            };
            var gf_global = {
                "gf_currency_config": {
                    "name": "Australian Dollar",
                    "symbol_left": "$",
                    "symbol_right": "",
                    "symbol_padding": " ",
                    "thousand_separator": ",",
                    "decimal_separator": ".",
                    "decimals": 2
                },
                "base_url": "https:\/\/welding.org.au\/wp-content\/plugins\/gravityforms",
                "number_formats": [],
                "spinnerUrl": "https:\/\/welding.org.au\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
                "strings": {
                    "newRowAdded": "New row added.",
                    "rowRemoved": "Row removed",
                    "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
                }
            };
            var gf_legacy_multi = {
                "3": "1"
            };
            var gf_global = {
                "gf_currency_config": {
                    "name": "Australian Dollar",
                    "symbol_left": "$",
                    "symbol_right": "",
                    "symbol_padding": " ",
                    "thousand_separator": ",",
                    "decimal_separator": ".",
                    "decimals": 2
                },
                "base_url": "https:\/\/welding.org.au\/wp-content\/plugins\/gravityforms",
                "number_formats": [],
                "spinnerUrl": "https:\/\/welding.org.au\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
                "strings": {
                    "newRowAdded": "New row added.",
                    "rowRemoved": "Row removed",
                    "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
                }
            };
            var gf_legacy_multi = {
                "3": "1",
                "4": "1"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer" src="./weld-consumable-calculator/files/gravityforms.min.js.Без названия" id="gform_gravityforms-js"></script>
        <script type="text/javascript" defer="defer" src="./weld-consumable-calculator/files/gravityforms-sh-custom-functions.js.Без названия" id="gforms-sh-custom-functions-js"></script>

        <script type="text/javascript">
            gform.initializeOnLoaded(function() {
                jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
                    if (formId == 3) {
                        gf_global["number_formats"][3] = {
                            "1": {
                                "price": false,
                                "value": false
                            },
                            "10": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "11": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "4": {
                                "price": false,
                                "value": false
                            },
                            "5": {
                                "price": false,
                                "value": false
                            },
                            "6": {
                                "price": false,
                                "value": false
                            },
                            "7": {
                                "price": false,
                                "value": false
                            },
                            "12": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "13": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "14": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "15": {
                                "price": false,
                                "value": "decimal_dot"
                            }
                        };
                        if (typeof window.gf_global["gfcalc"] == "undefined") {
                            window.gf_global["gfcalc"] = {};
                        }
                        window.gf_global["gfcalc"][3] = new GFCalc(3, [{
                            "field_id": 12,
                            "formula": "( ((TAN (RADIANS({Included bevel angle (A):11}\/2)) * ({Plate thickness (T):10}-{Root thickness (R):5}))) * 2) +{Root gap (G):4}",
                            "rounding": ""
                        }, {
                            "field_id": 13,
                            "formula": "( ((TAN (RADIANS({Included bevel angle (A):11}\/2)) * ({Plate thickness (T):10}-{Root thickness (R):5}))*({Plate thickness (T):10}-{Root thickness (R):5})\/2)\/1000000*7900)*2+(({Plate thickness (T):10}*{Root gap (G):4})\/1000000*7900)+((({Cap height (C):6}*{Opening width (O):12})\/4*3)\/1000000*7900)",
                            "rounding": "norounding"
                        }, {
                            "field_id": 14,
                            "formula": "{Consumable usage:13} * {Weld length:7}",
                            "rounding": "norounding"
                        }, {
                            "field_id": 15,
                            "formula": "{Total weld metal weight:14} \/ ( {Process:1} \/ 100)",
                            "rounding": "norounding"
                        }]);
                    }
                });
                jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
            });
        </script>
        <script type="text/javascript">
            gform.initializeOnLoaded(function() {
                jQuery(document).trigger('gform_post_render', [3, 1])
            });
        </script>
        <script type="text/javascript">
            gform.initializeOnLoaded(function() {
                jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
                    if (formId == 4) {
                        gf_global["number_formats"][4] = {
                            "1": {
                                "price": false,
                                "value": false
                            },
                            "8": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "9": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "10": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "5": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "6": {
                                "price": false,
                                "value": "decimal_dot"
                            },
                            "7": {
                                "price": false,
                                "value": "decimal_dot"
                            }
                        };
                        if (typeof window.gf_global["gfcalc"] == "undefined") {
                            window.gf_global["gfcalc"] = {};
                        }
                        window.gf_global["gfcalc"][4] = new GFCalc(4, [{
                            "field_id": 5,
                            "formula": "((((SIN(RADIANS(45))*{Fillet size (F):8})*(SIN(RADIANS(45))*{Fillet size (F):8}))\/2)\/1000000*7900)+(({Cap height (C):9}*{Fillet size (F):8})\/4*3)\/1000000*7900",
                            "rounding": ""
                        }, {
                            "field_id": 6,
                            "formula": "{Consumable usage:5} * {Weld length:10}",
                            "rounding": ""
                        }, {
                            "field_id": 7,
                            "formula": "{Total weld metal weight:6}\/({Process:1}\/100 )",
                            "rounding": ""
                        }]);
                    }
                });
                jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
            });
        </script>
        <script type="text/javascript">
            gform.initializeOnLoaded(function() {
                jQuery(document).trigger('gform_post_render', [4, 1])
            });
        </script>

</body>

</html>