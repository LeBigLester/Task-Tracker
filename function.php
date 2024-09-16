<?php

function add(String $description)
{
    if(file_exists("task.json")){
        //Lecture du fichier
        $json = file_get_contents("task.json");
        $array = json_decode($json);
        $task = array_pop($array);
        //Recuperation de l'id
        $id = $task->id +1;
        $date = new DateTime("now",new DateTimeZone("Africa/Brazzaville"));
        $json = "   ,{
        \"id\" : " . $id .",
        \"description\" : \"" . $description . "\",
        \"status\" : \"to do\", 
        \"created_at\" : \" "  . $date->format("d/m/y:H/i/s") . " \",
        \"updated_at\" : \" "  . $date->format("d/m/y:H/i/s") . " \"
    }";
        $contents = file("task.json",FILE_IGNORE_NEW_LINES);
        //Ajout de la chaine
        array_splice($contents,-1,0,$json);
        //Ajout des données
        file_put_contents("task.json",implode("\n",$contents));
    }else{
        //Ouverture du fichier
        $fichier = fopen("task.json","a+");
        $date = new DateTime("now",new DateTimeZone("Africa/Brazzaville")); 
        $json = "
[
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
    $json = file_get_contents("task.json");
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
    $array = json_decode($json);
    foreach($array as $task)
    {
        printf('
            ID : '. $task->id .'
            Description : '. $task->description . '
            status : ' . $task->status . '
            created_at : '. $task->created_at . '
            updated_at : '. $task->updated_at .'
        ');
    }
}
?>