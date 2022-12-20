<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Kpdata> $kpdata
 */
?>
<div class="kpdata index content">
    <?= $this->Html->link(__('New Kpdata'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kpdata') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('kp_id') ?></th>
                    <th><?= $this->Paginator->sort('monomer_id') ?></th>
                    <th><?= $this->Paginator->sort('A') ?></th>
                    <th><?= $this->Paginator->sort('Ea') ?></th>
                    <th><?= $this->Paginator->sort('iupac_benchmarked') ?></th>
                    <th><?= $this->Paginator->sort('solution') ?></th>
                    <th><?= $this->Paginator->sort('concentration') ?></th>
                    <th><?= $this->Paginator->sort('DOI') ?></th>
                    <th><?= $this->Paginator->sort('Tmin') ?></th>
                    <th><?= $this->Paginator->sort('Tmax') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kpdata as $kpdata): ?>
                <tr>
                    <td><?= $this->Number->format($kpdata->kp_id) ?></td>
                    <td><?= $kpdata->has('monomer') ? $this->Html->link($kpdata->monomer->name, ['controller' => 'Monomers', 'action' => 'view', $kpdata->monomer->monomer_id]) : '' ?></td>
                    <td><?= $this->Number->format($kpdata->A) ?></td>
                    <td><?= $this->Number->format($kpdata->Ea) ?></td>
                    <td><?= $kpdata->iupac_benchmarked === null ? '' : $this->Number->format($kpdata->iupac_benchmarked) ?></td>
                    <td><?= h($kpdata->solution) ?></td>
                    <td><?= $kpdata->concentration === null ? '' : $this->Number->format($kpdata->concentration) ?></td>
                    <td><?= h($kpdata->DOI) ?></td>
                    <td><?= $kpdata->Tmin === null ? '' : $this->Number->format($kpdata->Tmin) ?></td>
                    <td><?= $kpdata->Tmax === null ? '' : $this->Number->format($kpdata->Tmax) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kpdata->kp_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kpdata->kp_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kpdata->kp_id], ['confirm' => __('Are you sure you want to delete # {0}?', $kpdata->kp_id)]) ?>
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
