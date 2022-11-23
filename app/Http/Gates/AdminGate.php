<?php
namespace App\Http\Gates;

class AdminGate{
    public function adminGate($user){

          if($user->role ==='admin'){
                return true;
            }else{
                return false;
            }
    }
}
?>
