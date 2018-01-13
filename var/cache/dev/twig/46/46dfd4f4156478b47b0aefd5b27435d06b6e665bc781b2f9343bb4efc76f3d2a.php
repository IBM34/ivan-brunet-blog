<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96d013c5c9e2e84285578dc4f333439dd7f8ab6a84382d28f8ca06bb9c8443f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d013c5c9e2e84285578dc4f333439dd7f8ab6a84382d28f8ca06bb9c8443f1->enter($__internal_96d013c5c9e2e84285578dc4f333439dd7f8ab6a84382d28f8ca06bb9c8443f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e49daa5461268dd32fc5d7bc4b0fa7c063f57911b7cfe87ad08b55d5dc46346a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49daa5461268dd32fc5d7bc4b0fa7c063f57911b7cfe87ad08b55d5dc46346a->enter($__internal_e49daa5461268dd32fc5d7bc4b0fa7c063f57911b7cfe87ad08b55d5dc46346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_96d013c5c9e2e84285578dc4f333439dd7f8ab6a84382d28f8ca06bb9c8443f1->leave($__internal_96d013c5c9e2e84285578dc4f333439dd7f8ab6a84382d28f8ca06bb9c8443f1_prof);

        
        $__internal_e49daa5461268dd32fc5d7bc4b0fa7c063f57911b7cfe87ad08b55d5dc46346a->leave($__internal_e49daa5461268dd32fc5d7bc4b0fa7c063f57911b7cfe87ad08b55d5dc46346a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29be01454c3a1a12d3d11cbae16939a25b69a6a6c6cc6ff854a3c6e039d6bfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29be01454c3a1a12d3d11cbae16939a25b69a6a6c6cc6ff854a3c6e039d6bfcb->enter($__internal_29be01454c3a1a12d3d11cbae16939a25b69a6a6c6cc6ff854a3c6e039d6bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf0ebac9ed6ffcc4b565b6d886d21dbc40efb458ae59bc27b074a1c96a164538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0ebac9ed6ffcc4b565b6d886d21dbc40efb458ae59bc27b074a1c96a164538->enter($__internal_cf0ebac9ed6ffcc4b565b6d886d21dbc40efb458ae59bc27b074a1c96a164538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf0ebac9ed6ffcc4b565b6d886d21dbc40efb458ae59bc27b074a1c96a164538->leave($__internal_cf0ebac9ed6ffcc4b565b6d886d21dbc40efb458ae59bc27b074a1c96a164538_prof);

        
        $__internal_29be01454c3a1a12d3d11cbae16939a25b69a6a6c6cc6ff854a3c6e039d6bfcb->leave($__internal_29be01454c3a1a12d3d11cbae16939a25b69a6a6c6cc6ff854a3c6e039d6bfcb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ae27d7f1b4931cb95016e1068fe4be7ec255e703a78e3c2ba65c761e03780b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae27d7f1b4931cb95016e1068fe4be7ec255e703a78e3c2ba65c761e03780b2->enter($__internal_0ae27d7f1b4931cb95016e1068fe4be7ec255e703a78e3c2ba65c761e03780b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb78c76d9965a3edb70df14a7ecc15bf3174479df0bf20b8315d47555104e75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb78c76d9965a3edb70df14a7ecc15bf3174479df0bf20b8315d47555104e75f->enter($__internal_eb78c76d9965a3edb70df14a7ecc15bf3174479df0bf20b8315d47555104e75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_eb78c76d9965a3edb70df14a7ecc15bf3174479df0bf20b8315d47555104e75f->leave($__internal_eb78c76d9965a3edb70df14a7ecc15bf3174479df0bf20b8315d47555104e75f_prof);

        
        $__internal_0ae27d7f1b4931cb95016e1068fe4be7ec255e703a78e3c2ba65c761e03780b2->leave($__internal_0ae27d7f1b4931cb95016e1068fe4be7ec255e703a78e3c2ba65c761e03780b2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3749e751ba4a93e51e61d6654982b9ccc4ed8b5d835f6e7686c8e52eb2d3b924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3749e751ba4a93e51e61d6654982b9ccc4ed8b5d835f6e7686c8e52eb2d3b924->enter($__internal_3749e751ba4a93e51e61d6654982b9ccc4ed8b5d835f6e7686c8e52eb2d3b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_555e225f89456378754bed8af3e098288ab6e337c80f0fb083802fcbd2da9338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555e225f89456378754bed8af3e098288ab6e337c80f0fb083802fcbd2da9338->enter($__internal_555e225f89456378754bed8af3e098288ab6e337c80f0fb083802fcbd2da9338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_555e225f89456378754bed8af3e098288ab6e337c80f0fb083802fcbd2da9338->leave($__internal_555e225f89456378754bed8af3e098288ab6e337c80f0fb083802fcbd2da9338_prof);

        
        $__internal_3749e751ba4a93e51e61d6654982b9ccc4ed8b5d835f6e7686c8e52eb2d3b924->leave($__internal_3749e751ba4a93e51e61d6654982b9ccc4ed8b5d835f6e7686c8e52eb2d3b924_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
