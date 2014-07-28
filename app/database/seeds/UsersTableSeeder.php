<?php       
class UsersTableSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'Jessica', 
                'password' => Hash::make('iamthewalrus'),
                'email' => 'suhkha92@gmail.com'
            )
        );

        DB::table('users')->insert($users);
    }
    
}
?>