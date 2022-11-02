<?php
class auto

{
  // Properties, fields
  private $db;

  // Dit is de constructor
  public function __construct()
  {
    $this->db = new Database();
  }



  // Get all richest people
  // Sort by networth from highest to lowest
  public function getauto()
  {
    $this->db->query("SELECT * FROM `auto` ORDER BY ramen DESC;");
    $result = $this->db->resultSet();
    return $result;
  }

  // Delete richest person
  public function deleteauto($id)
  {
    $this->db->query("DELETE FROM `auto` WHERE id = :id");
    $this->db->bind("id", $id, PDO::PARAM_INT);
    return $this->db->execute();
  }




}

?>
