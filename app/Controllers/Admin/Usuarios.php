<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{

     private $usuarioModel;

     public function __construct(){
  
        $this->usuarioModel = new \App\Models\UsuarioModel();

     }


    /**
     *  Função que retorna todos os usuários um objeto para o Index
     * Param int $id
     * @return objeto usuário
     * 
     */
	public function index()
	{

        $data = [
            'titulo' => 'Listando os Usuários',
            'usuarios' => $this->usuarioModel->findAll(),

        ];

       return view('Admin/Usuarios/index', $data);

	}


    /**
     *  Função que procura via requisição AJAX 
     *  no show
     * Param int $id
     * @return objeto usuário
     * 
     */
    public function procurar()
    {

       if ( !$this->request->isAJAX() ){
       	   exit('Página não encontrada.');
       }


      $usuarios = $this->usuarioModel->procurar($this->request->getGet('term'));

        $retorno = [];

        foreach ( $usuarios as $usuario ){
        	$data['id'] = $usuario->id;
        	$data['value'] = $usuario->nome;

        	$retorno[] = $data;
        }

        return $this->response->setJSON($retorno);

    }
 
    /**
     *  Função Utilizada para mostrar o Objeto Usuario caso ele exista
     *  no show
     * Param int $id
     * @return objeto usuário
     * 
     */
   public function show($id = null){
       
      $usuario = $this->buscaUsuarioOu404($id);

      $data = [
           'titulo' => "Detalhando o usuário $usuario->nome",
           'usuario' => $usuario,

      ];

       return view('Admin/Usuarios/show', $data);

   }


    /**
     *  Função Utilizada para editar o Objeto Usuario caso ele exista
     *  no show
     * Param int $id
     * @return objeto usuário
     * 
     */
   public function editar($id = null){
       
      $usuario = $this->buscaUsuarioOu404($id);

      $data = [
           'titulo' => "Editando o usuário $usuario->nome",
           'usuario' => $usuario,

      ];

       return view('Admin/Usuarios/editar', $data);

   }


    /**
     *  Função Utilizada para buscar o usuário via Ajax ou retornar um 
     *  erro 404
     * Param int $id
     * @return objeto usuário
     * 
     */
   private function buscaUsuarioOu404(int $id = null){
       
       if ( !$id || !$usuario = $this->usuarioModel->where('id', $id)->first() ){
  
          throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");
       }

       return $usuario;
   }



}
