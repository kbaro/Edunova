<nav class="large-3 cell navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php">Football League</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="large-5 cell collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Teams</a>
          <a class="dropdown-item" href="#">Results</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Table</a>
        </div>
      </li>
    </ul>
    
   
    <div class="large-4 cell form-inline label">
        <form action="includes/login.inc.php" method="post">   
        <a href="login2.php" class="btn btn-outline-success my-2 my-sm-0">Login</a>
        </form>
        <form action="includes/signup.inc.php">
        <a href="signup.php" class="btn btn-outline-success my-2 my-sm-0">Signup</a>
        </form>
        
    </div>

  </div>
</nav>