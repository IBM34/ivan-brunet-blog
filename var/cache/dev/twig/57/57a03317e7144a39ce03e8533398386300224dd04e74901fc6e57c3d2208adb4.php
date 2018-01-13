<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c5def86c74746c0ec34e153f54b6ccdddc0f4cf9b9c2adf4fef6d8954bca903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925fa68d1a8d72ea31ed4296972d3694e09aa834ab8070537c056350f3d4c602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925fa68d1a8d72ea31ed4296972d3694e09aa834ab8070537c056350f3d4c602->enter($__internal_925fa68d1a8d72ea31ed4296972d3694e09aa834ab8070537c056350f3d4c602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_18775e72b9ec94fc0b710301424c07d9627b9802e9ddfc738e12d85b56c7c4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18775e72b9ec94fc0b710301424c07d9627b9802e9ddfc738e12d85b56c7c4ee->enter($__internal_18775e72b9ec94fc0b710301424c07d9627b9802e9ddfc738e12d85b56c7c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_925fa68d1a8d72ea31ed4296972d3694e09aa834ab8070537c056350f3d4c602->leave($__internal_925fa68d1a8d72ea31ed4296972d3694e09aa834ab8070537c056350f3d4c602_prof);

        
        $__internal_18775e72b9ec94fc0b710301424c07d9627b9802e9ddfc738e12d85b56c7c4ee->leave($__internal_18775e72b9ec94fc0b710301424c07d9627b9802e9ddfc738e12d85b56c7c4ee_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c44f83e7e7fb1a3622caad97acf976121a76c4ce78d4cee438f6b8f525410994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44f83e7e7fb1a3622caad97acf976121a76c4ce78d4cee438f6b8f525410994->enter($__internal_c44f83e7e7fb1a3622caad97acf976121a76c4ce78d4cee438f6b8f525410994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0bd535c03ca8b8e15b17b6b5a71c85dbc7bf5e8bad93e751233225ff48819780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd535c03ca8b8e15b17b6b5a71c85dbc7bf5e8bad93e751233225ff48819780->enter($__internal_0bd535c03ca8b8e15b17b6b5a71c85dbc7bf5e8bad93e751233225ff48819780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_0bd535c03ca8b8e15b17b6b5a71c85dbc7bf5e8bad93e751233225ff48819780->leave($__internal_0bd535c03ca8b8e15b17b6b5a71c85dbc7bf5e8bad93e751233225ff48819780_prof);

        
        $__internal_c44f83e7e7fb1a3622caad97acf976121a76c4ce78d4cee438f6b8f525410994->leave($__internal_c44f83e7e7fb1a3622caad97acf976121a76c4ce78d4cee438f6b8f525410994_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9a05c6f9165e506c449db1e36bf8804e052c4a35e9276db6f3f1ec50110ec5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a05c6f9165e506c449db1e36bf8804e052c4a35e9276db6f3f1ec50110ec5ea->enter($__internal_9a05c6f9165e506c449db1e36bf8804e052c4a35e9276db6f3f1ec50110ec5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_09a3d0668c28ac46fd64d5684764992708037a4b509dc4851601884b514be2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a3d0668c28ac46fd64d5684764992708037a4b509dc4851601884b514be2b9->enter($__internal_09a3d0668c28ac46fd64d5684764992708037a4b509dc4851601884b514be2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_09a3d0668c28ac46fd64d5684764992708037a4b509dc4851601884b514be2b9->leave($__internal_09a3d0668c28ac46fd64d5684764992708037a4b509dc4851601884b514be2b9_prof);

        
        $__internal_9a05c6f9165e506c449db1e36bf8804e052c4a35e9276db6f3f1ec50110ec5ea->leave($__internal_9a05c6f9165e506c449db1e36bf8804e052c4a35e9276db6f3f1ec50110ec5ea_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3319de7209138090e7071ca460eea5cdfa852e778fdf269c5a92b60c3295638e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3319de7209138090e7071ca460eea5cdfa852e778fdf269c5a92b60c3295638e->enter($__internal_3319de7209138090e7071ca460eea5cdfa852e778fdf269c5a92b60c3295638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4ef9ba590d172842b32d52d2faa9b6b23ab58c74196276b3ee5344a8b326cfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef9ba590d172842b32d52d2faa9b6b23ab58c74196276b3ee5344a8b326cfe9->enter($__internal_4ef9ba590d172842b32d52d2faa9b6b23ab58c74196276b3ee5344a8b326cfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_4ef9ba590d172842b32d52d2faa9b6b23ab58c74196276b3ee5344a8b326cfe9->leave($__internal_4ef9ba590d172842b32d52d2faa9b6b23ab58c74196276b3ee5344a8b326cfe9_prof);

        
        $__internal_3319de7209138090e7071ca460eea5cdfa852e778fdf269c5a92b60c3295638e->leave($__internal_3319de7209138090e7071ca460eea5cdfa852e778fdf269c5a92b60c3295638e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_dff507250c82bd57964d4d41f41a8c8fe01cd53bb34d4ec7370a1d46521dcbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff507250c82bd57964d4d41f41a8c8fe01cd53bb34d4ec7370a1d46521dcbbc->enter($__internal_dff507250c82bd57964d4d41f41a8c8fe01cd53bb34d4ec7370a1d46521dcbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_3e5f8b12e914cf8999219e7653e6cb18489270c484fbdd82825eaf9cef81fd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5f8b12e914cf8999219e7653e6cb18489270c484fbdd82825eaf9cef81fd6e->enter($__internal_3e5f8b12e914cf8999219e7653e6cb18489270c484fbdd82825eaf9cef81fd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_3e5f8b12e914cf8999219e7653e6cb18489270c484fbdd82825eaf9cef81fd6e->leave($__internal_3e5f8b12e914cf8999219e7653e6cb18489270c484fbdd82825eaf9cef81fd6e_prof);

        
        $__internal_dff507250c82bd57964d4d41f41a8c8fe01cd53bb34d4ec7370a1d46521dcbbc->leave($__internal_dff507250c82bd57964d4d41f41a8c8fe01cd53bb34d4ec7370a1d46521dcbbc_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
