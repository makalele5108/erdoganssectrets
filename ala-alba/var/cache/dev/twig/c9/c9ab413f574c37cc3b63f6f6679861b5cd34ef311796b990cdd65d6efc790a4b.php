<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_82922d3e6310996b5a63f1601ed4306c821f2198b95703a88e1cef73a253edba extends Twig_Template
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
        $__internal_40f70d68807bcd698c55e063bbd65576c779e2b606ac86f2ca43c111a4ad0fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f70d68807bcd698c55e063bbd65576c779e2b606ac86f2ca43c111a4ad0fcf->enter($__internal_40f70d68807bcd698c55e063bbd65576c779e2b606ac86f2ca43c111a4ad0fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6fb123773d327cf53a966b564faeb1f02b5cbfb60012ecf3f2126315b868d096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb123773d327cf53a966b564faeb1f02b5cbfb60012ecf3f2126315b868d096->enter($__internal_6fb123773d327cf53a966b564faeb1f02b5cbfb60012ecf3f2126315b868d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_40f70d68807bcd698c55e063bbd65576c779e2b606ac86f2ca43c111a4ad0fcf->leave($__internal_40f70d68807bcd698c55e063bbd65576c779e2b606ac86f2ca43c111a4ad0fcf_prof);

        
        $__internal_6fb123773d327cf53a966b564faeb1f02b5cbfb60012ecf3f2126315b868d096->leave($__internal_6fb123773d327cf53a966b564faeb1f02b5cbfb60012ecf3f2126315b868d096_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
