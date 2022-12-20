<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright © 2023 <a href="https://diskominfotik.sumbarprov.go.id/">Diskominfotik</a> | IT Team  </p>
                <p>
                    Diload dalam: <?= $this->benchmark->elapsed_time() ?> Detik<br>
                    Penggunaan memori: <?= $this->benchmark->memory_usage() ?>
                    
                </p>
            </div>
        </div>
    </div>
</footer>