<div class="heading-page header-text"></div>

<section class="blog-posts">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                       <h3>Form Pendaftaran</h3> 
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()): ?>
                            <div class="alert alert-denger" role="alert">
                            <?= validation_errors(); ?> 
                            </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form_control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="nohp">No.Handphone</label>
                                <input type="number" name="nohp" class="form-control" id="nohp">
                            </div>
                            <div class="form-group">
                                <label for="jadwal">Pendakian</label>
                            <select class="form-control" id="jadwal" name="jadwal">
                                <option selected>Pilih</option>
                                <option value="krakatau">Krakatau</option>
                                <option value="prau">Prau</option>
                                <option value="rinjani">Rinjani</option>
                            </select>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat">
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary">Tambaha Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>