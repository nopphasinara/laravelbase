<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:200',
            'body' => 'required',
            'tags' => 'required|array|max:10',
            'is_published' => 'required|boolean',
            'author_name' => 'required',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        if (!isset($this->slug) || !$this->slug) {
          $this->slug = str_slug($this->title);
        }

        $this->merge([
            'slug' => $this->slug,
        ]);
        // $this->merge([
        //     'title' => fix_typos($this->title),
        //     'body' => filter_malicious_content($this->body),
        //     'tags' => convert_comma_separated_values_to_array($this->tags),
        //     'is_published' => (bool) $this->is_published,
        // ]);
    }
}
