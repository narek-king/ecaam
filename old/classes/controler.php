<?php

/**
 * Created by PhpStorm.
 * User: King
 * Date: 11/25/2015
 * Time: 11:57 AM
 */
class controler
{
    private $url;
    private $lang;
    private $categoria, $page = 1;
    private $id;

    public function __constructor ($url){
        $this->url = $url;


    }

    private function setlang ($urllang){
        if (isset($this->lang)){
            $_SESSION['lang']=$this->lang;
            setcookie('lang', $this->lang, time()+(3600*24*30));
        }
        elseif (isset($_SESSION['lang'])){
            $this->lang=$_SESSION['lang'];

        }
        else if (isset($_COOKIE['lang'])){
            $this->lang=$_COOKIE['lang'];
        }
        else {
            $this->lang="am";
        }
        switch($urllang){
            case 'en':
                $lang_file='lang.eng.php';
                break;
            case 'am':
                $lang_file='lang.am.php';
                break;
            default:
                $lang_file='lang.am.php';
        }
        include_once (BASE_URL."/includes/languiges/".$lang_file);
    }

}