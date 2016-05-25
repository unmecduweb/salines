<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_bafe702b5fd4665f6a2718617a05c4813465a1704717003b17a2225702ee6804 extends Twig_Template
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
        $__internal_64067fdc96cd0fa594dc67cbf0631d4805eaf116fc1b824c61ee6333138dfe3c = $this->env->getExtension("native_profiler");
        $__internal_64067fdc96cd0fa594dc67cbf0631d4805eaf116fc1b824c61ee6333138dfe3c->enter($__internal_64067fdc96cd0fa594dc67cbf0631d4805eaf116fc1b824c61ee6333138dfe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_64067fdc96cd0fa594dc67cbf0631d4805eaf116fc1b824c61ee6333138dfe3c->leave($__internal_64067fdc96cd0fa594dc67cbf0631d4805eaf116fc1b824c61ee6333138dfe3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
