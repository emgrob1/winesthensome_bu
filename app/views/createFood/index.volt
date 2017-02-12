{{partial('partials/nav')}} 


{{ form('createFood/save', 'method': 'post') }}
<div class="row">
   
  
    <label for="type">Type</label>
<div class="row">
    <label for="type">Food Name</label>
   {{ text_field("food_name", "size": 32) }}
       </div>
<div class="row">
    {{ submit_button('Save') }}
</div>
{{ end_form() }}
