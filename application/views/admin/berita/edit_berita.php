 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb-area bg-img margin-slide" style="background-image: url(<?php echo base_url()?>/assets/img/bg-img/breadcumb.jpg);">
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
                                <?php 
                                    foreach($edit_berita as $item){
                                ?>
                                <?php echo form_open_multipart('admin/doEditBerita/'.$item->id_news);?>
                                 <div class="form-group">
                                     <label for="nama_depan">Judul Berita : </label>
                                     <input type="text" value="<?php echo $item->judul?>" name="judul_berita" class="form-control" placeholder="Judul Berita" required>
                                     <input type="hidden" value="<?php echo $item->tanggal_publikasi?>" name="tanggal_publikasi" class="form-control" placeholder="Judul Berita" required>
                                 </div>
                                 <div class="form-group">
                                     <label for="nama_depan">Isi Berita : </label>
                                     <textarea pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="isi_berita" class="form-control" id="content" required><?php echo $item->news?></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="nama_depan">Upload Foto : </label>
                                     <input type="file" name="foto_berita" class="form-control" required>
                                 </div>
                                 <button type="submit" class="btn btn-primary mt-1" >Submit</button>
                                 </form>
                                    <?php }?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>