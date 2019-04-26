<?php
	include_once 'app/module/home/home.php';
?>
<div class="container">
	<a href="<?= BASE_URL.'app/function/logout.php'?>">Logout</a>
	<a href="<?= BASE_URL.'index.php?page=rekap_absen' ?>">rekap</a>
	<?php foreach ($query as $row):?>
	<section style="border: 1px solid;display: inline-block;padding: 10px;margin: 5px;">
		<a href="<?=BASE_URL."index.php?page=kelas&kdmk=$row[kode_mk]&kelas=$row[kelas]"?>">
			<?php
			echo $row['nama_mk']." ".$row['kelas']."<br>";
			echo "$row[ruangan]<br>";
			echo "$row[hari] $row[jam]<br>";
			echo "$row[nama_dsn] $row[foto]<br>";
			echo "$row[email]<br>";
			echo "$row[hp]<br>";
			?>
		</a>
	</section>
	<?php endforeach;?>
</div>