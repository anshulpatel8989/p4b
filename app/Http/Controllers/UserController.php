<?php

    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Http\Request;
    use Redirect;
    use Log;
    use DB;
    use Illuminate\Support\Facades\Hash;
    use Auth;

    class UserController extends Controller {

        //
        public function __construct() {
            $this->middleware('auth');
        }

        public function show() {
            $user = User::where('is_active', '1')
                            ->where('is_deleted', '0')
                            ->orderBy('first_name', 'ASC')->get();
            return view('user.list', compact('user'));
        }

        public function add() {

            return view('user.add');
        }

        protected function create(Request $request) {

            try {
                $validator = $request->validate([
                    'password' => 'required',
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                    'mobile' => 'required|numeric|unique:users',
                    'country_code' => 'required|numeric'
                ]);

                try {
                    $user = User::create([
                                'name' => $request->input('first_name') . " " . $request->input('last_name'),
                                'first_name' => $request->input('first_name'),
                                'last_name' => $request->input('last_name'),
                                'email' => $request->input('email'),
                                'mobile' => $request->input('mobile'),
                                'country_code' => $request->input('country_code'),
                                'password' => Hash::make($request->input('password')),
                                'is_active' => 1,
                                'is_deleted' => 0,
                                'created_by' => Auth::id(),
                                'updated_by' => Auth::id(),
                    ]);
                } catch (\Illuminate\Database\QueryException $ex) {
                    Log::error("Add User DB error" . $ex->getMessage());
                    return Redirect::back()->withInput()->with('error', 'unable to add user');
                }

                if ($user['id'] ) {
                    return redirect('user_list')->with('success', 'New user added successfully');
                } else {

                    return Redirect::back()->withInput()->with('error', 'unable to add user');
                }
            } catch (Exception $e) {
                Log::error("Add User try error : " . json_encode($e));
                return Redirect::back()->withInput()->with('error', 'unable to add user');
            }
        }
 public function edit($id) {
            $user = User::where('is_active', '1')
                            ->where('is_deleted', '0')
                            ->where('id',$id)
                            ->orderBy('first_name', 'ASC')->get();
            
            return view('user.edit', compact('user'));
        }
        protected function update(Request $request) {

            try {
                $validator = $request->validate([
                    'password' => 'required',
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'string|max:255',
                    'email' => 'required|string|email|max:255',
                    'password' => 'required|string|min:6|confirmed',
                    'mobile' => 'required|numeric',
                    'country_code' => 'required|numeric'
                ]);

                try {
                    $id=$request->input('id');
                    $user =array(
                                'name' => $request->input('first_name') . " " . $request->input('last_name'),
                                'first_name' => $request->input('first_name'),
                                'last_name' => $request->input('last_name'),
                                'email' => $request->input('email'),
                                'mobile' => $request->input('mobile'),
                                'country_code' => $request->input('country_code'),
                                'password' => Hash::make($request->input('password')),
                                'is_active' => 1,
                                'is_deleted' => 0,
                                'updated_by' => Auth::id(),
                    );
                    DB::table('users')->where('id', $id)->update($user);
                } catch (\Illuminate\Database\QueryException $ex) {
                    Log::error("Add User DB error" . $ex->getMessage());
                    return Redirect::back()->withInput()->with('error', 'unable to update user');
                }

                if ($id) {
                    return redirect('user_list')->with('success', 'New user Updated successfully');
                } else {

                    return Redirect::back()->withInput()->with('error', 'unable to update user');
                }
            } catch (Exception $e) {
                Log::error("Add User try error : " . json_encode($e));
                return Redirect::back()->withInput()->with('error', 'unable to update user');
            }
        }
    }
    