<?php
    $dbc = new PDO('mysql:host=localhost;dbname=id4747025_school;port=8080' ,
        'id4747025_yrostem', 'yad123');

    $dbc->query('SELECT * FROM cursist');