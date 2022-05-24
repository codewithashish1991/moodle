<?php

class __Mustache_e3ad7d2ffbf4916cc41244ca95a573bd extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="headersearch ';
        $value = $this->resolveValue($context->find('pagelayout'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' d-none d-lg-block float-right">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('search'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
