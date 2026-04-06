<?php

namespace App\Services;


use App\Models\Category;
use App\Models\Post;

class PostService
{
    public function getCategoryPageData(string $slug, string $sort = 'date', int $page = 1, int $limit = 2): ?array
    {
        //  Получаем категорию
        $category = Category::getBySlug($slug);

        if (!$category) {
            return null;
        }

        // 2 Пагинация
        $page = max(1, $page);
        $offset = ($page - 1) * $limit;


        //  Получаем посты
        $posts = Post::getPostsByCategory(
            $category['id'],
            $sort,
            $limit,
            $offset
        );

        //  Общее количество
        $totalPosts = Post::getPostsCountByCategory($category['id']);
        $totalPages = (int) ceil($totalPosts / $limit);

        return [
            'category' => $category,
            'posts' => $posts,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'sort' => $sort
        ];
    }

    public function getPostPageData(string $slug): ?array
    {
        // 1. Получаем пост
        $post = Post::getBySlug($slug);

        if (!$post) {
            return null;
        }

        // 2. Категории поста
        $categories = Post::getCategoriesByPost($post['id']);

        // 3. Берем первую категорию
        $categoryId = $categories[0]['id'] ?? null;

        // 4. Похожие посты
        $relatedPosts = [];

        if ($categoryId) {
            $relatedPosts = Post::getRelatedPosts(
                $categoryId,
                $post['id'],
                3
            );
        }

        return [
            'post' => $post,
            'categories' => $categories,
            'relatedPosts' => $relatedPosts
        ];
    }

    public function getAllCategories(): array
    {
        return Category::all();
    }
}