<?php

use Illuminate\Database\Seeder;
use App\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
	    // Let's truncate our existing records to start from scratch.
	    Staff::truncate();

	    $faker = \Faker\Factory::create();


	    Staff::create([
		    'first_name' => 'Salina',
		    'last_name' => 'Keithley',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Brianne',
		    'last_name' => 'Farago',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Denyse',
		    'last_name' => 'Polich',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Amada',
		    'last_name' => 'Afanador',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Jason',
		    'last_name' => 'Lamotte',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Sara',
		    'last_name' => 'Jefferson',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Aretha	',
		    'last_name' => 'Hagopian',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Molly',
		    'last_name' => 'Angelos',
		    'department' => 'Sales',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Meta',
		    'last_name' => 'Thorpe',
		    'department' => 'Accounts',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Vernetta',
		    'last_name' => 'Pence',
		    'department' => 'Accounts',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Gerry',
		    'last_name' => 'Darville',
		    'department' => 'Accounts',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Jack',
		    'last_name' => 'Joyce',
		    'department' => 'IT Support',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Hermila',
		    'last_name' => 'Buntin',
		    'department' => 'IT Support',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Charlsie',
		    'last_name' => 'Filice',
		    'department' => 'IT Support',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Vivienne',
		    'last_name' => 'Chambless',
		    'department' => 'IT Support',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Mauro',
		    'last_name' => 'Noguera',
		    'department' => 'IT Support',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Hyman',
		    'last_name' => 'Gagne',
		    'department' => 'IT Support',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Melodee',
		    'last_name' => 'Siemens',
		    'department' => 'Marketing',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Santa',
		    'last_name' => 'Partridge',
		    'department' => 'Marketing',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Randal',
		    'last_name' => 'Duffie',
		    'department' => 'Marketing',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Alison',
		    'last_name' => 'Veazey',
		    'department' => 'Marketing',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Faviola',
		    'last_name' => 'Horrigan',
		    'department' => 'Research',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Tynisha',
		    'last_name' => 'Weinstock',
		    'department' => 'Research',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'MJessenia',
		    'last_name' => 'Gribbleauro',
		    'department' => 'Research',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Benton',
		    'last_name' => 'Light',
		    'department' => 'Research',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Piper',
		    'last_name' => 'Mundo',
		    'department' => 'Research',
		    'profile' => $faker->paragraph,
	    ]);


	    Staff::create([
		    'first_name' => 'Jenifer',
		    'last_name' => 'Groth',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Dominga',
		    'last_name' => 'Maharaj',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Rudolf',
		    'last_name' => 'Alexander',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Ilene',
		    'last_name' => 'Tyner',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Marvel',
		    'last_name' => 'Overby',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Shenita',
		    'last_name' => 'Pouncey',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Mikki',
		    'last_name' => 'Laing',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Josefa',
		    'last_name' => 'Purcell',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Gayle',
		    'last_name' => 'Cash',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Mitzie',
		    'last_name' => 'Cleek',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Walton',
		    'last_name' => 'Andress',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Cinthia',
		    'last_name' => 'Rusher',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Lois',
		    'last_name' => 'Garner',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Clay',
		    'last_name' => 'Igoe',
		    'department' => 'Engineering',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Dania',
		    'last_name' => 'Corona',
		    'department' => 'Legal',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Magali	',
		    'last_name' => 'Six',
		    'department' => 'Legal',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Milly',
		    'last_name' => 'Caul',
		    'department' => 'Legal',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Shirl',
		    'last_name' => 'Ludwig',
		    'department' => 'Legal',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Maude',
		    'last_name' => 'Mcconville',
		    'department' => 'Legal',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Jesenia',
		    'last_name' => 'Cardello',
		    'department' => 'Human Resources',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Myesha',
		    'last_name' => 'Mulcahy',
		    'department' => 'Human Resources',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Tanner',
		    'last_name' => 'Alling',
		    'department' => 'Human Resources',
		    'profile' => $faker->paragraph,
	    ]);

	    Staff::create([
		    'first_name' => 'Kandice',
		    'last_name' => 'Frenz',
		    'department' => 'Human Resources',
		    'profile' => $faker->paragraph,
	    ]);

    }
}
