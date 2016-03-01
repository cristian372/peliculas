<?php namespace prueba;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
class Movie extends Model {

	protected $table = "movies";

	protected $fillable = ['name', 'cast', 'direccion', 'duracion', 'genero_id'];

	public function setDuracionAttribute($duracion){
		if(!empty($duracion)){
			$this->attributes['duracion']=Carbon::now()->second.$duracion->getClientOriginalName();
			$name = Carbon::now()->second.$duracion->getClientOriginalName();
			\Storage::disk('local')->put($name, \File::get($duracion));			
		}

	}

	public static function Movies(){
		return DB::table('movies')
			->join('generos', 'generos.id', '=', 'movies.genero_id')
			->select('movies.*', 'generos.genero')
			->get();
	}
}
