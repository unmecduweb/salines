<?php

/* base.html.twig */
class __TwigTemplate_48d1ca0c27fe8de47329813e22b231bab0e60559e122fd607f12081c487aaefa extends Twig_Template
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
        $__internal_ac7ff294f78082f4f2fb59cae2cf8daf96193a9a4d5ab970cabc6fb9f24ace5b = $this->env->getExtension("native_profiler");
        $__internal_ac7ff294f78082f4f2fb59cae2cf8daf96193a9a4d5ab970cabc6fb9f24ace5b->enter($__internal_ac7ff294f78082f4f2fb59cae2cf8daf96193a9a4d5ab970cabc6fb9f24ace5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ac7ff294f78082f4f2fb59cae2cf8daf96193a9a4d5ab970cabc6fb9f24ace5b->leave($__internal_ac7ff294f78082f4f2fb59cae2cf8daf96193a9a4d5ab970cabc6fb9f24ace5b_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_0531ad756b780c2a19232d2833bf0800cb8d2477cf9d479f9c1847061f616feb = $this->env->getExtension("native_profiler");
        $__internal_0531ad756b780c2a19232d2833bf0800cb8d2477cf9d479f9c1847061f616feb->enter($__internal_0531ad756b780c2a19232d2833bf0800cb8d2477cf9d479f9c1847061f616feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0531ad756b780c2a19232d2833bf0800cb8d2477cf9d479f9c1847061f616feb->leave($__internal_0531ad756b780c2a19232d2833bf0800cb8d2477cf9d479f9c1847061f616feb_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_fde7ab17c22d308e48a72aa1ff881ba1d175d1d3432fb10d522359e37ab43e8f = $this->env->getExtension("native_profiler");
        $__internal_fde7ab17c22d308e48a72aa1ff881ba1d175d1d3432fb10d522359e37ab43e8f->enter($__internal_fde7ab17c22d308e48a72aa1ff881ba1d175d1d3432fb10d522359e37ab43e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fde7ab17c22d308e48a72aa1ff881ba1d175d1d3432fb10d522359e37ab43e8f->leave($__internal_fde7ab17c22d308e48a72aa1ff881ba1d175d1d3432fb10d522359e37ab43e8f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
