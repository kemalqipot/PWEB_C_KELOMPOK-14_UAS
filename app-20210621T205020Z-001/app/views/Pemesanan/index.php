<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Pemesan</h3>
            <div class="row clearfix">
            <?php foreach($data['Pemesanan'] as $Pemesanan): ?>
                <div class="col-lg-3 col-sm-6 col-md-3">
                <ul>
                    <li><?= $Pemesanan['nama']?></li>
                    <li><?= $Pemesanan['nomortelepon'] ?></li>
                    <li><?= $Pemesanan['noIdentitas'] ?></li>
                    <li><?= $Pemesanan['total'] ?></li>
                </ul>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>