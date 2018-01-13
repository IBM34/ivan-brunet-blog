<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_54b6547e40b9ce73ef24dcf5c8031c850416d5d0645041032368b1bc5f84ea31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb040fd1bbe3c2db1c0088e65cff50d0d523698507a5f925e00095f4d0337fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb040fd1bbe3c2db1c0088e65cff50d0d523698507a5f925e00095f4d0337fbd->enter($__internal_eb040fd1bbe3c2db1c0088e65cff50d0d523698507a5f925e00095f4d0337fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_11daf0e56a04b565cbb86752a3fcf42ec3b8ba6814762ef58856ecaae8e43ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11daf0e56a04b565cbb86752a3fcf42ec3b8ba6814762ef58856ecaae8e43ff1->enter($__internal_11daf0e56a04b565cbb86752a3fcf42ec3b8ba6814762ef58856ecaae8e43ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_eb040fd1bbe3c2db1c0088e65cff50d0d523698507a5f925e00095f4d0337fbd->leave($__internal_eb040fd1bbe3c2db1c0088e65cff50d0d523698507a5f925e00095f4d0337fbd_prof);

        
        $__internal_11daf0e56a04b565cbb86752a3fcf42ec3b8ba6814762ef58856ecaae8e43ff1->leave($__internal_11daf0e56a04b565cbb86752a3fcf42ec3b8ba6814762ef58856ecaae8e43ff1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e7ed207b8689a053f64b51230111993ea98ba5cf5aef0a70e93a948dcd55b2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ed207b8689a053f64b51230111993ea98ba5cf5aef0a70e93a948dcd55b2ef->enter($__internal_e7ed207b8689a053f64b51230111993ea98ba5cf5aef0a70e93a948dcd55b2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_0b43beb33af0d64509c86a3b3244a94b2f3098a848d055eb06e911f4eba96d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b43beb33af0d64509c86a3b3244a94b2f3098a848d055eb06e911f4eba96d79->enter($__internal_0b43beb33af0d64509c86a3b3244a94b2f3098a848d055eb06e911f4eba96d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_0b43beb33af0d64509c86a3b3244a94b2f3098a848d055eb06e911f4eba96d79->leave($__internal_0b43beb33af0d64509c86a3b3244a94b2f3098a848d055eb06e911f4eba96d79_prof);

        
        $__internal_e7ed207b8689a053f64b51230111993ea98ba5cf5aef0a70e93a948dcd55b2ef->leave($__internal_e7ed207b8689a053f64b51230111993ea98ba5cf5aef0a70e93a948dcd55b2ef_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_51a46c5f6004d42cb97ee343d687457282851d5a7cf26c19e01789c6bded6e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a46c5f6004d42cb97ee343d687457282851d5a7cf26c19e01789c6bded6e54->enter($__internal_51a46c5f6004d42cb97ee343d687457282851d5a7cf26c19e01789c6bded6e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7915d24f6a7994d750022c92f3bce042997bd8c1d276021d4b082ebf17ecb7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7915d24f6a7994d750022c92f3bce042997bd8c1d276021d4b082ebf17ecb7c9->enter($__internal_7915d24f6a7994d750022c92f3bce042997bd8c1d276021d4b082ebf17ecb7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7915d24f6a7994d750022c92f3bce042997bd8c1d276021d4b082ebf17ecb7c9->leave($__internal_7915d24f6a7994d750022c92f3bce042997bd8c1d276021d4b082ebf17ecb7c9_prof);

        
        $__internal_51a46c5f6004d42cb97ee343d687457282851d5a7cf26c19e01789c6bded6e54->leave($__internal_51a46c5f6004d42cb97ee343d687457282851d5a7cf26c19e01789c6bded6e54_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_283ac584cc4dd7870fdc53ca1606bc422cf5fac9df880e7492e0bb528ab77f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283ac584cc4dd7870fdc53ca1606bc422cf5fac9df880e7492e0bb528ab77f56->enter($__internal_283ac584cc4dd7870fdc53ca1606bc422cf5fac9df880e7492e0bb528ab77f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f552ff8246a626b0ee528e11bd69aba8444c396d4b0e4afac546c662d7a76b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f552ff8246a626b0ee528e11bd69aba8444c396d4b0e4afac546c662d7a76b74->enter($__internal_f552ff8246a626b0ee528e11bd69aba8444c396d4b0e4afac546c662d7a76b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_f552ff8246a626b0ee528e11bd69aba8444c396d4b0e4afac546c662d7a76b74->leave($__internal_f552ff8246a626b0ee528e11bd69aba8444c396d4b0e4afac546c662d7a76b74_prof);

        
        $__internal_283ac584cc4dd7870fdc53ca1606bc422cf5fac9df880e7492e0bb528ab77f56->leave($__internal_283ac584cc4dd7870fdc53ca1606bc422cf5fac9df880e7492e0bb528ab77f56_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b37bcd9fc81ac09a84e221dd123749efd02df2686e801994f8d672f4c5a9995a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37bcd9fc81ac09a84e221dd123749efd02df2686e801994f8d672f4c5a9995a->enter($__internal_b37bcd9fc81ac09a84e221dd123749efd02df2686e801994f8d672f4c5a9995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_08b753e0afd7a02a256376003730661e0775a359456d584e68459e23dba85d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b753e0afd7a02a256376003730661e0775a359456d584e68459e23dba85d60->enter($__internal_08b753e0afd7a02a256376003730661e0775a359456d584e68459e23dba85d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_08b753e0afd7a02a256376003730661e0775a359456d584e68459e23dba85d60->leave($__internal_08b753e0afd7a02a256376003730661e0775a359456d584e68459e23dba85d60_prof);

        
        $__internal_b37bcd9fc81ac09a84e221dd123749efd02df2686e801994f8d672f4c5a9995a->leave($__internal_b37bcd9fc81ac09a84e221dd123749efd02df2686e801994f8d672f4c5a9995a_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a7158bfb4f482d69c3a0ac7f6eb797b1e3ada76f18f98b4bfd49637b7cbf4f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7158bfb4f482d69c3a0ac7f6eb797b1e3ada76f18f98b4bfd49637b7cbf4f93->enter($__internal_a7158bfb4f482d69c3a0ac7f6eb797b1e3ada76f18f98b4bfd49637b7cbf4f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_df531563ef3f7ddb4a3d67277386a6d2e7d1e3ef3d045d8d7246ff80e2044926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df531563ef3f7ddb4a3d67277386a6d2e7d1e3ef3d045d8d7246ff80e2044926->enter($__internal_df531563ef3f7ddb4a3d67277386a6d2e7d1e3ef3d045d8d7246ff80e2044926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_df531563ef3f7ddb4a3d67277386a6d2e7d1e3ef3d045d8d7246ff80e2044926->leave($__internal_df531563ef3f7ddb4a3d67277386a6d2e7d1e3ef3d045d8d7246ff80e2044926_prof);

        
        $__internal_a7158bfb4f482d69c3a0ac7f6eb797b1e3ada76f18f98b4bfd49637b7cbf4f93->leave($__internal_a7158bfb4f482d69c3a0ac7f6eb797b1e3ada76f18f98b4bfd49637b7cbf4f93_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_32e96df8a885ee7249049b864c1120f9ea8d92850ecb98b49ff71a7d3956c922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e96df8a885ee7249049b864c1120f9ea8d92850ecb98b49ff71a7d3956c922->enter($__internal_32e96df8a885ee7249049b864c1120f9ea8d92850ecb98b49ff71a7d3956c922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_0a8ea670e7c9db40fdb62874b0b0cefd7564c8d589e5938ada7537e1531a71d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8ea670e7c9db40fdb62874b0b0cefd7564c8d589e5938ada7537e1531a71d1->enter($__internal_0a8ea670e7c9db40fdb62874b0b0cefd7564c8d589e5938ada7537e1531a71d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_0a8ea670e7c9db40fdb62874b0b0cefd7564c8d589e5938ada7537e1531a71d1->leave($__internal_0a8ea670e7c9db40fdb62874b0b0cefd7564c8d589e5938ada7537e1531a71d1_prof);

        
        $__internal_32e96df8a885ee7249049b864c1120f9ea8d92850ecb98b49ff71a7d3956c922->leave($__internal_32e96df8a885ee7249049b864c1120f9ea8d92850ecb98b49ff71a7d3956c922_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a49ca9b1a18a72d7048c791e877f7ede7f806598e7265cffaf9794521c5e2242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49ca9b1a18a72d7048c791e877f7ede7f806598e7265cffaf9794521c5e2242->enter($__internal_a49ca9b1a18a72d7048c791e877f7ede7f806598e7265cffaf9794521c5e2242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d89b088148dda0e187851182f583146219de8484d885a13bf9ca398e2485dba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89b088148dda0e187851182f583146219de8484d885a13bf9ca398e2485dba2->enter($__internal_d89b088148dda0e187851182f583146219de8484d885a13bf9ca398e2485dba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_d89b088148dda0e187851182f583146219de8484d885a13bf9ca398e2485dba2->leave($__internal_d89b088148dda0e187851182f583146219de8484d885a13bf9ca398e2485dba2_prof);

        
        $__internal_a49ca9b1a18a72d7048c791e877f7ede7f806598e7265cffaf9794521c5e2242->leave($__internal_a49ca9b1a18a72d7048c791e877f7ede7f806598e7265cffaf9794521c5e2242_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4f9eb3b1d60943189240badb02f617143474d562b0987796ed305070e0b33bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9eb3b1d60943189240badb02f617143474d562b0987796ed305070e0b33bb8->enter($__internal_4f9eb3b1d60943189240badb02f617143474d562b0987796ed305070e0b33bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e0dadc6e1cec04e5d8cfe6f722b7209a8e609220539939af667942d7ab9c9911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dadc6e1cec04e5d8cfe6f722b7209a8e609220539939af667942d7ab9c9911->enter($__internal_e0dadc6e1cec04e5d8cfe6f722b7209a8e609220539939af667942d7ab9c9911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_e0dadc6e1cec04e5d8cfe6f722b7209a8e609220539939af667942d7ab9c9911->leave($__internal_e0dadc6e1cec04e5d8cfe6f722b7209a8e609220539939af667942d7ab9c9911_prof);

        
        $__internal_4f9eb3b1d60943189240badb02f617143474d562b0987796ed305070e0b33bb8->leave($__internal_4f9eb3b1d60943189240badb02f617143474d562b0987796ed305070e0b33bb8_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
