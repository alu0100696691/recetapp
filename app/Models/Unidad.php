
<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model {

    protected $table = 'unidad';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    protected $fillable = array('name', 'descripcion');

    public function ingredientes() {
        return $this->belongsToMany('Ingrediente', 'medir', 'unidad_id', 'ingrediente_id');
    }



}
