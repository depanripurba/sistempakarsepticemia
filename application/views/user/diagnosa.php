<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <form action="<?=base_url('diagnosa/prosesdiagnosa')?>" method="post">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Diagnosa Penyakit</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No.</th>
                                            <th>Gejala</th>
                                            <th style="width: 40px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($gejala as $g) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $g['nama_gejala'] ?></td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="<?= $g['kode_gejala'] ?>" value="1" name="<?= $g['kode_gejala'] ?>">
                                                        <label for="<?= $g['kode_gejala'] ?>" class="custom-control-label"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <button class="btn btn-info">Diagnosa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- /.content-wrapper -->