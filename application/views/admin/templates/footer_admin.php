   </section>
   <!-- ##### Hero Area End ##### -->

   <!-- ##### Footer Area Start ##### -->
   <footer class="footer-area">
       <div class="bottom-footer-area">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <p>
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           Copyright &copy;<script>
                               document.write(new Date().getFullYear());
                           </script> Yayasan Bina Taqwa 2020. All Rights Reserved.
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       </p>
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
           $('#content').summernote(); //text editor e
           
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