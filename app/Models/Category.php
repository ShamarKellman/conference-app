<?php
/**
 * Category.php
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @filesource
 */
class Category extends Model {

    public function presentations() {
        return $this->belongsToMany('App\Models\Presentation', 'presentations_categories');
    }
}
