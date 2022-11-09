<?php namespace App\Controllers;

class Cadastros extends BaseController {

//    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \CodeIgniter\HTTP\LoggerInterface $logger)
//    {
//        // Do Not Edit This Line
//        parent::initController($request, $response, $logger);
//
//       // Preload any models, libraries, etc, here.
//
//      $this->session = \Config\Services::session();
//    }



        public function index()
        {
            //Chamar uma view que exibe todas as categorias
            $cadastroModel = new \App\Models\CadastroModel();
            $data['cadastros'] = $cadastroModel->find();
            $data['titulo'] = 'Lista de Cadastros';
//            $data['msg'] = $this->session->getFlashdata('msg');

            echo view('cadastros', $data);
        }
        

        public function inserir()
        {
            $data['titulo'] = 'Inserir novo cadastro';
            $data['acao'] = 'Inserir';
            $data['msg'] = '';

            if($this->request->getMethod() ==='post'){
                $cadastroModel = new \App\Models\CadastroModel();
                $cadastroModel->set('nome', $this->request->getPost('nome'));
                $cadastroModel->set('telefone', $this->request->getPost('telefone'));
                $cadastroModel->set('email', $this->request->getPost('email'));

                if($cadastroModel->insert()){
                    //deu certo
                    $data['msg'] = 'Cadastro concluido com sucesso';
                }
                else{
                    //deu errado
                    $data['msg'] = 'Erro ao adicionar cadastro';
                }
            }

           echo view('cadastros_form', $data);
        }

        public function editar($id)
        {
            $data['titulo'] = 'Editar cadastro ' . $id;
            $data['acao'] = 'Editar';
            $data['msg'] = '';
            $cadastroModel = new \App\Models\CadastroModel();
            $cadastro = $cadastroModel->find($id);

            if($this->request->getMethod() === 'post'){
                //quando o form for submetido
                $cadastro->nome = $this->request->getPost('nome');
                $cadastro->telefone = $this->request->getPost('telefone');
                $cadastro->email = $this->request->getPost('email');
            
                if($cadastroModel->update($id, $cadastro)){
                   $data['msg'] = 'Cadastro editado com sucesso';
                }
                else {
                    $data['msg'] = "Erro ao editar cadastro";
                }
            }
            $data['cadastro'] = $cadastro;
            echo view('cadastros_form', $data);
       }

       public function excluir($id)
       {
        $data['titulo'] = 'excluir cadastro ' . $id;
        $data['acao'] = 'Excluir';
        $data['msg'] = '';
        $cadastroModel = new \App\Models\CadastroModel();
        if($cadastroModel->delete($id)){
            $data['msg'] = 'Cadastro excluido com sucesso';
        }
        else{
            $data['msg'] = "Erro ao excluir cadastro";
        }
        echo view('cadastros_form', $data);
       }
}