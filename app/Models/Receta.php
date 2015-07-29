
<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model {


    protected $table = 'receta';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    protected $fillable = array('name', 'descripcion', 'duracion','comentario');


    public function tipoPlato() {
        return $this->hasOne('TipoPlato');
    }


    public function preparaciones() {
        return $this->hasMany('Preparacion');
    }


    public function users() {
        return $this->belongsToMany('User', 'usuarioReceta', 'receta_id', 'users_id');
    }

    public function ingredientes() {
        return $this->belongsToMany('Ingrediente', 'recetaIngrediente', 'receta_id', 'ingrediente_id');
    }


}
