<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8563c3450cdbea4f4f19615daa1f7b6016f895ea049f28c297df38c298dddeb9 extends Twig_Template
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
        $__internal_692c8e22409e073925bc48ad329800dbf196fb203a76011b9b1b11abb6f9507a = $this->env->getExtension("native_profiler");
        $__internal_692c8e22409e073925bc48ad329800dbf196fb203a76011b9b1b11abb6f9507a->enter($__internal_692c8e22409e073925bc48ad329800dbf196fb203a76011b9b1b11abb6f9507a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_692c8e22409e073925bc48ad329800dbf196fb203a76011b9b1b11abb6f9507a->leave($__internal_692c8e22409e073925bc48ad329800dbf196fb203a76011b9b1b11abb6f9507a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
