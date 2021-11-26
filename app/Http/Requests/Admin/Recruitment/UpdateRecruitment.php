<?php

namespace App\Http\Requests\Admin\Recruitment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRecruitment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.recruitment.edit', $this->recruitment);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'en_header' => ['sometimes', 'string'],
            'jp_header' => ['sometimes', 'string'],
            'en_details' => ['sometimes', 'string'],
            'jp_details' => ['sometimes', 'string'],
            'en_vision' => ['sometimes', 'string'],
            'jp_vision' => ['sometimes', 'string'],
            'en_mission' => ['sometimes', 'string'],
            'jp_mission' => ['sometimes', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
