<?php

namespace App\Http\Requests\Admin\CompanyProfile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreCompanyProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.company-profile.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'company_name' => ['required', 'string'],
            'date_established' => ['required', 'string'],
            'capital' => ['required', 'string'],
            'company_address' => ['required', 'string'],
            'factory_address' => ['required', 'string'],
            'sales_address' => ['required', 'string'],
            'email_company' => ['required', 'string'],
            'email_hr' => ['required', 'string'],
            'email_sales' => ['required', 'string'],
            'en_production_line' => ['required', 'string'],
            'jp_production_line' => ['required', 'string'],
            
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
