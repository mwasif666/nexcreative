<footer class="" id="contact">
    <div class="container pd-40">
        <div class="row pd-b-80">
            <div class="col-xl-3 col-lg-3">
                <div class="f-content">
                    <a href="/nexcreative"><img src="assets/images/3d-logo.png" draggable="false" width="80%" class="img-fluid f-logo" alt=""></a>
                    <p>NEX Creative Studio provides meaningful animated videos that engage the desire audience to your brand. A highly creative team of professionals produces various animated videos and content according to your needs to increase your traffic and revenue.</p>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="link text-center">
                    <h4 class="fs_22 color_2     pd-b-0 mg-b-0 fw_500 pos-rel">SERVICES</h4>
                    <ul class="p-0 li-none fs_16 mg-b-0 mg-t-10">
                        <a href="#services">
                            <li>MOTION GRAPHICS</li>
                        </a>
                        <a href="#choose">
                            <li>PROMOTIONAL VIDEOS</li>
                        </a>
                        <a href="#disciplines">
                            <li>2D VIDEOS</li>
                        </a>
                        <a href="#faqs">
                            <li>3D VIDEOS</li>
                        </a>
                        <a href="#contact">
                            <li>WHITEBOARD ANIMATION</li>
                        </a>
                        <a href="privacy.php">
                            <li>PREIMIUM VOICEOVER</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="link text-center">
                    <h4 class="fs_22 color_2     pd-b-0 mg-b-0 fw_500 pos-rel">ABOUT US</h4>
                    <ul class="p-0 li-none fs_16 mg-b-0 mg-t-10">
                        <a href="#services">
                            <li>OUR VISION</li>
                        </a>
                        <a href="#choose">
                            <li>OUR MISSION</li>
                        </a>
                        <a href="#disciplines">
                            <li>PRIVACY POLICY</li>
                        </a>
                        <a href="#faqs">
                            <li>TERMS OF USE</li>
                        </a>
                        <a href="#contact">
                            <li>RETURN POLICY</li>
                        </a>
                        <a href="privacy.php">
                            <li>PRICING</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3">
                <div class="link">

                    <h4 class="fs_30 fw_600 color_2 ">DISCLAIMER
                    </h4>
                    <p style="color:#676767;margin-top: 20px;font-size: 16px;font-weight: 600;">NEX Studio has no influence over any third-party material displayed and represented on this website.</p>
                    <h4 class="fs_30 fw_600 color_2">FOLLOW US</h4>

                    <div class="follow-icons">
                        <a href="javascript:;"><img src="assets/images/facebook-icon.png" draggable="false" width="80%" class="img-fluid f-logo" alt=""></a>

                        <a href="javascript:;"><img src="assets/images/instagram-icon.png" draggable="false" width="80%" class="img-fluid f-logo" alt=""></a>
                    </div>
                </div>
                <div class="trustpilot-widget">
                    <style>
                        .trust-pilot-btn {
                            width: fit-content;
                            border: none;
                            padding: 10px 0;
                            display: flex;
                            align-items: end;
                            background: transparent;
                            margin-top: 20px;
                            margin-bottom: 20px;
                            border-radius: 0px;
                        }

                        .trust-pilot-btn h6 {
                            font-size: 14px;
                            color: #000;
                            display: inline-block;
                            font-weight: 400;
                            margin: 0;
                            text-transform: none;
                            line-height: 1;
                        }
                    </style>

                    <a href="https://www.trustpilot.com/review/nexcreativestudio.com" target="_blank">
                        <button class="trust-pilot-btn">
                            <h6>See our reviews on</h6> <span><img src="assets/images/trustpilot-logo.png" width="80px" alt=""></span>
                        </button>
                    </a>


                </div>

            </div>
        </div>
    </div>
    <div id="button">

    </div>
    <div class="container">

        <div class="Copyright bg-color_transparent pd-20">
            <div>
            <p>
                Copyright © 2023 Nex Creative Studio, All Right Reserved.
            </p>
            <ul class="footer-nav2 ">
                <li><a href="terms.php" class="fs_16 clr_white fw_600">Terms &amp; Conditions</a> </li>
                <li><a href="privacy.php" class="fs_16 clr_white fw_600">Privacy policy</a> </li>
            </ul>
        </div>
    </div>
    </div>
