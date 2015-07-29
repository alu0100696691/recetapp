<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewRecipesController extends Controller {

	public function postSave()
	{
		if(!\Input::file("image"))
    {
        return redirect('newrecipes')->with('errors', 'Image has required field');
    }
		else {

    $mime = \Input::file('image')->getMimeType();
    $extension = strtolower(\Input::file('image')->getClientOriginalExtension());
    $fileName = uniqid().'.'.$extension;
    $path = "files_uploaded";

		$receta = new Receta();
		$receta->name = Input::get('nombre');
		$receta->descripcion = Input::get('descripcion_receta');
		$receta->duracion = Input::get('duracion');
		$receta->comentario = Input::get('comentario');

		if (Input::hasFile('image')) {

			$archivoImagen = Input::file('image');

			$rules = array(
            'file' => 'mimes:png,gif,jpeg,jpg|max:80000'
            );

      $messages = array(
            'mimes' => 'Images may only be files gif, png o jpg.'
            );

      $validator = Validator::make(['archivoImagen' => $archivoImagen], $rules, $messages);
			if ($validator->fails())
		  {
		      return Redirect::to('newrecipes')->with('errors', $validator->messages());
		  } else {
						//creamos el objeto Image
						$imagen = Image::make($archivoImagen);

						//lo redimensionamos
						$imagen->resize(640, null, function ($constraint) {
							$constraint->aspectRatio();
						});

						//lo subimos al directorio
						$imagen->save($path . $fileName);
			}
		}

		$receta->preparacion->descripcion = $descripcion;
		$receta->preparacion->foto = $fileName;
		$receta->preparacion->receta_id = $receta->id;
		$receta->save();


	}
		Session::flash('message', 'Recipes, It was created successfully');
		Session::flash('alert-class', 'alert-info');
		return Redirect::to('recipes');
	}
}
