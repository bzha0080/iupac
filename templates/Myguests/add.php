<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myguest $myguest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Myguests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="myguests form content">
            <?= $this->Form->create($myguest) ?>
            <fieldset>
                <legend><?= __('Add Myguest') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('reg_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
