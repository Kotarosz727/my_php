<?php
namespace FizzBuzz;
class NumberConverter
{
    /**
     * Summary of __construct
     * @param ReplaceRuleInterface[] $rules
     */
    public function __construct(
        protected array $rules
    ){}
    public function convert(int $n): string
    {
        $text = '';
        foreach ($this->rules as $rule) {
            $text .= $rule->replace($n, $text);
        }

        return $text;
    }
}