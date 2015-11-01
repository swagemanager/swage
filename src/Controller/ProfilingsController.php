<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;

class ProfilingsController extends AppController {

    public $name = 'Profiling';

    public function index() {
        $cakeDescription = 'Parallax Template - Materialize';
        $this->set(compact('cakeDescription'));
        $this->viewBuilder()->layout('profiling');
    }

    public function contact() {
        $cakeDescription = 'Parallax Template - Materialize';
        $this->set(compact('cakeDescription'));
        $this->viewBuilder()->layout('profiling');
    }

    public function about() {
        $cakeDescription = 'Parallax Template - Materialize';
        $this->set(compact('cakeDescription'));
        $this->viewBuilder()->layout('profiling');
    }

    public function send() {
        $this->disabledlayout();

        $return = array();
        $return['status'] = 'danger';
        $return['error_msg'] = "";

        $contact = new ContactForm();
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->data) == 'true') {
                $this->Flash->success('Nós entraremos em contato com você em breve.');
            } else {
                $return['error_msg'] = $contact->execute($this->request->data);
                $return['dialog'] = $this->Flash->error('Houve um problema ao enviar o formulário.');
            }
        }
        echo json_encode($return);
    }

}
