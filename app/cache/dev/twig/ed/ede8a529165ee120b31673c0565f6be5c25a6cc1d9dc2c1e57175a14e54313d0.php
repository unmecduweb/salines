<?php

/* ::base.html.twig */
class __TwigTemplate_8048803d541cae27b072cc311379ff881895516dd305ef8b124f85932995f3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44659a7cdc009b59589a38b605c637dfcdfceecd45ecda029ae268162e215b19 = $this->env->getExtension("native_profiler");
        $__internal_44659a7cdc009b59589a38b605c637dfcdfceecd45ecda029ae268162e215b19->enter($__internal_44659a7cdc009b59589a38b605c637dfcdfceecd45ecda029ae268162e215b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 7]>
<html class=\"ie ie7\" lang=\"en-US\">
   <![endif]-->
<!--[if IE 8]>
   <html class=\"ie ie8\" lang=\"en-US\">
      <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=\"en-US\" class=\"no-padding\"><!--<![endif]-->
    <head>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    </head>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "</html>";
        
        $__internal_44659a7cdc009b59589a38b605c637dfcdfceecd45ecda029ae268162e215b19->leave($__internal_44659a7cdc009b59589a38b605c637dfcdfceecd45ecda029ae268162e215b19_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f7b44ed1a9c5d07f5b4d2c8bd336678c22084f811726e9354f0edd2dc391284 = $this->env->getExtension("native_profiler");
        $__internal_2f7b44ed1a9c5d07f5b4d2c8bd336678c22084f811726e9354f0edd2dc391284->enter($__internal_2f7b44ed1a9c5d07f5b4d2c8bd336678c22084f811726e9354f0edd2dc391284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2f7b44ed1a9c5d07f5b4d2c8bd336678c22084f811726e9354f0edd2dc391284->leave($__internal_2f7b44ed1a9c5d07f5b4d2c8bd336678c22084f811726e9354f0edd2dc391284_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc355f5f60bd367d1aa41687fea4baf7ae79b2a95a65cb9cc7c55d28e774eb29 = $this->env->getExtension("native_profiler");
        $__internal_cc355f5f60bd367d1aa41687fea4baf7ae79b2a95a65cb9cc7c55d28e774eb29->enter($__internal_cc355f5f60bd367d1aa41687fea4baf7ae79b2a95a65cb9cc7c55d28e774eb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc355f5f60bd367d1aa41687fea4baf7ae79b2a95a65cb9cc7c55d28e774eb29->leave($__internal_cc355f5f60bd367d1aa41687fea4baf7ae79b2a95a65cb9cc7c55d28e774eb29_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  50 => 11,  43 => 14,  41 => 13,  38 => 12,  36 => 11,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 7]>*/
/* <html class="ie ie7" lang="en-US">*/
/*    <![endif]-->*/
/* <!--[if IE 8]>*/
/*    <html class="ie ie8" lang="en-US">*/
/*       <![endif]-->*/
/* <!--[if !(IE 7) | !(IE 8)  ]><!-->*/
/* <html lang="en-US" class="no-padding"><!--<![endif]-->*/
/*     <head>*/
/*         {% block head %}{% endblock %}*/
/*     </head>*/
/*     {% block body %}{% endblock %}*/
/* </html>*/
