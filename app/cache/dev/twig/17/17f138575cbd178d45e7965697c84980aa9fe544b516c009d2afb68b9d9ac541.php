<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e77532137edc926d1966710117b89d1e701c6903788331dea7650fd387e48f14 extends Twig_Template
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
        $__internal_4b6be1cf5f80e638d54278955ae3a8e1b30da6efc6d5f17c89cebe46ae5024bf = $this->env->getExtension("native_profiler");
        $__internal_4b6be1cf5f80e638d54278955ae3a8e1b30da6efc6d5f17c89cebe46ae5024bf->enter($__internal_4b6be1cf5f80e638d54278955ae3a8e1b30da6efc6d5f17c89cebe46ae5024bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b6be1cf5f80e638d54278955ae3a8e1b30da6efc6d5f17c89cebe46ae5024bf->leave($__internal_4b6be1cf5f80e638d54278955ae3a8e1b30da6efc6d5f17c89cebe46ae5024bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
