<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partials/header') ?> 

<?php $this->load->view('partials/sidenav') ?>
   <!-- banner -->
   <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Welcome <br></span>To Our Lelangikan</h1>
                           <figure><img src="images/ikan_tuna.png" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                        <h1> <span class="blu">Welcome <br></span>To Our Lelangikan</h1>
                           <figure><img src="images/ikancupang.png" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                        <h1> <span class="blu">Welcome <br></span>To Our Lelangikan</h1>
                           <figure><img src="images/ikan_tuna.png" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our Lelangikan</h2>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="container-fluid">
            <div class="row">
            <?php foreach ($v_dashboard as $b) { ?>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box"> 
                     <figure><img style="width:70%;height:100%;" src="<?= base_url('upload/barang/'. $b->gambar) ?>" alt="#"/></figure>
                     <h3><span class="blu">IDR <?= number_format ($b->harga_awal, 2) ?></span></h3>
                     <p><?= $b->nama_barang?></p>
                     <a href="<?= site_url('frontend/detail_lelang')?>">Detail</a>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      
    <?php $this->load->view('partials/footer') ?>
</html>