<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Myguests Controller
 *
 * @property \App\Model\Table\MyguestsTable $Myguests
 * @method \App\Model\Entity\Myguest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyguestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $myguests = $this->paginate($this->Myguests);

        $this->set(compact('myguests'));
    }

    /**
     * View method
     *
     * @param string|null $id Myguest id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $myguest = $this->Myguests->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('myguest'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $myguest = $this->Myguests->newEmptyEntity();
        if ($this->request->is('post')) {
            $myguest = $this->Myguests->patchEntity($myguest, $this->request->getData());
            if ($this->Myguests->save($myguest)) {
                $this->Flash->success(__('The myguest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myguest could not be saved. Please, try again.'));
        }
        $this->set(compact('myguest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Myguest id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $myguest = $this->Myguests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $myguest = $this->Myguests->patchEntity($myguest, $this->request->getData());
            if ($this->Myguests->save($myguest)) {
                $this->Flash->success(__('The myguest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myguest could not be saved. Please, try again.'));
        }
        $this->set(compact('myguest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Myguest id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $myguest = $this->Myguests->get($id);
        if ($this->Myguests->delete($myguest)) {
            $this->Flash->success(__('The myguest has been deleted.'));
        } else {
            $this->Flash->error(__('The myguest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
