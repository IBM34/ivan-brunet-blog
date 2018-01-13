<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
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
        $__internal_7614ac246383c110dd3ae4e1a2d6c6a8445c53cbc67b46ce32c3e4aa4781e38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7614ac246383c110dd3ae4e1a2d6c6a8445c53cbc67b46ce32c3e4aa4781e38b->enter($__internal_7614ac246383c110dd3ae4e1a2d6c6a8445c53cbc67b46ce32c3e4aa4781e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_382635372fca3d6d9cfea46ca6a7dddaed02fe64ee74f64b7d058bd531dfe7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382635372fca3d6d9cfea46ca6a7dddaed02fe64ee74f64b7d058bd531dfe7f2->enter($__internal_382635372fca3d6d9cfea46ca6a7dddaed02fe64ee74f64b7d058bd531dfe7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7614ac246383c110dd3ae4e1a2d6c6a8445c53cbc67b46ce32c3e4aa4781e38b->leave($__internal_7614ac246383c110dd3ae4e1a2d6c6a8445c53cbc67b46ce32c3e4aa4781e38b_prof);

        
        $__internal_382635372fca3d6d9cfea46ca6a7dddaed02fe64ee74f64b7d058bd531dfe7f2->leave($__internal_382635372fca3d6d9cfea46ca6a7dddaed02fe64ee74f64b7d058bd531dfe7f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
