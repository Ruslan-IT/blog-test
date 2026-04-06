<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

   protected static $table = 'users';

    public static function findByEmail(string $email): ?object
    {
        $stmt = self::db()->
        prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $data = $stmt->fetch();
        return $data ? (object)$data : null;
    }

   /* public static function create($name, $email, $password)
    {
        $stmt = self::db()->prepare(
            "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)"
        );
        return $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }*/

    public static function updateToken($token, $user)
    {
        $stmt = self::db()->prepare("UPDATE users SET remember_token = :token WHERE id = :id");
        $stmt->execute(['token' => $token, 'id' => $user->id]);

    }


    public static function findByToken($token)
    {
        $stmt = self::db()->prepare("SELECT * FROM users WHERE remember_token = :token LIMIT 1");
        $stmt->execute(['token' => $token]);
        return $stmt->fetchObject();
    }

}