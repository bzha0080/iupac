<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Myguest> $myguests
 */
?>
<div class="myguests index content">
    <?= $this->Html->link(__('New Myguest'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Myguests') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('reg_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($myguests as $myguest): ?>
                <tr>
                    <td><?= $this->Number->format($myguest->id) ?></td>
                    <td><?= h($myguest->firstname) ?></td>
                    <td><?= h($myguest->lastname) ?></td>
                    <td><?= h($myguest->email) ?></td>
                    <td><?= h($myguest->reg_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $myguest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $myguest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $myguest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myguest->id)]) ?>
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
