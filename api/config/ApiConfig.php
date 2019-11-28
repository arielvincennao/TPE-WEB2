<?php
class ApiConfig
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentarios#GET'=> 'CommentsController#GetComments',
      'comentarios#DELETE'=> 'CommentsController#DeleteComment',
      'comentarios#POST'=> 'CommentsController#InsertComment',
    ];
}
?>
