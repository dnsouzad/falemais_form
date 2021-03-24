<?php 

    class Regiao{
        public static function selectAll(){
            $conn = Connection::getConnection();

            $sql = $conn->prepare("SELECT * FROM regiao");
            $res = $sql->execute();

            if($res != false){
                $result = array();
                while($row = $sql->fetchObject("Regiao")){
                    $result[] = $row;
                } 
                return $result;
            } else {
                throw new Exception("Erro ao consultar Regiao");
            }
        }
    }