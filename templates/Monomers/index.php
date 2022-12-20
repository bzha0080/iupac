<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Monomer> $monomers
 */
?>
<div class="monomers index content">
    <?= $this->Html->link(__('New Monomer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monomers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('monomer_id') ?></th>
                    <th><?= $this->Paginator->sort('abbreviation') ?></th>
                    <th><?= $this->Paginator->sort('CAS') ?></th>
                    <th><?= $this->Paginator->sort('SMILES') ?></th>
                    <th><?= $this->Paginator->sort('InChI') ?></th>
                    <th><?= $this->Paginator->sort('InChIKey') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monomers as $monomer): ?>
                <tr>
                    <td><?= $this->Number->format($monomer->monomer_id) ?></td>
                    <td><?= h($monomer->abbreviation) ?></td>
                    <td><?= h($monomer->CAS) ?></td>
                    <td><?= h($monomer->SMILES) ?></td>
                    <td><?= h($monomer->InChI) ?></td>
                    <td><?= h($monomer->InChIKey) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monomer->monomer_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monomer->monomer_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monomer->monomer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $monomer->monomer_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
