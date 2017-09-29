<?php
/**
 * Client.php
 */
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Client Model.
 * 
 * The Client model for the clients table.
 * 
 * @filesource
 */
class Client extends Authenticatable {
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'organisation',
        'address1',
        'address2',
        'city',
        'country',
    ];

    protected $hidden = [
        'password',
    ];
    
    /**
     * Establishes a one-to-many relationship with conferences table
     * @return type
     */
    public function conferences()
    {
        return $this->hasMany('App\Models\Conference');
    }
}
