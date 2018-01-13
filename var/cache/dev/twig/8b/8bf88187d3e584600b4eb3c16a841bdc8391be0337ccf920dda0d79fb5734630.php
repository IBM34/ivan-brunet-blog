<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_66e14cb8f92d98bb7c533f4bb7804fe2bf3e89d099cbbf4ce8f535c297579929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b045d3a17f6371ba971959bb22201d15edbd6ff11ec1dae68adfb8865517264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b045d3a17f6371ba971959bb22201d15edbd6ff11ec1dae68adfb8865517264->enter($__internal_5b045d3a17f6371ba971959bb22201d15edbd6ff11ec1dae68adfb8865517264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_7f3c383519a1d082c8fc2cc15bc861f0ff404a2001cda92852cfebcf20c12a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3c383519a1d082c8fc2cc15bc861f0ff404a2001cda92852cfebcf20c12a92->enter($__internal_7f3c383519a1d082c8fc2cc15bc861f0ff404a2001cda92852cfebcf20c12a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_5b045d3a17f6371ba971959bb22201d15edbd6ff11ec1dae68adfb8865517264->leave($__internal_5b045d3a17f6371ba971959bb22201d15edbd6ff11ec1dae68adfb8865517264_prof);

        
        $__internal_7f3c383519a1d082c8fc2cc15bc861f0ff404a2001cda92852cfebcf20c12a92->leave($__internal_7f3c383519a1d082c8fc2cc15bc861f0ff404a2001cda92852cfebcf20c12a92_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3114ddebd291902bff1f779f4c00d2bb4f319da4395b15eb3b57811a7e3d0c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3114ddebd291902bff1f779f4c00d2bb4f319da4395b15eb3b57811a7e3d0c20->enter($__internal_3114ddebd291902bff1f779f4c00d2bb4f319da4395b15eb3b57811a7e3d0c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a29e9ab2661740833212778d358d81b5d10376801181f6b159880acce77529d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29e9ab2661740833212778d358d81b5d10376801181f6b159880acce77529d8->enter($__internal_a29e9ab2661740833212778d358d81b5d10376801181f6b159880acce77529d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a29e9ab2661740833212778d358d81b5d10376801181f6b159880acce77529d8->leave($__internal_a29e9ab2661740833212778d358d81b5d10376801181f6b159880acce77529d8_prof);

        
        $__internal_3114ddebd291902bff1f779f4c00d2bb4f319da4395b15eb3b57811a7e3d0c20->leave($__internal_3114ddebd291902bff1f779f4c00d2bb4f319da4395b15eb3b57811a7e3d0c20_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7d79a1d6b0231eff39ca902ea2d3e1b58008deeb0cd37e4af98ce794098d73d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d79a1d6b0231eff39ca902ea2d3e1b58008deeb0cd37e4af98ce794098d73d7->enter($__internal_7d79a1d6b0231eff39ca902ea2d3e1b58008deeb0cd37e4af98ce794098d73d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_aeeb6f6d871315bb3ed3a1d5238fa8f4db45daeeb843883b306c2a0f1a965be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeeb6f6d871315bb3ed3a1d5238fa8f4db45daeeb843883b306c2a0f1a965be6->enter($__internal_aeeb6f6d871315bb3ed3a1d5238fa8f4db45daeeb843883b306c2a0f1a965be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_17c4974e9720fff64750c191a5828f508c935a8779b92f3c9d5aa3465408655d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_639a52d8ea126187fc70bfce3fa338059262abec4ee97f06c57bc46fbe3039e0 = "{{") && ('' === $__internal_639a52d8ea126187fc70bfce3fa338059262abec4ee97f06c57bc46fbe3039e0 || 0 === strpos($__internal_17c4974e9720fff64750c191a5828f508c935a8779b92f3c9d5aa3465408655d, $__internal_639a52d8ea126187fc70bfce3fa338059262abec4ee97f06c57bc46fbe3039e0)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_29d7911ad1af5733c1069d2946db9edc117bfc75288151b19248e3665e23e970 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_b977fcd5be7ec94f55e97a2b45f523dc8ffde9c3d2b6611b3fc8058b7e93d7fc = "}}") && ('' === $__internal_b977fcd5be7ec94f55e97a2b45f523dc8ffde9c3d2b6611b3fc8058b7e93d7fc || $__internal_b977fcd5be7ec94f55e97a2b45f523dc8ffde9c3d2b6611b3fc8058b7e93d7fc === substr($__internal_29d7911ad1af5733c1069d2946db9edc117bfc75288151b19248e3665e23e970, -strlen($__internal_b977fcd5be7ec94f55e97a2b45f523dc8ffde9c3d2b6611b3fc8058b7e93d7fc))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_aeeb6f6d871315bb3ed3a1d5238fa8f4db45daeeb843883b306c2a0f1a965be6->leave($__internal_aeeb6f6d871315bb3ed3a1d5238fa8f4db45daeeb843883b306c2a0f1a965be6_prof);

        
        $__internal_7d79a1d6b0231eff39ca902ea2d3e1b58008deeb0cd37e4af98ce794098d73d7->leave($__internal_7d79a1d6b0231eff39ca902ea2d3e1b58008deeb0cd37e4af98ce794098d73d7_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8947f38e90491f815f0e97ce7fa30985bcb5fa2079bf039cbac9f60f74728829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8947f38e90491f815f0e97ce7fa30985bcb5fa2079bf039cbac9f60f74728829->enter($__internal_8947f38e90491f815f0e97ce7fa30985bcb5fa2079bf039cbac9f60f74728829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3bce29b40f47d40ffac253efa0f384b2c53ca131a1c8227f76e0c4d27564ebe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bce29b40f47d40ffac253efa0f384b2c53ca131a1c8227f76e0c4d27564ebe0->enter($__internal_3bce29b40f47d40ffac253efa0f384b2c53ca131a1c8227f76e0c4d27564ebe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_3bce29b40f47d40ffac253efa0f384b2c53ca131a1c8227f76e0c4d27564ebe0->leave($__internal_3bce29b40f47d40ffac253efa0f384b2c53ca131a1c8227f76e0c4d27564ebe0_prof);

        
        $__internal_8947f38e90491f815f0e97ce7fa30985bcb5fa2079bf039cbac9f60f74728829->leave($__internal_8947f38e90491f815f0e97ce7fa30985bcb5fa2079bf039cbac9f60f74728829_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_656268725e0e0dc80c45ceabc71bf5db5b675f14f59e817bfaa9cb4381afefe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656268725e0e0dc80c45ceabc71bf5db5b675f14f59e817bfaa9cb4381afefe6->enter($__internal_656268725e0e0dc80c45ceabc71bf5db5b675f14f59e817bfaa9cb4381afefe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9a36532c01edeb66e11181ebd110729641579dfe74452c70da574128985c7ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a36532c01edeb66e11181ebd110729641579dfe74452c70da574128985c7ade->enter($__internal_9a36532c01edeb66e11181ebd110729641579dfe74452c70da574128985c7ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_9a36532c01edeb66e11181ebd110729641579dfe74452c70da574128985c7ade->leave($__internal_9a36532c01edeb66e11181ebd110729641579dfe74452c70da574128985c7ade_prof);

        
        $__internal_656268725e0e0dc80c45ceabc71bf5db5b675f14f59e817bfaa9cb4381afefe6->leave($__internal_656268725e0e0dc80c45ceabc71bf5db5b675f14f59e817bfaa9cb4381afefe6_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_56cbb0326c058e86c26d04d5e2748be8b5d40755b77db77d230ee0f95a7c4a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cbb0326c058e86c26d04d5e2748be8b5d40755b77db77d230ee0f95a7c4a77->enter($__internal_56cbb0326c058e86c26d04d5e2748be8b5d40755b77db77d230ee0f95a7c4a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e28045841571eb8b22b716228b152d91075262c6203b7252e504a9652e31bd57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28045841571eb8b22b716228b152d91075262c6203b7252e504a9652e31bd57->enter($__internal_e28045841571eb8b22b716228b152d91075262c6203b7252e504a9652e31bd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_e28045841571eb8b22b716228b152d91075262c6203b7252e504a9652e31bd57->leave($__internal_e28045841571eb8b22b716228b152d91075262c6203b7252e504a9652e31bd57_prof);

        
        $__internal_56cbb0326c058e86c26d04d5e2748be8b5d40755b77db77d230ee0f95a7c4a77->leave($__internal_56cbb0326c058e86c26d04d5e2748be8b5d40755b77db77d230ee0f95a7c4a77_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c8fe58debd711b67f1523565e7e5619f0961e74a915b1ca144c0feba1883acec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fe58debd711b67f1523565e7e5619f0961e74a915b1ca144c0feba1883acec->enter($__internal_c8fe58debd711b67f1523565e7e5619f0961e74a915b1ca144c0feba1883acec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e2d0cc791eea2785a0bd2bc6c637e4619677975cb976eb8f6569e0039dd72055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d0cc791eea2785a0bd2bc6c637e4619677975cb976eb8f6569e0039dd72055->enter($__internal_e2d0cc791eea2785a0bd2bc6c637e4619677975cb976eb8f6569e0039dd72055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_e2d0cc791eea2785a0bd2bc6c637e4619677975cb976eb8f6569e0039dd72055->leave($__internal_e2d0cc791eea2785a0bd2bc6c637e4619677975cb976eb8f6569e0039dd72055_prof);

        
        $__internal_c8fe58debd711b67f1523565e7e5619f0961e74a915b1ca144c0feba1883acec->leave($__internal_c8fe58debd711b67f1523565e7e5619f0961e74a915b1ca144c0feba1883acec_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_90bd882d8dcb6277234402c31816f2be051d958452881d8e3928ed479c3637ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bd882d8dcb6277234402c31816f2be051d958452881d8e3928ed479c3637ad->enter($__internal_90bd882d8dcb6277234402c31816f2be051d958452881d8e3928ed479c3637ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8a9a8dd7954e3dca6745c968ab85ba63725ba2df252f5bd43405aa86c3c788ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9a8dd7954e3dca6745c968ab85ba63725ba2df252f5bd43405aa86c3c788ee->enter($__internal_8a9a8dd7954e3dca6745c968ab85ba63725ba2df252f5bd43405aa86c3c788ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_8a9a8dd7954e3dca6745c968ab85ba63725ba2df252f5bd43405aa86c3c788ee->leave($__internal_8a9a8dd7954e3dca6745c968ab85ba63725ba2df252f5bd43405aa86c3c788ee_prof);

        
        $__internal_90bd882d8dcb6277234402c31816f2be051d958452881d8e3928ed479c3637ad->leave($__internal_90bd882d8dcb6277234402c31816f2be051d958452881d8e3928ed479c3637ad_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_414d9e83b7aee7fcae2d2f5450c08998d555daec3644a405e22d89abc66e19fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414d9e83b7aee7fcae2d2f5450c08998d555daec3644a405e22d89abc66e19fc->enter($__internal_414d9e83b7aee7fcae2d2f5450c08998d555daec3644a405e22d89abc66e19fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_db1e052f9e6e09eb48e309b8b8c448481520320f544c0165331d61a03d4ea9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1e052f9e6e09eb48e309b8b8c448481520320f544c0165331d61a03d4ea9e7->enter($__internal_db1e052f9e6e09eb48e309b8b8c448481520320f544c0165331d61a03d4ea9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_db1e052f9e6e09eb48e309b8b8c448481520320f544c0165331d61a03d4ea9e7->leave($__internal_db1e052f9e6e09eb48e309b8b8c448481520320f544c0165331d61a03d4ea9e7_prof);

        
        $__internal_414d9e83b7aee7fcae2d2f5450c08998d555daec3644a405e22d89abc66e19fc->leave($__internal_414d9e83b7aee7fcae2d2f5450c08998d555daec3644a405e22d89abc66e19fc_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c3929f468f3d088562d09ea9cd215135434f21e74a144fcd41f59f3b1dcfba6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3929f468f3d088562d09ea9cd215135434f21e74a144fcd41f59f3b1dcfba6a->enter($__internal_c3929f468f3d088562d09ea9cd215135434f21e74a144fcd41f59f3b1dcfba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_51dfe2736742c1344d9bc5c045756bc38d0b929bf25fa6b83469184fcf8caedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dfe2736742c1344d9bc5c045756bc38d0b929bf25fa6b83469184fcf8caedb->enter($__internal_51dfe2736742c1344d9bc5c045756bc38d0b929bf25fa6b83469184fcf8caedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_51dfe2736742c1344d9bc5c045756bc38d0b929bf25fa6b83469184fcf8caedb->leave($__internal_51dfe2736742c1344d9bc5c045756bc38d0b929bf25fa6b83469184fcf8caedb_prof);

        
        $__internal_c3929f468f3d088562d09ea9cd215135434f21e74a144fcd41f59f3b1dcfba6a->leave($__internal_c3929f468f3d088562d09ea9cd215135434f21e74a144fcd41f59f3b1dcfba6a_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d567468071aa9b66e597582772465c7929c052000d17e4c503140411e240ab09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d567468071aa9b66e597582772465c7929c052000d17e4c503140411e240ab09->enter($__internal_d567468071aa9b66e597582772465c7929c052000d17e4c503140411e240ab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_17da31e9082494c551c5dfcbe19d807ffc13addd42c7e2dab67ea77729568f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17da31e9082494c551c5dfcbe19d807ffc13addd42c7e2dab67ea77729568f02->enter($__internal_17da31e9082494c551c5dfcbe19d807ffc13addd42c7e2dab67ea77729568f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_17da31e9082494c551c5dfcbe19d807ffc13addd42c7e2dab67ea77729568f02->leave($__internal_17da31e9082494c551c5dfcbe19d807ffc13addd42c7e2dab67ea77729568f02_prof);

        
        $__internal_d567468071aa9b66e597582772465c7929c052000d17e4c503140411e240ab09->leave($__internal_d567468071aa9b66e597582772465c7929c052000d17e4c503140411e240ab09_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a4c1c1e811a70fb91a5b21a075725601c53fee6601126d28526a1cf443d18674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c1c1e811a70fb91a5b21a075725601c53fee6601126d28526a1cf443d18674->enter($__internal_a4c1c1e811a70fb91a5b21a075725601c53fee6601126d28526a1cf443d18674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0de19be821745bd06af2ff8aba1179ff5ed6f5267dcaf6b50d6af23800444fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de19be821745bd06af2ff8aba1179ff5ed6f5267dcaf6b50d6af23800444fed->enter($__internal_0de19be821745bd06af2ff8aba1179ff5ed6f5267dcaf6b50d6af23800444fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0de19be821745bd06af2ff8aba1179ff5ed6f5267dcaf6b50d6af23800444fed->leave($__internal_0de19be821745bd06af2ff8aba1179ff5ed6f5267dcaf6b50d6af23800444fed_prof);

        
        $__internal_a4c1c1e811a70fb91a5b21a075725601c53fee6601126d28526a1cf443d18674->leave($__internal_a4c1c1e811a70fb91a5b21a075725601c53fee6601126d28526a1cf443d18674_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7cab5ac58acaaff69aecba40d508ef880979f70b4d6c4465d9bbb4fea6d7a148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cab5ac58acaaff69aecba40d508ef880979f70b4d6c4465d9bbb4fea6d7a148->enter($__internal_7cab5ac58acaaff69aecba40d508ef880979f70b4d6c4465d9bbb4fea6d7a148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e0858d048238151f08b344408f9a2accf5e173845b001de37102eb7ebd5d98f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0858d048238151f08b344408f9a2accf5e173845b001de37102eb7ebd5d98f4->enter($__internal_e0858d048238151f08b344408f9a2accf5e173845b001de37102eb7ebd5d98f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e0858d048238151f08b344408f9a2accf5e173845b001de37102eb7ebd5d98f4->leave($__internal_e0858d048238151f08b344408f9a2accf5e173845b001de37102eb7ebd5d98f4_prof);

        
        $__internal_7cab5ac58acaaff69aecba40d508ef880979f70b4d6c4465d9bbb4fea6d7a148->leave($__internal_7cab5ac58acaaff69aecba40d508ef880979f70b4d6c4465d9bbb4fea6d7a148_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a9b0ba419314c74c0237b8bc290fd3261f9f930d01ea51e18e4222e546b2deac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b0ba419314c74c0237b8bc290fd3261f9f930d01ea51e18e4222e546b2deac->enter($__internal_a9b0ba419314c74c0237b8bc290fd3261f9f930d01ea51e18e4222e546b2deac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_57a48327b843876994eaba09c5f2f48b0b894b240d0ee262cd2b1ebd1ab04c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a48327b843876994eaba09c5f2f48b0b894b240d0ee262cd2b1ebd1ab04c98->enter($__internal_57a48327b843876994eaba09c5f2f48b0b894b240d0ee262cd2b1ebd1ab04c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_57a48327b843876994eaba09c5f2f48b0b894b240d0ee262cd2b1ebd1ab04c98->leave($__internal_57a48327b843876994eaba09c5f2f48b0b894b240d0ee262cd2b1ebd1ab04c98_prof);

        
        $__internal_a9b0ba419314c74c0237b8bc290fd3261f9f930d01ea51e18e4222e546b2deac->leave($__internal_a9b0ba419314c74c0237b8bc290fd3261f9f930d01ea51e18e4222e546b2deac_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6c6ae837f81d9596456d0a2a28520f97c2c96cc33544a620211007a598646aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6ae837f81d9596456d0a2a28520f97c2c96cc33544a620211007a598646aa7->enter($__internal_6c6ae837f81d9596456d0a2a28520f97c2c96cc33544a620211007a598646aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4a86e0fc5cefa41d7c3e72ceed85aa890502209213cd05b84f2ec7b05130ae87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a86e0fc5cefa41d7c3e72ceed85aa890502209213cd05b84f2ec7b05130ae87->enter($__internal_4a86e0fc5cefa41d7c3e72ceed85aa890502209213cd05b84f2ec7b05130ae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4a86e0fc5cefa41d7c3e72ceed85aa890502209213cd05b84f2ec7b05130ae87->leave($__internal_4a86e0fc5cefa41d7c3e72ceed85aa890502209213cd05b84f2ec7b05130ae87_prof);

        
        $__internal_6c6ae837f81d9596456d0a2a28520f97c2c96cc33544a620211007a598646aa7->leave($__internal_6c6ae837f81d9596456d0a2a28520f97c2c96cc33544a620211007a598646aa7_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_32cb37c9cc4438e8cabd9869e39f95081ab8d7241ada74a4b7a28d81d571d4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cb37c9cc4438e8cabd9869e39f95081ab8d7241ada74a4b7a28d81d571d4df->enter($__internal_32cb37c9cc4438e8cabd9869e39f95081ab8d7241ada74a4b7a28d81d571d4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_41e8ef154bba1d0ef948842d5cf92b1de0090ee12157364892ce8f09114c3724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e8ef154bba1d0ef948842d5cf92b1de0090ee12157364892ce8f09114c3724->enter($__internal_41e8ef154bba1d0ef948842d5cf92b1de0090ee12157364892ce8f09114c3724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_41e8ef154bba1d0ef948842d5cf92b1de0090ee12157364892ce8f09114c3724->leave($__internal_41e8ef154bba1d0ef948842d5cf92b1de0090ee12157364892ce8f09114c3724_prof);

        
        $__internal_32cb37c9cc4438e8cabd9869e39f95081ab8d7241ada74a4b7a28d81d571d4df->leave($__internal_32cb37c9cc4438e8cabd9869e39f95081ab8d7241ada74a4b7a28d81d571d4df_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7ba9d28e389b1c5d2c134ecd5442d37dd4ce51265b16402203a38bf240b2a057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba9d28e389b1c5d2c134ecd5442d37dd4ce51265b16402203a38bf240b2a057->enter($__internal_7ba9d28e389b1c5d2c134ecd5442d37dd4ce51265b16402203a38bf240b2a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_10eda394f8bad109cbddc891e707b7933a04fb9cb8769a133f23cf17bf603881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eda394f8bad109cbddc891e707b7933a04fb9cb8769a133f23cf17bf603881->enter($__internal_10eda394f8bad109cbddc891e707b7933a04fb9cb8769a133f23cf17bf603881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_10eda394f8bad109cbddc891e707b7933a04fb9cb8769a133f23cf17bf603881->leave($__internal_10eda394f8bad109cbddc891e707b7933a04fb9cb8769a133f23cf17bf603881_prof);

        
        $__internal_7ba9d28e389b1c5d2c134ecd5442d37dd4ce51265b16402203a38bf240b2a057->leave($__internal_7ba9d28e389b1c5d2c134ecd5442d37dd4ce51265b16402203a38bf240b2a057_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2dc3813c9991bd33bd6adca25ebc928dddcc5ce9d36733438d45baa261fb3d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc3813c9991bd33bd6adca25ebc928dddcc5ce9d36733438d45baa261fb3d0a->enter($__internal_2dc3813c9991bd33bd6adca25ebc928dddcc5ce9d36733438d45baa261fb3d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_962a7e00e0769e79170569c1955207168a6dae321bc8a9826bc0155b7e59739a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962a7e00e0769e79170569c1955207168a6dae321bc8a9826bc0155b7e59739a->enter($__internal_962a7e00e0769e79170569c1955207168a6dae321bc8a9826bc0155b7e59739a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_962a7e00e0769e79170569c1955207168a6dae321bc8a9826bc0155b7e59739a->leave($__internal_962a7e00e0769e79170569c1955207168a6dae321bc8a9826bc0155b7e59739a_prof);

        
        $__internal_2dc3813c9991bd33bd6adca25ebc928dddcc5ce9d36733438d45baa261fb3d0a->leave($__internal_2dc3813c9991bd33bd6adca25ebc928dddcc5ce9d36733438d45baa261fb3d0a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
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

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
