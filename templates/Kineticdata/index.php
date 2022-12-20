<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Kineticdata> $kineticdata
 */
?>
<div class="kineticdata index content">
    <?= $this->Html->link(__('New Kineticdata'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kineticdata') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Monomer') ?></th>
                    <th><?= $this->Paginator->sort('tres') ?></th>
                    <th><?= $this->Paginator->sort('Conversion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kineticdata as $kineticdata): ?>
                <tr>
                    <td><?= $this->Number->format($kineticdata->id) ?></td>
                    <td><?= h($kineticdata->Monomer) ?></td>
                    <td><?= $this->Number->format($kineticdata->tres) ?></td>
                    <td><?= $this->Number->format($kineticdata->Conversion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kineticdata->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kineticdata->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kineticdata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kineticdata->id)]) ?>
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
