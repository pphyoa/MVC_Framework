<?php 

class CategoryModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllCategory()
    {
        $this->db->query("SELECT * FROM categories");
        return $this->db->multipleSet();
    }
    public function getCategoryByName($name)
    {
        $this->db->query("SELECT * FROM categories WHERE name=:name");
        $this->db->bind(":name", $name);
        if($this->db->singleSet())
        {
            return true;
        }else{
            return false;
        }
    }
    public function insetCategory($name)
    {
        $this->db->query("INSERT INTO categories (name) VALUES (:name)");
        $this->db->bind(":name", $name);
        return $this->db->execute();
    }
    public function getCategoryById($id)
    {
        $this->db->query("SELECT * FROM categories WHERE id=:id");
        $this->db->bind(":id", $id);
        return $this->db->singleSet();
    }
    public function updateCategory($id,$name)
    {
        $this->db->query("UPDATE categories SET name=:name WHERE id=:id");
        $this->db->bind(":name", $name);
        $this->db->bind(":id", $id);
        return $this->db->execute();
    }
    public function deleteCat($id)
    {
        $this->db->query("DELETE FROM categories WHERE id=:id");
        $this->db->bind(":id", $id);
        return $this->db->execute();
    }
}