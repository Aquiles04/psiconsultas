<?php 

class DocumentosController extends AppController {
  
    // public $uses = array();
    
    // public $components = array('Documento');
    
    // public function initialize()
    // {
    //     parent::initialize();
    //     $this->loadComponent('Documento');
        
    // }
    public $helpers = array ('Html','Form');

    public $name = 'Documentos';
  	
    
    public function upload()
    {
        // if( !empty( $this->request->data ) )
        // {
        //     $this->Documento->save($this->request->data);
        //     $this->Flash->success('Documento salvo com sucesso.', array('class'=>'alert alert-success alert-dismissible'));
        // }
        $filename = null;
        
        if (!empty($this->request->data['Documento']['uploadFile']['tmp_name'])&& is_uploaded_file($this->request->data['Documento']['uploadFile']['tmp_name']))
        {
            // Strip path information
            $filename = basename($this->request->data['Documento']['uploadFile']['name']); 
            move_uploaded_file( $this->data['Documento']['uploadFile']['tmp_name'], WWW_ROOT . DS . 'files' . DS . $filename );
            $this->Documento->save($this->request->data);
            $this->Flash->success('Plano salvo com sucesso.', array('class'=>'alert alert-success alert-dismissible'));

        }else {
                $this->Session->setFlash('Um erro occoreu, Por favor tente novamente mais tarde!');
            }
    }


	function index()
	{
		$this->set('Documento', $this->Documento->find('all'));
	}
	
// 	public function upload() {
//         if ($this->request->is('post')) {
//             //debug($this->request->data);die;
//             if ($this->Documento->save($this->request->data['Documento']['file'])) {
//                 $this->Flash->success('Documento salvo com sucesso.', array('class'=>'alert alert-success alert-dismissible'));
//                 $this->redirect(array('action' => 'index'));
//             }else {
//                 $this->Session->setFlash('Error occured, Please try agan later!');
//             }
//         }
//     }
    
//     function delete($id) {
//         if (!$this->request->is('post')) {
//             throw new MethodNotAllowedException();
//         }
//         if ($this->Documento->delete($id)) {
//             $this->Flash->success('Documento deletado');
//             $this->redirect(array('action' => 'index'));
//         }
//     }
	
// 	 public function view($id = null) {
//         $this->set('documento', $this->Post->findById($id));
//     }
    
    /**
     * Organiza o upload.
     * @access public
     * @param Array $imagem
     * @param String $data
    */ 
    // public function upload($imagem = array(), $dir = 'img')
    // {
    //     $dir = WWW_ROOT.$dir.DS;
        
    //     // teoricamente so deve dar erro depois de post, entao essa variavel n existe ainda, faz validação se é post $this->request->is('post') aqui ó
    //     if($this->request->is('post')){
            
    //         if(($imagem['error']!=0) and ($imagem['size']==0)) {
    //             throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '.$imagem['error'].' e tamanho '.$imagem['size']);
    //         }
    //     }
    
    //     $this->checa_dir($dir);
    
    //     $imagem = $this->checa_nome($imagem, $dir);
    
    //     $this->move_arquivos($imagem, $dir);
    
    //     return $imagem['name'];
    // }

    // /**
    //  * Verifica se o diretório existe, se não ele cria.
    //  * @access public
    //  * @param Array $imagem
    //  * @param String $data
    // */ 
    // public function checa_dir($dir)
    // {
    //     App::uses('Folder', 'Utility');
    //     $folder = new Folder();
    //     if (!is_dir($dir)){
    //         $folder->create($dir);
    //     }
    // }
    
    // /**
    //  * Verifica se o nome do arquivo já existe, se existir adiciona um numero ao nome e verifica novamente
    //  * @access public
    //  * @param Array $imagem
    //  * @param String $data
    //  * @return nome da imagem
    // */ 
    // public function checa_nome($imagem, $dir)
    // {
    //     $imagem_info = pathinfo($dir.$imagem['name']);
    //     $imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$imagem_info['extension'];
    //     debug($imagem_nome);
    //     $conta = 2;
    //     while (file_exists($dir.$imagem_nome)) {
    //         $imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;
    //         $imagem_nome .= '.'.$imagem_info['extension'];
    //         $conta++;
    //         debug($imagem_nome);
    //     }
    //     $imagem['name'] = $imagem_nome;
    //     return $imagem;
    // }
    
    /**
     * Trata o nome removendo espaços, acentos e caracteres em maiúsculo.
     * @access public
     * @param Array $imagem
     * @param String $data
    */ 
    // public function trata_nome($imagem_nome)
    // {
    //     $imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));
    //     return $imagem_nome;
    // }
    
    // /**
    //  * Move o arquivo para a pasta de destino.
    //  * @access public
    //  * @param Array $imagem
    //  * @param String $data
    // */ 
    // public function move_arquivos($imagem, $dir)
    // {
    //     App::uses('File', 'Utility');
    //     $arquivo = new File($imagem['tmp_name']);
    //     $arquivo->copy($dir.$imagem['name']);
    //     $arquivo->close();
    // }
    
    
    
    // function delete($id) {
    //     if (!$this->request->is('documento')) {
    //         throw new MethodNotAllowedException();
    //     }
    //     if ($this->Post->delete($id)) {
    //         $this->Flash->success('O documento com id: ' . $id . ' foi deletado.');
    //         $this->redirect(array('action' => 'index'));
    //     }
    // }
    }
?>