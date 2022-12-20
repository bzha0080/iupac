<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ktdata $ktdata
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ktdata'), ['action' => 'edit', $ktdata->kt_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ktdata'), ['action' => 'delete', $ktdata->kt_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ktdata->kt_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ktdata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ktdata'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ktdata view content">
            <h3><?= h($ktdata->kt_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Monomer') ?></th>
                    <td><?= $ktdata->has('monomer') ? $this->Html->link($ktdata->monomer->name, ['controller' => 'Monomers', 'action' => 'view', $ktdata->monomer->monomer_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('DOI') ?></th>
                    <td><?= h($ktdata->DOI) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kt Id') ?></th>
                    <td><?= $this->Number->format($ktdata->kt_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('A') ?></th>
                    <td><?= $ktdata->A === null ? '' : $this->Number->format($ktdata->A) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ea') ?></th>
                    <td><?= $this->Number->format($ktdata->Ea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iupac Benchmarked') ?></th>
                    <td><?= $ktdata->iupac_benchmarked === null ? '' : $this->Number->format($ktdata->iupac_benchmarked) ?></td>
                </tr>
                <tr>
                    <th><?= __('Solution') ?></th>
                    <td><?= $ktdata->solution === null ? '' : $this->Number->format($ktdata->solution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concentration') ?></th>
                    <td><?= $ktdata->concentration === null ? '' : $this->Number->format($ktdata->concentration) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
