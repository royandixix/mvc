<div class="container ml-3 mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Web Development</h3>
            <ul class="list-group">
                <?php foreach ($data['web'] as $w) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start "><?php echo $w['nama']; ?>
                        <a href="<?php echo BASEURL;?>/web/detail/<?php echo $w['id']; ?>"  class="badge  text-bg-primary p-2 rounded-3 ">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>