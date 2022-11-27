<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $judul_halaman ?></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                Start creating your amazing application!

            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>