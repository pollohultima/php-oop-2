<?php

class Product
{
    public $name;
    public $description;
    public $price;

    function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;    
    }
}

class Payment_method
{
    public $name;
    public $taxes;
   
    function __construct($name, $taxes)
    {
        $this->name = $name;
        $this->taxes = $taxes;  
    }
}

class Customer
{
    public $name;
    public $username;
    public $email;
    private $creditcard;

    function __construct($name, $username, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;    
    }

   public function setCreditCard(float $creditcard)
    {
        $this->creditcard =  $creditcard;
    } 
}

class Premium extends Customer
{
    public $points;
    public $grade;
   
    function __construct($name, $username, $email, float $points, string $grade)
    {
        parent::__construct($name, $username, $email);
        $this->points = $points;
        $this->grade = $grade;
    }
} 

 class Pro extends Product
{
    public $bundle;
    public $addon;
   
    function __construct($name, $description, $price, string $bundle, string $addon)
    {
        parent::__construct($name, $description, $price);
        $this->bundle = $bundle;
        $this->addon = $addon;
    }
} 

$customer_1 = new Customer('Mario', 'mr.ario', 'mario@mario.mro');
$customer_1->setCreditCard(646516649846); 

var_dump($customer_1);