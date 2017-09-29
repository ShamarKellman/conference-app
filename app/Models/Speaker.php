<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The Speaker Model.
 * 
 * The model for the speakers table.
 * @filesource
 */
class Speaker extends Model {

    public function presentations() {
        return $this->belongsToMany('App\Models\Presentation', 'presentations_speakers');
    } 
}