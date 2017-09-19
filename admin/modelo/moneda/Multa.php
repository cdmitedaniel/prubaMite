<?php

    class Ciudad
    {
        private $id_serial;
        private $nombre;
        private $id_moneda;


        function __construct($id_serial, $nombre, $valor) {
           $this->id_serial = $id_serial;
           $this->nombre = $nombre;
           $this->id_moneda = $id_moneda;
         }
        
        function set_id_serial($id_serial){
           $this->id_serial = $id_serial;
         } 
         function get_id_serial(){
           return $this->id_serial;
         }

         function set_nombre($nombre){
           $this->nombre = $nombre;
         } 
         function get_nombre(){
           return $this->nombre;
         } 
         function set_id_moneda($id_moneda){
           $this->id_moneda = $id_moneda;
         } 
         function get_id_moneda(){
           return $this->id_moneda;
         } 
    }
?>
