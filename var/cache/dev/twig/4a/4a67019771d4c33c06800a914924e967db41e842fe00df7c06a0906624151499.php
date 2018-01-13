<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e543baabd82485039293820d1b604cf4668ec91d4ee6674c7a7d2f554460215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e543baabd82485039293820d1b604cf4668ec91d4ee6674c7a7d2f554460215->enter($__internal_2e543baabd82485039293820d1b604cf4668ec91d4ee6674c7a7d2f554460215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1a37f1587f95933ee8b6b01549267bd6a90f56c37a0c49939e360d26f2537c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a37f1587f95933ee8b6b01549267bd6a90f56c37a0c49939e360d26f2537c03->enter($__internal_1a37f1587f95933ee8b6b01549267bd6a90f56c37a0c49939e360d26f2537c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e543baabd82485039293820d1b604cf4668ec91d4ee6674c7a7d2f554460215->leave($__internal_2e543baabd82485039293820d1b604cf4668ec91d4ee6674c7a7d2f554460215_prof);

        
        $__internal_1a37f1587f95933ee8b6b01549267bd6a90f56c37a0c49939e360d26f2537c03->leave($__internal_1a37f1587f95933ee8b6b01549267bd6a90f56c37a0c49939e360d26f2537c03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_659fa2e0fea9e045f8556223da4a52b934bc9be66a8c4aea5d9b2c9bd336ffad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659fa2e0fea9e045f8556223da4a52b934bc9be66a8c4aea5d9b2c9bd336ffad->enter($__internal_659fa2e0fea9e045f8556223da4a52b934bc9be66a8c4aea5d9b2c9bd336ffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0fd9f4a2bcdd25667fbf7e0b95a06c27c3fecfa812322e591ecdba4b1f5dbeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd9f4a2bcdd25667fbf7e0b95a06c27c3fecfa812322e591ecdba4b1f5dbeed->enter($__internal_0fd9f4a2bcdd25667fbf7e0b95a06c27c3fecfa812322e591ecdba4b1f5dbeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0fd9f4a2bcdd25667fbf7e0b95a06c27c3fecfa812322e591ecdba4b1f5dbeed->leave($__internal_0fd9f4a2bcdd25667fbf7e0b95a06c27c3fecfa812322e591ecdba4b1f5dbeed_prof);

        
        $__internal_659fa2e0fea9e045f8556223da4a52b934bc9be66a8c4aea5d9b2c9bd336ffad->leave($__internal_659fa2e0fea9e045f8556223da4a52b934bc9be66a8c4aea5d9b2c9bd336ffad_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2891ca2c84cb3dcde70f5d9f040e40b3c8b8f291583a19b5336eee1e96137c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2891ca2c84cb3dcde70f5d9f040e40b3c8b8f291583a19b5336eee1e96137c75->enter($__internal_2891ca2c84cb3dcde70f5d9f040e40b3c8b8f291583a19b5336eee1e96137c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84741cf648f7c2fa4bba9370d909ebcc736d0288323cc1c8da7386ceb48ef00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84741cf648f7c2fa4bba9370d909ebcc736d0288323cc1c8da7386ceb48ef00e->enter($__internal_84741cf648f7c2fa4bba9370d909ebcc736d0288323cc1c8da7386ceb48ef00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_84741cf648f7c2fa4bba9370d909ebcc736d0288323cc1c8da7386ceb48ef00e->leave($__internal_84741cf648f7c2fa4bba9370d909ebcc736d0288323cc1c8da7386ceb48ef00e_prof);

        
        $__internal_2891ca2c84cb3dcde70f5d9f040e40b3c8b8f291583a19b5336eee1e96137c75->leave($__internal_2891ca2c84cb3dcde70f5d9f040e40b3c8b8f291583a19b5336eee1e96137c75_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2606a3679b408153c1ba6eb9734f09f01474fe6173a40149a82de54ec231e32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2606a3679b408153c1ba6eb9734f09f01474fe6173a40149a82de54ec231e32b->enter($__internal_2606a3679b408153c1ba6eb9734f09f01474fe6173a40149a82de54ec231e32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_426c1eda104db2d809dea3f1aadfc5ae413bddbbedb496fc65ea55c3025a7a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426c1eda104db2d809dea3f1aadfc5ae413bddbbedb496fc65ea55c3025a7a2f->enter($__internal_426c1eda104db2d809dea3f1aadfc5ae413bddbbedb496fc65ea55c3025a7a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_426c1eda104db2d809dea3f1aadfc5ae413bddbbedb496fc65ea55c3025a7a2f->leave($__internal_426c1eda104db2d809dea3f1aadfc5ae413bddbbedb496fc65ea55c3025a7a2f_prof);

        
        $__internal_2606a3679b408153c1ba6eb9734f09f01474fe6173a40149a82de54ec231e32b->leave($__internal_2606a3679b408153c1ba6eb9734f09f01474fe6173a40149a82de54ec231e32b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
