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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kineticdata->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kineticdata->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Kineticdata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kineticdata form content">
            <?= $this->Form->create($kineticdata) ?>
            <fieldset>
                <legend><?= __('Edit Kineticdata') ?></legend>
                <?php
                    echo $this->Form->control('Monomer');
                    echo $this->Form->control('tres');
                    echo $this->Form->control('Conversion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
