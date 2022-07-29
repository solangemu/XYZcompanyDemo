<?php

class Client {
    
   
    private $UserName;
    private $Balance;
    private $receiver;
    private $balace1;

    public function __construct($UserName,$Balance){
        $this->UserName = $UserName;
        $this->Balance = $Balance;
    }

    public function CreateAccount(){
        echo "Your Account created<br>";
        echo "Your userName is: $this->UserName "." And Youre Bonus Balanc is".$this->Balance."<br>";
    }

    public function SendMoney($receiver,$amount){
        $amount;
        if ($this->Balance < 1) {
            echo "No Balance";
        }else {
            if ($amount <=10000) {
               $balace1 = $this->Balance - $amount;

                echo $this->UserName ."wohereje amafaranga angana na ".$amount ." kuri ".$receiver;
                echo "<br><br>musigaranye amafaranga ".$balace1; 
                
            }elseif ($amount ==10001 || $amount <= 100000) {
                $balace2 = ($this->Balance -$amount) - 200;
                echo $this->UserName ."wohereje amafaranga angana na ".$amount ." kuri ".$receiver;
                echo "<br><br>musigaranye amafaranga ".$balace2." Ikiguzi ni 200"; 
            } 

            elseif ($amount >= 100001) {
                $balace3 = ($this->Balance -$amount) - 1000;
                echo $this->UserName ."wohereje amafaranga angana na ".$amount ." kuri ".$receiver;
                echo "<br><br>musigaranye amafaranga ".$balace3." Ikiguzi ni 1000"; 
            } 
            else {
                echo "ntamafaranga ahagije ariho!";
            }
        }
    }

    public function CheckBalance($Balance1){
        echo "you balance is".$this->balace1;
    }

    public function Deposit($Money)
    {
        $igiteranyo = $this->Balance +$Money;
        echo "amafaranga mufite abaye".$igiteranyo;

        return $igiteranyo;
    }
}

// kora uncomment kugirango ukore igikorwa.

$clientObj = new Client("Solange",3000000);
// $clientObj->CreateAccount();    aha nugukora konti;
$clientObj->SendMoney("enock",2000000); // kohereza amafaranga 
// $clientObj->Deposit(10000);    /// kubitsa amafaranga



?>