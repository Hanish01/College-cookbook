<?php
session_start();

$recipes = [
    1 => [
        'title' => 'Red Sauce Pasta',
        'description' => 'A quick and easy recipe for a delicious Red Sauce Pasta.',
        'ingredients' => 'Pasta, Red Sauce, Butter, Salt, Pepper',
        'instructions' => [
            'Boil the pasta (no, you don\'t need a fancy pot, just a kettle will do).',
            'Add red sauce, butter, salt, and pepper like you\'re a pasta guru.',
            'Mix it all together like you\'re stirring up some magic.',
            'Turn off the kettle, let it sit for 3 minutes (optional: do a victory dance).',
            'If you\'ve got capsicum, chop it up, toss it in and give it another stir.',
            'Serve in a bowl and pretend you\'re eating at a fancy Italian restaurant.',
        ],
        'calories' => 370,
        'image_path' => 'images/4.png',
        'youtube_link' => 'https://youtu.be/1h8L97z8tpk?si=_5xKqgrbS2PhFiHM&t=19'
    ],
    2 => [
        'title' => 'Oats Breakfast Bowl',
        'description' => 'A quick and healthy oats recipe, perfect for a busy morning.',
        'ingredients' => 'Oats, Milk (or Water), Honey, Fresh Fruit (Banana, Berries), Nuts (optional)',
        'instructions' => [
            "Now, Get ready to make Masala oats, For that chop onions, Tomatoes, Carrots, chillies into bite-sized pieces.",
            "If you have butter, add 10gm of butter into the kettle which is not turned on.",
            "Add the chopped stuff into it.",
            "Add a bit of water in, close the lid and let it cook for 2 minutes.",
            "Open the lid and mix those veggies and cook again for 2 more minutes.",
            "Add maggie masala into it which you can get from stores/stalls.",
            "Add a cup of water to it and add the most important thing for anything, SALT.",
            "While it is boiling, add oats to it and mix it.",
            "Let it boil for a minute, and turn off the kettle and leave it for like 3 minutes.",
            "No more Steps, add it into a bowl. Enjoy that."
        ],
        'calories' => 250,
        'image_path' => 'images/5.png',
        'youtube_link' => 'https://youtu.be/1h8L97z8tpk?si=0EGdpx0UbHZplTO3&t=416'
    ],
    3 => [
        'title' => 'Vegetable Biryani',
        'description' => 'A simple and flavorful vegetarian biryani that you can make in no time!',
        'ingredients' => 'Rice, Mixed Vegetables (carrots, peas, potatoes), Biryani Masala, Onion, Garlic, Salt',
        'instructions' => [
            'Cook the rice in water with a pinch of salt (you can use a rice cooker or stove).',
            'Chop the vegetables and sauté them in a pan with oil and garlic until soft.',
            'Add biryani masala and stir it in with the vegetables for about 1-2 minutes.',
            'Mix the cooked rice with the sautéed vegetables and let it cook for another 5 minutes.',
            'Serve hot with a dollop of yogurt or raita if you want to take it up a notch.',
        ],
        'calories' => 400,
        'image_path' => 'images/6.jpg',
        'youtube_link' => 'https://youtu.be/1h8L97z8tpk?si=_X3HJhZUFqYOYNNa&t=651'
    ],
    4 => [
        'title' => 'Maggie Noodles',
        'description' => 'The classic college snack—Maggie noodles made quick and delicious!',
        'ingredients' => 'Maggie Noodles, Water, Maggie Spice Packet, Optional: Vegetables (Carrot, Peas, Corn)',
        'instructions' => [
            'Boil water in a pot (use the amount mentioned on the noodle packet).',
            'Once the water is boiling, add the Maggie noodles and the spice packet.',
            'If you want to add veggies, toss them in with the noodles and let them cook.',
            'Stir the noodles occasionally until they are soft and well-coated with the seasoning.',
            'Serve in a bowl, grab a spoon or chopsticks, and enjoy!',
        ],
        'calories' => 300,
        'image_path' => 'images/71.png',
        'youtube_link' => 'https://youtu.be/Zscsl81fAQ0?si=_fe5nBeqUVY4UQCh'
    ]
];

