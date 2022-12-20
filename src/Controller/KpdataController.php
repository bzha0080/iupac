<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Kpdata Controller
 *
 * @property \App\Model\Table\KpdataTable $Kpdata
 * @method \App\Model\Entity\Kpdata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KpdataController extends AppController
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
        $kpdata = $this->paginate($this->Kpdata);

        $this->set(compact('kpdata'));
    }

    /**
     * View method
     *
     * @param string|null $id Kpdata id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kpdata = $this->Kpdata->get($id, [
            'contain' => ['Monomers'],
        ]);

        $this->set(compact('kpdata'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kpdata = $this->Kpdata->newEmptyEntity();
        if ($this->request->is('post')) {
            $kpdata = $this->Kpdata->patchEntity($kpdata, $this->request->getData());
            if ($this->Kpdata->save($kpdata)) {
                $this->Flash->success(__('The kpdata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kpdata could not be saved. Please, try again.'));
        }
        $monomers = $this->Kpdata->Monomers->find('list', ['limit' => 200])->all();
        $this->set(compact('kpdata', 'monomers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kpdata id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kpdata = $this->Kpdata->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kpdata = $this->Kpdata->patchEntity($kpdata, $this->request->getData());
            if ($this->Kpdata->save($kpdata)) {
                $this->Flash->success(__('The kpdata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kpdata could not be saved. Please, try again.'));
        }
        $monomers = $this->Kpdata->Monomers->find('list', ['limit' => 200])->all();
        $this->set(compact('kpdata', 'monomers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kpdata id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kpdata = $this->Kpdata->get($id);
        if ($this->Kpdata->delete($kpdata)) {
            $this->Flash->success(__('The kpdata has been deleted.'));
        } else {
            $this->Flash->error(__('The kpdata could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
