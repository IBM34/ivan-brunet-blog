<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_97a15211248618d0f2359ee7a2f4032d1ee1ab70a7ff80b739f7a31057bbbbe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a15211248618d0f2359ee7a2f4032d1ee1ab70a7ff80b739f7a31057bbbbe9->enter($__internal_97a15211248618d0f2359ee7a2f4032d1ee1ab70a7ff80b739f7a31057bbbbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_18de28998e0636caf328d1a6ceadf8fc56ab048eaff8c1f714f776fe599aedd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18de28998e0636caf328d1a6ceadf8fc56ab048eaff8c1f714f776fe599aedd4->enter($__internal_18de28998e0636caf328d1a6ceadf8fc56ab048eaff8c1f714f776fe599aedd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_97a15211248618d0f2359ee7a2f4032d1ee1ab70a7ff80b739f7a31057bbbbe9->leave($__internal_97a15211248618d0f2359ee7a2f4032d1ee1ab70a7ff80b739f7a31057bbbbe9_prof);

        
        $__internal_18de28998e0636caf328d1a6ceadf8fc56ab048eaff8c1f714f776fe599aedd4->leave($__internal_18de28998e0636caf328d1a6ceadf8fc56ab048eaff8c1f714f776fe599aedd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
