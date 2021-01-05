<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'fname',
      'email',
      'mobile',
      'address',
      'landmark',
      'state',
      'pincode',
      'userid'
    ];
    public function AddPersonal($data)
    {
      return Personal::create($data);
    }
    public function UpdatePersonal($data,$id)
    {
      return Personal::find($id)->update($data);
    }
}
