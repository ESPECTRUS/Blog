<?php

namespace MiCurso\Http\Requests;

use MiCurso\Http\Requests\Request;

class CategoriaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $nombreCategoria = $this->route('categoria');
        return [
            'nombre' => 'required|string|min:5|max:25|unique:categorias,nombre,'.$nombreCategoria.',nombre',
        ];
    }
}
