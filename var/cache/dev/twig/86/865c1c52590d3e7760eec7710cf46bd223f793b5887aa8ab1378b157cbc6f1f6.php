<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0230de530e61c0c1cac38dd4e7a322975ae9de993e386b8144b3e1dc9dc8daf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0230de530e61c0c1cac38dd4e7a322975ae9de993e386b8144b3e1dc9dc8daf6->enter($__internal_0230de530e61c0c1cac38dd4e7a322975ae9de993e386b8144b3e1dc9dc8daf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1ba716b9ee5a96379f17dec3cbc0bbbcad7bed403b80bd735d37fba0be4f7ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba716b9ee5a96379f17dec3cbc0bbbcad7bed403b80bd735d37fba0be4f7ec3->enter($__internal_1ba716b9ee5a96379f17dec3cbc0bbbcad7bed403b80bd735d37fba0be4f7ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0230de530e61c0c1cac38dd4e7a322975ae9de993e386b8144b3e1dc9dc8daf6->leave($__internal_0230de530e61c0c1cac38dd4e7a322975ae9de993e386b8144b3e1dc9dc8daf6_prof);

        
        $__internal_1ba716b9ee5a96379f17dec3cbc0bbbcad7bed403b80bd735d37fba0be4f7ec3->leave($__internal_1ba716b9ee5a96379f17dec3cbc0bbbcad7bed403b80bd735d37fba0be4f7ec3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1427d2ad46b6a5969c01b79ce2ec0fa570e325c5546843e7b70c2daeb38d05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1427d2ad46b6a5969c01b79ce2ec0fa570e325c5546843e7b70c2daeb38d05c->enter($__internal_a1427d2ad46b6a5969c01b79ce2ec0fa570e325c5546843e7b70c2daeb38d05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4781fdf1a0dd4e879ab3f66de1d34cfbf494167ca9a0ec7e03a823e82294a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4781fdf1a0dd4e879ab3f66de1d34cfbf494167ca9a0ec7e03a823e82294a78->enter($__internal_a4781fdf1a0dd4e879ab3f66de1d34cfbf494167ca9a0ec7e03a823e82294a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4781fdf1a0dd4e879ab3f66de1d34cfbf494167ca9a0ec7e03a823e82294a78->leave($__internal_a4781fdf1a0dd4e879ab3f66de1d34cfbf494167ca9a0ec7e03a823e82294a78_prof);

        
        $__internal_a1427d2ad46b6a5969c01b79ce2ec0fa570e325c5546843e7b70c2daeb38d05c->leave($__internal_a1427d2ad46b6a5969c01b79ce2ec0fa570e325c5546843e7b70c2daeb38d05c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db073ff5b713a77d7194d5292c0a869105fdc9a057b51bf3b2b4061720d04597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db073ff5b713a77d7194d5292c0a869105fdc9a057b51bf3b2b4061720d04597->enter($__internal_db073ff5b713a77d7194d5292c0a869105fdc9a057b51bf3b2b4061720d04597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21d355a3052f84d63ee14a4886131eb5f39631bd676b0e9e9813e7d4a78a15e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d355a3052f84d63ee14a4886131eb5f39631bd676b0e9e9813e7d4a78a15e4->enter($__internal_21d355a3052f84d63ee14a4886131eb5f39631bd676b0e9e9813e7d4a78a15e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21d355a3052f84d63ee14a4886131eb5f39631bd676b0e9e9813e7d4a78a15e4->leave($__internal_21d355a3052f84d63ee14a4886131eb5f39631bd676b0e9e9813e7d4a78a15e4_prof);

        
        $__internal_db073ff5b713a77d7194d5292c0a869105fdc9a057b51bf3b2b4061720d04597->leave($__internal_db073ff5b713a77d7194d5292c0a869105fdc9a057b51bf3b2b4061720d04597_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51bca07c4e3ffc029cfcd25f4166f2668bc19d947ac08d5aa582de323478ecd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bca07c4e3ffc029cfcd25f4166f2668bc19d947ac08d5aa582de323478ecd3->enter($__internal_51bca07c4e3ffc029cfcd25f4166f2668bc19d947ac08d5aa582de323478ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fffce7f1a307f5798f9d4fdbb38fada739d1731859f352987e823f4a69e8b2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffce7f1a307f5798f9d4fdbb38fada739d1731859f352987e823f4a69e8b2bf->enter($__internal_fffce7f1a307f5798f9d4fdbb38fada739d1731859f352987e823f4a69e8b2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fffce7f1a307f5798f9d4fdbb38fada739d1731859f352987e823f4a69e8b2bf->leave($__internal_fffce7f1a307f5798f9d4fdbb38fada739d1731859f352987e823f4a69e8b2bf_prof);

        
        $__internal_51bca07c4e3ffc029cfcd25f4166f2668bc19d947ac08d5aa582de323478ecd3->leave($__internal_51bca07c4e3ffc029cfcd25f4166f2668bc19d947ac08d5aa582de323478ecd3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
