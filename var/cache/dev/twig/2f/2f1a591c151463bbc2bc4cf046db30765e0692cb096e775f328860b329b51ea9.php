<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_2c12ccba1eec9c88140c96690bbea09a30b905190f832cef0edbedb59bf625c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c12ccba1eec9c88140c96690bbea09a30b905190f832cef0edbedb59bf625c2->enter($__internal_2c12ccba1eec9c88140c96690bbea09a30b905190f832cef0edbedb59bf625c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6606d483bffac3545242d8234fd7e3e38a9171df73c1f8a128eb58adedb17dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6606d483bffac3545242d8234fd7e3e38a9171df73c1f8a128eb58adedb17dd8->enter($__internal_6606d483bffac3545242d8234fd7e3e38a9171df73c1f8a128eb58adedb17dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2c12ccba1eec9c88140c96690bbea09a30b905190f832cef0edbedb59bf625c2->leave($__internal_2c12ccba1eec9c88140c96690bbea09a30b905190f832cef0edbedb59bf625c2_prof);

        
        $__internal_6606d483bffac3545242d8234fd7e3e38a9171df73c1f8a128eb58adedb17dd8->leave($__internal_6606d483bffac3545242d8234fd7e3e38a9171df73c1f8a128eb58adedb17dd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
