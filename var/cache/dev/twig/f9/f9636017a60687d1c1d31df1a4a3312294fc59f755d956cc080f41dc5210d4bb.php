<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_fd56ab7cef52c4c8575cc4e5cb66acb790adf599697eef271833c76e06bd13c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d032df3133e8572a3c838ff06fa7bcccb1f62d34dd126fba89fe800ec593cfa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d032df3133e8572a3c838ff06fa7bcccb1f62d34dd126fba89fe800ec593cfa9->enter($__internal_d032df3133e8572a3c838ff06fa7bcccb1f62d34dd126fba89fe800ec593cfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_6431addc0f577312be6a45694524b70d470c7e103339e49e3df65c856ea19a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6431addc0f577312be6a45694524b70d470c7e103339e49e3df65c856ea19a3a->enter($__internal_6431addc0f577312be6a45694524b70d470c7e103339e49e3df65c856ea19a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_d032df3133e8572a3c838ff06fa7bcccb1f62d34dd126fba89fe800ec593cfa9->leave($__internal_d032df3133e8572a3c838ff06fa7bcccb1f62d34dd126fba89fe800ec593cfa9_prof);

        
        $__internal_6431addc0f577312be6a45694524b70d470c7e103339e49e3df65c856ea19a3a->leave($__internal_6431addc0f577312be6a45694524b70d470c7e103339e49e3df65c856ea19a3a_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8e6ebdec3b87c64fa56c7370f6b6f2836b806f467df360c1386586d4222f1a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6ebdec3b87c64fa56c7370f6b6f2836b806f467df360c1386586d4222f1a96->enter($__internal_8e6ebdec3b87c64fa56c7370f6b6f2836b806f467df360c1386586d4222f1a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8792ba7ea162d8956cc141019eedaf114646dd8c422a58abdd1f526aead94f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8792ba7ea162d8956cc141019eedaf114646dd8c422a58abdd1f526aead94f81->enter($__internal_8792ba7ea162d8956cc141019eedaf114646dd8c422a58abdd1f526aead94f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_8792ba7ea162d8956cc141019eedaf114646dd8c422a58abdd1f526aead94f81->leave($__internal_8792ba7ea162d8956cc141019eedaf114646dd8c422a58abdd1f526aead94f81_prof);

        
        $__internal_8e6ebdec3b87c64fa56c7370f6b6f2836b806f467df360c1386586d4222f1a96->leave($__internal_8e6ebdec3b87c64fa56c7370f6b6f2836b806f467df360c1386586d4222f1a96_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9fcb6342b21d19d00a5d63a83cc183be62bf947a37907c9959da6c8cf2457a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcb6342b21d19d00a5d63a83cc183be62bf947a37907c9959da6c8cf2457a7e->enter($__internal_9fcb6342b21d19d00a5d63a83cc183be62bf947a37907c9959da6c8cf2457a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cede4f520c472c1d0b615740b27e4de45c86ccb94db4f48a7c535995b6f4dfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cede4f520c472c1d0b615740b27e4de45c86ccb94db4f48a7c535995b6f4dfc4->enter($__internal_cede4f520c472c1d0b615740b27e4de45c86ccb94db4f48a7c535995b6f4dfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_cede4f520c472c1d0b615740b27e4de45c86ccb94db4f48a7c535995b6f4dfc4->leave($__internal_cede4f520c472c1d0b615740b27e4de45c86ccb94db4f48a7c535995b6f4dfc4_prof);

        
        $__internal_9fcb6342b21d19d00a5d63a83cc183be62bf947a37907c9959da6c8cf2457a7e->leave($__internal_9fcb6342b21d19d00a5d63a83cc183be62bf947a37907c9959da6c8cf2457a7e_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b577f212e3408ee3ab533690b8952db0f7eff0ad92b64a2825190e869721ad7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b577f212e3408ee3ab533690b8952db0f7eff0ad92b64a2825190e869721ad7c->enter($__internal_b577f212e3408ee3ab533690b8952db0f7eff0ad92b64a2825190e869721ad7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_82c23efc462189ad42a505df573599d84bed90c30c0bc9bb5f8fb04fad448c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c23efc462189ad42a505df573599d84bed90c30c0bc9bb5f8fb04fad448c24->enter($__internal_82c23efc462189ad42a505df573599d84bed90c30c0bc9bb5f8fb04fad448c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_82c23efc462189ad42a505df573599d84bed90c30c0bc9bb5f8fb04fad448c24->leave($__internal_82c23efc462189ad42a505df573599d84bed90c30c0bc9bb5f8fb04fad448c24_prof);

        
        $__internal_b577f212e3408ee3ab533690b8952db0f7eff0ad92b64a2825190e869721ad7c->leave($__internal_b577f212e3408ee3ab533690b8952db0f7eff0ad92b64a2825190e869721ad7c_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_dfc23c1741da63631b24d9c3c1987a574b1619e565044411fb890287a705b107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc23c1741da63631b24d9c3c1987a574b1619e565044411fb890287a705b107->enter($__internal_dfc23c1741da63631b24d9c3c1987a574b1619e565044411fb890287a705b107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_2fbe5bdedb4d778be379f71774e3c37e0f8097bfd3deb36aafbff6aebcb11eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbe5bdedb4d778be379f71774e3c37e0f8097bfd3deb36aafbff6aebcb11eb1->enter($__internal_2fbe5bdedb4d778be379f71774e3c37e0f8097bfd3deb36aafbff6aebcb11eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_2fbe5bdedb4d778be379f71774e3c37e0f8097bfd3deb36aafbff6aebcb11eb1->leave($__internal_2fbe5bdedb4d778be379f71774e3c37e0f8097bfd3deb36aafbff6aebcb11eb1_prof);

        
        $__internal_dfc23c1741da63631b24d9c3c1987a574b1619e565044411fb890287a705b107->leave($__internal_dfc23c1741da63631b24d9c3c1987a574b1619e565044411fb890287a705b107_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_6cf247f54b801c5ab3a2d67f9976ed0921f6800de2a716cdb7be1813cd27d83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf247f54b801c5ab3a2d67f9976ed0921f6800de2a716cdb7be1813cd27d83a->enter($__internal_6cf247f54b801c5ab3a2d67f9976ed0921f6800de2a716cdb7be1813cd27d83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b2417d7521bff05b57e208b58ee1706322ac40e1245def280fe6796c4e95e67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2417d7521bff05b57e208b58ee1706322ac40e1245def280fe6796c4e95e67e->enter($__internal_b2417d7521bff05b57e208b58ee1706322ac40e1245def280fe6796c4e95e67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_b2417d7521bff05b57e208b58ee1706322ac40e1245def280fe6796c4e95e67e->leave($__internal_b2417d7521bff05b57e208b58ee1706322ac40e1245def280fe6796c4e95e67e_prof);

        
        $__internal_6cf247f54b801c5ab3a2d67f9976ed0921f6800de2a716cdb7be1813cd27d83a->leave($__internal_6cf247f54b801c5ab3a2d67f9976ed0921f6800de2a716cdb7be1813cd27d83a_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_af961540fb6f2ab58cbea5c8b4a1157b360f46228d9b81f65569d2e2539dd37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af961540fb6f2ab58cbea5c8b4a1157b360f46228d9b81f65569d2e2539dd37d->enter($__internal_af961540fb6f2ab58cbea5c8b4a1157b360f46228d9b81f65569d2e2539dd37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c8c021191232eb28937897bbb8d8c8ac1355b94c622a256e928843cfed64cf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c021191232eb28937897bbb8d8c8ac1355b94c622a256e928843cfed64cf8c->enter($__internal_c8c021191232eb28937897bbb8d8c8ac1355b94c622a256e928843cfed64cf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_c8c021191232eb28937897bbb8d8c8ac1355b94c622a256e928843cfed64cf8c->leave($__internal_c8c021191232eb28937897bbb8d8c8ac1355b94c622a256e928843cfed64cf8c_prof);

        
        $__internal_af961540fb6f2ab58cbea5c8b4a1157b360f46228d9b81f65569d2e2539dd37d->leave($__internal_af961540fb6f2ab58cbea5c8b4a1157b360f46228d9b81f65569d2e2539dd37d_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_d06d8383b45b2f43593c93ed4eda07b0c16754063de7ff1bb70f373b6cbaa63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06d8383b45b2f43593c93ed4eda07b0c16754063de7ff1bb70f373b6cbaa63a->enter($__internal_d06d8383b45b2f43593c93ed4eda07b0c16754063de7ff1bb70f373b6cbaa63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_793c10e8e4ea6a1ba43e244cca95ef39bdeaafff4f90eaa86b4844a329f78486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793c10e8e4ea6a1ba43e244cca95ef39bdeaafff4f90eaa86b4844a329f78486->enter($__internal_793c10e8e4ea6a1ba43e244cca95ef39bdeaafff4f90eaa86b4844a329f78486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_793c10e8e4ea6a1ba43e244cca95ef39bdeaafff4f90eaa86b4844a329f78486->leave($__internal_793c10e8e4ea6a1ba43e244cca95ef39bdeaafff4f90eaa86b4844a329f78486_prof);

        
        $__internal_d06d8383b45b2f43593c93ed4eda07b0c16754063de7ff1bb70f373b6cbaa63a->leave($__internal_d06d8383b45b2f43593c93ed4eda07b0c16754063de7ff1bb70f373b6cbaa63a_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_66b7bc500e5a69a1c6f46e8ee731aa28437fb54d75c3d3c7b91b42869b043c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b7bc500e5a69a1c6f46e8ee731aa28437fb54d75c3d3c7b91b42869b043c5d->enter($__internal_66b7bc500e5a69a1c6f46e8ee731aa28437fb54d75c3d3c7b91b42869b043c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b4047dd0a38cc3aab6e2c620e05ae88ec47439bd5cb85da46e7d6b95e538282f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4047dd0a38cc3aab6e2c620e05ae88ec47439bd5cb85da46e7d6b95e538282f->enter($__internal_b4047dd0a38cc3aab6e2c620e05ae88ec47439bd5cb85da46e7d6b95e538282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_b4047dd0a38cc3aab6e2c620e05ae88ec47439bd5cb85da46e7d6b95e538282f->leave($__internal_b4047dd0a38cc3aab6e2c620e05ae88ec47439bd5cb85da46e7d6b95e538282f_prof);

        
        $__internal_66b7bc500e5a69a1c6f46e8ee731aa28437fb54d75c3d3c7b91b42869b043c5d->leave($__internal_66b7bc500e5a69a1c6f46e8ee731aa28437fb54d75c3d3c7b91b42869b043c5d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
