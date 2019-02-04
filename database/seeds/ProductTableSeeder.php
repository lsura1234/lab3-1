<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(
            array(
                [
                 'code'=>'P001',
                 'name' =>'เสีอหมอบJAVA',
                 'category_id'=>1,
                 'price'=>5000,
                 'stock_qty'=> 4,
                ],
                [
                    'code'=>'P002',
                    'name' =>'เสือหมอบ วินเทจCannello Silvia',
                    'category_id'=>1,
                    'price'=>5000,
                    'stock_qty'=>4,
                ],
                [
                    'code'=>'อะไหล่',
                    'name' =>'เสีอหมอบPanther March',
                    'category_id'=>1,
                    'price'=>6500,
                    'stock_qty'=>2,
                ],
                  
              
            )
        );
    }
    }

