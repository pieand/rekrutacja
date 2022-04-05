<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Contract;
use App\Models\Balance;
use App\Models\Invoice;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function contracts()
    {
        $contracts = Contract::where('id_podmiotu', '=', Session::get('loginId'))->paginate(2);
        return view('contracts', ['contracts' => $contracts]);
    }

    /**
     * @return Application|Factory|View
     */
    public function settlements()
    {

        $invoices = Invoice::where('id_podmiotu',"=",Session::get('loginId'))->paginate(1);


        $balances = Balance::where('id_podmiotu', '=', Session::get('loginId'))->get();

        return view('settlements', ['balances' => $balances,'invoices'=> $invoices]);
    }
}
