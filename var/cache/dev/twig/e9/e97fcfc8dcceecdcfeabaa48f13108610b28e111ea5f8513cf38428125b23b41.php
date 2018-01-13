<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_7407c2e3b1cab89ad08ea9bcfbb2fa9af6f06934eb47856d759aa5feb715acbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7407c2e3b1cab89ad08ea9bcfbb2fa9af6f06934eb47856d759aa5feb715acbc->enter($__internal_7407c2e3b1cab89ad08ea9bcfbb2fa9af6f06934eb47856d759aa5feb715acbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9506fcf039fe9363c4e15c5452fa61727785002f7d45a34b575fc0fddfeafd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9506fcf039fe9363c4e15c5452fa61727785002f7d45a34b575fc0fddfeafd8f->enter($__internal_9506fcf039fe9363c4e15c5452fa61727785002f7d45a34b575fc0fddfeafd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7407c2e3b1cab89ad08ea9bcfbb2fa9af6f06934eb47856d759aa5feb715acbc->leave($__internal_7407c2e3b1cab89ad08ea9bcfbb2fa9af6f06934eb47856d759aa5feb715acbc_prof);

        
        $__internal_9506fcf039fe9363c4e15c5452fa61727785002f7d45a34b575fc0fddfeafd8f->leave($__internal_9506fcf039fe9363c4e15c5452fa61727785002f7d45a34b575fc0fddfeafd8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
