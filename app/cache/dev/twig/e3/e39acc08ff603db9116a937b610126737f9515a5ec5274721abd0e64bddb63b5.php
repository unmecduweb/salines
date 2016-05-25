<?php

/* @LLCore/production/edit.html.twig */
class __TwigTemplate_9c2c08d63a742a901476edac7bedf1bd289d08ab01e41e9adecbd2c6fb5dc7b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "@LLCore/production/edit.html.twig", 1);
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
        $__internal_865b49a068819c469d5af7a63bdc7696124549d210f0be3cd2c04f985ef9fe83 = $this->env->getExtension("native_profiler");
        $__internal_865b49a068819c469d5af7a63bdc7696124549d210f0be3cd2c04f985ef9fe83->enter($__internal_865b49a068819c469d5af7a63bdc7696124549d210f0be3cd2c04f985ef9fe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/production/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865b49a068819c469d5af7a63bdc7696124549d210f0be3cd2c04f985ef9fe83->leave($__internal_865b49a068819c469d5af7a63bdc7696124549d210f0be3cd2c04f985ef9fe83_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_e53718d9376e10751a293aed6e934b5299691e7d9b6e485d6899a412b252e9e9 = $this->env->getExtension("native_profiler");
        $__internal_e53718d9376e10751a293aed6e934b5299691e7d9b6e485d6899a412b252e9e9->enter($__internal_e53718d9376e10751a293aed6e934b5299691e7d9b6e485d6899a412b252e9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 4
        echo "    
";
        
        $__internal_e53718d9376e10751a293aed6e934b5299691e7d9b6e485d6899a412b252e9e9->leave($__internal_e53718d9376e10751a293aed6e934b5299691e7d9b6e485d6899a412b252e9e9_prof);

    }

    // line 6
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_4afa5dcea1e80cfc4ad12739937a9dcf71cc70228fe51bb969156e42f6654fd1 = $this->env->getExtension("native_profiler");
        $__internal_4afa5dcea1e80cfc4ad12739937a9dcf71cc70228fe51bb969156e42f6654fd1->enter($__internal_4afa5dcea1e80cfc4ad12739937a9dcf71cc70228fe51bb969156e42f6654fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 7
        echo "    
    <div class=\"container\">
        
        <h1>Fiche de fabrication</h1>
        <form action=\"\" method=\"post\">
            
            
            
        ";
        // line 15
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "Form/main-form-layout.html.twig"));
        // line 16
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        
        <div class=\"form-group col-xs-6\">
           ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
           ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-3\">
           ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPerson", array()), 'label');
        echo "
           ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPerson", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-3\">
           ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "
           ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "select")));
        echo "
        </div>
        
        
        <div class=\"form-group col-xs-4\">
           ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceSellingHt", array()), 'label');
        echo "
           ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceSellingHt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-4\">
           ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparationTime", array()), 'label');
        echo "
           ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparationTime", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-xs-4\">
           ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cookingTime", array()), 'label');
        echo "
           ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cookingTime", array()), 'widget');
        echo "
        </div>
        
        
        
        
        <div class=\"col-xs-12\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productQuantity", array()), 'label');
        echo "
            <ul id=\"email-fields-list\" class=\"collection-list\" data-prototype=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productQuantity", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productQuantity", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productQuantity"]) {
            // line 56
            echo "                <li>
                    ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["productQuantity"], 'errors');
            echo "
                    <div class=\"col-xs-6 form-group \">
                        ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["productQuantity"], "product", array()), 'label');
            echo "
                        ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["productQuantity"], "product", array()), 'widget', array("attr" => array("class" => "select")));
            echo "
                    </div>
                    <div class=\"col-xs-6 form-group\">
                        ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["productQuantity"], "quantity", array()), 'label');
            echo "
                        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["productQuantity"], "quantity", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productQuantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </ul>
            <a href=\"#\" class=\"button collection-add\">Ajouter un produit</a>
        </div>
    
        <div class=\"form-group col-xs-12\">
           ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label');
        echo "
           ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
            
            
        <div class=\"form-group col-xs-12\">
           ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
           ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-12\">
           ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiels", array()), 'label');
        echo "
           ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiels", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group col-xs-12\">
           ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productionStep", array()), 'label');
        echo "
           ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productionStep", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
    
        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        
        
        
        <input type=\"submit\" />
        </form>
    </div>
