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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>HOTEL</title>
</head>
<body>

    <label>HOTEL</label>

    <table class="table">
        <?php foreach($hotels as $hotelCatalogue) {?>
            <tr>
                <th class="table-primary">
                    Nome: 
                    <?php echo $hotelCatalogue['name'] ?>
                </th>
            </tr>
            <tr>
                <td class="table-success">
                    Descrizione: 
                    <?php echo $hotelCatalogue['description'] ?>
                </td>
            </tr>
            <tr>
                <td class="table-success">
                    Voto:
                    <?php echo $hotelCatalogue['vote'] ?>
                </td>
            </tr>
            <tr>
                <td class="table-success">
                    Km dal centro:
                    <?php echo $hotelCatalogue['distance_to_center'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>

    

    


     
    
</body>
</html>