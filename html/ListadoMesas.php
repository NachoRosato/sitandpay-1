<div class="container-fluid">
    <div class="row">
    <?php
    foreach ($this->mesas as $m) { ?>
        <div class="col-lg-3">
            <div class="card text-white mb-3 <?= $m['estado'] == 1 ? 'bg-danger' : 'bg-success'; ?>">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mesa n° <?= $m['id_mesa'] ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>