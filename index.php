<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <!-- Bootstrap Link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"/>
    
      <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Extarnal css link -->
    <link rel="stylesheet" href="./css/index.css" />
    <title>Healthy Foor Recipes Home Page</title>
  </head>
  <body class= "homepage">
    <header>
      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top px-0" style="background-color: #ffffff; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">
            <img src="image/Food Recipe Site Logo.png" alt="logo" height="50" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="seller.php">Seller's Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>
            </ul>
       
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>
</nav>
      
    </header>
    <main>
      <!-- Welcome Message -->
      <div class="welcomeNote" style="background-image: url('image/food.png');">
  <h1>Welcome <span><?php if(isset($_SESSION['fname'])): echo ($_SESSION['fname']); endif; ?></span> Healty Food Recipe</h1>
  <p>Explore the best products and services handpicked for you.</p>
  <a href="#product" class="ExploreBut">Explore Now</a>
</div>
      <!-- Article or Video Section -->
      <div class="article-video-section container my-4">
        <div class="row">
          <div class="col-md-6">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
          </div>
            <!-- Example Article -->
          <div class="col-md-6"> 
            <h3 class="fun-facts-header">Fun Fact</h3>
            <p>01 Cooking is the art, science, and discipline of preparing and presenting food.<br>02 Humans started cooking 1.8-2.3 million years ago.<br>03 Chopsticks were initially created for cooking, not as an eating utensil.</p>
            <!-- Top Chef Section -->
            <section class="best-chef-section">
            <img src="image/sandwitch.png" alt="sandwitch Image" class="top-chef-image">
              <h2 class="best-chef-header">Best Chef</h2>
              <div class="chef-details">
                <img src="image/Best Chef.png" alt="Best Chef" class="chef-image">
                <div class="recipe-details">
                  <h3>Chef's Special Recipe</h3>
                  <p>This recipe has the highest ratings for its exquisite taste and presentation. It has been acclaimed by food enthusiasts and critics alike.</p>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <!-- Bootstrap Carousel -->
      <div class="container-fluid">
        <div
          id="carouselExampleIndicators" class="carousel slide caro-bg" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">

           
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                 
                  <div class="col-md-2">
                    <img src="image/6.png" class="d-block w-100" alt="Food Item 1">
                    <h5>Food Item 1</h5>
                    <p>Description of Food Item 1.</p>
                  </div>
                 
                  <div class="col-md-2">
                    <img src="image/7.png" class="d-block w-100" alt="Food Item 2">
                    <h5>Food Item 2</h5>
                    <p>Description of Food Item 2.</p>
                  </div>
                  
                  <div class="col-md-2">
                    <img src="image/8.png" class="d-block w-100" alt="Food Item 3">
                    <h5>Food Item 3</h5>
                    <p>Description of Food Item 3.</p>
                  </div>
                  <div class="col-md-2">
                    <img src="image/9.png" class="d-block w-100" alt="New Food Item 4">
                    <h5>New Item 4</h5>
                    <p>Description of New Item 4.</p>
                  </div>
                  <div class="col-md-2">
                      <img src="image/10.png" class="d-block w-100" alt="New Food Item 5">
                      <h5>New Item 5</h5>
                    <p> Description of New Item 5.</p>
                  </div>
                  <div class="col-md-2">
                      <img src="image/11.png" class="d-block w-100" alt="New Food Item 6">
                      <h5>New Item 6</h5>
                      <p>Description of New Item 6.</p>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                 
                  <div class="col-md-2">
                    <img src="image/9.png" class="d-block w-100" alt="Food Item 4">
                    <h5>Food Item 4</h5>
                    <p>Description of Food Item 4.</p>
                  </div>
                
                  <div class="col-md-2">
                    <img src="image/17.png" class="d-block w-100" alt="Food Item 5">
                    <h5>Food Item 5</h5>
                    <p>Description of Food Item 5.</p>
                  </div>
                  
                  <div class="col-md-2">
                    <img src="image/18.png" class="d-block w-100" alt="Food Item 6">
                    <h5>Food Item 6</h5>
                    <p>Description of Food Item 6.</p>
                  </div>
                  <div class="col-md-2">
                    <img src="image/9.png" class="d-block w-100" alt="New Food Item 4">
                    <h5>New Item 4</h5>
                    <p>Description of New Item 4.</p>
                  </div>
                  <div class="col-md-2">
                      <img src="image/10.png" class="d-block w-100" alt="New Food Item 5">
                      <h5>New Item 5</h5>
                    < p>Description of New Item 5.</p>
                  </div>
                  <div class="col-md-2">
                      <img src="image/11.png" class="d-block w-100" alt="New Food Item 6">
                      <h5>New Item 6</h5>
                      <p>Description of New Item 6.</p>
                  </div>
                </div>
              </div>
            </div>
          

            
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                 
                  <div class="col-md-2">
                    <img src="image/19.png" class="d-block w-100" alt="Food Item 7">
                    <h5>Food Item 7</h5>
                    <p>Description of Food Item 7.</p>
                  </div>
                  
                  <div class="col-md-2">
                    <img src="image/20.png" class="d-block w-100" alt="Food Item 8">
                    <h5>Food Item 5</h5>
                    <p>Description of Food Item 5.</p>
                  </div>
                 
                  <div class="col-md-2">
                    <img src="image/21.png" class="d-block w-100" alt="Food Item 9">
                    <h5>Food Item 6</h5>
                    <p>Description of Food Item 6.</p>
                  </div>
                  <div class="col-md-2">
                    <img src="image/9.png" class="d-block w-100" alt="New Food Item 4">
                    <h5>New Item 4</h5>
                    <p>Description of New Item 4.</p>
                  </div>
                  <div class="col-md-2">
                      <img src="image/10.png" class="d-block w-100" alt="New Food Item 5">
                      <h5>New Item 5</h5>
                    < p>Description of New Item 5.</p>
                  </div>
                  <div class="col-md-2">
                      <img src="image/11.png" class="d-block w-100" alt="New Food Item 6">
                      <h5>New Item 6</h5>
                      <p>Description of New Item 6.</p>
                  </div>
                </div>
              </div>
            </div>

           
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                 
                  <div class="col-md-2">
                    <img src="image/a.png" class="d-block w-100" alt="Food Item 10">
                    <h5>Food Item 10</h5>
                    <p>Description of Food Item 10.</p>
                  </div>
                  
                  <div class="col-md-2">
                    <img src="image/b.png" class="d-block w-100" alt="Food Item 5">
                    <h5>Food Item 5</h5>
                    <p>Description of Food Item 5.</p>
                  </div>
                  
                  <div class="col-md-2">
                    <img src="image/11.png" class="d-block w-100" alt="Food Item 6">
                    <h5>Food Item 6</h5>
                    <p>Description of Food Item 6.</p>
                  </div> 
                  
                  <div class="col-md-2">
                    <img src="image/a.png" class="d-block w-100" alt="Food Item 10">
                    <h5>Food Item 10</h5>
                    <p>Description of Food Item 10.</p>
                  </div>
                 
                  <div class="col-md-2">
                    <img src="image/b.png" class="d-block w-100" alt="Food Item 5">
                    <h5>Food Item 5</h5>
                    <p>Description of Food Item 5.</p>
                  </div>
                  
                  <div class="col-md-2">
                    <img src="image/11.png" class="d-block w-100" alt="Food Item 6">
                    <h5>Food Item 6</h5>
                    <p>Description of Food Item 6.</p>
                  </div> 
                </div>
              </div>
            </div>
          </div>


          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
     

      
