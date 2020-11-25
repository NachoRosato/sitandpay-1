<div class="container-fluid">
    <div class="row">
    <?php
    //Se listan las mesas, con su estado (ocupada 1 / vacia 0) y pedidos asignados.
    foreach ($this->mesas as $m) { ?>
        <div class="col-lg-3">
            <div class="card text-white mb-3 <?= $m['estado'] == 1 ? 'bg-danger' : 'bg-success'; ?>">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">Mesa n° <?= $m['id_mesa'];?></h5>
                    <p class="card-text">
                        <?php foreach ($this->ordenes as $ord) {
                            if ($ord['id_mesa'] == $m['id_mesa']) { 
                                foreach ($this->menus as $menu) {
                                    if ($menu['id_menu'] == $ord['id_menu'])
                                        echo "<p>" . $menu['nombre'] ."</p>";
                                }   
                            } 
                        } ?>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>