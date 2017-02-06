<?php

namespace MiCurso\Http\Requests;

use MiCurso\Http\Requests\Request;

class TagRequest extends Request
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
        $nombreTag = $this->route('tag');
        return [
            'nombre' => 'required|string|min:5|max:25|unique:tags,nombre,'.$nombreTag.',nombre',
        ];
    }
}
