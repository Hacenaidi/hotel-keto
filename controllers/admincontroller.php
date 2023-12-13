<?php
include_once('../../database/config.php');
include_once('../../models/admin.php');
class controllerAdmin extends Connexion{
    function __construct(){
        parent ::__construct();
    }
function rechercheradmin($adr,$mdp){
    $query = "select * from  admin where login = '$adr' and mod2passe = '$mdp'";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function listadmin($id){
    $query = "select * from admin where id = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function listreservation($ch){
    $query = "select prenom,cl.nom,numero_chamber,confirmation,id_chamber,id_client,prix_total,date_fin,date_debut,numero from chamber c, client cl , reservation r where c.id = r.id_chamber and cl.num = r.id_client and r.confirmation = 0 ".$ch;
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function toutreservation(){
    $query = "select prenom,cl.nom,numero_chamber,confirmation,id_chamber,id_client,prix_total,date_fin,date_debut,numero from chamber c, client cl , reservation r where c.id = r.id_chamber and cl.num = r.id_client";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function countusers(){
    $query = "select * from client";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function reservationresquste(){
    $query = "select * from reservation where   confirmation = 0";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function listcontact($ch){
    $query = "select * from contact where reading = 0 ".$ch;
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function toutcontact(){
    $query = "select * from contact";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function EarningsMonthly(){
    $query = "SELECT SUM(prix_total) AS EarningsMonthly FROM reservation WHERE MONTH(date_debut) = MONTH(CURDATE()) AND YEAR(date_debut) = YEAR(CURDATE()) AND confirmation = 1";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetch();
}
function EARNINGSANNUAL(){
    $query = "SELECT SUM(prix_total) AS EarningsAnnual FROM reservation WHERE YEAR(date_debut) = YEAR(CURDATE()) AND confirmation = 1";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetch();
}
function datareservation(){
    $query = "select confirmation , count(confirmation) from reservation group by confirmation";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;

}
function reservation($id){
    $query = "select * from reservation where numero = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;

}
function updatereservation($id,$val){
    $query = "UPDATE reservation SET confirmation = $val WHERE numero = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function updtatetousreservation($id,$l){
    $query = "UPDATE reservation SET confirmation = 2 WHERE numero != $id and id_chamber = $l";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}

function listchamber(){
    $query = "select * from chamber";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function insertionchamber($name,$ndp,$prix,$num,$nom){
    $query = "INSERT INTO chamber(nom, prix, nb_place, url_image, disponibilite, numero_chamber) VALUES ('$name',$prix,$ndp,'$nom',1,$num)";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function updatechamber($id,$val){
    $query = "UPDATE chamber SET disponibilite=$val WHERE id = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
    
}
function deletechamber($id){
    $query = "DELETE FROM chamber WHERE id = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function deleteoffer($id){
    $query = "DELETE FROM offer WHERE id_offer = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function listoffer(){
    $query = "select o.* , nom ,prix from offer o , chamber c where o.id_chamber = c.id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;

}
function insertionoffer($val,$pct,$idc){
    $query = "INSERT INTO offer(validite, id_chamber, pourcentage) VALUES (?,?,?)";
    $res = $this->pdo->prepare($query);
    $res->execute(array($val,$idc,$pct));
    return $res;
}
function offerdonner($id){
    $query = "select * from offer where id_offer = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function getchamber($num){
    $query = "select * from chamber where id = $num";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res->fetch();
}
function modifierchamber($name,$nbp,$prix,$num,$img,$id){
    $query = "UPDATE chamber SET nom=? ,prix=? ,nb_place=? ,url_image=? ,numero_chamber=?  WHERE id = $id";
    $res = $this->pdo->prepare($query);
    $res->execute(array($name,$prix,$nbp,$img,$num));
    return $res;
}
function deleteuser($id){
    $query = "DELETE FROM client WHERE num = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    return $res;
}
function updatcontact($id){
    $query = "UPDATE contact SET reading=1 WHERE id_contact = $id";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
    
}
function updateoffer($val,$pct,$idc,$id){
    $query = "UPDATE offer SET validite=?,id_chamber=?,pourcentage=? WHERE id_offer = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($val,$idc,$pct,$id));
    return $res;
    
}
function updateadmin(Admin $admin){
    $value = array(
        $admin->getLogin(),
        $admin->getMdp(),
        $admin->getNom(),
        $admin->getPrenom()
    );
    $query = "update admin set login= ?,mod2passe=?,nom=?,prenom=? ";
    $res = $this->pdo->prepare($query);
    $res->execute($value);
    return $res;
}
}
?>