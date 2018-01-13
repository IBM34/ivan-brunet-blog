<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2c2562aafbf423cf92dd05a723922ac850693e9aeefb7f8c8c8a3165e59a8d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af4af47c651655d31732da36640a0a6e458942d95fe9daacd44e43503f1bc9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4af47c651655d31732da36640a0a6e458942d95fe9daacd44e43503f1bc9e5->enter($__internal_af4af47c651655d31732da36640a0a6e458942d95fe9daacd44e43503f1bc9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_322f91fbb24bfd736da03d4d63e1934a8479564efa69172714435f2a852360a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322f91fbb24bfd736da03d4d63e1934a8479564efa69172714435f2a852360a6->enter($__internal_322f91fbb24bfd736da03d4d63e1934a8479564efa69172714435f2a852360a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af4af47c651655d31732da36640a0a6e458942d95fe9daacd44e43503f1bc9e5->leave($__internal_af4af47c651655d31732da36640a0a6e458942d95fe9daacd44e43503f1bc9e5_prof);

        
        $__internal_322f91fbb24bfd736da03d4d63e1934a8479564efa69172714435f2a852360a6->leave($__internal_322f91fbb24bfd736da03d4d63e1934a8479564efa69172714435f2a852360a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7262a4ed7f67153dbf6215c1003eca93fb9cbad25a5d714cf6bd1f4a0227b490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7262a4ed7f67153dbf6215c1003eca93fb9cbad25a5d714cf6bd1f4a0227b490->enter($__internal_7262a4ed7f67153dbf6215c1003eca93fb9cbad25a5d714cf6bd1f4a0227b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_778fcb0c0992bba74194fd58ff9bf4a009c0e9d4d6bbbc6b897ede2e6a31c9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778fcb0c0992bba74194fd58ff9bf4a009c0e9d4d6bbbc6b897ede2e6a31c9b0->enter($__internal_778fcb0c0992bba74194fd58ff9bf4a009c0e9d4d6bbbc6b897ede2e6a31c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_778fcb0c0992bba74194fd58ff9bf4a009c0e9d4d6bbbc6b897ede2e6a31c9b0->leave($__internal_778fcb0c0992bba74194fd58ff9bf4a009c0e9d4d6bbbc6b897ede2e6a31c9b0_prof);

        
        $__internal_7262a4ed7f67153dbf6215c1003eca93fb9cbad25a5d714cf6bd1f4a0227b490->leave($__internal_7262a4ed7f67153dbf6215c1003eca93fb9cbad25a5d714cf6bd1f4a0227b490_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
