<?php

/* LLCoreBundle:production:list.html.twig */
class __TwigTemplate_3642cb113ea3bbbee1c26e7c9a005870e2997cae499e032a46ba55e59a3aa491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "LLCoreBundle:production:list.html.twig", 2);
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
        $__internal_23252ce0f7b25020886ac7e4d65c04d33bb12dfef3625c0454f616ac2d042563 = $this->env->getExtension("native_profiler");
        $__internal_23252ce0f7b25020886ac7e4d65c04d33bb12dfef3625c0454f616ac2d042563->enter($__internal_23252ce0f7b25020886ac7e4d65c04d33bb12dfef3625c0454f616ac2d042563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle:production:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23252ce0f7b25020886ac7e4d65c04d33bb12dfef3625c0454f616ac2d042563->leave($__internal_23252ce0f7b25020886ac7e4d65c04d33bb12dfef3625c0454f616ac2d042563_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_a4079c9d743c8b7ba8b919f4fa721095be82b8cd70510c53da00e2a1043c157f = $this->env->getExtension("native_profiler");
        $__internal_a4079c9d743c8b7ba8b919f4fa721095be82b8cd70510c53da00e2a1043c157f->enter($__internal_a4079c9d743c8b7ba8b919f4fa721095be82b8cd70510c53da00e2a1043c157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_a4079c9d743c8b7ba8b919f4fa721095be82b8cd70510c53da00e2a1043c157f->leave($__internal_a4079c9d743c8b7ba8b919f4fa721095be82b8cd70510c53da00e2a1043c157f_prof);

    }

    // line 19
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_c8246ca4ca4584cb043a616104a5f73159d0d50859423cd059780b28978967d8 = $this->env->getExtension("native_profiler");
        $__internal_c8246ca4ca4584cb043a616104a5f73159d0d50859423cd059780b28978967d8->enter($__internal_c8246ca4ca4584cb043a616104a5f73159d0d50859423cd059780b28978967d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Liste des ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "beautyName", array()), "html", null, true);
        
        $__internal_c8246ca4ca4584cb043a616104a5f73159d0d50859423cd059780b28978967d8->leave($__internal_c8246ca4ca4584cb043a616104a5f73159d0d50859423cd059780b28978967d8_prof);

    }

    // line 21
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_49b1c8bd274e92b7f99e3c8a1a6488b740e97f901198d07f12fa8f3256c24346 = $this->env->getExtension("native_profiler");
        $__internal_49b1c8bd274e92b7f99e3c8a1a6488b740e97f901198d07f12fa8f3256c24346->enter($__internal_49b1c8bd274e92b7f99e3c8a1a6488b740e97f901198d07f12fa8f3256c24346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    ";
        // line 23
        echo "    
    
    <a class=\"edit-entity btn btn-default\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_edit_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => "new")), "html", null, true);
        echo "\"  >Créer</a>
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
            echo "                    <th>Voir</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                        ";
            // line 37
            if ($this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array", false, true), "statusTrans", array(), "any", true, true)) {
                // line 38
                echo "                        <th>Status</th>
                        ";
            }
            // line 40
            echo "                </tr>
            </thead>
            <tbody>
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 44
                echo "                    <tr>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</td>
                        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "listProperties", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
                    // line 47
                    echo "                            <td>
                                ";
                    // line 48
                    if (($this->getAttribute($context["params"], "type", array()) == "datetime")) {
                        // line 49
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                ";
                    } elseif (($this->getAttribute(                    // line 50
$context["params"], "type", array()) == "time")) {
                        // line 51
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "H:i"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 53
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "html", null, true);
                        echo "
                                ";
                    }
                    // line 55
                    echo "                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                        
                        
                        <td class=\"center\">
                            <a class=\"view-entity btn small\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_view_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Voir\">
                                <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                            </a>
                        </td>
                        
                        <td class=\"center\">
                            <a class=\"edit-entity btn small left\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_edit_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Modifier\">
                                <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                            </a>
                        </td>

                        <td class=\"center\">
                            <a href=\"javascript:if(confirm('Êtes vous sur ?')) document.location.href='";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_delete_entity", array("id" => $this->getAttribute($context["entity"], "id", array()), "entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")))), "html", null, true);
                echo "'\" title=\"Valider\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
                        </td>

                        ";
                // line 75
                if ($this->getAttribute($context["entity"], "statusTrans", array(), "any", true, true)) {
                    // line 76
                    echo "                            <td class=\"center\">
                                ";
                    // line 82
                    echo "                            </td>
                        ";
                }
                // line 84
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_49b1c8bd274e92b7f99e3c8a1a6488b740e97f901198d07f12fa8f3256c24346->leave($__internal_49b1c8bd274e92b7f99e3c8a1a6488b740e97f901198d07f12fa8f3256c24346_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle:production:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 86,  217 => 84,  213 => 82,  210 => 76,  208 => 75,  202 => 72,  193 => 66,  184 => 60,  179 => 57,  172 => 55,  166 => 53,  160 => 51,  158 => 50,  153 => 49,  151 => 48,  148 => 47,  144 => 46,  140 => 45,  137 => 44,  133 => 43,  128 => 40,  124 => 38,  122 => 37,  117 => 34,  108 => 32,  104 => 31,  98 => 27,  96 => 26,  92 => 25,  88 => 23,  80 => 21,  67 => 19,  56 => 13,  51 => 10,  42 => 5,  36 => 4,  11 => 2,);
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
/*     <a class="edit-entity btn btn-default" href="{{ path('ll_edit_entity', {"entityAlias" :entityAlias, 'id':'new'}) }}"  >Créer</a>*/
/*     {% if entities is not empty %}*/
/*         <table id="table_hotel" class="table table-bordered tableau_liste display">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Identifiant</th>*/
/*                         {%for params in entityParams.listProperties%}*/
/*                         <th>{{params.beautyName}}</th>*/
/*                         {%endfor%}*/
/*                     <th>Voir</th>*/
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
/*                                 {%else%}*/
/*                                     {{ attribute(entity,params.dataName) }}*/
/*                                 {%endif%}*/
/*                             </td>*/
/*                         {%endfor%}*/
/*                         */
/*                         */
/*                         <td class="center">*/
/*                             <a class="view-entity btn small" href="{{ path('ll_view_entity', { "entityAlias" : entityAlias, "id" : entity.id}) }}" title="Voir">*/
/*                                 <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>*/
/*                             </a>*/
/*                         </td>*/
/*                         */
/*                         <td class="center">*/
/*                             <a class="edit-entity btn small left" href="{{ path('ll_edit_entity', { "entityAlias" : entityAlias, "id" : entity.id}) }}" title="Modifier">*/
/*                                 <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>*/
/*                             </a>*/
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
