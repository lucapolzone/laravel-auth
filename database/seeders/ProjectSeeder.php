<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker)
	{
		// for ($i = 0; $i < 10; $i++) {
		$project = new Project;
		$project->title = 'Vite Boolando';
		$project->content = 'Create un nuovo progetto utilizzando Vite e Vue 3 e definite i componenti necessari per strutturare il layout.';
		$project->link = 'https://github.com/lucapolzone/vite-boolando';
		$project->save();
		// }
	}
}
