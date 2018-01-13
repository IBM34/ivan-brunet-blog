<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_d74e587f42409b48045745c886b5d25596f9c5a22994c2df23d0db95d163727f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1937c146da63543233d6e1e22eb7a4562b73a9d5c868d8e29e4625beb2a58df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1937c146da63543233d6e1e22eb7a4562b73a9d5c868d8e29e4625beb2a58df5->enter($__internal_1937c146da63543233d6e1e22eb7a4562b73a9d5c868d8e29e4625beb2a58df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_3f015a52392c6324626949421dd467ed691facf944960d667fa7245388d2198e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f015a52392c6324626949421dd467ed691facf944960d667fa7245388d2198e->enter($__internal_3f015a52392c6324626949421dd467ed691facf944960d667fa7245388d2198e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1937c146da63543233d6e1e22eb7a4562b73a9d5c868d8e29e4625beb2a58df5->leave($__internal_1937c146da63543233d6e1e22eb7a4562b73a9d5c868d8e29e4625beb2a58df5_prof);

        
        $__internal_3f015a52392c6324626949421dd467ed691facf944960d667fa7245388d2198e->leave($__internal_3f015a52392c6324626949421dd467ed691facf944960d667fa7245388d2198e_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1fa1a35e4655a5b95a7bc59273a0eab254de7abd706f6efc1f8d95a19f97318d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa1a35e4655a5b95a7bc59273a0eab254de7abd706f6efc1f8d95a19f97318d->enter($__internal_1fa1a35e4655a5b95a7bc59273a0eab254de7abd706f6efc1f8d95a19f97318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_92d1ee3dedf7c5daf2001c4f1e13581cbe9ac594cb4a213a996037116fb6853e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d1ee3dedf7c5daf2001c4f1e13581cbe9ac594cb4a213a996037116fb6853e->enter($__internal_92d1ee3dedf7c5daf2001c4f1e13581cbe9ac594cb4a213a996037116fb6853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_92d1ee3dedf7c5daf2001c4f1e13581cbe9ac594cb4a213a996037116fb6853e->leave($__internal_92d1ee3dedf7c5daf2001c4f1e13581cbe9ac594cb4a213a996037116fb6853e_prof);

        
        $__internal_1fa1a35e4655a5b95a7bc59273a0eab254de7abd706f6efc1f8d95a19f97318d->leave($__internal_1fa1a35e4655a5b95a7bc59273a0eab254de7abd706f6efc1f8d95a19f97318d_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_97c7201330dbef3fd6acd4fe8c4478145ac0873add4d8ab524c23223b431dd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c7201330dbef3fd6acd4fe8c4478145ac0873add4d8ab524c23223b431dd9b->enter($__internal_97c7201330dbef3fd6acd4fe8c4478145ac0873add4d8ab524c23223b431dd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_cca02a17f3b74b2b78c950caa50265647ea0e0aac23ca7dfa5df92ed6439d283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca02a17f3b74b2b78c950caa50265647ea0e0aac23ca7dfa5df92ed6439d283->enter($__internal_cca02a17f3b74b2b78c950caa50265647ea0e0aac23ca7dfa5df92ed6439d283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_cca02a17f3b74b2b78c950caa50265647ea0e0aac23ca7dfa5df92ed6439d283->leave($__internal_cca02a17f3b74b2b78c950caa50265647ea0e0aac23ca7dfa5df92ed6439d283_prof);

        
        $__internal_97c7201330dbef3fd6acd4fe8c4478145ac0873add4d8ab524c23223b431dd9b->leave($__internal_97c7201330dbef3fd6acd4fe8c4478145ac0873add4d8ab524c23223b431dd9b_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_981a66b148fa8782e977c9ae5628752223f44ea5b0601afb459c2dac00624205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981a66b148fa8782e977c9ae5628752223f44ea5b0601afb459c2dac00624205->enter($__internal_981a66b148fa8782e977c9ae5628752223f44ea5b0601afb459c2dac00624205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0fe93102fcdbb8d925bfb2ebfde7735b89ae4fd7a6c4b891d6b24265b9ddb491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe93102fcdbb8d925bfb2ebfde7735b89ae4fd7a6c4b891d6b24265b9ddb491->enter($__internal_0fe93102fcdbb8d925bfb2ebfde7735b89ae4fd7a6c4b891d6b24265b9ddb491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0fe93102fcdbb8d925bfb2ebfde7735b89ae4fd7a6c4b891d6b24265b9ddb491->leave($__internal_0fe93102fcdbb8d925bfb2ebfde7735b89ae4fd7a6c4b891d6b24265b9ddb491_prof);

        
        $__internal_981a66b148fa8782e977c9ae5628752223f44ea5b0601afb459c2dac00624205->leave($__internal_981a66b148fa8782e977c9ae5628752223f44ea5b0601afb459c2dac00624205_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_55428015dad57fe5501014e734413ded0d5d674e399f3832b9e89c4d90292fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55428015dad57fe5501014e734413ded0d5d674e399f3832b9e89c4d90292fe8->enter($__internal_55428015dad57fe5501014e734413ded0d5d674e399f3832b9e89c4d90292fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_d173108bfa068bacef294a21f22c2e45ab698ba223d26e3bac8df093daa06587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d173108bfa068bacef294a21f22c2e45ab698ba223d26e3bac8df093daa06587->enter($__internal_d173108bfa068bacef294a21f22c2e45ab698ba223d26e3bac8df093daa06587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_d173108bfa068bacef294a21f22c2e45ab698ba223d26e3bac8df093daa06587->leave($__internal_d173108bfa068bacef294a21f22c2e45ab698ba223d26e3bac8df093daa06587_prof);

        
        $__internal_55428015dad57fe5501014e734413ded0d5d674e399f3832b9e89c4d90292fe8->leave($__internal_55428015dad57fe5501014e734413ded0d5d674e399f3832b9e89c4d90292fe8_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6f25ea4a1769484b0f31f709abcb03df464a3569952168b874c8c6c3703f4f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f25ea4a1769484b0f31f709abcb03df464a3569952168b874c8c6c3703f4f29->enter($__internal_6f25ea4a1769484b0f31f709abcb03df464a3569952168b874c8c6c3703f4f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6ee7205a6f753e6164847903445411be4628b0c31ae3e9a4a91deb57632a8bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee7205a6f753e6164847903445411be4628b0c31ae3e9a4a91deb57632a8bd0->enter($__internal_6ee7205a6f753e6164847903445411be4628b0c31ae3e9a4a91deb57632a8bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_6ee7205a6f753e6164847903445411be4628b0c31ae3e9a4a91deb57632a8bd0->leave($__internal_6ee7205a6f753e6164847903445411be4628b0c31ae3e9a4a91deb57632a8bd0_prof);

        
        $__internal_6f25ea4a1769484b0f31f709abcb03df464a3569952168b874c8c6c3703f4f29->leave($__internal_6f25ea4a1769484b0f31f709abcb03df464a3569952168b874c8c6c3703f4f29_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4aff5916ebd40359df09e4526396a385ec8d1e5e8a98c41bd9da8bb369fe0f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aff5916ebd40359df09e4526396a385ec8d1e5e8a98c41bd9da8bb369fe0f5a->enter($__internal_4aff5916ebd40359df09e4526396a385ec8d1e5e8a98c41bd9da8bb369fe0f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9b063af4ecbfe6d1a60f48d60d6d4e50133bc31d009bf17a94fb9f4bf407bb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b063af4ecbfe6d1a60f48d60d6d4e50133bc31d009bf17a94fb9f4bf407bb8a->enter($__internal_9b063af4ecbfe6d1a60f48d60d6d4e50133bc31d009bf17a94fb9f4bf407bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_9b063af4ecbfe6d1a60f48d60d6d4e50133bc31d009bf17a94fb9f4bf407bb8a->leave($__internal_9b063af4ecbfe6d1a60f48d60d6d4e50133bc31d009bf17a94fb9f4bf407bb8a_prof);

        
        $__internal_4aff5916ebd40359df09e4526396a385ec8d1e5e8a98c41bd9da8bb369fe0f5a->leave($__internal_4aff5916ebd40359df09e4526396a385ec8d1e5e8a98c41bd9da8bb369fe0f5a_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fe17c17de14eb3b53ba60722fef39e666063b0974e1ef1bfd247003f18ddf9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe17c17de14eb3b53ba60722fef39e666063b0974e1ef1bfd247003f18ddf9b8->enter($__internal_fe17c17de14eb3b53ba60722fef39e666063b0974e1ef1bfd247003f18ddf9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_500ecc17533013f68f006f109be1138513545fe32f47ce3583948c34d1c2be60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500ecc17533013f68f006f109be1138513545fe32f47ce3583948c34d1c2be60->enter($__internal_500ecc17533013f68f006f109be1138513545fe32f47ce3583948c34d1c2be60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_500ecc17533013f68f006f109be1138513545fe32f47ce3583948c34d1c2be60->leave($__internal_500ecc17533013f68f006f109be1138513545fe32f47ce3583948c34d1c2be60_prof);

        
        $__internal_fe17c17de14eb3b53ba60722fef39e666063b0974e1ef1bfd247003f18ddf9b8->leave($__internal_fe17c17de14eb3b53ba60722fef39e666063b0974e1ef1bfd247003f18ddf9b8_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_03d78dc16af0bc50eb17affc8e8562e9de1fc415a4b6c95ec7b8f2418be5c26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d78dc16af0bc50eb17affc8e8562e9de1fc415a4b6c95ec7b8f2418be5c26d->enter($__internal_03d78dc16af0bc50eb17affc8e8562e9de1fc415a4b6c95ec7b8f2418be5c26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c3e265a3bfb1ee8865c51240fb9bc0a0fd92031223a546dc8551c4008e54af58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e265a3bfb1ee8865c51240fb9bc0a0fd92031223a546dc8551c4008e54af58->enter($__internal_c3e265a3bfb1ee8865c51240fb9bc0a0fd92031223a546dc8551c4008e54af58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_c3e265a3bfb1ee8865c51240fb9bc0a0fd92031223a546dc8551c4008e54af58->leave($__internal_c3e265a3bfb1ee8865c51240fb9bc0a0fd92031223a546dc8551c4008e54af58_prof);

        
        $__internal_03d78dc16af0bc50eb17affc8e8562e9de1fc415a4b6c95ec7b8f2418be5c26d->leave($__internal_03d78dc16af0bc50eb17affc8e8562e9de1fc415a4b6c95ec7b8f2418be5c26d_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_46a724af96324b5c44df3d815e38ef20520b4a8b82d6249d1cb751b1c5293657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a724af96324b5c44df3d815e38ef20520b4a8b82d6249d1cb751b1c5293657->enter($__internal_46a724af96324b5c44df3d815e38ef20520b4a8b82d6249d1cb751b1c5293657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ee890c898faa7452ebe84f069bb2cf78573b93dea94ea32b50aa0aca495a0d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee890c898faa7452ebe84f069bb2cf78573b93dea94ea32b50aa0aca495a0d22->enter($__internal_ee890c898faa7452ebe84f069bb2cf78573b93dea94ea32b50aa0aca495a0d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_ee890c898faa7452ebe84f069bb2cf78573b93dea94ea32b50aa0aca495a0d22->leave($__internal_ee890c898faa7452ebe84f069bb2cf78573b93dea94ea32b50aa0aca495a0d22_prof);

        
        $__internal_46a724af96324b5c44df3d815e38ef20520b4a8b82d6249d1cb751b1c5293657->leave($__internal_46a724af96324b5c44df3d815e38ef20520b4a8b82d6249d1cb751b1c5293657_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_3ecef544c71defcc215a1dad3912a27725ab3ebf0ba3cee4ff364243d2ae0ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecef544c71defcc215a1dad3912a27725ab3ebf0ba3cee4ff364243d2ae0ddb->enter($__internal_3ecef544c71defcc215a1dad3912a27725ab3ebf0ba3cee4ff364243d2ae0ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_845f1ff2f0ee45ed56ae5a265f953b44e64442f62671e6b0a840fc562e1b7efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845f1ff2f0ee45ed56ae5a265f953b44e64442f62671e6b0a840fc562e1b7efe->enter($__internal_845f1ff2f0ee45ed56ae5a265f953b44e64442f62671e6b0a840fc562e1b7efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_845f1ff2f0ee45ed56ae5a265f953b44e64442f62671e6b0a840fc562e1b7efe->leave($__internal_845f1ff2f0ee45ed56ae5a265f953b44e64442f62671e6b0a840fc562e1b7efe_prof);

        
        $__internal_3ecef544c71defcc215a1dad3912a27725ab3ebf0ba3cee4ff364243d2ae0ddb->leave($__internal_3ecef544c71defcc215a1dad3912a27725ab3ebf0ba3cee4ff364243d2ae0ddb_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dd8f758533ccc30ab40f689334f54b87a2ed733cc8aa94ee5eda8c24c8a0aeed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8f758533ccc30ab40f689334f54b87a2ed733cc8aa94ee5eda8c24c8a0aeed->enter($__internal_dd8f758533ccc30ab40f689334f54b87a2ed733cc8aa94ee5eda8c24c8a0aeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1868c856016df6974592eca0b817e7922421829a01b585e26e78acf161d0d9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1868c856016df6974592eca0b817e7922421829a01b585e26e78acf161d0d9d0->enter($__internal_1868c856016df6974592eca0b817e7922421829a01b585e26e78acf161d0d9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_1868c856016df6974592eca0b817e7922421829a01b585e26e78acf161d0d9d0->leave($__internal_1868c856016df6974592eca0b817e7922421829a01b585e26e78acf161d0d9d0_prof);

        
        $__internal_dd8f758533ccc30ab40f689334f54b87a2ed733cc8aa94ee5eda8c24c8a0aeed->leave($__internal_dd8f758533ccc30ab40f689334f54b87a2ed733cc8aa94ee5eda8c24c8a0aeed_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8cd3ea34195575e088865fb051420d750c27a3ea3cefc71227aadd5b3628744a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd3ea34195575e088865fb051420d750c27a3ea3cefc71227aadd5b3628744a->enter($__internal_8cd3ea34195575e088865fb051420d750c27a3ea3cefc71227aadd5b3628744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_afdd0b62facc3b48c23cadd762810af8d879afb41fc71daabf147bd4625ba016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdd0b62facc3b48c23cadd762810af8d879afb41fc71daabf147bd4625ba016->enter($__internal_afdd0b62facc3b48c23cadd762810af8d879afb41fc71daabf147bd4625ba016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_afdd0b62facc3b48c23cadd762810af8d879afb41fc71daabf147bd4625ba016->leave($__internal_afdd0b62facc3b48c23cadd762810af8d879afb41fc71daabf147bd4625ba016_prof);

        
        $__internal_8cd3ea34195575e088865fb051420d750c27a3ea3cefc71227aadd5b3628744a->leave($__internal_8cd3ea34195575e088865fb051420d750c27a3ea3cefc71227aadd5b3628744a_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d0fdf9a2016b619c8e3b976283ef7cad9f9b97d5b1a5ada7f82d0abdb67a36ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fdf9a2016b619c8e3b976283ef7cad9f9b97d5b1a5ada7f82d0abdb67a36ae->enter($__internal_d0fdf9a2016b619c8e3b976283ef7cad9f9b97d5b1a5ada7f82d0abdb67a36ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d36f4e0a67c31e800be3e5b4f8f6b59b6c77189c4535706d84a6a1c3b3d183c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36f4e0a67c31e800be3e5b4f8f6b59b6c77189c4535706d84a6a1c3b3d183c0->enter($__internal_d36f4e0a67c31e800be3e5b4f8f6b59b6c77189c4535706d84a6a1c3b3d183c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d36f4e0a67c31e800be3e5b4f8f6b59b6c77189c4535706d84a6a1c3b3d183c0->leave($__internal_d36f4e0a67c31e800be3e5b4f8f6b59b6c77189c4535706d84a6a1c3b3d183c0_prof);

        
        $__internal_d0fdf9a2016b619c8e3b976283ef7cad9f9b97d5b1a5ada7f82d0abdb67a36ae->leave($__internal_d0fdf9a2016b619c8e3b976283ef7cad9f9b97d5b1a5ada7f82d0abdb67a36ae_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b1f007ac3c6feea44dc91791e7629478daee6a1a49f9e87fd9583cb4139e715c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f007ac3c6feea44dc91791e7629478daee6a1a49f9e87fd9583cb4139e715c->enter($__internal_b1f007ac3c6feea44dc91791e7629478daee6a1a49f9e87fd9583cb4139e715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6dacc2be11632d22fffe9b5a33fba6fbe13864c073e3b3dc7422b28fa130a649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dacc2be11632d22fffe9b5a33fba6fbe13864c073e3b3dc7422b28fa130a649->enter($__internal_6dacc2be11632d22fffe9b5a33fba6fbe13864c073e3b3dc7422b28fa130a649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6dacc2be11632d22fffe9b5a33fba6fbe13864c073e3b3dc7422b28fa130a649->leave($__internal_6dacc2be11632d22fffe9b5a33fba6fbe13864c073e3b3dc7422b28fa130a649_prof);

        
        $__internal_b1f007ac3c6feea44dc91791e7629478daee6a1a49f9e87fd9583cb4139e715c->leave($__internal_b1f007ac3c6feea44dc91791e7629478daee6a1a49f9e87fd9583cb4139e715c_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d16b719913cdf302276841ac8fd0d26fc40b1164404eb3a7a843de5181ddc688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16b719913cdf302276841ac8fd0d26fc40b1164404eb3a7a843de5181ddc688->enter($__internal_d16b719913cdf302276841ac8fd0d26fc40b1164404eb3a7a843de5181ddc688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3c70fcf057506fb639e7689b328b0286fdb84c115b4338544d202dbbd737ba7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c70fcf057506fb639e7689b328b0286fdb84c115b4338544d202dbbd737ba7d->enter($__internal_3c70fcf057506fb639e7689b328b0286fdb84c115b4338544d202dbbd737ba7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3c70fcf057506fb639e7689b328b0286fdb84c115b4338544d202dbbd737ba7d->leave($__internal_3c70fcf057506fb639e7689b328b0286fdb84c115b4338544d202dbbd737ba7d_prof);

        
        $__internal_d16b719913cdf302276841ac8fd0d26fc40b1164404eb3a7a843de5181ddc688->leave($__internal_d16b719913cdf302276841ac8fd0d26fc40b1164404eb3a7a843de5181ddc688_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a232a3d56cbd55c3868cd24658ca3331017d1f7eb12742f7442e2da75abad323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a232a3d56cbd55c3868cd24658ca3331017d1f7eb12742f7442e2da75abad323->enter($__internal_a232a3d56cbd55c3868cd24658ca3331017d1f7eb12742f7442e2da75abad323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_bd281989f8aba09c4f00431b9110c2f3a2df0e590f7ac82b1ac9e3538073d174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd281989f8aba09c4f00431b9110c2f3a2df0e590f7ac82b1ac9e3538073d174->enter($__internal_bd281989f8aba09c4f00431b9110c2f3a2df0e590f7ac82b1ac9e3538073d174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bd281989f8aba09c4f00431b9110c2f3a2df0e590f7ac82b1ac9e3538073d174->leave($__internal_bd281989f8aba09c4f00431b9110c2f3a2df0e590f7ac82b1ac9e3538073d174_prof);

        
        $__internal_a232a3d56cbd55c3868cd24658ca3331017d1f7eb12742f7442e2da75abad323->leave($__internal_a232a3d56cbd55c3868cd24658ca3331017d1f7eb12742f7442e2da75abad323_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_699b639d5a8761b21acdc63279bd910aebdf84705e6e05e1571847a303fd0cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699b639d5a8761b21acdc63279bd910aebdf84705e6e05e1571847a303fd0cf6->enter($__internal_699b639d5a8761b21acdc63279bd910aebdf84705e6e05e1571847a303fd0cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c61403294da811829844aacd9e935b44b4a54a98c8dea99cf6fd730b410f640a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61403294da811829844aacd9e935b44b4a54a98c8dea99cf6fd730b410f640a->enter($__internal_c61403294da811829844aacd9e935b44b4a54a98c8dea99cf6fd730b410f640a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_c61403294da811829844aacd9e935b44b4a54a98c8dea99cf6fd730b410f640a->leave($__internal_c61403294da811829844aacd9e935b44b4a54a98c8dea99cf6fd730b410f640a_prof);

        
        $__internal_699b639d5a8761b21acdc63279bd910aebdf84705e6e05e1571847a303fd0cf6->leave($__internal_699b639d5a8761b21acdc63279bd910aebdf84705e6e05e1571847a303fd0cf6_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9c5d20ff8072a7060ce8066ae26190a26d27133563eb792838b4ec25a6a2ee01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5d20ff8072a7060ce8066ae26190a26d27133563eb792838b4ec25a6a2ee01->enter($__internal_9c5d20ff8072a7060ce8066ae26190a26d27133563eb792838b4ec25a6a2ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1187307ca55201707817ee7d8d49db18bbbb991fd7838648c5609bca8598190d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1187307ca55201707817ee7d8d49db18bbbb991fd7838648c5609bca8598190d->enter($__internal_1187307ca55201707817ee7d8d49db18bbbb991fd7838648c5609bca8598190d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_1187307ca55201707817ee7d8d49db18bbbb991fd7838648c5609bca8598190d->leave($__internal_1187307ca55201707817ee7d8d49db18bbbb991fd7838648c5609bca8598190d_prof);

        
        $__internal_9c5d20ff8072a7060ce8066ae26190a26d27133563eb792838b4ec25a6a2ee01->leave($__internal_9c5d20ff8072a7060ce8066ae26190a26d27133563eb792838b4ec25a6a2ee01_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e740cadb81e8b914fc9abe1466aa263b84b344e2fd862a5847237f6c98649f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e740cadb81e8b914fc9abe1466aa263b84b344e2fd862a5847237f6c98649f0e->enter($__internal_e740cadb81e8b914fc9abe1466aa263b84b344e2fd862a5847237f6c98649f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_dcf43f3c913c246e78c8a9ac1dfdd8e627dd4ef06e1b52e781795f855aff845c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf43f3c913c246e78c8a9ac1dfdd8e627dd4ef06e1b52e781795f855aff845c->enter($__internal_dcf43f3c913c246e78c8a9ac1dfdd8e627dd4ef06e1b52e781795f855aff845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dcf43f3c913c246e78c8a9ac1dfdd8e627dd4ef06e1b52e781795f855aff845c->leave($__internal_dcf43f3c913c246e78c8a9ac1dfdd8e627dd4ef06e1b52e781795f855aff845c_prof);

        
        $__internal_e740cadb81e8b914fc9abe1466aa263b84b344e2fd862a5847237f6c98649f0e->leave($__internal_e740cadb81e8b914fc9abe1466aa263b84b344e2fd862a5847237f6c98649f0e_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_097c7c0cb1472ee03a665250b76b4c7a4d5a91b810a483acc8d85d0adaa0cac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097c7c0cb1472ee03a665250b76b4c7a4d5a91b810a483acc8d85d0adaa0cac9->enter($__internal_097c7c0cb1472ee03a665250b76b4c7a4d5a91b810a483acc8d85d0adaa0cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_29f9a01c15f3f59067da3b79a1800b6db396760264f52f08cb6a6fcc2e35ee91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f9a01c15f3f59067da3b79a1800b6db396760264f52f08cb6a6fcc2e35ee91->enter($__internal_29f9a01c15f3f59067da3b79a1800b6db396760264f52f08cb6a6fcc2e35ee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_29f9a01c15f3f59067da3b79a1800b6db396760264f52f08cb6a6fcc2e35ee91->leave($__internal_29f9a01c15f3f59067da3b79a1800b6db396760264f52f08cb6a6fcc2e35ee91_prof);

        
        $__internal_097c7c0cb1472ee03a665250b76b4c7a4d5a91b810a483acc8d85d0adaa0cac9->leave($__internal_097c7c0cb1472ee03a665250b76b4c7a4d5a91b810a483acc8d85d0adaa0cac9_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7ead4d13c18d64ecd4077da4827539e4a2778412630a206d0ff981b2e961650d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ead4d13c18d64ecd4077da4827539e4a2778412630a206d0ff981b2e961650d->enter($__internal_7ead4d13c18d64ecd4077da4827539e4a2778412630a206d0ff981b2e961650d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_547c9a6e0eb09cf1c5a02fe715728994dc70d1a68e32feac214af2c0163cd687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547c9a6e0eb09cf1c5a02fe715728994dc70d1a68e32feac214af2c0163cd687->enter($__internal_547c9a6e0eb09cf1c5a02fe715728994dc70d1a68e32feac214af2c0163cd687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_547c9a6e0eb09cf1c5a02fe715728994dc70d1a68e32feac214af2c0163cd687->leave($__internal_547c9a6e0eb09cf1c5a02fe715728994dc70d1a68e32feac214af2c0163cd687_prof);

        
        $__internal_7ead4d13c18d64ecd4077da4827539e4a2778412630a206d0ff981b2e961650d->leave($__internal_7ead4d13c18d64ecd4077da4827539e4a2778412630a206d0ff981b2e961650d_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_719dbfe128e3c4cf56d1f1c0712a1c45f2f34a297e1cdfd126d50363b4280128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719dbfe128e3c4cf56d1f1c0712a1c45f2f34a297e1cdfd126d50363b4280128->enter($__internal_719dbfe128e3c4cf56d1f1c0712a1c45f2f34a297e1cdfd126d50363b4280128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_958362fe33a1b9395cdf0a36fc311b92ae94787591fd844d7af7880a2b57ad9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958362fe33a1b9395cdf0a36fc311b92ae94787591fd844d7af7880a2b57ad9a->enter($__internal_958362fe33a1b9395cdf0a36fc311b92ae94787591fd844d7af7880a2b57ad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_958362fe33a1b9395cdf0a36fc311b92ae94787591fd844d7af7880a2b57ad9a->leave($__internal_958362fe33a1b9395cdf0a36fc311b92ae94787591fd844d7af7880a2b57ad9a_prof);

        
        $__internal_719dbfe128e3c4cf56d1f1c0712a1c45f2f34a297e1cdfd126d50363b4280128->leave($__internal_719dbfe128e3c4cf56d1f1c0712a1c45f2f34a297e1cdfd126d50363b4280128_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a4e95a8fd65c6b889a7dc2eccc6150878a61a927a977f3276afec2f8fa478cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e95a8fd65c6b889a7dc2eccc6150878a61a927a977f3276afec2f8fa478cd7->enter($__internal_a4e95a8fd65c6b889a7dc2eccc6150878a61a927a977f3276afec2f8fa478cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6c606906dafee0b7a67c966d58a3704a639ecbb542e3ad65b62110321c6f3b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c606906dafee0b7a67c966d58a3704a639ecbb542e3ad65b62110321c6f3b0b->enter($__internal_6c606906dafee0b7a67c966d58a3704a639ecbb542e3ad65b62110321c6f3b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_6c606906dafee0b7a67c966d58a3704a639ecbb542e3ad65b62110321c6f3b0b->leave($__internal_6c606906dafee0b7a67c966d58a3704a639ecbb542e3ad65b62110321c6f3b0b_prof);

        
        $__internal_a4e95a8fd65c6b889a7dc2eccc6150878a61a927a977f3276afec2f8fa478cd7->leave($__internal_a4e95a8fd65c6b889a7dc2eccc6150878a61a927a977f3276afec2f8fa478cd7_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_73f2505edd1ce1f5445e38f2084327744af6cc998af556e6ff80ae51f5e7aa4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f2505edd1ce1f5445e38f2084327744af6cc998af556e6ff80ae51f5e7aa4c->enter($__internal_73f2505edd1ce1f5445e38f2084327744af6cc998af556e6ff80ae51f5e7aa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a518008c54702bc9110d8f828be1be3e26e23847e7296f0560622cfccaadd56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a518008c54702bc9110d8f828be1be3e26e23847e7296f0560622cfccaadd56d->enter($__internal_a518008c54702bc9110d8f828be1be3e26e23847e7296f0560622cfccaadd56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a518008c54702bc9110d8f828be1be3e26e23847e7296f0560622cfccaadd56d->leave($__internal_a518008c54702bc9110d8f828be1be3e26e23847e7296f0560622cfccaadd56d_prof);

        
        $__internal_73f2505edd1ce1f5445e38f2084327744af6cc998af556e6ff80ae51f5e7aa4c->leave($__internal_73f2505edd1ce1f5445e38f2084327744af6cc998af556e6ff80ae51f5e7aa4c_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_95535557e40b5370b5db5f01a4932bfed5cd19b488bd703a8d46993159db44a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95535557e40b5370b5db5f01a4932bfed5cd19b488bd703a8d46993159db44a7->enter($__internal_95535557e40b5370b5db5f01a4932bfed5cd19b488bd703a8d46993159db44a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4c03c9bf616474e9cf3a2341dfd3758091e63a8d47856a628f2e9a50fef1bf0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c03c9bf616474e9cf3a2341dfd3758091e63a8d47856a628f2e9a50fef1bf0a->enter($__internal_4c03c9bf616474e9cf3a2341dfd3758091e63a8d47856a628f2e9a50fef1bf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_4c03c9bf616474e9cf3a2341dfd3758091e63a8d47856a628f2e9a50fef1bf0a->leave($__internal_4c03c9bf616474e9cf3a2341dfd3758091e63a8d47856a628f2e9a50fef1bf0a_prof);

        
        $__internal_95535557e40b5370b5db5f01a4932bfed5cd19b488bd703a8d46993159db44a7->leave($__internal_95535557e40b5370b5db5f01a4932bfed5cd19b488bd703a8d46993159db44a7_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
