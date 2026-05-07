<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class NameRuleEI implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the value is empty
        if(empty($value))
            {$fail('Name is required');}
            $value=trim($value);
            if(!preg_match("/^[ a-zA-Z ]+$/",$value))
                {$fail('Name must contain only letters and spaces');}
                if(strlen($value)<3 || strlen($value)>15)
{$fail('Name must be at least 3 characters long and not more than 15 characters');}
    }
}
