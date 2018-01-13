<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_158c85694d506f347993a9ab70b3aba6633c0caf7484db092b0c581530d46be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e01d324933c07bc132d1d9e085184dbe61953986b3d2460dbb52cc763e99f8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01d324933c07bc132d1d9e085184dbe61953986b3d2460dbb52cc763e99f8b3->enter($__internal_e01d324933c07bc132d1d9e085184dbe61953986b3d2460dbb52cc763e99f8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_4eae2ca0cd2ac72c47f3e18204ad9c0af46c277995274ff47fd7928e99e0f899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eae2ca0cd2ac72c47f3e18204ad9c0af46c277995274ff47fd7928e99e0f899->enter($__internal_4eae2ca0cd2ac72c47f3e18204ad9c0af46c277995274ff47fd7928e99e0f899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e01d324933c07bc132d1d9e085184dbe61953986b3d2460dbb52cc763e99f8b3->leave($__internal_e01d324933c07bc132d1d9e085184dbe61953986b3d2460dbb52cc763e99f8b3_prof);

        
        $__internal_4eae2ca0cd2ac72c47f3e18204ad9c0af46c277995274ff47fd7928e99e0f899->leave($__internal_4eae2ca0cd2ac72c47f3e18204ad9c0af46c277995274ff47fd7928e99e0f899_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4317649906150b476f99218943cd965ac7507585f3534acd423a849c75a05c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4317649906150b476f99218943cd965ac7507585f3534acd423a849c75a05c43->enter($__internal_4317649906150b476f99218943cd965ac7507585f3534acd423a849c75a05c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_850857feb42cdeae1a13c91811d73bec8bf856afb54057d2ea8b2b9363f94d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850857feb42cdeae1a13c91811d73bec8bf856afb54057d2ea8b2b9363f94d91->enter($__internal_850857feb42cdeae1a13c91811d73bec8bf856afb54057d2ea8b2b9363f94d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_850857feb42cdeae1a13c91811d73bec8bf856afb54057d2ea8b2b9363f94d91->leave($__internal_850857feb42cdeae1a13c91811d73bec8bf856afb54057d2ea8b2b9363f94d91_prof);

        
        $__internal_4317649906150b476f99218943cd965ac7507585f3534acd423a849c75a05c43->leave($__internal_4317649906150b476f99218943cd965ac7507585f3534acd423a849c75a05c43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
