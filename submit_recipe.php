<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);


include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chefName = $_POST['chefName'];
    $recipeName = $_POST['recipeName'];
    $category = $_POST['category'];
    $ingredients = $_POST['ingredients'];
    $directions = $_POST['directions'];
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["recipeImage"]["name"]);

    if (move_uploaded_file($_FILES["recipeImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO recipes (chefName, recipeName, category, ingredients, directions, imagePath) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$chefName, $recipeName, $category, $ingredients, $directions, $target_file]);
        echo "Recipe submitted successfully.";
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Invalid request";
}
?>
