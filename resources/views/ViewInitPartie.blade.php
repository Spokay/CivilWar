@extends('layout')

@section('content')
    <?php
    static $attaquant = 0;
    static $victime = 1;
    static $logs = '';
    $_SESSION['attaquant'] = $attaquant;
    $_SESSION['victime'] = $victime;
    $_SESSION['logs'] = $logs;
?>
    <div class="card-body d-flex justify-content-between">
    <div class="card border-primary p-2 mb-3" style="width: 40%;">
        <div class="card-header bg-primary" style="color:white;"><?= $_SESSION['selectedPersos'][0]->getPersoNom() ?></div>
        <div class="card-body text-primary" style="padding:0px;">
            <img src="<?=  $_SESSION['selectedPersos'][0]->getpersoAvatar() ?>" alt="" class="card-img" width="200px" height="200px">
            <div class="vertical-menu" >
                <h3>Equipe : <?=  $_SESSION['selectedPersos'][0]->getEquipe()->getNom() ?></h3>
                <h4>Vie : <?=  $_SESSION['selectedPersos'][0]->getPersoVie() ?></h4>
                <?php
                foreach ( $_SESSION['selectedPersos'][0]->getArmes() as $arme){
                    echo "<a href='#'>".$arme->getArmeNom()." | ".$arme->getDegats()."</a>";
                }
                ?>
            </div>
        </div></div>
    <div class="main-button" style="margin:0 20px">
        <a href="/commencerPartie"><button>Commencer la partie</button></a>
    </div>
    <div class="card border-primary p-2 mb-3" style="width: 40%;">
        <div class="card-header bg-primary" style="color:white;"><?=  $_SESSION['selectedPersos'][1]->getPersoNom() ?></div>
        <div class="card-body text-primary" style="padding:0px;">
            <img src="<?= $_SESSION['selectedPersos'][1]->getpersoAvatar() ?>" alt="" class="card-img" width="200px" height="200px">
            <div class="vertical-menu" >
                <h3>Equipe : <?= $_SESSION['selectedPersos'][1]->getEquipe()->getNom() ?></h3>
                <h4>Vie : <?= $_SESSION['selectedPersos'][1]->getPersoVie() ?></h4>
                <?php
                foreach ($_SESSION['selectedPersos'][1]->getArmes() as $arme){
                    echo "<a href='#'>".$arme->getArmeNom()." | ".$arme->getDegats()."</a>";
                }
                ?>
            </div>
        </div></div></div>
@endsection
