<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_59b2e1ef89fffcbd5f5b4d4188dee1c778ba91666940435acc4716ebecae6b1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_edb4385e631c4db7e0c1b0f1f4a6a04edd882192108d82b28a9b9d794fe07d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb4385e631c4db7e0c1b0f1f4a6a04edd882192108d82b28a9b9d794fe07d70->enter($__internal_edb4385e631c4db7e0c1b0f1f4a6a04edd882192108d82b28a9b9d794fe07d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c2d56c157e8022aa42c413978ba8001fad1d2e71b03fcd4da354509a6ea75e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d56c157e8022aa42c413978ba8001fad1d2e71b03fcd4da354509a6ea75e3c->enter($__internal_c2d56c157e8022aa42c413978ba8001fad1d2e71b03fcd4da354509a6ea75e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb4385e631c4db7e0c1b0f1f4a6a04edd882192108d82b28a9b9d794fe07d70->leave($__internal_edb4385e631c4db7e0c1b0f1f4a6a04edd882192108d82b28a9b9d794fe07d70_prof);

        
        $__internal_c2d56c157e8022aa42c413978ba8001fad1d2e71b03fcd4da354509a6ea75e3c->leave($__internal_c2d56c157e8022aa42c413978ba8001fad1d2e71b03fcd4da354509a6ea75e3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_051c86537cfd38763e14fe6e16ffe4f54544c7a65ff4882c75718294d98fc577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051c86537cfd38763e14fe6e16ffe4f54544c7a65ff4882c75718294d98fc577->enter($__internal_051c86537cfd38763e14fe6e16ffe4f54544c7a65ff4882c75718294d98fc577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c2eaa310b940ecc64a60e098c493da0ac9dfce74aaec8996f52b03f6cfcd90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2eaa310b940ecc64a60e098c493da0ac9dfce74aaec8996f52b03f6cfcd90d->enter($__internal_4c2eaa310b940ecc64a60e098c493da0ac9dfce74aaec8996f52b03f6cfcd90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4c2eaa310b940ecc64a60e098c493da0ac9dfce74aaec8996f52b03f6cfcd90d->leave($__internal_4c2eaa310b940ecc64a60e098c493da0ac9dfce74aaec8996f52b03f6cfcd90d_prof);

        
        $__internal_051c86537cfd38763e14fe6e16ffe4f54544c7a65ff4882c75718294d98fc577->leave($__internal_051c86537cfd38763e14fe6e16ffe4f54544c7a65ff4882c75718294d98fc577_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
