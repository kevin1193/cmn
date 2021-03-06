<?php

namespace Damnyan\Cmn\Abstracts;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    protected $resourceName = 'Resource';

    protected $userClass = \App\Modules\User\Models\User::class;

    protected $creatorOnly = false;

    public function getResourceName()
    {
        return $this->resourceName;
    }
}
