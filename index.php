<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/slicebox.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
    <section id="rt-mainbody-surround">
        <div id="rt-maintop">
            <div class="rt-container">
                <div class="rt-flex-container">
                    <div class="rt-grid-5 rt-alpha">
                        <div class="rt-block nopaddingall nomargintop wow fadeIn">
                            <div class="module-surround">
                                <div class="module-content">
                                    <div class="customnopaddingall nomargintop wow fadeIn"
                                         style="margin-top: 50px !important;">
                                        <p><img src="images/home_chick.png" alt="chicken" width="554" height="284"
                                                style="display: block; margin-left: auto; margin-right: auto; margin-top: 20px;"/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rt-grid-7 rt-omega">
                        <div class="rt-block medmargintop nopaddingbottom wow fadeInDown">
                            <div class="module-surround">
                                <div class="module-content">
                                    <div class="custommedmargintop nopaddingbottom wow fadeInDown">
                                        <p style="text-align: center;font-size: 40px; font-family: bestfontevar;">
                             <span style="color: #444444;">
                                <span style="color: #e4002b;font-size: 103px;line-height:104px;">
                                   <!-- <img src="images/fresh_slogan.png" alt="fresh slogan" style="display: block; margin-left: auto; margin-right: auto;" /> -->
                                   Fresh & Delicious
                                </span>
                             </span>
                                        </p>

                                        <p style="text-align: center;font-size: 25px; font-family: bestfontevar;">
                             <span style="color: #444444;">
                                <span style="color: black;font-size: 60px;line-height:59px;">
                                   <!-- <img src="images/fresh_slogan.png" alt="fresh slogan" style="display: block; margin-left: auto; margin-right: auto;" /> -->
                                   Chargrilled Chicken <!--<br>&<br>Rotisserie-->
                                </span>
                             </span>
                                        </p>

                                        <!--<p style="text-align: center;"><span style="font-size: 16pt;"><span style="color: #444444;">Proudly 100% Canadian. Our Chicken is sourced fresh from Canadian farms throughout the week, cooked in trans-fat free canola oil to cut out any unhealthy fats without sacrificing great taste and our Signature Crispy and Crunchy texture.</span></span></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div id="rt-mainbody-wrapper">
            <div class="rt-container">
                <div id="rt-main" class="mb12">
                    <div class="rt-flex-container">
                        <div class="rt-mainbody-wrapper rt-grid-12 ">
                            <div class="rt-component-block rt-block">
                                <div id="rt-mainbody">
                                    <div class="component-content">
                                        <section class="blog-featured " itemscope itemtype="http://schema.org/Blog">
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rt-expandedbottom">
            <div class="rt-bg-overlay">
                <div class="rt-container">
                    <div class="rt-flex-container">
                        <div class="rt-grid-12 rt-alpha rt-omega">
                            <div class="rt-block nomarginall nopaddingall">
                                <div class="module-surround">
                                    <div class="module-content">
                                        <div class="customnomarginall nopaddingall">
                                            <div><img src="images/divider.png" alt="divider"
                                                      style="display: block; margin-left: auto; margin-right: auto;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slicebox.js"></script>
    <script type="text/javascript">
        $(function () {
            var Page = (function () {
                var $navArrows = $('#nav-arrows').hide(),
                    $shadow = $('#shadow').hide(),
                    slicebox = $('#sb-slider').slicebox({
                        onReady: function () {
                            $navArrows.show();
                            $shadow.show();
                        },
                        orientation: 'r',
                        cuboidsRandom: true,
                        disperseFactor: 30,
                        autoplay: true
                    }),

                    init = function () {
                        initEvents();
                    },
                    initEvents = function () {
                        // add navigation events
                        $navArrows.children(':first').on('click', function () {
                            slicebox.next();
                            return false;
                        });
                        $navArrows.children(':last').on('click', function () {
                            slicebox.previous();
                            return false;
                        });
                    };
                return {init: init};
            })();
            Page.init();

        });
    </script>
<?php include 'includes/footer.php'; ?>