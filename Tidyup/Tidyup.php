<?php

//In this exercise you will need to use PHP to handle a request to process an Ajax form. 
//The form will add a new vehicle to the database and will contain the following fields: 
//    - Make - Model - Year - Colour 
//The form will be processed in PHP. A success or error message will be displayed 
//depending on the entry. 
//Note: you do not need to use AJAX or SQL to do this, only PHP. 



if ($_POST) 
{

    if (empty($_POST['make'])) 
    {
    echo "<div>You need a make!</div>";
    }
    elseif (empty($_POST['model'])) 
    {
    echo "<div>You need a model !</div>";
    }
    elseif(empty($_POST['year']))
    {
    echo "<div>You need a valid year!</div>";
    }
    elseif(empty($_POST['color']))
    {
    echo "<div>You need to choose a valid color!</div>";
    }
    //dbase cars.sql presumably exists...
    else 
    {
        $sql= "INSERT INTO cars (make, model, year, color) VALUES ('$_POST[make]','$_POST[model]''$_POST[year]''$_POST[color]'"; 
    }
}

?>

