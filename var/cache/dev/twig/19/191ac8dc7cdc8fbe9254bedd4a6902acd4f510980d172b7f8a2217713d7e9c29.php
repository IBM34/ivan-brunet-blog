<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_db99e19ac4f3d5a1374080ad890ae5e1df4149202583ca516fce37bd19703416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_6cbcc0d43ead24f59f387fece55480d46c938255ed4149b870ffd94f427e8eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbcc0d43ead24f59f387fece55480d46c938255ed4149b870ffd94f427e8eca->enter($__internal_6cbcc0d43ead24f59f387fece55480d46c938255ed4149b870ffd94f427e8eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_3dd9757a1a8dc9ed0e7a51d027bfaf3fb4f878d9b1037e6d68cc0cb9a969af44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd9757a1a8dc9ed0e7a51d027bfaf3fb4f878d9b1037e6d68cc0cb9a969af44->enter($__internal_3dd9757a1a8dc9ed0e7a51d027bfaf3fb4f878d9b1037e6d68cc0cb9a969af44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cbcc0d43ead24f59f387fece55480d46c938255ed4149b870ffd94f427e8eca->leave($__internal_6cbcc0d43ead24f59f387fece55480d46c938255ed4149b870ffd94f427e8eca_prof);

        
        $__internal_3dd9757a1a8dc9ed0e7a51d027bfaf3fb4f878d9b1037e6d68cc0cb9a969af44->leave($__internal_3dd9757a1a8dc9ed0e7a51d027bfaf3fb4f878d9b1037e6d68cc0cb9a969af44_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f73bb55ace8b26dd8869411ebb976d211e3054d7682421ed288da70363e855e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f73bb55ace8b26dd8869411ebb976d211e3054d7682421ed288da70363e855e->enter($__internal_2f73bb55ace8b26dd8869411ebb976d211e3054d7682421ed288da70363e855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ca9d264695482897a83287abd458d9639e5992a38304ed887c850e627ae4a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca9d264695482897a83287abd458d9639e5992a38304ed887c850e627ae4a77->enter($__internal_6ca9d264695482897a83287abd458d9639e5992a38304ed887c850e627ae4a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6ca9d264695482897a83287abd458d9639e5992a38304ed887c850e627ae4a77->leave($__internal_6ca9d264695482897a83287abd458d9639e5992a38304ed887c850e627ae4a77_prof);

        
        $__internal_2f73bb55ace8b26dd8869411ebb976d211e3054d7682421ed288da70363e855e->leave($__internal_2f73bb55ace8b26dd8869411ebb976d211e3054d7682421ed288da70363e855e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
