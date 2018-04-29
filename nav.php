<script>

$( document ).ready(function(){
    $(".button-collapse").sideNav();
})
    
</script>

<nav>
    <div class="nav-wrapper grey darken-3">
      <a href="index.php" class="brand-logo flow-text" style="padding-top: 5px; font-size:26px"><img src="img/logo.png"/>Saif Academy</a>
      
    
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#" data-activates="dropdown1">Lectures<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">C++</a></li>
            <li><a href="#!">VB6</a></li>
            <li class="divider"></li>
            <li><a href="#!">Prolog</a></li>
            </ul>
        <li><a href="students.php">Students</a></li>
        <li><a href="">Books</a></li>
        <li><a href="">Programs</a></li>
        <li><a href="">About Me</a></li>
      </ul>
       
      <ul class="side-nav" id="mobile-demo">
      <li><a class="dropdown-button" href="#" data-activates="dropdown2">Lectures<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">C++</a></li>
            <li><a href="#!">VB6</a></li>
            <li class="divider"></li>
            <li><a href="#!">Prolog</a></li>
            </ul>        
        <li><a href="students.php">Students</a></li>
        <li><a href="">Books</a></li>
        <li><a href="">Programs</a></li>
        <li><a href="">About Me</a></li>
      </ul>
    </div>
    </nav>