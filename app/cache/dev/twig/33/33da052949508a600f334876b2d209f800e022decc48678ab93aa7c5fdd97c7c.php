<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fb76e0afd8c1db7a1d1c1223c2aad63d1e9ca04f01b7e4606ef11d69777a0032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e2bb8038c29b48c5a076c129b58fe46c7a058fbfe1e67cdca25041aa3ab5503 = $this->env->getExtension("native_profiler");
        $__internal_5e2bb8038c29b48c5a076c129b58fe46c7a058fbfe1e67cdca25041aa3ab5503->enter($__internal_5e2bb8038c29b48c5a076c129b58fe46c7a058fbfe1e67cdca25041aa3ab5503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2bb8038c29b48c5a076c129b58fe46c7a058fbfe1e67cdca25041aa3ab5503->leave($__internal_5e2bb8038c29b48c5a076c129b58fe46c7a058fbfe1e67cdca25041aa3ab5503_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f89a110d46fc865711b6e493a15883d7590e3470422593af06c92c9320ee07c = $this->env->getExtension("native_profiler");
        $__internal_1f89a110d46fc865711b6e493a15883d7590e3470422593af06c92c9320ee07c->enter($__internal_1f89a110d46fc865711b6e493a15883d7590e3470422593af06c92c9320ee07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1f89a110d46fc865711b6e493a15883d7590e3470422593af06c92c9320ee07c->leave($__internal_1f89a110d46fc865711b6e493a15883d7590e3470422593af06c92c9320ee07c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_335117ed9acf44ba609076b60cbe19665d3629537fcf62bbe102c002b98ded41 = $this->env->getExtension("native_profiler");
        $__internal_335117ed9acf44ba609076b60cbe19665d3629537fcf62bbe102c002b98ded41->enter($__internal_335117ed9acf44ba609076b60cbe19665d3629537fcf62bbe102c002b98ded41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_335117ed9acf44ba609076b60cbe19665d3629537fcf62bbe102c002b98ded41->leave($__internal_335117ed9acf44ba609076b60cbe19665d3629537fcf62bbe102c002b98ded41_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5b8b989382aa24a576b4c93d466963dbbee83f5afb3977d08fc09d68cd0368 = $this->env->getExtension("native_profiler");
        $__internal_3d5b8b989382aa24a576b4c93d466963dbbee83f5afb3977d08fc09d68cd0368->enter($__internal_3d5b8b989382aa24a576b4c93d466963dbbee83f5afb3977d08fc09d68cd0368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3d5b8b989382aa24a576b4c93d466963dbbee83f5afb3977d08fc09d68cd0368->leave($__internal_3d5b8b989382aa24a576b4c93d466963dbbee83f5afb3977d08fc09d68cd0368_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
