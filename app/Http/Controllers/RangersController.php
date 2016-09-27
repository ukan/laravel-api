<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ranger;

use Dingo\Api\Routing\Helpers;

class RangersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ranger::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ranger = new Ranger;

        if($ranger->create($request->all())) {

            return array('status' => 'berhasil');

        } else {

            return array('status' => 500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return Ranger::findOrFail($id);

        if($ranger = Ranger::find($id)) {

           return $ranger;

       } else {
                  $status = array('status' => 400);

                  return $status;

       }
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
        if($ranger = Ranger::find($id)) {

                if($ranger->update($request->all())) {

                    return array('status' => 'Data has been updated');

                } else{

                    return array('status' => 500);

                }

            } else {

              return array('status' => 400);

            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($ranger = Ranger::find($id)) {

                if($ranger->delete()) {

                    return array('status' => 'data has been deleted from database');

                } else {

                    return array('status' => 500);

                }

            } else {

              return array('status' => 400);

            }
    }
}