@extends('layout')

@section('content')

    <ul>
        <li><?= $perso->getPersoId(); ?></li>
        <li><?= $perso->getPersoNom(); ?></li>
        <li><?= $perso->getPersoVie(); ?></li>
        <li><?= $perso->getEquipe()->getNom(); ?></li>
        <?php
        foreach ($perso->getArmes() as $arme){
            echo "<li>".$arme->getArmeNom()." | ".$arme->getDegats()."</li>";
        }
        ?>
    </ul>

@endsection
