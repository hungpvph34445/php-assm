<?php
// require_once 'app/models/BaseModel.php';
namespace App\Models;

class Student extends BaseModel{
    protected $table = 'sinh_vien';
     public function getListStudent() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}

?>