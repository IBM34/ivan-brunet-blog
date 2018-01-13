<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_1b479fe30c1a91ca10bd6fdece0e125d848a24494271851edbdf092f41d5f320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b479fe30c1a91ca10bd6fdece0e125d848a24494271851edbdf092f41d5f320->enter($__internal_1b479fe30c1a91ca10bd6fdece0e125d848a24494271851edbdf092f41d5f320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bd3ab6e6650641b60df55404eecfabd4ac8309ae1ffc4783aff475a436750d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3ab6e6650641b60df55404eecfabd4ac8309ae1ffc4783aff475a436750d3c->enter($__internal_bd3ab6e6650641b60df55404eecfabd4ac8309ae1ffc4783aff475a436750d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1b479fe30c1a91ca10bd6fdece0e125d848a24494271851edbdf092f41d5f320->leave($__internal_1b479fe30c1a91ca10bd6fdece0e125d848a24494271851edbdf092f41d5f320_prof);

        
        $__internal_bd3ab6e6650641b60df55404eecfabd4ac8309ae1ffc4783aff475a436750d3c->leave($__internal_bd3ab6e6650641b60df55404eecfabd4ac8309ae1ffc4783aff475a436750d3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
