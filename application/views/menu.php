<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand">Kodachi Kemayoran</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <?php echo anchor("Produk","Produk",array("class" => "nav-link")); ?>
        </li>
        <li class="nav-item">
            <?php echo anchor("Pelanggan","Pelanggan",array("class" => "nav-link")); ?>
        </li>
         <li class="nav-item">
            <?php echo anchor("pelanggan/show_list_pelanggan"," Data Pelanggan",array("class" => "nav-link")); ?>
        </li>
        <li class="nav-item">
            <?php echo anchor("produk/show_list_produk"," Data Produk",array("class" => "nav-link")); ?>
        </li>
      </ul>

    </div>
  </div>
</nav>