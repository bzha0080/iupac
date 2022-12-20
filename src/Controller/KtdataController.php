<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ktdata Controller
 *
 * @property \App\Model\Table\KtdataTable $Ktdata
 * @method \App\Model\Entity\Ktdata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KtdataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Monomers'],
        ];
        $ktdata = $this->paginate($this->Ktdata);

        $this->set(compact('ktdata'));
    }

    /**
     * View method
     *
     * @param string|null $id Ktdata id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ktdata = $this->Ktdata->get($id, [
            'contain' => ['Monomers'],
        ]);

        $this->set(compact('ktdata'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ktdata = $this->Ktdata->newEmptyEntity();
        if ($this->request->is('post')) {
            $ktdata = $this->Ktdata->patchEntity($ktdata, $this->request->getData());
            if ($this->Ktdata->save($ktdata)) {
                $this->Flash->success(__('The ktdata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ktdata could not be saved. Please, try again.'));
        }
        $monomers = $this->Ktdata->Monomers->find('list', ['limit' => 200])->all();
        $this->set(compact('ktdata', 'monomers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ktdata id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ktdata = $this->Ktdata->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ktdata = $this->Ktdata->patchEntity($ktdata, $this->request->getData());
            if ($this->Ktdata->save($ktdata)) {
                $this->Flash->success(__('The ktdata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ktdata could not be saved. Please, try again.'));
        }
        $monomers = $this->Ktdata->Monomers->find('list', ['limit' => 200])->all();
        $this->set(compact('ktdata', 'monomers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ktdata id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ktdata = $this->Ktdata->get($id);
        if ($this->Ktdata->delete($ktdata)) {
            $this->Flash->success(__('The ktdata has been deleted.'));
        } else {
            $this->Flash->error(__('The ktdata could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
