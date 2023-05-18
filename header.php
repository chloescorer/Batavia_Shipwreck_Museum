<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <meta name="The Shocking History of the Batavia Shipwreck" content="The Batavia Gallery at the WA Shipwrecks Museum">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Quattrocento:wght@700&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css"> -->
<title><?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>

<body>
    <!-- Header -->
    <header class="container-fluid indexheaderbg">
        <div class="container">
            <!-- Navigation Bar -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" class="logo" alt="Brand Logo">
                </a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"><img src="images/hamburger.png" alt="Icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="blog.html">ARTICLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="tag">
            <h1 class="indexheading">EXPLORE THE BATAVIA'S
                <span class="haunting">HAUNTING</span>
              <span class="history">HISTORY</span>
            </h1>
        </div> <!-- Tagline Div -->
    </div> <!-- Container -->
    <?php wp_head(); ?>
</header> <!-- Container Fluid -->