<?php

namespace App;

use App\Scopes\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use TenantModels;

    protected $fillable = [
        'name'
    ];


    //adicionando scopo global - foi para trait
    /*protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope(new TenantScope());
    }*/

    //Escopo Local
    /*public function scopeByAccount(Builder $query, $accountId){
        return $query->where('account_id',$accountId);
    }*/

    /*protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub


        //Ao Criar Registro
        static::creating(function(Model $model){
            $accountId = \Auth::user()->account_id;
            $model->account_id = $accountId;
        });


    }*/


}