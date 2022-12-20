<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Monomers Controller
 *
 * @property \App\Model\Table\MonomersTable $Monomers
 * @method \App\Model\Entity\Monomer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $monomers = $this->paginate($this->Monomers);

        $this->set(compact('monomers'));
    }

    /**
     * View method
     *
     * @param string|null $id Monomer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monomer = $this->Monomers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('monomer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monomer = $this->Monomers->newEmptyEntity();
        if ($this->request->is('post')) {
            $monomer = $this->Monomers->patchEntity($monomer, $this->request->getData());
            if ($this->Monomers->save($monomer)) {
                $this->Flash->success(__('The monomer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monomer could not be saved. Please, try again.'));
        }
        $this->set(compact('monomer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monomer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monomer = $this->Monomers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monomer = $this->Monomers->patchEntity($monomer, $this->request->getData());
            if ($this->Monomers->save($monomer)) {
                $this->Flash->success(__('The monomer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monomer could not be saved. Please, try again.'));
        }
        $this->set(compact('monomer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monomer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monomer = $this->Monomers->get($id);
        if ($this->Monomers->delete($monomer)) {
            $this->Flash->success(__('The monomer has been deleted.'));
        } else {
            $this->Flash->error(__('The monomer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
