<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1e6aaf77aebfe4058cd961cb942d68cc7bc7dac5f169b4a5b0e811f401faf3ee extends Twig_Template
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
        $__internal_c9cfd766c2f3f58af71772f77b7650aa0f3bf1fd2521aca22ecef60a66b1bb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cfd766c2f3f58af71772f77b7650aa0f3bf1fd2521aca22ecef60a66b1bb23->enter($__internal_c9cfd766c2f3f58af71772f77b7650aa0f3bf1fd2521aca22ecef60a66b1bb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2dbfc859124af1a2d754aa69c5438584301c808cff3f75edb310b98306300ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbfc859124af1a2d754aa69c5438584301c808cff3f75edb310b98306300ab1->enter($__internal_2dbfc859124af1a2d754aa69c5438584301c808cff3f75edb310b98306300ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c9cfd766c2f3f58af71772f77b7650aa0f3bf1fd2521aca22ecef60a66b1bb23->leave($__internal_c9cfd766c2f3f58af71772f77b7650aa0f3bf1fd2521aca22ecef60a66b1bb23_prof);

        
        $__internal_2dbfc859124af1a2d754aa69c5438584301c808cff3f75edb310b98306300ab1->leave($__internal_2dbfc859124af1a2d754aa69c5438584301c808cff3f75edb310b98306300ab1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
