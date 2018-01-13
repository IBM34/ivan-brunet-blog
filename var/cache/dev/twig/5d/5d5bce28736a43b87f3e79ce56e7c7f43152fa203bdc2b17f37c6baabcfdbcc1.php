<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_3425f4f0f6d86161d75d5629198e0a31e20203a2b195dad2fe3d742b8cc175c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec6a49a8dca35af156ec139e10e9467f8818923fac6501076d8a911f272f26ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6a49a8dca35af156ec139e10e9467f8818923fac6501076d8a911f272f26ff->enter($__internal_ec6a49a8dca35af156ec139e10e9467f8818923fac6501076d8a911f272f26ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_39c8f17893dd928a189737b271c8658bfb500ffdcbe3578349dff5044f24fbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c8f17893dd928a189737b271c8658bfb500ffdcbe3578349dff5044f24fbeb->enter($__internal_39c8f17893dd928a189737b271c8658bfb500ffdcbe3578349dff5044f24fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6a49a8dca35af156ec139e10e9467f8818923fac6501076d8a911f272f26ff->leave($__internal_ec6a49a8dca35af156ec139e10e9467f8818923fac6501076d8a911f272f26ff_prof);

        
        $__internal_39c8f17893dd928a189737b271c8658bfb500ffdcbe3578349dff5044f24fbeb->leave($__internal_39c8f17893dd928a189737b271c8658bfb500ffdcbe3578349dff5044f24fbeb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8600c7df6ef933ee6a232bb93b22ffd656cb02eb232a8f10fffa2b74a06957d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8600c7df6ef933ee6a232bb93b22ffd656cb02eb232a8f10fffa2b74a06957d8->enter($__internal_8600c7df6ef933ee6a232bb93b22ffd656cb02eb232a8f10fffa2b74a06957d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2d0edb44b1538ebf088273a6392723a55ab4012d07e03c7b9f81661590684b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0edb44b1538ebf088273a6392723a55ab4012d07e03c7b9f81661590684b68->enter($__internal_2d0edb44b1538ebf088273a6392723a55ab4012d07e03c7b9f81661590684b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "             <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image:url(' ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/home-bg.jpg"), "html", null, true);
        echo "')\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-heading\">
              <h1>Connexion / Inscription</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
      
      <div>
            ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "                <center>
                    
                Vous êtes connecté en tant que ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " |
                <a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    Deconnexion
                </a>
                </center>
                    <br>
            ";
        }
        // line 29
        echo "        </div>

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    <center>
                    ";
                // line 35
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle") == "registration.flash.user_created")) {
                    // line 36
                    echo "                     <p>Inscription effectuée</p>
                    ";
                } else {
                    // line 38
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                    echo "
                    ";
                }
                // line 40
                echo "                    </center>
                    <br>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        
         
  <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">

        <div>
            ";
        // line 52
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 54
        echo "        </div>
        
             </div>
        </div>
  </div>
            
    
";
        
        $__internal_2d0edb44b1538ebf088273a6392723a55ab4012d07e03c7b9f81661590684b68->leave($__internal_2d0edb44b1538ebf088273a6392723a55ab4012d07e03c7b9f81661590684b68_prof);

        
        $__internal_8600c7df6ef933ee6a232bb93b22ffd656cb02eb232a8f10fffa2b74a06957d8->leave($__internal_8600c7df6ef933ee6a232bb93b22ffd656cb02eb232a8f10fffa2b74a06957d8_prof);

    }

    // line 52
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_769fc39843a4e32b9cbc45a584fc1b294b163c9c1b6be47ef696718d89f95faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769fc39843a4e32b9cbc45a584fc1b294b163c9c1b6be47ef696718d89f95faf->enter($__internal_769fc39843a4e32b9cbc45a584fc1b294b163c9c1b6be47ef696718d89f95faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_931c508b84c571c510fc1514614682e9ab17c9eecd444ac1c0bfb7efd5998100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931c508b84c571c510fc1514614682e9ab17c9eecd444ac1c0bfb7efd5998100->enter($__internal_931c508b84c571c510fc1514614682e9ab17c9eecd444ac1c0bfb7efd5998100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 53
        echo "            ";
        
        $__internal_931c508b84c571c510fc1514614682e9ab17c9eecd444ac1c0bfb7efd5998100->leave($__internal_931c508b84c571c510fc1514614682e9ab17c9eecd444ac1c0bfb7efd5998100_prof);

        
        $__internal_769fc39843a4e32b9cbc45a584fc1b294b163c9c1b6be47ef696718d89f95faf->leave($__internal_769fc39843a4e32b9cbc45a584fc1b294b163c9c1b6be47ef696718d89f95faf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 53,  163 => 52,  146 => 54,  144 => 52,  135 => 45,  129 => 44,  120 => 40,  114 => 38,  110 => 36,  108 => 35,  102 => 33,  97 => 32,  93 => 31,  89 => 29,  80 => 23,  76 => 22,  72 => 20,  70 => 19,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
             <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image:url(' {{ asset('img/home-bg.jpg') }}')\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-heading\">
              <h1>Connexion / Inscription</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
      
      <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <center>
                    
                Vous êtes connecté en tant que {{ app.user.username }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    Deconnexion
                </a>
                </center>
                    <br>
            {% endif %}
        </div>

        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    <center>
                    {% if message|trans({}, 'FOSUserBundle') == 'registration.flash.user_created' %}
                     <p>Inscription effectuée</p>
                    {% else %}
                    {{ message|trans({}, 'FOSUserBundle') }}
                    {% endif %}
                    </center>
                    <br>
                </div>
            {% endfor %}
        {% endfor %}
        
         
  <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
        
             </div>
        </div>
  </div>
            
    
{% endblock %}", "@FOSUser/layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
