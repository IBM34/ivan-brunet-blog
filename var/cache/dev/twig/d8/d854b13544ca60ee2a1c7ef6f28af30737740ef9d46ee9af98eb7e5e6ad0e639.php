<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0d90cae643f42118fe01b328b06f3f8c4c59a33723a10fb68d3e91e7970d8277 extends Twig_Template
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
        $__internal_1e8a05786a4d7de30c35d93a8c1f04a3dc9bc6ebea1009e4e1de1dda4fc90f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8a05786a4d7de30c35d93a8c1f04a3dc9bc6ebea1009e4e1de1dda4fc90f3e->enter($__internal_1e8a05786a4d7de30c35d93a8c1f04a3dc9bc6ebea1009e4e1de1dda4fc90f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_a61de507ad3c1bea20dc309118d3d79a421f9a2173c0283cc7fed128c9bf9813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61de507ad3c1bea20dc309118d3d79a421f9a2173c0283cc7fed128c9bf9813->enter($__internal_a61de507ad3c1bea20dc309118d3d79a421f9a2173c0283cc7fed128c9bf9813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<center>

<form  action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 10
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 11
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "
    <label for=\"username\"><b>Nom d'utilisateur</b></label><br>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br>

    <label for=\"password\"><b>Mot de passe</b></label><br>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir de moi</label><br><br>

    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" /><br>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Creer un compte</a><br>
</form>

</center>
";
        
        $__internal_1e8a05786a4d7de30c35d93a8c1f04a3dc9bc6ebea1009e4e1de1dda4fc90f3e->leave($__internal_1e8a05786a4d7de30c35d93a8c1f04a3dc9bc6ebea1009e4e1de1dda4fc90f3e_prof);

        
        $__internal_a61de507ad3c1bea20dc309118d3d79a421f9a2173c0283cc7fed128c9bf9813->leave($__internal_a61de507ad3c1bea20dc309118d3d79a421f9a2173c0283cc7fed128c9bf9813_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  57 => 15,  53 => 13,  47 => 11,  45 => 10,  41 => 9,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<center>

<form  action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\"><b>Nom d'utilisateur</b></label><br>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" /><br>

    <label for=\"password\"><b>Mot de passe</b></label><br>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir de moi</label><br><br>

    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" /><br>
    <a href=\"{{ path('fos_user_registration_register') }}\">Creer un compte</a><br>
</form>

</center>
", "@FOSUser/Security/login_content.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
