<?php
session_start();
$recipes = [
    1 => [
        'title' => 'Red Sauce Pasta', 
        'description' => 'A quick and easy recipe for a delicious Red Sauce Pasta.',
        'url' => 'recipe.php?id=1', 
        'img' => './images/4.png'
    ],
    2 => [
        'title' => 'Oats Breakfast Bowl',
        'description' => 'A healthy breakfast of oats topped with fresh fruits and nuts.',
        'url' => 'recipe.php?id=2',
        'img' => './images/5.png'
    ],
    3 => [
        'title' => 'Vegetable Biryani',
        'description' => 'A simple and flavorful vegetarian biryani that you can make in no time!',
        'url' => 'recipe.php?id=3',
        'img' => './images/6.jpg'
    ],
    4 => [
        'title' => 'Maggie Noodles',
        'description' => 'The classic college snack—Maggie noodles made quick and delicious!',
        'url' => 'recipe.php?id=4',
        'img' => './images/71.png'
    ]
];

$recipes1 = [
    101 => [
        'title' => 'Egg Fried Rice', 
        'description' => 'A quick and easy recipe for Egg fried rice.',
        'url' => 'recipe.php?id=101', 
        'img' => './images/7.png'
    ],
    102 => [
        'title' => 'Omlette',
        'description' => 'A simple yet effective dish/side.',
        'url' => 'recipe.php?id=102',
        'img' => './images/8.png'
    ],
    103 => [
        'title' => 'Chicken Biryani',
        'description' => 'A Biryani which is filled with aroma.',
        'url' => 'recipe.php?id=103',
        'img' => './images/9.png'
    ],
    104 => [
        'title' => 'Butter Chicken',
        'description' => 'An Exotic Curry which is mouth Watering',
        'url' => 'recipe.php?id=104',
        'img' => './images/10.png'
    ],
    105 => [
        'title' => 'Tandoori Chicken',
        'description' => 'An Awesome dish which you will remember',
        'url' => 'recipe.php?id=105',
        'img' => './images/11.png'
    ],
    106 => [
        'title' => 'Mutton Rogan Josh',
        'description' => 'A Curry which is unforgettable',
        'url' => 'recipe.php?id=106',
        'img' => './images/12.png'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
    <style>
     
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

      
        .recipes-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px; 
            margin-top: 50px;
            padding: 0 20px;
        }

     
        .recipe-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px; 
            height: 350px; 
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
        }

        .recipe-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .recipe-card h3 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .recipe-card p {
            font-size: 14px;
            color: #777;
            margin: 0 0 15px;
            height: 60px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .recipe-card a {
            text-decoration: none;
            font-weight: bold;
       
            margin-top: auto; 
        }

        .recipe-card a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div id="head">
        <p id="headtext">
            College Cal<span id="t1">orie Cookbook</span>    
            <span id="username">Welcome, <?= $_SESSION['user_name'] ?>!</span>
        </p>
    </div>
    
    <h1 style="margin-top:100px">Here are some recipes for you Hostelers:</h1>
    <p style="font-size:30px;font-color: green;">Vegetarian:</p>

    <div class="recipes-container">
        <?php foreach ($recipes as $recipe): ?>
            <div class="recipe-card">
             
                <img src="<?= $recipe['img'] ?>" alt="<?= htmlspecialchars($recipe['title']) ?>" />

                
                <h3><a href="<?= $recipe['url'] ?>" target="_blank"><?= htmlspecialchars($recipe['title']) ?></a></h3>

               
                <p><?= htmlspecialchars(substr($recipe['description'], 0, 100)) ?>...</p>
            </div>
        <?php endforeach; ?>
    </div>

    <h1 style="margin-top:20px">General Recipies</h1>
    <p style="font-size:30px;font-color: green;">Non Vegetarian:</p>
    <div class="recipes-container">
        <?php foreach ($recipes1 as $recipe): ?>
            <div class="recipe-card">
             
                <img src="<?= $recipe['img'] ?>" alt="<?= htmlspecialchars($recipe['title']) ?>" />

                
                <h3><a href="<?= $recipe['url'] ?>" target="_blank"><?= htmlspecialchars($recipe['title']) ?></a></h3>

               
                <p><?= htmlspecialchars(substr($recipe['description'], 0, 100)) ?>...</p>
            </div>
        <?php endforeach; ?>
    </div>
<div id="footer" style="background-color:  #DB6310; color: white;">
   <p>Thank You for visiting</p>
   
</div>
<p>@K.Hanish Vardhan</p>

</body>
</html>
