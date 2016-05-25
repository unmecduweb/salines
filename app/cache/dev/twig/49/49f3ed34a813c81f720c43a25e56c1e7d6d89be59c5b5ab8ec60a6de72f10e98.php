<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d6ba386de5668a109cab519e7656fdca249c5198361d6befddf8d75e9efd746b extends Twig_Template
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
        $__internal_dafbf26ddbbd521e261d6c560eb04cfaec5f908ed52361e4bb3aeed0c2ac28a1 = $this->env->getExtension("native_profiler");
        $__internal_dafbf26ddbbd521e261d6c560eb04cfaec5f908ed52361e4bb3aeed0c2ac28a1->enter($__internal_dafbf26ddbbd521e261d6c560eb04cfaec5f908ed52361e4bb3aeed0c2ac28a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dafbf26ddbbd521e261d6c560eb04cfaec5f908ed52361e4bb3aeed0c2ac28a1->leave($__internal_dafbf26ddbbd521e261d6c560eb04cfaec5f908ed52361e4bb3aeed0c2ac28a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
