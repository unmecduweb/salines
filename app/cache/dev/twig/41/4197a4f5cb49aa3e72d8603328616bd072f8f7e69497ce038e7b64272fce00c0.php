<?php

/* @LLCore/product/modal-edit-entity.html.twig */
class __TwigTemplate_e418385119c09eab6b78c329fe824fb64bd1b3666a2f248f92edbc2268dbdd0f extends Twig_Template
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
        $__internal_5ded91ad6e8b84f3cd6ee71a331495f0a95f7535f631a0bc2740242398f0d425 = $this->env->getExtension("native_profiler");
        $__internal_5ded91ad6e8b84f3cd6ee71a331495f0a95f7535f631a0bc2740242398f0d425->enter($__internal_5ded91ad6e8b84f3cd6ee71a331495f0a95f7535f631a0bc2740242398f0d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/product/modal-edit-entity.html.twig"));

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
                
                <div class=\"form-group col-xs-12\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                 </div>
                 
                 <div class=\"form-group col-xs-12\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "select")));
        echo "
                 </div>
                 <div class=\"form-group col-xs-12\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceHt", array()), 'label');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceHt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                 </div>
                 <div class=\"form-group col-xs-12\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unity", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unity", array()), 'widget', array("attr" => array("class" => "select")));
        echo "
                 </div>
                 <div class=\"form-group col-xs-12\">
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isAllergen", array()), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isAllergen", array()), 'widget');
        echo "
                 </div>
                 <div class=\"form-group col-xs-12\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provider", array()), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provider", array()), 'widget', array("attr" => array("class" => "select")));
        echo "
                 </div>
                 <div class=\"clear\"></div>
        
                
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
        // line 42
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
        
        $__internal_5ded91ad6e8b84f3cd6ee71a331495f0a95f7535f631a0bc2740242398f0d425->leave($__internal_5ded91ad6e8b84f3cd6ee71a331495f0a95f7535f631a0bc2740242398f0d425_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/product/modal-edit-entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  108 => 41,  100 => 36,  96 => 35,  90 => 32,  86 => 31,  80 => 28,  76 => 27,  70 => 24,  66 => 23,  60 => 20,  56 => 19,  49 => 15,  45 => 14,  38 => 11,  36 => 10,  32 => 9,  22 => 1,);
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
/*                 */
/*                 <div class="form-group col-xs-12">*/
/*                     {{ form_label(form.name) }}*/
/*                     {{ form_widget(form.name, {"attr":{'class':'form-control'}} ) }}*/
/*                  </div>*/
/*                  */
/*                  <div class="form-group col-xs-12">*/
/*                     {{ form_label(form.category) }}*/
/*                     {{ form_widget(form.category, {"attr":{'class':'select'}} ) }}*/
/*                  </div>*/
/*                  <div class="form-group col-xs-12">*/
/*                     {{ form_label(form.priceHt) }}*/
/*                     {{ form_widget(form.priceHt, {"attr":{'class':'form-control'}} ) }}*/
/*                  </div>*/
/*                  <div class="form-group col-xs-12">*/
/*                     {{ form_label(form.unity) }}*/
/*                     {{ form_widget(form.unity, {"attr":{'class':'select'}} ) }}*/
/*                  </div>*/
/*                  <div class="form-group col-xs-12">*/
/*                     {{ form_label(form.isAllergen) }}*/
/*                     {{ form_widget(form.isAllergen) }}*/
/*                  </div>*/
/*                  <div class="form-group col-xs-12">*/
/*                     {{ form_label(form.provider) }}*/
/*                     {{ form_widget(form.provider, {"attr":{'class':'select'}} ) }}*/
/*                  </div>*/
/*                  <div class="clear"></div>*/
/*         */
/*                 */
/*                 {{ form_rest(form) }}*/
/*                 {{ form_end(form) }}*/
/*                 */
/*                 */
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>*/
/*                 <button class="save-entity btn btn-primary">Enregistrer</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*             */
