<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_1dd58b1daaba49011919785ac9b40b66a47a4bf7592f6386e8b50a34fffcc763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd58b1daaba49011919785ac9b40b66a47a4bf7592f6386e8b50a34fffcc763->enter($__internal_1dd58b1daaba49011919785ac9b40b66a47a4bf7592f6386e8b50a34fffcc763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_98265beb54a5a254a16f14b55b811e9317b67eb040a2bed8c95507509f52ad0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98265beb54a5a254a16f14b55b811e9317b67eb040a2bed8c95507509f52ad0c->enter($__internal_98265beb54a5a254a16f14b55b811e9317b67eb040a2bed8c95507509f52ad0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1dd58b1daaba49011919785ac9b40b66a47a4bf7592f6386e8b50a34fffcc763->leave($__internal_1dd58b1daaba49011919785ac9b40b66a47a4bf7592f6386e8b50a34fffcc763_prof);

        
        $__internal_98265beb54a5a254a16f14b55b811e9317b67eb040a2bed8c95507509f52ad0c->leave($__internal_98265beb54a5a254a16f14b55b811e9317b67eb040a2bed8c95507509f52ad0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
