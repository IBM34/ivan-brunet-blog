<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c90bb60ee7e39ceadc9027a4f93417cf1e414564460c46b6079701f480f248d6 extends Twig_Template
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
        $__internal_685e369c80f1dec2cc87d6754eb033f9c2cc7750a1a66744d12533d6a8f649b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685e369c80f1dec2cc87d6754eb033f9c2cc7750a1a66744d12533d6a8f649b6->enter($__internal_685e369c80f1dec2cc87d6754eb033f9c2cc7750a1a66744d12533d6a8f649b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_fc54cde7e68f05ce213431691abcfb00b629f23d12d86ef27f856e87407411d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc54cde7e68f05ce213431691abcfb00b629f23d12d86ef27f856e87407411d9->enter($__internal_fc54cde7e68f05ce213431691abcfb00b629f23d12d86ef27f856e87407411d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_685e369c80f1dec2cc87d6754eb033f9c2cc7750a1a66744d12533d6a8f649b6->leave($__internal_685e369c80f1dec2cc87d6754eb033f9c2cc7750a1a66744d12533d6a8f649b6_prof);

        
        $__internal_fc54cde7e68f05ce213431691abcfb00b629f23d12d86ef27f856e87407411d9->leave($__internal_fc54cde7e68f05ce213431691abcfb00b629f23d12d86ef27f856e87407411d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
