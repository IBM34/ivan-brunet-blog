<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3cfca3f1f39c6b5fd6064242187418d3184785d48208d81d02d5a0c20b8833a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_36e727411320edf1827b84ad12a6a6ed18dd8e18a57563110b46281d67386df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e727411320edf1827b84ad12a6a6ed18dd8e18a57563110b46281d67386df7->enter($__internal_36e727411320edf1827b84ad12a6a6ed18dd8e18a57563110b46281d67386df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_1158357ba8c3234934728237ac07a77ac470708aca5aff5f0836b5786ed4917a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1158357ba8c3234934728237ac07a77ac470708aca5aff5f0836b5786ed4917a->enter($__internal_1158357ba8c3234934728237ac07a77ac470708aca5aff5f0836b5786ed4917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e727411320edf1827b84ad12a6a6ed18dd8e18a57563110b46281d67386df7->leave($__internal_36e727411320edf1827b84ad12a6a6ed18dd8e18a57563110b46281d67386df7_prof);

        
        $__internal_1158357ba8c3234934728237ac07a77ac470708aca5aff5f0836b5786ed4917a->leave($__internal_1158357ba8c3234934728237ac07a77ac470708aca5aff5f0836b5786ed4917a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2faa67e4c6c1bae2c791b4933dc66203d2e0244f4224253e4ac93267bad51f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faa67e4c6c1bae2c791b4933dc66203d2e0244f4224253e4ac93267bad51f98->enter($__internal_2faa67e4c6c1bae2c791b4933dc66203d2e0244f4224253e4ac93267bad51f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21a896780db20f3dfb00b731bd72f6527fad3eac4639ac06639db14695063ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a896780db20f3dfb00b731bd72f6527fad3eac4639ac06639db14695063ef8->enter($__internal_21a896780db20f3dfb00b731bd72f6527fad3eac4639ac06639db14695063ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_21a896780db20f3dfb00b731bd72f6527fad3eac4639ac06639db14695063ef8->leave($__internal_21a896780db20f3dfb00b731bd72f6527fad3eac4639ac06639db14695063ef8_prof);

        
        $__internal_2faa67e4c6c1bae2c791b4933dc66203d2e0244f4224253e4ac93267bad51f98->leave($__internal_2faa67e4c6c1bae2c791b4933dc66203d2e0244f4224253e4ac93267bad51f98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
