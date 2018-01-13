<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_e4f21be0b537687b462344c26fae4a0146015e8ff2811c75fde9bd7e5f0ebf83 extends Twig_Template
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
        $__internal_5c7eb59d742de8717b0ad7dee1632926242b6bfd8bf465ae29033998acf4c17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7eb59d742de8717b0ad7dee1632926242b6bfd8bf465ae29033998acf4c17c->enter($__internal_5c7eb59d742de8717b0ad7dee1632926242b6bfd8bf465ae29033998acf4c17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_1ff8680396444571feb9eb22573a129e86435755d4b776120644e0c4ebbe46b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff8680396444571feb9eb22573a129e86435755d4b776120644e0c4ebbe46b2->enter($__internal_1ff8680396444571feb9eb22573a129e86435755d4b776120644e0c4ebbe46b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email "));
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "    

";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d'utilisateur "));
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
   
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe "));
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "

";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmez le mot de passe "));
        echo "
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "

<br>
    <div>
        <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
    </div>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5c7eb59d742de8717b0ad7dee1632926242b6bfd8bf465ae29033998acf4c17c->leave($__internal_5c7eb59d742de8717b0ad7dee1632926242b6bfd8bf465ae29033998acf4c17c_prof);

        
        $__internal_1ff8680396444571feb9eb22573a129e86435755d4b776120644e0c4ebbe46b2->leave($__internal_1ff8680396444571feb9eb22573a129e86435755d4b776120644e0c4ebbe46b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  80 => 19,  76 => 18,  72 => 17,  67 => 15,  63 => 14,  59 => 13,  54 => 11,  50 => 10,  46 => 9,  41 => 7,  37 => 6,  33 => 5,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

{{ form_errors(form.email) }}
{{ form_label(form.email, \"Email \") }}
{{ form_widget(form.email) }}    

{{ form_errors(form.username) }}
{{ form_label(form.username, \"Nom d'utilisateur \") }}
{{ form_widget(form.username) }}
   
{{ form_errors(form.plainPassword.first) }}
{{ form_label(form.plainPassword.first, \"Mot de passe \") }}
{{ form_widget(form.plainPassword.first) }}

{{ form_errors(form.plainPassword.second) }}
{{ form_label(form.plainPassword.second, \"Confirmez le mot de passe \") }}
{{ form_widget(form.plainPassword.second) }}

<br>
    <div>
        <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
