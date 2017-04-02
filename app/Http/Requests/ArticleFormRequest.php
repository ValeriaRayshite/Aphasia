<?php

namespace Aphasia\Http\Requests;



class ArticleFormRequest extends Request
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
            'title' => 'required|unique',
            'title_ru' => 'required|unique',
            'first_letter' => 'required|max:1',
            'first_letter_ru' => 'required|max:1',
            'content' => 'required',
            'content_ru' => 'required',
        ];
    }
}
