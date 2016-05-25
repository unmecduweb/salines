<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b49da110a030102f42f6273f65947383b778b4bb91e30e1b3706d07e1b2d9771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_708efc4ac85a2be8ada51fdd70413fada49218da3c9de059891681ed7d0be668 = $this->env->getExtension("native_profiler");
        $__internal_708efc4ac85a2be8ada51fdd70413fada49218da3c9de059891681ed7d0be668->enter($__internal_708efc4ac85a2be8ada51fdd70413fada49218da3c9de059891681ed7d0be668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_708efc4ac85a2be8ada51fdd70413fada49218da3c9de059891681ed7d0be668->leave($__internal_708efc4ac85a2be8ada51fdd70413fada49218da3c9de059891681ed7d0be668_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2063da8522d5064ffa753492792c57f780d172d642537dc47b7bc06ed600e17d = $this->env->getExtension("native_profiler");
        $__internal_2063da8522d5064ffa753492792c57f780d172d642537dc47b7bc06ed600e17d->enter($__internal_2063da8522d5064ffa753492792c57f780d172d642537dc47b7bc06ed600e17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2063da8522d5064ffa753492792c57f780d172d642537dc47b7bc06ed600e17d->leave($__internal_2063da8522d5064ffa753492792c57f780d172d642537dc47b7bc06ed600e17d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a57efc69e609ed5753f43775027d49f3a7511b176fad0cc46ab226f6ed5b170 = $this->env->getExtension("native_profiler");
        $__internal_5a57efc69e609ed5753f43775027d49f3a7511b176fad0cc46ab226f6ed5b170->enter($__internal_5a57efc69e609ed5753f43775027d49f3a7511b176fad0cc46ab226f6ed5b170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5a57efc69e609ed5753f43775027d49f3a7511b176fad0cc46ab226f6ed5b170->leave($__internal_5a57efc69e609ed5753f43775027d49f3a7511b176fad0cc46ab226f6ed5b170_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
