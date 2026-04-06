<?php

namespace App\Models;

use App\Core\Model;

class Post extends Model
{

   protected static $table = 'posts';


    public function createSeed($data)
    {
        $stmt = self::db()->prepare("
        INSERT INTO posts (title, slug, description, content, image, views, created_at)
        VALUES (:title, :slug, :description, :content, :image, :views, :created_at)
    ");

        $stmt->execute($data);

        return self::db()->lastInsertId();
    }


}