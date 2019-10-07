<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class ClientsController extends Controller
{
    public function index(){
      $clients = Client::actifs()->get();


        return view('clients.index', [
        'clients' => $clients
        ]);
      }
    public function show(Client $client){
      
       return view('clients.show', compact('client'));
      }
      
    public function store(){
       $data = request()->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'status' => 'required'
       ]);

       Client::create($data);

      /*
      $name = request('name');
      $email = request('email');
      $status = request('status');
      $client = new Client();
      $client->name = $name;
      $client->email = $email;
      $client->status = $status;
      $client->save();
      */
      return back();
      }

}
