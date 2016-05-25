<?php

/* LLCoreBundle:default:modal-edit-entity.html.twig */
class __TwigTemplate_c47cbf5672de1cf7fdcaf0b9f188d04c9033dbcf4e63afe0f2e58ebc3aea783e extends Twig_Template
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
        $__internal_e7bafe56cd57a49ec7d207d595b7ef45fac2eae47cf62c8480df41e52305966d = $this->env->getExtension("native_profiler");
        $__internal_e7bafe56cd57a49ec7d207d595b7ef45fac2eae47cf62c8480df41e52305966d->enter($__internal_e7bafe56cd57a49ec7d207d595b7ef45fac2eae47cf62c8480df41e52305966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle:default:modal-edit-entity.html.twig"));

        // line 1
        echo "<div class=\"modal ll-modal fade\" id=\"modal-edit-entity\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Modifier </h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
                ";
        // line 10
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "Form/main-form-layout.html.twig"));
        // line 11
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                <button class=\"save-entity btn btn-primary\">Enregistrer</button>
            </div>
        </div>
    </div>
</div>
            ";
        
        $__internal_e7bafe56cd57a49ec7d207d595b7ef45fac2eae47cf62c8480df41e52305966d->leave($__internal_e7bafe56cd57a49ec7d207d595b7ef45fac2eae47cf62c8480df41e52305966d_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle:default:modal-edit-entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  43 => 12,  38 => 11,  36 => 10,  32 => 9,  22 => 1,);
    }
}
/* <div class="modal ll-modal fade" id="modal-edit-entity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                 <h4 class="modal-title" id="myModalLabel">Modifier </h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 {{ form_start(form) }}  */
/*                 {% form_theme form 'Form/main-form-layout.html.twig' %}*/
/*                 {{ form_errors(form) }}*/
/*                 {{ form_rest(form) }}*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>*/
/*                 <button class="save-entity btn btn-primary">Enregistrer</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*             */
