<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\ActionRequest;
use Illuminate\Validation\Validator;

class ExampleAction
{
    use AsAction;

    public function rules()
    {
        return [];
    }

    public function getValidationMessages(): array
    {
        return [];
    }

    public function authorize(ActionRequest $request): bool
    {
        return true;
    }
    
    public function withValidator(Validator $validator, ActionRequest $request)
    {
        return $validator->errors();
    }

    public function handle(Request $request)
    {
    }
}
