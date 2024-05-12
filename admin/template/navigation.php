<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="home"></span>
              Home<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://<?php echo $_SERVER ['HTTP_HOST'];?>/admin/categories/liste.php">
              <span data-feather="file"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://<?php echo $_SERVER ['HTTP_HOST'];?>/admin/produit/liste.php">
              <span data-feather="shopping-cart"></span>
              Produits
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://<?php echo $_SERVER ['HTTP_HOST'];?>/admin/visiteurs/liste.php">
              <span data-feather="users"></span>
              Utilisateurs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://<?php echo $_SERVER ['HTTP_HOST'];?>/admin/profile.php">
              <span data-feather="layers"></span>
              Profile
            </a>
          </li>
        </ul>

      </div>
    </nav>