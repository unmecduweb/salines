<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_63a58b8b7e7440cdc2563495586d32f867f40a0140824a2002c835d1daed4c6a extends Twig_Template
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
        $__internal_703f3f5a5655970bb3e51b7716a70418359e7e7ab10ff19b1ea07c16c67fe83b = $this->env->getExtension("native_profiler");
        $__internal_703f3f5a5655970bb3e51b7716a70418359e7e7ab10ff19b1ea07c16c67fe83b->enter($__internal_703f3f5a5655970bb3e51b7716a70418359e7e7ab10ff19b1ea07c16c67fe83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_703f3f5a5655970bb3e51b7716a70418359e7e7ab10ff19b1ea07c16c67fe83b->leave($__internal_703f3f5a5655970bb3e51b7716a70418359e7e7ab10ff19b1ea07c16c67fe83b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
