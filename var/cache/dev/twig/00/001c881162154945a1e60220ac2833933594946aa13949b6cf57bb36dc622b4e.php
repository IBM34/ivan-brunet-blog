<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_78cff2450b8242c0a8ec8fe4237064e52ae86b7412f8d9dd4ec895e137380cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cff2450b8242c0a8ec8fe4237064e52ae86b7412f8d9dd4ec895e137380cc9->enter($__internal_78cff2450b8242c0a8ec8fe4237064e52ae86b7412f8d9dd4ec895e137380cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3feec025c0820d34201f7842239c75cb93629e901b7f0b53b607f102da9d7fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feec025c0820d34201f7842239c75cb93629e901b7f0b53b607f102da9d7fa2->enter($__internal_3feec025c0820d34201f7842239c75cb93629e901b7f0b53b607f102da9d7fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_78cff2450b8242c0a8ec8fe4237064e52ae86b7412f8d9dd4ec895e137380cc9->leave($__internal_78cff2450b8242c0a8ec8fe4237064e52ae86b7412f8d9dd4ec895e137380cc9_prof);

        
        $__internal_3feec025c0820d34201f7842239c75cb93629e901b7f0b53b607f102da9d7fa2->leave($__internal_3feec025c0820d34201f7842239c75cb93629e901b7f0b53b607f102da9d7fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
