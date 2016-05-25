<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_102768d0c5bb9d222610485cca11d59d3d79bf81ff900d6f922d2d37b293a373 extends Twig_Template
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
        $__internal_51a41f18338c29f01e37e1deba1cc28f3dfd0797707071df49174fcacdca19f1 = $this->env->getExtension("native_profiler");
        $__internal_51a41f18338c29f01e37e1deba1cc28f3dfd0797707071df49174fcacdca19f1->enter($__internal_51a41f18338c29f01e37e1deba1cc28f3dfd0797707071df49174fcacdca19f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_51a41f18338c29f01e37e1deba1cc28f3dfd0797707071df49174fcacdca19f1->leave($__internal_51a41f18338c29f01e37e1deba1cc28f3dfd0797707071df49174fcacdca19f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
