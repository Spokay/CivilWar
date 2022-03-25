<?php
namespace App\services;

use App\Models\DAO\PersonnageDao;
use App\Models\DAO\ArmeDao;
use App\Models\DAO\EquipeDAO;

/**
 * @access public
 * @package projetBaston.services
 */
class GestionCRUD {

	/**
	 * @access public
	 * @return Array
	 * @ReturnType Array
	 */
    public function getListPerso() {

        $persodao = new PersonnageDao();
        $listPersos = $persodao->getAll();

        return $listPersos;
    }

    public function voirDetailPerso($id){
        $persodao = new PersonnageDao();
        $perso = $persodao->getOne($id);

        require(realpath(dirname(__FILE__)) . '/../../projetBaston/views/viewDetailPerso.php');
    }
    public function voirModifierPerso($id){
        $persodao = new PersonnageDao();
        $armedao = new ArmeDao();
        $equipedao = new EquipeDao();
        $perso = $persodao->getOne($id);
        $armes = $armedao->getAll();
        $equipes = $equipedao->getAll();
        require(realpath(dirname(__FILE__)) . '/../../projetBaston/views/viewModifierPerso.php');
    }

    public function traitementModifierPersonnage($id){
        if (isset($_POST)){
            $persodao = new PersonnageDao();
            $armedao = new ArmeDao();
            $armeTab = array();
            foreach ($_POST['persoArmes'] as $arme){
                $armeTab[] = $armedao->getOne($arme);
            }
            $arrPers = array('id' => $id, 'nom' => $_POST['persoNom'] ,'equipe' => $_POST['persoEquipe'], 'armes' => $armeTab);

            $perso = new Personnage($arrPers);
            $persodao->update($perso);
        }
//        $this->voirDetailPerso($id);
    }
}
