<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_600c55aaffeb716cd5b7195d94538ed35ecb4f5a7c23319bdb99be090aa0bbcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fd595878c6126d159c9a3bef930c712d007a57cac4f7dc565901edf857db685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd595878c6126d159c9a3bef930c712d007a57cac4f7dc565901edf857db685->enter($__internal_3fd595878c6126d159c9a3bef930c712d007a57cac4f7dc565901edf857db685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_053214486dc95fd05ad724867e237ca4e4622be406da7596df8b3884b87ed801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053214486dc95fd05ad724867e237ca4e4622be406da7596df8b3884b87ed801->enter($__internal_053214486dc95fd05ad724867e237ca4e4622be406da7596df8b3884b87ed801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_3fd595878c6126d159c9a3bef930c712d007a57cac4f7dc565901edf857db685->leave($__internal_3fd595878c6126d159c9a3bef930c712d007a57cac4f7dc565901edf857db685_prof);

        
        $__internal_053214486dc95fd05ad724867e237ca4e4622be406da7596df8b3884b87ed801->leave($__internal_053214486dc95fd05ad724867e237ca4e4622be406da7596df8b3884b87ed801_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9f9024f249ece5e34d76144b9bc111db472f4583ba96b2370b84e687590b889b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9024f249ece5e34d76144b9bc111db472f4583ba96b2370b84e687590b889b->enter($__internal_9f9024f249ece5e34d76144b9bc111db472f4583ba96b2370b84e687590b889b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0ec6781fa57c54ef512aebd081c47fd16db87a9033ed53a94a22fbefac0f0df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec6781fa57c54ef512aebd081c47fd16db87a9033ed53a94a22fbefac0f0df4->enter($__internal_0ec6781fa57c54ef512aebd081c47fd16db87a9033ed53a94a22fbefac0f0df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_0ec6781fa57c54ef512aebd081c47fd16db87a9033ed53a94a22fbefac0f0df4->leave($__internal_0ec6781fa57c54ef512aebd081c47fd16db87a9033ed53a94a22fbefac0f0df4_prof);

        
        $__internal_9f9024f249ece5e34d76144b9bc111db472f4583ba96b2370b84e687590b889b->leave($__internal_9f9024f249ece5e34d76144b9bc111db472f4583ba96b2370b84e687590b889b_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_bfd5edb272a853ff02e1d90423b088b41000df4e0ed7e9176860950971c7efe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd5edb272a853ff02e1d90423b088b41000df4e0ed7e9176860950971c7efe2->enter($__internal_bfd5edb272a853ff02e1d90423b088b41000df4e0ed7e9176860950971c7efe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_51a06493620e5eec27eb586d29e1a560d9c618947f086b48866961f77c18e26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a06493620e5eec27eb586d29e1a560d9c618947f086b48866961f77c18e26b->enter($__internal_51a06493620e5eec27eb586d29e1a560d9c618947f086b48866961f77c18e26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_51a06493620e5eec27eb586d29e1a560d9c618947f086b48866961f77c18e26b->leave($__internal_51a06493620e5eec27eb586d29e1a560d9c618947f086b48866961f77c18e26b_prof);

        
        $__internal_bfd5edb272a853ff02e1d90423b088b41000df4e0ed7e9176860950971c7efe2->leave($__internal_bfd5edb272a853ff02e1d90423b088b41000df4e0ed7e9176860950971c7efe2_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7238221ba7cf575dfc70ed0180716e07cf32d25f10b9f9c303b97322a08c863b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7238221ba7cf575dfc70ed0180716e07cf32d25f10b9f9c303b97322a08c863b->enter($__internal_7238221ba7cf575dfc70ed0180716e07cf32d25f10b9f9c303b97322a08c863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_be2443cec099d066249d78b50504fd59df6ba4655a136b6b37e83e027451f05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2443cec099d066249d78b50504fd59df6ba4655a136b6b37e83e027451f05b->enter($__internal_be2443cec099d066249d78b50504fd59df6ba4655a136b6b37e83e027451f05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_be2443cec099d066249d78b50504fd59df6ba4655a136b6b37e83e027451f05b->leave($__internal_be2443cec099d066249d78b50504fd59df6ba4655a136b6b37e83e027451f05b_prof);

        
        $__internal_7238221ba7cf575dfc70ed0180716e07cf32d25f10b9f9c303b97322a08c863b->leave($__internal_7238221ba7cf575dfc70ed0180716e07cf32d25f10b9f9c303b97322a08c863b_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_981c5e2fe8765c82ab66731d0c9f1f8bc80613082c1484e97f9f5717caac174f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981c5e2fe8765c82ab66731d0c9f1f8bc80613082c1484e97f9f5717caac174f->enter($__internal_981c5e2fe8765c82ab66731d0c9f1f8bc80613082c1484e97f9f5717caac174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_17fdb18b63ceff84e4d4b3763323d6358411d3f80820b91c4158266abfe66c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fdb18b63ceff84e4d4b3763323d6358411d3f80820b91c4158266abfe66c3e->enter($__internal_17fdb18b63ceff84e4d4b3763323d6358411d3f80820b91c4158266abfe66c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_17fdb18b63ceff84e4d4b3763323d6358411d3f80820b91c4158266abfe66c3e->leave($__internal_17fdb18b63ceff84e4d4b3763323d6358411d3f80820b91c4158266abfe66c3e_prof);

        
        $__internal_981c5e2fe8765c82ab66731d0c9f1f8bc80613082c1484e97f9f5717caac174f->leave($__internal_981c5e2fe8765c82ab66731d0c9f1f8bc80613082c1484e97f9f5717caac174f_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_4df3489679bd1eb3f1603cedd8daf7be289e932c50d98825d77d13123567290c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df3489679bd1eb3f1603cedd8daf7be289e932c50d98825d77d13123567290c->enter($__internal_4df3489679bd1eb3f1603cedd8daf7be289e932c50d98825d77d13123567290c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1c7d5fa2879c28da117d14c5b279bb63ac7dbb2dda416429dfc62779e8550831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7d5fa2879c28da117d14c5b279bb63ac7dbb2dda416429dfc62779e8550831->enter($__internal_1c7d5fa2879c28da117d14c5b279bb63ac7dbb2dda416429dfc62779e8550831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_1c7d5fa2879c28da117d14c5b279bb63ac7dbb2dda416429dfc62779e8550831->leave($__internal_1c7d5fa2879c28da117d14c5b279bb63ac7dbb2dda416429dfc62779e8550831_prof);

        
        $__internal_4df3489679bd1eb3f1603cedd8daf7be289e932c50d98825d77d13123567290c->leave($__internal_4df3489679bd1eb3f1603cedd8daf7be289e932c50d98825d77d13123567290c_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_179599b4e143ad33b4b3d23019ccc4f826fe8b47a9ef54c69bc47f4f1c890287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179599b4e143ad33b4b3d23019ccc4f826fe8b47a9ef54c69bc47f4f1c890287->enter($__internal_179599b4e143ad33b4b3d23019ccc4f826fe8b47a9ef54c69bc47f4f1c890287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0e4bdd9abdc8fa9d3566d84783d3feadd47d06d491620e97243b1d6f6a037fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4bdd9abdc8fa9d3566d84783d3feadd47d06d491620e97243b1d6f6a037fe0->enter($__internal_0e4bdd9abdc8fa9d3566d84783d3feadd47d06d491620e97243b1d6f6a037fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0e4bdd9abdc8fa9d3566d84783d3feadd47d06d491620e97243b1d6f6a037fe0->leave($__internal_0e4bdd9abdc8fa9d3566d84783d3feadd47d06d491620e97243b1d6f6a037fe0_prof);

        
        $__internal_179599b4e143ad33b4b3d23019ccc4f826fe8b47a9ef54c69bc47f4f1c890287->leave($__internal_179599b4e143ad33b4b3d23019ccc4f826fe8b47a9ef54c69bc47f4f1c890287_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_fd6c86ec31095eff9d5b7c3f72b18189f2a7ee0c9a69dbf2a3e8c35d87829aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6c86ec31095eff9d5b7c3f72b18189f2a7ee0c9a69dbf2a3e8c35d87829aaf->enter($__internal_fd6c86ec31095eff9d5b7c3f72b18189f2a7ee0c9a69dbf2a3e8c35d87829aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f83620e823be56c28fd504c3ea5371aeefab85a5127b301d683ce20bd96d0ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83620e823be56c28fd504c3ea5371aeefab85a5127b301d683ce20bd96d0ccd->enter($__internal_f83620e823be56c28fd504c3ea5371aeefab85a5127b301d683ce20bd96d0ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f83620e823be56c28fd504c3ea5371aeefab85a5127b301d683ce20bd96d0ccd->leave($__internal_f83620e823be56c28fd504c3ea5371aeefab85a5127b301d683ce20bd96d0ccd_prof);

        
        $__internal_fd6c86ec31095eff9d5b7c3f72b18189f2a7ee0c9a69dbf2a3e8c35d87829aaf->leave($__internal_fd6c86ec31095eff9d5b7c3f72b18189f2a7ee0c9a69dbf2a3e8c35d87829aaf_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_fe7c84ae544eaf23756c0895bfb1a1c32de8bafedc9daf7d7ba2767d4c1f802a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7c84ae544eaf23756c0895bfb1a1c32de8bafedc9daf7d7ba2767d4c1f802a->enter($__internal_fe7c84ae544eaf23756c0895bfb1a1c32de8bafedc9daf7d7ba2767d4c1f802a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_9951d222f330ee8e7fb700fc97ce0fb61fb3f3ee7ab9868e4b2ec578c41b2e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9951d222f330ee8e7fb700fc97ce0fb61fb3f3ee7ab9868e4b2ec578c41b2e00->enter($__internal_9951d222f330ee8e7fb700fc97ce0fb61fb3f3ee7ab9868e4b2ec578c41b2e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_9951d222f330ee8e7fb700fc97ce0fb61fb3f3ee7ab9868e4b2ec578c41b2e00->leave($__internal_9951d222f330ee8e7fb700fc97ce0fb61fb3f3ee7ab9868e4b2ec578c41b2e00_prof);

        
        $__internal_fe7c84ae544eaf23756c0895bfb1a1c32de8bafedc9daf7d7ba2767d4c1f802a->leave($__internal_fe7c84ae544eaf23756c0895bfb1a1c32de8bafedc9daf7d7ba2767d4c1f802a_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_592c1aef40c99120b08ebbcbae9e76df06785fabb32349693acbaf0230747d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592c1aef40c99120b08ebbcbae9e76df06785fabb32349693acbaf0230747d35->enter($__internal_592c1aef40c99120b08ebbcbae9e76df06785fabb32349693acbaf0230747d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fe2fc8e139ed8a829ea7b8893a03cc33c745c0f160e0f534b4067b220562c5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2fc8e139ed8a829ea7b8893a03cc33c745c0f160e0f534b4067b220562c5e8->enter($__internal_fe2fc8e139ed8a829ea7b8893a03cc33c745c0f160e0f534b4067b220562c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_fe2fc8e139ed8a829ea7b8893a03cc33c745c0f160e0f534b4067b220562c5e8->leave($__internal_fe2fc8e139ed8a829ea7b8893a03cc33c745c0f160e0f534b4067b220562c5e8_prof);

        
        $__internal_592c1aef40c99120b08ebbcbae9e76df06785fabb32349693acbaf0230747d35->leave($__internal_592c1aef40c99120b08ebbcbae9e76df06785fabb32349693acbaf0230747d35_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0af4afd94309b246736be673b19149365e11c24b7c9222acd8f1f33715c0761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af4afd94309b246736be673b19149365e11c24b7c9222acd8f1f33715c0761e->enter($__internal_0af4afd94309b246736be673b19149365e11c24b7c9222acd8f1f33715c0761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0143985f0e2903f3d2b47b2f170435f4d9043d90c25a4bd6898e2820b64121a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0143985f0e2903f3d2b47b2f170435f4d9043d90c25a4bd6898e2820b64121a8->enter($__internal_0143985f0e2903f3d2b47b2f170435f4d9043d90c25a4bd6898e2820b64121a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_0143985f0e2903f3d2b47b2f170435f4d9043d90c25a4bd6898e2820b64121a8->leave($__internal_0143985f0e2903f3d2b47b2f170435f4d9043d90c25a4bd6898e2820b64121a8_prof);

        
        $__internal_0af4afd94309b246736be673b19149365e11c24b7c9222acd8f1f33715c0761e->leave($__internal_0af4afd94309b246736be673b19149365e11c24b7c9222acd8f1f33715c0761e_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_43d6b646a4cf6b56ed1cf5273b2163f93d7d3b5459d69938b92377d14b7d2918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d6b646a4cf6b56ed1cf5273b2163f93d7d3b5459d69938b92377d14b7d2918->enter($__internal_43d6b646a4cf6b56ed1cf5273b2163f93d7d3b5459d69938b92377d14b7d2918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_516985dd48da974067acec65842eb6ed3aef7e0d25227564f6b097b55554cd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516985dd48da974067acec65842eb6ed3aef7e0d25227564f6b097b55554cd8b->enter($__internal_516985dd48da974067acec65842eb6ed3aef7e0d25227564f6b097b55554cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_516985dd48da974067acec65842eb6ed3aef7e0d25227564f6b097b55554cd8b->leave($__internal_516985dd48da974067acec65842eb6ed3aef7e0d25227564f6b097b55554cd8b_prof);

        
        $__internal_43d6b646a4cf6b56ed1cf5273b2163f93d7d3b5459d69938b92377d14b7d2918->leave($__internal_43d6b646a4cf6b56ed1cf5273b2163f93d7d3b5459d69938b92377d14b7d2918_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f170db60f1a27fa6e56f33cfe8dc1b59cb3cd146112027749f4b23de04a39efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f170db60f1a27fa6e56f33cfe8dc1b59cb3cd146112027749f4b23de04a39efe->enter($__internal_f170db60f1a27fa6e56f33cfe8dc1b59cb3cd146112027749f4b23de04a39efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2e9d634a275b9ca309b6e2e669c49025a235ab391cbc7e9bdb7e7aa2e81326f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9d634a275b9ca309b6e2e669c49025a235ab391cbc7e9bdb7e7aa2e81326f0->enter($__internal_2e9d634a275b9ca309b6e2e669c49025a235ab391cbc7e9bdb7e7aa2e81326f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_2e9d634a275b9ca309b6e2e669c49025a235ab391cbc7e9bdb7e7aa2e81326f0->leave($__internal_2e9d634a275b9ca309b6e2e669c49025a235ab391cbc7e9bdb7e7aa2e81326f0_prof);

        
        $__internal_f170db60f1a27fa6e56f33cfe8dc1b59cb3cd146112027749f4b23de04a39efe->leave($__internal_f170db60f1a27fa6e56f33cfe8dc1b59cb3cd146112027749f4b23de04a39efe_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_95fa74d3028e7866c5aeffee98938be5e25ee67d15f4bceb3f00b2aec47e4791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fa74d3028e7866c5aeffee98938be5e25ee67d15f4bceb3f00b2aec47e4791->enter($__internal_95fa74d3028e7866c5aeffee98938be5e25ee67d15f4bceb3f00b2aec47e4791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d0dfd2c97ef79c0e03049c6f2da3b4d01ea5264330454eb354e3ea1ed8a59293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0dfd2c97ef79c0e03049c6f2da3b4d01ea5264330454eb354e3ea1ed8a59293->enter($__internal_d0dfd2c97ef79c0e03049c6f2da3b4d01ea5264330454eb354e3ea1ed8a59293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d0dfd2c97ef79c0e03049c6f2da3b4d01ea5264330454eb354e3ea1ed8a59293->leave($__internal_d0dfd2c97ef79c0e03049c6f2da3b4d01ea5264330454eb354e3ea1ed8a59293_prof);

        
        $__internal_95fa74d3028e7866c5aeffee98938be5e25ee67d15f4bceb3f00b2aec47e4791->leave($__internal_95fa74d3028e7866c5aeffee98938be5e25ee67d15f4bceb3f00b2aec47e4791_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ed54854d914a7d1234504398b890a587be4e9831c1fe51bb37f74f011f5ea4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed54854d914a7d1234504398b890a587be4e9831c1fe51bb37f74f011f5ea4e5->enter($__internal_ed54854d914a7d1234504398b890a587be4e9831c1fe51bb37f74f011f5ea4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5b231159510e9d1de31fb85b81881d38fb925f2a03095a20aa10abf168c5e6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b231159510e9d1de31fb85b81881d38fb925f2a03095a20aa10abf168c5e6d4->enter($__internal_5b231159510e9d1de31fb85b81881d38fb925f2a03095a20aa10abf168c5e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
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
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_5b231159510e9d1de31fb85b81881d38fb925f2a03095a20aa10abf168c5e6d4->leave($__internal_5b231159510e9d1de31fb85b81881d38fb925f2a03095a20aa10abf168c5e6d4_prof);

        
        $__internal_ed54854d914a7d1234504398b890a587be4e9831c1fe51bb37f74f011f5ea4e5->leave($__internal_ed54854d914a7d1234504398b890a587be4e9831c1fe51bb37f74f011f5ea4e5_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3829f8d4d145f97a86906d8a43319a539fc1260651f847866f168adcbb903a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3829f8d4d145f97a86906d8a43319a539fc1260651f847866f168adcbb903a7d->enter($__internal_3829f8d4d145f97a86906d8a43319a539fc1260651f847866f168adcbb903a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d8b35cf51fbef27766741dc53da2228f1bfef77a707e986d12aef451b8b41382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b35cf51fbef27766741dc53da2228f1bfef77a707e986d12aef451b8b41382->enter($__internal_d8b35cf51fbef27766741dc53da2228f1bfef77a707e986d12aef451b8b41382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_d8b35cf51fbef27766741dc53da2228f1bfef77a707e986d12aef451b8b41382->leave($__internal_d8b35cf51fbef27766741dc53da2228f1bfef77a707e986d12aef451b8b41382_prof);

        
        $__internal_3829f8d4d145f97a86906d8a43319a539fc1260651f847866f168adcbb903a7d->leave($__internal_3829f8d4d145f97a86906d8a43319a539fc1260651f847866f168adcbb903a7d_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5ec5b615b5403b15fbf661c703a2e508a027b6dfb6bfe5d57d004cdfa65ecddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec5b615b5403b15fbf661c703a2e508a027b6dfb6bfe5d57d004cdfa65ecddc->enter($__internal_5ec5b615b5403b15fbf661c703a2e508a027b6dfb6bfe5d57d004cdfa65ecddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_641296f12ed2c55877a550a58f319d4bb02b935c504fcc1e6894555bdd40eb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641296f12ed2c55877a550a58f319d4bb02b935c504fcc1e6894555bdd40eb88->enter($__internal_641296f12ed2c55877a550a58f319d4bb02b935c504fcc1e6894555bdd40eb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_641296f12ed2c55877a550a58f319d4bb02b935c504fcc1e6894555bdd40eb88->leave($__internal_641296f12ed2c55877a550a58f319d4bb02b935c504fcc1e6894555bdd40eb88_prof);

        
        $__internal_5ec5b615b5403b15fbf661c703a2e508a027b6dfb6bfe5d57d004cdfa65ecddc->leave($__internal_5ec5b615b5403b15fbf661c703a2e508a027b6dfb6bfe5d57d004cdfa65ecddc_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
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

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
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
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/home/ibm/NetBeansProjects/ivan-brunet-blog/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
