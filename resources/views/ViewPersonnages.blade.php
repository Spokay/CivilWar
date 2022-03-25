@extends('layout')
@section('content')
<table>
    <thead>
    <th>Nom</th>
    </thead>
    <tbody>
    <?php
    foreach($listPersos as $personnage){

    ?>
    <tr>
        <td><?= $personnage->getPersoNom() ?></td>
        <td>
            <form action="/personnageDetails/" method="get" class="formPersoActions">
                <input type="hidden" name="id" value="<?= $personnage->getPersoId(); ?>" class="hidden-input">
                <input type="submit" value="AFFICHER" name="afficherPerso" class="input">
                <input type="submit" value="MODIFIER" name="modifierPerso" class="input">
                <input type="submit" value="SUPPRIMER" name="supprimerPerso" class="input">

            </form>
            <!--<a href="" type="submit" value=""  class="input">bonjour</a>-->
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
@endsection
