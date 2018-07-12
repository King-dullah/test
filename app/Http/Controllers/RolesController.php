<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $roles = Role::all();
            foreach($roles as $role){
                $sub_data['id'] = $role['id'];
                $sub_data['name'] = $role['name'];
                $sub_data['text'] = $role['name'] ." ". $role['job_title'];
                $sub_data['parent_id'] = $role['manager_id'];
                $data[] = $sub_data;
            }
            foreach($data as $key => &$value){
                $output[$value['id']] = &$value;
            }
            foreach($data as $key => &$value){
                if($value['parent_id'] && isset($output[$value['parent_id']])){
                $output[$value['parent_id']]['nodes'][] = &$value;
                }

            }
            foreach($data as $key => &$value){
                if($value['parent_id'] && isset($output[$value['parent_id']])){
                    unset($data[$key]);
                }

            }

            return json_encode($data,JSON_PRETTY_PRINT);
           

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */

    public function create()
    {
        //
       return view('create');

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
        //if(Auth::check()){
            $roles = Role::create([
                'name' => $request->input('name'),
                'job_title' => $request->input('job'),
                'salary' =>  $request->input('salary'),
                'resumed' => $request->input('resumed'),
                'manager_id' => rand(1,10)
            ]);


          if($roles){
              return redirect()->route('view');
           }
        //}
        return back()->withInput;
    }

    public function view()
    {
        //
        $roles = Role::paginate(1000);
       return view('view')->with(['roles'=> $roles]);

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

        $role = Role::find($id);
        dd($role);
        die;
        return view('show',['roles'=> $role]);
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
        $role = Role::find($id);


    return view('edit',['role'=> $role]);
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
        $roleUpdate = Role::where('id', $id)
        ->update([  'name' => $request->input('name'),
                    'salary' =>  $request->input('salary'),
                    'job_title' => $request->input('job'),
                    'resumed' => $request->input('resumed'),
                    'manager_id' => $request->input('manager'), ]);
        if($roleUpdate){
            return redirect()->route('view');
        }else{
            return back()->withInput();
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
        //
        $roleDelete = Role::find($id);
        if($roleDelete->delete()){
            return redirect()->route('view');
        }else{
            return back()->withInput();
        }
    }
}
