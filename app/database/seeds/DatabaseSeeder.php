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

	$item = new Item();
	$item->item = 'test item';
	$item->save();
}

// class AddressTableSeeder extends Seeder {

// 	$person = new Person();
// }
