<?php
namespace App\Http\Gates;

class ClientGate{
    public function clientGate($user){

          if($user->role ==='client'){
                return true;
            }else{
                return false;
            }
    }
}
?>
