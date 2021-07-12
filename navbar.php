<!--Navbar-->
  <nav id="nav" class="navbar navbar-dark grey lighten-3 justify-content-between z-depth-1-bottom" style="height: 65px;">
    <a href="home.php">
      <div>
        <ul class="list-inline  py-1 dark-grey-text">
          <li class="list-inline-item aqua-gradient text-white" style="border-radius: 3px;width: 30px;padding: 3px;">
            <i style="margin-left: 5px;" class="fas fa-map fa-1x" aria-hidden="true"></i>
          </li>
          <li class="list-inline-item font-weight-bold text-uppercase">
           Welcome&nbsp; <?php echo $_SESSION['first_name'];?>
          </li>

        </ul>
      </div>
    </a>

      <div>
        <ul class="list-inline  py-1 dark-grey-text">
          <li class="list-inline-item">
             
            <a class="btn btn-sm info-color text-white" href="logout.php" style="width: 20px;height: 30px;">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>

          </li>
        </ul>
      </div>

  </nav>
  <!--/.Navbar-->    