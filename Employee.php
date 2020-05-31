<?php
include 'Department.php';
class Employee extends Department{
    public $name;
    public $title;
    public $salary;

    public function __construct($namaCompany,$namaDepartment,$name,$title,$salary) {
        $this->namaCompany = $namaCompany;
        $this->namaDepartment = $namaDepartment;
        $this->name = $name;
        $this->title = $title;
        $this->salary = $salary;
    }
    public function setEmployeeName($name) {
        $this->name = $name;
    }
    public function getEmployeeTitle(){
        return $this->title;
    }

    public function getEmployeeProfile(){
        echo "Profile : <br> 
        Company Name : {$this->namaCompany} <br>
        Department : {$this->namaDepartment} <br>
        Name : {$this->name} <br>
        Title : {$this->title} <br>
        Salary : {$this->salary} <br>";
    }

}
?>