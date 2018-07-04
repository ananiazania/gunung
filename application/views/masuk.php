<?php 
        $this->load->view('header');
     ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#"><center><h1>SILAHKAN LOGIN...</h1></a></center>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <!-- <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a> -->
          </li>
        </ul>
        
      </div>
    </nav>

<div class="container">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <?php echo form_open('Login/cekLogin'); ?>
      <?php echo validation_errors(); ?>
    <div class="form-group">
     <!--  <legend>Login Ke Sistem</legend> -->
    </div>

    <div class="form-group">
      <label for="">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Anda">

    </div>

    <div class="form-group">
      <label for="">Password</label>
      <input type="Password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda">
    </div>
    <div class="form-group">
      <br>
      <button type="submit" class="btn btn-success">Log In</button>

      <a href="<?php echo site_url()?>/Login/registrasi"><button type="button" class="btn btn-warning">Registrasi</button>
      <?php form_close(); ?>
    </div>
  </div>
</div>