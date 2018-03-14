<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
	protected $fillable = ['id', 'perfil_id', 'username', 'username_canonical', 'email', 'email_canonical', 'enabled', 'salt', 'password', 'locked', 'expired', 'pas_oldusu', 'expires_at', 'confirmation_token', 'last_login', 'password_requested_at', 'credentials_expired', 'credentials_expire_at', 'fec_caduca', 'fec_cambio', 'num_diasxx', 'usr_creaci', 'usr_modifi'];

	public function perfil(){
		$this->belongsTo('App\Perfil');
	}
}