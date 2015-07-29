
<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPlato extends Model {

    protected $table = 'tipoPlato';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    protected $fillable = array('name', 'descripcion','receta_id');

    public function receta() {
        return $this->belongsTo('Receta');
    }

}
