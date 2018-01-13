<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0c33a369ff4379e84e79ca047a9bd0f8d25a0a2094943a9e180983137ce969ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75b91b5ff5a0064ca54e3cb76cc11154e0c66dadb69dfead6745caa1dfac24e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b91b5ff5a0064ca54e3cb76cc11154e0c66dadb69dfead6745caa1dfac24e5->enter($__internal_75b91b5ff5a0064ca54e3cb76cc11154e0c66dadb69dfead6745caa1dfac24e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2336a065876b6fa1bca6514bb9138459c20ed3550bf6580e2d6cb7ecf87da6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2336a065876b6fa1bca6514bb9138459c20ed3550bf6580e2d6cb7ecf87da6ca->enter($__internal_2336a065876b6fa1bca6514bb9138459c20ed3550bf6580e2d6cb7ecf87da6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b91b5ff5a0064ca54e3cb76cc11154e0c66dadb69dfead6745caa1dfac24e5->leave($__internal_75b91b5ff5a0064ca54e3cb76cc11154e0c66dadb69dfead6745caa1dfac24e5_prof);

        
        $__internal_2336a065876b6fa1bca6514bb9138459c20ed3550bf6580e2d6cb7ecf87da6ca->leave($__internal_2336a065876b6fa1bca6514bb9138459c20ed3550bf6580e2d6cb7ecf87da6ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aa426b52ef3111ad3677e6095ed1c21f9c60a520473eeb0e217277ca6ca2f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa426b52ef3111ad3677e6095ed1c21f9c60a520473eeb0e217277ca6ca2f15->enter($__internal_8aa426b52ef3111ad3677e6095ed1c21f9c60a520473eeb0e217277ca6ca2f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01348e5c86cdf131bb6e4d0e199d4a0c700b7a3d2945341ee6ee0a369f6cb371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01348e5c86cdf131bb6e4d0e199d4a0c700b7a3d2945341ee6ee0a369f6cb371->enter($__internal_01348e5c86cdf131bb6e4d0e199d4a0c700b7a3d2945341ee6ee0a369f6cb371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_01348e5c86cdf131bb6e4d0e199d4a0c700b7a3d2945341ee6ee0a369f6cb371->leave($__internal_01348e5c86cdf131bb6e4d0e199d4a0c700b7a3d2945341ee6ee0a369f6cb371_prof);

        
        $__internal_8aa426b52ef3111ad3677e6095ed1c21f9c60a520473eeb0e217277ca6ca2f15->leave($__internal_8aa426b52ef3111ad3677e6095ed1c21f9c60a520473eeb0e217277ca6ca2f15_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6849a55100124e012ad5ff9ee34c234df1514199769eb31f7433bb83e64e4152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6849a55100124e012ad5ff9ee34c234df1514199769eb31f7433bb83e64e4152->enter($__internal_6849a55100124e012ad5ff9ee34c234df1514199769eb31f7433bb83e64e4152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdcf1c94efcaba6ccfa5a8cff7579de7d0e1e1add4e4edc762d4c9e76dd64cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcf1c94efcaba6ccfa5a8cff7579de7d0e1e1add4e4edc762d4c9e76dd64cc8->enter($__internal_cdcf1c94efcaba6ccfa5a8cff7579de7d0e1e1add4e4edc762d4c9e76dd64cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cdcf1c94efcaba6ccfa5a8cff7579de7d0e1e1add4e4edc762d4c9e76dd64cc8->leave($__internal_cdcf1c94efcaba6ccfa5a8cff7579de7d0e1e1add4e4edc762d4c9e76dd64cc8_prof);

        
        $__internal_6849a55100124e012ad5ff9ee34c234df1514199769eb31f7433bb83e64e4152->leave($__internal_6849a55100124e012ad5ff9ee34c234df1514199769eb31f7433bb83e64e4152_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
