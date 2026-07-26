<?php

//include '../model/category.php';
include '../model/book.php';

function add_book() {
    $categories = get_all_categories();
    
    //gestion du formulaire
    if (isset($_POST["submit"])) {
        //vérifier si les champs existe
    // champ manquant ou vide → erreur
    if (!empty($_POST["title"]) && !empty($_POST["summary"]) && !empty($_POST["author"]) && !empty($_POST["published_at"]) && !empty($_POST["category_id"])) { 
        //nettoyer les données
            $title = trim($_POST["title"]);
            $summary = trim($_POST["summary"]);
            $author = trim($_POST["author"]);
            $published_at = trim($_POST["published_at"]);
            $category_id = (int) $_POST["category_id"];
    //tester si le champs summary est plus petit que 255
    if(strlen($summary)<255){}
    }
    }
}
        // //ajouter à la bdd
        //afficher un message
    include '../view/template_add_book.php';
