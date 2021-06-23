<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employ;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles = Role::latest()->paginate(10);
        return view('dashboard.roles.index', compact('roles'));
        //return response(['data'=>$employees,'msg'=>'true']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = ['bulkunits', 'products', 'orders', 'categories', 'sliders', 'users', 'pages', 'roles', 'unitss', 'options', 'logs', 'geographies', 'taxes', 'discountss', 'currencies', 'guarante', 'voucher', 'warehouse', 'inventory', 'employe', 'sales', 'district', 'branch'];
        $maps = ['create', 'update', 'read', 'delete'];
        return view('dashboard.roles.create',compact('maps','models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->except('section'));
        if (!empty($request->section)) {
            $role->syncPermissions($request->section);
        }

        return redirect()->route('roles.index')->with('success', trans('general.saved'));
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
