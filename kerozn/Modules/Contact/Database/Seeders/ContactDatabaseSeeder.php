<?php

namespace Kerozn\Modules\Contact\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Setting;

class ContactDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        \DB::table('kerozn_contact_requests')->insert([
            ['name' => 'John Doe', 'object' => 'Test email John', 'email' => 'john@doe.com', 'message' => 'Hello John Doe!'],
            ['name' => 'Jane Doe', 'object' => 'Test email Jane', 'email' => 'jane@doe.com', 'message' => 'Hello Jane Doe!'],
		]);
		
		$setting = Setting::firstOrNew(['key' => 'contact.email']);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Contact Email',
                'value'        => 'admin@tpz.fr',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Kerozn',
            ])->save();
        }
        // $this->call("OthersTableSeeder");
	}	
}
