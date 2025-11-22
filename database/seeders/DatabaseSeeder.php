<?php

namespace Database\Seeders;

use App\Models\AccountingAccounts;
use App\Models\BankAccountTypes;
use App\Models\Banks;
use App\Models\BusinessActivities;
use App\Models\BusinessUnits;
use App\Models\Cities;
use App\Models\Companies;
use App\Models\Comunes;
use App\Models\CustomerProviders;
use App\Models\JobsTitles;
use App\Models\PaymentConditions;
use App\Models\PriceLists;
use App\Models\PurchaseConcepts;
use App\Models\Purchases;
use App\Models\PurchaseTypes;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            Banks::class,
            BankAccountTypes::class,
            BusinessActivities::class,
            Cities::class,
            Comunes::class,
            JobsTitles::class,
            AccountingAccounts::class,
            PriceLists::class,
            PaymentConditions::class,
            PurchaseConcepts::class,
            BusinessUnits::class,
            CustomerProviders::class,
            Companies::class,
            PurchaseTypes::class,
            Purchases::class,

        ]);
    }
}
