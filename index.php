<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <!-- echo date ('d/m/Y h:i:s') permet d'indiquer l'heure sur la page html (elle se régénère toute seule) -->
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <?php
            $userAge = 17; // La variable est créée et vaut 17
            $userAge = 23; // La variable est modifiée et vaut 23
            $userAge = 55; // La variable est modifiée et vaut 55


            //String
            $fullname = "Grégory Yéramian";
            $email = 'gregory.yeramian.devweb@exemple.com';

            echo "Bonjour $fullname et bienvenue sur le site ! <br >";


            // int (nombre entier)
            $userAge = 17;



            //float (nombre décimal)
            $price = 57.3;



            //Bool (booléen)

            $isAuthor = true;
            $isAdministrator = false;


            // NULL

            $noValue = NULL;

            $fullname = "Grégory Yéramian"; // String pour le prénom nom
            $userAge = 27; // l'âge 
            $userVille = "Tours"; // string pour la ville

            // Ouvrir des guillemets à chaque fois qu'on les referment pour le . $Variable .
            echo 'Bonjour ' . $fullname . ' vous avez ' . $userAge . ' ans et vous habitez à ' . $userVille . ' bienvenue à vous sur le site !';



            // (Les chaines de caractères) string = nom qui contient texte
            // (les nombres entiers) int = les nombres du type 1,2,3 ou -1,-2,-3
            // (Les nombres décimaux) float = Les nombres à virgules comme 14,738
            // (Les booléens) bool = un type qui stock vrai ou faux
            // (Rien) NULL = dire qu'une variable ne contient rien (l'absence de type)


            $number = 2 + 4; // $number prend la valeur 6
            $number = 5 - 1; // $number prend la valeur 4
            $number = 3 * 5; // $number prend la valeur 15
            $number = 10 / 2; // $number prend la valeur 5


            // Allez on rajoute un peu de difficulté
            $number = 3 * 5 + 1; // $number prend la valeur 16
            $number = (1 + 2) * 2; // $number prend la valeur 6


            $number = 10;
            $result = ($number + 5) * $number; // $result prend la valeur 150

            
            $number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
            $number = 10 % 3; // $number prend la valeur 1 car il reste 1


        ?>
    </body>
</html>