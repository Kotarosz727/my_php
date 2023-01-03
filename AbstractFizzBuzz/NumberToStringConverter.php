<?php

namespace AbstractFizzBuzz;

class NumberToStringConverter
{
    /**
     * @param RuleInterface[] $rules
     */
    public function __construct(
        protected array $rules
    ){}

    public function execute(int $n): string
    {
        $text = '';
        
        foreach($this->rules as $rule)
        {
            if ($rule->match($text, $n)) {
                $text .= $rule->apply($text, $n);
            }
        }
        
        return $text;
    }
}