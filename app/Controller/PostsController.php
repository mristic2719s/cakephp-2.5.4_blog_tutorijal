<?php  

class PostsController extends AppController {

    public $components = array('Session');





public function add($id){

    if($this->request->is('post')){
        $this->Post->create();

        $this->request->data['Post']['topic_id'] = $id;

        $this->request->data['Post']['user_id'] = AuthComponent::user('id');

      if($this->Post->save($this->request->data)){
          $this->Session->setFlash('Post je uspesno kreiran!');
          $this->redirect('index');
      }
        
    }

$this->set('topics', $this->Post->Topic->find('list'));


}


public function index() {
 
    $data = $this->Post->find('all');
    $this->set('posts',$data);
    

}


public function view($id){

    $data = $this->Post->findById($id);
    $this->set('post', $data);

}


}



?>