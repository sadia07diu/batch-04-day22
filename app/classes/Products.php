<?php


namespace App\classes;


class Products
{

    protected $allProducts;
    protected $result =[];
    public function index(){
        return [
            0=>[
                "id"=>1,
                "category-id"=>1,
                "name"=>"T-shirt",
                "price"=>400,
                "description"=>"product description 1",
                "image"=>"assets/img/a1.jpg"
            ],
            1=>[
                "id"=>1,
                "category-id"=>1,
                "name"=>"b-shirt",
                "price"=>700,
                "description"=>"product description 2",
                "image"=>"assets/img/p2.jpg"
            ],
            2=>[
                "id"=>2,
                "category-id"=>2,
                "name"=>"w-shirt",
                "price"=>800,
                "description"=>"product description 3",
                "image"=>"assets/img/p3.jpg"
            ],
            3=>[
                "id"=>2,
                "category-id"=>2,
                "name"=>"sari",
                "price"=>1200,
                "description"=>"product description 3",
                "image"=>"assets/img/pp1.jpg"
            ],
            4=>[
            "id"=>2,
            "category-id"=>2,
            "name"=>"w-shirt",
            "price"=>800,
            "description"=>"product description 3",
            "image"=>"assets/img/pp2.jpg"
            ],
            5=>[
            "id"=>3,
            "category-id"=>3,
            "name"=>"sari",
            "price"=>1200,
            "description"=>"product description 3",
            "image"=>"assets/img/pp3.jpg"
            ],
            6=>[
                "id"=>3,
                "category-id"=>3,
                "name"=>"w-shirt",
                "price"=>800,
                "description"=>"product description 3",
                "image"=>"assets/img/s1.png"
            ],
            7=>[
                "id"=>3,
                "category-id"=>3,
                "name"=>"sari",
                "price"=>1200,
                "description"=>"product description 3",
                "image"=>"assets/img/s2.jpg"
            ]
        ];
    }

    public function shortProducts($category_Id)
    {
        $this->allProducts =$this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product["category-id"] == $category_Id)
            {
                array_push($this->result,$product);
            }
        }
        return $this->result;

    }
    public function getProductDetails($product_id)
    {
        $this->allProducts =$this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product["id"] == $product_id)
            {
                return $product;
            }
        }


    }

}