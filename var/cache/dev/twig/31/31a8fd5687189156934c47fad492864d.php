<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* project/setup.html.twig */
class __TwigTemplate_76d0745fa81d6d2f50b152ecc035e849 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base7.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/setup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/setup.html.twig"));

        $this->parent = $this->loadTemplate("base7.html.twig", "project/setup.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Black Jack Setup";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    <h4>Setup Players:</h4>
    <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proj_play");
        yield "\" method=\"post\">
        <input type=\"hidden\" name=\"number_of_players\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["number_of_players"]) || array_key_exists("number_of_players", $context) ? $context["number_of_players"] : (function () { throw new RuntimeError('Variable "number_of_players" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\">
        <div id=\"player_fields\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["number_of_players"]) || array_key_exists("number_of_players", $context) ? $context["number_of_players"] : (function () { throw new RuntimeError('Variable "number_of_players" does not exist.', 10, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            yield "                <div class=\"player-setup\">
                    <label for=\"player";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "_name\">Player ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " Name:</label>
                    <input type=\"text\" id=\"player";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "_name\" name=\"players[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] - 1), "html", null, true);
            yield "][name]\" required class=\"input_proj\">
                    <label for=\"player";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "_balance\">Balance:</label>
                    <input type=\"number\" id=\"player";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "_balance\" name=\"players[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] - 1), "html", null, true);
            yield "][balance]\" required class=\"input_proj\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "        </div>
        <button class=\"button_proj\" type=\"submit\">Start Playing</button>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "project/setup.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  136 => 18,  125 => 15,  121 => 14,  115 => 13,  109 => 12,  106 => 11,  102 => 10,  97 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base7.html.twig\" %}

{% block title %}Black Jack Setup{% endblock %}

{% block main %}
    <h4>Setup Players:</h4>
    <form action=\"{{ path('proj_play') }}\" method=\"post\">
        <input type=\"hidden\" name=\"number_of_players\" value=\"{{ number_of_players }}\">
        <div id=\"player_fields\">
            {% for i in 1..number_of_players %}
                <div class=\"player-setup\">
                    <label for=\"player{{ i }}_name\">Player {{ i }} Name:</label>
                    <input type=\"text\" id=\"player{{ i }}_name\" name=\"players[{{ i-1 }}][name]\" required class=\"input_proj\">
                    <label for=\"player{{ i }}_balance\">Balance:</label>
                    <input type=\"number\" id=\"player{{ i }}_balance\" name=\"players[{{ i-1 }}][balance]\" required class=\"input_proj\">
                </div>
            {% endfor %}
        </div>
        <button class=\"button_proj\" type=\"submit\">Start Playing</button>
    </form>
{% endblock %}
", "project/setup.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/project/setup.html.twig");
    }
}
