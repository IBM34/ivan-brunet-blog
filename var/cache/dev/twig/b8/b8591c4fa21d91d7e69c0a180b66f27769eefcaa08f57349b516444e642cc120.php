<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac4d899aa45c8e04f11a0a37f3a572a06d5eda37db28656b55197b0a03d66249 extends Twig_Template
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
        $__internal_68fc4f37771f0fa457f037beddb5566757249bc9612c12de1c1f1e409cc58d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fc4f37771f0fa457f037beddb5566757249bc9612c12de1c1f1e409cc58d66->enter($__internal_68fc4f37771f0fa457f037beddb5566757249bc9612c12de1c1f1e409cc58d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_12d2637620022299d9ff0601553501d93a1290867cdaec9c8db307f56ccc7798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d2637620022299d9ff0601553501d93a1290867cdaec9c8db307f56ccc7798->enter($__internal_12d2637620022299d9ff0601553501d93a1290867cdaec9c8db307f56ccc7798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_68fc4f37771f0fa457f037beddb5566757249bc9612c12de1c1f1e409cc58d66->leave($__internal_68fc4f37771f0fa457f037beddb5566757249bc9612c12de1c1f1e409cc58d66_prof);

        
        $__internal_12d2637620022299d9ff0601553501d93a1290867cdaec9c8db307f56ccc7798->leave($__internal_12d2637620022299d9ff0601553501d93a1290867cdaec9c8db307f56ccc7798_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
