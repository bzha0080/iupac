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
            <?= $this->Html->link(__('Edit Myguest'), ['action' => 'edit', $myguest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Myguest'), ['action' => 'delete', $myguest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myguest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Myguests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Myguest'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="myguests view content">
            <h3><?= h($myguest->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($myguest->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($myguest->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($myguest->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($myguest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reg Date') ?></th>
                    <td><?= h($myguest->reg_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
