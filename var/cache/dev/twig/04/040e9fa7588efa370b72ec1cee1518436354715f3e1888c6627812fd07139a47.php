<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_bb265317411a8fd2c12a67ef6dc926c0141e10aa32b3f8dec095dbcdd2fa4f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5782624c4507528f57fa3e78da9ce0dac01c7d845e3f8f1479b0a429644d2150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5782624c4507528f57fa3e78da9ce0dac01c7d845e3f8f1479b0a429644d2150->enter($__internal_5782624c4507528f57fa3e78da9ce0dac01c7d845e3f8f1479b0a429644d2150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_270215f7d177927e93b031b552d2e9b286073ae1c293cbe6180c51bcae48bfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270215f7d177927e93b031b552d2e9b286073ae1c293cbe6180c51bcae48bfbb->enter($__internal_270215f7d177927e93b031b552d2e9b286073ae1c293cbe6180c51bcae48bfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5782624c4507528f57fa3e78da9ce0dac01c7d845e3f8f1479b0a429644d2150->leave($__internal_5782624c4507528f57fa3e78da9ce0dac01c7d845e3f8f1479b0a429644d2150_prof);

        
        $__internal_270215f7d177927e93b031b552d2e9b286073ae1c293cbe6180c51bcae48bfbb->leave($__internal_270215f7d177927e93b031b552d2e9b286073ae1c293cbe6180c51bcae48bfbb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4d09d0942b60ddfd15d0b8e96bf22fe1435201be71b30bbae5cd4d3d20918fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d09d0942b60ddfd15d0b8e96bf22fe1435201be71b30bbae5cd4d3d20918fc->enter($__internal_d4d09d0942b60ddfd15d0b8e96bf22fe1435201be71b30bbae5cd4d3d20918fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0bb4ebf87151245e716eb3a1433280e0396aa94472fff70ea7a83837866d6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bb4ebf87151245e716eb3a1433280e0396aa94472fff70ea7a83837866d6e2->enter($__internal_b0bb4ebf87151245e716eb3a1433280e0396aa94472fff70ea7a83837866d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    
";
        
        $__internal_b0bb4ebf87151245e716eb3a1433280e0396aa94472fff70ea7a83837866d6e2->leave($__internal_b0bb4ebf87151245e716eb3a1433280e0396aa94472fff70ea7a83837866d6e2_prof);

        
        $__internal_d4d09d0942b60ddfd15d0b8e96bf22fe1435201be71b30bbae5cd4d3d20918fc->leave($__internal_d4d09d0942b60ddfd15d0b8e96bf22fe1435201be71b30bbae5cd4d3d20918fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
