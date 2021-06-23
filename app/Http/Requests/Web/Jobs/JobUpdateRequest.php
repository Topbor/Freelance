<?php

namespace App\Http\Requests\Web\Jobs;

use App\Http\Requests\BaseRequest;

/**
 * Class ArticleUpdateRequest
 * @package App\Http\Requests\Web\Articles
 */
class JobUpdateRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
       // dd($this->all());
        return [
            'title' => ['string'],
            'shortDesc' => ['string'],
            'longDesc' => ['string'],
            'price' => ['integer'],
        ];
    }
}
