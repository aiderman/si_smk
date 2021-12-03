<?php include_once "header.php"; ?>
<!-- Background Area Start -->
<section id="slider-container" class="slider-area">
    <div class="slider-owl owl-theme owl-carousel">
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(<?php echo base_url('assets/') ?>img/slider/sliderB1.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-offset-left-5">
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>SMK MARITIM POLARIS </h3>
                                    <h2>BITUNG </h2>
                                    <p>Yayasan Pendidikan Katolik Keuskupan Manado</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(<?php echo base_url('assets/') ?>img/slider/sliderB2.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-offset-left-5">
                            <div class="slide-content-wrapper text-start">
                                <div class="slide-content">
                                    <h3>SMK MARITIM POLARIS </h3>
                                    <h2>BITUNG </h2>
                                    <p>Yayasan Pendidikan Katolik Keuskupan Manado</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(<?php echo base_url('assets/') ?>img/slider/sliderB3.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-offset-left-5">
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>SMK MARITIM POLARIS </h3>
                                    <h2>BITUNG </h2>
                                    <p>Yayasan Pendidikan Katolik Keuskupan Manado</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
    </div>
</section>
<!-- Background Area End -->
<!-- Notice Start -->
<section class="notice-area pt-15 pb-15">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="notice-left">
                    <h3><strong>pengumuman</strong></h3>
                    <div class="single-notice-left mb-25 pb-25">
                        <?php foreach ($p as $row) { ?>

                            <h4><?php echo $row->waktu ?></h4>

                            <p><?php echo $row->pengumuman ?> </p>
                            <br>
                        <?php  } ?>
                    </div>

                </div>

            </div>
        </div>
</section>
<!-- Notice End -->

<!-- Courses Area Start -->
<div class="courses-area pt-40 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">

                    <h2>DAFTAR KEGIATAN SEKOLAH </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($kegiatan as $row) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="#"><img src="<?php echo base_url('assets/') ?>img/course/course1b.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html"><?php echo $row->nama_kegiatan; ?></a></h3>
                            <p><?php echo $row->penjelasan; ?></p>
                            <p>KEIGATAN AKAN DIADAKAN PADA <?php echo $row->hari; ?></p>


                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<br>
<br>
<!-- Courses Area End -->

<!-- Testimonial Area End -->


<?php include_once "footer.php"; ?>