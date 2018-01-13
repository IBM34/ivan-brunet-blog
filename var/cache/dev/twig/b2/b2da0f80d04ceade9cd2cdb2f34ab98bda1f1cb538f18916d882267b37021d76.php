<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6e155d1bc5b31ffd99695883b50e75a1ff256bd74f087dd6cf9c4cf88e6c1398 extends Twig_Template
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
        $__internal_9a589a5eaabf3b28a94d1fd17799e1dff89b78361510fb3bc3c5493129dc003e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a589a5eaabf3b28a94d1fd17799e1dff89b78361510fb3bc3c5493129dc003e->enter($__internal_9a589a5eaabf3b28a94d1fd17799e1dff89b78361510fb3bc3c5493129dc003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_97830edb2aab41e762e3fcc412a1dada080455e39ae00bdcf29c9880490bfe37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97830edb2aab41e762e3fcc412a1dada080455e39ae00bdcf29c9880490bfe37->enter($__internal_97830edb2aab41e762e3fcc412a1dada080455e39ae00bdcf29c9880490bfe37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9a589a5eaabf3b28a94d1fd17799e1dff89b78361510fb3bc3c5493129dc003e->leave($__internal_9a589a5eaabf3b28a94d1fd17799e1dff89b78361510fb3bc3c5493129dc003e_prof);

        
        $__internal_97830edb2aab41e762e3fcc412a1dada080455e39ae00bdcf29c9880490bfe37->leave($__internal_97830edb2aab41e762e3fcc412a1dada080455e39ae00bdcf29c9880490bfe37_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6705b95076314bf16c5c7ec63c86b82fa2f14e7b521632131d9890c9affa97fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6705b95076314bf16c5c7ec63c86b82fa2f14e7b521632131d9890c9affa97fe->enter($__internal_6705b95076314bf16c5c7ec63c86b82fa2f14e7b521632131d9890c9affa97fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3a24bcee2a14fdef4ad104b85d20b349f36fef27d9c4c9ad4535c27e0d95e74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a24bcee2a14fdef4ad104b85d20b349f36fef27d9c4c9ad4535c27e0d95e74a->enter($__internal_3a24bcee2a14fdef4ad104b85d20b349f36fef27d9c4c9ad4535c27e0d95e74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3a24bcee2a14fdef4ad104b85d20b349f36fef27d9c4c9ad4535c27e0d95e74a->leave($__internal_3a24bcee2a14fdef4ad104b85d20b349f36fef27d9c4c9ad4535c27e0d95e74a_prof);

        
        $__internal_6705b95076314bf16c5c7ec63c86b82fa2f14e7b521632131d9890c9affa97fe->leave($__internal_6705b95076314bf16c5c7ec63c86b82fa2f14e7b521632131d9890c9affa97fe_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_65e2c71a59ad6e74248c041ab81739fe1f1422db0d71a0394f467998da923da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e2c71a59ad6e74248c041ab81739fe1f1422db0d71a0394f467998da923da9->enter($__internal_65e2c71a59ad6e74248c041ab81739fe1f1422db0d71a0394f467998da923da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bc666560c8443c9330128f362068f91da2cbe64ef7f9428affd3fd821786f65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc666560c8443c9330128f362068f91da2cbe64ef7f9428affd3fd821786f65b->enter($__internal_bc666560c8443c9330128f362068f91da2cbe64ef7f9428affd3fd821786f65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bc666560c8443c9330128f362068f91da2cbe64ef7f9428affd3fd821786f65b->leave($__internal_bc666560c8443c9330128f362068f91da2cbe64ef7f9428affd3fd821786f65b_prof);

        
        $__internal_65e2c71a59ad6e74248c041ab81739fe1f1422db0d71a0394f467998da923da9->leave($__internal_65e2c71a59ad6e74248c041ab81739fe1f1422db0d71a0394f467998da923da9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bf435026e3902898e6756821577bebfe2f93a981ea3a04496425e6e0c2ee86d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf435026e3902898e6756821577bebfe2f93a981ea3a04496425e6e0c2ee86d8->enter($__internal_bf435026e3902898e6756821577bebfe2f93a981ea3a04496425e6e0c2ee86d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b3c0899456ec7d5b67c41a00abe1079a885ea1adafe90c65f5ce46985787d6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c0899456ec7d5b67c41a00abe1079a885ea1adafe90c65f5ce46985787d6ba->enter($__internal_b3c0899456ec7d5b67c41a00abe1079a885ea1adafe90c65f5ce46985787d6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b3c0899456ec7d5b67c41a00abe1079a885ea1adafe90c65f5ce46985787d6ba->leave($__internal_b3c0899456ec7d5b67c41a00abe1079a885ea1adafe90c65f5ce46985787d6ba_prof);

        
        $__internal_bf435026e3902898e6756821577bebfe2f93a981ea3a04496425e6e0c2ee86d8->leave($__internal_bf435026e3902898e6756821577bebfe2f93a981ea3a04496425e6e0c2ee86d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
