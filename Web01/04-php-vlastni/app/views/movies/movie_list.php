<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidat film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Filmová knihovna</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Přepnout navigaci">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../views/movies/movie_create.php">Přidat film</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="../../controllers/movie_list.php">Výpis filmů</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Vypis filmů</h1>
        <?php if(!empty($movies)): ?>
            <h2>hruby vypis</h2>
            <?php var_dump($movies); ?>
            <h3>lepsi vypis</h3>
            <pre><?php print_r($movies); ?></pre>
            <h3>tabulkovy vypis</h3>           
            <table class="table table-bordered table-hover"> 
                <thead class="table-primary">
                <tr>
                    <th>Název</th>
                    <th>Žánr</th>
                    <th>Rok vydání</th>
                    <th>Hodnocení</th>
                    <th>Délka (min)</th>
                    <th>Režisér</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($movies as $movie): ?>
                        <tr>
                            <td><?= htmlspecialchars($movie['title']) ?></td>
                            <td><?= htmlspecialchars($movie['genre']) ?></td>
                            <td><?= htmlspecialchars($movie['release_year']) ?></td>
                            <td><?= htmlspecialchars($movie['rating']) ?></td>
                            <td><?= htmlspecialchars($movie['duration']) ?></td>
                            <td><?= htmlspecialchars($movie['director']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        <?php else: ?>
            <div class="alert alert-info">zadný film nebyl nalezen</div>
        <?php endif;?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    
    

</body>
</html>