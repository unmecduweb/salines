<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_632f33d6fc56f9e023ea3189da5cf5ee0a98b9ed605da3ac01843c2459879a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a5a3de47c0c481fc66de636e52dc07e8041ba56b6f0ee6ba3e3d496d9e300c7 = $this->env->getExtension("native_profiler");
        $__internal_5a5a3de47c0c481fc66de636e52dc07e8041ba56b6f0ee6ba3e3d496d9e300c7->enter($__internal_5a5a3de47c0c481fc66de636e52dc07e8041ba56b6f0ee6ba3e3d496d9e300c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5a5a3de47c0c481fc66de636e52dc07e8041ba56b6f0ee6ba3e3d496d9e300c7->leave($__internal_5a5a3de47c0c481fc66de636e52dc07e8041ba56b6f0ee6ba3e3d496d9e300c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
