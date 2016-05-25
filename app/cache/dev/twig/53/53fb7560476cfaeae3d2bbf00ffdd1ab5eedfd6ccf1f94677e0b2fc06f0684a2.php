<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ad8698699846676d4480d1392dddb3a1fd90bb1e0e6bf66b5e9d0fa2827bfaa3 extends Twig_Template
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
        $__internal_21fe97d68013c8b5ab12f691980a269b73306c4e0ba5c5b2a5e18cb7bc9f1942 = $this->env->getExtension("native_profiler");
        $__internal_21fe97d68013c8b5ab12f691980a269b73306c4e0ba5c5b2a5e18cb7bc9f1942->enter($__internal_21fe97d68013c8b5ab12f691980a269b73306c4e0ba5c5b2a5e18cb7bc9f1942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_21fe97d68013c8b5ab12f691980a269b73306c4e0ba5c5b2a5e18cb7bc9f1942->leave($__internal_21fe97d68013c8b5ab12f691980a269b73306c4e0ba5c5b2a5e18cb7bc9f1942_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
