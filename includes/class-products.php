<?php

class Products
{

   

    /*
    *retrieve all products from database 
    */
    public function listAllProducts()
    {
        return DB::connect()->select('SELECT * FROM products',
        [],
        true);
    }


    /**
     * Find product by id 
     */
    public function findProduct( $product_id )
    {
        return DB::connect()->select("SELECT * from products WHERE id = :id",
         [
             'id' => $product_id
         ]
        );
         
    }
}