<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bc763e9d5a5919ef2957756f339245fbd88db96ece9ec7892bdab48cde52866a extends Twig_Template
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
        $__internal_6fb2014734c76929dc338df5025b8887d1c5b992f24c9ee9db76f3769ff6d815 = $this->env->getExtension("native_profiler");
        $__internal_6fb2014734c76929dc338df5025b8887d1c5b992f24c9ee9db76f3769ff6d815->enter($__internal_6fb2014734c76929dc338df5025b8887d1c5b992f24c9ee9db76f3769ff6d815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6fb2014734c76929dc338df5025b8887d1c5b992f24c9ee9db76f3769ff6d815->leave($__internal_6fb2014734c76929dc338df5025b8887d1c5b992f24c9ee9db76f3769ff6d815_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
