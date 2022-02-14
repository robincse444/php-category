<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result = [];
    public function index()
    {
        return [
            0=> [
                'id' => 1,
                'category_id' => 1,
                'name' => 'T-Shirt',
                'price' => 700,
                'description' => 'Nice Product',
                'image' => 'assets/img/1p.jpg'
            ],
            1=> [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Pant',
                'price' => 1000,
                'description' => 'Nice Product of Pant',
                'image' => 'assets/img/2p.jpg'
            ],
            2=> [
                'id' => 3,
                'category_id' => 2,
                'name' => 'Womans Shaari',
                'price' => 9000,
                'description' => 'Nice Product',
                'image' => 'assets/img/w1.jpg'
            ],
            3=> [
                'id' => 3,
                'category_id' => 2,
                'name' => 'Womans kuti',
                'price' => 1900,
                'description' => 'Nice Product',
                'image' => 'assets/img/w2.jpg'
            ],
            4=> [
                'id' => 4,
                'category_id' => 3,
                'name' => 'Kids Shirt',
                'price' => 900,
                'description' => 'Nice Product ',
                'image' => 'assets/img/k1.jpg'
            ],
            5=> [
                'id' => 5,
                'category_id' => 3,
                'name' => 'Kids T-Shirt',
                'price' => 400,
                'description' => 'Nice Product',
                'image' => 'assets/img/k2.jpg'
            ],
        ];
    }

    public function shortProducts ($categoryId)
    {
        $this->allProducts = $this->index();

       foreach ($this->allProducts as $product)
       {
           if ($product['category_id'] == $categoryId)
           {
               array_push($this->result, $product);
           }
       }
       return $this->result;
    }
    public function getProductDetails($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }

}