<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6a4342d153457d559b3bae80e46f64877300e114ea9794f73a40442bcf63daf0 extends Twig_Template
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
        $__internal_71b975c8933ab2732d8c3b7bc95353d09e2f551fd1d5aa2ec7fb76d3efaf0842 = $this->env->getExtension("native_profiler");
        $__internal_71b975c8933ab2732d8c3b7bc95353d09e2f551fd1d5aa2ec7fb76d3efaf0842->enter($__internal_71b975c8933ab2732d8c3b7bc95353d09e2f551fd1d5aa2ec7fb76d3efaf0842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_71b975c8933ab2732d8c3b7bc95353d09e2f551fd1d5aa2ec7fb76d3efaf0842->leave($__internal_71b975c8933ab2732d8c3b7bc95353d09e2f551fd1d5aa2ec7fb76d3efaf0842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
