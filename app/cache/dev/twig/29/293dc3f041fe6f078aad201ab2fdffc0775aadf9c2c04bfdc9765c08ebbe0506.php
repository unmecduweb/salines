<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b9cf32bf5acf4b49aab5bc42b9e71df44b71ed0395f72cfef4782d66b6d06ac8 extends Twig_Template
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
        $__internal_7ee6a7238d4babbd37d62787365454d60ca04cd9a70bafc846060b92defc328b = $this->env->getExtension("native_profiler");
        $__internal_7ee6a7238d4babbd37d62787365454d60ca04cd9a70bafc846060b92defc328b->enter($__internal_7ee6a7238d4babbd37d62787365454d60ca04cd9a70bafc846060b92defc328b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7ee6a7238d4babbd37d62787365454d60ca04cd9a70bafc846060b92defc328b->leave($__internal_7ee6a7238d4babbd37d62787365454d60ca04cd9a70bafc846060b92defc328b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
