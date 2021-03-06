<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    //
    protected $fillable = [
        'short_id', 'title', 'unique_id', 'url', 'thumb_url', 'folder_path', 'filename', 'ext', 'diskspace', 'bandwidth', 'ip_address', 'user_id', 'is_picture', 'category', 'is_protected', 'password'
    ];
    protected $table = 'file';
    public $timestamps = true; 
}
