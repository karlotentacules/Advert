<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf5b6d12ffc71bcaa15bfa0888c10dfbec713397abfe2148cf494be2024a99f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5b6d12ffc71bcaa15bfa0888c10dfbec713397abfe2148cf494be2024a99f4->enter($__internal_cf5b6d12ffc71bcaa15bfa0888c10dfbec713397abfe2148cf494be2024a99f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c03bf8ca240b7ea838a06e5732430fc568a0a61fd14d0da7d23c97e5f88ccb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03bf8ca240b7ea838a06e5732430fc568a0a61fd14d0da7d23c97e5f88ccb34->enter($__internal_c03bf8ca240b7ea838a06e5732430fc568a0a61fd14d0da7d23c97e5f88ccb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf5b6d12ffc71bcaa15bfa0888c10dfbec713397abfe2148cf494be2024a99f4->leave($__internal_cf5b6d12ffc71bcaa15bfa0888c10dfbec713397abfe2148cf494be2024a99f4_prof);

        
        $__internal_c03bf8ca240b7ea838a06e5732430fc568a0a61fd14d0da7d23c97e5f88ccb34->leave($__internal_c03bf8ca240b7ea838a06e5732430fc568a0a61fd14d0da7d23c97e5f88ccb34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c17181a9278c3cb7290a550c89f6d2d7d0b08e4ffc567e5af126cd4e4eab9084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17181a9278c3cb7290a550c89f6d2d7d0b08e4ffc567e5af126cd4e4eab9084->enter($__internal_c17181a9278c3cb7290a550c89f6d2d7d0b08e4ffc567e5af126cd4e4eab9084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_182000561fa887b175ca3d95a2991d19b4398f968d48621081a49b54b9948a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182000561fa887b175ca3d95a2991d19b4398f968d48621081a49b54b9948a4f->enter($__internal_182000561fa887b175ca3d95a2991d19b4398f968d48621081a49b54b9948a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_182000561fa887b175ca3d95a2991d19b4398f968d48621081a49b54b9948a4f->leave($__internal_182000561fa887b175ca3d95a2991d19b4398f968d48621081a49b54b9948a4f_prof);

        
        $__internal_c17181a9278c3cb7290a550c89f6d2d7d0b08e4ffc567e5af126cd4e4eab9084->leave($__internal_c17181a9278c3cb7290a550c89f6d2d7d0b08e4ffc567e5af126cd4e4eab9084_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3db6c2b89498f7612e6f66813f40936a3774ebddfd23e052002f2fc744e39e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db6c2b89498f7612e6f66813f40936a3774ebddfd23e052002f2fc744e39e2c->enter($__internal_3db6c2b89498f7612e6f66813f40936a3774ebddfd23e052002f2fc744e39e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c4ad16760b181b5216cf8c7521754facc15299d17a167cb11f852163b0e3a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4ad16760b181b5216cf8c7521754facc15299d17a167cb11f852163b0e3a0b->enter($__internal_0c4ad16760b181b5216cf8c7521754facc15299d17a167cb11f852163b0e3a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c4ad16760b181b5216cf8c7521754facc15299d17a167cb11f852163b0e3a0b->leave($__internal_0c4ad16760b181b5216cf8c7521754facc15299d17a167cb11f852163b0e3a0b_prof);

        
        $__internal_3db6c2b89498f7612e6f66813f40936a3774ebddfd23e052002f2fc744e39e2c->leave($__internal_3db6c2b89498f7612e6f66813f40936a3774ebddfd23e052002f2fc744e39e2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a7f6f1ca4ae29176cf2c44fde0938a288ac03b7fe3b15bf4d25056ba46e12b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7f6f1ca4ae29176cf2c44fde0938a288ac03b7fe3b15bf4d25056ba46e12b5->enter($__internal_4a7f6f1ca4ae29176cf2c44fde0938a288ac03b7fe3b15bf4d25056ba46e12b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1fea6ab6845b894c90ebc979d2add05d036f8ea2a58b6dfb256325a677a2877c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fea6ab6845b894c90ebc979d2add05d036f8ea2a58b6dfb256325a677a2877c->enter($__internal_1fea6ab6845b894c90ebc979d2add05d036f8ea2a58b6dfb256325a677a2877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1fea6ab6845b894c90ebc979d2add05d036f8ea2a58b6dfb256325a677a2877c->leave($__internal_1fea6ab6845b894c90ebc979d2add05d036f8ea2a58b6dfb256325a677a2877c_prof);

        
        $__internal_4a7f6f1ca4ae29176cf2c44fde0938a288ac03b7fe3b15bf4d25056ba46e12b5->leave($__internal_4a7f6f1ca4ae29176cf2c44fde0938a288ac03b7fe3b15bf4d25056ba46e12b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
