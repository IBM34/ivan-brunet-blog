<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_41beac728198993731c562523c12cd3b20e7bb3d2627b8faff2ebf8f3db45573 extends Twig_Template
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
        $__internal_aedfb2efcf382235ac7571700df9dfa70598282e09f75cf2ab8cc8b16871b324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedfb2efcf382235ac7571700df9dfa70598282e09f75cf2ab8cc8b16871b324->enter($__internal_aedfb2efcf382235ac7571700df9dfa70598282e09f75cf2ab8cc8b16871b324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_76528f46e9b48a7db8f1716f13aacb23c52fa62cfa8588ac8a392fd5d6ae4a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76528f46e9b48a7db8f1716f13aacb23c52fa62cfa8588ac8a392fd5d6ae4a2d->enter($__internal_76528f46e9b48a7db8f1716f13aacb23c52fa62cfa8588ac8a392fd5d6ae4a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aedfb2efcf382235ac7571700df9dfa70598282e09f75cf2ab8cc8b16871b324->leave($__internal_aedfb2efcf382235ac7571700df9dfa70598282e09f75cf2ab8cc8b16871b324_prof);

        
        $__internal_76528f46e9b48a7db8f1716f13aacb23c52fa62cfa8588ac8a392fd5d6ae4a2d->leave($__internal_76528f46e9b48a7db8f1716f13aacb23c52fa62cfa8588ac8a392fd5d6ae4a2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
