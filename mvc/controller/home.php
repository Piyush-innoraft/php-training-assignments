<?php
class homeController{
    public $obj;
    function __construct()
    {
         include('/var/www/abc~/mvc/model/home.php');
         $this->obj=new homeModel();
    }

    
    function home(){
        $this->obj->home();
    
        include '/var/www/abc~/mvc/view/header.php';
        include '/var/www/abc~/mvc/view/page.php';
        include '/var/www/abc~/mvc/view/footer.php';
    }
    function about(){
        echo "about";
                include '/var/www/abc~/mvc/view/header.php';
        include '/var/www/abc~/mvc/view/page.php';
        include '/var/www/abc~/mvc/view/footer.php';
    }

}

?>