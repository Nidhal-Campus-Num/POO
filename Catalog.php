<?php
require_once 'Article.php';
require_once 'connexion.php';


class Catalog
{
    private $list_article=array();

    public function __construct(){
        $bdd=connectBdd();
        $req=$bdd->query('SELECT * FROM products');
        while ($data=$req->fetch()){
            $item=new Article($data['id'],$data['name'], $data['description'], $data['price'], $data['weight'], $data['stock'], $data['image'], $data['available']);
            $this->list_article[$data['id']]=$item;
        }
    }


    public function getListArticle()
    {
        return $this->list_article;
    }
}