<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_d2c72cd1f33cdaecb3f514b51ea6f2107022ca93f4566241aa12daf5fc090f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c72cd1f33cdaecb3f514b51ea6f2107022ca93f4566241aa12daf5fc090f16->enter($__internal_d2c72cd1f33cdaecb3f514b51ea6f2107022ca93f4566241aa12daf5fc090f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_66f237fecae96243385a1172674bca284b0baf2481beac44f814770c201f97e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f237fecae96243385a1172674bca284b0baf2481beac44f814770c201f97e8->enter($__internal_66f237fecae96243385a1172674bca284b0baf2481beac44f814770c201f97e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d2c72cd1f33cdaecb3f514b51ea6f2107022ca93f4566241aa12daf5fc090f16->leave($__internal_d2c72cd1f33cdaecb3f514b51ea6f2107022ca93f4566241aa12daf5fc090f16_prof);

        
        $__internal_66f237fecae96243385a1172674bca284b0baf2481beac44f814770c201f97e8->leave($__internal_66f237fecae96243385a1172674bca284b0baf2481beac44f814770c201f97e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
