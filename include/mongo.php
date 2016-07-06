<?php
  class mongo {
  public function mongo(){
  $connection = new MongoClient();
  $db = $connection->test;
  }
  function insert($data) {
  $insertCollection = $this->$db->$name;
  $document = array();
  }
}
?>
