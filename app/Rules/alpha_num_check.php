<?php

namespace App\Rules;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Arr;

class alpha_num_check implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        
        return preg_match('/^[a-zA-Z0-9]+$/',$value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.alpha_num_check');
    }

    // protected function validator(array $data){
    //     return Validator::make($data,[
    //         'login_id' => [new alpha_num_check()],
    //     ]);
    // }
}
