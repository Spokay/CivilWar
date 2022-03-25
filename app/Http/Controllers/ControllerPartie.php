<?php
namespace App\Http\Controllers;
use App\Models\DAO\PersonnageDao;
use App\Models\entities\Personnage;
use Illuminate\Http\Request;
class ControllerPartie extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persodao = new PersonnageDao();
        $listPersos = $persodao->getAll();
        return view('ViewChoisirPersos', compact('listPersos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initialiserPartie(){
        if(!empty($_POST)){
            extract($_POST);
            $persodao = new PersonnageDao();
            $_SESSION['selectedPersos'] = [];
            //$playablePersos = [];
            foreach ($choisirPerso as $personnage){
                $perso = $persodao->getOne($personnage);
                $_SESSION['selectedPersos'][] = $perso;
                //$playablePersos[] = $perso;
            }

            return view('ViewInitPartie');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function commencerPartie(){
        $armes = $_SESSION['selectedPersos'][0]->getArmes();
        $armeI = rand(0,2);
        $armeUtilisee = $armes[$armeI];
        $_SESSION['selectedPersos'][1]->setPersoVie($_SESSION['selectedPersos'][1]->getPersoVie() - $armeUtilisee->getDegats());
        return view('ViewPartieOnGoing', compact('armeUtilisee'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function continuerPartie(){
        $armes[] = $_SESSION['selectedPersos'][0]->getArmes();
        $armeUtilisee = $armes[rand(0,2)];

        return view('ViewOnGoingPartie', compact('armeUtilisee'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frapper(){
        $attaquant = $_SESSION['attaquant'];
        $victime = $_SESSION['victime'];


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
