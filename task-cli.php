<?php
require_once "function.php";
//Recuperation des arguments
$args = $_SERVER['argv'];
if (!isset($args[1])) {
    printf("
        # Ajouter une list
        task-cli add [nom de la list]

        # Mettre à jour ou supprimer une liste
        task-cli update [id] [nom de la liste]
        task-cli delete [id]

        # Mettre une liste en progression
        task-cli mark-in-progress [id]

        # Mettre une liste effecuté
        task-cli mark-done [id]

        # Listé toutes les listes
        task-cli list

        # Listé les liste par status
        task-cli list done
        task-cli list todo
        task-cli list in-progress
        
        ");
} else {
    switch ($args[1]) {
        case "add":
            if (isset($args[3])) {
                printf("Trop d'arguments utilisé pour cette commande");
                die;
            }
            //Verifiation de l'existence de la description de la tache
            if (!isset($args[2]) || empty($args[2])) {
                printf("la description de la tache manquante");
                die;
            }
            add($args[2]);
            break;
        case "update":
            //Verification de l'existence d'un 3e argument
            if (isset($args[4])) {
                printf("Trop d'arguments utilisé pour cette commande");
                die;
            }

            //Verificatin de l'existence de l'id
            if (!isset($args[2]) || empty($args[2])) {
                printf("L'identifiant de la tache est manquante");
                die;
            }

            //Verification de l'existence de la description
            if (!isset($args[3]) || empty($args[3])) {
                printf("La description de la tache est manquante");
                die;
            }
            update($args[2], $args[3]);
            break;
        case "delete":
            //Verification de l'existence d'un 3e argument
            if (isset($args[3])) {
                printf("Trop d'arguments utilisé pour cette commande");
                die;
            }
            //Verificatin de l'existence de l'id
            if (!isset($args[2]) || empty($args[2])) {
                printf("L'identifiant de la tache est manquante");
                die;
            }
            delete($args[2]);
            break;
        case "mark-in-progress":
            //Verification de l'existence d'un 3e argument
            if (isset($args[3])) {
                printf("Trop d'arguments utilisé pour cette commande");
                die;
            }
            //Verificatin de l'existence de l'id
            if (!isset($args[2]) || empty($args[2])) {
                printf("L'identifiant de la tache est manquante");
                die;
            }
            mark($args[2], "in-progress");
            break;
        case "mark-done":
            //Verification de l'existence d'un 3e argument
            if (isset($args[3])) {
                printf("Trop d'arguments utilisé pour cette commande");
                die;
            }
            //Verificatin de l'existence de l'id
            if (!isset($args[2]) || empty($args[2])) {
                printf("L'identifiant de la tache est manquante");
                die;
            }
            mark($args[2], "done");
            break;
        case "list":
            //Verification de l'existence d'un 3e argument
            if (isset($args[3])) {
                printf("Trop d'arguments utilisé pour cette commande");
                die;
            }
            //Verificatin de l'existence de l'id
            if (isset($args[2]) || !empty($args[2])) {
                switch ($args[2]) {
                    case "todo":
                        listTask("todo");
                        break;
                    case "in-progress":
                        listTask("in-progress");
                        break;
                    case "done":
                        listTask("done");
                        break;
                    default:
                        printf("Cet argument n'existe pas");
                        break;
                }
                die;
            }
            listTask();
            break;
        default:
            printf("Cette commande n'existe pas");
    }
}
