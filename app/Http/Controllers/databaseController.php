<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class databaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $database;
    public function __construct()
    {
        $this->database = app('firebase.database');
    }
    private function set_client_id()
    {
        return 0;
    }
    private function add_client(array $client)
    {
        $this->database->getReference('clients/'.$this->set_client_id())
        ->set([
            'company_name' => $client['company_name'],
            'email' => $client['email'],
            'address' => [
                'town' => $client['address']['town'],
                'street' => $client['address']['street'],
                'house_number' => $client['address']['house_number'],
                'apartment_number' => $client['address']['apartment_number'],
                'zip_code' => $client['address']['zip_code'],
            ],
            'phone_number' => $client['phone_number'],
            'is_delete' => false,
            ]);
    }
    public function index()
    {
        $this->add_client([
            'company_name' => "FHU Rakieta Remis",
            'email' => "rakieta@remis.com",
            'address' => [
                'town' => "Kielce",
                'street' => "Towarowa",
                'house_number' => '4',
                'apartment_number' => '3',
                'zip_code' => '11-222',
            ],
            'phone_number' => '111222333',
        ]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
