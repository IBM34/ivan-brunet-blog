<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_f5dc1d7330edaa8ae7a5884b9372de6a088e398af7afc5cfca7e179644ac3b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5dc1d7330edaa8ae7a5884b9372de6a088e398af7afc5cfca7e179644ac3b22->enter($__internal_f5dc1d7330edaa8ae7a5884b9372de6a088e398af7afc5cfca7e179644ac3b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ae3f574ea23f8078ad69183950a419fa38e0377a491466da731a6e5156941ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3f574ea23f8078ad69183950a419fa38e0377a491466da731a6e5156941ccd->enter($__internal_ae3f574ea23f8078ad69183950a419fa38e0377a491466da731a6e5156941ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f5dc1d7330edaa8ae7a5884b9372de6a088e398af7afc5cfca7e179644ac3b22->leave($__internal_f5dc1d7330edaa8ae7a5884b9372de6a088e398af7afc5cfca7e179644ac3b22_prof);

        
        $__internal_ae3f574ea23f8078ad69183950a419fa38e0377a491466da731a6e5156941ccd->leave($__internal_ae3f574ea23f8078ad69183950a419fa38e0377a491466da731a6e5156941ccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
