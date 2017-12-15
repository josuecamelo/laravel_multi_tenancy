<?php

namespace App;

//use App\Scopes\TenantModels;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use TenantModels;

    protected $fillable = [
        'name'
    ];

    //Escopo Local
    public function scopeByAccount(Builder $query, $accountId){
        return $query->where('account_id',$accountId);
    }
}