$recipes1 = [
    101 => [
        'title' => 'Egg Fried Rice', 
        'description' => 'A quick and easy recipe for Egg fried rice. It\'s perfect for a light meal!',
        'ingredients' => 'Eggs, Rice, Oil, Soy Sauce, Vegetables (Carrots, Peas, Corn), Salt, Pepper',
        'instructions' => [
            'Fry the vegetables in a little oil until they soften.',
            'Push the veggies to the side, scramble eggs in the pan until cooked.',
            'Add the rice and soy sauce, mix well.',
            'Season with salt and pepper to taste.',
            'Serve hot with a garnish of fresh herbs if you like.',
        ],
        'calories' => 350,
        'image_path' => 'images/7.png',
        'youtube_link' => 'https://youtu.be/abc123xyz?si=6JH20kRlGfP0Pjyv'
    ],
    102 => [
        'title' => 'Omelette',
        'description' => 'A simple yet delicious omelette, packed with protein and great for breakfast.',
        'ingredients' => 'Eggs, Milk, Salt, Pepper, Onion, Tomatoes (optional), Cheese (optional)',
        'instructions' => [
            'Crack the eggs into a bowl, add a splash of milk, and season with salt and pepper.',
            'Whisk the eggs and pour them into a heated non-stick pan.',
            'Cook for a few minutes until the edges start to set, then flip it over.',
            'Serve hot with a side of toast or fresh veggies.',
        ],
        'calories' => 250,
        'image_path' => 'images/8.png',
        'youtube_link' => 'https://youtu.be/SGBP3sG3a9Y?si=rkurp8bvu857HM01'
    ],
    103 => [
        'title' => 'Chicken Biryani',
        'description' => 'A flavorful and aromatic biryani made with chicken, rice, and spices.',
        'ingredients' => 'Chicken, Rice, Biryani Masala, Onion, Garlic, Ginger, Salt, Oil',
        'instructions' => [
            'Cook the rice with a pinch of salt and set aside.',
            'Sauté onions, garlic, and ginger in a pan until golden brown.',
            'Add the chicken and cook until it is browned.',
            'Add biryani masala and stir well, then layer the rice over the chicken.',
            'Cover and cook for 10 minutes on low heat. Serve hot!',
        ],
        'calories' => 600,
        'image_path' => 'images/9.png',
        'youtube_link' => 'https://youtu.be/-cLDrBc4Of4?si=xefzklCnx-8H-XrB'
    ],
    104 => [
        'title' => 'Butter Chicken',
        'description' => 'A rich and creamy chicken curry cooked in butter and Indian spices.',
        'ingredients' => 'Chicken, Butter, Cream, Tomatoes, Garlic, Ginger, Garam Masala, Salt, Chili Powder',
        'instructions' => [
            'Cook the chicken in butter until golden brown.',
            'Add chopped tomatoes, garlic, and ginger and cook until soft.',
            'Add garam masala, chili powder, and salt, stir well.',
            'Add cream and cook for 10 minutes on low heat.',
            'Serve with naan or rice for a delicious meal.',
        ],
        'calories' => 700,
        'image_path' => 'images/10.png',
        'youtube_link' => 'https://youtu.be/mrDJ2K3JXsA?si=ZKAQMiBbD-uG5IMh'
    ],
    105 => [
        'title' => 'Tandoori Chicken',
        'description' => 'Chicken marinated in a blend of spices and yogurt, cooked to perfection.',
        'ingredients' => 'Chicken, Yogurt, Lemon Juice, Garam Masala, Chili Powder, Cumin, Salt',
        'instructions' => [
            'Marinate the chicken with yogurt, spices, and lemon juice for 4 hours.',
            'Preheat the oven or grill and cook the chicken until browned and cooked through.',
            'Serve with a squeeze of lemon and a side of salad or naan.',
        ],
        'calories' => 500,
        'image_path' => 'images/11.png',
        'youtube_link' => 'https://youtu.be/Eot2K6IDUcI?si=9TwoGP216TsCiBL5'
    ],
    106 => [
        'title' => 'Mutton Rogan Josh',
        'description' => 'A traditional Kashmiri mutton curry with rich flavors and a spicy kick.',
        'ingredients' => 'Mutton, Onion, Garlic, Ginger, Yogurt, Garam Masala, Turmeric, Chili Powder, Salt',
        'instructions' => [
            'Brown the mutton pieces in oil.',
            'Add onions, garlic, and ginger, and cook until fragrant.',
            'Add yogurt, garam masala, turmeric, and chili powder, and simmer for 45 minutes.',
            'Serve hot with rice or naan for a hearty meal.',
        ],
        'calories' => 800,
        'image_path' => 'images/12.png',
        'youtube_link' => 'https://youtu.be/g_hvkyYPAMQ?si=4sALRDZyZL3lcfxy'
    ]
];

$recipe_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$recipe = isset($recipes[$recipe_id]) ? $recipes[$recipe_id] : (isset($recipes1[$recipe_id]) ? $recipes1[$recipe_id] : null);

if (!$recipe) {
    echo "Recipe not found!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($recipe['title']) ?></title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="head" style="border: 1px solid black; padding: 0px; margin: 0px;">
        <p id="headtext" style="font-size: 30px; margin: 5px; padding-left: 3px; padding: 15px;">
            College Cal <span id="t1" style="margin-left:-9px">orie Cookbook</span>
        </p>
    </div>

    <div style="margin-top: 100px">
        <h1><?= htmlspecialchars($recipe['title']) ?></h1>
        <img src="<?= htmlspecialchars($recipe['image_path']) ?>" alt="<?= htmlspecialchars($recipe['title']) ?>" width="500">
        <p><strong>Description:</strong> <?= htmlspecialchars($recipe['description']) ?></p>
        <p><strong>Ingredients:</strong> <?= htmlspecialchars($recipe['ingredients']) ?></p>
        
        <h2>Instructions:</h2>
        <ul>
            <?php foreach ($recipe['instructions'] as $step): ?>
                <li><?= htmlspecialchars($step) ?></li>
            <?php endforeach; ?>
        </ul>

        <p><strong>Calories:</strong> <?= htmlspecialchars($recipe['calories']) ?> kcal</p>

        <h2>Watch the Recipe in Action!</h2>
        <p>For a visual guide, check out the video:</p>
        <a href="<?= htmlspecialchars($recipe['youtube_link']) ?>" target="_blank">Watch the recipe on YouTube</a>
    </div>
</body>
</html>
