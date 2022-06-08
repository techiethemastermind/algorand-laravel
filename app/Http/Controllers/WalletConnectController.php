<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Algorand;

class WalletConnectController extends Controller
{
    public function index()
    {
        $address = '';
        return view('welcome', compact('address'));
    }

    public function address() {
        $account = Algorand::accountManager()->createNewAccount();
        $address = $account->getPublicAddress();
        $seedphrase = $account->getSeedPhrase();
        return response()->json([
            'address' => $address
        ]);
    }
}
