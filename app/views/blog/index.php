<!-- <?php $n = 1; ?>
    <?php foreach ($data['mhs'] as $mhs) :?>
        <tr>
        <th scope="row"><?= $n; $n++?></th>
        <td><?=$mhs['phone_number']?></td>
        <td><?=$mhs['name']?></td>
        <td><?=$mhs['email']?></td>
        <td><?=$mhs['bachelor']?></td>
        </tr>
    <?php endforeach;?> -->
<div class="row container d-flex justify-content-center"  style="margin:5rem auto;">
    <!-- blog besar -->
    <div class="row g-3 " style="width: 800px;">
        <div class="col">
            <div class="card shadow">
            <img src="<?= BASEURL?>/img/logo.jpg" class="card-img-top" alt="..." style="width: 800px; height: 400px; object-fit: cover; object-position: center;">
            <div class="card-body" >
                <h5 class="card-title">Layanan 1</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow">
            <img src="<?= BASEURL?>/img/logo.jpg" class="card-img-top" alt="..." style="width: 800px; height: 400px; object-fit: cover; object-position: center;">
            <div class="card-body" >
                <h5 class="card-title">Layanan 2</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
            <img src="<?= BASEURL?>/img/logo.jpg" class="card-img-top" alt="..." style="width: 800px; height: 400px; object-fit: cover; object-position: center;">
            <div class="card-body" >
                <h5 class="card-title">Layanan 3</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    </div>

    <!-- blog kecil -->
    <div class="row p-4 d-flex" style="width: 400px; height:fit-content;">
        <h2>Blog Populer</h2>
        <div class="mb-4">
            <div class="card shadow">
            <img src="<?= BASEURL?>/img/logo.jpg" class="card-img-top" alt="..." style="width: 400px; height: 200px; object-fit: cover; object-position: center;">
            <div class="card-body" >
                <h5 class="card-title">Layanan 1</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="mb-4">
            <div class="card shadow">
            <img src="<?= BASEURL?>/img/logo.jpg" class="card-img-top" alt="..." style="width: 400px; height: 200px; object-fit: cover; object-position: center;">
            <div class="card-body" >
                <h5 class="card-title">Layanan 2</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="mb-4">
            <div class="card shadow">
            <img src="<?= BASEURL?>/img/logo.jpg" class="card-img-top" alt="..." style="width: 400px; height: 200px; object-fit: cover; object-position: center;">
            <div class="card-body" >
                <h5 class="card-title">Layanan 3</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    </div>
</div>
</div>