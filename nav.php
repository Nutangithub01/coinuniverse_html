<?php $pagename = basename($_SERVER['PHP_SELF']); ?> 

<nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <a class="navbar-brand logoicon" href="index.php">
          <img src="images/logo.png" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="add_coin.php">Add Your Coin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="store_directrory.php">Store Directory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="supported_coins.php">Supported Coins</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="merchant_tools.php">Marchant Tools</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <div class="dropdown mt-2" style="display: none;">
              <button class="btn btnLung dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/svg/l-1.svg" class="img-fluid">
              </button>
              <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-1.svg" class="img-fluid"> <sapn>English</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-2.svg" class="img-fluid"> <sapn>Español</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-3.svg" class="img-fluid"> <sapn>한국어</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-4.svg" class="img-fluid"> <sapn>Deutsch</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-5.svg" class="img-fluid"> <sapn>Português</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-6.svg" class="img-fluid"> <sapn>Русский</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-7.svg" class="img-fluid"> <sapn>Hindi</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-8.svg" class="img-fluid"> <sapn>Türkçe</sapn>
                </a></li>
                <li><a class="dropdown-item" href="#">
                  <img src="images/svg/l-9.svg" class="img-fluid"> <sapn>中文</sapn>
                </a></li>
                
              </ul> -->
            </div>
            <form class="ms-2">
              <button class="btn btn-login">Login</button>
              <button class="btn btn-SignUp">SignUp</button>
            </form>
          </ul>
        </div>
      </div>
    </nav>