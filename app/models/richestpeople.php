<?php
class richestpeople

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
  public function getrichestpeople()
  {
    $this->db->query("SELECT * FROM `richestpeople` ORDER BY vermogen DESC;");
    $result = $this->db->resultSet();
    return $result;
  }

  // Delete richest person
  public function deleterichestpeople($id)
  {
    $this->db->query("DELETE FROM `richestpeople` WHERE id = :id");
    $this->db->bind("id", $id, PDO::PARAM_INT);
    return $this->db->execute();
  }




}

?>
