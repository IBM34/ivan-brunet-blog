<?php

/* Blog/post.html.twig */
class __TwigTemplate_a8d5b00d81d24865ab482ae6de283cf21c211992a6c569d8633dd607904309d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Blog/post.html.twig", 1);
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
        $__internal_15086ec66c6aa88fbe8f8ad6c63baf3419e1894532a9544219239c585e48d684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15086ec66c6aa88fbe8f8ad6c63baf3419e1894532a9544219239c585e48d684->enter($__internal_15086ec66c6aa88fbe8f8ad6c63baf3419e1894532a9544219239c585e48d684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/post.html.twig"));

        $__internal_2797e65565e4d8c37859ef87d37f269c665b2aa692c6428e846c2fb96e9d1178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2797e65565e4d8c37859ef87d37f269c665b2aa692c6428e846c2fb96e9d1178->enter($__internal_2797e65565e4d8c37859ef87d37f269c665b2aa692c6428e846c2fb96e9d1178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15086ec66c6aa88fbe8f8ad6c63baf3419e1894532a9544219239c585e48d684->leave($__internal_15086ec66c6aa88fbe8f8ad6c63baf3419e1894532a9544219239c585e48d684_prof);

        
        $__internal_2797e65565e4d8c37859ef87d37f269c665b2aa692c6428e846c2fb96e9d1178->leave($__internal_2797e65565e4d8c37859ef87d37f269c665b2aa692c6428e846c2fb96e9d1178_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_98de8cbcf3e772a7a2ad4daa52f3d296136bd1df7a0c580ed518ca02bc0aab74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98de8cbcf3e772a7a2ad4daa52f3d296136bd1df7a0c580ed518ca02bc0aab74->enter($__internal_98de8cbcf3e772a7a2ad4daa52f3d296136bd1df7a0c580ed518ca02bc0aab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c705c6188a3f7d9e65e0cec1b5d57241ab4969db99a8f82ff4d535dcd1618ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c705c6188a3f7d9e65e0cec1b5d57241ab4969db99a8f82ff4d535dcd1618ffb->enter($__internal_c705c6188a3f7d9e65e0cec1b5d57241ab4969db99a8f82ff4d535dcd1618ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image:url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/home-bg.jpg"), "html", null, true);
        echo "')\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-heading\">
              <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titre", array()), "html", null, true);
        echo "</h1>
              <span class=\"meta\">Posté par
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "auteur", array()), "html", null, true);
        echo "
                le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "published", array()), "d-m-Y"), "html", null, true);
        echo "</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
           <a class=\"btn btn-primary \" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">&larr; Retour à la liste</a>
           <a class=\"btn btn-primary \" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", array("postid" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Supprimer</a>
\t   <a class=\"btn btn-primary \" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_edit", array("postid" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Editer</a>
           <br><br>
           ";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()), "html", null, true));
        echo "
           <br><br>
           <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">&larr; Retour à la liste</a>
           <a class=\"btn btn-primary\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", array("postid" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Supprimer</a>
\t   <a class=\"btn btn-primary\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_edit", array("postid" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Editer</a>
          </div>
        </div>
      </div>
    </article>

   
 
   ";
        
        $__internal_c705c6188a3f7d9e65e0cec1b5d57241ab4969db99a8f82ff4d535dcd1618ffb->leave($__internal_c705c6188a3f7d9e65e0cec1b5d57241ab4969db99a8f82ff4d535dcd1618ffb_prof);

        
        $__internal_98de8cbcf3e772a7a2ad4daa52f3d296136bd1df7a0c580ed518ca02bc0aab74->leave($__internal_98de8cbcf3e772a7a2ad4daa52f3d296136bd1df7a0c580ed518ca02bc0aab74_prof);

    }

    public function getTemplateName()
    {
        return "Blog/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  108 => 34,  104 => 33,  99 => 31,  94 => 29,  90 => 28,  86 => 27,  71 => 15,  67 => 14,  62 => 12,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <header class=\"masthead\" style=\"background-image:url('{{asset('img/home-bg.jpg')}}')\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-heading\">
              <h1>{{ post.titre  }}</h1>
              <span class=\"meta\">Posté par
                {{ post.auteur }}
                le {{ post.published|date('d-m-Y') }}</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
           <a class=\"btn btn-primary \" href=\"{{ path('homepage') }}\">&larr; Retour à la liste</a>
           <a class=\"btn btn-primary \" href=\"{{ path('blog_delete',{'postid' : post.id}) }}\">Supprimer</a>
\t   <a class=\"btn btn-primary \" href=\"{{ path('blog_edit',{'postid' : post.id}) }}\">Editer</a>
           <br><br>
           {{ post.content  | nl2br}}
           <br><br>
           <a class=\"btn btn-primary\" href=\"{{ path('homepage') }}\">&larr; Retour à la liste</a>
           <a class=\"btn btn-primary\" href=\"{{ path('blog_delete',{'postid' : post.id}) }}\">Supprimer</a>
\t   <a class=\"btn btn-primary\" href=\"{{ path('blog_edit',{'postid' : post.id}) }}\">Editer</a>
          </div>
        </div>
      </div>
    </article>

   
 
   {% endblock %}

", "Blog/post.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/views/Blog/post.html.twig");
    }
}
