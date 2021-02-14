<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span class="">Reviews</span></a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mt-2">
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>home.htm">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>community.htm">Community</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>about.htm">About</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>services.htm">Services</a>
          </li>    
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>contact.htm">Contact</a>
          </li>
          
          <?php if($is_login === TRUE){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>logout.htm">Logout</a>
          </li>
        <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>login.htm">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>register.htm">Register</a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="<?=$base_url;?>admin/">Admin</a>
          </li>
        </ul>
        <!-- Search Form -->
      <!--   <form action="#" class="form-inline position-relative my-2 my-lg-0">
          <input class="form-control search" type="search" placeholder="Search here..." aria-label="Search" required="">
          <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form> -->
      </div>
    </div>
  </nav>
</section>