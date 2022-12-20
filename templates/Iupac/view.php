<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Iupac $iupac
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Iupac'), ['action' => 'edit', $iupac->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Iupac'), ['action' => 'delete', $iupac->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iupac->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Iupac'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Iupac'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="iupac view content">
            <h3><?= h($iupac->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('SMILES') ?></th>
                    <td><?= h($iupac->SMILES) ?></td>
                </tr>
                <tr>
                    <th><?= __('InChI') ?></th>
                    <td><?= h($iupac->InChI) ?></td>
                </tr>
                <tr>
                    <th><?= __('InChIKey') ?></th>
                    <td><?= h($iupac->InChIKey) ?></td>
                </tr>
                <tr>
                    <th><?= __('CAS') ?></th>
                    <td><?= h($iupac->CAS) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abbreviation') ?></th>
                    <td><?= h($iupac->abbreviation) ?></td>
                </tr>
                <tr>
                    <th><?= __('DOI') ?></th>
                    <td><?= h($iupac->DOI) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concentration') ?></th>
                    <td><?= $this->Number->format($iupac->concentration) ?></td>
                </tr>
                <tr>
                    <th><?= __('A') ?></th>
                    <td><?= $this->Number->format($iupac->A) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ea') ?></th>
                    <td><?= $this->Number->format($iupac->Ea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($iupac->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Solution') ?></th>
                    <td><?= $iupac->solution ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Iupac') ?></th>
                    <td><?= $iupac->iupac ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($iupac->name)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
