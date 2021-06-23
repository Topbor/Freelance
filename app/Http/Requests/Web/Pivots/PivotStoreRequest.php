<?php

namespace App\Http\Requests\Web\Pivots;

use App\Http\Requests\BaseRequest;


class pivotStoreRequest extends BaseRequest
{

    public function rules(): array
    {
        //dd($this->all());
        return [
            'job_id' => ['nullable','integer'],
            
        ];
    }
}
