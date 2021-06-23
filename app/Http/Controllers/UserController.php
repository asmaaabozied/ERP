<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employ;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employees = User::latest()->paginate(10);
        return view('dashboard.users.index', compact('employees'));
        //return response(['data'=>$employees,'msg'=>'true']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $employ = User::create($request->except('roles'));
        $employ['password'] = bcrypt($request->password);
        $employ->save();
        if (!empty($request->roles)) {

            $employ->syncRoles($request->roles);
        }
        return redirect()->route('users.index')->with('success', trans('general.saved'));
        //return redirect()->action([EmployController::class,'index']);
        //return response()->json(['message'=>'ok','success'=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
