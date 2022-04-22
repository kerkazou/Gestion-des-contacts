<?php
    class ConData {
        private static $servername = "localhost";
        private static $username = "root";
        private static $password = "";

        public static function connection_database() {
            $connect = new PDO("mysql:host=".self::$servername.";dbname=gestion_des_contacts", self::$username, self::$password);
            if(!$connect){
                die('error!');
            }
            return $connect;
        }

        public static function query($sql) {
            $db = ConData::connection_database();
            $result = $db->query($sql);
            if($result){
                if(stripos($sql,'SELECT')!==false){
                    return $result->fetchAll();
                }
            }
        }
    }