<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f485990e19975f2fc49879b76b3dbef14e71bbc44366a68a96b2e5ff040571b extends Twig_Template
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
        $__internal_46309208a9a84ebcc004f31a4d9c85166395281f8de5b2b167de6e06b81693f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46309208a9a84ebcc004f31a4d9c85166395281f8de5b2b167de6e06b81693f1->enter($__internal_46309208a9a84ebcc004f31a4d9c85166395281f8de5b2b167de6e06b81693f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d6e6e328d4cebae16fdf8de7c8f164f56fa91a44af771c29cdd6a3c061aabf7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e6e328d4cebae16fdf8de7c8f164f56fa91a44af771c29cdd6a3c061aabf7a->enter($__internal_d6e6e328d4cebae16fdf8de7c8f164f56fa91a44af771c29cdd6a3c061aabf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_46309208a9a84ebcc004f31a4d9c85166395281f8de5b2b167de6e06b81693f1->leave($__internal_46309208a9a84ebcc004f31a4d9c85166395281f8de5b2b167de6e06b81693f1_prof);

        
        $__internal_d6e6e328d4cebae16fdf8de7c8f164f56fa91a44af771c29cdd6a3c061aabf7a->leave($__internal_d6e6e328d4cebae16fdf8de7c8f164f56fa91a44af771c29cdd6a3c061aabf7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
