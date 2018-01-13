<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4d66944aea51659b6b00039ae5048a9ac015d831b9ceab291319131e0ef243d extends Twig_Template
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
        $__internal_1cae6431b6cc6507d95b2d94019778a363a44bcaa3bd42c2ae5d7de4c2f47b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cae6431b6cc6507d95b2d94019778a363a44bcaa3bd42c2ae5d7de4c2f47b16->enter($__internal_1cae6431b6cc6507d95b2d94019778a363a44bcaa3bd42c2ae5d7de4c2f47b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7a0c84d30f349af90292e9cbafb545a078d2e054121b81fd29e6cf9fbf04740e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0c84d30f349af90292e9cbafb545a078d2e054121b81fd29e6cf9fbf04740e->enter($__internal_7a0c84d30f349af90292e9cbafb545a078d2e054121b81fd29e6cf9fbf04740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1cae6431b6cc6507d95b2d94019778a363a44bcaa3bd42c2ae5d7de4c2f47b16->leave($__internal_1cae6431b6cc6507d95b2d94019778a363a44bcaa3bd42c2ae5d7de4c2f47b16_prof);

        
        $__internal_7a0c84d30f349af90292e9cbafb545a078d2e054121b81fd29e6cf9fbf04740e->leave($__internal_7a0c84d30f349af90292e9cbafb545a078d2e054121b81fd29e6cf9fbf04740e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
