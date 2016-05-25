<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b803ef355d40f9b8724db77c0f0dd70a16314c06d994cdeade07f9f424754293 extends Twig_Template
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
        $__internal_ca2a7101c7036bdddc3bd6df57c4f9fdfa3822c393ec6b00e47cd0ceca390255 = $this->env->getExtension("native_profiler");
        $__internal_ca2a7101c7036bdddc3bd6df57c4f9fdfa3822c393ec6b00e47cd0ceca390255->enter($__internal_ca2a7101c7036bdddc3bd6df57c4f9fdfa3822c393ec6b00e47cd0ceca390255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ca2a7101c7036bdddc3bd6df57c4f9fdfa3822c393ec6b00e47cd0ceca390255->leave($__internal_ca2a7101c7036bdddc3bd6df57c4f9fdfa3822c393ec6b00e47cd0ceca390255_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
