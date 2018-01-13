<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d6d80d740d4d7b344b2eb8da919d3b509dbcc3a40032fd758a1a712132bc89bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_acd3e13cba75173c7b26828367ab82457d0b8807393f1b7f5e1551703a083d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd3e13cba75173c7b26828367ab82457d0b8807393f1b7f5e1551703a083d89->enter($__internal_acd3e13cba75173c7b26828367ab82457d0b8807393f1b7f5e1551703a083d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_46ae23255898cb52d9276b83b5929b5b390983a4ba8719f69583bad89ef88703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ae23255898cb52d9276b83b5929b5b390983a4ba8719f69583bad89ef88703->enter($__internal_46ae23255898cb52d9276b83b5929b5b390983a4ba8719f69583bad89ef88703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd3e13cba75173c7b26828367ab82457d0b8807393f1b7f5e1551703a083d89->leave($__internal_acd3e13cba75173c7b26828367ab82457d0b8807393f1b7f5e1551703a083d89_prof);

        
        $__internal_46ae23255898cb52d9276b83b5929b5b390983a4ba8719f69583bad89ef88703->leave($__internal_46ae23255898cb52d9276b83b5929b5b390983a4ba8719f69583bad89ef88703_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_721892557275572ae8c38c764d1019293c03f2ffe8ecd5a301acd6054dfe1d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721892557275572ae8c38c764d1019293c03f2ffe8ecd5a301acd6054dfe1d1d->enter($__internal_721892557275572ae8c38c764d1019293c03f2ffe8ecd5a301acd6054dfe1d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_394a67f62ee4af4f182cac85cdba168ed13c35017df02661c4a84cebba8e9495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394a67f62ee4af4f182cac85cdba168ed13c35017df02661c4a84cebba8e9495->enter($__internal_394a67f62ee4af4f182cac85cdba168ed13c35017df02661c4a84cebba8e9495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_394a67f62ee4af4f182cac85cdba168ed13c35017df02661c4a84cebba8e9495->leave($__internal_394a67f62ee4af4f182cac85cdba168ed13c35017df02661c4a84cebba8e9495_prof);

        
        $__internal_721892557275572ae8c38c764d1019293c03f2ffe8ecd5a301acd6054dfe1d1d->leave($__internal_721892557275572ae8c38c764d1019293c03f2ffe8ecd5a301acd6054dfe1d1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
