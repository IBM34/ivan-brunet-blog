<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_3af3ce837f93b06836272dcdd0eeb09e82aaa1894c816969885ff9004d96fbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af3ce837f93b06836272dcdd0eeb09e82aaa1894c816969885ff9004d96fbff->enter($__internal_3af3ce837f93b06836272dcdd0eeb09e82aaa1894c816969885ff9004d96fbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_606298e597fc381e8d73fc1caa56b3ecade07bec117dbe1530295bcc639809d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606298e597fc381e8d73fc1caa56b3ecade07bec117dbe1530295bcc639809d5->enter($__internal_606298e597fc381e8d73fc1caa56b3ecade07bec117dbe1530295bcc639809d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3af3ce837f93b06836272dcdd0eeb09e82aaa1894c816969885ff9004d96fbff->leave($__internal_3af3ce837f93b06836272dcdd0eeb09e82aaa1894c816969885ff9004d96fbff_prof);

        
        $__internal_606298e597fc381e8d73fc1caa56b3ecade07bec117dbe1530295bcc639809d5->leave($__internal_606298e597fc381e8d73fc1caa56b3ecade07bec117dbe1530295bcc639809d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
