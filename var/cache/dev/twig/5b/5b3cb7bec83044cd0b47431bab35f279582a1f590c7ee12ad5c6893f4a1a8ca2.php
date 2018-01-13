<?php

/* FOSUserBundle::base.html.twig */
class __TwigTemplate_6d4aca17bffb1ff91edd03e1609aac1ef540918302d186c1ab8a6c66de00e8a5 extends Twig_Template
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
        $__internal_d9ab7ae829d2d3f9e1576d1dae8b418095ab70927b4e81afa164dfcb05b8a83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ab7ae829d2d3f9e1576d1dae8b418095ab70927b4e81afa164dfcb05b8a83b->enter($__internal_d9ab7ae829d2d3f9e1576d1dae8b418095ab70927b4e81afa164dfcb05b8a83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::base.html.twig"));

        $__internal_a4a65c9509ba72ae22b9d32ad717fd1e12ef8ad2a03ac4b59839785554edc1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a65c9509ba72ae22b9d32ad717fd1e12ef8ad2a03ac4b59839785554edc1a7->enter($__internal_a4a65c9509ba72ae22b9d32ad717fd1e12ef8ad2a03ac4b59839785554edc1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Space blog</title>

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
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>
      
       <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Space Blog</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
           <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_new");
        echo "\">New Post</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            
      ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "      
        <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
      
  </body>

</html>
";
        
        $__internal_d9ab7ae829d2d3f9e1576d1dae8b418095ab70927b4e81afa164dfcb05b8a83b->leave($__internal_d9ab7ae829d2d3f9e1576d1dae8b418095ab70927b4e81afa164dfcb05b8a83b_prof);

        
        $__internal_a4a65c9509ba72ae22b9d32ad717fd1e12ef8ad2a03ac4b59839785554edc1a7->leave($__internal_a4a65c9509ba72ae22b9d32ad717fd1e12ef8ad2a03ac4b59839785554edc1a7_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_66642c4985c3612dc7094be7ccc1ee58ba5b9751696f4fbb7d4aa6b5469636d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66642c4985c3612dc7094be7ccc1ee58ba5b9751696f4fbb7d4aa6b5469636d8->enter($__internal_66642c4985c3612dc7094be7ccc1ee58ba5b9751696f4fbb7d4aa6b5469636d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e7b7445791a7c26dc1fdc4117985dc0d96ec75de6a96ad95e2ec154e2ee952c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b7445791a7c26dc1fdc4117985dc0d96ec75de6a96ad95e2ec154e2ee952c9->enter($__internal_e7b7445791a7c26dc1fdc4117985dc0d96ec75de6a96ad95e2ec154e2ee952c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e7b7445791a7c26dc1fdc4117985dc0d96ec75de6a96ad95e2ec154e2ee952c9->leave($__internal_e7b7445791a7c26dc1fdc4117985dc0d96ec75de6a96ad95e2ec154e2ee952c9_prof);

        
        $__internal_66642c4985c3612dc7094be7ccc1ee58ba5b9751696f4fbb7d4aa6b5469636d8->leave($__internal_66642c4985c3612dc7094be7ccc1ee58ba5b9751696f4fbb7d4aa6b5469636d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  120 => 60,  114 => 57,  110 => 56,  106 => 54,  104 => 53,  94 => 46,  88 => 43,  82 => 40,  71 => 32,  59 => 23,  55 => 22,  47 => 17,  41 => 14,  26 => 1,);
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

    <title>Space blog</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"{{asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"{{asset('css/clean-blog.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('css/login.css') }}\" rel=\"stylesheet\">

  </head>

  <body>
      
       <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Space Blog</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
           <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Login</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('blog_new') }}\">New Post</a>
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

</html>
", "FOSUserBundle::base.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/FOSUserBundle/views/base.html.twig");
    }
}
