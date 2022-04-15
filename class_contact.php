<?php
    include "connection_database.php";

    class Contact {

        // affichage contact
        public function select($id) {
            $db = ConData::connection_database();
            $sql = "SELECT * FROM contacts WHERE id=$id";
            $contacts = $db->query($sql);
            $result = $contacts->fetchAll();
            return $result;
        }
        
        // ajout contact
        public function insert($username , $phone , $email , $adress , $id) {
            $db = ConData::connection_database();
            $sql = "INSERT INTO contacts VALUES(NULL , '$username' , '$email' ,'$phone' , '$adress' , '$id')";
            $contacts = $db->query($sql);
        }

        // update contact
        public function update($username , $phone , $email , $adress , $idc) {
            $db = ConData::connection_database();
            $sql = "UPDATE contacts SET username = '$username', email = '$email', phone = '$phone', adress = '$adress' WHERE idc=$idc";
            $contacts = $db->query($sql);
        }

        // dalete contact
        public function delete($idc) {
            $db = ConData::connection_database();
            $sql = "DELETE FROM contacts WHERE idc=$idc";
            $contacts = $db->query($sql);
        }
    }
    $contact = new Contact();