<?php

/* @LLCore/production/view.html.twig */
class __TwigTemplate_22da17cfa97662fbd868131348145f0893f4c0ce1bcec12b378b908259387b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "@LLCore/production/view.html.twig", 1);
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
        $__internal_826e3a5e4993c9091720cddb75bbca835d003852260b18fae6652bc2faa4a82d = $this->env->getExtension("native_profiler");
        $__internal_826e3a5e4993c9091720cddb75bbca835d003852260b18fae6652bc2faa4a82d->enter($__internal_826e3a5e4993c9091720cddb75bbca835d003852260b18fae6652bc2faa4a82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/production/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826e3a5e4993c9091720cddb75bbca835d003852260b18fae6652bc2faa4a82d->leave($__internal_826e3a5e4993c9091720cddb75bbca835d003852260b18fae6652bc2faa4a82d_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_4aec357e45da46b6cbebd6e635030a961853f10dd2ccf2beb7de3be7e6683301 = $this->env->getExtension("native_profiler");
        $__internal_4aec357e45da46b6cbebd6e635030a961853f10dd2ccf2beb7de3be7e6683301->enter($__internal_4aec357e45da46b6cbebd6e635030a961853f10dd2ccf2beb7de3be7e6683301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 4
        echo "    
";
        
        $__internal_4aec357e45da46b6cbebd6e635030a961853f10dd2ccf2beb7de3be7e6683301->leave($__internal_4aec357e45da46b6cbebd6e635030a961853f10dd2ccf2beb7de3be7e6683301_prof);

    }

    // line 6
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_b7f559079f773eaa8dc72439eabc22c88520dd0d97e8a06f62cd45b8c9cfe620 = $this->env->getExtension("native_profiler");
        $__internal_b7f559079f773eaa8dc72439eabc22c88520dd0d97e8a06f62cd45b8c9cfe620->enter($__internal_b7f559079f773eaa8dc72439eabc22c88520dd0d97e8a06f62cd45b8c9cfe620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 7
        echo "    
    <div class=\"container\">
        
        
        <form action=\"\" method=\"post\">

    <table class=\"mw-table border\">
";
        // line 15
        echo "        <tr>
            <td colspan=\"3\">
                <h1>\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "\"</h1>
            </td>
        
        
            <td >
                <h4>Auteur de la fiche</h4>
                <p class=\"value\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "</p>
            </td>
        
            <td>
                <h4>Type de plat</h4>
                <p class=\"value\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "</p>
            </td>
        
            <td>
               <label for=\"nb-person\">Nombre de couvert</label>
               <input id=\"nb-person\" data-ref=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPerson", array()), "html", null, true);
        echo "\" type=\"number\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPerson", array()), "html", null, true);
        echo "\" />
            </td>
        </tr>
