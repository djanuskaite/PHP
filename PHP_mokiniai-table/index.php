<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Mokiniai</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<?php
$data = [
    '5b' => [
        rand(100, 200) => [
            'Matylda',
            'Rooney',
            'grades' => [
                'matematika' => 9,
                'IT' => 5,
                'anglu' => 8
            ]
        ],
        rand(100, 200) => [
            'Ignacy',
            'Bonilla',
            'grades' => [
                'matematika' => 5,
                'IT' => 6,
                'anglu' => 4
            ]
        ],
        rand(100, 200) => [
            'Margo',
            'Wagstaff',
            'grades' => [
                'matematika' => 7,
                'IT' => 10,
                'anglu' => 6
            ]
        ],
        rand(100, 200) => [
            'Alaw',
            'Howard',
            'grades' => [
                'matematika' => 4,
                'IT' => 9,
                'anglu' => 8
            ]
        ],
        rand(100, 200) => [
            'Gillian',
            'Willis',
            'grades' => [
                'matematika' => 4,
                'IT' => 7,
                'anglu' => 7
            ]
        ],
        rand(100, 200) => [
            'Zahrah',
            'Mckenna',
            'grades' => [
                'matematika' => 9,
                'IT' => 9,
                'anglu' => 8
            ]
        ],
        rand(100, 200) => [
            'Gurpreet',
            'Keller',
            'grades' => [
                'matematika' => 8,
                'IT' => 7,
                'anglu' => 8
            ]
        ],
        rand(100, 200) => [
            'Rikki',
            'Harris',
            'grades' => [
                'matematika' => 10,
                'IT' => 6,
                'anglu' => 8
            ]
        ],
        rand(100, 200) => [
            'Deanne',
            'Ahmed',
            'grades' => [
                'matematika' => 9,
                'IT' => 7,
                'anglu' => 8
            ]
        ],
        rand(100, 200) => [
            'Humairaa',
            'Barajas',
            'grades' => [
                'matematika' => 6,
                'IT' => 10,
                'anglu' => 8
            ]
        ]
    ]
];

?>

<div class="container mt-5">
<h1 class="text-center mb-5 mt-5">Mokinių lentelė (Responsive Table)</h1>
<table class="rwd-table">

    <tr>
        <th>Klasė</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Kontrolinių darbų vidurkis</th>
        <th>Duomenų formavimo data</th>
    </tr>

    <tbody>
    <?php foreach ($data as $key => $mokinys):?>
        <?php foreach ($mokinys as $number => $names):?>

            <tr>
<!--                key - klase // number - kodas   -->
                <td data-th><?= ($key); ?></td>
                <td data-th><?= ($number); ?></td>
<!--                 name, lastname, grades     -->
                <?php foreach ($names as $some => $value): ?>
                    <?php if (is_array($value)): ?>
<!--                    vidurkiai     -->
                        <td data-th><?= number_format(array_sum($value) / count($value),1, ",", " "); ?></td>
                    <?php else: ?>
<!--                    data     -->
                        <td data-th><?= ucfirst($value); ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <td data-th><?=date("Y-m-d");?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </tbody>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
