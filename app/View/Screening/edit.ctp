<div class="screening edit form">
<?php echo $this->Form->create('Screen'); ?>
	<fieldset>
		<legend><?php echo __('Edytuj seans'); ?></legend>
	<?php
		echo 'Data seansu'.$this->Form->date('screening_date',array('label' => 'Data seansu'));
		echo $this->Form->input('Halls_id',array('label' => 'Sala'));
		echo $this->Form->input('Movies_id',array('label' => 'Film'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Zapisz')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

	        <li><?php echo $this->Html->link(__('Kina'), array('controller' => 'cinemas','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Sale'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Seanse'), array('controller' => 'screening', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Filmy'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Rezerwacje'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Użytkownicy'), array('controller' => 'users', 'action' => 'index')); ?> </li>   </ul>
		
        
        </ul>
</div>
