<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pago;
use Carbon\Carbon;

class PagoSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Pago::create([
            'user_id' => '1',
            'liquidacion_id' => '1',
            'transfer_id' => 'trzjaozcik8msyqshka4',
            'amount' => '100.00',
            'authorization' => '801585',
            'method' => 'card',
            'operation_type' => 'in',
            'transaction_type' => 'charge',
            'card_type' => 'debit',
            'card_brand' => 'visa',
            'card_holder_name' => 'Juan Perez Ramirez',
            'card_allows_charges' => true,
            'card_allows_payouts' => true,
            'card_bank_name' => 'WmVSUVcvbEVSWDlTbEtDbUxJRnVXQT09',
            'status' => 'completed',
            'currency' => 'COP',
            'creation_date' => Carbon::now(),
            'operation_date' => Carbon::now(),
            'description' => 'Cargo inicial a mi cuenta',
            'error_message' => 'null',
            'order_id' => 'oid-00051',
            'exchange_rate_from' => 'USD',
            'exchange_rate_date' => '2014-11-21',
            'exchange_rate_value' => '13.61',
            'exchange_rate_to' => 'CO',
        ]);
    }

}
