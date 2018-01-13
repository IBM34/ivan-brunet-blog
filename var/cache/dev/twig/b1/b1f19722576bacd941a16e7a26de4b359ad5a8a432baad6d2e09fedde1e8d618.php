<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35048eed667d053252b9634ea54c694c31dbf3a19454832c4717b0921540db41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35048eed667d053252b9634ea54c694c31dbf3a19454832c4717b0921540db41->enter($__internal_35048eed667d053252b9634ea54c694c31dbf3a19454832c4717b0921540db41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b1542d741014986afc179d44fb2dd99efa50d5c70a3aecfd472c16480f8eedbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1542d741014986afc179d44fb2dd99efa50d5c70a3aecfd472c16480f8eedbf->enter($__internal_b1542d741014986afc179d44fb2dd99efa50d5c70a3aecfd472c16480f8eedbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Astronomie</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/clean-blog.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>
      
       <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Astronomie</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
           <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
            </li>
            ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                 <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Deconnexion (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ")</a>
            </li>
               ";
        } else {
            // line 46
            echo "                    <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            </li>
                    
            ";
        }
        // line 51
        echo "           
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_new");
        echo "\">Nouveau Post</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            
      ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "      
        <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
      
  </body>
  
  <hr>
  
   <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
              <center><b><p>Ivan BRUNET-MANQUAT - Mattéo COQUILHAT</p></b></center>
          </div>
        </div>
      </div>
    </footer>


</html>
";
        
        $__internal_35048eed667d053252b9634ea54c694c31dbf3a19454832c4717b0921540db41->leave($__internal_35048eed667d053252b9634ea54c694c31dbf3a19454832c4717b0921540db41_prof);

        
        $__internal_b1542d741014986afc179d44fb2dd99efa50d5c70a3aecfd472c16480f8eedbf->leave($__internal_b1542d741014986afc179d44fb2dd99efa50d5c70a3aecfd472c16480f8eedbf_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_a67375dc25db0b534bd6a5dd0e9d1536dc29ad1879688270f71b9c0a2bebbceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67375dc25db0b534bd6a5dd0e9d1536dc29ad1879688270f71b9c0a2bebbceb->enter($__internal_a67375dc25db0b534bd6a5dd0e9d1536dc29ad1879688270f71b9c0a2bebbceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_073284fca81848b8b2388a61f4be4196dd695dc78641a154ef26b697bc742a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073284fca81848b8b2388a61f4be4196dd695dc78641a154ef26b697bc742a7e->enter($__internal_073284fca81848b8b2388a61f4be4196dd695dc78641a154ef26b697bc742a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_073284fca81848b8b2388a61f4be4196dd695dc78641a154ef26b697bc742a7e->leave($__internal_073284fca81848b8b2388a61f4be4196dd695dc78641a154ef26b697bc742a7e_prof);

        
        $__internal_a67375dc25db0b534bd6a5dd0e9d1536dc29ad1879688270f71b9c0a2bebbceb->leave($__internal_a67375dc25db0b534bd6a5dd0e9d1536dc29ad1879688270f71b9c0a2bebbceb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  136 => 67,  130 => 64,  126 => 63,  122 => 61,  120 => 60,  110 => 53,  106 => 51,  99 => 47,  96 => 46,  88 => 43,  85 => 42,  83 => 41,  78 => 39,  67 => 31,  55 => 22,  47 => 17,  41 => 14,  26 => 1,);
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
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Astronomie</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"{{asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"{{asset('css/clean-blog.min.css') }}\" rel=\"stylesheet\">

  </head>

  <body>
      
       <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Astronomie</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
           <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home</a>
            </li>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                 <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\">Deconnexion ({{app.user.username}})</a>
            </li>
               {% else %}
                    <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
            </li>
                    
            {% endif %}
           
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('blog_new') }}\">Nouveau Post</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            
      {% block content %}{% endblock %}
      
        <!-- Bootstrap core JavaScript -->
    <script src=\"{{asset('vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"{{asset('js/clean-blog.min.js') }}\"></script>
      
  </body>
  
  <hr>
  
   <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
              <center><b><p>Ivan BRUNET-MANQUAT - Mattéo COQUILHAT</p></b></center>
          </div>
        </div>
      </div>
    </footer>


</html>
", "base.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/views/base.html.twig");
    }
}
