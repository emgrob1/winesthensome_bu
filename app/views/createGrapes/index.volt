{{partial('partials/nav')}} 


{{ form('createGrapes/save', 'method': 'post') }}
<div class="row">
   
  
    <label for="type">Type</label>
  <select name="type">
  <option value="red">Red</option>
  <option value="white">White</option>

</select> 

    
    </div>
<div class="row">
    <label for="type">Grape Name</label>
   {{ text_field("grape_name", "size": 32) }}
       </div>
<div class="row">
    {{ submit_button('Save') }}
</div>
{{ end_form() }}
