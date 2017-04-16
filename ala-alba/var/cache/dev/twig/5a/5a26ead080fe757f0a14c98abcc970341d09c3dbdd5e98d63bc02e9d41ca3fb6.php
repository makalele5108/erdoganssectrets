<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9d14c3843a9b49100fc1c32dc7cd1223c16c1fcf1ba39be6e14ea41e72cbd104 extends Twig_Template
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
        $__internal_6b7d04992f8e1fca38495846ba6967bec8d036a6ec1670831b44b4082656f696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7d04992f8e1fca38495846ba6967bec8d036a6ec1670831b44b4082656f696->enter($__internal_6b7d04992f8e1fca38495846ba6967bec8d036a6ec1670831b44b4082656f696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_56d4a6053ceb62dbdab2ffc013a8976cbd28b83fc68b92b49fc76fd95dbf873c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d4a6053ceb62dbdab2ffc013a8976cbd28b83fc68b92b49fc76fd95dbf873c->enter($__internal_56d4a6053ceb62dbdab2ffc013a8976cbd28b83fc68b92b49fc76fd95dbf873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6b7d04992f8e1fca38495846ba6967bec8d036a6ec1670831b44b4082656f696->leave($__internal_6b7d04992f8e1fca38495846ba6967bec8d036a6ec1670831b44b4082656f696_prof);

        
        $__internal_56d4a6053ceb62dbdab2ffc013a8976cbd28b83fc68b92b49fc76fd95dbf873c->leave($__internal_56d4a6053ceb62dbdab2ffc013a8976cbd28b83fc68b92b49fc76fd95dbf873c_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
