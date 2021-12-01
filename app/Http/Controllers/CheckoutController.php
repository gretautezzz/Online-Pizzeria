<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use App\Models\Client;
use App\Models\Order;
use Session;

class CheckoutController extends Controller
{
    public function phoneLogin()
    {
        $pageData = new stdClass;
        $pageData->hideMiniCart = true;
        return view('front.checkout.phone_login', ['pageData' => $pageData]);
    }

    public function doPhoneLogin(Request $request)
    {
        $client = Client::where('phone', $request->phone_login)->first();
        $uuid = rand(1000000, 9999999);
        if (!$client) {
            $client = new Client;
            $client->phone = $request->phone_login;
            $client->name = $uuid;
            $client->address = 'unknown';
            $client->save();
            return redirect()->route('checkout.createClient', [$client, 'uuid' => md5($uuid)]);
        }
    }

    public function createClient(Client $client, Request $request)
    {
        $pageData = new stdClass;
        $pageData->hideMiniCart = true;

        if (md5($client->name) != $request->uuid) {
            abort(403);
        }
        return view('front.checkout.create_client', [
            'client' => $client,
            'pageData' => $pageData
        ]);
    }

    public function storeClient(Client $client, Request $request)
    {
        $client->name = $request->client_name;
        $client->address = $request->client_address;
        $client->save();
        return redirect()->route('checkout.checkout', $client);
    }

    public function checkout(Client $client)
    {
        $pageData = new stdClass;
        $pageData->hideMiniCart = true;

        return view('front.checkout.checkout', [
            'client' => $client,
            'pageData' => $pageData
        ]);
    }

   public function order(Client $client)
    {
        $order = new Order;
        $order->total = 5.55;
        $order->status = 1;
        $order->save();
        $order->clients()->attach($client->id);
        $cart = Session::get('cart', []);
        foreach ($cart as $id => $cartProduct) {
            $order->products()->attach($id, ['amount' => $cartProduct['count'], 'price' => 5.55]);
        }
    }
}
