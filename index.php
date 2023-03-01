<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <?php
             //             0                       1                    2       3
      /* 0 */$gregory = ['Grégory Yéramian', 'gregory.gregory@exemple.com', 'Looool', 27];
      /* 1 */$damien = ['Damien Petrovich', 'damien.petrovich@exemple.com', 'devine', 35];
      /* 2 */$leon = ['Léon Brutelle', 'leon.brubru@exemple.com', 'WinKs', 29];

        $users = [$gregory, $damien, $leon];

        echo $users[2][0]; // "Léon Brutelle"

        $lines = 3; // nombre d'utilisateurs dans le tableau
        $counter = 0;

        while ($counter < $lines) 
        {
            echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
            $counter++; // Ne surtout pas oublier la condition de sortie !

            // prénom et email
            // prénom et email
            // prénom et email 
            // Plus rien vu qu'il y a que 3 lines et pas d'autres personnes dans le tableau
        }


        $lines = 1;

        while ($lines <= 100) 
        {
            echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
            $lines++; // $lines = $lines + 1

            // while on peut le remplacer par "tant que"
            // Tant que $lines est inférieur ou égale à 100 alors on répète la phrase en rajoutant une ligne en plus à chaque fois grace à $lines ++ jusqu'à 100
        }


        /*
        $lines = 1;

        while ($lines <= 100)
        {
            echo 'Ceci est la ligne n°' . $lines . '<br />';
            $lines++;
        }

        <!--

        Ceci est la ligne n°1
        Ceci est la ligne n°2
        Ceci est la ligne n°3
        ...
        -->
        */




        for ($lines = 0; $lines <= 2; $lines++)
        {
            echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
        }

        // Ca revient au même que le while plus haut





    ?>
</body>

</html>