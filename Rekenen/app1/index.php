<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Ids Osinga - Alfa-college</title>
</head>

<body>
    <!-- als je bootstrap gebruikt, zet dan alles in de container-class -->
    <div class="container">


        <!-- hier volgt de navigatiebalk -->
        <?php include '../inc/navbar.php'; ?>
        <!-- einde navigatiebalk-->


        <div class="text-center">
        <h1>Tafel genereer-app</h1>
    </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form class="row g-3 mb-2">
                    <div class="col-md-3">
                        <label for="inputTafelvan" class="form-label">Tafel van</label>
                        <input type="number" class="form-control" id="inputTafelvan">
                    </div>
                    <div class="col-md-3">
                        <label for="inputTafeltot" class="form-label">Tafel tot</label>
                        <input type="number" class="form-control" id="inputTafeltot">
                    </div>
                    <div class="d-grid col-md-6 mt-5">
                        <button type="button" class="btn btn-primary" onclick="showTafel()">GO</button>
                    </div>
                </form>
                <div class="card text-center">
                    <div class="card-header">
                        Tafel van ...
                    </div>
                    <div id="tafel" class="card-body">
                    </div>
                    <div class="card-footer text-body-secondary">
                        made by OSD
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="app1script.js"></script>
</body>

</html>