<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use Auth;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Personal::where('userid','=', Auth::user()->id)->first();
        return view('/personal/index',['data'=>$data]);
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
        $data = $this->FormValidate($request);
        $per = (new Personal)->AddPersonal($data);
        return redirect('/personal/index')->with('message','Profile Created!');
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
        $data = Personal::find($id);
        if($data->userid ==  Auth::user()->id)
        {
          return view('/personal/edit',['data'=>$data]);
        }
        else {
          return redirect('/personal/index')->with('message','Invalid Page Entry!');
        }
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
        $data = $this->FormValidate($request,$id);
        $per = (new Personal)->UpdatePersonal($data,$id);
        return redirect('/personal/index')->with('message','Profile Updated!');
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
    public function FormValidate($request)
    {
        return $this->validate($request,[
          'name' => 'required',
          'fname' => 'required',
          'email' => 'required',
          'mobile' => 'required',
          'address' => 'required',
          'landmark' => 'required',
          'state' => 'required',
          'pincode' => 'required',
          'userid' => 'required'
        ]);
    }
}
