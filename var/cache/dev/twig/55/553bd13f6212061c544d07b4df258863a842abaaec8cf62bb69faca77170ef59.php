<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_c43f4d94a9d3a53289d9cd6e70263d2378b9fb226f984075d20a3cbbe6ef77e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43f4d94a9d3a53289d9cd6e70263d2378b9fb226f984075d20a3cbbe6ef77e6->enter($__internal_c43f4d94a9d3a53289d9cd6e70263d2378b9fb226f984075d20a3cbbe6ef77e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_499c25bc69f8fd62a646e91f5d17f3c783a0d9f7c9dbee0f1f8cd43c5a08cfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499c25bc69f8fd62a646e91f5d17f3c783a0d9f7c9dbee0f1f8cd43c5a08cfb0->enter($__internal_499c25bc69f8fd62a646e91f5d17f3c783a0d9f7c9dbee0f1f8cd43c5a08cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c43f4d94a9d3a53289d9cd6e70263d2378b9fb226f984075d20a3cbbe6ef77e6->leave($__internal_c43f4d94a9d3a53289d9cd6e70263d2378b9fb226f984075d20a3cbbe6ef77e6_prof);

        
        $__internal_499c25bc69f8fd62a646e91f5d17f3c783a0d9f7c9dbee0f1f8cd43c5a08cfb0->leave($__internal_499c25bc69f8fd62a646e91f5d17f3c783a0d9f7c9dbee0f1f8cd43c5a08cfb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
