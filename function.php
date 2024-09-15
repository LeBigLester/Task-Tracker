<?php

function add(String $description)
{
    if(file_exists("task.json")){
        $id = 1;
    }else{
        //Ouverture du fichier
        $fichier = fopen("task.json","a+");
        $date = new DateTime("now",new DateTimeZone("Africa/Brazzaville")); 
        $json = "[
    {
        \"id\" : 1,
        \"description\" : \"" . $description . "\",
        \"status\" : \"to do\", 
        \"created_at\" : \" "  . $date->format("d/m/y:H/i/s") . " \",
        \"updated_at\" : \" "  . $date->format("d/m/y:H/i/s") . " \"
    }
]";
        fputs($fichier,$json);
        //Fermeture du fichier
        fclose($fichier);
        $id = 1;
    }
    
    printf("Tache ajoutée avec succès ID " . $id);
}


function listTask(String $status = "")
{
    //Ouverture du fichier
    $fichier = fopen("task.json","r");
    switch ($status)
    {
        case "to-do" :
            break;
        case "in-progresse" :
            break;
        case "done" : 
            break;
        default :
            break;
    }
    fclose($fichier);
}
?>