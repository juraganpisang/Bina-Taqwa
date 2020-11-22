<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img margin-slide" style="background-image: url(<?php echo base_url(); ?>assets/img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Informasi Donatur</h2>
        <nav aria-label="breadcrumb" class="bg-white">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>beranda">Home</a></li>
                <li class="breadcrumb-item">Profil</li>
                <li class="breadcrumb-item active" aria-current="page">Informasi Donatur</li>
            </ol>
        </nav>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-50 section-padding-100">
    <div class="container">
        
    <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <div class="col-12 col-md-8">
                <div class="academy-blog-posts">
                    <div class="row">

                        <!-- Single Blog Start -->
                        <div class="col-12">
                            <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">

                                <!-- HASIL DISINI -->
                                <div style="display: flow-root;">
                                    <div id="edit" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Edit">
                                        <i class="fas fa-edit fa-2x text-primary"></i> <!-- UNTUK EDIT -->
                                    </div>
                                    <div id="batal" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Batal">
                                        <i class="fas fa-times-circle fa-2x text-danger"></i> <!-- UNTUK BATAL -->
                                    </div>
                                </div>
                                <div class="mt-2 content_show">
                                    <?= $data_content['content']; ?>
                                </div>
                                <div class="mt-2 content_edit">
                                    <?= form_open_multipart('admin/do_update/' . $data_content["category"]) ?>
                                    <input type="hidden" value="<?= $data_content['id_content']; ?>" name="id_content">
                                    <textarea name="content" id="content"><?= $data_content['content']; ?></textarea>
                                    <?= form_submit('submit', 'Submit Post', 'class = "btn btn-primary mt-2"'); ?>
                                    <?= form_close(); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="academy-blog-sidebar">
                    <!-- Blog Post Widget -->
                    <div class="blog-post-search-widget mb-30">
                        <form action="#" method="post">
                            <input type="search" name="search" id="Search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    <!-- Latest Blog Posts Area -->
                    <div class="latest-blog-posts mb-30">
                        <h5>Latest Posts</h5>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex mb-30">
                            <div class="latest-blog-post-thumb">
                                <img src="<?= base_url(); ?>assets/img/blog-img/lb-1.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>New Courses for you</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex mb-30">
                            <div class="latest-blog-post-thumb">
                                <img src="<?= base_url(); ?>assets/img/blog-img/lb-2.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>A great way to start</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex mb-30">
                            <div class="latest-blog-post-thumb">
                                <img src="<?= base_url(); ?>assets/img/blog-img/lb-3.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>New Courses for you</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex">
                            <div class="latest-blog-post-thumb">
                                <img src="<?= base_url(); ?>assets/img/blog-img/lb-4.jpg" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <a href="#" class="post-title">
                                    <h6>Start your training</h6>
                                </a>
                                <a href="#" class="post-date">March 18, 2018</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->