<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3ef3349cc3513007b5c3f51fd095d20262141d5d7f0a0b3a304b8dfb1a7a0ca9 extends Twig_Template
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
        $__internal_4c7f36332627aa069ba4bab2eff25c0b86d26d03c3153b6fd620da27885bea5a = $this->env->getExtension("native_profiler");
        $__internal_4c7f36332627aa069ba4bab2eff25c0b86d26d03c3153b6fd620da27885bea5a->enter($__internal_4c7f36332627aa069ba4bab2eff25c0b86d26d03c3153b6fd620da27885bea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4c7f36332627aa069ba4bab2eff25c0b86d26d03c3153b6fd620da27885bea5a->leave($__internal_4c7f36332627aa069ba4bab2eff25c0b86d26d03c3153b6fd620da27885bea5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
