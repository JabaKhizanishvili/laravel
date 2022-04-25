<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\apiUsers;
use PDO;

class Users extends Controller
{
    public function list($id = "")
    {
        if ($id != "") {
            $flights = apiUsers::where('id', $id)->get();
        } else {
            $flights = apiUsers::all();
        }
        return $flights;
    }

    public function post(Request $request)
    {
        return apiUsers::create([
            'name' => $request->query('name'),
            'surame' => $request->query('surame'),
            'address' => request('address'),
        ]);
    }

    public function edit(Request $request, $id = "")
    {
        apiUsers::where('id', $id)->update([
            'name' => request('name'),
            'surame' => request('surame'),
            'address' => request('address'),
        ]);
    }

    public function del($id = "")
    {
        apiUsers::where('id', $id)->delete();
    }
}
