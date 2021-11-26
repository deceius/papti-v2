<?php

namespace App\Http\Requests\Admin\CompanyProfile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateCompanyProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.company-profile.edit', $this->companyProfile);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'company_name' => ['sometimes', 'string'],
            'date_established' => ['sometimes', 'string'],
            'capital' => ['sometimes', 'string'],
            'company_address' => ['sometimes', 'string'],
            'factory_address' => ['sometimes', 'string'],
            'sales_address' => ['sometimes', 'string'],
            'email_company' => ['sometimes', 'string'],
            'email_hr' => ['sometimes', 'string'],
            'email_sales' => ['sometimes', 'string'],
            'en_production_line' => ['sometimes', 'string'],
            'jp_production_line' => ['sometimes', 'string'],
            
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
