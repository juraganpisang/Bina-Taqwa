<div class="hero-slides owl-carousel margin-slide">

    <!-- Single Hero Slide -->
    <div class="single-hero-slide bg-img" style="background-image: url(assets/img/slider1.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-slides-content">
                        <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                        <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online University</h2>
                        <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-hero-slide bg-img" style="background-image: url(assets/img/slider2.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-slides-content">
                        <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                        <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online University</h2>
                        <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Hero Slide -->
    <div class="single-hero-slide bg-img" style="background-image: url(assets/img/slider3.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-slides-content">
                        <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                        <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online University</h2>
                        <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <a href="<?= base_url('profil/visi_misi') ?>">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="fa fa-calendar-week fa-2x mr-2" style="color:white;"></i>
                                    <h5>Visi dan Misi</h5>
                                </div>
                            </a>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <a href="<?= base_url('program/manasik_haji') ?>">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="fa fa-suitcase fa-2x mr-2" style="color:white;"></i>
                                    <h5>Program</h5>
                                </div>
                            </a>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <a href="<?= base_url('kontak') ?>">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="fa fa-address-card fa-2x mr-2" style="color:white;"></i>
                                    <h5>Kontak</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->

<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3>Berita Kegiatan</h3>
                </div>
            </div>
        </div>
        <div class="row">

        <?php 
            foreach($popular_post as $item){
            $firstnews=substr($item->news, 0, 100);
        ?>
        <div class="col-12 col-lg-6">
            <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="popular-course-content">
                    <h5><?php echo $item->judul?></h5>
                    <span><?php echo $item->penulis_id?>, <?php echo $item->tanggal_update?></span>
                    <div class="course-ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p><?php echo $firstnews?></p>
                    <a href="<?php echo site_url()?>berita/detail_berita/<?php echo $item->id_news?>" class="btn academy-btn btn-sm">See More</a>
                </div>
                <div class="popular-course-thumb bg-img" style="background-image: url(<?php echo base_url()?>/assets/img/news/<?php echo $item->foto ?>)"></div>
            </div>
        </div>
            <?php }?>

        <!-- End List Berita -->
        </div>
    </div>
</div>
<!-- ##### Top Popular Courses Area End ##### -->


<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3>Lokasi</h3>
                    <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1APQQ3O49xunXSvWyneWXX4lg-_jxFJLN" width="640" height="480"></iframe>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</div>
<!-- ##### Top Popular Courses Area End ##### -->