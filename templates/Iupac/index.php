<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Iupac> $iupac
 */
?>
<div class="iupac index content">
    <?= $this->Html->link(__('New Iupac'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Iupac') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('SMILES') ?></th>
                    <th><?= $this->Paginator->sort('InChI') ?></th>
                    <th><?= $this->Paginator->sort('InChIKey') ?></th>
                    <th><?= $this->Paginator->sort('CAS') ?></th>
                    <th><?= $this->Paginator->sort('abbreviation') ?></th>
                    <th><?= $this->Paginator->sort('solution') ?></th>
                    <th><?= $this->Paginator->sort('concentration') ?></th>
                    <th><?= $this->Paginator->sort('iupac') ?></th>
                    <th><?= $this->Paginator->sort('DOI') ?></th>
                    <th><?= $this->Paginator->sort('A') ?></th>
                    <th><?= $this->Paginator->sort('Ea') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($iupac as $iupac): ?>
                <tr>
                    <td><?= h($iupac->SMILES) ?></td>
                    <td><?= h($iupac->InChI) ?></td>
                    <td><?= h($iupac->InChIKey) ?></td>
                    <td><?= h($iupac->CAS) ?></td>
                    <td><?= h($iupac->abbreviation) ?></td>
                    <td><?= h($iupac->solution) ?></td>
                    <td><?= $this->Number->format($iupac->concentration) ?></td>
                    <td><?= h($iupac->iupac) ?></td>
                    <td><?= h($iupac->DOI) ?></td>
                    <td><?= $this->Number->format($iupac->A) ?></td>
                    <td><?= $this->Number->format($iupac->Ea) ?></td>
                    <td><?= $this->Number->format($iupac->id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $iupac->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iupac->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iupac->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iupac->id)]) ?>
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
