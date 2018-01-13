<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_440052636673501027f2ccee8006eb2f949d3bfff4de277fc05e94b3b877842d extends Twig_Template
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
        $__internal_844e4ff16751ae09021976a80c856f823138d236b848d4b89f81061b2a983b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844e4ff16751ae09021976a80c856f823138d236b848d4b89f81061b2a983b4d->enter($__internal_844e4ff16751ae09021976a80c856f823138d236b848d4b89f81061b2a983b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4084847a2fed0b713ee1249e33353f437ebb49aead6df178ea7dd9be33424a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4084847a2fed0b713ee1249e33353f437ebb49aead6df178ea7dd9be33424a60->enter($__internal_4084847a2fed0b713ee1249e33353f437ebb49aead6df178ea7dd9be33424a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_844e4ff16751ae09021976a80c856f823138d236b848d4b89f81061b2a983b4d->leave($__internal_844e4ff16751ae09021976a80c856f823138d236b848d4b89f81061b2a983b4d_prof);

        
        $__internal_4084847a2fed0b713ee1249e33353f437ebb49aead6df178ea7dd9be33424a60->leave($__internal_4084847a2fed0b713ee1249e33353f437ebb49aead6df178ea7dd9be33424a60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
