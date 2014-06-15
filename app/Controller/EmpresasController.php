<?php
class EmpresasController extends AppController {

	public $components = array('RequestHandler');

    function index() {
        $this->set('empresas', $this->Empresa->find('all'));
    }

    public function view($id = null) {
        $this->Empresa->id = $id;
		$this->set('empresa', $this->Empresa->query("
			SELECT id, nombre, sector FROM `empresas` WHERE `id` = ".$id." LIMIT 1"));

		$this->set('clientes', $this->Empresa->query("
			SELECT `providers`.`id`, empresa_id, nombre FROM `providers`, `empresas` WHERE `empresas`.`id`=`empresa_id` and `cliente_id` = ".$id));
    
		$this->set('proveedores', $this->Empresa->query("
			SELECT `providers`.`id`, cliente_id, nombre FROM `providers`, `empresas` WHERE `empresas`.`id`=`cliente_id` and `empresa_id` = ".$id));
	}

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Empresa->save($this->request->data)) {
                $this->Session->setFlash('La empresa se ha guardado.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
	    $this->Empresa->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Empresa->read(); 
		} else {
			if ($this->Empresa->save($this->request->data)) { 
				$this->Session->setFlash('La empresa se ha modificado.'); 
				$this->redirect(array('action' => 'index'));
			} 
		}
	}

	function delete($id) {
	    if (!$this->request->is('post')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Empresa->delete($id)) {
	    	$this->Empresa->query("DELETE FROM `providers` WHERE empresa_id = ".$id." OR cliente_id = ".$id);
	        $this->Session->setFlash('La empresa con Id: ' . $id . ' se ha eliminado.');
	        $this->redirect(array('action' => 'index'));
	    }
	}

	function deleteRelation($parent, $id) {
	    if (!$this->request->is('post')) {
	        throw new MethodNotAllowedException();
	    }
		$this->Empresa->query("DELETE FROM `providers` WHERE id = ".$id);
	    $this->Session->setFlash('La empresa relacionada con Id: ' . $id . ' se ha eliminado.');
	    $this->redirect(array('action' => 'view', $parent));
	}

	public function addAsClientOf($id) {
		$this->redirect(array('controller' => 'Providers', 'action' => 'addAsClientOf', $id));
	}

	public function addAsProviderOf($id) {
		$this->redirect(array('controller' => 'Providers', 'action' => 'addAsProviderOf', $id));
	}

	public function graph() {
        $this->set('relations', $this->Empresa->query("
			SELECT `empresas`.`id`, nombre, empresa_id, cliente_id FROM `providers` LEFT JOIN `empresas` ON (`empresas`.`id` = empresa_id or `empresas`.`id` = cliente_id)"));
        $this->set("_serialize", array('relations'));
	}

}