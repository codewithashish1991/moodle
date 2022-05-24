<?php

class __Mustache_aac083a8d8bdfbfd727feaab86e42692 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form id="pre-login-form" class="form-inline my-2 my-lg-0" action="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= $value;
        $buffer .= '" method="post">
';
        $buffer .= $indent . '    <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('token'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>
';
        // 'displayloginbox' section
        $value = $context->find('displayloginbox');
        $buffer .= $this->section095120c1451d76679347e8d7cd0a9cdd($context, $indent, $value);
        $buffer .= $indent . '    <button class="btn-login" type="submit">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD031cd4909ee891fac38226ae5f4c5d7($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section24d3596515a964fba3d361c1ba5e658e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginplaceholder, theme_adaptable';
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
                
                $buffer .= 'loginplaceholder, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5c657f56faa7fa957469bd29784965b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'passwordplaceholder, theme_adaptable';
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
                
                $buffer .= 'passwordplaceholder, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section095120c1451d76679347e8d7cd0a9cdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <input type="text" name="username" placeholder="{{#str}}loginplaceholder, theme_adaptable{{/str}}" size="11">
    <input type="password" name="password" placeholder="{{#str}}passwordplaceholder, theme_adaptable{{/str}}" size="11">
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
                
                $buffer .= $indent . '    <input type="text" name="username" placeholder="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section24d3596515a964fba3d361c1ba5e658e($context, $indent, $value);
                $buffer .= '" size="11">
';
                $buffer .= $indent . '    <input type="password" name="password" placeholder="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE5c657f56faa7fa957469bd29784965b($context, $indent, $value);
                $buffer .= '" size="11">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD031cd4909ee891fac38226ae5f4c5d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'logintextbutton, theme_adaptable';
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
                
                $buffer .= 'logintextbutton, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
