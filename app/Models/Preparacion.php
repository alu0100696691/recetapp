
<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparacion extends Model {

    protected $table = 'preparacion';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    protected $fillable = array('name', 'descripcion', 'foto', 'receta_id');

    public function receta() {
        return $this->belongsTo('Receta');
    }

}
