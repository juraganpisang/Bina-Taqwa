    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img margin-slide" style="background-image: url(<?= base_url(); ?>assets/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Berita</h2>
            <nav aria-label="breadcrumb" class="bg-white">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>beranda">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>berita">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">
                            <?php foreach ($detail_berita as $item) {

                            ?>
                                <!-- Single Blog Start -->
                                <div class="col-12">
                                    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                        <!-- Post Thumb -->
                                        <div class="blog-post-thumb mb-50">
                                            <img src="<?= base_url(); ?>assets/img/news/<?php echo $item->foto ?>" alt="">
                                        </div>
                                        <!-- Post Title -->
                                        <a href="#" class="post-title"><?php echo $item->judul ?></a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p>By <a href="#"><?php echo $item->penulis_id ?></a> | <a href="#"><?php echo $item->tanggal_update ?></a> </p>
                                        </div>
                                        <!-- Post Excerpt -->
                                        <p><?php echo $item->news ?></p>
                                        <!-- Read More btn -->
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form method='post' action="<?= base_url() ?>berita">
                                <input type='text' name='search' placeholder="Search">
                                <button type='submit' id="search" name='submit' value='Submit' style="position: unset;width: 100%;">
                                    <i class=" fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Latest Posts</h5>
                            <?php
                            foreach ($latest_news as $data) {
                            ?>
                                <div class="single-latest-blog-post d-flex mb-30">
                                    <div class="latest-blog-post-thumb">
                                        <img src="<?= base_url(); ?>assets/img/news/<?php echo $data->foto ?>" alt="">
                                    </div>
                                    <div class="latest-blog-post-content">
                                        <a href="<?php echo site_url() ?>berita/detail_berita/<?php echo $data->id_news ?>" class="post-title">
                                            <h6><?php echo $data->judul ?></h6>
                                        </a>
                                        <a href="a" class="post-date"><?php echo $item->tanggal_update ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- End Latest Post -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->