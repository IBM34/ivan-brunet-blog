<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f6d99cf43a85e51607d2ca60a70139726632fd3bec665818d9c3a3e7698cb628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_890e6de24726da18f189c6951c9c11c2a8a720b4ecddf6e4e3a6d01ee656be82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890e6de24726da18f189c6951c9c11c2a8a720b4ecddf6e4e3a6d01ee656be82->enter($__internal_890e6de24726da18f189c6951c9c11c2a8a720b4ecddf6e4e3a6d01ee656be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_3be223a35cf6cb7977de9261d2f57e8e7a51cc2711fdb5cd42f7df837287cde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be223a35cf6cb7977de9261d2f57e8e7a51cc2711fdb5cd42f7df837287cde9->enter($__internal_3be223a35cf6cb7977de9261d2f57e8e7a51cc2711fdb5cd42f7df837287cde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890e6de24726da18f189c6951c9c11c2a8a720b4ecddf6e4e3a6d01ee656be82->leave($__internal_890e6de24726da18f189c6951c9c11c2a8a720b4ecddf6e4e3a6d01ee656be82_prof);

        
        $__internal_3be223a35cf6cb7977de9261d2f57e8e7a51cc2711fdb5cd42f7df837287cde9->leave($__internal_3be223a35cf6cb7977de9261d2f57e8e7a51cc2711fdb5cd42f7df837287cde9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14c0964fbfc16a4b9cb4bdcaab06c347b9bc4e2f52a7f81ef244e2bbf149ea72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c0964fbfc16a4b9cb4bdcaab06c347b9bc4e2f52a7f81ef244e2bbf149ea72->enter($__internal_14c0964fbfc16a4b9cb4bdcaab06c347b9bc4e2f52a7f81ef244e2bbf149ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50207a83864bc93ff2b83de08da208b1c9d7ed79f3dc404e0bea99f66158714c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50207a83864bc93ff2b83de08da208b1c9d7ed79f3dc404e0bea99f66158714c->enter($__internal_50207a83864bc93ff2b83de08da208b1c9d7ed79f3dc404e0bea99f66158714c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_50207a83864bc93ff2b83de08da208b1c9d7ed79f3dc404e0bea99f66158714c->leave($__internal_50207a83864bc93ff2b83de08da208b1c9d7ed79f3dc404e0bea99f66158714c_prof);

        
        $__internal_14c0964fbfc16a4b9cb4bdcaab06c347b9bc4e2f52a7f81ef244e2bbf149ea72->leave($__internal_14c0964fbfc16a4b9cb4bdcaab06c347b9bc4e2f52a7f81ef244e2bbf149ea72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
