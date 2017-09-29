<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The Room model.
 * 
 * The model for the rooms table.
 * @filesource
 */
class Room extends Model {

    public function conference() {
        return $this->belongsTo('App\Models\Conference');
    }
    
    public function presentations() {
        return $this->hasMany('App\Models\Presentation');
    } 
    
}