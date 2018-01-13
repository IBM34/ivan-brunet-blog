<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_24f79e9a879a5aff6b292c39a18a31fd6280c85a16d19e23e64a6e0c67930f3a extends Twig_Template
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
        $__internal_62fdb13a8955f72528373932cd68a5aa5a2de725ab8c54859d8984bc9dc6b0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fdb13a8955f72528373932cd68a5aa5a2de725ab8c54859d8984bc9dc6b0db->enter($__internal_62fdb13a8955f72528373932cd68a5aa5a2de725ab8c54859d8984bc9dc6b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_60ee6c45aad54d9d8bc11245f6b99007679ff98a4d309dc1e1e290bdc59e90d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ee6c45aad54d9d8bc11245f6b99007679ff98a4d309dc1e1e290bdc59e90d5->enter($__internal_60ee6c45aad54d9d8bc11245f6b99007679ff98a4d309dc1e1e290bdc59e90d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_62fdb13a8955f72528373932cd68a5aa5a2de725ab8c54859d8984bc9dc6b0db->leave($__internal_62fdb13a8955f72528373932cd68a5aa5a2de725ab8c54859d8984bc9dc6b0db_prof);

        
        $__internal_60ee6c45aad54d9d8bc11245f6b99007679ff98a4d309dc1e1e290bdc59e90d5->leave($__internal_60ee6c45aad54d9d8bc11245f6b99007679ff98a4d309dc1e1e290bdc59e90d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
