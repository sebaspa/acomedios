<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="main-nav">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><img src="<?= get_template_directory_uri()."/images/logo.png"; ?>" alt="Logo"></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <li class="search-bar">
        <input type="text" class="search-input" placeholder="Search">
        <!-- <img src="search-icon.png" alt="Search" class="search-icon"> -->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="20px">
          <path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M8.062,0.751 C8.523,0.834 8.990,0.890 9.442,1.005 C10.725,1.332 11.830,1.978 12.755,2.924 C13.628,3.819 14.234,4.869 14.560,6.073 C14.817,7.021 14.872,7.985 14.736,8.959 C14.585,10.045 14.202,11.042 13.596,11.956 C13.574,11.990 13.555,12.026 13.523,12.081 C13.954,12.164 14.241,12.442 14.526,12.727 C15.790,13.991 17.057,15.250 18.324,16.510 C18.790,16.974 18.964,17.514 18.765,18.152 C18.457,19.138 17.173,19.519 16.371,18.863 C16.274,18.784 16.180,18.699 16.090,18.610 C14.793,17.320 13.498,16.029 12.200,14.741 C11.966,14.507 11.780,14.248 11.703,13.895 C11.638,13.932 11.582,13.960 11.531,13.994 C10.696,14.545 9.782,14.908 8.798,15.067 C7.029,15.353 5.358,15.061 3.816,14.136 C2.456,13.321 1.476,12.173 0.865,10.717 C0.585,10.050 0.416,9.353 0.352,8.633 C0.346,8.574 0.330,8.516 0.319,8.458 C0.319,8.133 0.319,7.809 0.319,7.485 C0.343,7.321 0.370,7.157 0.391,6.991 C0.531,5.873 0.927,4.847 1.562,3.920 C2.631,2.358 4.102,1.365 5.951,0.936 C6.312,0.853 6.683,0.812 7.049,0.751 C7.387,0.751 7.725,0.751 8.062,0.751 ZM12.970,7.961 C12.962,4.984 10.538,2.580 7.550,2.586 C4.571,2.592 2.149,5.008 2.165,7.975 C2.180,10.968 4.576,13.344 7.572,13.337 C10.603,13.330 12.949,10.927 12.970,7.961 Z"/>
        </svg>
      </li>
    </ul>

    <div class="menu-toggle">
      </div>
  </nav>