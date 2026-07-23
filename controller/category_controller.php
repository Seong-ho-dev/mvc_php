<?php
//import du model (category)
include '../model/category.php';

function add_category(): void {
    //test si le formulaire est submit
    if (isset($_POST["submit"])) {
        //test si le champs est rempli
        if (!empty($_POST["category_name"])) {
           
        } else {
            $message =  "Le champs est vide";
        }
    }
    include '../view/template_add_category.php';
}
