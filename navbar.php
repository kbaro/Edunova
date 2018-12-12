<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Edunova</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Enter</a>
          <a class="dropdown-item" href="#">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="form-inline label">
        <form action="includes/login.inc.php" method="post">
            <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/E-mail...">
            <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
            <button class="btn btn-outline-success my-2 my-sm-0" name="login" type="login-submit">Login</button>
        </form>
        <a href="signup.php" class="btn btn-outline-success my-2 my-sm-0" name="signup" type="signup">Signup</a>
        <form action="includes/logout.inc.php" method="post">
        <button class="btn btn-outline-success my-2 my-sm-0" name="logout" type="logout-submit">Logout</button>
        </form>
    </div>

  </div>
</nav>