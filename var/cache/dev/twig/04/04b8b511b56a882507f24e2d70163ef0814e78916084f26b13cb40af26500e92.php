<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_706f63993165aeb7fe0f7f56c8ae4cdd630aed32213a2f0dfa3da6fe08a2fcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706f63993165aeb7fe0f7f56c8ae4cdd630aed32213a2f0dfa3da6fe08a2fcdb->enter($__internal_706f63993165aeb7fe0f7f56c8ae4cdd630aed32213a2f0dfa3da6fe08a2fcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5814401a4c8337a807d605065d8b3b288171a996a55a29f3bbe0713d6d94d581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5814401a4c8337a807d605065d8b3b288171a996a55a29f3bbe0713d6d94d581->enter($__internal_5814401a4c8337a807d605065d8b3b288171a996a55a29f3bbe0713d6d94d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_706f63993165aeb7fe0f7f56c8ae4cdd630aed32213a2f0dfa3da6fe08a2fcdb->leave($__internal_706f63993165aeb7fe0f7f56c8ae4cdd630aed32213a2f0dfa3da6fe08a2fcdb_prof);

        
        $__internal_5814401a4c8337a807d605065d8b3b288171a996a55a29f3bbe0713d6d94d581->leave($__internal_5814401a4c8337a807d605065d8b3b288171a996a55a29f3bbe0713d6d94d581_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e26562722233d42cf300fcc74939bf3bf94a57384c62e3b931b8f856888da019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26562722233d42cf300fcc74939bf3bf94a57384c62e3b931b8f856888da019->enter($__internal_e26562722233d42cf300fcc74939bf3bf94a57384c62e3b931b8f856888da019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bebe0b3b54a61f25bffe81add179e83ce69492922ee5490ef4d34aead4e199f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bebe0b3b54a61f25bffe81add179e83ce69492922ee5490ef4d34aead4e199f->enter($__internal_3bebe0b3b54a61f25bffe81add179e83ce69492922ee5490ef4d34aead4e199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3bebe0b3b54a61f25bffe81add179e83ce69492922ee5490ef4d34aead4e199f->leave($__internal_3bebe0b3b54a61f25bffe81add179e83ce69492922ee5490ef4d34aead4e199f_prof);

        
        $__internal_e26562722233d42cf300fcc74939bf3bf94a57384c62e3b931b8f856888da019->leave($__internal_e26562722233d42cf300fcc74939bf3bf94a57384c62e3b931b8f856888da019_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
