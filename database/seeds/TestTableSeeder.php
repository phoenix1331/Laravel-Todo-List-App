<?php
 
use Illuminate\Database\Seeder;
 
class TestTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('testtable')->delete();
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
            $test[] = ['name' => $faker->name, 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime];
        }
        // Uncomment the below to run the seeder
        DB::table('testtable')->insert($test);
    }
 
}