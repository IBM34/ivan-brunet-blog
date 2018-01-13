<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_f44856e7de02c548788dd0cba414f1e26ff337d436317cde00e8c822cfd1a3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44856e7de02c548788dd0cba414f1e26ff337d436317cde00e8c822cfd1a3dc->enter($__internal_f44856e7de02c548788dd0cba414f1e26ff337d436317cde00e8c822cfd1a3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_81de16ae83fbab7635b02c73d8f4f839641c62a56c7c615176ab0448c548a5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81de16ae83fbab7635b02c73d8f4f839641c62a56c7c615176ab0448c548a5d6->enter($__internal_81de16ae83fbab7635b02c73d8f4f839641c62a56c7c615176ab0448c548a5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f44856e7de02c548788dd0cba414f1e26ff337d436317cde00e8c822cfd1a3dc->leave($__internal_f44856e7de02c548788dd0cba414f1e26ff337d436317cde00e8c822cfd1a3dc_prof);

        
        $__internal_81de16ae83fbab7635b02c73d8f4f839641c62a56c7c615176ab0448c548a5d6->leave($__internal_81de16ae83fbab7635b02c73d8f4f839641c62a56c7c615176ab0448c548a5d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
