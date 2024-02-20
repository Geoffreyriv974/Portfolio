<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=wepost;charset=utf8", 'root', 'root');
} catch (Exception $e) {
    echo "Erreur :" . $e->getMessage();
}