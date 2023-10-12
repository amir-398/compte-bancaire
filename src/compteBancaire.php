<?php
// class personne {
//     private $name;
// }
class compteBancaire{
private $solde;
private $name;
public function __construct($name = 'Dupont', $solde = 1000){
    $this->name = $name;
    $this->solde = $solde;
}
public function depot($newSolde){
return $this->solde += $newSolde;
}

public function retrait($retrait) {
    if($retrait > $this->solde ){
        echo "Vous ne pouvez pas retirer plus que votre solde actuel";
    }else {
        return $this->solde -= $retrait;
    }
    
}
public function affiche(){
    echo "Le solde du compte bancaire de " . $this->name . " est de " . $this->solde . " euros.";
}
}
?>