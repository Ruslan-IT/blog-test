<?php
namespace App\Core;

use PDO;
use PDOException;

class Model {
    protected static function db() {
        static $db = null;
        if ($db === null) {
            $config = require __DIR__ . '/../../config/database.php';

            $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8";

            try {
                $db = new PDO($dsn, $config['user'], $config['password']);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Ошибка подключения: " . $e->getMessage());
            }
        }

        return $db;
    }

    /**
     *
     * Получить все записи
     *
     */
    public static function all() {
        $table = static::$table;
        $stmt = self::db()->query("SELECT * FROM `$table`");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *
     *
     * Найти по ID
     */
    public static function find($id) {
        $table = static::$table;
        $stmt = self::db()->prepare("SELECT * FROM `$table` WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     *
     * Получит, последние посты по категории
     *
     */

    public static function getLatestPostsByCategory($categoryId, $limit)
    {
        $table = static::$table;
        $limit = (int)$limit;

        $sql = "
        SELECT p.*
        FROM `$table` p
        JOIN post_category pc ON p.id = pc.post_id
        WHERE pc.category_id = :category_id
        ORDER BY p.created_at DESC
        LIMIT $limit
    ";

        $stmt = self::db()->prepare($sql);

        $stmt->execute([
            'category_id' => $categoryId
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    /**
     *
     * Найти по условию (WHERE)
     *
     */
    public static function where($column, $value) {
        $table = static::$table;
        $sql = "SELECT * FROM `$table` WHERE `$column` = :value";
        $stmt = self::db()->prepare($sql);
        $stmt->execute(['value' => $value]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *
     * Найти первую запись по условию
     *
     */
    public static function first($column, $value) {
        $table = static::$table;
        $sql = "SELECT * FROM `$table` WHERE `$column` = :value LIMIT 1";
        $stmt = self::db()->prepare($sql);
        $stmt->execute(['value' => $value]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     *
     * Создать запись
     *
     */
    public static function create(array $data) {
        $table = static::$table;

        $columns = array_keys($data);
        $fields = "`" . implode("`, `", $columns) . "`";
        $placeholders = ":" . implode(", :", $columns);

        $sql = "INSERT INTO `$table` ($fields) VALUES ($placeholders)";

        $stmt = self::db()->prepare($sql);
        $stmt->execute($data);

        return self::find(self::db()->lastInsertId());
    }

    /**
     *
     *
     * Обновить запись по ID
     *
     */
    public static function update($id, array $data) {
        $table = static::$table;

        $set = [];
        foreach ($data as $col => $val) {
            $set[] = "`$col` = :$col";
        }
        $setStr = implode(", ", $set);

        $data['id'] = $id;

        $sql = "UPDATE `$table` SET $setStr WHERE id = :id";

        $stmt = self::db()->prepare($sql);
        $stmt->execute($data);

        return self::find($id);
    }

    /**
     *
     * Удалить запись по ID
     *
     */
    public static function delete($id) {
        $table = static::$table;

        $stmt = self::db()->prepare("DELETE FROM `$table` WHERE id = :id LIMIT 1");
        
        $stmt->execute(['id' => $id]);
        
        return $stmt->rowCount();
    }


    /*
     *
     * ПОЛУЧЕНИЕ ПО URL
     *
     */
    public function getBySlug($slug)
    {
        $table = static::$table;

        $stmt = self::db()->prepare("SELECT * FROM `$table` WHERE slug = :slug LIMIT 1");
        $stmt->execute(['slug' => $slug]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }


    /*
     *
     *
     * ПОЛУЧЕНИЕ ПОСТОВ
     */


    public function getPostsByCategory($categoryId, $sort, $limit, $offset)
    {
        $limit = (int)$limit;
        $offset = (int)$offset;

        // сортировка
        $orderBy = 'p.created_at DESC';

        if ($sort === 'views') {
            $orderBy = 'p.views DESC';
        }

        $sql = "
        SELECT p.*
        FROM posts p
        JOIN post_category pc ON p.id = pc.post_id
        WHERE pc.category_id = :category_id
        ORDER BY $orderBy
        LIMIT $limit OFFSET $offset
    ";

        $stmt = self::db()->prepare($sql);
        $stmt->execute(['category_id' => $categoryId]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /*
     *
     * Количество постов
     * */

    public function getPostsCountByCategory($categoryId)
    {
        $sql = "
        SELECT COUNT(*) as total
        FROM post_category
        WHERE category_id = :category_id
    ";

        $stmt = self::db()->prepare($sql);
        $stmt->execute(['category_id' => $categoryId]);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        // $r = 1;

        return $result['total'];
    }

    /*
     *
     *Категории статьи
     *
     */

    public function getCategoriesByPost($postId)
    {
        $stmt = self::db()->prepare("
        SELECT c.*
        FROM categories c
        JOIN post_category pc ON c.id = pc.category_id
        WHERE pc.post_id = :post_id
    ");

        $stmt->execute(['post_id' => $postId]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    /*
     *
     *
     * Похожие статьи (3 штуки)
     *
     * */

    public function getRelatedPosts($categoryId, $currentPostId, $limit)
    {
        $limit = (int)$limit;

        $sql = "
        SELECT p.*
        FROM posts p
        JOIN post_category pc ON p.id = pc.post_id
        WHERE pc.category_id = :category_id
        AND p.id != :current_post
        ORDER BY p.created_at DESC
        LIMIT $limit
    ";

        $stmt = self::db()->prepare($sql);

        $stmt->execute([
            'category_id' => $categoryId,
            'current_post' => $currentPostId
        ]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function attachCategory($postId, $categoryId)
    {
        $stmt = self::db()->prepare("
        INSERT INTO post_category (post_id, category_id)
        VALUES (:post_id, :category_id)
    ");

        $stmt->execute([
            'post_id' => $postId,
            'category_id' => $categoryId
        ]);
    }


    public static function getPostsByCategoryAll($categoryId)
    {
        $table = static::$table;

        $sql = "
            SELECT p.*
            FROM `$table` p
            JOIN post_category pc ON p.id = pc.post_id
            WHERE pc.category_id = :category_id
            ORDER BY p.created_at DESC
        ";

        $stmt = self::db()->prepare($sql);
        $stmt->execute(['category_id' => $categoryId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }









}
