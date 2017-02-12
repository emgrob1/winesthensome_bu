<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <div class="navbar-nav">
     
      <a class="navbar-brand" href="/winesthensome">Home</span></a>
    
       <div class="dropdown">
  <button onclick="myFunction()" class="navbar-brand dropbtn">Learn About Wines</button>
  <div id="myDropdown" class="dropdown-content">
        <li><a href="/winesthensome/tasting">Tasting Wines</a></li>
    <li><a href="/winesthensome/pairing">Pairing</a></li>
    <li><a href="/winesthensome/making_wine">How Wine is Made</a></li>
  </div>
</div>
      <a class="navbar-brand" href="/winesthensome/grapes">Grapes</a>
      <a class="navbar-brand" href="/winesthensome/regions">Growing Regions</a>
      </div>
    </div>
    
      <ul class="nav navbar-nav navbar-right">

     <?php echo $this->tag->form(array('signon/show', 'method' => 'post')); ?>
       <?php echo $this->tag->submitButton(array('Sign In')); ?>
        <?php echo $this->tag->endForm(); ?>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>