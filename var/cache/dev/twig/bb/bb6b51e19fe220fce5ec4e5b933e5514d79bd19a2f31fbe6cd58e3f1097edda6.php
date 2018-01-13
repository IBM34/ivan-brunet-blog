<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_2c255a944995ada3dcf697a4fbb41cc7978532d53843a6fc96db167bac65b03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c255a944995ada3dcf697a4fbb41cc7978532d53843a6fc96db167bac65b03a->enter($__internal_2c255a944995ada3dcf697a4fbb41cc7978532d53843a6fc96db167bac65b03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_073c4cd20fa6d1ae08dba99b938d30b439998d2d1eaf8efd1d2665ce1ea09b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073c4cd20fa6d1ae08dba99b938d30b439998d2d1eaf8efd1d2665ce1ea09b17->enter($__internal_073c4cd20fa6d1ae08dba99b938d30b439998d2d1eaf8efd1d2665ce1ea09b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2c255a944995ada3dcf697a4fbb41cc7978532d53843a6fc96db167bac65b03a->leave($__internal_2c255a944995ada3dcf697a4fbb41cc7978532d53843a6fc96db167bac65b03a_prof);

        
        $__internal_073c4cd20fa6d1ae08dba99b938d30b439998d2d1eaf8efd1d2665ce1ea09b17->leave($__internal_073c4cd20fa6d1ae08dba99b938d30b439998d2d1eaf8efd1d2665ce1ea09b17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
