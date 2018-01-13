<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_22b1ee51354d38bbec455b13ce2f0c8f15d791a7a7830730ca0c6e67d5856847 extends Twig_Template
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
        $__internal_aad96dbb034c04ff1941fbbaadb3cf75282530531d498ccd8dfeff98351a8301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad96dbb034c04ff1941fbbaadb3cf75282530531d498ccd8dfeff98351a8301->enter($__internal_aad96dbb034c04ff1941fbbaadb3cf75282530531d498ccd8dfeff98351a8301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0dc2a2b3fe610e7d34ed04cc126f9b8e1a46483d879b2a2ce19d5858c47e05c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc2a2b3fe610e7d34ed04cc126f9b8e1a46483d879b2a2ce19d5858c47e05c6->enter($__internal_0dc2a2b3fe610e7d34ed04cc126f9b8e1a46483d879b2a2ce19d5858c47e05c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_aad96dbb034c04ff1941fbbaadb3cf75282530531d498ccd8dfeff98351a8301->leave($__internal_aad96dbb034c04ff1941fbbaadb3cf75282530531d498ccd8dfeff98351a8301_prof);

        
        $__internal_0dc2a2b3fe610e7d34ed04cc126f9b8e1a46483d879b2a2ce19d5858c47e05c6->leave($__internal_0dc2a2b3fe610e7d34ed04cc126f9b8e1a46483d879b2a2ce19d5858c47e05c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
