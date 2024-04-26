<?php namespace App\Models;

    use CodeIgniter\Model;

    class CrudModel extends Model{

        public function listar(){
            $Nombres = $this->db->query("SELECT * FROM t_personas");
            return $Nombres->getResult();
        }

        public function insertar($datos){
            $Nombres = $this->db->table('t_personas');
            $Nombres->insert($datos);

            return $this->db->insertID();
        }

    }
?>