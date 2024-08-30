<div class="container ml-3 mt-5">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data['web']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['web']['jabatan']; ?></h6>
            <p class="card-text"><?php echo $data['web']['pengalaman']; ?></p>
            <p class="card-text"><?php echo $data['web']['umur']; ?></p>
            <p class="card-text"><?php echo $data['web']['alamat']; ?></p>
            <p class="card-text"><?php echo $data['web']['kampus']; ?></p>
            <p class="card-text"><?php echo $data['web']['asal_daerah']; ?></p>
            <a href="<?php echo BASEURL; ?>/web" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>