</footer>


<!-- Off-Canvas View Only -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/owlcarousel.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script>
    function onSubmit(token) {
        document.getElementById("form2").submit();
    }

    function onSubmit2(token) {
        document.getElementById("header_form").submit();
    }
</script>
<script>
    $('document').ready(function() {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>
<script>
    // Owlcarousel
    $(document).ready(function() {
        $(".gallery").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
<script>
    // Owlcarousel
    $(document).ready(function() {
        $(".testi-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
<script>
    // Owlcarousel
    //    $(document).ready(function(){
    //    $(".owl-carousel").owlCarousel({
    //    loop:true,
    //    margin:10,
    //    nav:true,
    //    autoplay:false   ,
    //    autoplayTimeout:5000,
    //    autoplayHoverPause:true,
    //    center: true,
    //    navText: [
    //     "<i class='fa fa-angle-left'></i>",
    //     "<i class='fa fa-angle-right'></i>"
    //    ],
    //    responsive:{
    //        0:{
    //            items:1
    //        },
    //        600:{
    //            items:1
    //        },
    //        1000:{
    //            items:2
    //        }
    //    }
    //    });
    //    });
    $(".owl-carousel").length && $(".owl-carousel").owlCarousel({
        loop: !0,
        items: 2,
        margin: 30,
        nav: !1,
        lazyLoad: !0,
        smartSpeed: 1e3,
        dots: !1,
        autoplay: false,
        navText: ["<img src='assets/images/chevron-left-solid.svg' draggable='fales' width='30px' class='img-fluid'/>", "<img src='assets/images/chevron-right-solid.svg' draggable='fales' width='30px' class='img-fluid'/>"],
        responsive: {
            0: {
                nav: !0,
                dots: !0,
                items: 1
            },
            767: {
                nav: !0,
                dots: !0,
                items: 2
            },
            1024: {
                nav: !0,
                items: 2
            }
        }
    })
</script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            $(window).scrollTop() > 120 ?
                $(".menu").addClass("sticky") :
                ($(".menu").removeClass("sticky"), $(".menu").addClass(""));
        });
    });
    jQuery(function(e) {
        "use strict";
        var t, n, a;
        (t = e(".menu-toggle")),
        (n = e("#offcanvas-menu")),
        (a = e(".close-menu")),
        t.on("click", function() {
                return n.addClass("toggled"), !1;
            }),
            a.on("click", function() {
                return n.removeClass("toggled"), !1;
            });
    });
</script>
<!-- <script>
let questions = document.querySelectorAll(".faq__question");
questions.forEach((question) => {
  question.addEventListener("click", function () {
    question.classList.toggle("faq__question_active");
    const nextElement = question.nextElementSibling;
    nextElement.classList.toggle("faq__panel_active");
  });
});

</script> -->
<script>
    $('.accordion__header').click(function(e) {
        e.preventDefault();
        var currentIsActive = $(this).hasClass('is-active');
        $(this).parent('.accordion').find('> *').removeClass('is-active');
        if (currentIsActive != 1) {
            $(this).addClass('is-active');
            $(this).next('.accordion__body').addClass('is-active');
        }
    });
</script>
<script>
    $(".     li > a").click(function() {
        if ($('#offcanvas-menu').hasClass('toggled')) {
            $('#offcanvas-menu').removeClass('toggled')
        }
    });
</script>
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#video1')[0].play();
    })
    $('#myModal').on('hidden.bs.modal', function() {
        $('#video1')[0].pause();
    })
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>