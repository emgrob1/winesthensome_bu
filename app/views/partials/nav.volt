<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <div class="navbar-nav">
      <a class="navbar-brand" href="../winesthensome">Home</a>
      </div>
      <a class="navbar-brand" href="../winesthensome/wines">Learn About Wines</a>
      <a class="navbar-brand" href="../winesthensome/grapes">Grapes</a>
      <a class="navbar-brand" href="../winesthensome/regions">Growing Regions</a>
    
    </div>
    
      <ul class="nav navbar-nav navbar-right">

     {{form('signon/show', 'method': 'post')}}
       {{ submit_button('Sign In') }}
        {{ end_form() }}

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>