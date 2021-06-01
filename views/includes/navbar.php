<body>
<nav class="navbar navbar-dark sticky-top navbar-expand-sm flex-md-nowrap bg-dark p-0 shadow">
  <a class="navbar-brand col-lg-9 mr-0" href="#">Company name</a>
<ul class="navbar-nav pl-1">
      <li class="nav-item active text-nowrap">
        <a class="nav-link" href="<?php echo BASE_URL;?>">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo BASE_URL;?>cart">
          Panier
          <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
            (<?php echo $_SESSION["count"];?>)      
          <?php else:?>
            (0)
          <?php endif;?> 
        </a>
      </li>
      <li class="nav-item dropdown text-nowrap">
      <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION["fullname"];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       
          
          <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true):?>
           <a class="dropdown-item" href="<?php echo BASE_URL;?>dashboard">Dashboard <span class="sr-only">(current)</span></a>
          <?php endif;?> 
          <a class="dropdown-item" href="<?php echo BASE_URL;?>logout">Déconnexion</a>
          </div>
          
        <?php else:?> 
  
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Compte
        </a> 
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL;?>register">Inscription</a>
          <a class="dropdown-item" href="<?php echo BASE_URL;?>login">Connexion</a>
        </div>
       
        <?php endif;?> 
      </li>
    </ul>
</nav>