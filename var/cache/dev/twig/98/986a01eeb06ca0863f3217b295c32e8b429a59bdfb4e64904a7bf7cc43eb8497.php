<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_9c3b0f256b5f71d06861ea597456d03e1e2b4f3d3d06a55bff45282928da6414 extends Twig_Template
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
        $__internal_53726000e1f92774b54e6598f60ee87db69a9a43de428202acca8963c7a10691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53726000e1f92774b54e6598f60ee87db69a9a43de428202acca8963c7a10691->enter($__internal_53726000e1f92774b54e6598f60ee87db69a9a43de428202acca8963c7a10691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_affc516f44091304bf95346ae497277f2aa5b8e2feab4f806207f878688e2e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affc516f44091304bf95346ae497277f2aa5b8e2feab4f806207f878688e2e8b->enter($__internal_affc516f44091304bf95346ae497277f2aa5b8e2feab4f806207f878688e2e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_53726000e1f92774b54e6598f60ee87db69a9a43de428202acca8963c7a10691->leave($__internal_53726000e1f92774b54e6598f60ee87db69a9a43de428202acca8963c7a10691_prof);

        
        $__internal_affc516f44091304bf95346ae497277f2aa5b8e2feab4f806207f878688e2e8b->leave($__internal_affc516f44091304bf95346ae497277f2aa5b8e2feab4f806207f878688e2e8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
