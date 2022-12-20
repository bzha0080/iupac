<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Kineticdata Controller
 *
 * @property \App\Model\Table\KineticdataTable $Kineticdata
 * @method \App\Model\Entity\Kineticdata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KineticdataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $kineticdata = $this->paginate($this->Kineticdata);

        $this->set(compact('kineticdata'));
    }

    /**
     * View method
     *
     * @param string|null $id Kineticdata id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kineticdata = $this->Kineticdata->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('kineticdata'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kineticdata = $this->Kineticdata->newEmptyEntity();
        if ($this->request->is('post')) {
            $kineticdata = $this->Kineticdata->patchEntity($kineticdata, $this->request->getData());
            if ($this->Kineticdata->save($kineticdata)) {
                $this->Flash->success(__('The kineticdata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kineticdata could not be saved. Please, try again.'));
        }
        $this->set(compact('kineticdata'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kineticdata id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kineticdata = $this->Kineticdata->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kineticdata = $this->Kineticdata->patchEntity($kineticdata, $this->request->getData());
            if ($this->Kineticdata->save($kineticdata)) {
                $this->Flash->success(__('The kineticdata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kineticdata could not be saved. Please, try again.'));
        }
        $this->set(compact('kineticdata'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kineticdata id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kineticdata = $this->Kineticdata->get($id);
        if ($this->Kineticdata->delete($kineticdata)) {
            $this->Flash->success(__('The kineticdata has been deleted.'));
        } else {
            $this->Flash->error(__('The kineticdata could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
