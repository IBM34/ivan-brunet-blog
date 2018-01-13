<?php

/* Blog/new.html.twig */
class __TwigTemplate_472f547cd1b7c104e3a632aa13d0226ee4a5f06fdf0aaf32cea44ccd531f32b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Blog/new.html.twig", 1);
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
        $__internal_3c95b0629abae016a6e0bd3c9625ac670ea2d9067859d871807918afa4f484e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c95b0629abae016a6e0bd3c9625ac670ea2d9067859d871807918afa4f484e2->enter($__internal_3c95b0629abae016a6e0bd3c9625ac670ea2d9067859d871807918afa4f484e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/new.html.twig"));

        $__internal_1fe7b4c59826379fd140685a96c1234b719f0b0d0f54fa4c1fa468233e24ad3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe7b4c59826379fd140685a96c1234b719f0b0d0f54fa4c1fa468233e24ad3a->enter($__internal_1fe7b4c59826379fd140685a96c1234b719f0b0d0f54fa4c1fa468233e24ad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c95b0629abae016a6e0bd3c9625ac670ea2d9067859d871807918afa4f484e2->leave($__internal_3c95b0629abae016a6e0bd3c9625ac670ea2d9067859d871807918afa4f484e2_prof);

        
        $__internal_1fe7b4c59826379fd140685a96c1234b719f0b0d0f54fa4c1fa468233e24ad3a->leave($__internal_1fe7b4c59826379fd140685a96c1234b719f0b0d0f54fa4c1fa468233e24ad3a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ac63817b4f8ac716b721d1897e404a63fc3842f7545ebac961858a75730e0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac63817b4f8ac716b721d1897e404a63fc3842f7545ebac961858a75730e0b1->enter($__internal_7ac63817b4f8ac716b721d1897e404a63fc3842f7545ebac961858a75730e0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ba08c11754a1c2c287411373bf91a30471820c54618dcffdbf83f2a0443959e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba08c11754a1c2c287411373bf91a30471820c54618dcffdbf83f2a0443959e8->enter($__internal_ba08c11754a1c2c287411373bf91a30471820c54618dcffdbf83f2a0443959e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
              <h1>Nouveau Post</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
  
  <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
            </div>
        </div>
  </div>
 
    
";
        
        $__internal_ba08c11754a1c2c287411373bf91a30471820c54618dcffdbf83f2a0443959e8->leave($__internal_ba08c11754a1c2c287411373bf91a30471820c54618dcffdbf83f2a0443959e8_prof);

        
        $__internal_7ac63817b4f8ac716b721d1897e404a63fc3842f7545ebac961858a75730e0b1->leave($__internal_7ac63817b4f8ac716b721d1897e404a63fc3842f7545ebac961858a75730e0b1_prof);

    }

    public function getTemplateName()
    {
        return "Blog/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
              <h1>Nouveau Post</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
  
  <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                {{ form(form) }}
            </div>
        </div>
  </div>
 
    
{% endblock %}", "Blog/new.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/views/Blog/new.html.twig");
    }
}
