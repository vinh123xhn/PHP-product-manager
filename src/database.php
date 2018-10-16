<?php

/**
 * Created by PhpStorm.
 * User: dungda
 * Date: 9/14/18
 * Time: 3:30 PM
 */

class Database
{
    private $url = NULL;
    private $user_name = NULL;
    private $password = NULL;

    public function connect($user, $password, $dbName) {
        $this->user_name = $user;
        $this->password = $password;
        $this->url = "mysql:host=localhost;dbname=$dbName";

        try {
            $conn = new PDO($this->url, $this->user_name, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        return NULL;
    }
}