<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_32e1cd6a4fd28b4c212f41ec9017b63e9bf61f467ab3b915ffad15e6d949c744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_226ac0ffb5d1aece9a8832b02e5d98e2ca1fda1b5d5c1e4ce13bd9a428ee4384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226ac0ffb5d1aece9a8832b02e5d98e2ca1fda1b5d5c1e4ce13bd9a428ee4384->enter($__internal_226ac0ffb5d1aece9a8832b02e5d98e2ca1fda1b5d5c1e4ce13bd9a428ee4384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_d96c123c11731212a8093a09b6c76328dab855499a74f2b2e123068de9625578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96c123c11731212a8093a09b6c76328dab855499a74f2b2e123068de9625578->enter($__internal_d96c123c11731212a8093a09b6c76328dab855499a74f2b2e123068de9625578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_226ac0ffb5d1aece9a8832b02e5d98e2ca1fda1b5d5c1e4ce13bd9a428ee4384->leave($__internal_226ac0ffb5d1aece9a8832b02e5d98e2ca1fda1b5d5c1e4ce13bd9a428ee4384_prof);

        
        $__internal_d96c123c11731212a8093a09b6c76328dab855499a74f2b2e123068de9625578->leave($__internal_d96c123c11731212a8093a09b6c76328dab855499a74f2b2e123068de9625578_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
