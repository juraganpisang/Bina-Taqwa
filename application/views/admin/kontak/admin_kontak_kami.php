 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb-area bg-img margin-slide" style="background-image: url(../assets/img/bg-img/breadcumb.jpg);">
     <div class="bradcumbContent">
         <h2>Kontak Kami</h2>
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
                         <!-- Contact Information -->
                         <div class="col-12 col-lg-5">
                             <div class="contact-information wow fadeInUp" data-wow-delay="400ms">

                                 <!-- Single Blog Start -->

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
                         <!-- Contact Form Area -->
                         <div class="col-12 col-lg-7">
                             <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                 <form action="#" method="post">
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label for="nama_depan">Nama Depan</label>
                                                 <input type="text" name="nama_depan" class="form-control" id="nama_depan" placeholder="Cth: Muhammad">
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label for="nama_belakang">Nama Belakang</label>
                                                 <input type="text" name="nama_belakang" class="form-control" id="nama_belakang" placeholder="Cth: Iqbal">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="alamat">Alamat</label>
                                         <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                                     </div>
                                     <div class="form-group">
                                         <label for="kritik">Kritik, Saran, dan Pertanyaan</label>
                                         <textarea class="form-control" name="kritik" id="kritik" cols="30" rows="10" placeholder="Masukkan Kritik, Saran, dan Pertanyaan"></textarea>
                                         <!-- <input type="text" name="kritik" class="form-control" id="kritik" placeholder="Masukkan Alamat"> -->
                                     </div>
                                     <div class="text-center">
                                         <button class="btn academy-btn mt-30" type="submit">Kontak Kami</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>