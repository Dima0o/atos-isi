<?

require_once ('rb-mysql.php');
R::setup('mysql:host=localhost;dbname=tudok1kr_aida', 'tudok1kr_aida', '123456');
class Menu {

    function Naw (){
        $mass_menu=array('index'=>'Главная','catalog'=>'Товары','shares'=>'Акции','about'=>'О компании');
        return $mass_menu;
    }
}
class Products{
    public function All(){
        //$car=R::load('page',$_GET['id']);
        // $menu = R::loadAll('prod' );
        $query = R::findAll( 'prod' );
        return $query;
    }
    public function PageOne ($id){
        $car=R::load('page',$_GET['id']);
        return $car;
    }
    public function price(){

    }
}
?>