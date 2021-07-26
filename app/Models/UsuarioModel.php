<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
	protected $table                = 'usuarios';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'App\Entities\Usuario';
	protected $useSoftDeletes       = false;
   protected $deletedField         = 'deletado_em';
	protected $allowedFields        = ['id', 'nome', 'email', 'telefone', 'deletado_em'];



    /**
     * @uso Controller UsuariosModel no método procurar com o autocomplete
     * 
     * @param String $term
     * @return Array usuarios
     * 
     */
    public function procurar($term){
       if ( $term === null ){

       	     return[];

       }
    

       return $this->select('id, nome')
                   ->like('nome', $term )
                   ->get()
                   ->getResult();
    }



}
