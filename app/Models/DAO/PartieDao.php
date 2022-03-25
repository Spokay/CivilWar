<?php
namespace App\Models\DAO;
use App\Models\DAO\AccesBdd;
use App\Models\entities\Partie;
use PDO;
/**
 * @access public
 * @package projetBaston.model.DAO
 */
class PartieDao {
    private $connexion;

    public function __construct()
    {
        $this->setConnexion();
    }

    /**
     * @return mixed
     */
    public function getConnexion()
    {
        return $this->connexion;
    }

    public function setConnexion()
    {
        $acces =  new AccesBdd();
        $this->connexion = $acces->getConnexion();
    }


}
?>
