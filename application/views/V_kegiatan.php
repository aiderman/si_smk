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
                                    <h3>KEGIATAN YANG ADA DI SMK MARITIM POLARIS </h3>
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
                                    <h3>KEGIATAN YANG ADA DI SMK MARITIM POLARIS </h3>
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
                                    <h3>KEGIATAN YANG ADA DI SMK MARITIM POLARIS </h3>
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

<!-- Notice End -->

<!-- Courses Area Start -->
<div class="courses-area pt-150 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <!-- <img src=" <?= base_url('assets/') ?>img/icon/section1.png" alt="section-title"> -->
                    <h2>DAFTAR KEGIATAN SEKOLAH </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($kegiatan as $row) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.html"><img src="<?php echo base_url('assets/') ?>img/course/course1A.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html"><?php echo $row->nama_kegiatan; ?></a></h3>
                            <p><?php echo $row->penjelasan; ?></p>
                            <p>KEIGATAN AKAN DIADAKAN PADA <?php echo $row->hari; ?></p>


                            <!-- <a class="default-btn" href=<?php echo base_url('C_master/kegiatan') ?>>lihat detil</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Courses Area End -->

<!-- Testimonial Area Start -->
<div class="testimonial-area pt-110 pb-105 text-center">
    <div class="container">
        <div class="row">
            <div class="testimonial-owl owl-theme owl-carousel">
                <div class="col-lg-8 offset-lg-2">
                    <div class="single-testimonial">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="<?= base_url('assets/') ?>img/testimonial/testimonialA1.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                                <h4>David Morgan</h4>
                                <h5>Student, CSE</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->


<?php include_once "footer.php"; ?>