<section id="product">
  <div class="containerT">
    <h1>Most Favourited Items</h1>
  </div>
  <div class="container-fluid">
    <div class="row">
     
      <div class="col-md-3 filter-sidebar">
        <h2>Filter Recipes</h2>

        
        <div class="mb-3">
          <label for="rankingFilter" class="form-label">Chef Ranking</label>
          <select class="form-select" id="rankingFilter">
            <option selected>Choose...</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
          </select>
        </div>

        
        <div class="mb-3">
          <label for="chefNameFilter" class="form-label">Chef Name</label>
          <select class="form-select" id="chefNameFilter">
            <option selected>Choose...</option>
            
          </select>
        </div>

        <div class="mb-3">
          <label for="categoryFilter" class="form-label">Category</label>
          <select class="form-select" id="categoryFilter">
            <option selected>Choose...</option>
            <option value="appetizers">Appetizers</option>
            <option value="main_courses">Main Courses</option>
            <option value="desserts">Desserts</option>
          </select>
        </div>

       
        <div class="mb-3">
          <label for="cuisineFilter" class="form-label">Cuisine</label>
          <select class="form-select" id="cuisineFilter">
            <option selected>Choose...</option>
       
          </select>
        </div>

       
        <div class="mb-3">
          <label for="locationFilter" class="form-label">Location</label>
          <select class="form-select" id="locationFilter">
            <option selected>Choose...</option>
            <option value="Aberdeen">Aberdeen</option>
            <option value="Glasgow">Glasgow</option>
            <option value="Dundee">Dundee</option>
            <option value="Edinburgh">Edinburgh</option>
            <option value="Aberdeenshire">Aberdeenshire</option>
          </select>
        </div>

        <button type="button" class="btn btn-primary" id="applyFilters">Apply Filters</button>
      </div>
    
      
      <div class="col-md-9">
        <div class="row row-cols-1 row-cols-md-4 g-4">
          
          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="./image/p-shoe1.png" class="card-img-top" alt="Shoe Image" />
              <div class="card-body">
                <h5 class="card-title">BATA</h5>
                <p class="card-text">
                  Bata casual jumper for tracking,hiking.light weight shoe with
                  fashion touch
                </p>
                <h6>£130</h6>
                <button class="btn buy-now">Buy now >></button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
    </main>

    <!-- footer starts here-->
<footer class="footers bg-dark text-white pt-5 pb-4">
  <div class="container text-md-left">
    <div class="row text-md-left">
      
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Healty Food Recipe</h5>
        <p>Explore the best recipes handpicked for you.</p>
        <div>
          <a href="https://www.facebook.com/marketplace/create"><i class="fa fa-facebook text-white mr-4"></i></a>
          <a href="https://twitter.com/home?lang=en"><i class="fa fa-twitter text-white mr-4"></i></a>
          <a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin text-white mr-4"></i></a>
          <a href="https://www.instagram.com/?login&hl=en-gb"><i class="fa fa-instagram text-white"></i></a>
        </div>
      </div>

     
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Info</h5>
        <p><a href="#" class="text-white" style="text-decoration: none;">About Us</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">FAQs</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Advertise</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Terms and Conditions</a></p>
        <p><a href="PrivacyPolicy.html" class="text-white" style="text-decoration: none;">Privacy Policy</a></p>
      </div>

     
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
        <p>RGU, Garthdee</p>
        <p>+44 35565962049</p>
        <p>TeamO@gmail.com</p>
      </div>

      
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Newsletter</h5>
        <form>
          <div class="form-outline form-white mb-4">
            <input type="email" id="form5Example2" class="form-control" placeholder="Enter your email"/>
            <button type="submit" class="btn btn-outline-light btn-block">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

   
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="text-left text-md-left">
          © 2024 HFR, Inc. All rights reserved.
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer ends here-->
    <!-- JS bundle for Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
   
  </body>
  
</html>
