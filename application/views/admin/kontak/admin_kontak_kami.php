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
                                 <?= form_open_multipart('admin/do_update/' . $data_content['category']) ?>
                                 <div class="form-group">
                                     <input type="hidden" value="<?= $data_content_email['id_content']; ?>" name="id_content">
                                     <div class="alert alert-info">
                                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ion-ios-close-empty"></i></button>
                                         <i class="fa fa-lightbulb"></i>&ensp;<span style="font-size: 11px; text-transform: uppercase">Email ini akan menerima pesan dari user untuk di konfirmasi lebih lanjut</span>
                                     </div>
                                     <label for="nama_depan">Your Email : </label>
                                     <?= $data_content_email['content']; ?>
                                     <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="content" class="form-control" id="content" placeholder="Edit Email" required>
                                 </div>
                                 <div>
                                     <?= form_submit('submit', 'Submit', 'class = "btn btn-primary mt-1"', 'style = "background-color: #000000"'); ?>
                                 </div>
                                 <?= form_close(); ?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>