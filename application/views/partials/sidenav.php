 <!-- loader  -->
 <div class="loader_bg">
        
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         
         <div class="header">
            <div class="container-fluid">
               <div class="row" >
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section " >
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="<?= base_url('images/bg-logo.png"'); ?>" alt="#"  /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="col-4">
            <form method="post" action="<?= site_url('page/cari') ?>">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Lelangikan" aria-label="Cari Lelangikan" id="cari" name="cari" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        <input type="submit" class="btn bg-info" id="search" value="Cari">
                    </div>
                </div>
            </form>
        </div>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="<?= site_url('') ?>">Home</a>
                              </li>
                              <?php if ($activeUser) : ?>
                                 <li class="nav-item">
                                 <a class="nav-link" href="<?= site_url('page/penawaran') ?>">Penawaran</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= site_url('page/lelang') ?>">Lelang</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= site_url('page/edit') ?>">Hi,<?= $activeUser->nama; ?></a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= site_url('page/change') ?>">Change</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= site_url('page/logout') ?>">Logout</a>
                              </li>
                    <?php endif ?>
                    <?php if (!$activeUser) : ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= site_url('page/login') ?>">Sign In</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?= site_url('page/register') ?>">Register</a>
                              </li>
                              <?php endif ?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->