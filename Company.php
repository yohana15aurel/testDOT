<?php
class company{

    public $companyName;

    public function __construct($companyName) {
        $this->companyName = $companyName;
      }

    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
      }
    public function getCompanyName() {
        return $this->companyName;
      }

}
?>