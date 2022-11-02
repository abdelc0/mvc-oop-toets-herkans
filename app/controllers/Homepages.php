<?php
class HomePages extends Controller
{
  // Properties, field
  private $peopleModel;

  // Dit is de constructor
  public function __construct()
  {
    $this->peopleModel = $this->model('auto');
  }

  public function index()
  {
    $richestpeople = $this->peopleModel->getrichestpeople();

    $rows = '';
    foreach ($richestpeople as $value) {
      $rows .= "<tr>
                  <td>$value->Name</td>
                  <td>$value->vermogen</td>
                  <td>$value->leeftijd</td>
                  <td>$value->bedrijf</td>
                  <td><a href='" . URLROOT . "/richestpeoples/delete/$value->Id'>delete</a></td>
                </tr>";
    }

    $data = [
      'title' => "Homepage",
      'auto' => $rows
    ];
    $this->view('homepages/index', $data);
  }
}