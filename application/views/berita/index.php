    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img margin-slide" style="background-image: url(<?= base_url('assets/img/bg-img/breadcumb.jpg') ?>);">
        <div class="bradcumbContent">
            <h2>Berita</h2>
            <nav aria-label="breadcrumb" class="bg-white">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>beranda">Home</a></li>
                    <li class="breadcrumb-item">Berita</li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
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
                            <?php
                            $sno = $row + 1;
                            foreach ($result as $item) {
                                $firstnews = substr($item['news'], 0, 100);
                            ?>
                                <!-- Single Blog Start -->
                                <div class="col-12">
                                    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                        <!-- Post Thumb -->
                                        <div class="blog-post-thumb mb-50">
                                            <a href="<?= base_url(); ?>berita/detail_berita/<?php echo $item['id_news'] ?>">
                                                <img src="<?php echo base_url() ?>/assets/img/news/<?php echo $item['foto'] ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- Post Title -->
                                        <a href="<?= base_url(); ?>berita/detail_berita/<?php echo $item['id_news'] ?>" class="post-title"><?php echo $item['judul']; ?></a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p>By <?php echo $item['penulis_id'] ?> | <?php echo $item['tanggal_update'] ?> </p>
                                        </div>
                                        <!-- Post Excerpt -->
                                        <p><?php echo $firstnews ?></p>
                                        <!-- Read More btn -->
                                        <a href="<?= base_url(); ?>berita/detail_berita/<?php echo $item['id_news'] ?>" class="btn academy-btn btn-sm mt-15">Read More</a>
                                    </div>
                                </div>
                            <?php }
                            if (count($result) == 0) {
                            ?>

                                <div class="col-12">
                                    <div class="single-blog-post mb-50 wow fadeInUp text-center" data-wow-delay="300ms">
                                        <img src="<?= base_url('assets/img/news/no_data.svg') ?>" style="width: 30%;">
                                        <h5 class="mt-3">Berita Tidak Ditemukan</h5>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav aria-label="Page navigation">

                            <?= $pagination; ?>

                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <!-- Search form (start) -->
                            <form method='post' action="<?= base_url() ?>berita">
                                <input type='text' name='search' value='<?= $search ?>' placeholder="Search">
                                <?php
                                if ($search != null) {
                                ?>
                                    <button type='button' style="background-color: #eef3f6;">
                                        <a href="<?= base_url('berita/clear') ?>">
                                            <i class="fas fa-times-circle text-danger"></i>
                                        </a>
                                    </button>
                                <?php
                                }
                                ?>
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
                                        <a href="a" class="post-date"><?php echo $data->tanggal_update ?></a>
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