<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4c16cf4ef5fa2ea7ac200eca19a00196ecb200069efd11a4c44137c72b05848b extends Twig_Template
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
        $__internal_c3ddc216a3982c7119eb4a726c2ec1bd86ce3c3383a4dd3401c4c2facf296e4b = $this->env->getExtension("native_profiler");
        $__internal_c3ddc216a3982c7119eb4a726c2ec1bd86ce3c3383a4dd3401c4c2facf296e4b->enter($__internal_c3ddc216a3982c7119eb4a726c2ec1bd86ce3c3383a4dd3401c4c2facf296e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c3ddc216a3982c7119eb4a726c2ec1bd86ce3c3383a4dd3401c4c2facf296e4b->leave($__internal_c3ddc216a3982c7119eb4a726c2ec1bd86ce3c3383a4dd3401c4c2facf296e4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
