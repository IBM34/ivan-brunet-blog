<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_39452b50f6ce2f90ce7e24558ebe75bdd1004890a919d234276f6f358c845606 extends Twig_Template
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
        $__internal_a8ace8abd16ce55aa827d3af6f2a018d8963bf3a16b35a60c11bc33dbdbc93ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ace8abd16ce55aa827d3af6f2a018d8963bf3a16b35a60c11bc33dbdbc93ba->enter($__internal_a8ace8abd16ce55aa827d3af6f2a018d8963bf3a16b35a60c11bc33dbdbc93ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d5491fc4fe748fc40dfafa001b85883d9583b13ea3af5af74c91036d88d23781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5491fc4fe748fc40dfafa001b85883d9583b13ea3af5af74c91036d88d23781->enter($__internal_d5491fc4fe748fc40dfafa001b85883d9583b13ea3af5af74c91036d88d23781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a8ace8abd16ce55aa827d3af6f2a018d8963bf3a16b35a60c11bc33dbdbc93ba->leave($__internal_a8ace8abd16ce55aa827d3af6f2a018d8963bf3a16b35a60c11bc33dbdbc93ba_prof);

        
        $__internal_d5491fc4fe748fc40dfafa001b85883d9583b13ea3af5af74c91036d88d23781->leave($__internal_d5491fc4fe748fc40dfafa001b85883d9583b13ea3af5af74c91036d88d23781_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
