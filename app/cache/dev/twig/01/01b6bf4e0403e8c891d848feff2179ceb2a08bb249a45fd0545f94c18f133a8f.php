<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_50e82165722c99ae4b3957c6eb80c1294095bbae807ab95b7a37dfbb31afaede extends Twig_Template
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
        $__internal_76e3fe433a5c386505250d5ee130e4312322ef41912e69135ec627699da6d0e2 = $this->env->getExtension("native_profiler");
        $__internal_76e3fe433a5c386505250d5ee130e4312322ef41912e69135ec627699da6d0e2->enter($__internal_76e3fe433a5c386505250d5ee130e4312322ef41912e69135ec627699da6d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_76e3fe433a5c386505250d5ee130e4312322ef41912e69135ec627699da6d0e2->leave($__internal_76e3fe433a5c386505250d5ee130e4312322ef41912e69135ec627699da6d0e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
