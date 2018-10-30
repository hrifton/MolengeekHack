<?php

namespace App;
use App\User_dispo;

use Illuminate\Database\Eloquent\Model;

class Dispo extends Model
{
    
    protected $fillable = [
        'date_debut', 'date_fin'
    ];

    public function users ()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function relationtable($user,$dateDeb,$dateFin)
    {
    //  dd(empty(Dispo::where('date_debut','=',$dateDeb)->where('date_fin','=',$dateFin)->first()));
      if(empty(Dispo::where('date_debut','=',$dateDeb)->where('date_fin','=',$dateFin)->first())){
            $result='Create insert';
        }else{
            $result= Dispo::where('date_debut','=',$dateDeb)->where('date_fin','=',$dateFin)->pluck('id')->first() ;           // Dispo::where('date_debut','=',$dateDeb)->where('date_fin','=',$dateFin)->pluck('id');
        }
        dd($result);
     /*   
        $dispo_id=Dispo::create([ 
            'date_debut'=> $dateDeb,
        'date_fin'=> $dateFin]);
       
        return User_dispo::create([
            'user_id'=>$user,
            'dispo_id'=>$dispo_id->id
        ]);
        
        return User_dispo::create([
            'user_id'=>$user, 
            'dispo_id'=>$dispo_id->id
        ]);*/
    }
}
