<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_adbd4ebd18c82e6866dcf597825d01c5fb7ac41c045c22b07826bdfd27ff67f4 extends Twig_Template
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
        $__internal_4860a7f6f0887673548cca92d6c5bdc6a10cd766d7237cfc324de1f21a08317e = $this->env->getExtension("native_profiler");
        $__internal_4860a7f6f0887673548cca92d6c5bdc6a10cd766d7237cfc324de1f21a08317e->enter($__internal_4860a7f6f0887673548cca92d6c5bdc6a10cd766d7237cfc324de1f21a08317e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4860a7f6f0887673548cca92d6c5bdc6a10cd766d7237cfc324de1f21a08317e->leave($__internal_4860a7f6f0887673548cca92d6c5bdc6a10cd766d7237cfc324de1f21a08317e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
