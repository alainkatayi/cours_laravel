<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createPublicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        //ici on confirme que l'utilisteur a le droit de faire ca
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //et ici on lui fournit les contrainte pour chaque champ
            'title' => ['required', 'min:5'],
            'slug' => ['required',  'min:5', Rule::unique('post') -> ignore(this ->post)],
            'content' => ['required']
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'slug' => \Str::slug($this->title)
        ]);
    }
}
