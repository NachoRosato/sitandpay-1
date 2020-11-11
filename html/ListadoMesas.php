<div class="container-fluid">
    <div class="row">
    <?php
    foreach ($this->mesas as $m) { ?>
        <div class="col-lg-3">
            <div class="card text-white mb-3 <?= $m['estado'] == 1 ? 'bg-danger' : 'bg-success'; ?>">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mesa n° <?= $m['id_mesa'];?></h5>
                    <p class="card-text">
                        <?php foreach ($this->ordenes as $orden) {
                            if ($orden['id_mesa'] == $m['id_mesa']) { ?>
                                <br><?=$menu['nombre'];?>
                            <?php }
                        } ?> <!-- fin del foreach -->
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>


ordenes
mesas
menus