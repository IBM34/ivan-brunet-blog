<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf81ec3092be0f0084facd9830a10688cc18b459082fade1c92fda720aeace07 extends Twig_Template
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
        $__internal_fef92e0c6ac9b71403338f229a7f5a6aaa0bc2b74849dba28246a398482eaf80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef92e0c6ac9b71403338f229a7f5a6aaa0bc2b74849dba28246a398482eaf80->enter($__internal_fef92e0c6ac9b71403338f229a7f5a6aaa0bc2b74849dba28246a398482eaf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_defa3f37141d66ce49221830f0c3120ad464a184ace50c1d5553ee0ec04bf6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defa3f37141d66ce49221830f0c3120ad464a184ace50c1d5553ee0ec04bf6e5->enter($__internal_defa3f37141d66ce49221830f0c3120ad464a184ace50c1d5553ee0ec04bf6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fef92e0c6ac9b71403338f229a7f5a6aaa0bc2b74849dba28246a398482eaf80->leave($__internal_fef92e0c6ac9b71403338f229a7f5a6aaa0bc2b74849dba28246a398482eaf80_prof);

        
        $__internal_defa3f37141d66ce49221830f0c3120ad464a184ace50c1d5553ee0ec04bf6e5->leave($__internal_defa3f37141d66ce49221830f0c3120ad464a184ace50c1d5553ee0ec04bf6e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
