<?php
class richestpeoples extends Controller
{
  private $peopleModel;

  public function __construct()
  {                                 //change to you new table name
    $this->peopleModel = $this->model('richestpeople');
  }

  public function delete($id)
  {
    $this->peopleModel->deleterichestpeople($id);

    $data = [
      'title' => "Delete",
      'status' => "Delete succesfull"
    ];

    $this->view('homepages/delete', $data);
  }
}
