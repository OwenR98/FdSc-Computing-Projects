<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
   <title>Assignment 1 2020 Webdev</title>
</head>
<body style="background-color:grey; color:black;">
   <div class="main">
   </div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MadNews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" onclick="window.location.href = 'http://localhost/home-page/';">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" onclick="window.location.href = 'http://localhost/contact-us/';">Contact Us</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#" onclick="window.location.href = 'http://localhost/about-us/';">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News Catagories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/sport/';">Sports News</a>
          <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/international/';">International News</a>
          <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/crime/';">Crime News</a>
		  <a class="dropdown-item" href="#" onclick="window.location.href = 'http://localhost/category/news/weather/';">Weather news</a>
        </div>
      </li>
    </ul>
    <a class="example"><?php get_search_form(); ?></a>
  </div>
</nav>
   <div class="jumbotron" style= " border-bottom:0;margin-bottom:0;padding: 2rem 2rem;border-style: solid;border-color: black;">
      <h1 class="display-4" >Welcome To MadNews, The Uk's Most Popular News Online Platform</h1>
      <p class="lead" > Here at MadNews We believe in giving you the most accurate and up to date information, this is why we are the UK's top news platform</p>
      <hr class="my-4" >
   </div>
   <br>
   <br>
   
   <?php 
      if ( have_posts() ) {
      while ( have_posts() ) {
      the_post(); 
      //
      
      $key_1_value = get_post_meta( get_the_ID(), 'img', true );
       // Check if the custom field has a value.
             ?>                    
   <?php
      the_title();
      the_content();
      //
      } // end while
      } // end if
      ?>
   </a>
   
   <div class="footer">  </div>