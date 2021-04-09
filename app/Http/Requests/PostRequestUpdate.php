<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestUpdate extends FormRequest
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
                'name_es'     => 'required',
                'slug'        => "required|unique:posts,slug,".request()->id,
                'extract_es'  => "required|unique:posts,extract,".request()->id,
                'category_id' => 'required',
                'tags'        => 'required',
                'body_es'     => 'required',
                'user_id'     => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name_es'     => 'Name',
            'slug'        => "Slug",
            'extract_es'  => "Extract",
            'category_id' => 'Category',
            'tags'        => 'Tags',
            'body_es'     => 'Body',
            'user_id'     => 'User',
        ];
    }
}
