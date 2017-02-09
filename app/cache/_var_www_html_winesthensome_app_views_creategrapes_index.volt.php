<?php echo $this->partial('partials/nav'); ?> 


<?php echo $this->tag->form(array('createGrapes/save', 'method' => 'post')); ?>
<div class="row">
   
  
    <label for="type">Type</label>
  <select name="type">
  <option value="red">Red</option>
  <option value="white">White</option>

</select> 

    
    </div>
<div class="row">
    <label for="type">Grape Name</label>
   <?php echo $this->tag->textField(array('grape_name', 'size' => 32)); ?>
       </div>
<div class="row">
    <?php echo $this->tag->submitButton(array('Save')); ?>
</div>
<?php echo $this->tag->endForm(); ?>
