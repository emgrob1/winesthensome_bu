<?php echo $this->partial('partials/nav'); ?> 


<?php echo $this->tag->form(array('createFood/save', 'method' => 'post')); ?>
<div class="row">
   
  
    <label for="type">Type</label>
<div class="row">
    <label for="type">Food Name</label>
   <?php echo $this->tag->textField(array('food_name', 'size' => 32)); ?>
       </div>
<div class="row">
    <?php echo $this->tag->submitButton(array('Save')); ?>
</div>
<?php echo $this->tag->endForm(); ?>
