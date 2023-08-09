<?php

namespace Modules\Repositories;

use Modules\UserModule\Entities\UserModule;

class UserModuleRepository implements UserModuleInterface {
    public function all()
    {
        return UserModule::all();
    }

    public function get($id)
    {
        return UserModule::find($id);
    }

    public function create($data)
    {
        return UserModule::create($data);
    }

    public function update($id, array $data)
    {
        return UserModule::find($id)->update($data);
    }

    public function delete($id)
    {
        return UserModule::destroy($id);
    }
}
