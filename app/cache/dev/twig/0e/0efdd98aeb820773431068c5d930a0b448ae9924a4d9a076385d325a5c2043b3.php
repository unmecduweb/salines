<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3ea9556d4a56000845d73c259c0bf63cc9a40a182e92eba6e29cd98d576ac389 extends Twig_Template
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
        $__internal_b64241869b898efea49164f5f6702e5c009385027d7468c62928e020b73bd9b6 = $this->env->getExtension("native_profiler");
        $__internal_b64241869b898efea49164f5f6702e5c009385027d7468c62928e020b73bd9b6->enter($__internal_b64241869b898efea49164f5f6702e5c009385027d7468c62928e020b73bd9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b64241869b898efea49164f5f6702e5c009385027d7468c62928e020b73bd9b6->leave($__internal_b64241869b898efea49164f5f6702e5c009385027d7468c62928e020b73bd9b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
