<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class BanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('AdminMiddleware');
    }
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
        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//$user=User::find($id)->where('isBan',$isBan);
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
//$isBan=User::all($isBan);
        //$id=User::find($id);
       // $isBan = $request->isBan;
      //  dd($id,$isBan);
      //  $id = $request->id;
        //$update_status = DB::table('users')
          //  ->where('id', $id)
            //->update([
              //  if(isBan=0){
                //'isBan' => $isBan}
            //]);
        //if($update_status){
          //  echo "status updated successfully";
        //}


        //return view('/test');
        //$user = User::find($id)->where('isBan');
        //if($user==0){
          //  return redirect()->route('home');
        }

       // return redirect()->route('admin.ban');


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
