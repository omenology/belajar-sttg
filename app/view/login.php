<?php
// session_start();
$notif = isset($url[1]) ? true : false;
if(isset($_SESSION['status'])){
header("location: ".BASE_URL."home");
}
?>
<div class="pebungkus">
    <div class="quote ">
        <h2 class="white-text darken-3">
        Selamat datang di Belajar STTG
        </h2>
        <blockquote>
            Belajar STTG adalah aplikasi berbasis web yang digunakan sebagai layanan penghubung antara mahasiswa dan dosen mengenai aktivitas perkuliahan, penjadwalan kuliah, absensi perkuliahan, dan rekap data informasi mahasiswa.
        </blockquote>
    </div>
    <div class="login">
        <div id="formContent">
            <img src="<?= BASE_URL.'img/Logo-STTG.png'?>" class="logo">
            <form action="<?php echo BASE_URL."app/function/proses_login.php"; ?>" method="POST">
                <input type="text" name="email" placeholder="Email"/>
                <div class="pswd">
                    <input type="password" name="password"   placeholder="Password"/>
                    <img src="<?=BASE_URL.'img/icon/eye_1.svg?'?>" class="fa-eye" id="eye">
                </div>
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
</div>