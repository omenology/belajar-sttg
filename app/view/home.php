<?php
	include_once 'app/module/home/home.php';
?>

<!-- DAftar kelas -->
<div class="container-fluid">
	<br>
	<div class="row">
		<?php foreach ($data as $row):?>
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="<?=BASE_URL.'img/banner/bg'.rand(1,4).'.jpg'?>">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">
						<p><?=$row['nama_mk']." ".$row['kelas']?></p>
					<i class="material-icons right">more_vert</i></span>
					<p><a href="<?=BASE_URL."kelas/$row[kode_mk]/$row[kelas]"?>">Lihat Kelas</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">
						<?=$row['nama_mk']." ".$row['kelas']?>
					<i class="material-icons right">close</i></span>
					<p>
						<?php
						echo "$row[ruangan]<br>";
						echo "$row[hari] $row[jam]<br>";
						echo "$row[nama_dsn] $row[foto]<br>";
						echo "$row[email]<br>";
						echo "$row[hp]<br>";
						?>
					</p>
				</div>
			</div>
		</div>
		<?php endforeach;?>
		
	</div>