";
        // line 36
        echo "        
        <tr>
            <td colspan=\"4\">
                <h4>Descriptif</h4>
                <div class=\"content value\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "
                </div>
            </td>
        
            <td>
                <label for=\"nb-person\">Temps de préparation</label>
    ";
        // line 48
        echo "            </td>
            <td>
                <label for=\"nb-person\">Temps de cuisson</label>
    ";
        // line 52
        echo "             </td>   
        </tr>
    </table>
        <div class=\"form-group col-xs-12\">
            <label for=\"nb-person\">Liste des ingrédients allergènes</label>
            <div class=\"content value\">
                ";
        // line 58
        $context["nbAllergen"] = 0;
        // line 59
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productQuantity", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productQ"]) {
            // line 60
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "isAllergen", array())) {
                // line 61
                echo "                        ";
                if (((isset($context["nbAllergen"]) ? $context["nbAllergen"] : $this->getContext($context, "nbAllergen")) != 0)) {
                    echo "; ";
                }
                echo " ";
                // line 62
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "name", array()), "html", null, true);
                echo "
                        ";
                // line 63
                $context["nbAllergen"] = ((isset($context["nbAllergen"]) ? $context["nbAllergen"] : $this->getContext($context, "nbAllergen")) + 1);
                // line 64
                echo "                    ";
            }
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productQ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </div>
        </div>
        
        
        <div class=\"form-group col-xs-6\">
            <label for=\"nb-person\">Etapes</label>
            <div class=\"content value\">
                ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productionStep", array()), "html", null, true);
        echo "
            </div>
        </div>
        
        <div class=\"form-group col-xs-6\">
            <label for=\"nb-person\">Liste des ingrédients</label>
            <div class=\"content value\">
                ";
        // line 80
        $context["totalProducts"] = 0;
        // line 81
        echo "                ";
        $context["nbAllergen"] = 0;
        // line 82
        echo "                <ul>
                    <li>
                        <div class=\"col-xs-6\">Ingrédients</div>
                        <div class=\"col-xs-2\">Quantité</div>
                        <div class=\"col-xs-2\">Prix unité</div>
                        <div class=\"col-xs-2\">Prix</div>
                        
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productQuantity", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productQ"]) {
            // line 90
            echo "                    <li class=\"product-line\">
                        <div class=\"col-xs-6\">
                            ";
            // line 92
            if ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "isAllergen", array())) {
                // line 93
                echo "                                <span class=\"glyphicon glyphicon-triangle-bottom\"></span>
                            ";
            }
            // line 95
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "name", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"col-xs-2\">
                            <span class=\"quantity\" data-ref=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["productQ"], "quantity", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productQ"], "quantity", array()), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "unity", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"col-xs-2\">
                            <span>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col-xs-2\">
                            <span class=\"price\" data-ref=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()) * $this->getAttribute($context["productQ"], "quantity", array())), "html", null, true);
            echo "€</span>
                        </div>
                    </li>
                    
                    ";
            // line 108
            $context["totalProducts"] = ((isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")) + ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()) * $this->getAttribute($context["productQ"], "quantity", array())));
            // line 109
            echo "                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productQ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                </ul>
            </div>
            
            <div class=\"col-xs-8\">TOTAL INGREDIENTS</div>
            <div class=\"col-xs-4\"><span class=\"total-product-price\">";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")), "html", null, true);
        echo "</span> €</div>
            
            <div class=\"col-xs-8\">ASSAISONEMENTS 2%</div>
            <div class=\"col-xs-4\"><span class=\"total-product-spicy\">";
        // line 118
        echo twig_escape_filter($this->env, ((isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")) * 0.02), "html", null, true);
        echo "</span> €</div>
            
            <div class=\"col-xs-8\">COUT TOTAL</div>
            <div class=\"col-xs-4\"><span class=\"total-product-price\">";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")), "html", null, true);
        echo "</span> €</div>
            
        </div>
            
        ";
        // line 186
        echo "        
        <input type=\"submit\" />
        </form>
    </div>
";
        
        $__internal_b7f559079f773eaa8dc72439eabc22c88520dd0d97e8a06f62cd45b8c9cfe620->leave($__internal_b7f559079f773eaa8dc72439eabc22c88520dd0d97e8a06f62cd45b8c9cfe620_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/production/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 186,  268 => 121,  262 => 118,  256 => 115,  250 => 111,  243 => 109,  241 => 108,  232 => 104,  226 => 101,  216 => 98,  209 => 95,  205 => 93,  203 => 92,  199 => 90,  195 => 89,  186 => 82,  183 => 81,  181 => 80,  171 => 73,  162 => 66,  156 => 65,  153 => 64,  151 => 63,  146 => 62,  140 => 61,  137 => 60,  132 => 59,  130 => 58,  122 => 52,  117 => 48,  108 => 41,  101 => 36,  93 => 33,  85 => 28,  77 => 23,  68 => 17,  64 => 15,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/*         */
/*         <form action="" method="post">*/
/* */
/*     <table class="mw-table border">*/
/* {#    1ERE LIGNE Titre/Auteur/plat/couvert        #}*/
/*         <tr>*/
/*             <td colspan="3">*/
/*                 <h1>"{{ entity.name }}"</h1>*/
/*             </td>*/
/*         */
/*         */
/*             <td >*/
/*                 <h4>Auteur de la fiche</h4>*/
/*                 <p class="value">{{ entity.category }}</p>*/
/*             </td>*/
/*         */
/*             <td>*/
/*                 <h4>Type de plat</h4>*/
/*                 <p class="value">{{ entity.category }}</p>*/
/*             </td>*/
/*         */
/*             <td>*/
/*                <label for="nb-person">Nombre de couvert</label>*/
/*                <input id="nb-person" data-ref="{{ entity.nbPerson }}" type="number" class="form-control" value="{{ entity.nbPerson }}" />*/
/*             </td>*/
/*         </tr>*/
/* {#    2EME LIGNE Description / Tps de cuisson / Tps de préparation #}        */
/*         <tr>*/
/*             <td colspan="4">*/
/*                 <h4>Descriptif</h4>*/
/*                 <div class="content value">*/
/*                     {{ entity.description }}*/
/*                 </div>*/
/*             </td>*/
/*         */
/*             <td>*/
/*                 <label for="nb-person">Temps de préparation</label>*/
/*     {#            <input id="nb-person" type="number" class="form-control" value="{{ entity.preparationTime.datetime('H:m') }}" />#}*/
/*             </td>*/
/*             <td>*/
/*                 <label for="nb-person">Temps de cuisson</label>*/
/*     {#            <input id="nb-person" type="number" class="form-control" value="{{ entity.preparationTime.datetime('H:m') }}" />#}*/
/*              </td>   */
/*         </tr>*/
/*     </table>*/
/*         <div class="form-group col-xs-12">*/
/*             <label for="nb-person">Liste des ingrédients allergènes</label>*/
/*             <div class="content value">*/
/*                 {% set nbAllergen = 0 %}*/
/*                 {% for productQ in entity.productQuantity %}*/
/*                     {% if productQ.product.isAllergen %}*/
/*                         {% if nbAllergen != 0 %}; {%endif%} {# point virgule après le 0#}*/
/*                         {{ productQ.product.name }}*/
/*                         {% set nbAllergen = nbAllergen + 1 %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         */
/*         */
/*         <div class="form-group col-xs-6">*/
/*             <label for="nb-person">Etapes</label>*/
/*             <div class="content value">*/
/*                 {{ entity.productionStep }}*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group col-xs-6">*/
/*             <label for="nb-person">Liste des ingrédients</label>*/
/*             <div class="content value">*/
/*                 {% set totalProducts = 0  %}*/
/*                 {% set nbAllergen = 0 %}*/
/*                 <ul>*/
/*                     <li>*/
/*                         <div class="col-xs-6">Ingrédients</div>*/
/*                         <div class="col-xs-2">Quantité</div>*/
/*                         <div class="col-xs-2">Prix unité</div>*/
/*                         <div class="col-xs-2">Prix</div>*/
/*                         */
/*                 {% for productQ in entity.productQuantity %}*/
/*                     <li class="product-line">*/
/*                         <div class="col-xs-6">*/
/*                             {% if productQ.product.isAllergen %}*/
/*                                 <span class="glyphicon glyphicon-triangle-bottom"></span>*/
/*                             {% endif %}*/
/*                             {{ productQ.product.name }}*/
/*                         </div>*/
/*                         <div class="col-xs-2">*/
/*                             <span class="quantity" data-ref="{{ productQ.quantity }}">{{ productQ.quantity }}</span>{{ productQ.product.unity }}*/
/*                         </div>*/
/*                         <div class="col-xs-2">*/
/*                             <span>{{ productQ.product.priceHt }}</span>*/
/*                         </div>*/
/*                         <div class="col-xs-2">*/
/*                             <span class="price" data-ref="{{ productQ.product.priceHt }}">{{ productQ.product.priceHt * productQ.quantity  }}€</span>*/
/*                         </div>*/
/*                     </li>*/
/*                     */
/*                     {% set totalProducts = totalProducts + (productQ.product.priceHt * productQ.quantity)  %}*/
/*                     */
/*                 {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*             */
/*             <div class="col-xs-8">TOTAL INGREDIENTS</div>*/
/*             <div class="col-xs-4"><span class="total-product-price">{{ totalProducts }}</span> €</div>*/
/*             */
/*             <div class="col-xs-8">ASSAISONEMENTS 2%</div>*/
/*             <div class="col-xs-4"><span class="total-product-spicy">{{ totalProducts*0.02 }}</span> €</div>*/
/*             */
/*             <div class="col-xs-8">COUT TOTAL</div>*/
/*             <div class="col-xs-4"><span class="total-product-price">{{ totalProducts }}</span> €</div>*/
/*             */
/*         </div>*/
/*             */
/*         {#<div class="form-group col-xs-3">*/
/*            {{ form_label(form.category) }}*/
/*            {{ form_widget(form.category, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
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
/*                         {{ form_widget(productQuantity.product, {"attr":{'class':'form-control'}} ) }}*/
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
/*            {{ form_label(form.materiels) }}*/
/*            {{ form_widget(form.productionStep, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*         */
/*     */
/*         {{ form_rest(form) }}*/
/*         */
/*         #}*/
/*         */
/*         <input type="submit" />*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
