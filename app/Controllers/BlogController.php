<?php
namespace App\Controllers;

use App\Core\Flash;
use App\Core\Response;
use App\Core\View;
use App\Models\Category;
use App\Models\Post;


class BlogController {

    public function category($slug) {

        $categoryModel = new Category();
        $postModel = new Post();

        // Получаем категорию
        $category = $categoryModel->getBySlug($slug);
        $categories = $categoryModel::all();

        if (!$category) {
            Flash::set('error', 'Категория не найдена');

            Response::redirect('/category');
        }


        //  Сортировка
        $sort = $_GET['sort'] ?? 'date';

        //  Пагинация
        $page = $_GET['page'] ?? 1;
        $page = (int)$page;
        if ($page < 1) $page = 1;

        $limit = 2;
        $offset = ($page - 1) * $limit;

        //
        $posts = $postModel->getPostsByCategory(
            $category['id'],
            $sort,
            $limit,
            $offset
        );

        //print_r($posts);

        //  Общее количество
        $totalPosts = $postModel->getPostsCountByCategory($category['id']);

        $totalPages = ceil($totalPosts / $limit);


        View::render('blog/category', [
            'categories' => $categories,
            'category' => $category,
            'posts' => $posts,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'sort' => $sort
        ]);
    }


    public function show($slug)
    {
        $postModel = new \App\Models\Post();

        // 1. Получаем статью
        $post = $postModel->getBySlug($slug);

        if (!$post) {
            die('Статья не найдена');
        }

        // 2. Получаем категории статьи
        $categories = $postModel->getCategoriesByPost($post['id']);

        // берем первую категорию для похожих
        $categoryId = $categories[0]['id'] ?? null;

        // 3. Похожие статьи
        $relatedPosts = [];

        if ($categoryId) {
            $relatedPosts = $postModel->getRelatedPosts(
                $categoryId,
                $post['id'],
                3
            );
        }

        View::render('blog/post', [
            'post' => $post,
            'categories' => $categories,
            'relatedPosts' => $relatedPosts
        ]);
    }

    public function redirectToHome()
    {
        header('Location: /');
        exit;
    }




}