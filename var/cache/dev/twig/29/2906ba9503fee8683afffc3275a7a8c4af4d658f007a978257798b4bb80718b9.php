<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_de3e5606362016128bf29833bedbcec28d64bf28248c5727f1b9b4ca06404099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3e5606362016128bf29833bedbcec28d64bf28248c5727f1b9b4ca06404099->enter($__internal_de3e5606362016128bf29833bedbcec28d64bf28248c5727f1b9b4ca06404099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5de559a7805fe650deb9533a144e9e00ab39cf006ba158da1ccf09f78ac6fa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de559a7805fe650deb9533a144e9e00ab39cf006ba158da1ccf09f78ac6fa61->enter($__internal_5de559a7805fe650deb9533a144e9e00ab39cf006ba158da1ccf09f78ac6fa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_de3e5606362016128bf29833bedbcec28d64bf28248c5727f1b9b4ca06404099->leave($__internal_de3e5606362016128bf29833bedbcec28d64bf28248c5727f1b9b4ca06404099_prof);

        
        $__internal_5de559a7805fe650deb9533a144e9e00ab39cf006ba158da1ccf09f78ac6fa61->leave($__internal_5de559a7805fe650deb9533a144e9e00ab39cf006ba158da1ccf09f78ac6fa61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
