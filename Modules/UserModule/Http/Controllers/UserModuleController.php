<?php

namespace Modules\UserModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Repositories\UserModuleInterface;
use Modules\UserModule\Entities\UserModule;

class UserModuleController extends Controller
{
    public $users;

    public function __construct(UserModuleInterface $interface)
    {
        $this->users = $interface;
    }

    public function index()
    {
        $users = $this->users->all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $user = $this->users->create($request->all());
        return response()->json($user, 201);
    }

    public function show($id)
    {
        $user = $this->users->get($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = $this->users->update($id, $request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        $this->users->delete($id);
        return response()->json(['message' => 'User deleted'], 200);
    }
}
