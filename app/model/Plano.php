<?php 

    class Plano{
        public static function selectAll(){
            $conn = Connection::getConnection();

            $sql = $conn->prepare("SELECT * FROM plano");
            $res = $sql->execute();

            if($res != false){
                $result = array();
                while($row = $sql->fetchObject("Plano")){
                    $result[] = $row;
                } 
                return $result;
            } else {
                throw new Exception("Erro ao consultar planos");
            }
        }
    }