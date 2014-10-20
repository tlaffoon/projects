<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ItemsTableSeeder');
	}
}

class ItemsTableSeeder extends Seeder {

	public function run() {
		DB::table('items')->delete();

		$item = new Item();
		$item->name = 'test item';
		$item->save();
	}
}