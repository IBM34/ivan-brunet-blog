<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_30e6f5dabba7218c68a7358e724cdc7dd16b0b78cc49c06872dff5099331c235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_10e06c607f2aedbcf165a6e942d25d55ab5062844298e9355b059e578ebff41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e06c607f2aedbcf165a6e942d25d55ab5062844298e9355b059e578ebff41d->enter($__internal_10e06c607f2aedbcf165a6e942d25d55ab5062844298e9355b059e578ebff41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_1ce67531b7c0c679ed3f106913c67bde24fae83fc863a31def9f76a640248f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce67531b7c0c679ed3f106913c67bde24fae83fc863a31def9f76a640248f6b->enter($__internal_1ce67531b7c0c679ed3f106913c67bde24fae83fc863a31def9f76a640248f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e06c607f2aedbcf165a6e942d25d55ab5062844298e9355b059e578ebff41d->leave($__internal_10e06c607f2aedbcf165a6e942d25d55ab5062844298e9355b059e578ebff41d_prof);

        
        $__internal_1ce67531b7c0c679ed3f106913c67bde24fae83fc863a31def9f76a640248f6b->leave($__internal_1ce67531b7c0c679ed3f106913c67bde24fae83fc863a31def9f76a640248f6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7203385281937c321105cae01ab16c3b0683e585a73a4e151b4aef16584d8977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7203385281937c321105cae01ab16c3b0683e585a73a4e151b4aef16584d8977->enter($__internal_7203385281937c321105cae01ab16c3b0683e585a73a4e151b4aef16584d8977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f020a11068dff3df5d358d78cf813bedcfc452945aa35c2efa8cc61b8ec0ba85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f020a11068dff3df5d358d78cf813bedcfc452945aa35c2efa8cc61b8ec0ba85->enter($__internal_f020a11068dff3df5d358d78cf813bedcfc452945aa35c2efa8cc61b8ec0ba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f020a11068dff3df5d358d78cf813bedcfc452945aa35c2efa8cc61b8ec0ba85->leave($__internal_f020a11068dff3df5d358d78cf813bedcfc452945aa35c2efa8cc61b8ec0ba85_prof);

        
        $__internal_7203385281937c321105cae01ab16c3b0683e585a73a4e151b4aef16584d8977->leave($__internal_7203385281937c321105cae01ab16c3b0683e585a73a4e151b4aef16584d8977_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
