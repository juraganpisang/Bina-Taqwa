  <!-- ##### Breadcumb Area Start ##### -->
  <div class="breadcumb-area bg-img margin-slide" style="background-image: url(assets/img/bg-img/breadcumb.jpg);">
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
                                  <div class="section-heading text-center">

                                      <div class="">
                                          <?= $data_content['content']; ?>
                                      </div>

                                  </div>

                                  <!-- Contact Social Info -->
                                  <!-- <div class="contact-social-info d-flex mb-30">
                                      <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                      <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                  </div>

                                  <div class="single-contact-info d-flex">
                                      <div class="contact-icon mr-15">
                                          <i class="icon-placeholder"></i>
                                      </div>
                                      <p>4127/ 5B-C Mislane Road,<br> Gibraltar, UK</p>
                                  </div>

                                  <div class="single-contact-info d-flex">
                                      <div class="contact-icon mr-15">
                                          <i class="icon-telephone-1"></i>
                                      </div>
                                      <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                                  </div>

                                  <div class="single-contact-info d-flex">
                                      <div class="contact-icon mr-15">
                                          <i class="icon-contract"></i>
                                      </div>
                                      <p>office@yourbusiness.com</p>
                                  </div> -->
                              </div>
                          </div>
                          <!-- Contact Form Area -->
                          <div class="col-12 col-lg-7">
                              <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                  <form action="Kontak/kontak_kami" method="post">
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="nama_depan">Nama Depan</label>
                                                  <input type="text" name="nama_depan" class="form-control" id="nama_depan" placeholder="Cth: Muhammad" required>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="nama_belakang">Nama Belakang</label>
                                                  <input type="text" name="nama_belakang" class="form-control" id="nama_belakang" placeholder="Cth: Iqbal" required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="alamat">Alamat</label>
                                          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="pesan">Kritik, Saran, dan Pertanyaan</label>
                                          <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="10" placeholder="Masukkan Kritik, Saran, dan Pertanyaan" required='required'></textarea>
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