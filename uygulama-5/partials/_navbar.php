<?php 
  if(!empty($_GET['q'])){
    $keyword = $_GET['q'];
    $kurslar = array_filter($kurslar, function ($kurs){ // function ($kurs) use ($keyword)
      return stristr($kurs['baslik'],$GLOBALS["keyword"]);
    });
  }


?>

<nav class="navbar navbar-expand-lg  bg-primary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">CourseApp</a>
    <ul class="navbar-nav me-auto" >
        <li class="nav-item">
            <a href="index.php" class="nav-link navbar-brand">Anasayfa</a>
        </li>
        
        <li class="nav-item">
            <a href="create.php" class="nav-link navbar-brand">Kurs Ekle</a>
        </li>
    </ul>

    <ul class="navbar-nav me-2" >
        
        <?php if(isset($_COOKIE["auth"])):?>
        <li class="nav-item">
            <a href="logout.php" class="nav-link">Log out</a>
        </li>

        <li class="nav-item">
            <a href="login.php" class="nav-link">Hoşgeldiniz <?php echo $_COOKIE["auth"]["name"];?></a>
        </li>
          <?php else :?>
        <li class="nav-item">
            <a href="login.php" class="nav-link">Log in</a>
        </li>

        <li class="nav-item">
            <a href="register.php" class="nav-link">Register</a>
        </li>
        <?php endif;?>
    </ul>

    <form action="index.php" class = "d-flex" method = "GET">
          <input type="text" name="q" class = "form-control me-2" placeholder = "Keyword">
          <button type="submit" class="btn  btn-warning"> Ara </button>
    </form>

  </div>
</nav>