<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_24c259d409f1060b859ccec614beed8e152b3be3488d48c545138cfb62df1c7e extends Twig_Template
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
        $__internal_8ed6439f7094a7d50a715b0f5e08b1562a34d793cd5d73b710fb37ff66bf0185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed6439f7094a7d50a715b0f5e08b1562a34d793cd5d73b710fb37ff66bf0185->enter($__internal_8ed6439f7094a7d50a715b0f5e08b1562a34d793cd5d73b710fb37ff66bf0185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_a60bbb5bb00318b5b92015eaa69908aec5134b4dc27b3223f15d17e8e6f22727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60bbb5bb00318b5b92015eaa69908aec5134b4dc27b3223f15d17e8e6f22727->enter($__internal_a60bbb5bb00318b5b92015eaa69908aec5134b4dc27b3223f15d17e8e6f22727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8ed6439f7094a7d50a715b0f5e08b1562a34d793cd5d73b710fb37ff66bf0185->leave($__internal_8ed6439f7094a7d50a715b0f5e08b1562a34d793cd5d73b710fb37ff66bf0185_prof);

        
        $__internal_a60bbb5bb00318b5b92015eaa69908aec5134b4dc27b3223f15d17e8e6f22727->leave($__internal_a60bbb5bb00318b5b92015eaa69908aec5134b4dc27b3223f15d17e8e6f22727_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
