<?php

/* @LLCore/default/list.html.twig */
class __TwigTemplate_c6008d76e7858816b7878e2c196cc5c7ea0f778fdd1de576d97075feb3ee96ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "@LLCore/default/list.html.twig", 2);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
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
        $__internal_5f34a32d5209e6b7d4355bcec7a986d36f63bc494bde2f00662b1ae83107e108 = $this->env->getExtension("native_profiler");
        $__internal_5f34a32d5209e6b7d4355bcec7a986d36f63bc494bde2f00662b1ae83107e108->enter($__internal_5f34a32d5209e6b7d4355bcec7a986d36f63bc494bde2f00662b1ae83107e108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/default/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f34a32d5209e6b7d4355bcec7a986d36f63bc494bde2f00662b1ae83107e108->leave($__internal_5f34a32d5209e6b7d4355bcec7a986d36f63bc494bde2f00662b1ae83107e108_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_d8e11c6dcbee50fe187cb811846a06d2bbe4f539852349bcdcbcd2761ffe3859 = $this->env->getExtension("native_profiler");
        $__internal_d8e11c6dcbee50fe187cb811846a06d2bbe4f539852349bcdcbcd2761ffe3859->enter($__internal_d8e11c6dcbee50fe187cb811846a06d2bbe4f539852349bcdcbcd2761ffe3859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#table_hotel').dataTable({
                \"language\": {
                    \"url\": \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/llcore/js/locale/fr_Fr.json"), "html", null, true);
        echo "\"
                },
                \"columnDefs\": [";
        // line 13
        echo "                ]
            });
        });
    </script>
