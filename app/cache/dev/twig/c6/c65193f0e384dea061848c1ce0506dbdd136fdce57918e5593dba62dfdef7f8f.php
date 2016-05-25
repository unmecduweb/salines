<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2657ecc9b5f1a6ade6f7dc0eed7dc90fc313df6b071f000ff9feabe24529a29b extends Twig_Template
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
        $__internal_5cc0241787bcab47e808d758ca7d18c940d9d170785012ddb651689597e67f80 = $this->env->getExtension("native_profiler");
        $__internal_5cc0241787bcab47e808d758ca7d18c940d9d170785012ddb651689597e67f80->enter($__internal_5cc0241787bcab47e808d758ca7d18c940d9d170785012ddb651689597e67f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5cc0241787bcab47e808d758ca7d18c940d9d170785012ddb651689597e67f80->leave($__internal_5cc0241787bcab47e808d758ca7d18c940d9d170785012ddb651689597e67f80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
