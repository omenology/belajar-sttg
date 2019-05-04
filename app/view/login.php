<?php
    session_start();
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    if(isset($_SESSION['status'])){
        header("location: ".BASE_URL."index.php?page=home");
    }
?>

<div class="login">
  <div id="formContent">
      <h1>Login</h1>

    <form action="<?php echo BASE_URL."app/function/proses_login.php"; ?>" method="POST">
			<input type="text" name="email" placeholder="Email"/>
			<input type="password" name="password"   placeholder="Password"/>
			<input type="submit" value="login" />
    </form>

    <div id="formFooter">
      <?php

			if($notif == true)
				echo "<div class='notif underlinehover'>Maaf, email atau password yang kamu masukan tidak cocok</div>";
				?>
    </div>

  </div>
</div>
