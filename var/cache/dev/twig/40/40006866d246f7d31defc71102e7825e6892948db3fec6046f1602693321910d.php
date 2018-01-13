<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b37ad5faf960af63e008d563da02153270fe51281c8f85d3d855f17fd1e04e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37ad5faf960af63e008d563da02153270fe51281c8f85d3d855f17fd1e04e32->enter($__internal_b37ad5faf960af63e008d563da02153270fe51281c8f85d3d855f17fd1e04e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2073a8e6f49ebd55dd9cd466d35e286a9d9c21b1b0ff6ac1729626b1a1393328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2073a8e6f49ebd55dd9cd466d35e286a9d9c21b1b0ff6ac1729626b1a1393328->enter($__internal_2073a8e6f49ebd55dd9cd466d35e286a9d9c21b1b0ff6ac1729626b1a1393328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37ad5faf960af63e008d563da02153270fe51281c8f85d3d855f17fd1e04e32->leave($__internal_b37ad5faf960af63e008d563da02153270fe51281c8f85d3d855f17fd1e04e32_prof);

        
        $__internal_2073a8e6f49ebd55dd9cd466d35e286a9d9c21b1b0ff6ac1729626b1a1393328->leave($__internal_2073a8e6f49ebd55dd9cd466d35e286a9d9c21b1b0ff6ac1729626b1a1393328_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_765c6564ebadcffc996ef2046a6f3161c4e4385ce93dcf2a0cf28e910617c25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765c6564ebadcffc996ef2046a6f3161c4e4385ce93dcf2a0cf28e910617c25b->enter($__internal_765c6564ebadcffc996ef2046a6f3161c4e4385ce93dcf2a0cf28e910617c25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_477799a20b0ca3a6b650154cefb40a2c60141a858839b10efe47b5776f7a05df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477799a20b0ca3a6b650154cefb40a2c60141a858839b10efe47b5776f7a05df->enter($__internal_477799a20b0ca3a6b650154cefb40a2c60141a858839b10efe47b5776f7a05df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_477799a20b0ca3a6b650154cefb40a2c60141a858839b10efe47b5776f7a05df->leave($__internal_477799a20b0ca3a6b650154cefb40a2c60141a858839b10efe47b5776f7a05df_prof);

        
        $__internal_765c6564ebadcffc996ef2046a6f3161c4e4385ce93dcf2a0cf28e910617c25b->leave($__internal_765c6564ebadcffc996ef2046a6f3161c4e4385ce93dcf2a0cf28e910617c25b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_040c74331a3b173bf08b3fe9720ca137305fc460476516935d6f5e1557e526f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040c74331a3b173bf08b3fe9720ca137305fc460476516935d6f5e1557e526f1->enter($__internal_040c74331a3b173bf08b3fe9720ca137305fc460476516935d6f5e1557e526f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b65363db87efbed26bf3cdcdd14ff57a75888d0acb7f067f5a0118692e2dbc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65363db87efbed26bf3cdcdd14ff57a75888d0acb7f067f5a0118692e2dbc81->enter($__internal_b65363db87efbed26bf3cdcdd14ff57a75888d0acb7f067f5a0118692e2dbc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b65363db87efbed26bf3cdcdd14ff57a75888d0acb7f067f5a0118692e2dbc81->leave($__internal_b65363db87efbed26bf3cdcdd14ff57a75888d0acb7f067f5a0118692e2dbc81_prof);

        
        $__internal_040c74331a3b173bf08b3fe9720ca137305fc460476516935d6f5e1557e526f1->leave($__internal_040c74331a3b173bf08b3fe9720ca137305fc460476516935d6f5e1557e526f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
