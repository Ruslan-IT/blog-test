<?php
namespace App\Controllers;

use App\Core\View;
use App\Models\Category;
use App\Models\Post;


class HomeController {


    public function index() {

        
        $categories = Category::all();

        $categoriesWithPosts  = [];

        foreach ($categories as $category) {

            // Получаем 3 последних поста этой категории
            $posts = Post::getLatestPostsByCategory($category['id'], 3);

            // (только если есть посты)
            if (!empty($posts)) {
                $categoriesWithPosts[] = [
                    'category' => $category,
                    'posts' => $posts
                ];
            }
        }


        View::render('home/index',  [
            'categories' => $categories,
            'categoriesWithPosts' => $categoriesWithPosts]
        );
    }


    public function getAllPostsByCategory()
    {
        // получаем ID категории из GET/POST запроса
        $categoryId = $_GET['category_id'] ?? null;

        if (!$categoryId) {
            echo json_encode(['error' => 'Category ID missing']);
            exit;
        }

        $posts = Post::getPostsByCategoryAll($categoryId);

        // возвращаем JSON
        echo json_encode($posts);
        exit;
    }




}