<?php
include 'company.php';
class department extends company{
    public $departmentName;

    public function __construct($companyName,$departmentName) {
        $this->companyName = $companyName;
        $this->departmentName = $departmentName;
      }

    public function setDepartmentName($departmentName) {
        $this->departmentName = $departmentName;
      }
    public function getDepartmentName() {
        return $this->departmentName;
      }


}
?>