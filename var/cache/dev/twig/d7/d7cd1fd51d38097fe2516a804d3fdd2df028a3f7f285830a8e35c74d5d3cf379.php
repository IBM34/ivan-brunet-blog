<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_ffb0899215a7a307851e3b97fdb936bedbb51268528f839d78d562b8f25407b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb0899215a7a307851e3b97fdb936bedbb51268528f839d78d562b8f25407b3->enter($__internal_ffb0899215a7a307851e3b97fdb936bedbb51268528f839d78d562b8f25407b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0e2c48f2c95d6457a89b3de45f109120ed7ad1ebf8624c670426c38eaa3a8c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2c48f2c95d6457a89b3de45f109120ed7ad1ebf8624c670426c38eaa3a8c43->enter($__internal_0e2c48f2c95d6457a89b3de45f109120ed7ad1ebf8624c670426c38eaa3a8c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ffb0899215a7a307851e3b97fdb936bedbb51268528f839d78d562b8f25407b3->leave($__internal_ffb0899215a7a307851e3b97fdb936bedbb51268528f839d78d562b8f25407b3_prof);

        
        $__internal_0e2c48f2c95d6457a89b3de45f109120ed7ad1ebf8624c670426c38eaa3a8c43->leave($__internal_0e2c48f2c95d6457a89b3de45f109120ed7ad1ebf8624c670426c38eaa3a8c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
