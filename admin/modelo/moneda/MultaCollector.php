<?php

    include_once('Ciudad.php');
    include_once('../Collector.php');

    class CiudadCollector extends Collector{

        function showCiudads() {
                $rows = self::$db->getRows("SELECT * FROM ciudad ");
                $arrayMulta= array();        
                foreach ($rows as $c){
                    $aux = new Ciudad($c{'id_serial'},$c{'nombre'},$c{'id_moneda'});
                    array_push($arrayCiudad, $aux);
                }
                return $arrayCiudad;        
        }

        function showCiudad($id_serial) {
                $row = self::$db->getRows("SELECT * FROM ciudad WHERE id_ciudad='$id_ciudad'");
                $aux = new Ciudad($row[0]{'id_ciudad'},$row[0]{'nombre'},$row[0]{'id_moneda'});
                return $aux;        
        }
        
        function createCiudad($nomre,$id_moneda){
                $rows = self::$db->insertRow("INSERT INTO ciudad (nombre, id_moneda) VALUES ('$nombre','$id_moneda')",null);
        
        }
        
        function updateCiudad($id_serial, $nombre, $id_moneda) {
                $rows = self::$db->updateRow("UPDATE ciudad SET nombre='$nombre', id_moneda='$id_moneda' WHERE id_serial='$id_serial'",null);

        }
        
        function deleteCiudad($id_serial) {
                 $rows = self::$db->deleteRow("DELETE FROM ciudad WHERE id_serial=$id_serial",null);


        }
        
        function validarCiudad($nombre, $id_moneda){
                $rows = self::$db->getRows("SELECT * FROM ciudad WHERE nomre='$nombre'AND id_moneda='$id_moneda'");
                foreach ($rows as $c){
                  $aux = new Ciudad($c{'id_serial'},$c{'nombre'},$c{'id_moneda'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarCiudad($nombre) {
                $rows = self::$db->getRows("SELECT * FROM ciudad WHERE nombre='$nombre'");               
                foreach ($rows as $c){
                  $aux = new Ciudad($c{'id_serial'},$c{'nombre'},$c{'id_moneda'});
                  return 1;
                }
                return 0;          
            }
    }
?>
