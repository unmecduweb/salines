<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_eec44196a6346f67bd3cfa8a1a169f91052797ee81d374435e6cd3ceb0567310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_343a18d7591b796bdbc19b16c6517bccc6aedb279adb258685f3e36c298e69bc = $this->env->getExtension("native_profiler");
        $__internal_343a18d7591b796bdbc19b16c6517bccc6aedb279adb258685f3e36c298e69bc->enter($__internal_343a18d7591b796bdbc19b16c6517bccc6aedb279adb258685f3e36c298e69bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343a18d7591b796bdbc19b16c6517bccc6aedb279adb258685f3e36c298e69bc->leave($__internal_343a18d7591b796bdbc19b16c6517bccc6aedb279adb258685f3e36c298e69bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e19478e133fe26a4c61ff63dc53a3b5bacfc32114fd808dce7ffbd33c5f9d3f = $this->env->getExtension("native_profiler");
        $__internal_4e19478e133fe26a4c61ff63dc53a3b5bacfc32114fd808dce7ffbd33c5f9d3f->enter($__internal_4e19478e133fe26a4c61ff63dc53a3b5bacfc32114fd808dce7ffbd33c5f9d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4e19478e133fe26a4c61ff63dc53a3b5bacfc32114fd808dce7ffbd33c5f9d3f->leave($__internal_4e19478e133fe26a4c61ff63dc53a3b5bacfc32114fd808dce7ffbd33c5f9d3f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_55a11525cacab443396e896ee94a09498ddb524456b388fd95273c346f4f3a9d = $this->env->getExtension("native_profiler");
        $__internal_55a11525cacab443396e896ee94a09498ddb524456b388fd95273c346f4f3a9d->enter($__internal_55a11525cacab443396e896ee94a09498ddb524456b388fd95273c346f4f3a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_55a11525cacab443396e896ee94a09498ddb524456b388fd95273c346f4f3a9d->leave($__internal_55a11525cacab443396e896ee94a09498ddb524456b388fd95273c346f4f3a9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
