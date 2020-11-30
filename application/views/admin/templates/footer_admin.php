   </section>
   <!-- ##### Hero Area End ##### -->

   <!-- Modal -->
   <div class="modal fade" id="editHeader" tabindex="-1" role="dialog" aria-labelledby="editHeaderLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="editHeaderLabel">Edit Header 1</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <!-- HASIL DISINI -->
                   <div style="display: flow-root;">
                       <div id="edit-header" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Edit">
                           <i class="fas fa-edit fa-2x text-primary"></i> <!-- UNTUK EDIT -->
                       </div>
                       <div id="batal-header" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Batal">
                           <i class="fas fa-times-circle fa-2x text-danger"></i> <!-- UNTUK BATAL -->
                       </div>
                   </div>
                   <div class="mt-2 content_show_header">
                       <?= $data_header_1['content']; ?>
                   </div>
                   <div class="mt-2 content_edit_header">
                       <?= form_open_multipart('admin/do_update/' . $data_content["category"]) ?>
                       <input type="hidden" value="<?= $data_header_1['id_content']; ?>" name="id_content">
                       <textarea name="content" id="content-header"><?= $data_header_1['content']; ?></textarea>
                       <?= form_submit('submit', 'Submit Post', 'class = "btn btn-primary mt-2"'); ?>
                       <?= form_close(); ?>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- ##### Footer Area Start ##### -->
   <footer class="footer-area">
       <div class="bottom-footer-area">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <!-- <p> -->
                       <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       <!-- Copyright &copy;<script>
                               document.write(new Date().getFullYear());
                           </script> Yayasan Bina Taqwa 2020. All Rights Reserved. -->
                       <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       <!-- </p> -->
                       <div class="col-12">
                           <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">

                               <!-- HASIL DISINI -->
                               <div style="display: flow-root;">
                                   <div id="edit-footer" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Edit">
                                       <i class="fas fa-edit fa-2x text-primary"></i> <!-- UNTUK EDIT -->
                                   </div>
                                   <div id="batal-footer" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Batal">
                                       <i class="fas fa-times-circle fa-2x text-danger"></i> <!-- UNTUK BATAL -->
                                   </div>
                               </div>
                               <div class="mt-2 content_show_footer">
                                   <?= $data_content_footer['content']; ?>
                               </div>
                               <div class="mt-2 content_edit_footer">
                                   <?= form_open_multipart('admin/do_update/' . $data_content['category']) ?>
                                   <input type="hidden" value="<?= $data_content_footer['id_content']; ?>" name="id_content">
                                   <textarea name="content" id="content-footer"><?= $data_content_footer['content']; ?></textarea>
                                   <?= form_submit('submit', 'Submit Post', 'class = "btn btn-primary mt-2"'); ?>
                                   <?= form_close(); ?>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!-- ##### Footer Area Start ##### -->

   <!-- jQuery-2.2.4 js -->
   <script src="<?php echo base_url() ?>assets/js/jquery/jquery-2.2.4.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   <script>
       $(document).ready(function() {
           $('#content').summernote(); //text editor main content

           $("#batal").hide();
           $(".content_edit").hide();

           $("#edit").click(function() {
               $("#batal").show();
               $(".content_show").hide();
               $(".content_edit").slideDown();
               $("#edit").hide();
           });

           $("#batal").click(function() {
               $("#edit").show();
               $(".content_edit").hide();
               $(".content_show").slideDown();
               $("#batal").hide();
           });

           $('#content-footer').summernote(); //text editor footer

           $("#batal-footer").hide();
           $(".content_edit_footer").hide();

           $("#edit-footer").click(function() {
               $("#batal-footer").show();
               $(".content_show_footer").hide();
               $(".content_edit_footer").slideDown();
               $("#edit-footer").hide();
           });

           $("#batal-footer").click(function() {
               $("#edit-footer").show();
               $(".content_edit_footer").hide();
               $(".content_show_footer").slideDown();
               $("#batal-footer").hide();
           });

           $('#content-header').summernote(); //text editor header

           $("#batal-header").hide();
           $(".content_edit_header").hide();

           $("#edit-header").click(function() {
               $("#batal-header").show();
               $(".content_show_header").hide();
               $(".content_edit_header").slideDown();
               $("#edit-header").hide();
           });

           $("#batal-header").click(function() {
               $("#edit-header").show();
               $(".content_edit_header").hide();
               $(".content_show_header").slideDown();
               $("#batal-header").hide();
           });

           $('#myModal').on('shown.bs.modal', function() {
               $('#myInput').trigger('focus')
           })

       });
   </script>

   <!-- ##### All Javascript Script ##### -->
   <!-- Popper js -->
   <script src="<?php echo base_url() ?>assets/js/bootstrap/popper.min.js"></script>
   <!-- Bootstrap js -->
   <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
   <!-- All Plugins js -->
   <script src="<?php echo base_url() ?>assets/js/plugins/plugins.js"></script>
   <!-- Active js -->
   <script src="<?php echo base_url() ?>assets/js/active.js"></script>
   <!-- Font Awesome ICON -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
   </body>

   </html>