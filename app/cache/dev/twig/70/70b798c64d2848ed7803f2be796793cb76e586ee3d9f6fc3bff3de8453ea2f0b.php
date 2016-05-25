<?php

/* LLCoreBundle:default:edit.html.twig */
class __TwigTemplate_2ce04b10369a03ac8daf8892b0fca71bd1f1742a793c21b1e869591d928123e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "LLCoreBundle:default:edit.html.twig", 1);
        $this->blocks = array(
            'pageH1' => array($this, 'block_pageH1'),
            'admin_container' => array($this, 'block_admin_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LLCoreBundle::layout-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5cda8158e6c8b01768b6a9a6aa4ce4edcc4ba99ed4f28353816474c8e8e3e93 = $this->env->getExtension("native_profiler");
        $__internal_d5cda8158e6c8b01768b6a9a6aa4ce4edcc4ba99ed4f28353816474c8e8e3e93->enter($__internal_d5cda8158e6c8b01768b6a9a6aa4ce4edcc4ba99ed4f28353816474c8e8e3e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle:default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5cda8158e6c8b01768b6a9a6aa4ce4edcc4ba99ed4f28353816474c8e8e3e93->leave($__internal_d5cda8158e6c8b01768b6a9a6aa4ce4edcc4ba99ed4f28353816474c8e8e3e93_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_2352ad8575d8957ecb28e14c9f9c6a5dd360715258ce05faebcbf43e6b4efa9c = $this->env->getExtension("native_profiler");
        $__internal_2352ad8575d8957ecb28e14c9f9c6a5dd360715258ce05faebcbf43e6b4efa9c->enter($__internal_2352ad8575d8957ecb28e14c9f9c6a5dd360715258ce05faebcbf43e6b4efa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 4
        echo "    
";
        
        $__internal_2352ad8575d8957ecb28e14c9f9c6a5dd360715258ce05faebcbf43e6b4efa9c->leave($__internal_2352ad8575d8957ecb28e14c9f9c6a5dd360715258ce05faebcbf43e6b4efa9c_prof);

    }

    // line 6
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_2fa866c47d8627f7440bae6f969c99efecc403725dbed73f6536f14bd057df16 = $this->env->getExtension("native_profiler");
        $__internal_2fa866c47d8627f7440bae6f969c99efecc403725dbed73f6536f14bd057df16->enter($__internal_2fa866c47d8627f7440bae6f969c99efecc403725dbed73f6536f14bd057df16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 7
        echo "    <form action=\"\" method=\"post\">

    ";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "Form/main-form-layout.html.twig"));
        // line 10
        echo "
    

    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" />
    </form>
";
        
        $__internal_2fa866c47d8627f7440bae6f969c99efecc403725dbed73f6536f14bd057df16->leave($__internal_2fa866c47d8627f7440bae6f969c99efecc403725dbed73f6536f14bd057df16_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  66 => 13,  61 => 10,  59 => 9,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LLCoreBundle::layout-admin.html.twig" %}*/
/* */
/* {%block pageH1 %}*/
/*     */
/* {%endblock%}*/
/* {% block admin_container %}*/
/*     <form action="" method="post">*/
/* */
/*     {% form_theme form 'Form/main-form-layout.html.twig' %}*/
/* */
/*     */
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_rest(form) }}*/
/*     <input type="submit" />*/
/*     </form>*/
/* {% endblock %}*/
