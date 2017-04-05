<?php
/**
 * Created by PhpStorm.
 * User: Lina
 * Date: 2017-04-05
 * Time: 09:14
 */
class Book {
    private $title;
    private $author;


    public function __construct($title, $author){
        $this->title = $title;
        $this->author =$author;
    }
    public function getTitle(){
        return  $this->title;
    }
    public function setTitle($new_title){
        $this->title = $new_title;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
}

$mybook = new Book('Pippi Långstrum', 'Astrid Lindgren');
$mybook->setTitle("The Dark Forest");
$mybook->setAuthor("Liu Cixin");
echo "Titel: " . $mybook->getTitle() . "<br>" . "Författare: " .  $mybook->getAuthor() . "<br>";
$mybook->setTitle('The dark forest');


class Account{
    private $balance;
    private  $bank_number;


    public function __construct($balance, $bank_number)
    {
        $this->balance = $balance;
        $this->bank_number = $bank_number;
    }

    public function get_balance(){
        return $this->balance;
    }

    public function get_bank_number(){
        return $this->bank_number;
    }
}

$swedbank = new Account('10000200', '47936492700086');
echo "Balance: " . $swedbank->get_balance() . "<br>" . "Banknumber: " . $swedbank->get_bank_number();
