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
            <?= $this->Html->link(__('List Monomers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monomers form content">
            <?= $this->Form->create($monomer) ?>
            <fieldset>
                <legend><?= __('Add Monomer') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('abbreviation');
                    echo $this->Form->control('CAS');
                    echo $this->Form->control('SMILES');
                    echo $this->Form->control('InChI');
                    echo $this->Form->control('InChIKey');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
