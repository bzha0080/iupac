<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ktdata> $ktdata
 */
?>
<div class="ktdata index content">
    <?= $this->Html->link(__('New Ktdata'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ktdata') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('kt_id') ?></th>
                    <th><?= $this->Paginator->sort('monomer_id') ?></th>
                    <th><?= $this->Paginator->sort('A') ?></th>
                    <th><?= $this->Paginator->sort('Ea') ?></th>
                    <th><?= $this->Paginator->sort('iupac_benchmarked') ?></th>
                    <th><?= $this->Paginator->sort('solution') ?></th>
                    <th><?= $this->Paginator->sort('concentration') ?></th>
                    <th><?= $this->Paginator->sort('DOI') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ktdata as $ktdata): ?>
                <tr>
                    <td><?= $this->Number->format($ktdata->kt_id) ?></td>
                    <td><?= $ktdata->has('monomer') ? $this->Html->link($ktdata->monomer->name, ['controller' => 'Monomers', 'action' => 'view', $ktdata->monomer->monomer_id]) : '' ?></td>
                    <td><?= $ktdata->A === null ? '' : $this->Number->format($ktdata->A) ?></td>
                    <td><?= $this->Number->format($ktdata->Ea) ?></td>
                    <td><?= $ktdata->iupac_benchmarked === null ? '' : $this->Number->format($ktdata->iupac_benchmarked) ?></td>
                    <td><?= $ktdata->solution === null ? '' : $this->Number->format($ktdata->solution) ?></td>
                    <td><?= $ktdata->concentration === null ? '' : $this->Number->format($ktdata->concentration) ?></td>
                    <td><?= h($ktdata->DOI) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ktdata->kt_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ktdata->kt_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ktdata->kt_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ktdata->kt_id)]) ?>
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
