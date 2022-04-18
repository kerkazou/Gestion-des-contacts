<?php
    require_once "connection_database.php";

    class Contact {

        // affichage contact ASC (A-Z)
        public static function selectAsc($id) {
            $result = ConData::query("SELECT * FROM contacts WHERE id=$id ORDER BY username ASC");
            return $result;
        }
        // affichage contact DESC (Z-A)
        public static function selectDesc($id) {
            $result = ConData::query("SELECT * FROM contacts WHERE id=$id ORDER BY username DESC");
            return $result;
        }

        
        // ajout contact
        // public function insert($username , $phone , $email , $adress , $id) {
        //     $db = ConData::connection_database();
        //     $sql = "INSERT INTO contacts VALUES(NULL , '$username' , '$email' ,'$phone' , '$adress' , '$id')";
        //     $contacts = $db->query($sql);
        // }

        // update contact
        // public function update($username , $phone , $email , $adress , $idc) {
        //     $db = ConData::connection_database();
        //     $sql = "UPDATE contacts SET username = '$username', email = '$email', phone = '$phone', adress = '$adress' WHERE idc=$idc";
        //     $contacts = $db->query($sql);
        // }

        // dalete contact
        // public function delete($idc) {
        //     $db = ConData::connection_database();
        //     $sql = "DELETE FROM contacts WHERE idc=$idc";
        //     $contacts = $db->query($sql);
        // }
    }
    // $contact = new Contact();

    // echo $_SERVER['REQUEST_URI'];
