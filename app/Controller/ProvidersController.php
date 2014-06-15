<?php
class ProvidersController extends AppController {

    public function addAsClientOf($id) {
        if ($this->request->is('post')) {
            if ($this->Provider->save($this->request->data)) {
                $this->Session->setFlash('La relación empresa-cliente se ha guardado.');
                $this->redirect(array('controller' => 'Empresas', 'action' => 'view', $id));
            }
        } else {
            $this->set('empresas', $this->Provider->Empresa->find('list'));
        }
    }

    public function addAsProviderOf($id) {
        if ($this->request->is('post')) {
            if ($this->Provider->save($this->request->data)) {
                $this->Session->setFlash('La relación proveedor-empresa se ha guardado.');
                $this->redirect(array('controller' => 'Empresas', 'action' => 'view', $id));
            }
        } else {
            $this->set('empresas', $this->Provider->Empresa->find('list'));
        }
    }
}