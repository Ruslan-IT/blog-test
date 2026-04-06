<?php
namespace App\Controllers;

use App\Core\Flash;
use App\Core\Response;
use App\Core\View;
use App\Models\Category;
use App\Models\Post;
use App\Services\PostService;


class BlogController {


    private PostService $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    public function category($slug)
    {
        $sort = $_GET['sort'] ?? 'date';
        $page = (int)($_GET['page'] ?? 1);

        $data = $this->postService->getCategoryPageData($slug, $sort, $page);

        if (!$data) {
            Flash::set('error', 'Категория не найдена');
            Response::redirect('/category');
        }

        View::render('blog/category', [
            'categories' => $this->postService->getAllCategories(),
            'category' => $data['category'],
            'posts' => $data['posts'],
            'currentPage' => $data['currentPage'],
            'totalPages' => $data['totalPages'],
            'sort' => $data['sort']
        ]);
    }


    public function show($slug)
    {
        $data = $this->postService->getPostPageData($slug);

        if (!$data) {
            Flash::set('error', 'Статья не найдена');
            Response::redirect('/');
        }

        View::render('blog/post', [
            'post' => $data['post'],
            'categories' => $data['categories'],
            'relatedPosts' => $data['relatedPosts']
        ]);
    }

    public function redirectToHome()
    {
        header('Location: /');
        exit;
    }




}