<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* encounter/new.html.twig */
class __TwigTemplate_52139e8f07efadd238de40155d9728552db8479d1b4c6b260ef7a3cc71322ed5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encounter/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encounter/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "encounter/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Encounter";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid\">
    <h1>New Encounter</h1>
    <h2>Add Fighters</h2>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newEncounterForm"]) || array_key_exists("newEncounterForm", $context) ? $context["newEncounterForm"] : (function () { throw new RuntimeError('Variable "newEncounterForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["newEncounterForm"]) || array_key_exists("newEncounterForm", $context) ? $context["newEncounterForm"] : (function () { throw new RuntimeError('Variable "newEncounterForm" does not exist.', 10, $this->source); })()), 'widget');
        echo "
        <button class=\"btn custom-color-red\">";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 11, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newEncounterForm"]) || array_key_exists("newEncounterForm", $context) ? $context["newEncounterForm"] : (function () { throw new RuntimeError('Variable "newEncounterForm" does not exist.', 12, $this->source); })()), 'form_end');
        echo "

    ";
        // line 44
        echo "    <button class=\"btn custom-color-red\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Next")) : ("Next")), "html", null, true);
        echo "</button>
    <a type=\"button\" class=\"btn custom-color-red\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encounter_index");
        echo "\">Back to List</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "encounter/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  110 => 44,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Encounter{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <h1>New Encounter</h1>
    <h2>Add Fighters</h2>
    {{ form_start(newEncounterForm) }}
        {{ form_widget(newEncounterForm) }}
        <button class=\"btn custom-color-red\">{{ button_label|default('Save') }}</button>
    {{ form_end(newEncounterForm) }}

    {#
    {{ form_start(newEncounterForm) }}
    <h3>Characters</h3>
    <ul class=\"characters\">
        {% for character in newEncounterForm.characters %}
        <li>{{ form_row(character.name) }}</li>
        <li>{{ form_row(character.initiative) }}</li>

        {% endfor %}
    </ul>
    <h3>NPCs</h3>
    <ul class=\"npcs\">
        {% for npcs in newEncounterForm.npcs %}
        <li>{{ form_row(npc.name) }}</li>
        <li>{{ form_row(npc.initiative) }}</li>
        <li>{{ form_row(npc.hp) }}</li>
        <li>{{ form_row(npc.armorClass) }}</li>
        {% endfor %}
    </ul>
    <h3>creatures</h3>
    <ul class=\"creatures\">
        {% for creature in newEncounterForm.creatures %}
        <li>{{ form_row(creature.name) }}</li>
        <li>{{ form_row(creature.initiative) }}</li>
        <li>{{ form_row(creature.hp) }}</li>
        <li>{{ form_row(creature.armorClass) }}</li>
        {% endfor %}
    </ul>
    {{ form_end(newEncounterForm) }}
    #}
    <button class=\"btn custom-color-red\">{{ button_label|default('Next') }}</button>
    <a type=\"button\" class=\"btn custom-color-red\" href=\"{{ path('encounter_index') }}\">Back to List</a>
</div>
{% endblock %}
", "encounter/new.html.twig", "/var/www/html/templates/encounter/new.html.twig");
    }
}
