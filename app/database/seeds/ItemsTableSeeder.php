<?php 

class ItemsTableSeeder extends Seeder
{
    
    public function run(){
            DB::table('items')->delete();

            $items = array(
                array(
                    'owner_id' => 4, 
                    'name' => 'Revisar app',
                    'done' => true
                ),
                array(
                    'owner_id' => 4, 
                    'name' => 'Trabajar en beemarket',
                    'done' => false
                ),
            );

            DB::table('items')->insert($items);
        }
}


?>