";
        
        $__internal_d8e11c6dcbee50fe187cb811846a06d2bbe4f539852349bcdcbcd2761ffe3859->leave($__internal_d8e11c6dcbee50fe187cb811846a06d2bbe4f539852349bcdcbcd2761ffe3859_prof);

    }

    // line 19
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_134d19c69789737fa2acfdc897fefd3e0c6733fdb3cd23dea15124f2fa770fbc = $this->env->getExtension("native_profiler");
        $__internal_134d19c69789737fa2acfdc897fefd3e0c6733fdb3cd23dea15124f2fa770fbc->enter($__internal_134d19c69789737fa2acfdc897fefd3e0c6733fdb3cd23dea15124f2fa770fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Liste des ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "beautyName", array()), "html", null, true);
        
        $__internal_134d19c69789737fa2acfdc897fefd3e0c6733fdb3cd23dea15124f2fa770fbc->leave($__internal_134d19c69789737fa2acfdc897fefd3e0c6733fdb3cd23dea15124f2fa770fbc_prof);

    }

    // line 21
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_46b48c1c414664781911f492afb83cea3e2ebc28ad6a605ec50fa3f43d7c52b9 = $this->env->getExtension("native_profiler");
        $__internal_46b48c1c414664781911f492afb83cea3e2ebc28ad6a605ec50fa3f43d7c52b9->enter($__internal_46b48c1c414664781911f492afb83cea3e2ebc28ad6a605ec50fa3f43d7c52b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    ";
        // line 23
        echo "    
    
    <button class=\"edit-entity btn btn-default\" type=\"link\" data-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_edit_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => "new")), "html", null, true);
        echo "\"  >Créer</button>
    ";
        // line 26
        if ( !twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 27
            echo "        <table id=\"table_hotel\" class=\"table table-bordered tableau_liste display\">
            <thead>
                <tr>
                    <th>Identifiant</th>
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "listProperties", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
                // line 32
                echo "                        <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "beautyName", array()), "html", null, true);
                echo "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    <th>Modifier</th>
                    <th>Supprimer</th>
                        ";
            // line 36
            if ($this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array", false, true), "statusTrans", array(), "any", true, true)) {
                // line 37
                echo "                        <th>Status</th>
                        ";
            }
            // line 39
            echo "                </tr>
            </thead>
            <tbody>
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 43
                echo "                    <tr>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</td>
                        ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "listProperties", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
                    // line 46
                    echo "                            <td>
                                ";
                    // line 47
                    if (($this->getAttribute($context["params"], "type", array()) == "datetime")) {
                        // line 48
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                ";
                    } elseif (($this->getAttribute(                    // line 49
$context["params"], "type", array()) == "time")) {
                        // line 50
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "H:i"), "html", null, true);
                        echo "
                                ";
                    } elseif (($this->getAttribute(                    // line 51
$context["params"], "type", array()) == "string")) {
                        // line 52
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "html", null, true);
                        echo "
                                ";
                    } elseif (($this->getAttribute(                    // line 53
$context["params"], "type", array()) == "money")) {
                        // line 54
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "html", null, true);
                        echo "€
                                ";
                    } elseif (($this->getAttribute(                    // line 55
$context["params"], "type", array()) == "boolean")) {
                        // line 56
                        echo "                                    ";
                        if (($this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())) >= 1)) {
                            // line 57
                            echo "                                        <span class=\"glyphicon glyphicon-ok\"></span>
                                    ";
                        } else {
                            // line 59
                            echo "                                        <span class=\"glyphicon glyphicon-remove\"></span>
                                    ";
                        }
                        // line 61
                        echo "                                ";
                    }
                    // line 62
                    echo "                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                        <td>
    
                            <button class=\"edit-entity btn small left\" data-url=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_edit_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Modifier\">
                                <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                            </button>
    
                        </td>

                        <td class=\"center\">
                            <a href=\"javascript:if(confirm('Êtes vous sur ?')) document.location.href='";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_delete_entity", array("id" => $this->getAttribute($context["entity"], "id", array()), "entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")))), "html", null, true);
                echo "'\" title=\"Valider\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
                        </td>

                        ";
                // line 76
                if ($this->getAttribute($context["entity"], "statusTrans", array(), "any", true, true)) {
                    // line 77
                    echo "                            <td class=\"center\">
                                ";
                    // line 83
                    echo "                            </td>
                        ";
                }
                // line 85
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_46b48c1c414664781911f492afb83cea3e2ebc28ad6a605ec50fa3f43d7c52b9->leave($__internal_46b48c1c414664781911f492afb83cea3e2ebc28ad6a605ec50fa3f43d7c52b9_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 87,  230 => 85,  226 => 83,  223 => 77,  221 => 76,  215 => 73,  205 => 66,  201 => 64,  194 => 62,  191 => 61,  187 => 59,  183 => 57,  180 => 56,  178 => 55,  173 => 54,  171 => 53,  166 => 52,  164 => 51,  159 => 50,  157 => 49,  152 => 48,  150 => 47,  147 => 46,  143 => 45,  139 => 44,  136 => 43,  132 => 42,  127 => 39,  123 => 37,  121 => 36,  117 => 34,  108 => 32,  104 => 31,  98 => 27,  96 => 26,  92 => 25,  88 => 23,  80 => 21,  67 => 19,  56 => 13,  51 => 10,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LLCoreBundle::layout-admin.html.twig" %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $('#table_hotel').dataTable({*/
/*                 "language": {*/
/*                     "url": "{{asset("bundles/llcore/js/locale/fr_Fr.json")}}"*/
/*                 },*/
/*                 "columnDefs": [{#                    {"searchable": false, "targets": [6, 7, 8, 9]}#}*/
/*                 ]*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block pageH1 %}Liste des {{ entityParams.beautyName }}{% endblock %}*/
/* */
/* {% block admin_container %}    */
/*     {#    <a href="{{path('le_admin_entity_edit',{entity: entityName is defined ? entityName : app.request.get('_route_params').entity}) }}" class="btn btn-default">Créer</a>#}*/
/*     */
/*     */
/*     <button class="edit-entity btn btn-default" type="link" data-url="{{ path('ll_edit_entity', {"entityAlias" :entityAlias, 'id':'new'}) }}"  >Créer</button>*/
/*     {% if entities is not empty %}*/
/*         <table id="table_hotel" class="table table-bordered tableau_liste display">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Identifiant</th>*/
/*                         {%for params in entityParams.listProperties%}*/
/*                         <th>{{params.beautyName}}</th>*/
/*                         {%endfor%}*/
/*                     <th>Modifier</th>*/
/*                     <th>Supprimer</th>*/
/*                         {% if entities[0].statusTrans is defined %}*/
/*                         <th>Status</th>*/
/*                         {% endif %}*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td>{{ entity.id }}</td>*/
/*                         {%for params in entityParams.listProperties%}*/
/*                             <td>*/
/*                                 {%if params.type == "datetime"%}*/
/*                                     {{ attribute(entity,params.dataName)|date('Y-m-d H:i:s') }}*/
/*                                 {% elseif params.type == "time"%}*/
/*                                     {{ attribute(entity,params.dataName)|date('H:i') }}*/
/*                                 {%elseif params.type == "string"%}*/
/*                                     {{ attribute(entity,params.dataName) }}*/
/*                                 {%elseif params.type == "money"%}*/
/*                                     {{ attribute(entity,params.dataName) }}€*/
/*                                 {%elseif params.type == "boolean"%}*/
/*                                     {% if attribute(entity,params.dataName) >= 1 %}*/
/*                                         <span class="glyphicon glyphicon-ok"></span>*/
/*                                     {% else %}*/
/*                                         <span class="glyphicon glyphicon-remove"></span>*/
/*                                     {% endif %}*/
/*                                 {%endif%}*/
/*                             </td>*/
/*                         {%endfor%}*/
/*                         <td>*/
/*     */
/*                             <button class="edit-entity btn small left" data-url="{{ path('ll_edit_entity', { "entityAlias" : entityAlias, "id" : entity.id}) }}" title="Modifier">*/
/*                                 <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>*/
/*                             </button>*/
/*     */
/*                         </td>*/
/* */
/*                         <td class="center">*/
/*                             <a href="javascript:if(confirm('Êtes vous sur ?')) document.location.href='{{ path('ll_delete_entity', {'id': entity.id,'entityAlias': entityAlias}) }}'" title="Valider"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>*/
/*                         </td>*/
/* */
/*                         {% if entity.statusTrans is defined %}*/
/*                             <td class="center">*/
/*                                 {#{% if entity.statusTrans == false %}*/
/*                                     <a class="status-trans" data-url="{{path('le_admin_entity_status_trans')}}" data-entity="{{entityName is defined ? entityName : app.request.get('_route_params').entity}}" data-id="{{entity.id}}" href="#" ><span class="status-circle desactive"></span></a>*/
/*                                     {% else %}*/
/*                                     <a class="status-trans" data-url="{{path('le_admin_entity_status_trans')}}" data-entity="{{entityName is defined ? entityName : app.request.get('_route_params').entity}}" data-id="{{entity.id}}" href="#" ><span class="status-circle active"></span></a>*/
/*                                     {% endif %}#}*/
/*                             </td>*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
