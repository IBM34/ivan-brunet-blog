<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_f158e55edcdc196d19b027dd917af43afef2988ff76501705ab472f4819990b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f158e55edcdc196d19b027dd917af43afef2988ff76501705ab472f4819990b7->enter($__internal_f158e55edcdc196d19b027dd917af43afef2988ff76501705ab472f4819990b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8c6fdc82f68582e1d98b55dc17331e8e4923728fe4ddd1bbe2c64bb74ee64535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6fdc82f68582e1d98b55dc17331e8e4923728fe4ddd1bbe2c64bb74ee64535->enter($__internal_8c6fdc82f68582e1d98b55dc17331e8e4923728fe4ddd1bbe2c64bb74ee64535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f158e55edcdc196d19b027dd917af43afef2988ff76501705ab472f4819990b7->leave($__internal_f158e55edcdc196d19b027dd917af43afef2988ff76501705ab472f4819990b7_prof);

        
        $__internal_8c6fdc82f68582e1d98b55dc17331e8e4923728fe4ddd1bbe2c64bb74ee64535->leave($__internal_8c6fdc82f68582e1d98b55dc17331e8e4923728fe4ddd1bbe2c64bb74ee64535_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
