<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8e89647c99b45b783cad08116a910b70315ce2ba3a8c7f22759fa76922df412f extends Twig_Template
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
        $__internal_df57ac35eaf877c87ef8d6077f367a944bdd2bdb641b643de359898fc66161cf = $this->env->getExtension("native_profiler");
        $__internal_df57ac35eaf877c87ef8d6077f367a944bdd2bdb641b643de359898fc66161cf->enter($__internal_df57ac35eaf877c87ef8d6077f367a944bdd2bdb641b643de359898fc66161cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_df57ac35eaf877c87ef8d6077f367a944bdd2bdb641b643de359898fc66161cf->leave($__internal_df57ac35eaf877c87ef8d6077f367a944bdd2bdb641b643de359898fc66161cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
