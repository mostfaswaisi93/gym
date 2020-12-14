<?php

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'title'         => 'Error',
            'customer_id'   => 1,
            'mobile'        => '0595817016',
            'message'       => 'Error-Error-Error'
        ]);
    }
}
