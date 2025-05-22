   <?php

   namespace Database\Seeders;

   use Illuminate\Database\Seeder;

   class DatabaseSeeder extends Seeder
   {
       public function run()
       {
           // Call your other seeders here
           $this->call(BarangaySeeder::class);
           $this->call(RoleUserSeeder::class); // Ensure this matches the actual class name
       }
   }
   