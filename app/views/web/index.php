<div class="container ml-3 mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Web Development</h3>


            <?php foreach ($data['web'] as $w) : ?>
                <ul>
                    <li><?php echo $w['nama']; ?></li>
                    <li><?php echo $w['jabatan']; ?></li>
                    <li><?php echo $w['pengalaman']; ?></li>
                    <li><?php echo $w['umur']; ?></li>
                    <li><?php echo $w['alamat']; ?></li>
                    <li><?php echo $w['kampus']; ?></li>
                    <li><?php echo $w['asal_daerah']; ?></li>
                </ul>


            <?php endforeach; ?>


        </div>
    </div>
</div>