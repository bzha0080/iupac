<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kpdata $kpdata
 * @var string[]|\Cake\Collection\CollectionInterface $monomers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kpdata->kp_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kpdata->kp_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Kpdata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kpdata form content">
            <?= $this->Form->create($kpdata) ?>
            <fieldset>
                <legend><?= __('Edit Kpdata') ?></legend>
                <?php
                    echo $this->Form->control('monomer_id', ['options' => $monomers, 'empty' => true]);
                    echo $this->Form->control('A');
                    echo $this->Form->control('Ea');
                    echo $this->Form->control('iupac_benchmarked');
                    echo $this->Form->control('solution');
                    echo $this->Form->control('concentration');
                    echo $this->Form->control('DOI');
                    echo $this->Form->control('Tmin');
                    echo $this->Form->control('Tmax');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
