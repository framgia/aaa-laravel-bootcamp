<?php
include_once 'Database.php';

class Board
{
    protected static $table_name = "boards";
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect_db();
    }

    // Saves a board records
    public function saveData($boardName, $description)
    {
        $query = "INSERT INTO " . self::$table_name . "(name, description) VALUES(?, ?)";

        $stmt = $this->connection->prepare($query);
        $stmt->execute(array($boardName, $description));

        $this->connection = null;

        return;
    }

    // Returns all the board records
    public static function getAllBoards()
    {
        $database = new Database();
        $connection = $database->connect_db();

        $query = "SELECT * FROM " . self::$table_name;

        $stmt = $connection->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll();

        $connection = null;

        return $row;
    }
}
?>