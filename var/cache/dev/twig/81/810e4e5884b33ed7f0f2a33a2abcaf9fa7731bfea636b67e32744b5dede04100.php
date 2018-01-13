<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_969d59fae6b11e73b5e9f1666f9d5276d360993142b460fb818ddfae3457f34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969d59fae6b11e73b5e9f1666f9d5276d360993142b460fb818ddfae3457f34f->enter($__internal_969d59fae6b11e73b5e9f1666f9d5276d360993142b460fb818ddfae3457f34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_118b196f11992718dea6943f7c77be4e3b8f974864b27c40899bb7010e6b6a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118b196f11992718dea6943f7c77be4e3b8f974864b27c40899bb7010e6b6a32->enter($__internal_118b196f11992718dea6943f7c77be4e3b8f974864b27c40899bb7010e6b6a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_969d59fae6b11e73b5e9f1666f9d5276d360993142b460fb818ddfae3457f34f->leave($__internal_969d59fae6b11e73b5e9f1666f9d5276d360993142b460fb818ddfae3457f34f_prof);

        
        $__internal_118b196f11992718dea6943f7c77be4e3b8f974864b27c40899bb7010e6b6a32->leave($__internal_118b196f11992718dea6943f7c77be4e3b8f974864b27c40899bb7010e6b6a32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
