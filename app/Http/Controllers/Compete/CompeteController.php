<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:47
 */

namespace App\Http\Controllers\Sport;

use App\Http\Controllers\Controller;

class CompeteController extends Controller{


    public function show($id)
    {

    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * /admin/pages/create
     * get
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * /admin/pages
     * post
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * admin/pages/7/edit
     * get
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * admin/pages/7
     * put
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * /admin/pages/7
     * delete
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

    public function withdraw($CmptID, $userID){

    }

    public function myOwnCmpt($userID){

    }

    public function myInCmpt($userID){

    }

    public function history($userID){

    }

}