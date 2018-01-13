<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_332e8de4baefc958d8dbf68b9d6c381b387089f3e33f144accdb3df704eff62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332e8de4baefc958d8dbf68b9d6c381b387089f3e33f144accdb3df704eff62a->enter($__internal_332e8de4baefc958d8dbf68b9d6c381b387089f3e33f144accdb3df704eff62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2d971d3e9660f48e96bfcbbb70c2787bb3fad32b78246a30c3433c0bd0abbe74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d971d3e9660f48e96bfcbbb70c2787bb3fad32b78246a30c3433c0bd0abbe74->enter($__internal_2d971d3e9660f48e96bfcbbb70c2787bb3fad32b78246a30c3433c0bd0abbe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_332e8de4baefc958d8dbf68b9d6c381b387089f3e33f144accdb3df704eff62a->leave($__internal_332e8de4baefc958d8dbf68b9d6c381b387089f3e33f144accdb3df704eff62a_prof);

        
        $__internal_2d971d3e9660f48e96bfcbbb70c2787bb3fad32b78246a30c3433c0bd0abbe74->leave($__internal_2d971d3e9660f48e96bfcbbb70c2787bb3fad32b78246a30c3433c0bd0abbe74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
