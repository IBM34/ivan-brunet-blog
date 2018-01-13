<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_1006cb356c07f1270455ea1e1f243123479d73ba3df7307a9bf992308f1c868f extends Twig_Template
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
        $__internal_6d6d600f3e02649c1cf2f255fe4ab6acaefa5d8a1bda8174be72cebeb703f836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6d600f3e02649c1cf2f255fe4ab6acaefa5d8a1bda8174be72cebeb703f836->enter($__internal_6d6d600f3e02649c1cf2f255fe4ab6acaefa5d8a1bda8174be72cebeb703f836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_5be5cb7dca82fe33d1c273458962691b5be5ac94462297e2116aea3adbcd8ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be5cb7dca82fe33d1c273458962691b5be5ac94462297e2116aea3adbcd8ecf->enter($__internal_5be5cb7dca82fe33d1c273458962691b5be5ac94462297e2116aea3adbcd8ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_6d6d600f3e02649c1cf2f255fe4ab6acaefa5d8a1bda8174be72cebeb703f836->leave($__internal_6d6d600f3e02649c1cf2f255fe4ab6acaefa5d8a1bda8174be72cebeb703f836_prof);

        
        $__internal_5be5cb7dca82fe33d1c273458962691b5be5ac94462297e2116aea3adbcd8ecf->leave($__internal_5be5cb7dca82fe33d1c273458962691b5be5ac94462297e2116aea3adbcd8ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
