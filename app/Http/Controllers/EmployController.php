<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employ;
use Illuminate\Http\Request;

use App\Http\Requests\EmployeeRequest;

class EmployController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employ::latest()->paginate(10);
        return view('dashboard.employee.index',compact('employees'));
        //return response(['data'=>$employees,'msg'=>'true']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        //dd($request->all());
            $data = [
                'phone_number'=>$request->input('phone'),

              ];
              foreach (config('translatable.locales') as $locale) {
            $data[$locale]['name'] = $request->$locale['name'];
            $data[$locale]['title'] = $request->$locale['title'];
            
        }

                $employ = Employ::create($data);
                return redirect()->route('employee.index')->with('success',trans('general.saved'));
                //return redirect()->action([EmployController::class,'index']);
                //return response()->json(['message'=>'ok','success'=>200]);
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
