<?php

class User {
    public $role;
    public $name;
    public $nric;
    public $mobileNumber;
    public $email;
	public $address; // new column
	public $account; // new column
	public $salary; // new column
    public $username;
    public $password;
    public $userID;
    public $balance;
    public $status; //  0:Pending Manager Approval | 1:Pending Admin Approval | 2:Approved
    public $isActive;
    public $requestToggleActive;
    public $lastActive;
    public $isTerminated;
    public $monthStartBalance;
    public $monthMinBalance;
    
    function __construct($role, $name, $nric, $mobileNumber, $email, $address ,$account ,$salary , $password = null, $username = null, $userID = null, 
	$balance = '0', $status = 0, $isActive = 1, $requestToggleActive = 0, $lastActive = null, $isTerminated = 0) {
        if ($lastActive == null) {
            $date = new DateTime();
            $lastActive = $date->format('Y-m-d H-i-s');
        }
        
        $this->userID = $userID;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->name = $name;
        $this->nric = $nric;
        $this->mobileNumber = $mobileNumber;
        $this->email = $email;
		$this->address = $address;
		$this->account = $account;
		$this->salary = $salary;
        $this->balance = $balance;
        $this->status = $status;
        $this->isActive = $isActive;
        $this->requestToggleActive = $requestToggleActive;
        $this->lastActive = $lastActive;
        $this->isTerminated = $isTerminated;
    }
}