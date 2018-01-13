<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_6d7a18a72b3cc617cca8184f0147dae61630c1588bbd6e14f01b68b2adfce8c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_f22ac8d2890b9966df3910ac683908ea8de9de1788164b37b980ea7402119682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22ac8d2890b9966df3910ac683908ea8de9de1788164b37b980ea7402119682->enter($__internal_f22ac8d2890b9966df3910ac683908ea8de9de1788164b37b980ea7402119682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a4704d9e36720fdae7e1cdbc1b4add4bd1c1b1ae016d3983b60c22939468bcf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4704d9e36720fdae7e1cdbc1b4add4bd1c1b1ae016d3983b60c22939468bcf5->enter($__internal_a4704d9e36720fdae7e1cdbc1b4add4bd1c1b1ae016d3983b60c22939468bcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f22ac8d2890b9966df3910ac683908ea8de9de1788164b37b980ea7402119682->leave($__internal_f22ac8d2890b9966df3910ac683908ea8de9de1788164b37b980ea7402119682_prof);

        
        $__internal_a4704d9e36720fdae7e1cdbc1b4add4bd1c1b1ae016d3983b60c22939468bcf5->leave($__internal_a4704d9e36720fdae7e1cdbc1b4add4bd1c1b1ae016d3983b60c22939468bcf5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22e3afd539d9ee5251039bb996ce604b76f79b7ba4e1a609b2eb714caaaeee14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e3afd539d9ee5251039bb996ce604b76f79b7ba4e1a609b2eb714caaaeee14->enter($__internal_22e3afd539d9ee5251039bb996ce604b76f79b7ba4e1a609b2eb714caaaeee14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_72dbb967e94154bcf07106625c287abce88ae8704da110ad1b39cf1ff02c7a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dbb967e94154bcf07106625c287abce88ae8704da110ad1b39cf1ff02c7a50->enter($__internal_72dbb967e94154bcf07106625c287abce88ae8704da110ad1b39cf1ff02c7a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_72dbb967e94154bcf07106625c287abce88ae8704da110ad1b39cf1ff02c7a50->leave($__internal_72dbb967e94154bcf07106625c287abce88ae8704da110ad1b39cf1ff02c7a50_prof);

        
        $__internal_22e3afd539d9ee5251039bb996ce604b76f79b7ba4e1a609b2eb714caaaeee14->leave($__internal_22e3afd539d9ee5251039bb996ce604b76f79b7ba4e1a609b2eb714caaaeee14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
