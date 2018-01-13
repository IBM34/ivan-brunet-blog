<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ad70f29241a284d520f0e5bbb34960fdaa6a9a50373849a457b5cb36d38425ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_7fbb32f63ce0142a7e9e3a501abb90d60e8a9b35271e02b8d7436a48db052d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbb32f63ce0142a7e9e3a501abb90d60e8a9b35271e02b8d7436a48db052d5b->enter($__internal_7fbb32f63ce0142a7e9e3a501abb90d60e8a9b35271e02b8d7436a48db052d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a3f5a45e2d350f394ac107a9fcbe37ccc140f52547608e0d74018617ac245c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f5a45e2d350f394ac107a9fcbe37ccc140f52547608e0d74018617ac245c61->enter($__internal_a3f5a45e2d350f394ac107a9fcbe37ccc140f52547608e0d74018617ac245c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbb32f63ce0142a7e9e3a501abb90d60e8a9b35271e02b8d7436a48db052d5b->leave($__internal_7fbb32f63ce0142a7e9e3a501abb90d60e8a9b35271e02b8d7436a48db052d5b_prof);

        
        $__internal_a3f5a45e2d350f394ac107a9fcbe37ccc140f52547608e0d74018617ac245c61->leave($__internal_a3f5a45e2d350f394ac107a9fcbe37ccc140f52547608e0d74018617ac245c61_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4033cf9476083dfa638d9c539b8713c4990118a9a5ec52b43f4626bf8c6dd772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4033cf9476083dfa638d9c539b8713c4990118a9a5ec52b43f4626bf8c6dd772->enter($__internal_4033cf9476083dfa638d9c539b8713c4990118a9a5ec52b43f4626bf8c6dd772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e1bb633f7673672e8bffa566c9642bf60b531f372a491a6203c49befaad0849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1bb633f7673672e8bffa566c9642bf60b531f372a491a6203c49befaad0849->enter($__internal_4e1bb633f7673672e8bffa566c9642bf60b531f372a491a6203c49befaad0849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4e1bb633f7673672e8bffa566c9642bf60b531f372a491a6203c49befaad0849->leave($__internal_4e1bb633f7673672e8bffa566c9642bf60b531f372a491a6203c49befaad0849_prof);

        
        $__internal_4033cf9476083dfa638d9c539b8713c4990118a9a5ec52b43f4626bf8c6dd772->leave($__internal_4033cf9476083dfa638d9c539b8713c4990118a9a5ec52b43f4626bf8c6dd772_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}

", "@FOSUser/Security/login.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
