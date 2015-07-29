
<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model {

    protected $table = 'ingrediente';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    protected $fillable = array('name', 'descripcion');

    public function recetas() {
        return $this->belongsToMany('Receta', 'recetaIngrediente', 'ingrediente_id', 'receta_id');
    }

    public function unidades() {
        return $this->belongsToMany('Unidad', 'medir', 'ingrediente_id', 'unidad_id');
    }

}
