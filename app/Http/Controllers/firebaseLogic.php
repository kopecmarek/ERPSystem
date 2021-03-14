<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firebaseLogic extends Controller
{
    protected $database;
    public function __construct()
    {
        $this->database = app('firebase.database');
    }
    private function getLastID(string $rootName):int //rootName = clients or orders
    {
        return json_encode($this->database->getReference($rootName)->orderByKey()
            ->getSnapshot()->numChildren());
    }

    public function _create($rootName, array $data)
    {
        $this->database->getReference($rootName.'/'.$this->getLastID($rootName))
            ->set($data);
    }
/*
    public function stworz()
    {
        $this->_create("clients",
            [
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
            ]
        );
    }*/

    public function _update($rootName, array $data)
    {

    }

    public function delete($rootName, $id)
    {

    }

    public function returnFromId($rootName, $id)
    {

    }

    public function returnAll($rootName)
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
