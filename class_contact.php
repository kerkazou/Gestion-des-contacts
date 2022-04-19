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
        public static function insert($username , $phone , $email , $adress , $id) {
            $result = ConData::query("INSERT INTO contacts VALUES(NULL , '$username' , '$email' ,'$phone' , '$adress' , '$id')");
            return $result;
        }

        // update contact
        public static function update($username , $phone , $email , $adress , $idc) {
            
            $result = ConData::query("UPDATE contacts SET username = '$username', email = '$email', phone = '$phone', adress = '$adress' WHERE idc=$idc");
            return $result;
        }

        // dalete contact
        public static function delete($idc) {
            $result = ConData::query("DELETE FROM contacts WHERE idc=$idc");
            return $result;
        }
    }
    // $contact = new Contact();

    // echo $_SERVER['REQUEST_URI'];
