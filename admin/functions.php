<?php

funcion getTitle(){
 global $pageTitle;
    if(isset($pageTitle)){
        echo $pageTitle;
        
    }else{
        echo'default';
        
    }
}

?>