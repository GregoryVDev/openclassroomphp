<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <?php
    $isEnabled = true; // La condition d'accès

    if ($isEnabled == true) {
        echo "Vous êtes autorisé(e) à accéder au site ✅";
    } else {
        echo "Accès refusé ❌ ";
    }



    $isAllowedToEnter = "Oui";

    // SI on a l'autorisation d'entrer
    if ($isAllowedToEnter == "Oui") {
        // instructions à exécuter quand on est autorisé à entrer
        // SINON SI on n'a pas l'autorisation d'entrer
    } elseif ($isAllowedToEnter == "Non") {
        // instructions à exécuter quand on n'est pas autorisé à entrer
    }   // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    else {
        echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
    }



    $isAllowedToEnter = true;

    // Si pas autorisé
    if (!$isAllowedToEnter) { // Le ! permet de dire qu'il est différent du "true" plus haut. On peut aussi mettre if($isAllowedToEnter == false)
    }


    $isEnabled = true;
    $isOwner = false;
    $isAdmin = true;

    // && = et / || = ou

    if (($isEnabled && $isOwner) || $isAdmin) {
        echo 'Accès à la recette validé ✅';
    } else {
        echo 'Accès à la recette interdit ! ❌';
    }



    $chickenRecipesEnabled = true;

    if ($chickenRecipesEnabled) {
        echo '<h1>Liste des recettes à base de poulet</h1>';
    }

    // Ou alors un autre syntaxe alternative
    /* <?php $chickenRecipesEnabled = true; ?>

       <?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

       <h1>Liste des recettes à base de poulet</h1>

       <?php endif; ?><!-- Ni le ";" après le endif --> */


       $grade = 16;

    if ($grade == 0) 
    {
        echo "Tu es vraiment un gros nul !!!";
    } 
    elseif ($grade == 5) 
    {
        echo "Tu es très mauvais";
    }
     elseif ($grade == 7) 
    {
        echo "Tu es mauvais";
    }
     elseif ($grade == 10) 
    {
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    }
     elseif ($grade == 12) 
    {
        echo "Tu es assez bon";
    } 
    elseif ($grade == 16) 
    {
        echo "Tu te débrouilles très bien !";
    }
    elseif ($grade == 20) 
    {
        echo "Excellent travail, c'est parfait !";
    }
    else 
    {
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
    }

    // On peut aussi l'écrire d'une autre façon qui revient au même

    /* switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
} */


    $note = 12;

    switch ($note)
    {
        case 0:
            echo "Tu es merdique";
        break;

        case 5:
            echo "Tu es naze";
        break;

        case 7:
            echo "Tu n'as pas la moyenne, poursuit tes efforts";
        break;

        case 10:
            echo "Tu as pile poil la moyenne, attention la prochaine fois";
        break;

        case 12:
            echo "Tu as un peu plus que la moyenne, continues tes efforts";
        break;

        case 16:
            echo "Bonne note, bon projet";
        break;

        case 20:
            echo "Excellente note, travail bien fournis";
        break;

        default:
            echo "Désolé, je ne reconnais pas la note, recommence stp";
    }




    ?>
</body>

</html>