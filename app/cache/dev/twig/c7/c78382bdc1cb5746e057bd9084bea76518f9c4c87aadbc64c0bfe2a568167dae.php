<?php

/* LLCoreBundle:production:modal-edit-entity.html.twig */
class __TwigTemplate_a11b231a96851918d9b0a96cdb082c969a18629f66949bf7c378c773fcbe7b7a extends Twig_Template
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
        $__internal_835280e7021e36db5a4dd9baec8a3a96ecf0b19713f73372439fefc91cd0664c = $this->env->getExtension("native_profiler");
        $__internal_835280e7021e36db5a4dd9baec8a3a96ecf0b19713f73372439fefc91cd0664c->enter($__internal_835280e7021e36db5a4dd9baec8a3a96ecf0b19713f73372439fefc91cd0664c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle:production:modal-edit-entity.html.twig"));

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
        
        $__internal_835280e7021e36db5a4dd9baec8a3a96ecf0b19713f73372439fefc91cd0664c->leave($__internal_835280e7021e36db5a4dd9baec8a3a96ecf0b19713f73372439fefc91cd0664c_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle:production:modal-edit-entity.html.twig";
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
