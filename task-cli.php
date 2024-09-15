<?php

//Recuperation des arguments
$args = $_SERVER['argv'];
if(count($args) == 1)
{
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
}else{
    switch($args[1])
    {
        case "add" :
            if(isset($args[2]) && !empty($args[2]))
            {

            }else{
                printf("Veillez entrer le nom de la tache");
            }
            break;
        case "update" :
            break;
        case "delete" :
            break;
        case "mark-in-progress" :
            break;
        case "mark-done" :
            break;
        case "list" :
            break;
        default :
            printf("Cette commande n'existe pas");
    }
}

function add(String $name)
{
    echo "add a new list";
}

function update(int $id, String $name)
{
    echo "update list";
}

function delete(int $id)
{
    echo "delete list";
}

function makeProgresse($id)
{

}

function makeDone($id)
{

}

function listTask(String $status = "")
{

}
?>