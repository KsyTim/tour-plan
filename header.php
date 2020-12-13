<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/aos.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="header">
      <div class="header-top header-top--mobile-fixed">
        <div class="wrapper">
          <div class="navbar-top">
            <a href="https://timoshenkokseniia.ru/tour-plan/" class="navbar-top-item logo">
              <img
                src="img/hr-logo.svg"
                alt="Logo: Best Tour Plan - Hotel Booking"
                class="logo-img"
              />
            </a>

            <form action="#" name="search-form" class="navbar-top-item search-form">
              <input
                type="search"
                placeholder="Search Location"
                name="search-input"
                id="search-form-input"
                autofocus
              />  
              <button class="button search-icon">
                <img src="img/search.svg" alt="Search: Enter location" />
              </button>
            </form>

            <div class="navbar-top-item user">
              <a href="#" class="user-profile-link">
                <img
                  src="img/user-ava.jpg"
                  alt="User Profile Photo"
                  class="user-photo"
                />
              </a>

              <a href="#">
                <span class="user-name">Nathan</span>
              </a>
            </div>
            <!-- /.user -->
            <button class="navbar-top-item menu-s">
              <span class="menu-s-item"></span>
              <span class="menu-s-item"></span>
              <span class="menu-s-item"></span>
            </button>
          </div>
          <!-- ./navbar-top-->
        </div>
        <!-- /.wrapper -->
      </div>
      <!-- /.header-top -->
      <div class="header-sub">
        <div class="wrapper">
          <div class="navbar-sub">
            <ul class="navbar-items-container">
              <li class="navbar-item user-mobile">
                <div class="user">
                  <a href="#" class="user-profile-link">
                    <img
                      src="img/user-ava.jpg"
                      alt="User Profile Photo"
                      class="user-photo"
                    />
                  </a>

                  <a href="#">
                    <span class="user-name">Nathan</span>
                  </a>
                </div>
                <!-- /.user -->
              </li>
              <li class="navbar-item search-form-mobile">
                <form action="#" class="search-form">
                  <input
                    type="search"
                    placeholder="Search Location"
                    name="search-input"
                    id="search-input-mobile"
                  />
                  <button class="search-icon">
                    <img src="img/search.svg" alt="Search: Enter location" />
                  </button>
                </form>
              </li>
              <li class="navbar-item">
                <a href="#" class="navbar-item-link">all deals</a>
              </li>
              <li class="navbar-item">
                <a href="#" class="navbar-item-link">hotels</a>
              </li>
              <li class="navbar-item">
                <a href="#" class="navbar-item-link">activities</a>
              </li>
              <li class="navbar-item">
                <a href="#" class="navbar-item-link"
                  >hotel day packages</a
                >
              </li>
              <li class="navbar-item">
                <a href="#" class="navbar-item-link">restaurants</a>
              </li>
              <li class="navbar-item">
                <a href="#" class="navbar-item-link">events</a>
              </li>
              <li class="navbar-item">
                <a href="#" class="navbar-item-link">rodrigues</a>
              </li>
            </ul>
            <ul class="navbar-hr-container">
              <li class="hr-container-item hr-mobile_user">
                <div class="hr-user-mobile">
                  <a href="#" class="user-profile-link">
                    <img
                      src="img/user-ava.jpg"
                      alt="User Profile Photo"
                      class="hr-user-photo"
                    />
                  </a>
                  <a href="#">
                    <span class="hr-user-name">Nathan</span>
                  </a>
                </div>
                <!-- /.user -->
              </li>
              <li class="hr-container-item hr-mobile_form">
                <form action="#" class="hr-search-form">
                  <input
                    type="text"
                    placeholder="Search Location"
                    name="hr-search-input"
                    id="hr-form-input"
                  />
                  <button class="button hr-search-icon">
                    <img src="img/search.svg" alt="Search: Enter location" />
                  </button>
                </form>
              </li>
              <li class="hr-container-item hr-mobile_sub">
                <ul class="hr-mobile_subcontainer">
                  <li class="hr-mobile_subcontainer-item">
                  <a href="#" class="hr-mobile_subcontainer-link"
                    >all deals</a
                  >
                  </li>
                  <li class="hr-mobile_subcontainer-item">
                    <a href="#" class="hr-mobile_subcontainer-link">hotels</a>
                  </li>
                  <li class="hr-mobile_subcontainer-item">
                    <a href="#" class="hr-mobile_subcontainer-link"
                      >activities</a
                    >
                  </li>
                    <li class="hr-mobile_subcontainer-item">
                    <a href="#" class="hr-mobile_subcontainer-link"
                      >hotel&nbsp;day&nbsp;packages</a
                    >
                  </li>
                  <li class="hr-mobile_subcontainer-item">
                    <a href="#" class="hr-mobile_subcontainer-link"
                      >restaurants</a
                    >
                  </li>
                  <li class="hr-mobile_subcontainer-item">
                    <a href="#" class="hr-mobile_subcontainer-link">events</a>
                  </li>
                  <li class="hr-mobile_subcontainer-item">
                    <a href="#" class="hr-mobile_subcontainer-link"
                      >rodrigues</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-sub -->
        </div>
        <!-- /.wrapper -->
      </div>
      <!-- /.header-sub -->
    </header>
    <!-- /.header -->
    <div class="bread-crumb-section">
      <div class="wrapper">
        <ul class="bread-crumb">
          <li class="bread-crumb-item">
            <a href="https://timoshenkokseniia.ru/tour-plan/" class="bread-crumb-link">Home</a>
          </li>
          <li class="bread-crumb-item">
            <a href="#" class="bread-crumb-link">Flash Offers</a>
          </li>
          <li class="bread-crumb-item">
            <a href="https://timoshenkokseniia.ru/tour-plan/" class="bread-crumb-link">Grand Hilton Hotel</a>
          </li>
        </ul>
        <!-- /.bread-crumb -->
      </div>
      <!-- /.wrapper -->
    </div>
    <!-- /.bread-crumb -->