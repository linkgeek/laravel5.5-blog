<?php

namespace App\Http\Requests\Nav;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
        return [
            'name'=>'required|unique:navs,name,'.$this->route()->id,
            'url'=>'required',
        ];
    }

    /**
     * 定义字段名中文
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'=>'菜单名',
            'url'=>'URL',
        ];
    }
}
