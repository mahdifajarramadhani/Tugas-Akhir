<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> <?= getenv('BUILD_VERSION') ?>
    </div>
    Copyright &copy;<?= date('Y') ?> <strong><a href="<?= getenv('COPYRIGHT_URL') ?>"><?= getenv('COPYRIGHT_NAME') ?></a></strong>
</footer>