<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_589da9bf4712d58ce229ce2f01c52a7859f00baa0fb140d7796a05f5af2b0683 extends Twig_Template
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
        $__internal_02fdc97182876b6fe28e0c8c6473bc938d046c8c0b1727593d6617259f1e9afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fdc97182876b6fe28e0c8c6473bc938d046c8c0b1727593d6617259f1e9afd->enter($__internal_02fdc97182876b6fe28e0c8c6473bc938d046c8c0b1727593d6617259f1e9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_971f522be4ddb1f8db982ef4aec7ecabd062bdce0ad0b1485e244788de968713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971f522be4ddb1f8db982ef4aec7ecabd062bdce0ad0b1485e244788de968713->enter($__internal_971f522be4ddb1f8db982ef4aec7ecabd062bdce0ad0b1485e244788de968713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_02fdc97182876b6fe28e0c8c6473bc938d046c8c0b1727593d6617259f1e9afd->leave($__internal_02fdc97182876b6fe28e0c8c6473bc938d046c8c0b1727593d6617259f1e9afd_prof);

        
        $__internal_971f522be4ddb1f8db982ef4aec7ecabd062bdce0ad0b1485e244788de968713->leave($__internal_971f522be4ddb1f8db982ef4aec7ecabd062bdce0ad0b1485e244788de968713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
