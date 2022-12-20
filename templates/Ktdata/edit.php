<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ktdata $ktdata
 * @var string[]|\Cake\Collection\CollectionInterface $monomers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ktdata->kt_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ktdata->kt_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ktdata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ktdata form content">
            <?= $this->Form->create($ktdata) ?>
            <fieldset>
                <legend><?= __('Edit Ktdata') ?></legend>
                <?php
                    echo $this->Form->control('monomer_id', ['options' => $monomers, 'empty' => true]);
                    echo $this->Form->control('A');
                    echo $this->Form->control('Ea');
                    echo $this->Form->control('iupac_benchmarked');
                    echo $this->Form->control('solution');
                    echo $this->Form->control('concentration');
                    echo $this->Form->control('DOI');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
