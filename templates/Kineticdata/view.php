<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kineticdata $kineticdata
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kineticdata'), ['action' => 'edit', $kineticdata->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kineticdata'), ['action' => 'delete', $kineticdata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kineticdata->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kineticdata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kineticdata'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kineticdata view content">
            <h3><?= h($kineticdata->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Monomer') ?></th>
                    <td><?= h($kineticdata->Monomer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($kineticdata->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tres') ?></th>
                    <td><?= $this->Number->format($kineticdata->tres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conversion') ?></th>
                    <td><?= $this->Number->format($kineticdata->Conversion) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
