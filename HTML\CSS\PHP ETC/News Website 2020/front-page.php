<!-- this is the front page page, it is implimented so when localhost/ is searched instead of just pulling the post, the code from the home page has been implimented to make it identical to the home page -->
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
   <div class="footer"> You are on the home page <?php echo date("d/m/Y h:i A", time()); ?> </div>
   <div class="jumbotron" style= " border-bottom:0;margin-bottom:0;padding: 2rem 2rem;border-style: solid;border-color: black;">
      <h1 class="display-4" >Welcome To MadNews, The Uk's Most Popular News Online Platform</h1>
      <p class="lead" > Here at MadNews We believe in giving you the most accurate and up to date information, this is why we are the UK's top news platform</p>
      <hr class="my-4" >
   </div>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="position:relative;top:0;left:;">
         <div class="carousel-item active" style="position:relative;top:0;left:;">
            <img src="/wp-content/themes/assignment12020/images/image1.jpg" class="d-block w-100" alt="">
         </div>
         <div class="carousel-item">
            <img src="/wp-content/themes/assignment12020/images/image2.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="/wp-content/themes/assignment12020/images/image3.jpg" class="d-block w-100" alt="...">
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="position:relative;top:0;left:;"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="position:relative;top:0;left:;"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <img src="/wp-content/themes/assignment12020/images/sport.jpg" alt="Italian Trulli" class="sport" onclick="window.location.href = 'http://localhost/category/news/sport/';">
   <img src="/wp-content/themes/assignment12020/images/crime.jpg" alt="Italian Trulli" class="crime" onclick="window.location.href = 'http://localhost/category/news/crime/';"> <!-- these are the images on the home page which can be clicked on to take them to the relevant catagory page -->
   <img src="/wp-content/themes/assignment12020/images/weather.jpg" alt="Italian Trulli" class="weather" onclick="window.location.href = 'http://localhost/category/news/weather/';">
   <img src="/wp-content/themes/assignment12020/images/international.jpg" alt="Italian Trulli" class="international" onclick="window.location.href = 'http://localhost/category/news/international/';">
   <div class="sports123">
   Sport News 
   <div>
   <div class="crime123">
   Crime News 
   <div>  <!-- these are the titles which go above the respective images -->
   <div class="weather123">
   Weather News 
   <div>
   <div class="international123">
   International News 
   <div>
   </a>