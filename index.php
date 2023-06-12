<?php
    $film2 = [
        'dure' => 121,
    ];
    
    $films = [
        [
            'titre' => 'Le Noir',
            'dure' => 121,
            'annee' => 1995,
            'adulte' => true,
            'genre' => 'historique',
        ],
        [
            'titre' => 'Les enfants juifs',
            'dure' => 60,
            'annee' => 1945,
            'adulte' => false,
            'genre' => 'humour',
        ],
        [
            'titre' => 'Caca',
            'dure' => 3,
            'annee' => 2023,
            'adulte' => true,
            'genre' => 'porno',
        ],
        [
            'titre' => 'Je suis amoureux de ma belle mère',
            'dure' => 80,
            'annee' => 2013,
            'adulte' => true,
            'genre' => 'amour',
        ],
        [
            'titre' => 'La Poule',
            'dure' => 1,
            'annee' => 2022,
            'adulte' => true,
            'genre' => 'porno',
        ],
    ];
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Tableau test</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    <div class="container">
        <h1>Affichage de film de morveu</h1>
        <?php foreach($films as $enfant) : ?>
            <?php if (array_key_exists('adulte', $enfant) && $enfant['adulte'] == false): ?>

                <article>
                    <h3><?php echo $enfant['titre']; ?></h3>
                    <div><?php echo $enfant['dure']; ?></div>
                    <i><?php echo $enfant['genre']; ?></i>
                </article>

            <?php endif; ?>
        <?php endforeach ?>
    </div>
    </body>
</html>