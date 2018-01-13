<?php

/* Blog/homepage.html.twig */
class __TwigTemplate_37954940f52a21e2e0c73c1e4fad47843562013dba61be8e32a72079458a58bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Blog/homepage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d471182e9739917c3034c9fc20247619afeb137dccb0e23f3f1003febe1708e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d471182e9739917c3034c9fc20247619afeb137dccb0e23f3f1003febe1708e2->enter($__internal_d471182e9739917c3034c9fc20247619afeb137dccb0e23f3f1003febe1708e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/homepage.html.twig"));

        $__internal_10b8e061574ef316c0d8740b7a9c68e5efd0117a5073c3b8b9b9c0e97dbecd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b8e061574ef316c0d8740b7a9c68e5efd0117a5073c3b8b9b9c0e97dbecd13->enter($__internal_10b8e061574ef316c0d8740b7a9c68e5efd0117a5073c3b8b9b9c0e97dbecd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d471182e9739917c3034c9fc20247619afeb137dccb0e23f3f1003febe1708e2->leave($__internal_d471182e9739917c3034c9fc20247619afeb137dccb0e23f3f1003febe1708e2_prof);

        
        $__internal_10b8e061574ef316c0d8740b7a9c68e5efd0117a5073c3b8b9b9c0e97dbecd13->leave($__internal_10b8e061574ef316c0d8740b7a9c68e5efd0117a5073c3b8b9b9c0e97dbecd13_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_53c386d86b2a7ee7daf7cfd2b86a92f21d5b3954a3abc07e50d897112b29942f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c386d86b2a7ee7daf7cfd2b86a92f21d5b3954a3abc07e50d897112b29942f->enter($__internal_53c386d86b2a7ee7daf7cfd2b86a92f21d5b3954a3abc07e50d897112b29942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a9f55780b60175ed6136bbdceb1ad592758ccaa08b3ef31eedce92bd22a5d015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f55780b60175ed6136bbdceb1ad592758ccaa08b3ef31eedce92bd22a5d015->enter($__internal_a9f55780b60175ed6136bbdceb1ad592758ccaa08b3ef31eedce92bd22a5d015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image:url(' ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/home-bg.jpg"), "html", null, true);
        echo "')\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"site-heading\">
              <h1>Astronomie</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "          <div class=\"post-preview\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("postid" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
              <h2 class=\"post-title\">
               ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "
              </h2>
              <h3 class=\"post-subtitle\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "
              </h3>
            </a>
            <p class=\"post-meta\">Posté par
               ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "auteur", array()), "html", null, true);
            echo "
             le ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published", array()), "d-m-Y"), "html", null, true);
            echo "</p>
          </div>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <div class=\"warning\"> Il n'y a pas d'article ici </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          <!-- Pager -->
          <div class=\"clearfix\">
               ";
        // line 42
        if ((($context["page"] ?? $this->getContext($context, "page")) != 1)) {
            // line 43
            echo "                 ";
            $context["previous"] = (($context["page"] ?? $this->getContext($context, "page")) - 2);
            // line 44
            echo "                        <a  class=\"btn btn-primary float-left\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => ($context["previous"] ?? $this->getContext($context, "previous")))), "html", null, true);
            echo "\">&larr; Plus récents</a>
                    
               ";
        }
        // line 47
        echo "               ";
        if (((($context["page"] ?? $this->getContext($context, "page")) * 5) < ($context["totalPostCount"] ?? $this->getContext($context, "totalPostCount")))) {
            // line 48
            echo "                    
                       <a  class=\"btn btn-primary float-right\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => ($context["page"] ?? $this->getContext($context, "page")))), "html", null, true);
            echo "\"> Plus anciens &rarr;</a>
               ";
        }
        // line 51
        echo "           
          </div>
          </div>
        </div>
      </div>
    </div>

   ";
        
        $__internal_a9f55780b60175ed6136bbdceb1ad592758ccaa08b3ef31eedce92bd22a5d015->leave($__internal_a9f55780b60175ed6136bbdceb1ad592758ccaa08b3ef31eedce92bd22a5d015_prof);

        
        $__internal_53c386d86b2a7ee7daf7cfd2b86a92f21d5b3954a3abc07e50d897112b29942f->leave($__internal_53c386d86b2a7ee7daf7cfd2b86a92f21d5b3954a3abc07e50d897112b29942f_prof);

    }

    public function getTemplateName()
    {
        return "Blog/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  140 => 49,  137 => 48,  134 => 47,  127 => 44,  124 => 43,  122 => 42,  118 => 40,  111 => 38,  103 => 35,  99 => 34,  92 => 30,  86 => 27,  81 => 25,  78 => 24,  73 => 23,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            <div class=\"site-heading\">
              <h1>Astronomie</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            {% for post in posts %}
          <div class=\"post-preview\">
            <a href=\"{{ path('blog_post',{'postid' : post.id}) }}\">
              <h2 class=\"post-title\">
               {{ post.titre  }}
              </h2>
              <h3 class=\"post-subtitle\">
                {{ post.description}}
              </h3>
            </a>
            <p class=\"post-meta\">Posté par
               {{ post.auteur }}
             le {{ post.published|date('d-m-Y') }}</p>
          </div>
          {% else %}
            <div class=\"warning\"> Il n'y a pas d'article ici </div>
          {% endfor %}
          <!-- Pager -->
          <div class=\"clearfix\">
               {% if page != 1 %}
                 {% set previous  = page -2 %}
                        <a  class=\"btn btn-primary float-left\" href=\"{{path('homepage',{'page' : previous})}}\">&larr; Plus récents</a>
                    
               {% endif %}
               {% if page*5 < totalPostCount %}
                    
                       <a  class=\"btn btn-primary float-right\" href=\"{{path('homepage',{'page' : page})}}\"> Plus anciens &rarr;</a>
               {% endif %}
           
          </div>
          </div>
        </div>
      </div>
    </div>

   {% endblock %}
", "Blog/homepage.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/views/Blog/homepage.html.twig");
    }
}
