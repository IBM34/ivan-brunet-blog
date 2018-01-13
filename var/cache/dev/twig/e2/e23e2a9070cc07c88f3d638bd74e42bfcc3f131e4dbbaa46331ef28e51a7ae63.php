<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_22d28760bd247001deb1294b2c9daa41d749783621155ef2d9df872af9062e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_16a1c918fef7ab62af762ce32e43396b6ac10ddc77ad290348c16c4bff445f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a1c918fef7ab62af762ce32e43396b6ac10ddc77ad290348c16c4bff445f22->enter($__internal_16a1c918fef7ab62af762ce32e43396b6ac10ddc77ad290348c16c4bff445f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_a85967e7d886b04dc3d1681b3c63fe13a4f81dc2976454aa1bf3caf6a1e8305c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85967e7d886b04dc3d1681b3c63fe13a4f81dc2976454aa1bf3caf6a1e8305c->enter($__internal_a85967e7d886b04dc3d1681b3c63fe13a4f81dc2976454aa1bf3caf6a1e8305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16a1c918fef7ab62af762ce32e43396b6ac10ddc77ad290348c16c4bff445f22->leave($__internal_16a1c918fef7ab62af762ce32e43396b6ac10ddc77ad290348c16c4bff445f22_prof);

        
        $__internal_a85967e7d886b04dc3d1681b3c63fe13a4f81dc2976454aa1bf3caf6a1e8305c->leave($__internal_a85967e7d886b04dc3d1681b3c63fe13a4f81dc2976454aa1bf3caf6a1e8305c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22c3c0557283d04760531e6caeabb3109d748cba8b38886b25332fc9ad4142b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c3c0557283d04760531e6caeabb3109d748cba8b38886b25332fc9ad4142b0->enter($__internal_22c3c0557283d04760531e6caeabb3109d748cba8b38886b25332fc9ad4142b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ff567354f1bbb91a6b33e694150d8f7b5a50070fa90d3ace8d5dc3f81e8efbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff567354f1bbb91a6b33e694150d8f7b5a50070fa90d3ace8d5dc3f81e8efbb->enter($__internal_3ff567354f1bbb91a6b33e694150d8f7b5a50070fa90d3ace8d5dc3f81e8efbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3ff567354f1bbb91a6b33e694150d8f7b5a50070fa90d3ace8d5dc3f81e8efbb->leave($__internal_3ff567354f1bbb91a6b33e694150d8f7b5a50070fa90d3ace8d5dc3f81e8efbb_prof);

        
        $__internal_22c3c0557283d04760531e6caeabb3109d748cba8b38886b25332fc9ad4142b0->leave($__internal_22c3c0557283d04760531e6caeabb3109d748cba8b38886b25332fc9ad4142b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
