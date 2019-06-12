<?php

use Illuminate\Database\Seeder;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Restaurante::class)->create([
            'nombre' => 'PizzaHut',
            'descripcion' => 'Pizzas',
            'promedio_valoracion' => '3',
            'telefono' => '876876876',
            'hace_despacho' => 'True',
            'validacion' => 'True',
            'id_calle' => '3'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'Domino',
            'descripcion' => 'Comida Rapida',
            'promedio_valoracion' => '4',
            'telefono' => '174036929',
            'hace_despacho' => 'False',
            'validacion' => 'True',
            'id_calle' => '1'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'McDonalds',
            'descripcion' => 'Hamburguesas',
            'promedio_valoracion' => '2',
            'telefono' => '639564937',
            'hace_despacho' => 'False',
            'validacion' => 'True',
            'id_calle' => '5'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'La pica del Jorge',
            'descripcion' => 'Completos',
            'promedio_valoracion' => '1',
            'telefono' => '658946927',
            'hace_despacho' => 'True',
            'validacion' => 'False',
            'id_calle' => '4'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'Donde el tío enojao',
            'descripcion' => 'Churrascos, completos',
            'promedio_valoracion' => '3',
            'telefono' => '759362753',
            'hace_despacho' => 'False',
            'validacion' => 'False',
            'id_calle' => '2'
        ]);

		factory('App\Restaurante',30)->create();
    }
}
