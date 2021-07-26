<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
	public function run()
	{
		
      
       $usuarioModel = new \App\Models\UsuarioModel;

       $usuario = [
  
          'nome' => 'Thiago de casto',
          'cpf'  => '042.292.936.07',
          'email' => 'admin@admin.com',
          'telefone' => '619955599',
         
       ];

      $usuarioModel->protect(false)->insert($usuario);

       $usuario = [
  
          'nome' => 'André Santana',
          'cpf'  => '042.292.936.08',
          'email' => 'andre@email.com',
          'telefone' => '6188889999',
         
       ];

      $usuarioModel->protect(false)->insert($usuario);

      dd($usuarioModel->errors());

	}
}
