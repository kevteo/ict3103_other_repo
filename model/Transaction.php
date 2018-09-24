<?php

class Transaction {
    public $amount;
    public $userID;
    public $transactionID;
    public $payeeID;
    public $datetime;
    
    function __construct($amount, $userID, $transactionID = null, $payeeID = null, $datetime = null) {
        if ($datetime == null) {
            $date = new DateTime();
            $datetime = $date->format('Y-m-d H-i-s');
        }
    
        $this->transactionID = $transactionID;
        $this->amount = $amount;
        $this->userID = $userID;
        $this->payeeID = $payeeID;
        $this->datetime = $datetime;
    }
}