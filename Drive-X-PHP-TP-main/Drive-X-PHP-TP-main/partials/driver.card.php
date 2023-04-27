<div class="card text-center shadow my-3">
    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= $driver["fullName"] ?></h2>
    </div>

    <div class="card-body">

        <img src="<?= $driver["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullName"] ?>">
        <hr>

        <p>Origine: <?= $driver["pays"] ?></p>

        <p>Discipline:
            <span class="badge badge-success"><?= $driver["category"] ?></span>
        </p>

        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>
    </div>
</div>
<hr>

<h2 class="card-title"><?= ucwords($driver["fullName"]) ?></h2>

<span class="<?php switch($driver['category']) {
                case 'gymkhana':
                    echo 'badge badge-danger';
                    break;
                case 'nascar':
                    echo 'badge badge-warning';
                    break;
                case 'rallye':
                    echo 'badge badge-success';
                    break;
                case 'drag':
                    echo 'badge badge-info';
                    break;
                case 'formule 1':
                    echo 'badge badge-primary';
                    break;
                default:
                    echo 'badge badge-secondary';

                    <p>Origine: <?php echo isset($driver['pays']) ? mb_strtoupper($driver['pays'], 'UTF-8') : 'NC'; ?></p>
                    <p>Origine: <?php echo isset($driver['pays']) ? mb_strtoupper($driver['pays'], 'UTF-8') : 'NC'; ?></p>
                    <div class="card-body <?php echo ($driver['likeIts'] > 0) ? 'border border-success' : (($driver['likeIts'] < 0) ? 'border border-danger' : '') ?>">
                  
}

