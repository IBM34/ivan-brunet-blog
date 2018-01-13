<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1d70aaec93e60f461dc5cfb7a23a4fab9132bbc8a3773e60e4391f6e7bf501eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d70aaec93e60f461dc5cfb7a23a4fab9132bbc8a3773e60e4391f6e7bf501eb->enter($__internal_1d70aaec93e60f461dc5cfb7a23a4fab9132bbc8a3773e60e4391f6e7bf501eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3fdc1b3756da200e5d7d8b6878abba8ee9ed441bc782cc93963036a2166780f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdc1b3756da200e5d7d8b6878abba8ee9ed441bc782cc93963036a2166780f4->enter($__internal_3fdc1b3756da200e5d7d8b6878abba8ee9ed441bc782cc93963036a2166780f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d70aaec93e60f461dc5cfb7a23a4fab9132bbc8a3773e60e4391f6e7bf501eb->leave($__internal_1d70aaec93e60f461dc5cfb7a23a4fab9132bbc8a3773e60e4391f6e7bf501eb_prof);

        
        $__internal_3fdc1b3756da200e5d7d8b6878abba8ee9ed441bc782cc93963036a2166780f4->leave($__internal_3fdc1b3756da200e5d7d8b6878abba8ee9ed441bc782cc93963036a2166780f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e95ed08809399534a159411bc48a43ec88d17b58d242295deb0c18e08a034981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95ed08809399534a159411bc48a43ec88d17b58d242295deb0c18e08a034981->enter($__internal_e95ed08809399534a159411bc48a43ec88d17b58d242295deb0c18e08a034981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9dfb4867d0222cff32e966a830b1c8c9906f104b69aec94882e0ce11306c88d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfb4867d0222cff32e966a830b1c8c9906f104b69aec94882e0ce11306c88d5->enter($__internal_9dfb4867d0222cff32e966a830b1c8c9906f104b69aec94882e0ce11306c88d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9dfb4867d0222cff32e966a830b1c8c9906f104b69aec94882e0ce11306c88d5->leave($__internal_9dfb4867d0222cff32e966a830b1c8c9906f104b69aec94882e0ce11306c88d5_prof);

        
        $__internal_e95ed08809399534a159411bc48a43ec88d17b58d242295deb0c18e08a034981->leave($__internal_e95ed08809399534a159411bc48a43ec88d17b58d242295deb0c18e08a034981_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6277e799c5b391a1ab4e0b547ce5262621a372db999861e007c8cd7eb390e00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6277e799c5b391a1ab4e0b547ce5262621a372db999861e007c8cd7eb390e00c->enter($__internal_6277e799c5b391a1ab4e0b547ce5262621a372db999861e007c8cd7eb390e00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_156033b0d3b595cdf3d3e1d8484fd31cedaa272242f05ded3312b1fca2520340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156033b0d3b595cdf3d3e1d8484fd31cedaa272242f05ded3312b1fca2520340->enter($__internal_156033b0d3b595cdf3d3e1d8484fd31cedaa272242f05ded3312b1fca2520340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_156033b0d3b595cdf3d3e1d8484fd31cedaa272242f05ded3312b1fca2520340->leave($__internal_156033b0d3b595cdf3d3e1d8484fd31cedaa272242f05ded3312b1fca2520340_prof);

        
        $__internal_6277e799c5b391a1ab4e0b547ce5262621a372db999861e007c8cd7eb390e00c->leave($__internal_6277e799c5b391a1ab4e0b547ce5262621a372db999861e007c8cd7eb390e00c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_261f823a34b354bb4e33282949f8591050e128186b07b813a84809f274ce2793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261f823a34b354bb4e33282949f8591050e128186b07b813a84809f274ce2793->enter($__internal_261f823a34b354bb4e33282949f8591050e128186b07b813a84809f274ce2793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22a437c3beb2a7b47a8a61d2ac6e3b7f7907a151156400d1318c7acc3b899347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a437c3beb2a7b47a8a61d2ac6e3b7f7907a151156400d1318c7acc3b899347->enter($__internal_22a437c3beb2a7b47a8a61d2ac6e3b7f7907a151156400d1318c7acc3b899347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_22a437c3beb2a7b47a8a61d2ac6e3b7f7907a151156400d1318c7acc3b899347->leave($__internal_22a437c3beb2a7b47a8a61d2ac6e3b7f7907a151156400d1318c7acc3b899347_prof);

        
        $__internal_261f823a34b354bb4e33282949f8591050e128186b07b813a84809f274ce2793->leave($__internal_261f823a34b354bb4e33282949f8591050e128186b07b813a84809f274ce2793_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
