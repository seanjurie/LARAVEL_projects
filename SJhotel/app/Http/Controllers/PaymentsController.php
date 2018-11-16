<?php


namespace App\Http\Controllers;
use App\Payment;
use DB;
use App\User;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
            if(auth()->user()->id == 1){
            $payments = Payment::all();
            return view('lodgers.show')->with('payments', $payments);
            }else{
                //return redirect('/lodgers');

                $payments = Payment::where('id',$user_id)->get();
                return view('lodgers.show')->with('payments',$payments);
            }
        //$payments = Payment::where('id',1)->get();
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->id != 1){
            return redirect('/lodgers')->with('error', 'Unauthorized Page');
        }
        return view('lodgers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'water' => 'required',
            'electricity' => 'required',
            'rent' => 'required',
            'status' => 'required'
        ]);

        //Create new post
        
        $payments = new Payment;
        $payments->name = $request->input('name');
        $payments->water = $request->input('water');
        $payments->electricity = $request->input('electricity');
        $payments->rent = $request->input('rent');
        $payments->status = $request->input('status');
        $payments->user_id = auth()->user()->id;
        $payments->save();

        return redirect('/lodgers/show')->with('success', 'Bills created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $payments = Payment::all();
      
        return view('lodgers.show')->with('payments', $payments);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payments = Payment::find($id);
        return view('lodgers.edit')->with('payment', $payments);
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
         $this->validate($request, [
            'name' => 'required',
            'water' => 'required',
            'electricity' => 'required',
            'rent' => 'required',
            'status' => 'required'
        ]);

        //Create new post
        
        $payments = Payment::find($id);
        $payments->name = $request->input('name');
        $payments->water = $request->input('water');
        $payments->electricity = $request->input('electricity');
        $payments->rent = $request->input('rent');
        $payments->status = $request->input('status');
        $payments->save();

        return redirect('/lodgers/show')->with('success', 'Bills updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payments = Payment::find($id);
        $payments->delete();
        return redirect('/lodgers/show')->with('success', 'Lodger Removed');
    }
}
