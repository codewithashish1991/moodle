<?php

class __Mustache_8055ce2771b6b273fe7db717fb12e4e3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'activityinfo' section
        $value = $context->find('activityinfo');
        $buffer .= $this->sectionBa4948900d8f03a8102d5bc3e9281cd3($context, $indent, $value);

        return $buffer;
    }

    private function sectionBa4948900d8f03a8102d5bc3e9281cd3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="alert alert-info mb-2">{{{activityinfo}}}</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="alert alert-info mb-2">';
                $value = $this->resolveValue($context->find('activityinfo'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
