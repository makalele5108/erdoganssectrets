<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_68b380597c54b3486bc7ce0e9e063105dcfab4ce44f36e166babd999b05edfb2 extends Twig_Template
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
        $__internal_caaf3533f9e58289e61d912fed19c5259cd651efde656f62a357a01335cbd60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caaf3533f9e58289e61d912fed19c5259cd651efde656f62a357a01335cbd60d->enter($__internal_caaf3533f9e58289e61d912fed19c5259cd651efde656f62a357a01335cbd60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_287a9af1b093298842ca594810eda7da86ca680f9fa3bd118f5f6ab4fc7ce8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287a9af1b093298842ca594810eda7da86ca680f9fa3bd118f5f6ab4fc7ce8cb->enter($__internal_287a9af1b093298842ca594810eda7da86ca680f9fa3bd118f5f6ab4fc7ce8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_caaf3533f9e58289e61d912fed19c5259cd651efde656f62a357a01335cbd60d->leave($__internal_caaf3533f9e58289e61d912fed19c5259cd651efde656f62a357a01335cbd60d_prof);

        
        $__internal_287a9af1b093298842ca594810eda7da86ca680f9fa3bd118f5f6ab4fc7ce8cb->leave($__internal_287a9af1b093298842ca594810eda7da86ca680f9fa3bd118f5f6ab4fc7ce8cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
