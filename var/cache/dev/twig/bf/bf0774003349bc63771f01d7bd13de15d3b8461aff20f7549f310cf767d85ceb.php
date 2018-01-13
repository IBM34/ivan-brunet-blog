<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_a6315728dfb97ca35fea761db629c4a1b3a61d01348b1744e839ccad9c0c6003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6315728dfb97ca35fea761db629c4a1b3a61d01348b1744e839ccad9c0c6003->enter($__internal_a6315728dfb97ca35fea761db629c4a1b3a61d01348b1744e839ccad9c0c6003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_3dcdce4aae4d06e7c1b8e2beadd2b355d04b6e8b9c0310bb2649dd79b0ce526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcdce4aae4d06e7c1b8e2beadd2b355d04b6e8b9c0310bb2649dd79b0ce526b->enter($__internal_3dcdce4aae4d06e7c1b8e2beadd2b355d04b6e8b9c0310bb2649dd79b0ce526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_a6315728dfb97ca35fea761db629c4a1b3a61d01348b1744e839ccad9c0c6003->leave($__internal_a6315728dfb97ca35fea761db629c4a1b3a61d01348b1744e839ccad9c0c6003_prof);

        
        $__internal_3dcdce4aae4d06e7c1b8e2beadd2b355d04b6e8b9c0310bb2649dd79b0ce526b->leave($__internal_3dcdce4aae4d06e7c1b8e2beadd2b355d04b6e8b9c0310bb2649dd79b0ce526b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
