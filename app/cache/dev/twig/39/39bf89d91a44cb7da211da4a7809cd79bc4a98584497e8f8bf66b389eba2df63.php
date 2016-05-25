<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c67e866b7497352d76c66be37553570bdafa0c7e6ad89428b12584181ec836fb extends Twig_Template
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
        $__internal_c9bd5d126643da2de14c2c6ed1db9642a6afc6c09deeb3bf12e32dea41a24964 = $this->env->getExtension("native_profiler");
        $__internal_c9bd5d126643da2de14c2c6ed1db9642a6afc6c09deeb3bf12e32dea41a24964->enter($__internal_c9bd5d126643da2de14c2c6ed1db9642a6afc6c09deeb3bf12e32dea41a24964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c9bd5d126643da2de14c2c6ed1db9642a6afc6c09deeb3bf12e32dea41a24964->leave($__internal_c9bd5d126643da2de14c2c6ed1db9642a6afc6c09deeb3bf12e32dea41a24964_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
