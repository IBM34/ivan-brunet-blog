<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_eaee33a6523d1e9b049d068daf35ac03abe4153cf784643736cd3d6f49dd5a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaee33a6523d1e9b049d068daf35ac03abe4153cf784643736cd3d6f49dd5a0b->enter($__internal_eaee33a6523d1e9b049d068daf35ac03abe4153cf784643736cd3d6f49dd5a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0dcdbe81c4278b1c34b8628cbd1c1bea60943dc8881cf52126b0591e329ee4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcdbe81c4278b1c34b8628cbd1c1bea60943dc8881cf52126b0591e329ee4c0->enter($__internal_0dcdbe81c4278b1c34b8628cbd1c1bea60943dc8881cf52126b0591e329ee4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_eaee33a6523d1e9b049d068daf35ac03abe4153cf784643736cd3d6f49dd5a0b->leave($__internal_eaee33a6523d1e9b049d068daf35ac03abe4153cf784643736cd3d6f49dd5a0b_prof);

        
        $__internal_0dcdbe81c4278b1c34b8628cbd1c1bea60943dc8881cf52126b0591e329ee4c0->leave($__internal_0dcdbe81c4278b1c34b8628cbd1c1bea60943dc8881cf52126b0591e329ee4c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
