<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class EmailRuleEI implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //SET email validation rules
        if(empty($value))
        {$fail('Email is required');}
        if(!str_ends_with($value,'@yahoo.com'))
        {$fail('Email must end with @yahoo.com');}
    }
}
