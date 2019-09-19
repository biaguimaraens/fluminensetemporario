<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registraUser($request){
        
        if($request->name != NULL){
            $this->name = $request->name;
        }
        
        if($request->email != NULL){
            $this->email = $request->email;
        }

        if($request->email_verified_at != NULL){
            $this->email_verified_at = $request->email_verified_at;
        }

        if($request->password != NULL){
            $this->password = bcrypt($request->password);
        }

        if($request->departamento_id != NULL){
            $this->departamento_id = $request->departamento_id;
        }


        $this->save();


        if($request->foto != NULL){

            if(!Storage::exists('users/')) {
                Storage::makeDirectory('users/', 0775, true);
            }

            // $image = base64_decode(substr($request->foto, strpos($request->foto, ",")+1));
            $image = $request->file('photo');
		    $imgName = uniqid().$this->id;
		    $path = storage_path('/app/users/' . $imgName);
		    file_put_contents($path,$image);

            $this->foto = $imgName;
            $this->save();
        }

        return "Usuário criado com sucesso!";

    }
}
