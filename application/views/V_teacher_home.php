<?php include "header.php" ?>
<br>

<body style="background-image: url(http://localhost/si_smk/assets/img/slider/sliderB1.jpg); background-position:center; background-attachment: fixed; background-size: 1000%; ">

    <!-- Preloader -->
    <div id="loader">
        <!-- Preloader inner -->
        <div id="loaderInner">
            <div class="spinner"> SMK </div>
        </div>
        <!-- End preloader inner -->
    </div>
    <!-- End preloader-->


    <!--Wrapper-->
    <div id="wrapper" class="margLTop  margLBottom">

        <!--Container-->
        <div class="container">
            <div class="row ">
                <!--Left content-->
                <div class="col-md-3 nopr left-content">
                    <!--Header-->
                    <?php include_once "V_teacher_leftbar.php" ?>
                    <!--End  header-->
                </div>
                <!--End left content-->

                <!--Right content-->
                <div class="col-md-9 right-content">
                    <!--About Tab-->
                    <section id="about" class="bgWhite ofsInBottom">
                        <!--About -->
                        <div class="about">
                            <!--Main title-->
                            <div class="main-title">
                                <h1>profil</h1>
                                <div class="divider">
                                    <div class="zigzag large clearfix " data-svg-drawing="yes">
                                        <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                            <path d="M1.357,12.26 10.807,2.81 20.328,12.332
	29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!--End main title-->
                            <!--Content-->
                            <div class="content">
                                <!--Block content-->
                                <div class="block-content margBSmall">
                                    <div class=" profile margBSmall">
                                        <h1>
                                            <?php foreach ($nama as $row3) { ?>
                                                <?php echo $row3->nama_guru; ?>
                                        </h1>
                                        <h3> <?php echo $row3->nip_guru; ?></h3>
                                    </div>
                                </div>
                                <!--End block content-->
                                <!--Block content-->
                                <div class="block-content">
                                    <div class="info">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="info-list clearfix">
                                                    <li><span class="inf">Nama </span> <span class="value"><?php echo $row3->nama_guru; ?></span></li>
                                                    <li><span class="inf">NIP</span> <span class="value"><?php echo $row3->nip_guru; ?></span></li>
                                                    <li><span class="inf">Alamat</span> <span class="value"> <?php echo $row3->alamat_guru; ?></span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="info-list">
                                                    <li><span class="inf">Tahun Masuk</span> <span class="value"><?php echo $row3->tahunmasuk_guru; ?></span></li>
                                                    <li><span class="inf">Phone</span> <span class="value"> <?php echo $row3->hp_guru; ?> </span></li>
                                                    <li><span class="inf">Email</span> <span class="value"><?php echo $row3->email_guru; ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--End row-->
                                    <?php } ?>
                                    </div>
                                </div>
                                <!--End block content-->
                            </div>
                            <!--End content-->

                            <!--Main title-->
                            <div class="main-title">
                                <h1>professional skills</h1>
                                <div class="divider">
                                    <div class="zigzag large clearfix " data-svg-drawing="yes">
                                        <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                            <path d="M1.357,12.26 10.807,2.81 20.328,12.332
		29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!--End main title-->

                            <!--Content-->
                            <div class="content">
                                <!--Block content-->
                                <div class="block-content margBMedium">
                                    <!--Skill design-->
                                    <div class=" skill des">
                                        <!--Row-->
                                        <div class="row ">
                                            <div class="vc">
                                                <div class="col-md-11">
                                                    <ul class="skills-list clearfix">
                                                        <li>
                                                            <h4>Photoshop</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    75%
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Illustrator</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    85%
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Indesign</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    70%
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="title des">
                                                        <span>design</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End row-->
                                    </div>
                                    <!--End skill design-->
                                </div>
                                <!--End block content-->
                                <!--Block content-->
                                <div class="block-content margBMedium">
                                    <!--Skill design-->
                                    <div class=" skill dev">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="vc">
                                                <div class="col-md-11">
                                                    <ul class="skills-list clearfix">
                                                        <li>
                                                            <h4>Html/css</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    90%
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>javascript</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    75%
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>php/mysql</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    90%
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="title dev">
                                                        <span>Coding </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End row-->
                                    </div>
                                    <!--End skill design-->
                                </div>
                                <!--End block content-->

                                <!--Block content-->
                                <div class="block-content">
                                    <!--Skill design-->
                                    <div class=" skill prs">
                                        <!--Row-->
                                        <div class="row ">
                                            <div class="vc">
                                                <div class="col-md-11">
                                                    <ul class="skills-list clearfix">
                                                        <li>
                                                            <h4>Responsible</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    85%
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Creative</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    75%
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Multitasking</h4>
                                                            <div class="progress">
                                                                <div class="percentage">
                                                                    90%
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="title prs">
                                                        <span>assets </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End row-->
                                    </div>
                                    <!--End skill design-->
                                </div>
                                <!--End block content-->
                            </div>
                            <!--End content-->
                            <!--Main title-->
                        </div>
                        <!--End content-->

                        <!--Button-->
                        <div class="button ofsInTop tCenter">

                            <div class="divider">
                                <div class="zigzag large clearfix " data-svg-drawing="yes">
                                    <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                        <path d="M1.357,12.26 10.807,2.81 20.328,12.332
				29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;" />
                                    </svg>
                                </div>
                            </div>


                            <!--Row-->
                            <div class="row ">
                                <div class="col-md-12">
                                    <a class="but opc-1 ico" href="#">Download my cv</a>
                                    <a class="but opc-2 ico" href="#">Print my resume</a>

                                </div>
                            </div>
                            <!--End row-->
                        </div>
                        <!--End button-->
                </div>
                <!--End contact-->
                </section>
                <!--End contact tab-->
            </div>
            <!--End right content-->
        </div>
        <!--End  row-->
    </div>
    <!--End  container-->
    </div>
    <!--End wrapper-->

    <!--Javascript-->
    <script src="<?php echo base_url('assets1/') ?>js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/jquery-migrate-1.2.1.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/owl.carousel.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/jquery.easytabs.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/modernizr.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/placeholders.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets1/') ?>js/script.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


    <script>
        (function($) {
            "use strict";

            $(document).ready(function() {

                $('#wrapper').easytabs({
                    animate: true,
                    updateHash: false,
                    transitionIn: 'fadeIn',
                    transitionOut: 'fadeOut',
                    animationSpeed: 100,
                    tabActiveClass: 'active',
                    tabs: ' #main-nav.tabbed > ul > li ',
                    transitionInEasing: 'linear',
                    transitionOutEasing: 'linear'

                });


                //---------------------------------- Google map location -----------------------------------------//


                $('#wrapper').bind('easytabs:after', function() {

                    var styles = [{
                            stylers: [{
                                    saturation: -100
                                }

                            ]
                        }, {
                            featureType: 'road',
                            elementType: 'geometry',
                            stylers: [{
                                    hue: "#74b7b0"
                                },
                                {
                                    visibility: 'simplified'
                                }
                            ]
                        }, {
                            featureType: 'road',
                            elementType: 'labels',
                            stylers: [{
                                visibility: 'on'
                            }]
                        }],

                        lat = -33.867487,
                        lng = 151.20699,





                        customMap = new google.maps.StyledMapType(styles, {
                            name: 'Styled Map'
                        }),


                        mapOptions = {
                            zoom: 14,
                            scrollwheel: false,
                            disableDefaultUI: true,
                            center: new google.maps.LatLng(lat, lng),
                            mapTypeControlOptions: {
                                mapTypeIds: [google.maps.MapTypeId.ROADMAP]
                            }
                        },
                        map = new google.maps.Map(document.getElementById('map'), mapOptions),
                        myLatlng = new google.maps.LatLng(lat, lng),




                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            icon: {
                                url: 'img/marker.png',
                                scaledSize: new google.maps.Size(26, 42)
                            }
                        });





                    map.mapTypes.set('map_style', customMap);
                    map.setMapTypeId('map_style');








                });









                //---------------------------------- End google map location -----------------------------------------//


            });

        })(jQuery);
    </script>


    <!-- Google analytics -->


    <!-- End google analytics -->