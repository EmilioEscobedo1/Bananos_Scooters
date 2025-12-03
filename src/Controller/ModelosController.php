<?php
declare(strict_types=1);

namespace App\Controller;

class ModelosController extends AppController
{

    public function index()
    {
        $query = $this->Modelos->find();
        $modelos = $this->paginate($query);

        $this->set(compact('modelos'));
    }


    public function view($id = null)
    {
        $modelo = $this->Modelos->get($id, contain: ['Vehiculos']);
        $this->set(compact('modelo'));
    }

    public function add()
    {
        $modelo = $this->Modelos->newEmptyEntity();
        if ($this->request->is('post')) {
            $modelo = $this->Modelos->patchEntity($modelo, $this->request->getData());
            if ($this->Modelos->save($modelo)) {
                $this->Flash->success(__('The modelo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modelo could not be saved. Please, try again.'));
        }
        $this->set(compact('modelo'));
    }

    public function edit($id = null)
    {
        $modelo = $this->Modelos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modelo = $this->Modelos->patchEntity($modelo, $this->request->getData());
            if ($this->Modelos->save($modelo)) {
                $this->Flash->success(__('The modelo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modelo could not be saved. Please, try again.'));
        }
        $this->set(compact('modelo'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modelo = $this->Modelos->get($id);
        if ($this->Modelos->delete($modelo)) {
            $this->Flash->success(__('The modelo has been deleted.'));
        } else {
            $this->Flash->error(__('The modelo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
