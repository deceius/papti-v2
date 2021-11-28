<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.product.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'en_name' => ['required', 'string'],
            'en_description' => ['required', 'string'],
            'jp_name' => [],
            'jp_description' => [],

        ];
    }

    public function getApplicationId(){
        if ($this->has('product_application')){
            return $this->get('product_application')['id'];
        }
        return null;
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();
        $sanitized["product_application_id"] = $this->getApplicationId();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
