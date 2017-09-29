<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Attendee model.
 * 
 * The Attendee model for the attendees table.
 * 
 * @filesource
 */
class Attendee extends Authenticatable {

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
    
    /**
     * Establishes a many-to-many relationship with conferences table
     * @return type
     */
    public function conferences()
    {
        return $this->belongsToMany('App\Models\Conference', 'conferences_attendees');
    }
    
    /**
     * Establishes a one-to-many relationship with chatlogs table
     * @return type
     */
    public function chats()
    {
        return $this->hasMany('App\Models\Chatlog');
    }
    
    /**
     * Establishes a one-to-many relationship with whitelists table
     * @return type
     */
    public function whitelist()
    {
        return $this->hasMany('App\Models\Whitelist');
    }
    
    /**
     * Establishes a one-to-many relationship with blacklists table
     * @return type
     */
    public function blacklist()
    {
        return $this->hasMany('App\Models\Blacklist');
    }
}
