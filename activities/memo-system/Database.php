<?php

class Database
{
    private $host = "mysql";
    private $user = "root";
    private $password = "Laravelbootcamp@123";
    private $database_name = "memo_system";

    public function connect_db()
    {
        return new PDO("mysql:host=" . $this->host . ";"
                        . "dbname=" . $this->database_name,
                        $this->user, $this->password);
    }
}
?>