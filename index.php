<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Import Bootstrap -->

    <!-- Import CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /Import CSS -->

    <!-- Titolo scheda -->
    <title>PHP HOTELS</title>
    <!-- /Titolo scheda -->

</head>

<body>
    <div class="container mt-5">
        <!-- Header -->
        <header>
            <h1 class="text-center text-uppercase">PHP HOTELS</h1>
        </header>
        <!-- /Header -->

        <!-- Main -->
        <main>
            <form action="index.php" method="get" class="my-4 d-flex gap-5 align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="true" name="only-parking" id="only-parking">
                    <label class="form-check-label" for="only-parking">
                        Only Parking
                    </label>
                </div>
                <div class="rate d-flex align-items-center">
                    <label for="hotel-rate" class="form-label m-0 pe-2">Hotel Rate:</label>
                    <input type="text" class="form-control" id="hotel-rate" name="hotel-rate" placeholder="Write a number between 1 and 5">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>

            <div class="hotels-list">
                <table class="table table-striped">
                    <thead class="table-primary">
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($hotels as $hotel) {
                            echo "<tr>";

                            foreach ($hotel as $feature => $result) {
                                if ($feature === "parking" && $result === true) {
                                    echo "<td>Yes</td>";
                                } elseif ($feature === "parking" && $result === false) {
                                    echo "<td>No</td>";
                                } else {
                                    echo
                                    "<td>$result</td>";
                                }
                            }

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- /Main -->

    </div>
</body>

</html>