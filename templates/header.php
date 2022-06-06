<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.php">Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about.php">About</a>
          </li>
		  <?php if (isset($_SESSION['login']) && isset($_SESSION["name"]) && $_SESSION['login'] == 'on'): ?>
       
		  <!-- <li>
		  <button class="btn btn-outline-primary" type="submit"><a href="login.php">Log In</a></button>
		  </li> -->
		  <li>
		  <a href="./admin.php">
				<img width="38" src="img/icons/padlock.svg" alt="">
			</a>
		</li>
		<li>
		<a href="./logout.php">
			<img width="38" src="img/icons/logout.svg" alt="">
		</a>
		</li>
    <li>
     <p style="color:white;">Добро пожаловать, <?php echo $_SESSION["name"]?></p> 
    </li>
		<?php else: ?>
			<li>
			<a href="./login.php">
				<img width="38" src="img/icons/padlock.svg" alt="">
			</a>
			</li>
		<?php endif ?>
        </ul>
        <div class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </div>
      </div>
    </div>
  </nav>
</header>
<section class="py-5 text-center container"></section>

