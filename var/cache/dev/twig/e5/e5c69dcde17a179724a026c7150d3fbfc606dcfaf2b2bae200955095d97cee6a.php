<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_89bcc38f1b50c116ab7b501d699005d089ea9609aaa3d5c76284b31fc2c70b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_29b9c33d9c06768e6e9ef5e9edd49fa5426c3f9f6882453939bf699800793d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b9c33d9c06768e6e9ef5e9edd49fa5426c3f9f6882453939bf699800793d6e->enter($__internal_29b9c33d9c06768e6e9ef5e9edd49fa5426c3f9f6882453939bf699800793d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_bb72a6860db8b982d9eb5cf0d5ca09ef63185e78fc2ef54408d977f3f7bba085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb72a6860db8b982d9eb5cf0d5ca09ef63185e78fc2ef54408d977f3f7bba085->enter($__internal_bb72a6860db8b982d9eb5cf0d5ca09ef63185e78fc2ef54408d977f3f7bba085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b9c33d9c06768e6e9ef5e9edd49fa5426c3f9f6882453939bf699800793d6e->leave($__internal_29b9c33d9c06768e6e9ef5e9edd49fa5426c3f9f6882453939bf699800793d6e_prof);

        
        $__internal_bb72a6860db8b982d9eb5cf0d5ca09ef63185e78fc2ef54408d977f3f7bba085->leave($__internal_bb72a6860db8b982d9eb5cf0d5ca09ef63185e78fc2ef54408d977f3f7bba085_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6033f2126c4b07b5edfb9eed11723607a3d4787738fe60b830d9112cf9afc092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6033f2126c4b07b5edfb9eed11723607a3d4787738fe60b830d9112cf9afc092->enter($__internal_6033f2126c4b07b5edfb9eed11723607a3d4787738fe60b830d9112cf9afc092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_43890debb80342b723aa048204f799dfcec489ca203f8944e7ff842a15f82a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43890debb80342b723aa048204f799dfcec489ca203f8944e7ff842a15f82a90->enter($__internal_43890debb80342b723aa048204f799dfcec489ca203f8944e7ff842a15f82a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_43890debb80342b723aa048204f799dfcec489ca203f8944e7ff842a15f82a90->leave($__internal_43890debb80342b723aa048204f799dfcec489ca203f8944e7ff842a15f82a90_prof);

        
        $__internal_6033f2126c4b07b5edfb9eed11723607a3d4787738fe60b830d9112cf9afc092->leave($__internal_6033f2126c4b07b5edfb9eed11723607a3d4787738fe60b830d9112cf9afc092_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
