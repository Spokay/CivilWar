@extends('layout')
@section('content')
    <form action="/partie" method="post" class="formPersoActions" >
        @csrf
    <table class="table">
        <thead>
        <th>Nom</th>
        <th>Vie</th>
        <th>Equipe</th>
        <th>Arme 1</th>
        <th>Arme 2</th>
        <th>Arme 3</th>
        <th>Sélectionner personnage</th>
        </thead>
        <tbody>
        <?php
        foreach($listPersos as $perso){

        ?>
        <tr>
            <td><?= $perso->getPersoNom(); ?></td>
            <td><?= $perso->getPersoVie(); ?></td>
            <td><?= $perso->getEquipe()->getNom(); ?></td>
            <?php
            foreach ($perso->getArmes() as $arme){
                echo "<td>".$arme->getArmeNom()." | ".$arme->getDegats()."</td>";
            }
            ?>
            <td>

                    <input type="checkbox" name="choisirPerso[]" value="<?= $perso->getPersoId(); ?>" class="checkboxHeroes">
                <!--<a href="" type="submit" value=""  class="input">bonjour</a>-->
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
        <input type="submit" value="Commencer partie" name="startGame" class="btn btn-primary">
    </form>
@endsection
