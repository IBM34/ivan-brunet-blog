<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_f52658973ecbd38bc4bf4a476d3feb6cfe41528ad08afb27c9f8c1c3f13f79a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52658973ecbd38bc4bf4a476d3feb6cfe41528ad08afb27c9f8c1c3f13f79a8->enter($__internal_f52658973ecbd38bc4bf4a476d3feb6cfe41528ad08afb27c9f8c1c3f13f79a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_42e825d712d47dbd5d3bd9f1d4ccf2c57ac7110d76593c85197c21ced76e4045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e825d712d47dbd5d3bd9f1d4ccf2c57ac7110d76593c85197c21ced76e4045->enter($__internal_42e825d712d47dbd5d3bd9f1d4ccf2c57ac7110d76593c85197c21ced76e4045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f52658973ecbd38bc4bf4a476d3feb6cfe41528ad08afb27c9f8c1c3f13f79a8->leave($__internal_f52658973ecbd38bc4bf4a476d3feb6cfe41528ad08afb27c9f8c1c3f13f79a8_prof);

        
        $__internal_42e825d712d47dbd5d3bd9f1d4ccf2c57ac7110d76593c85197c21ced76e4045->leave($__internal_42e825d712d47dbd5d3bd9f1d4ccf2c57ac7110d76593c85197c21ced76e4045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
