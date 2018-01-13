<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_73611db5f83aa61db1c7ffb5b928fbca28a20d009b0c46436e515d7646daafe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73611db5f83aa61db1c7ffb5b928fbca28a20d009b0c46436e515d7646daafe5->enter($__internal_73611db5f83aa61db1c7ffb5b928fbca28a20d009b0c46436e515d7646daafe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_075aa8a8de84e57ee62180c792b7c7fa138fa016dcc5c9ce91164a9bf646813a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075aa8a8de84e57ee62180c792b7c7fa138fa016dcc5c9ce91164a9bf646813a->enter($__internal_075aa8a8de84e57ee62180c792b7c7fa138fa016dcc5c9ce91164a9bf646813a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_73611db5f83aa61db1c7ffb5b928fbca28a20d009b0c46436e515d7646daafe5->leave($__internal_73611db5f83aa61db1c7ffb5b928fbca28a20d009b0c46436e515d7646daafe5_prof);

        
        $__internal_075aa8a8de84e57ee62180c792b7c7fa138fa016dcc5c9ce91164a9bf646813a->leave($__internal_075aa8a8de84e57ee62180c792b7c7fa138fa016dcc5c9ce91164a9bf646813a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
