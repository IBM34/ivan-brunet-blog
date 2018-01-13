<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ad0e79979de17229ef249ab92e10cdb64516fb1a031a9e76e64f896f848eb5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86fd3f676360ddfdc1102fa84fc92e5d4289aa975d6b2b8cbefa34567c3bc933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fd3f676360ddfdc1102fa84fc92e5d4289aa975d6b2b8cbefa34567c3bc933->enter($__internal_86fd3f676360ddfdc1102fa84fc92e5d4289aa975d6b2b8cbefa34567c3bc933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_463b4a40c425d0afa22c9ca5dca34365ef72d6af575f5b82e566558bed27fe48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463b4a40c425d0afa22c9ca5dca34365ef72d6af575f5b82e566558bed27fe48->enter($__internal_463b4a40c425d0afa22c9ca5dca34365ef72d6af575f5b82e566558bed27fe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_86fd3f676360ddfdc1102fa84fc92e5d4289aa975d6b2b8cbefa34567c3bc933->leave($__internal_86fd3f676360ddfdc1102fa84fc92e5d4289aa975d6b2b8cbefa34567c3bc933_prof);

        
        $__internal_463b4a40c425d0afa22c9ca5dca34365ef72d6af575f5b82e566558bed27fe48->leave($__internal_463b4a40c425d0afa22c9ca5dca34365ef72d6af575f5b82e566558bed27fe48_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2dcdb8873dbe89f23ef6cc53eace3759a2930f6e84314e1db9917dc601fc1c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcdb8873dbe89f23ef6cc53eace3759a2930f6e84314e1db9917dc601fc1c09->enter($__internal_2dcdb8873dbe89f23ef6cc53eace3759a2930f6e84314e1db9917dc601fc1c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_744cb8f0112f418938bba21eb84cc39a2493ab6aa3709aba82fdf18cbe521682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744cb8f0112f418938bba21eb84cc39a2493ab6aa3709aba82fdf18cbe521682->enter($__internal_744cb8f0112f418938bba21eb84cc39a2493ab6aa3709aba82fdf18cbe521682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_744cb8f0112f418938bba21eb84cc39a2493ab6aa3709aba82fdf18cbe521682->leave($__internal_744cb8f0112f418938bba21eb84cc39a2493ab6aa3709aba82fdf18cbe521682_prof);

        
        $__internal_2dcdb8873dbe89f23ef6cc53eace3759a2930f6e84314e1db9917dc601fc1c09->leave($__internal_2dcdb8873dbe89f23ef6cc53eace3759a2930f6e84314e1db9917dc601fc1c09_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_16c1f4c85193f293d408fa5a7d52617ef05f43cde54daf1a304a379a3555b62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c1f4c85193f293d408fa5a7d52617ef05f43cde54daf1a304a379a3555b62b->enter($__internal_16c1f4c85193f293d408fa5a7d52617ef05f43cde54daf1a304a379a3555b62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1a9100de4a7cae86e35949e0e49e420e416f9e307b462e331a6a70af258ff811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9100de4a7cae86e35949e0e49e420e416f9e307b462e331a6a70af258ff811->enter($__internal_1a9100de4a7cae86e35949e0e49e420e416f9e307b462e331a6a70af258ff811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1a9100de4a7cae86e35949e0e49e420e416f9e307b462e331a6a70af258ff811->leave($__internal_1a9100de4a7cae86e35949e0e49e420e416f9e307b462e331a6a70af258ff811_prof);

        
        $__internal_16c1f4c85193f293d408fa5a7d52617ef05f43cde54daf1a304a379a3555b62b->leave($__internal_16c1f4c85193f293d408fa5a7d52617ef05f43cde54daf1a304a379a3555b62b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f23ba4de031cfe5f96bb5385f1da9d57610e6be98d4de42e1f76c00055615e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23ba4de031cfe5f96bb5385f1da9d57610e6be98d4de42e1f76c00055615e7b->enter($__internal_f23ba4de031cfe5f96bb5385f1da9d57610e6be98d4de42e1f76c00055615e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_589a1f0b88bb5bf41c5fef570bbe6d3b53c47b78f68db05eb47c6612163e893d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589a1f0b88bb5bf41c5fef570bbe6d3b53c47b78f68db05eb47c6612163e893d->enter($__internal_589a1f0b88bb5bf41c5fef570bbe6d3b53c47b78f68db05eb47c6612163e893d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_589a1f0b88bb5bf41c5fef570bbe6d3b53c47b78f68db05eb47c6612163e893d->leave($__internal_589a1f0b88bb5bf41c5fef570bbe6d3b53c47b78f68db05eb47c6612163e893d_prof);

        
        $__internal_f23ba4de031cfe5f96bb5385f1da9d57610e6be98d4de42e1f76c00055615e7b->leave($__internal_f23ba4de031cfe5f96bb5385f1da9d57610e6be98d4de42e1f76c00055615e7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
