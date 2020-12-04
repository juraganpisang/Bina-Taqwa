 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb-area bg-img margin-slide" style="background-image: url(../assets/img/bg-img/breadcumb.jpg);">
     <div class="bradcumbContent">
         <h2>Berita</h2>
     </div>
 </div>

 <!-- ##### Breadcumb Area End ##### -->

 <!-- ##### Contact Area Start ##### -->
 <!-- <section class="contact-area margin-kontak-area-1"> -->
 <div class="blog-area mt-50 section-padding-100">
     <div class="container">

         <?= $this->session->flashdata('message'); ?>

         <div class="row">
             <div class="col-12">
                 <div class="academy-blog-posts">
                     <div class="row ">
                         <!-- Contact Form Area -->
                         <div class="col-12 col-lg-12">
                             <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <?php echo form_open_multipart('admin/simpanBerita');?>
                                 <div class="form-group">
                                     <label for="nama_depan">Judul Berita : </label>
                                     <input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" required>
                                 </div>
                                 <div class="form-group">
                                     <label for="nama_depan">Isi Berita : </label>
                                     <textarea pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="isi_berita" class="form-control" id="content" required></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="nama_depan">Upload Foto : </label>
                                     <input type="file" name="foto_berita" class="form-control" required>
                                 </div>
                                 <button type="submit" class="btn btn-primary mt-1" >Submit</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                                <h3>Berita Kegiatan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <!-- List Berita -->
                    <?php 
                        foreach($list_berita as $item){
                        $firstnews=substr($item->news, 0, 00);
                    ?>
                    <div class="col-12 col-lg-6">
                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div>
                            </div>
                            <div class="popular-course-content">
                                <h5><?php echo $item->judul?>&nbsp;<a class="btn btn-primary" id="edit" href="<?php echo site_url()?>admin/editBerita/<?php echo $item->id_news?>"> <i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-danger" href="<?php echo site_url()?>admin/hapusBerita/<?php echo $item->id_news?>"> <i class="fas fa-trash"></i></a></h5>
                                <span>By <?php echo $item->penulis_id?>, <?php echo $item->tanggal_update?></span>
                                <div class="course-ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <p><?php echo $firstnews?></p>
                                <a href="<?php echo site_url()?>admin/seeMoreBerita/<?php echo $item->id_news?>" class="btn academy-btn btn-sm">See More</a>
                            </div>
                            <div class="popular-course-thumb bg-img" style="background-image: url(<?php echo base_url()?>/assets/img/news/<?php echo $item->foto ?>)"></div>
                        </div>
                    </div>
                        <?php }?>

                    <!-- End List Berita -->
                 </div>
             </div>
         </div>
     </div>
 </div>