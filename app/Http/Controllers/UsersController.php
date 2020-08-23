<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Role;
use DB;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('admin.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $users = User::get();

        return view('admin.users.create',compact('roles','users'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);


        // $user = User::create($input);
        // $user->assignRole($request->input('roles'));

       $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        // $user->dob = $request->get('dob');
        $user->dob   = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('dob'))));
        $user->gender = $request->get('gender');
        $user->idno = $request->get('idno');
        $user->idtype = $request->get('idtype');
        $user->session = $request->get('session');
        $user->role_id    = $request->role_id;
        $user->user_id    = $request->user_id;
        $user->payment = $request->get('payment');

        $user->amount = $request->get('amount');

        $user->password = bcrypt($request['password']);

        $user->image = $input['imagename'];
        $user->save();
        Mail::to($request['email'])->send(new WelcomeMail($user));

        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
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
       

          $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        // $user->dob = $request->get('dob');
        $user->dob   = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('dob'))));
        $user->gender = $request->get('gender');
        $user->idno = $request->get('idno');
        $user->idtype = $request->get('idtype');
        $user->session = $request->get('session');
        $user->password = $request->get('password');
        $user->image = $input['imagename'];
        $user->update();
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}