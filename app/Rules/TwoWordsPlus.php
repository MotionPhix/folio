<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TwoWordsPlus implements ValidationRule
{
  /**
   * Run the validation rule.
   *
   * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
   */
  public function validate(string $attribute, mixed $value, Closure $fail): void
  {
    if (! preg_match('/\b\w+\s+\w+\b/', $value)) {
      $fail('The :attribute must contain at least two words separated by a space.');
    }
  }
}
