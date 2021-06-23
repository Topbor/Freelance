<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


abstract class BaseRequest extends FormRequest
{

    abstract public function rules(): array;

    public function getSanitized(): array
    {
        return $this->validated();
    }
}
