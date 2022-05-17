<?php
session_start();
require_once("includes/functions.php");
require_once("includes/db_cons.php");
$errors = [];
$successes=[];
$username = "";
$name = "";
$email = "";
$contact = "";
$password = "";


// connect to database
$db = mysqli_connect($servername, $db_user, $db_password, $database);
//Login
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $user = mysqli_fetch_array($results);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];
            redirect_to("dashboard.php");
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
//Menu category creation
if (isset($_POST['create_cat'])) {
    $cat_name = mysqli_real_escape_string($db, $_POST['category_name']);
    $query = "INSERT INTO `menu_cat` (`id`,`category_name`) VALUES (NULL, '{$cat_name}')";
    if (mysqli_query($db, $query)) {
        array_push($successes, "Category created successfuly!");
    }
}
//Menu Creation
if (isset($_POST['menu'])) {
    $menu_name = mysqli_real_escape_string($db, $_POST['menu_name']);
    $menu_category = mysqli_real_escape_string($db, $_POST['menu_category']);
    $food_price = mysqli_real_escape_string($db, $_POST['food_price']);
    $query = "INSERT INTO `menu` (`id`,`menu_name`,`menu_category`, `food_price`) VALUES (NULL, '{$menu_name}','{$menu_category}','{$food_price}')";
    if (mysqli_query($db, $query)) {
        array_push($successes, "Menu created successfuly!");
    }
}
//Recipe Creation
if (isset($_POST['recipe'])) {
    $recipe_name = mysqli_real_escape_string($db, $_POST['recipe_name']);
    $recipe_desc = mysqli_real_escape_string($db, $_POST['recipe_desc']);
    $query = "INSERT INTO `recipe` (`id`,`recipe_name`,`recipe_desc`) VALUES (NULL, '{$recipe_name}','{$recipe_desc}')";
    if (mysqli_query($db, $query)) {
        array_push($successes, "Recipe created successfuly!");
    }
}
//Ingredient Stock
if (isset($_POST['ing_stock'])) {
    $ingredient_name = mysqli_real_escape_string($db, $_POST['ingredient_name']);
    $ing_quantity = mysqli_real_escape_string($db, $_POST['ing_quantity']);
    $query = "INSERT INTO `ingredient_stock` (`id`,`ingredient_name`,`ing_quantity`) VALUES (NULL, '{$ingredient_name}','{$ing_quantity}')";
    if (mysqli_query($db, $query)) {
        array_push($successes, "Ingredient created successfuly!");
    }
}
?>