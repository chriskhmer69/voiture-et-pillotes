<div class="card text-center shadow my-3">
    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= $car["name"] ?></h2>
    </div>

    <div class="card-body">
        <img src="<?= $car["coverImage"] ?>" class="img-fluid" alt="photo de <?= $car["name"] ?>">
        <hr>
        <p>Origine: <?= $car["pays"] ?>

        </p>

        <p>Puissance: <span class="badge badge-info"><?= $car["power"] ?> CH</span></p>

        <p>0 à 100 km/h: <span> <?= $car["perf"] ?> sec</span></p>

        <p>Réserver maintenant !</p>

        <button class="btn btn-primary ">Réserver</button>
    </div>
</div>
<hr>
<h2 class="card-title"><?= ucwords($car["name"]) ?></h2>

<p>Puissance: <span class="<?php echo ($car['power'] < 1000) ? 'badge badge-danger' : (($car['power'] >= 1000 && $car['power'] <= 1200) ? 'badge badge-warning' : 'badge badge-success') ?>"><?php echo $car['power'] ?> CH</span></p>
<p>Origine: <?php echo isset($car['pays']) ? mb_strtoupper($car['pays'], 'UTF-8') : 'NC'; ?></p>

<p>0 à 100 km/h: <span> <?php echo isset($car['perf']) ? $car['perf'] . ' sec' : 'NC'; ?></span></p>
