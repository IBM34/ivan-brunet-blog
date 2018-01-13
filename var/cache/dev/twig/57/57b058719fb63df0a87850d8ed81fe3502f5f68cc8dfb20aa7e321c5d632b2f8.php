<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a2b079f00ea46b0ca523b1c68a813c5faf2b958c961375da2754bf79afa549a0 extends Twig_Template
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
        $__internal_3c235d333b9964ce14c69e9ed96dbb194ba6120a3229ff6a104fee0f73a2b947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c235d333b9964ce14c69e9ed96dbb194ba6120a3229ff6a104fee0f73a2b947->enter($__internal_3c235d333b9964ce14c69e9ed96dbb194ba6120a3229ff6a104fee0f73a2b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_afbaafd9a3a8a1bd4c216fc2101cf251e11c833a2eb93f0fb91543815ca1ee20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbaafd9a3a8a1bd4c216fc2101cf251e11c833a2eb93f0fb91543815ca1ee20->enter($__internal_afbaafd9a3a8a1bd4c216fc2101cf251e11c833a2eb93f0fb91543815ca1ee20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3c235d333b9964ce14c69e9ed96dbb194ba6120a3229ff6a104fee0f73a2b947->leave($__internal_3c235d333b9964ce14c69e9ed96dbb194ba6120a3229ff6a104fee0f73a2b947_prof);

        
        $__internal_afbaafd9a3a8a1bd4c216fc2101cf251e11c833a2eb93f0fb91543815ca1ee20->leave($__internal_afbaafd9a3a8a1bd4c216fc2101cf251e11c833a2eb93f0fb91543815ca1ee20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
