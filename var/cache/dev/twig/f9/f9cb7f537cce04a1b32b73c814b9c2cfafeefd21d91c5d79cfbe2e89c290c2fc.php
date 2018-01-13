<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6617c35e4b163bb5fa72e904f99f2d36ff92926e7d3b72951b8daaeb4b58cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c1c453cea0b39a43c44b53cd705bc2f03192439347c24364d8bac18b2c9a798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1c453cea0b39a43c44b53cd705bc2f03192439347c24364d8bac18b2c9a798->enter($__internal_9c1c453cea0b39a43c44b53cd705bc2f03192439347c24364d8bac18b2c9a798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c497f83cbe6d1c7073587151bb70d3b4b21c20723e648efb0ac60c342826e84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c497f83cbe6d1c7073587151bb70d3b4b21c20723e648efb0ac60c342826e84c->enter($__internal_c497f83cbe6d1c7073587151bb70d3b4b21c20723e648efb0ac60c342826e84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_9c1c453cea0b39a43c44b53cd705bc2f03192439347c24364d8bac18b2c9a798->leave($__internal_9c1c453cea0b39a43c44b53cd705bc2f03192439347c24364d8bac18b2c9a798_prof);

        
        $__internal_c497f83cbe6d1c7073587151bb70d3b4b21c20723e648efb0ac60c342826e84c->leave($__internal_c497f83cbe6d1c7073587151bb70d3b4b21c20723e648efb0ac60c342826e84c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_30bc96c9e72723c928c318e9bfdd7c27e0c7271af740de6b77bd2ad4bd55a19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bc96c9e72723c928c318e9bfdd7c27e0c7271af740de6b77bd2ad4bd55a19d->enter($__internal_30bc96c9e72723c928c318e9bfdd7c27e0c7271af740de6b77bd2ad4bd55a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ee7304046a8017149d22f914fdb6900e575b10cd4f4d2887a7226800669d6575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7304046a8017149d22f914fdb6900e575b10cd4f4d2887a7226800669d6575->enter($__internal_ee7304046a8017149d22f914fdb6900e575b10cd4f4d2887a7226800669d6575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ee7304046a8017149d22f914fdb6900e575b10cd4f4d2887a7226800669d6575->leave($__internal_ee7304046a8017149d22f914fdb6900e575b10cd4f4d2887a7226800669d6575_prof);

        
        $__internal_30bc96c9e72723c928c318e9bfdd7c27e0c7271af740de6b77bd2ad4bd55a19d->leave($__internal_30bc96c9e72723c928c318e9bfdd7c27e0c7271af740de6b77bd2ad4bd55a19d_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c113f7c61c77f555136281de645b89d7d66a7f51fcbb81cd3a12818be324b7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c113f7c61c77f555136281de645b89d7d66a7f51fcbb81cd3a12818be324b7ed->enter($__internal_c113f7c61c77f555136281de645b89d7d66a7f51fcbb81cd3a12818be324b7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_dae1686914882434ba0d461fee47f02600d30463fc60098ddfa2926a9cb26885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae1686914882434ba0d461fee47f02600d30463fc60098ddfa2926a9cb26885->enter($__internal_dae1686914882434ba0d461fee47f02600d30463fc60098ddfa2926a9cb26885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_dae1686914882434ba0d461fee47f02600d30463fc60098ddfa2926a9cb26885->leave($__internal_dae1686914882434ba0d461fee47f02600d30463fc60098ddfa2926a9cb26885_prof);

        
        $__internal_c113f7c61c77f555136281de645b89d7d66a7f51fcbb81cd3a12818be324b7ed->leave($__internal_c113f7c61c77f555136281de645b89d7d66a7f51fcbb81cd3a12818be324b7ed_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3dad2918d06dd4a921a4fcba5d65ff53f5267e78a3f1a1e546ef568b8855c6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dad2918d06dd4a921a4fcba5d65ff53f5267e78a3f1a1e546ef568b8855c6c6->enter($__internal_3dad2918d06dd4a921a4fcba5d65ff53f5267e78a3f1a1e546ef568b8855c6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e4e06a9626c4efba03c248cae6bda0185db50cb06fa79b6a498733aacec3c772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e06a9626c4efba03c248cae6bda0185db50cb06fa79b6a498733aacec3c772->enter($__internal_e4e06a9626c4efba03c248cae6bda0185db50cb06fa79b6a498733aacec3c772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_e4e06a9626c4efba03c248cae6bda0185db50cb06fa79b6a498733aacec3c772->leave($__internal_e4e06a9626c4efba03c248cae6bda0185db50cb06fa79b6a498733aacec3c772_prof);

        
        $__internal_3dad2918d06dd4a921a4fcba5d65ff53f5267e78a3f1a1e546ef568b8855c6c6->leave($__internal_3dad2918d06dd4a921a4fcba5d65ff53f5267e78a3f1a1e546ef568b8855c6c6_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e75faec507f0b597c667b1aafd1929f10103e623d31acf68bacae30c20ad20f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75faec507f0b597c667b1aafd1929f10103e623d31acf68bacae30c20ad20f1->enter($__internal_e75faec507f0b597c667b1aafd1929f10103e623d31acf68bacae30c20ad20f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_06939e399761d41be04662d18b060f1fe0be56bece6cb1c908acfdb88cb84c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06939e399761d41be04662d18b060f1fe0be56bece6cb1c908acfdb88cb84c98->enter($__internal_06939e399761d41be04662d18b060f1fe0be56bece6cb1c908acfdb88cb84c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_06939e399761d41be04662d18b060f1fe0be56bece6cb1c908acfdb88cb84c98->leave($__internal_06939e399761d41be04662d18b060f1fe0be56bece6cb1c908acfdb88cb84c98_prof);

        
        $__internal_e75faec507f0b597c667b1aafd1929f10103e623d31acf68bacae30c20ad20f1->leave($__internal_e75faec507f0b597c667b1aafd1929f10103e623d31acf68bacae30c20ad20f1_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9bc11f2adf5308df80069c750b6f1795d766a798c088744d01076857d1c1e8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc11f2adf5308df80069c750b6f1795d766a798c088744d01076857d1c1e8ab->enter($__internal_9bc11f2adf5308df80069c750b6f1795d766a798c088744d01076857d1c1e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ff38f297de0eb725942dbf0dd0dd1dc31c404be89e5b9a745aa5d18f3da20fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff38f297de0eb725942dbf0dd0dd1dc31c404be89e5b9a745aa5d18f3da20fcb->enter($__internal_ff38f297de0eb725942dbf0dd0dd1dc31c404be89e5b9a745aa5d18f3da20fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ff38f297de0eb725942dbf0dd0dd1dc31c404be89e5b9a745aa5d18f3da20fcb->leave($__internal_ff38f297de0eb725942dbf0dd0dd1dc31c404be89e5b9a745aa5d18f3da20fcb_prof);

        
        $__internal_9bc11f2adf5308df80069c750b6f1795d766a798c088744d01076857d1c1e8ab->leave($__internal_9bc11f2adf5308df80069c750b6f1795d766a798c088744d01076857d1c1e8ab_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_096d2e117dabc4a9be66cf41d59bc8bbe3980f667a409732bc773aa2f1fcaedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096d2e117dabc4a9be66cf41d59bc8bbe3980f667a409732bc773aa2f1fcaedb->enter($__internal_096d2e117dabc4a9be66cf41d59bc8bbe3980f667a409732bc773aa2f1fcaedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_12d942ed17421ad0c5a4dfdc36cd62ee798a8ab37a3a5a59810627d74be3df7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d942ed17421ad0c5a4dfdc36cd62ee798a8ab37a3a5a59810627d74be3df7f->enter($__internal_12d942ed17421ad0c5a4dfdc36cd62ee798a8ab37a3a5a59810627d74be3df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_12d942ed17421ad0c5a4dfdc36cd62ee798a8ab37a3a5a59810627d74be3df7f->leave($__internal_12d942ed17421ad0c5a4dfdc36cd62ee798a8ab37a3a5a59810627d74be3df7f_prof);

        
        $__internal_096d2e117dabc4a9be66cf41d59bc8bbe3980f667a409732bc773aa2f1fcaedb->leave($__internal_096d2e117dabc4a9be66cf41d59bc8bbe3980f667a409732bc773aa2f1fcaedb_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c95228e8b3193fc4473bd8bb35f6165c9f882b290a8719f055b7ad609b50b280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95228e8b3193fc4473bd8bb35f6165c9f882b290a8719f055b7ad609b50b280->enter($__internal_c95228e8b3193fc4473bd8bb35f6165c9f882b290a8719f055b7ad609b50b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_25e37fdeda8594fb05317ad9090140004735a53f4d5a8a85440747ab0a24155e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e37fdeda8594fb05317ad9090140004735a53f4d5a8a85440747ab0a24155e->enter($__internal_25e37fdeda8594fb05317ad9090140004735a53f4d5a8a85440747ab0a24155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_25e37fdeda8594fb05317ad9090140004735a53f4d5a8a85440747ab0a24155e->leave($__internal_25e37fdeda8594fb05317ad9090140004735a53f4d5a8a85440747ab0a24155e_prof);

        
        $__internal_c95228e8b3193fc4473bd8bb35f6165c9f882b290a8719f055b7ad609b50b280->leave($__internal_c95228e8b3193fc4473bd8bb35f6165c9f882b290a8719f055b7ad609b50b280_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_83d11ea6811b897acfd5c220b8433ba68560cc1198862d782a121336b45f9400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d11ea6811b897acfd5c220b8433ba68560cc1198862d782a121336b45f9400->enter($__internal_83d11ea6811b897acfd5c220b8433ba68560cc1198862d782a121336b45f9400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_920a47c9e3d64ff33feaa766e34f6043d1e99d683c5f31e7dd68f552c73d8cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920a47c9e3d64ff33feaa766e34f6043d1e99d683c5f31e7dd68f552c73d8cc4->enter($__internal_920a47c9e3d64ff33feaa766e34f6043d1e99d683c5f31e7dd68f552c73d8cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_920a47c9e3d64ff33feaa766e34f6043d1e99d683c5f31e7dd68f552c73d8cc4->leave($__internal_920a47c9e3d64ff33feaa766e34f6043d1e99d683c5f31e7dd68f552c73d8cc4_prof);

        
        $__internal_83d11ea6811b897acfd5c220b8433ba68560cc1198862d782a121336b45f9400->leave($__internal_83d11ea6811b897acfd5c220b8433ba68560cc1198862d782a121336b45f9400_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e5041e65f234bdd29b26059df3f195975a21491908a04562323d493d004f40b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5041e65f234bdd29b26059df3f195975a21491908a04562323d493d004f40b4->enter($__internal_e5041e65f234bdd29b26059df3f195975a21491908a04562323d493d004f40b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_00af15077550ebbe4aadf8622bea1dfcaf38aa094d7195a10fa6d0e31060155c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00af15077550ebbe4aadf8622bea1dfcaf38aa094d7195a10fa6d0e31060155c->enter($__internal_00af15077550ebbe4aadf8622bea1dfcaf38aa094d7195a10fa6d0e31060155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_00af15077550ebbe4aadf8622bea1dfcaf38aa094d7195a10fa6d0e31060155c->leave($__internal_00af15077550ebbe4aadf8622bea1dfcaf38aa094d7195a10fa6d0e31060155c_prof);

        
        $__internal_e5041e65f234bdd29b26059df3f195975a21491908a04562323d493d004f40b4->leave($__internal_e5041e65f234bdd29b26059df3f195975a21491908a04562323d493d004f40b4_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_223fb0569175b87b1104fc3a2d12f61ba13dc4740a63b4cf86ec58454ee3f1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223fb0569175b87b1104fc3a2d12f61ba13dc4740a63b4cf86ec58454ee3f1b0->enter($__internal_223fb0569175b87b1104fc3a2d12f61ba13dc4740a63b4cf86ec58454ee3f1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_389196e2ff69984bcfa0e30439a21aad60326b02247591ca98f6a3b51d68d4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389196e2ff69984bcfa0e30439a21aad60326b02247591ca98f6a3b51d68d4d6->enter($__internal_389196e2ff69984bcfa0e30439a21aad60326b02247591ca98f6a3b51d68d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_389196e2ff69984bcfa0e30439a21aad60326b02247591ca98f6a3b51d68d4d6->leave($__internal_389196e2ff69984bcfa0e30439a21aad60326b02247591ca98f6a3b51d68d4d6_prof);

        
        $__internal_223fb0569175b87b1104fc3a2d12f61ba13dc4740a63b4cf86ec58454ee3f1b0->leave($__internal_223fb0569175b87b1104fc3a2d12f61ba13dc4740a63b4cf86ec58454ee3f1b0_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fcf9a4d92bbe01403f84cebad21b4e54b9809a49794c2a7986ec6cc6c9a8b0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf9a4d92bbe01403f84cebad21b4e54b9809a49794c2a7986ec6cc6c9a8b0e5->enter($__internal_fcf9a4d92bbe01403f84cebad21b4e54b9809a49794c2a7986ec6cc6c9a8b0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6a7434cac48b98b40774c08e0f872526c1aef5a307e605ce9654b872eaf6ae0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7434cac48b98b40774c08e0f872526c1aef5a307e605ce9654b872eaf6ae0c->enter($__internal_6a7434cac48b98b40774c08e0f872526c1aef5a307e605ce9654b872eaf6ae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_6a7434cac48b98b40774c08e0f872526c1aef5a307e605ce9654b872eaf6ae0c->leave($__internal_6a7434cac48b98b40774c08e0f872526c1aef5a307e605ce9654b872eaf6ae0c_prof);

        
        $__internal_fcf9a4d92bbe01403f84cebad21b4e54b9809a49794c2a7986ec6cc6c9a8b0e5->leave($__internal_fcf9a4d92bbe01403f84cebad21b4e54b9809a49794c2a7986ec6cc6c9a8b0e5_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a426a4485df3f0aee939fb8b64839b7b3cb4c92363c2f55864bbc4bffdd51788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a426a4485df3f0aee939fb8b64839b7b3cb4c92363c2f55864bbc4bffdd51788->enter($__internal_a426a4485df3f0aee939fb8b64839b7b3cb4c92363c2f55864bbc4bffdd51788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_107400155da430bc80076345a4ba0167958d9775df17aaca862e4ceb90e0f9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107400155da430bc80076345a4ba0167958d9775df17aaca862e4ceb90e0f9ae->enter($__internal_107400155da430bc80076345a4ba0167958d9775df17aaca862e4ceb90e0f9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_107400155da430bc80076345a4ba0167958d9775df17aaca862e4ceb90e0f9ae->leave($__internal_107400155da430bc80076345a4ba0167958d9775df17aaca862e4ceb90e0f9ae_prof);

        
        $__internal_a426a4485df3f0aee939fb8b64839b7b3cb4c92363c2f55864bbc4bffdd51788->leave($__internal_a426a4485df3f0aee939fb8b64839b7b3cb4c92363c2f55864bbc4bffdd51788_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ce5d68ed950ff2169a72ffe90c97d95a1a5166c56334064778af75057e4d10bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5d68ed950ff2169a72ffe90c97d95a1a5166c56334064778af75057e4d10bc->enter($__internal_ce5d68ed950ff2169a72ffe90c97d95a1a5166c56334064778af75057e4d10bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_aa81efcb67c81617fdaa4869224e923770f86f4c68e9edeeb01a80c7ec27198c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa81efcb67c81617fdaa4869224e923770f86f4c68e9edeeb01a80c7ec27198c->enter($__internal_aa81efcb67c81617fdaa4869224e923770f86f4c68e9edeeb01a80c7ec27198c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aa81efcb67c81617fdaa4869224e923770f86f4c68e9edeeb01a80c7ec27198c->leave($__internal_aa81efcb67c81617fdaa4869224e923770f86f4c68e9edeeb01a80c7ec27198c_prof);

        
        $__internal_ce5d68ed950ff2169a72ffe90c97d95a1a5166c56334064778af75057e4d10bc->leave($__internal_ce5d68ed950ff2169a72ffe90c97d95a1a5166c56334064778af75057e4d10bc_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e442fa6bfd9605a09336e92923f078053a5fcf7e6d2cd49554c90118cf15481e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e442fa6bfd9605a09336e92923f078053a5fcf7e6d2cd49554c90118cf15481e->enter($__internal_e442fa6bfd9605a09336e92923f078053a5fcf7e6d2cd49554c90118cf15481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_212d4ab426f2a160cca1ab18a1e7cf6c445e54e88bf591dee2e7684b29492577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212d4ab426f2a160cca1ab18a1e7cf6c445e54e88bf591dee2e7684b29492577->enter($__internal_212d4ab426f2a160cca1ab18a1e7cf6c445e54e88bf591dee2e7684b29492577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_212d4ab426f2a160cca1ab18a1e7cf6c445e54e88bf591dee2e7684b29492577->leave($__internal_212d4ab426f2a160cca1ab18a1e7cf6c445e54e88bf591dee2e7684b29492577_prof);

        
        $__internal_e442fa6bfd9605a09336e92923f078053a5fcf7e6d2cd49554c90118cf15481e->leave($__internal_e442fa6bfd9605a09336e92923f078053a5fcf7e6d2cd49554c90118cf15481e_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4a7abf8b3849782c64a2e71986b50bd5429d19fe1c23bd61da3c07785a3219c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7abf8b3849782c64a2e71986b50bd5429d19fe1c23bd61da3c07785a3219c6->enter($__internal_4a7abf8b3849782c64a2e71986b50bd5429d19fe1c23bd61da3c07785a3219c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_06ede967ebfa260d8e4ac123657c506c5d48a71fe3d9e23343c8207c4aa4d405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ede967ebfa260d8e4ac123657c506c5d48a71fe3d9e23343c8207c4aa4d405->enter($__internal_06ede967ebfa260d8e4ac123657c506c5d48a71fe3d9e23343c8207c4aa4d405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_06ede967ebfa260d8e4ac123657c506c5d48a71fe3d9e23343c8207c4aa4d405->leave($__internal_06ede967ebfa260d8e4ac123657c506c5d48a71fe3d9e23343c8207c4aa4d405_prof);

        
        $__internal_4a7abf8b3849782c64a2e71986b50bd5429d19fe1c23bd61da3c07785a3219c6->leave($__internal_4a7abf8b3849782c64a2e71986b50bd5429d19fe1c23bd61da3c07785a3219c6_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_78f0daddccced49997a54b91e354db0a20511d658fe676e0af9a25d09ca96e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f0daddccced49997a54b91e354db0a20511d658fe676e0af9a25d09ca96e0b->enter($__internal_78f0daddccced49997a54b91e354db0a20511d658fe676e0af9a25d09ca96e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_26002a4ece3371f6768a0c1fe5e1046e0cec60feab5e3a687af360490a7ef461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26002a4ece3371f6768a0c1fe5e1046e0cec60feab5e3a687af360490a7ef461->enter($__internal_26002a4ece3371f6768a0c1fe5e1046e0cec60feab5e3a687af360490a7ef461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_26002a4ece3371f6768a0c1fe5e1046e0cec60feab5e3a687af360490a7ef461->leave($__internal_26002a4ece3371f6768a0c1fe5e1046e0cec60feab5e3a687af360490a7ef461_prof);

        
        $__internal_78f0daddccced49997a54b91e354db0a20511d658fe676e0af9a25d09ca96e0b->leave($__internal_78f0daddccced49997a54b91e354db0a20511d658fe676e0af9a25d09ca96e0b_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4181c9027a7a1a9b001bcbd6edaf3fe4373dcec52524e622bee898378e07ce7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4181c9027a7a1a9b001bcbd6edaf3fe4373dcec52524e622bee898378e07ce7c->enter($__internal_4181c9027a7a1a9b001bcbd6edaf3fe4373dcec52524e622bee898378e07ce7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_892a88744235fce3d44472e99f6d699507680bd69102b2dfe5820ecf5252ccf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892a88744235fce3d44472e99f6d699507680bd69102b2dfe5820ecf5252ccf9->enter($__internal_892a88744235fce3d44472e99f6d699507680bd69102b2dfe5820ecf5252ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_892a88744235fce3d44472e99f6d699507680bd69102b2dfe5820ecf5252ccf9->leave($__internal_892a88744235fce3d44472e99f6d699507680bd69102b2dfe5820ecf5252ccf9_prof);

        
        $__internal_4181c9027a7a1a9b001bcbd6edaf3fe4373dcec52524e622bee898378e07ce7c->leave($__internal_4181c9027a7a1a9b001bcbd6edaf3fe4373dcec52524e622bee898378e07ce7c_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2bc93ac9296b9e69cea34adf9faeb442075f22d3831ae75705a4a0e67cdefa17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc93ac9296b9e69cea34adf9faeb442075f22d3831ae75705a4a0e67cdefa17->enter($__internal_2bc93ac9296b9e69cea34adf9faeb442075f22d3831ae75705a4a0e67cdefa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2a13eda4a4a1990b0653838dcff999a8f47ad7555420c61ad6726f5a7afa97a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a13eda4a4a1990b0653838dcff999a8f47ad7555420c61ad6726f5a7afa97a6->enter($__internal_2a13eda4a4a1990b0653838dcff999a8f47ad7555420c61ad6726f5a7afa97a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2a13eda4a4a1990b0653838dcff999a8f47ad7555420c61ad6726f5a7afa97a6->leave($__internal_2a13eda4a4a1990b0653838dcff999a8f47ad7555420c61ad6726f5a7afa97a6_prof);

        
        $__internal_2bc93ac9296b9e69cea34adf9faeb442075f22d3831ae75705a4a0e67cdefa17->leave($__internal_2bc93ac9296b9e69cea34adf9faeb442075f22d3831ae75705a4a0e67cdefa17_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
