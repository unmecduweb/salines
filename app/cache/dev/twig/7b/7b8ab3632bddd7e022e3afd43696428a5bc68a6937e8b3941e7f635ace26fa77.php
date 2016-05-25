<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_24c882581251a3d6c51eec2a426e2cc4a5726975682ea9f541cb1a9cfeb95b6a extends Twig_Template
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
        $__internal_ea725f874a665f55b6b70c240da7a7c070f5e136da0d59500ff9daed6a5a5b58 = $this->env->getExtension("native_profiler");
        $__internal_ea725f874a665f55b6b70c240da7a7c070f5e136da0d59500ff9daed6a5a5b58->enter($__internal_ea725f874a665f55b6b70c240da7a7c070f5e136da0d59500ff9daed6a5a5b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ea725f874a665f55b6b70c240da7a7c070f5e136da0d59500ff9daed6a5a5b58->leave($__internal_ea725f874a665f55b6b70c240da7a7c070f5e136da0d59500ff9daed6a5a5b58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
