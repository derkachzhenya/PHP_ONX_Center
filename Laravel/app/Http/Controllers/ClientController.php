<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        $things = Thing::all();
        return view('client', compact('things', 'clients'));
    }


    public function create()
    {
        //
    }


    public function store(StoreClientRequest $request)
    {
        //
    }


    public function show(Client $client)
    {
        //
    }


    public function edit(Client $client)
    {
        //
    }


    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }


    public function destroy(Client $client)
    {
        //
    }
}
