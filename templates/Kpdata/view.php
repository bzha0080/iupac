<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kpdata $kpdata
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kpdata'), ['action' => 'edit', $kpdata->kp_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kpdata'), ['action' => 'delete', $kpdata->kp_id], ['confirm' => __('Are you sure you want to delete # {0}?', $kpdata->kp_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kpdata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kpdata'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kpdata view content">
            <h3><?= h($kpdata->kp_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Monomer') ?></th>
                    <td><?= $kpdata->has('monomer') ? $this->Html->link($kpdata->monomer->name, ['controller' => 'Monomers', 'action' => 'view', $kpdata->monomer->monomer_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Solution') ?></th>
                    <td><?= h($kpdata->solution) ?></td>
                </tr>
                <tr>
                    <th><?= __('DOI') ?></th>
                    <td><?= h($kpdata->DOI) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kp Id') ?></th>
                    <td><?= $this->Number->format($kpdata->kp_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('A') ?></th>
                    <td><?= $this->Number->format($kpdata->A) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ea') ?></th>
                    <td><?= $this->Number->format($kpdata->Ea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iupac Benchmarked') ?></th>
                    <td><?= $kpdata->iupac_benchmarked === null ? '' : $this->Number->format($kpdata->iupac_benchmarked) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concentration') ?></th>
                    <td><?= $kpdata->concentration === null ? '' : $this->Number->format($kpdata->concentration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tmin') ?></th>
                    <td><?= $kpdata->Tmin === null ? '' : $this->Number->format($kpdata->Tmin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tmax') ?></th>
                    <td><?= $kpdata->Tmax === null ? '' : $this->Number->format($kpdata->Tmax) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
