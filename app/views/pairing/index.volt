
{{partial('partials/nav')}}
<div class="content">
<div class="panel panel-default">
  <div class="panel-body">
    <h3>Pairing Wines With Food</h3>
    
    <h4>Pair wines is very subjective because of the individual's taste will ultimately decide if the pairing is to their liking.</h4>
    <p>Here is an application you can use to select a wines that compliments what you are eating for a meal.</p>
    
   <table class="table table-bordered">
  <th>Select Food</th>
  <th>Wine that comliments your food</th>
  <tbody>
  <tr>
  	
  <td>
  <select id='selectWine' class="select-chosen" type="text">
  {% for foodSelects in foodSelect %}
<option value="{{foodSelects.food_id}}">{{foodSelects.food_name}}<option>
  {% endfor %}	
</select>
  </td>
  <td>
  
  Show Results
 {% for post in posts %}
{{post.grape_name}}
  {% endfor %}
  </td>
  
  
    </tr>
  
  </tbody>
</table>
    
  </div>
</div>