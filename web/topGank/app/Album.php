<?php namespace topGank;

class Album extends Model {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'albumes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['_id','nombre', 'descripcion', 'usuario_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function fotos(){
        return $this->hasMany('topGank\Fotos');
    }
    public function propietario(){
        return $this->belongsTo('topGank\Usuario');

    }

}
