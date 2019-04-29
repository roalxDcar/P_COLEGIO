<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyPayment extends Model
{
	protected $table = 'monthly_payments';

    protected $primaryKey = 'idmonthly_payment';
}
