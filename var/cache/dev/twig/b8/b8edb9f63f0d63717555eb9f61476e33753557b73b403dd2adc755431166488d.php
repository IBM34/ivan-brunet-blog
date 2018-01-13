<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fc722d62ca28f285b606fe786535b6a2c11de849e5659f523da67b1533eb6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_738bb80c3b9bf47880efee6f33206cabd0ebed49bf5364ce7d9e7cc7bc04da1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738bb80c3b9bf47880efee6f33206cabd0ebed49bf5364ce7d9e7cc7bc04da1b->enter($__internal_738bb80c3b9bf47880efee6f33206cabd0ebed49bf5364ce7d9e7cc7bc04da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6db63a947c36fb1bb921cd673bfc1996b5f8d81be7e8d57646dd2890d51daca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db63a947c36fb1bb921cd673bfc1996b5f8d81be7e8d57646dd2890d51daca3->enter($__internal_6db63a947c36fb1bb921cd673bfc1996b5f8d81be7e8d57646dd2890d51daca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738bb80c3b9bf47880efee6f33206cabd0ebed49bf5364ce7d9e7cc7bc04da1b->leave($__internal_738bb80c3b9bf47880efee6f33206cabd0ebed49bf5364ce7d9e7cc7bc04da1b_prof);

        
        $__internal_6db63a947c36fb1bb921cd673bfc1996b5f8d81be7e8d57646dd2890d51daca3->leave($__internal_6db63a947c36fb1bb921cd673bfc1996b5f8d81be7e8d57646dd2890d51daca3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bf174aae2b65568d1336c9a27a183878635296d53e86047042074c10ab219e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf174aae2b65568d1336c9a27a183878635296d53e86047042074c10ab219e34->enter($__internal_bf174aae2b65568d1336c9a27a183878635296d53e86047042074c10ab219e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8530ebae39bef6ff969aee6b90576c11d715af9606b66b849753c29827082a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8530ebae39bef6ff969aee6b90576c11d715af9606b66b849753c29827082a44->enter($__internal_8530ebae39bef6ff969aee6b90576c11d715af9606b66b849753c29827082a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_8530ebae39bef6ff969aee6b90576c11d715af9606b66b849753c29827082a44->leave($__internal_8530ebae39bef6ff969aee6b90576c11d715af9606b66b849753c29827082a44_prof);

        
        $__internal_bf174aae2b65568d1336c9a27a183878635296d53e86047042074c10ab219e34->leave($__internal_bf174aae2b65568d1336c9a27a183878635296d53e86047042074c10ab219e34_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_379c55e573c69860919d2901882dfa1be33a8f26ce84a96177d014c9a7353885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379c55e573c69860919d2901882dfa1be33a8f26ce84a96177d014c9a7353885->enter($__internal_379c55e573c69860919d2901882dfa1be33a8f26ce84a96177d014c9a7353885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1710390e3e22f2f8e706d142ee7a6aeaa59726feb8e3c19a20871c35bebab8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1710390e3e22f2f8e706d142ee7a6aeaa59726feb8e3c19a20871c35bebab8f1->enter($__internal_1710390e3e22f2f8e706d142ee7a6aeaa59726feb8e3c19a20871c35bebab8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1710390e3e22f2f8e706d142ee7a6aeaa59726feb8e3c19a20871c35bebab8f1->leave($__internal_1710390e3e22f2f8e706d142ee7a6aeaa59726feb8e3c19a20871c35bebab8f1_prof);

        
        $__internal_379c55e573c69860919d2901882dfa1be33a8f26ce84a96177d014c9a7353885->leave($__internal_379c55e573c69860919d2901882dfa1be33a8f26ce84a96177d014c9a7353885_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
