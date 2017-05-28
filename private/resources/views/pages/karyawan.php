<div id="karyawan">
	<h2>Data Karyawan</h2>
	<?php if(!empty($karyawan)): ?>
	<ul>
		<?php foreach ($karyawan as $data): ?>
		<li><?php echo $data;?></li>
	<?php endforeach?>
	</ul>
<?php else:?>
<p>Tidak ada data.</p>
<?php endif  ?>
</div>