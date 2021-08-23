<?php

namespace App\Database\Seeds\Data;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		//
		$model = model('App\Models\Users', false);
		$data = [
			[
				'name'		=>	'Cesar Augusto',
				'surname'   => 	'Tapia',
				'username'	=>	'cesart050892',
				'password'	=>	'admin',
				'email'		=>	'cesart050892@gmail.com',
			],
			[
				'name'		=>	'Administrator',
				'username'	=>	'admin',
				'password'	=>	'admin',
				'email'		=>	'admin@crm.dev',
			],
			[
				'name'		=>	'Guest',
				'username'	=>	'guest',
				'password'	=>	'guest',
				'email'		=>	'guest@crm.dev',
			]
		];
		foreach ($data as $key) {
			$user = new \App\Entities\Users($key);
			$model->insert($user);
		}
	}
}