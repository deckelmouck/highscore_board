<?php
include_once('settings.php');

class myDB {
  public function __construct() {
    $this->user = settings::$db_username;
    $this->password = settings::$db_password;
    $this->database = settings::$db_name;
    $this->host = settings::$db_host;
  }
  protected function connect() {
    return new mysqli($this->host, $this->user, $this->password, $this->database);
  }
  public function myquery($query) {
    $db = $this->connect();
    $result = $db->query($query);
    return $result;
  }
}
?>
