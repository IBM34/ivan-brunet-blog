<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c85e1c6dc6cd7fd4d29b0657daf3d563e349ecb6f696cf03a9b48e4804332a5 extends Twig_Template
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
        $__internal_5a5c606f3c8760ed3f79d4f62172c11cb78d64633582b49ee83e2298938a047d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5c606f3c8760ed3f79d4f62172c11cb78d64633582b49ee83e2298938a047d->enter($__internal_5a5c606f3c8760ed3f79d4f62172c11cb78d64633582b49ee83e2298938a047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fb7dcac97897ad7591e7a12bb2ae28d733ee9a28e085646c310a7fd6c688a3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7dcac97897ad7591e7a12bb2ae28d733ee9a28e085646c310a7fd6c688a3a8->enter($__internal_fb7dcac97897ad7591e7a12bb2ae28d733ee9a28e085646c310a7fd6c688a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5a5c606f3c8760ed3f79d4f62172c11cb78d64633582b49ee83e2298938a047d->leave($__internal_5a5c606f3c8760ed3f79d4f62172c11cb78d64633582b49ee83e2298938a047d_prof);

        
        $__internal_fb7dcac97897ad7591e7a12bb2ae28d733ee9a28e085646c310a7fd6c688a3a8->leave($__internal_fb7dcac97897ad7591e7a12bb2ae28d733ee9a28e085646c310a7fd6c688a3a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
