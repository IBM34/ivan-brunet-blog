<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_76b8c8d0b4b174bd16a2965bb42a59e196380238281183862680149be75f885c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_bc30b9c5ce579dbd9ec8f8c36a724da671d9b29a88bdcedb7277518699f080fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc30b9c5ce579dbd9ec8f8c36a724da671d9b29a88bdcedb7277518699f080fa->enter($__internal_bc30b9c5ce579dbd9ec8f8c36a724da671d9b29a88bdcedb7277518699f080fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_921b6ed8c961b4784e8f9e791e40d4a5818f47835bcd91922fdea45aeb1cf0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921b6ed8c961b4784e8f9e791e40d4a5818f47835bcd91922fdea45aeb1cf0a9->enter($__internal_921b6ed8c961b4784e8f9e791e40d4a5818f47835bcd91922fdea45aeb1cf0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc30b9c5ce579dbd9ec8f8c36a724da671d9b29a88bdcedb7277518699f080fa->leave($__internal_bc30b9c5ce579dbd9ec8f8c36a724da671d9b29a88bdcedb7277518699f080fa_prof);

        
        $__internal_921b6ed8c961b4784e8f9e791e40d4a5818f47835bcd91922fdea45aeb1cf0a9->leave($__internal_921b6ed8c961b4784e8f9e791e40d4a5818f47835bcd91922fdea45aeb1cf0a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88a508f89fa68f271b1274dfe5ecbc36dcd72f280a3bf7a575b16860a282890f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a508f89fa68f271b1274dfe5ecbc36dcd72f280a3bf7a575b16860a282890f->enter($__internal_88a508f89fa68f271b1274dfe5ecbc36dcd72f280a3bf7a575b16860a282890f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e0cf2ba27828c8651d16370c94eb32c2e7eec8edbe21403609addfbc89ac0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0cf2ba27828c8651d16370c94eb32c2e7eec8edbe21403609addfbc89ac0d9->enter($__internal_5e0cf2ba27828c8651d16370c94eb32c2e7eec8edbe21403609addfbc89ac0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5e0cf2ba27828c8651d16370c94eb32c2e7eec8edbe21403609addfbc89ac0d9->leave($__internal_5e0cf2ba27828c8651d16370c94eb32c2e7eec8edbe21403609addfbc89ac0d9_prof);

        
        $__internal_88a508f89fa68f271b1274dfe5ecbc36dcd72f280a3bf7a575b16860a282890f->leave($__internal_88a508f89fa68f271b1274dfe5ecbc36dcd72f280a3bf7a575b16860a282890f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
