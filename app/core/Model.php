<?php

class Model {
    protected $database;

    public function __construct() {
        $this->database = new mysqli('localhost', 'root', '', 'db_merch_store');
        if ($this->database->connect_error) {
            die("Connection failed: " . $this->database->connect_error);
        }
    }

    public function getAll($table) {
        $result = $this->database->query("SELECT * FROM $table");

        $data = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
}
?>
