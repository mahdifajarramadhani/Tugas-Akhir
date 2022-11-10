<?= $this->extend('auth/template'); ?>

<?= $this->section('content'); ?>

<div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url() ?>"><b><?= env('APP_NAME') ?></b></a>
    </div>
    <div class="card card-outline card-<?= env('THEME_COLOR') ?>">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan masuk untuk memulai sesi</p>

            <form action="/auth/login" method="POST">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-<?= env('THEME_COLOR') ?> btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <p class="text-center"><strong>Dibuat oleh </strong> <a href="<?= env('COPYRIGHT_URL') ?>" target="_blank"><?= env('COPYRIGHT_NAME') ?></a></p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

<?= $this->endSection(); ?>