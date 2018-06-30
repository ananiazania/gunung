<?php 
        $this->load->view('header');
     ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#"><h1>Halo Selamat Datang</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
           <a class="nav-link" href="<?php site_url()?>Sukses/">Pegawai<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php site_url()?>Jabatan/">Jabatan<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php site_url()?>Anak/">Anak<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        
      </div>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <div class="container">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1> Halaman Jabatan </h1><br>
          <h2> Selamat Datang : </h2> <h1> <?php echo $username?></h1>
        </div>
        <br><br>
        <div align="left"><a href="<?php echo site_url()?>/login/logout"><button type="button" class="btn btn-primary"><h2>Log Out</h2></button>

          
        </div>
      </div>
    
    <?php 
        $this->load->view('footer');
     ?>



<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Data Pegawai</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <body>
      
    </body> -->