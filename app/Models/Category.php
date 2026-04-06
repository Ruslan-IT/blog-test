<?php

namespace App\Models;

use App\Core\Model;

class Category extends Model
{

   protected static $table = 'categories';



    public function createSeed($data)
    {
        $stmt = self::db()->prepare("
        INSERT INTO categories (name, slug, description)
        VALUES (:name, :slug, :description)
    ");

        $stmt->execute($data);
    }



}