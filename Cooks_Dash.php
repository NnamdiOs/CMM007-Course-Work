

<?php
session_start();
require 'connection.php'; 

try {
    $query = "SELECT id, chefName, recipeName, category, ingredients, directions, imagePath FROM recipes ORDER BY created_at DESC";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log($e->getMessage());
   
    $recipes = [];
}
$recipesByCategory = [];
foreach ($recipes as $recipe) {
    $recipesByCategory[$recipe['category']][] = $recipe;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- External css link -->
    <link rel="stylesheet" href="./css/index.css" />
    <title>Healthy Food Recipes Home Page</title>
</head>
<body class="homepage">
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
                    <a class="nav-link" href="Cooks_Dash.php">Chef Dash
        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="editRecipeForm.html">Update Recipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="deleteRecipeForm.html">Delete Recipe</a>
                </li>
            </ul>
       
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>
</nav>
      
</header>
    <main>
    <div class="container py-5">
        <div class="row">
            
            <div class="col-md-4">
                <!-- Stylish Sidebar Starts -->
                <div class="stylish-sidebar">
                    <img src="./image/Best Chef.png" alt="Chef" class="stylish-image">
                    <p class="stylish-text">This is a sample text about the chef. Explore more to find delicious recipes!</p>
                </div>
                <a href="#bottom-form" class="ExploreBut">Upload Recipes</a>
                
                <!-- Form Starts -->
                <div class="form-container mt-4"> 
                    <form action="submit_recipe.php" method="POST" enctype="multipart/form-data" id="bottom-form">
                    <div class="mb-3">
                        <label for="chefName" class="form-label">Chef's Name</label>
                        <input type="text" class="form-control" id="chefName" name="chefName" required>
                    </div>
                        <div class="mb-3">
                            <label for="recipeName" class="form-label">Recipe Name</label>
                            <input type="text" class="form-control" id="recipeName" name="recipeName" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category">
                                <option selected>Choose...</option>
                                <option value="appetizers">Appetizers</option>
                                <option value="main_courses">Main Courses</option>
                                <option value="desserts">Desserts</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ingredients" class="form-label">Ingredients</label>
                            <textarea class="form-control" id="ingredients" name="ingredients" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="directions" class="form-label">Directions</label>
                            <textarea class="form-control" id="directions" name="directions" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipeImage" class="form-label">Recipe Image</label>
                            <input type="file" class="form-control" id="recipeImage" name="recipeImage" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Recipe</button>
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
            <div class="col-md-8">
    <h2>Available Recipes</h2>
    <?php foreach ($recipesByCategory as $categoryName => $recipesInCategory): ?>
    <div class="category-section">
        <h3 class="category-title" style="border-bottom: 2px solid #bee1ca; color: #bee1ca;"><?= htmlspecialchars(ucwords(str_replace('_', ' ', $categoryName))) ?></h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($recipesInCategory as $recipe): ?>
                <div class="col">
                    <div class="card h-100" data-bs-toggle="modal" data-bs-target="#recipeModal<?= $recipe['id']; ?>">
                        <img src="<?= htmlspecialchars($recipe['imagePath']); ?>" class="card-img-top" alt="<?= htmlspecialchars($recipe['recipeName']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($recipe['recipeName']); ?></h5>
                            <p class="card-text">Chef: <?= htmlspecialchars($recipe['chefName']); ?></p>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="recipeModal<?= $recipe['id']; ?>" tabindex="-1" aria-labelledby="recipeModalLabel<?= $recipe['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="recipeModalLabel<?= $recipe['id']; ?>"><?= htmlspecialchars($recipe['recipeName']); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Chef:</strong> <?= htmlspecialchars($recipe['chefName']); ?></p>
                                <p><strong>Ingredients:</strong> <?= nl2br(htmlspecialchars($recipe['ingredients'])); ?></p>
                                <p><strong>Directions:</strong> <?= nl2br(htmlspecialchars($recipe['directions'])); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>
</div>
</main>     
    <!-- Footer Starts -->
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.recipe-image');

    images.forEach(image => {
        image.addEventListener('click', function() {
            const details = this.nextElementSibling; 
            details.style.display = details.style.display === 'none' ? 'block' : 'none';
        });
    });
});
</script>

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