";
        
        $__internal_4afa5dcea1e80cfc4ad12739937a9dcf71cc70228fe51bb969156e42f6654fd1->leave($__internal_4afa5dcea1e80cfc4ad12739937a9dcf71cc70228fe51bb969156e42f6654fd1_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/production/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 94,  234 => 90,  230 => 89,  223 => 85,  219 => 84,  212 => 80,  208 => 79,  200 => 74,  196 => 73,  189 => 68,  179 => 64,  175 => 63,  169 => 60,  165 => 59,  160 => 57,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  135 => 46,  131 => 45,  125 => 42,  121 => 41,  114 => 37,  110 => 36,  102 => 31,  98 => 30,  91 => 26,  87 => 25,  80 => 21,  76 => 20,  70 => 17,  67 => 16,  65 => 15,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LLCoreBundle::layout-admin.html.twig" %}*/
/* */
/* {%block pageH1 %}*/
/*     */
/* {%endblock%}*/
/* {% block admin_container %}*/
/*     */
/*     <div class="container">*/
/*         */
/*         <h1>Fiche de fabrication</h1>*/
/*         <form action="" method="post">*/
/*             */
/*             */
/*             */
/*         {% form_theme form 'Form/main-form-layout.html.twig' %}*/
/* */
/*         {{ form_errors(form) }}*/
/*         */
/*         <div class="form-group col-xs-6">*/
/*            {{ form_label(form.name) }}*/
/*            {{ form_widget(form.name, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*         */
/*         <div class="form-group col-xs-3">*/
/*            {{ form_label(form.nbPerson) }}*/
/*            {{ form_widget(form.nbPerson, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*         */
/*         <div class="form-group col-xs-3">*/
/*            {{ form_label(form.category) }}*/
/*            {{ form_widget(form.category, {"attr":{'class':'select'}} ) }}*/
/*         </div>*/
/*         */
/*         */
/*         <div class="form-group col-xs-4">*/
/*            {{ form_label(form.priceSellingHt) }}*/
/*            {{ form_widget(form.priceSellingHt, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*         */
/*         <div class="form-group col-xs-4">*/
/*            {{ form_label(form.preparationTime) }}*/
/*            {{ form_widget(form.preparationTime ) }}*/
/*         </div>*/
/*         <div class="form-group col-xs-4">*/
/*            {{ form_label(form.cookingTime) }}*/
/*            {{ form_widget(form.cookingTime) }}*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         */
/*         <div class="col-xs-12">*/
/*             {{ form_label(form.productQuantity) }}*/
/*             <ul id="email-fields-list" class="collection-list" data-prototype="{{ form_widget(form.productQuantity.vars.prototype) | e }}">*/
/*             {% for productQuantity in form.productQuantity %}*/
/*                 <li>*/
/*                     {{ form_errors(productQuantity) }}*/
/*                     <div class="col-xs-6 form-group ">*/
/*                         {{ form_label(productQuantity.product) }}*/
/*                         {{ form_widget(productQuantity.product, {"attr":{'class':'select'}} ) }}*/
/*                     </div>*/
/*                     <div class="col-xs-6 form-group">*/
/*                         {{ form_label(productQuantity.quantity) }}*/
/*                         {{ form_widget(productQuantity.quantity, {"attr":{'class':'form-control'}} ) }}*/
/*                     </div>*/
/*                 </li>*/
/*             {% endfor %}*/
/*             </ul>*/
/*             <a href="#" class="button collection-add">Ajouter un produit</a>*/
/*         </div>*/
/*     */
/*         <div class="form-group col-xs-12">*/
/*            {{ form_label(form.author) }}*/
/*            {{ form_widget(form.author, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*             */
/*             */
/*         <div class="form-group col-xs-12">*/
/*            {{ form_label(form.description) }}*/
/*            {{ form_widget(form.description, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*         */
/*         <div class="form-group col-xs-12">*/
/*            {{ form_label(form.materiels) }}*/
/*            {{ form_widget(form.materiels, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/* */
/*         <div class="form-group col-xs-12">*/
/*            {{ form_label(form.productionStep) }}*/
/*            {{ form_widget(form.productionStep, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*         */
/*     */
/*         {{ form_rest(form) }}*/
/*         */
/*         */
/*         */
/*         <input type="submit" />*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
