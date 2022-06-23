<div class="heading-page header-text"></div>

<?php if( $this->session->flashdata('flash') ): ?>
<div class="row mt-3">
  <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif ; ?>


      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Anggota</h3>
            <ul  class="list-group">
            <?php foreach ($anggota as $agt) : ?>
               <h4><li class="list-group-item"><?= $agt['nama'] ?></li></h4>
            <?php endforeach ?> 
            </ul>
          </div>
        </div>
      </div>

