<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisesController extends Controller
{
    

    public function index(Request $request)
    {
        $paises = [
            "paises" => [
                "colombia" => [
                    "capital" => "Bogotá",
                    "moneda" => "COP",
                    "poblacion" => 50880000,
                    "descripcion" => "Colombia es un país del extremo norte de Sudamérica. Su paisaje cuenta con
                    bosques tropicales, las montañas de los Andes y varias plantaciones de café. En Bogotá, su capital a
                    gran altura, el distrito Zona Rosa es famoso por sus restaurantes y tiendas."
                ],
                "mexico" => [
                    "capital" => "Ciudad de México",
                    "moneda" => "MXN",
                    "poblacion" => 128900000,
                    "descripcion" => "México es un país entre los Estados Unidos y América Central, conocido por las
                    playas en el Pacífico y el golfo de México, y su diverso paisaje de montañas, desiertos y selvas. Las
                    ruinas antiguas, como Teotihuacán y la ciudad maya de Chichén Itzá, se distribuyen por el país, al igual
                    que las ciudades de la época colonial española. En la capital Ciudad de México, las elegantes tiendas, los
                    famosos museos y los restaurantes gourmet son parte de la vida moderna."
                ],
                "estados_unidos" => [
                    "capital" => "Washington D.C",
                    "moneda" => "USD",
                    "poblacion" => 329500000,
                    "descripcion" => "Estados Unidos es un país de 50 estados que ocupa una extensa franja de
                    América del Norte, con Alaska en el noroeste y Hawaii que extiende la presencia del país en el océano
                    Pacífico. Entre las principales ciudades de la costa del Atlántico, se encuentran Nueva York, un centro
                    global financiero y cultural, y la capital Washington D. C. Chicago, metrópolis del medio oeste, es famosa
                    por su influencia arquitectónica y, en la costa oeste, Hollywood, Los Ángeles, es famosa por la industria
                    cinematográfica."
                ]
            ],
            "registros_a_mostrar" => 2,
            "población_minima" => 100000000,
            "ordenar_por" => "moneda",
            "orden" => "ASC"
        ];
        asort($paises);
        // dd($paises['paises']['colombia']);

        return view('paises', $paises);
    }
}
