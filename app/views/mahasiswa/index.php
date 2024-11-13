<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar mahasiswa</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Bachelor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1; ?>
                    <?php foreach ($data['mhs'] as $mhs) :?>
                        <tr>
                        <th scope="row"><?= $n; $n++?></th>
                        <td><?=$mhs['phone_number']?></td>
                        <td><?=$mhs['name']?></td>
                        <td><?=$mhs['email']?></td>
                        <td><?=$mhs['bachelor']?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
          
        </div>
    </div>
</div>