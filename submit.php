<?php

var_dump($_POST);
exit;
echo "Hello PHP";
echo "<br>";

class Bank{
    public $name;
    public $acc_no;

    public function __construct($name, $acc_no)
    {
        $this->name=$name;
        $this->acc_no=$acc_no;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_acc_no(){
        return $this->acc_no;
    }
    public function __destruct()
    {
        echo "Name: {$this->name} <br> Acc_No: {$this->acc_no}";
    }
}
$Arun = new Bank("Arun", 284382832);
// echo "Name:" .$Arun->get_name();
// echo "<br>";
// echo "Acc_No:" .$Arun->get_acc_no();
