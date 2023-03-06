<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <?php

    /* tableaux numérotés */

    $recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

    // On peut aussi faire en $recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');

    $recipes[0] = 'Cassoulet';
    $recipes[1] = 'Couscous';
    $recipes[2] = 'Escalope Milanaise';

    echo $recipes[0], $recipes[1], $recipes[2];


    /* Tableau associatif */

        // Une bien meilleure façon de stocker une recette
        
        $recipe = 
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets, Etape 2 : des saucisses, Etape 3 : ...',
            'author' => 'avo.yera@exemple.com',
            'enabled' => true,
        ];

        echo $recipe['title'];


        
        $recipes = [
            ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
            ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
        ];
        
        for ($lines = 0; $lines <= 1; $lines++) {
            echo $recipes[$lines][0];
        }



        // Déclaration du tableau des recettes
        $recipes = 
        [
            ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
            ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false,],
        ];

        foreach ($recipes as $recipe) 
        {
            echo $recipe[0]; // Affichera Cassoulet, puis Couscous
        }


        $recipe = [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'laurene.castor@exemple.com',
        ];
        
        foreach($recipe as $property => $propertyValue)
        {
            echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
        }

        /* Il va être indiqué $ php exemple.php 
        [title] vaut Salade Romaine
        [recipe] vaut Etape 1 : Lavez la salade ; Etape 2 : euh ...
        [author] vaut laurene.castor@exemple.com */
        





        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
        ];
        
        echo '<pre>';
        print_r($recipes);
        echo '</pre>';

        // La balise <pre> nous permet d'avoir un affichage plus correct

    ?>
</body>

</html>