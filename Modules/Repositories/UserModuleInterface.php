<?php

namespace Modules\Repositories;

interface UserModuleInterface {

    public function all();

    public function get($id);

    public function create($data);

    public function update($id, array $data);

    public function delete($id);
}
