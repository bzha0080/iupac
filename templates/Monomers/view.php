<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monomer $monomer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Monomer'), ['action' => 'edit', $monomer->monomer_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monomer'), ['action' => 'delete', $monomer->monomer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $monomer->monomer_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monomers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monomer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monomers view content">
            <h3><?= h($monomer->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Abbreviation') ?></th>
                    <td><?= h($monomer->abbreviation) ?></td>
                </tr>
                <tr>
                    <th><?= __('CAS') ?></th>
                    <td><?= h($monomer->CAS) ?></td>
                </tr>
                <tr>
                    <th><?= __('SMILES') ?></th>
                    <td><?= h($monomer->SMILES) ?></td>
                </tr>
                <tr>
                    <th><?= __('InChI') ?></th>
                    <td><?= h($monomer->InChI) ?></td>
                </tr>
                <tr>
                    <th><?= __('InChIKey') ?></th>
                    <td><?= h($monomer->InChIKey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monomer Id') ?></th>
                    <td><?= $this->Number->format($monomer->monomer_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($monomer->name)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
