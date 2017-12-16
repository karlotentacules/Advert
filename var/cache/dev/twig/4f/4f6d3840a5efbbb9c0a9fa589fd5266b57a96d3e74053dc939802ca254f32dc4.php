<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5cce8f50c6b12833097d33e486ae23cdc3d53a0b9ae816a0ae348453e90a34f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cce8f50c6b12833097d33e486ae23cdc3d53a0b9ae816a0ae348453e90a34f8->enter($__internal_5cce8f50c6b12833097d33e486ae23cdc3d53a0b9ae816a0ae348453e90a34f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9189748b7c750378667ba76f3ce7eb9eb71a954baa257a30d5b380106f66b742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9189748b7c750378667ba76f3ce7eb9eb71a954baa257a30d5b380106f66b742->enter($__internal_9189748b7c750378667ba76f3ce7eb9eb71a954baa257a30d5b380106f66b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cce8f50c6b12833097d33e486ae23cdc3d53a0b9ae816a0ae348453e90a34f8->leave($__internal_5cce8f50c6b12833097d33e486ae23cdc3d53a0b9ae816a0ae348453e90a34f8_prof);

        
        $__internal_9189748b7c750378667ba76f3ce7eb9eb71a954baa257a30d5b380106f66b742->leave($__internal_9189748b7c750378667ba76f3ce7eb9eb71a954baa257a30d5b380106f66b742_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7eb7a21c833171851539adb2096d57058ebe4e72c8495bf01c90657ebbba2be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb7a21c833171851539adb2096d57058ebe4e72c8495bf01c90657ebbba2be1->enter($__internal_7eb7a21c833171851539adb2096d57058ebe4e72c8495bf01c90657ebbba2be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa56a1dc1be802b4be42093b1767e6f1bac24fc9a5f34857d53a85294b9d9484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa56a1dc1be802b4be42093b1767e6f1bac24fc9a5f34857d53a85294b9d9484->enter($__internal_aa56a1dc1be802b4be42093b1767e6f1bac24fc9a5f34857d53a85294b9d9484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa56a1dc1be802b4be42093b1767e6f1bac24fc9a5f34857d53a85294b9d9484->leave($__internal_aa56a1dc1be802b4be42093b1767e6f1bac24fc9a5f34857d53a85294b9d9484_prof);

        
        $__internal_7eb7a21c833171851539adb2096d57058ebe4e72c8495bf01c90657ebbba2be1->leave($__internal_7eb7a21c833171851539adb2096d57058ebe4e72c8495bf01c90657ebbba2be1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a86010ddbcd45f8b28d74f731fc756a0ca253d21b60f26ccc0e080cf51c77a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a86010ddbcd45f8b28d74f731fc756a0ca253d21b60f26ccc0e080cf51c77a4->enter($__internal_4a86010ddbcd45f8b28d74f731fc756a0ca253d21b60f26ccc0e080cf51c77a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbba38e372ff36e3182305a377145126986259dc3a89cd81314d3df9468e42c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbba38e372ff36e3182305a377145126986259dc3a89cd81314d3df9468e42c7->enter($__internal_fbba38e372ff36e3182305a377145126986259dc3a89cd81314d3df9468e42c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fbba38e372ff36e3182305a377145126986259dc3a89cd81314d3df9468e42c7->leave($__internal_fbba38e372ff36e3182305a377145126986259dc3a89cd81314d3df9468e42c7_prof);

        
        $__internal_4a86010ddbcd45f8b28d74f731fc756a0ca253d21b60f26ccc0e080cf51c77a4->leave($__internal_4a86010ddbcd45f8b28d74f731fc756a0ca253d21b60f26ccc0e080cf51c77a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f0d65c37dcf396ff69c4b4f683db0f6bbc789dc47e5c6113baf15b88ca467d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0d65c37dcf396ff69c4b4f683db0f6bbc789dc47e5c6113baf15b88ca467d2->enter($__internal_3f0d65c37dcf396ff69c4b4f683db0f6bbc789dc47e5c6113baf15b88ca467d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f23cdf115223bbec781b25bcb8a231e0a113cab9e40aae69ea242c3eb8c34082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23cdf115223bbec781b25bcb8a231e0a113cab9e40aae69ea242c3eb8c34082->enter($__internal_f23cdf115223bbec781b25bcb8a231e0a113cab9e40aae69ea242c3eb8c34082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f23cdf115223bbec781b25bcb8a231e0a113cab9e40aae69ea242c3eb8c34082->leave($__internal_f23cdf115223bbec781b25bcb8a231e0a113cab9e40aae69ea242c3eb8c34082_prof);

        
        $__internal_3f0d65c37dcf396ff69c4b4f683db0f6bbc789dc47e5c6113baf15b88ca467d2->leave($__internal_3f0d65c37dcf396ff69c4b4f683db0f6bbc789dc47e5c6113baf15b88ca467d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
