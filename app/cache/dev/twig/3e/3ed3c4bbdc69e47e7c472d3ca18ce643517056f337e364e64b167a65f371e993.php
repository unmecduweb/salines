<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_9f8873f29a5f558317abe86140c705ba72922eee2d8a71acdbb356020852ecbf extends Twig_Template
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
        $__internal_52ec5fbdc6bf9e7ada5bfe840130c1cef1d4d8792ee0d8ab38cdd8003d4f8c71 = $this->env->getExtension("native_profiler");
        $__internal_52ec5fbdc6bf9e7ada5bfe840130c1cef1d4d8792ee0d8ab38cdd8003d4f8c71->enter($__internal_52ec5fbdc6bf9e7ada5bfe840130c1cef1d4d8792ee0d8ab38cdd8003d4f8c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_52ec5fbdc6bf9e7ada5bfe840130c1cef1d4d8792ee0d8ab38cdd8003d4f8c71->leave($__internal_52ec5fbdc6bf9e7ada5bfe840130c1cef1d4d8792ee0d8ab38cdd8003d4f8c71_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
