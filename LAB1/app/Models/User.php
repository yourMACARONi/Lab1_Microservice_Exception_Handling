<?php  

 namespace App\Models; 
  
 use Illuminate\Database\Eloquent\Model; 
  
 Class User extends Model { 
  
 public $timestamps = false; 
  
 protected $primaryKey = 'teacher_id';  
  
 protected $table = 'tbl_teacher'; 
  
 protected $fillable = [ 
     'teacher_id', 'lastname', 'firstname', 'middlename', 'bday', 'age' 
 ]; 
   
 }