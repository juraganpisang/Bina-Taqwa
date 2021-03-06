<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img margin-slide" style="background-image: url(<?php echo base_url(); ?>assets/img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Tentang Yayasan</h2>
        <nav aria-label="breadcrumb" class="bg-white">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>beranda">Home</a></li>
                <li class="breadcrumb-item">Profil</li>
                <li class="breadcrumb-item active" aria-current="page">Tentang Yayasan</li>
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
                                    <?= form_open_multipart('admin/do_tentang_yayasan/' . $data_content["category"]) ?>
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
                        <form method='post' action="<?= base_url() ?>admin/berita">
                            <input type='text' name='search' placeholder="Search">
                            <button type='submit' id="search" name='submit' value='Submit' style="position: unset;width: 100%;">
                                <i class=" fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Latest Blog Posts Area -->
                    <div class="latest-blog-posts mb-30">
                        <h5>Latest Posts</h5>
                        <!-- Latest Post -->
                        <?php
                        foreach ($latest_news as $data) {
                        ?>
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="<?= base_url(); ?>assets/img/news/<?php echo $data->foto ?>" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="<?php echo site_url() ?>admin/seeMoreBerita/<?php echo $data->id_news ?>" class="post-title">
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

<!-- CK EDITOR  -->

<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>