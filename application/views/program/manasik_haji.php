<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img margin-slide" style="background-image: url(<?php echo base_url(); ?>assets/img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Manasik Haji</h2>
        <nav aria-label="breadcrumb" class="bg-white">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>beranda">Home</a></li>
                <li class="breadcrumb-item">Program</li>
                <li class="breadcrumb-item active" aria-current="page">Manasik Haji</li>
            </ol>
        </nav>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-50 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="academy-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-12">
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                <div class="">
                                    <?= $data_content['content']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3>Post Terkait</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="academy-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-12" style="text-align:center;">
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Post Thumb -->
                                <div class="blog-post-thumb mb-50">
                                    <img src="<?php echo base_url(); ?>assets/img/manasik-haji.jpg" alt="">
                                </div>
                                <!-- Post Title -->
                                <a href="<?= base_url(); ?>manasik_haji" class="post-title">Manasik Haji</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="academy-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-12" style="text-align:center;">
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Post Thumb -->
                                <div class="blog-post-thumb mb-50">
                                    <img src="<?php echo base_url(); ?>assets/img/slider1.png" alt="">
                                </div>
                                <!-- Post Title -->
                                <a href="<?= base_url(); ?>kegiatan_dakwah" class="post-title">Kegiatan Dakwah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->