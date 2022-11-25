<?php
 include 'phpCode/SqlConn.php';
class Producto
{
    private $producto;
    private $prodID;
    private $prodSeller;
    private $prodName;
    private $prodDesc;
    private $prodIsQuotable;
    private $prodPrice;
    private $prdStock;
    private $prodReview;
    private $prodIsApproved;
    private $prodWhoApprove;
    private $ProdQuery;//variable para usar la conexion a sql, igualar a la que se este utilizando

    public function __construct()
    {
        
    }

    private function GetProducts()// funcion para consultar todos los productos
    {

    }

    private function GetFilteredProd()//funcion para consultar productos
    {

    }

    private function GetProductByID()
    {

    }

    private function addProductoToCart()
    {

    }

    private function setProdQuotePrice()
    {
        
    } 
}