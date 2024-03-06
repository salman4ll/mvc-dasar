<?php

class Home_model extends Model {
    public function getAllProducts() {
        return $this->getAll("product");
    }
}
?>
