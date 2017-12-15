<?php

/**
 * Created by PhpStorm.
 * User: josuecamelo
 * Date: 15/12/17
 * Time: 14:03
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $accountId = \Auth::user()->account_id;
        $builder->where('account_id', $accountId);
    }
}