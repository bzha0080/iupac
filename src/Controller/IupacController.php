<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Iupac Controller
 *
 * @property \App\Model\Table\IupacTable $Iupac
 * @method \App\Model\Entity\Iupac[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IupacController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $iupac = $this->paginate($this->Iupac);

        $this->set(compact('iupac'));
    }

    /**
     * View method
     *
     * @param string|null $id Iupac id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iupac = $this->Iupac->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('iupac'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iupac = $this->Iupac->newEmptyEntity();
        if ($this->request->is('post')) {
            $iupac = $this->Iupac->patchEntity($iupac, $this->request->getData());
            if ($this->Iupac->save($iupac)) {
                $this->Flash->success(__('The iupac has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The iupac could not be saved. Please, try again.'));
        }
        $this->set(compact('iupac'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Iupac id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iupac = $this->Iupac->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iupac = $this->Iupac->patchEntity($iupac, $this->request->getData());
            if ($this->Iupac->save($iupac)) {
                $this->Flash->success(__('The iupac has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The iupac could not be saved. Please, try again.'));
        }
        $this->set(compact('iupac'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Iupac id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iupac = $this->Iupac->get($id);
        if ($this->Iupac->delete($iupac)) {
            $this->Flash->success(__('The iupac has been deleted.'));
        } else {
            $this->Flash->error(__('The iupac could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
