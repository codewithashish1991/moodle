<?php

class __Mustache_36798bba9bbf7d5e9ecbf49142a5c169 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<a class="nav-link dropdown-toggle my-auto" role="button" href="#"
';
        $buffer .= $indent . 'id="usermenu" data-toggle="dropdown"
';
        $buffer .= $indent . 'aria-haspopup="true" aria-expanded="false"
';
        $buffer .= $indent . 'aria-controls="usermenu-dropdown"
';
        $buffer .= $indent . 'aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA99666b2f53fbf403629b372a250cb9e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . 'title="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        // 'showusername' section
        $value = $context->find('showusername');
        $buffer .= $this->sectionC3c06644a716df094fd6a28b3e64ccf0($context, $indent, $value);
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('userpic'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'showusername' section
        $value = $context->find('showusername');
        $buffer .= $this->sectionA14339ffeaf1254e6daa54fd26a1fa42($context, $indent, $value);
        $buffer .= $indent . '</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="dropdown-menu dropdown-menu-right" role="menu"
';
        $buffer .= $indent . 'id="usermenu-dropdown"
';
        $buffer .= $indent . 'aria-labelledby="usermenu" >
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('userprofilemenu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA99666b2f53fbf403629b372a250cb9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usermenu, theme_adaptable';
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
                
                $buffer .= 'usermenu, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4203f6cee76b9f84f4e7e667cc5c71b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="d-none d-md-inline-block mx-1">{{username}}</span>
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
                
                $buffer .= $indent . '        <span class="d-none d-md-inline-block mx-1">';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3c06644a716df094fd6a28b3e64ccf0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#usernamepositionleft}}
        <span class="d-none d-md-inline-block mx-1">{{username}}</span>
    {{/usernamepositionleft}}
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
                
                // 'usernamepositionleft' section
                $value = $context->find('usernamepositionleft');
                $buffer .= $this->section4203f6cee76b9f84f4e7e667cc5c71b7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA14339ffeaf1254e6daa54fd26a1fa42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^usernamepositionleft}}
        <span class="d-none d-md-inline-block mx-1">{{username}}</span>
    {{/usernamepositionleft}}
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
                
                // 'usernamepositionleft' inverted section
                $value = $context->find('usernamepositionleft');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <span class="d-none d-md-inline-block mx-1">';
                    $value = $this->resolveValue($context->find('username'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
