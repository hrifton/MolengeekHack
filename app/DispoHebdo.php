<?php

namespace App;
use App\UserDispoHebdo;
use Illuminate\Database\Eloquent\Model;

class DispoHebdo extends Model
{
    protected $fillable = [
        'jours'
    ];

    public function users ()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function relationTable($id,$hebdo){
        // convert array to string
        $hebdo = implode(",", $hebdo);
      
        
         if(!empty(DispoHebdo::where('jours',$hebdo)->get()->toArray())){
            return UserDispoHebdo::create(['user_id'=>$id,
                'dispoHebdo_id'=>DispoHebdo::where('jours',$hebdo)->pluck('id')->first()]);
        }else{
            $result=DispoHebdo::create(['jours'=>$hebdo]);
            $dispoHebdo_id=$result->attributes["id"];
            $result.=UserDispoHebdo::create(['user_id'=>$id,
           'dispoHebdo_id'=>$dispoHebdo_id]);
          
        }
     
    }
}
