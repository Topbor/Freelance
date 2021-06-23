<?php

namespace App\Http\Requests\Web\Jobs;

use App\Http\Requests\BaseRequest;


class JobStoreRequest extends BaseRequest
{

    public function rules(): array
    {
        //dd($this->all());
        return [
            'title' => ['required','string'],
            'shortDesc' => ['required','string'],
            'longDesc' => ['required','string'],
            'language' => ['required','string'],
            'price' => ['nullable','integer'],
            
        ];
    }
}
