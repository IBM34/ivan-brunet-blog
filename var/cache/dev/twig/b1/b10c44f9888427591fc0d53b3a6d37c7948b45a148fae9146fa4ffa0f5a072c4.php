<?php

/* Blog/edit.html.twig */
class __TwigTemplate_50ebff228cf852ccb75b010663fabc737bff0e66b71073bdb4859613d1f1c35a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Blog/edit.html.twig", 1);
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
        $__internal_1c3df84bd4ca400b74d7b2740f88fcb8946dde859b7b5afea627f0cb61ab9f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3df84bd4ca400b74d7b2740f88fcb8946dde859b7b5afea627f0cb61ab9f7b->enter($__internal_1c3df84bd4ca400b74d7b2740f88fcb8946dde859b7b5afea627f0cb61ab9f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/edit.html.twig"));

        $__internal_f4fb54110c28491b1308eb08ee3b7ffc815b894906e379c5d1de646ea146f366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fb54110c28491b1308eb08ee3b7ffc815b894906e379c5d1de646ea146f366->enter($__internal_f4fb54110c28491b1308eb08ee3b7ffc815b894906e379c5d1de646ea146f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3df84bd4ca400b74d7b2740f88fcb8946dde859b7b5afea627f0cb61ab9f7b->leave($__internal_1c3df84bd4ca400b74d7b2740f88fcb8946dde859b7b5afea627f0cb61ab9f7b_prof);

        
        $__internal_f4fb54110c28491b1308eb08ee3b7ffc815b894906e379c5d1de646ea146f366->leave($__internal_f4fb54110c28491b1308eb08ee3b7ffc815b894906e379c5d1de646ea146f366_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_581d5d1b9483b949941f79b90a540fde3f82a7a664091cf92dd2da3f68311438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581d5d1b9483b949941f79b90a540fde3f82a7a664091cf92dd2da3f68311438->enter($__internal_581d5d1b9483b949941f79b90a540fde3f82a7a664091cf92dd2da3f68311438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eedc1f0787d47daf5dc611c99b4c370670e831ce313fcce1cc61fe8e07ef559c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedc1f0787d47daf5dc611c99b4c370670e831ce313fcce1cc61fe8e07ef559c->enter($__internal_eedc1f0787d47daf5dc611c99b4c370670e831ce313fcce1cc61fe8e07ef559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
              <h1>Edition</h1>
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
        
        $__internal_eedc1f0787d47daf5dc611c99b4c370670e831ce313fcce1cc61fe8e07ef559c->leave($__internal_eedc1f0787d47daf5dc611c99b4c370670e831ce313fcce1cc61fe8e07ef559c_prof);

        
        $__internal_581d5d1b9483b949941f79b90a540fde3f82a7a664091cf92dd2da3f68311438->leave($__internal_581d5d1b9483b949941f79b90a540fde3f82a7a664091cf92dd2da3f68311438_prof);

    }

    public function getTemplateName()
    {
        return "Blog/edit.html.twig";
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
              <h1>Edition</h1>
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
 
    
{% endblock %}
", "Blog/edit.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/app/Resources/views/Blog/edit.html.twig");
    }
}
