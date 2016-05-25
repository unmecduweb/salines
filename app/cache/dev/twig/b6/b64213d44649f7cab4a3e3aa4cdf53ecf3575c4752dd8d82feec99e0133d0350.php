<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fb98e92ac930a7641fc7ef481daf38601fe1c8ca14848e2d292170cd562f5ac6 extends Twig_Template
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
        $__internal_40fa96f27d1ae8ae9e2ffa8175e42d6b76c77dc5132b4f11b757bddfb90bf4f4 = $this->env->getExtension("native_profiler");
        $__internal_40fa96f27d1ae8ae9e2ffa8175e42d6b76c77dc5132b4f11b757bddfb90bf4f4->enter($__internal_40fa96f27d1ae8ae9e2ffa8175e42d6b76c77dc5132b4f11b757bddfb90bf4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_40fa96f27d1ae8ae9e2ffa8175e42d6b76c77dc5132b4f11b757bddfb90bf4f4->leave($__internal_40fa96f27d1ae8ae9e2ffa8175e42d6b76c77dc5132b4f11b757bddfb90bf4f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
