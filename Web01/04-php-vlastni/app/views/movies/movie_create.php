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
                <a class="navbar-brand" href="#">Knihovna</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Přepnout navigaci">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../../views/movies/movie_create.php">Přidat film</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../controllers/movie_list.php">Výpis filmů</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Přidat nový film</h2>
                    </div>
                    <div class="card-body">
                        <form action="../../controllers/MovieController.php" method="post" enctype="multipart/form-data">
                            
                        <div class="mb-3">
            <label for="title" class="form-label">Název filmu: <span class="text-danger">*</span></label>
            <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Žánr:</label>
                    <input type="text" id="genre" name="genre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="release_year" class="form-label">Rok vydání: <span class="text-danger">*</span></label>
                    <input type="number" id="release_year" name="release_year" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Hodnocení (např. 8.5):</label>
                    <input type="number" id="rating" name="rating" class="form-control" step="0.1">
                </div>

                <div class="mb-3">
                    <label for="duration" class="form-label">Délka (v minutách):</label>
                    <input type="number" id="duration" name="duration" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="director" class="form-label">Režisér:</label>
                    <input type="text" id="director" name="director" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="summary" class="form-label">Popis:</label>
                    <textarea id="summary" name="summary" class="form-control" rows="3"></textarea>
                </div>


                            <button type="submit" class="btn btn-success w-100">Uložit film</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    

</body>
</html>