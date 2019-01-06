<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        return User::findOrFail($id);
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
        $user = User::find($id);
        $user->delete();
        return 'User deleted successfully';
    }
}


// <?php

// namespace App\Http\Controllers;

// use Laravel\Lumen\Routing\Controller as BaseController;
// use Illuminate\Http\Request;

// class UserController extends BaseController
// {
//     public function index(Request $req) {
//         $getParam = function(string $param, $defValue) use ($req){
//             return null !== $req->input($param) ? $req->input($param) : $defValue;
//         };
//         $page = $getParam('page', 1);
//         $limit = $getParam('limit', 10);
//         $offset = ($page -1) * $limit;
//         $query = "SELECT username, created_at, updated_at
//             FROM users
//             ORDER BY created_at DESC
//             LIMIT {$limit}
//             OFFSET {$offset}";

//         $users = app('db')->select($query);

//         return $users;
//     }

//     public function show($id) {
//         $query = "SELECT username, created_at, updated_at
//             FROM users
//             WHERE id={$id}";

//         $user = app('db')->select($query);

//         return $user;
//     }

//     public function store(Request $req) {
//         $this->validate($req, [
//             'username' => 'required|string|max:30',
//             'password' => 'required|string|max:30',
//             'passcode' => 'required|digits_between:1,30'
//         ]);
//         $checkUser = $this->validateUnique('username', $req->input('username'));
//         if (isset($checkUser[0])) {
//             return 'User already exist';
//         }

//         $username = $req->input('username');
//         $password = password_hash($req->input('password'), PASSWORD_DEFAULT);
//         $passcode = password_hash($req->input('passcode'), PASSWORD_DEFAULT);
//         $query = "INSERT INTO users (username, password, passcode)
//             VALUES ('{$username}', '{$password}', '{$passcode}')";

//         app('db')->insert($query);

//         return 'User has been successfully created';
//     }

//     public function update(Request $req, $id) {
//         $this->validate($req, [
//             'username' => 'required|string|max:30',
//             'password' => 'required|string|max:30',
//             'passcode' => 'required|digits_between:1,30'
//         ]);
//         $checkUser = $this->validateUnique('username', $req->input('username'));
//         if (isset($checkUser[0])) {
//             if ($checkUser[0]->id != $id){
//                 return 'User already exist';
//             }
//         }

//         $username = $req->input('username');
//         $password = password_hash($req->input('password'), PASSWORD_DEFAULT);
//         $passcode = password_hash($req->input('passcode'), PASSWORD_DEFAULT);

//         $query = "UPDATE users
//             SET username = '{$username}',
//             password = '{$password}',
//             passcode = '{$passcode}'
//             WHERE id={$id}";
//         app('db')->update($query);

//         return 'User successfully updated';
//     }

//     public function delete($id) {
//         $query = "DELETE FROM users WHERE id={$id}";

//         app('db')->delete($query);

//         return 'User has been successfully deleted';
//     }

//     private function validateUnique(string $fieldName, string $value) {
//         $query = "SELECT id FROM users WHERE {$fieldName}='{$value}'";
//         $rows = app('db')->select($query);

//         return $rows;
//      }
// }
