<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa83498be161242a9f91d6a22df145b34e65dacd1633e3e28a2baeb8081b4468 extends Twig_Template
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
        $__internal_a056c29578ef825122fc7a5f2bc88722058395577b95cd5c7793a3c7801a5cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a056c29578ef825122fc7a5f2bc88722058395577b95cd5c7793a3c7801a5cbe->enter($__internal_a056c29578ef825122fc7a5f2bc88722058395577b95cd5c7793a3c7801a5cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6a8d23d8c7b681d70239d7c0372c75e0df06fe1e2069f3767d6416e665e32f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8d23d8c7b681d70239d7c0372c75e0df06fe1e2069f3767d6416e665e32f83->enter($__internal_6a8d23d8c7b681d70239d7c0372c75e0df06fe1e2069f3767d6416e665e32f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a056c29578ef825122fc7a5f2bc88722058395577b95cd5c7793a3c7801a5cbe->leave($__internal_a056c29578ef825122fc7a5f2bc88722058395577b95cd5c7793a3c7801a5cbe_prof);

        
        $__internal_6a8d23d8c7b681d70239d7c0372c75e0df06fe1e2069f3767d6416e665e32f83->leave($__internal_6a8d23d8c7b681d70239d7c0372c75e0df06fe1e2069f3767d6416e665e32f83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
