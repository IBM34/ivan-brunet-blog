<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_c146bc2b3f083ad538a73a61907a99b4d95f9ab71d8d3da1345038534889a470 extends Twig_Template
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
        $__internal_16a96b48403ac73c764c68b3e6ed5bce0f45827250c78af05abb867b66d84ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a96b48403ac73c764c68b3e6ed5bce0f45827250c78af05abb867b66d84ba1->enter($__internal_16a96b48403ac73c764c68b3e6ed5bce0f45827250c78af05abb867b66d84ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_6da7a0a11ce15248a737ff97bfd16c16df462a6cf589a09af7e9c0d6e203c242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da7a0a11ce15248a737ff97bfd16c16df462a6cf589a09af7e9c0d6e203c242->enter($__internal_6da7a0a11ce15248a737ff97bfd16c16df462a6cf589a09af7e9c0d6e203c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_16a96b48403ac73c764c68b3e6ed5bce0f45827250c78af05abb867b66d84ba1->leave($__internal_16a96b48403ac73c764c68b3e6ed5bce0f45827250c78af05abb867b66d84ba1_prof);

        
        $__internal_6da7a0a11ce15248a737ff97bfd16c16df462a6cf589a09af7e9c0d6e203c242->leave($__internal_6da7a0a11ce15248a737ff97bfd16c16df462a6cf589a09af7e9c0d6e203c242_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
