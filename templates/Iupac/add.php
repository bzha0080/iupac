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
            <?= $this->Html->link(__('List Iupac'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="iupac form content">
            <?= $this->Form->create($iupac) ?>
            <fieldset>
                <legend><?= __('Add Iupac') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('SMILES');
                    echo $this->Form->control('InChI');
                    echo $this->Form->control('InChIKey');
                    echo $this->Form->control('CAS');
                    echo $this->Form->control('abbreviation');
                    echo $this->Form->control('solution');
                    echo $this->Form->control('concentration');
                    echo $this->Form->control('iupac');
                    echo $this->Form->control('DOI');
                    echo $this->Form->control('A');
                    echo $this->Form->control('Ea');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
