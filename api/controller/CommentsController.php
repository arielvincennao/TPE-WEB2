<?php
require_once "Api.php";
require_once "./../model/CommentsModel.php";
require_once "./../model/ImagesModel.php";

class CommentsController extends Api{
    private $model;
    function __construct() {
        parent::__construct();
        $this->model = new CommentsModel();
        $this->model_images = new ImagesModel();
    }


  function GetComments($param = null){

    if(isset($param)){
      $id_char = $param[0];
      if (isset($_GET['order'])) {
        $order = $_GET['order'];
      }
      $array = $this->model->GetComment($id_char, $order);
      $data = $array;

    }else{
      $data = $this->model->GetComments();
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }

  }

  function DeleteComment($param = null){
      $id = $param[0];
      $data = $this->model->DeleteComment($id);

      if($data == false){
        return $this->json_response("The comment does not exist", 300);
      }
      else {
      return $this->json_response("Invalid URL", 300);
      }
  }

  function InsertComment($param = null){
    $comment = $this->getJSONData();
    $response = $this->model->InsertComment($comment->rating, $comment->content, $comment->id_char);

    return $this->json_response($response, 200);
  }

}
?>
