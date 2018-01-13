<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_e28f2f94d8a3a6ebb8e417a76180535391db670e747a03d84e81d17fb6ef9a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28f2f94d8a3a6ebb8e417a76180535391db670e747a03d84e81d17fb6ef9a74->enter($__internal_e28f2f94d8a3a6ebb8e417a76180535391db670e747a03d84e81d17fb6ef9a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_408a49b153956cc19f1c1b6fc5dfc70af0e0010b8b25876c1cb3095f9347bc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408a49b153956cc19f1c1b6fc5dfc70af0e0010b8b25876c1cb3095f9347bc56->enter($__internal_408a49b153956cc19f1c1b6fc5dfc70af0e0010b8b25876c1cb3095f9347bc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e28f2f94d8a3a6ebb8e417a76180535391db670e747a03d84e81d17fb6ef9a74->leave($__internal_e28f2f94d8a3a6ebb8e417a76180535391db670e747a03d84e81d17fb6ef9a74_prof);

        
        $__internal_408a49b153956cc19f1c1b6fc5dfc70af0e0010b8b25876c1cb3095f9347bc56->leave($__internal_408a49b153956cc19f1c1b6fc5dfc70af0e0010b8b25876c1cb3095f9347bc56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
