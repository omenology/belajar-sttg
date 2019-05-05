<?php
session_start();
$notif = isset($url[1]) ? true : false;
if(isset($_SESSION['status'])){
    header("location: ".BASE_URL."home");
}
?>
<div class="login">
    <div id="formContent">
        <h1>Login</h1>
        <form action="<?= BASE_URL."app/function/proses_login.php"; ?>" method="POST">
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password"   placeholder="Password"/>
            <i class="far fa-eye" id="eye"></i>
            <span class="glyphicon glyphicon-eye-open"></span>
            <input type="submit" value="login" />
        </form>
        <div id="formFooter">
            <?php
            if($notif) echo "<div class='notif underlinehover'>Maaf, email atau password yang kamu masukan tidak cocok</div>";
            ?>
        </div>
    </div>
</div>