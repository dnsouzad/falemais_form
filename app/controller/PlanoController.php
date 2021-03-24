<?php

    class PlanoController{
        public function index(){
            $planos = array();
            $regioes = array();

            try {
                $planos = Plano::selectAll();
                $regioes = Regiao::selectAll();

                include('app/view/plano.php');
            } catch (Exception $e) {
                echo "<script>alert('" . $e->getMessage() . "')</script>";
            }
        }
    }