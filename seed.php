<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Category;
use App\Models\Post;

$categoryModel = new Category();
$postModel = new Post();

// 1. Категории
$categories = [
    ['name' => 'PHP', 'slug' => 'php', 'description' => 'Статьи про PHP'],
    ['name' => 'JavaScript', 'slug' => 'javascript', 'description' => 'Статьи про JavaScript'],
    ['name' => 'CSS', 'slug' => 'css', 'description' => 'Статьи про CSS'],
    ['name' => 'MySQL', 'slug' => 'mysql', 'description' => 'Статьи про MySQL'],
];

foreach ($categories as $cat) {
    $categoryModel->createSeed($cat);
}

// Получаем все id категорий
$categoriesIds = array_column($categoryModel::all(), 'id');

for ($i = 1; $i <= 20; $i++) {

    $postId = $postModel->createSeed([
        'title' => "Статья $i",
        'slug' => "post-$i",
        'image' => "$i",
        'description' => "Описание статьи $i",
        'content' => "Контент статьи $i",
        'views' => rand(0, 200),
        'created_at' => date('Y-m-d H:i:s')
    ]);

    // Привязка к случайной категории
    $categoryId = $categoriesIds[array_rand($categoriesIds)];

    $postModel->attachCategory($postId, $categoryId);
}

echo "Seeding done!";