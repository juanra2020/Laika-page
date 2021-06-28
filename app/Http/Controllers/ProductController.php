<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {

    // Este es el return con el modelo para llamar los datos de la DB
       // return $product->all();

       return [
            [
                "name" => "Cozy Hug Comodísimos",
                "price" => "$224.000",
                "img" => "/img/13498_COZY_HUG_COMODISIMOS_1595606844_500x500.jpg",
                "btn" => true,
                "before" => "$280.000",
                "btnText" => "MEDIANO TALLA",
                "imgDiscount" => "/img/star.svg",
                "porcent" => "20%"
            ],
            [
                "name" => "Salvaje Dieta Horneada Natural Carne",
                "price" => "$4.452",
                "img" => "/img/13505_66924_Salvaje_Dieta_Horneada_Natural_Carne_1618354397_500x500.jpg",
                "btn" => false,
                "before" => "$5.565",
                "btnText" => "500GR",
                "imgDiscount" => "/img/star.svg",
                "porcent" => "20%"
            ],
            [
                "name" => "Desenredante para peinar con Keratina 200 Gr",
                "price" => "$16.184",
                "img" => "/img/43328_Desenredante_para_peinar_con_Keratina_200_Gr_1619043228_0_500x500.jpg",
                "btn" => false,
                "before" => "$20.230",
                "btnText" => "200GR",
                "imgDiscount" => "/img/star.svg",
                "porcent" => "20%"
            ],
            [
                "name" => "ARENA SUSTAINABLY YOURS MULTI-CAT PLUS",
                "price" => "$56.800",
                "img" =>"/img/55663_ARENA_SUSTAINABLY_YOURS_MULTI_CAT_PLUS_ALGOMERANTE_6_KG_1619121802_0_733x733.jpg",
                "btn" => false,
                "before" => "$71.000",
                "btnText" => "6KG",
                "imgDiscount" => "/img/star.svg",
                "porcent" => "20%"
            ]
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
