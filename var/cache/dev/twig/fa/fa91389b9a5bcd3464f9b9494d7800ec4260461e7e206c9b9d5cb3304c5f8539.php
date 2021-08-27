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

/* encounter/edit.html.twig */
class __TwigTemplate_171d6d38a077eca87057c8fddfa24d3a7289d4ec7a482fd0269d8adae973a7cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encounter/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encounter/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "encounter/edit.html.twig", 1);
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

        echo "Edit Combat";
        
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
        echo "    <div class=\"container-fluid justify-content-center align-items-center\">
        ";
        // line 14
        echo "
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editCombatForm"]) || array_key_exists("editCombatForm", $context) ? $context["editCombatForm"] : (function () { throw new RuntimeError('Variable "editCombatForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
        ";
        // line 59
        echo "        <h2>Edit Combat</h2>
        <h4>Characters</h4>
        <div class=\"characters\">
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["editCombatForm"]) || array_key_exists("editCombatForm", $context) ? $context["editCombatForm"] : (function () { throw new RuntimeError('Variable "editCombatForm" does not exist.', 62, $this->source); })()), "characters", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 63
            echo "            <div class=\"row row-cols-auto justify-content-md-center\">
                <div class=\"col\">";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["character"], "name", [], "any", false, false, false, 64), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["character"], "initiative", [], "any", false, false, false, 65), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["character"], "armorClass", [], "any", false, false, false, 66), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["character"], "hp", [], "any", false, false, false, 67), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["character"], "isEnemy", [], "any", false, false, false, 68), 'row');
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
        <h4>NPCs</h4>
        <div class=\"npcs\">
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["editCombatForm"]) || array_key_exists("editCombatForm", $context) ? $context["editCombatForm"] : (function () { throw new RuntimeError('Variable "editCombatForm" does not exist.', 74, $this->source); })()), "npcs", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 75
            echo "            <div class=\"row row-cols-auto justify-content-md-center\">
                <div class=\"col-\">";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 76), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["npc"], "initiative", [], "any", false, false, false, 77), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["npc"], "armorClass", [], "any", false, false, false, 78), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["npc"], "hp", [], "any", false, false, false, 79), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["npc"], "isEnemy", [], "any", false, false, false, 80), 'row');
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </div>
        <h4>Creatures</h4>
        <div class=\"creatures\">
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["editCombatForm"]) || array_key_exists("editCombatForm", $context) ? $context["editCombatForm"] : (function () { throw new RuntimeError('Variable "editCombatForm" does not exist.', 86, $this->source); })()), "creatures", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 87
            echo "            <div class=\"row row-cols-auto justify-content-md-center\">
                <div class=\"col\">";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 88), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["creature"], "initiative", [], "any", false, false, false, 89), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["creature"], "armorClass", [], "any", false, false, false, 90), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["creature"], "hp", [], "any", false, false, false, 91), 'row');
            echo "</div>
                <div class=\"col\">";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["creature"], "isEnemy", [], "any", false, false, false, 92), 'row');
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </div>

        <button class=\"btn custom-color-red\">";
        // line 97
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 97, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        <a type=\"button\" class=\"btn custom-color-red\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encounter_add_fighters", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["encounter"]) || array_key_exists("encounter", $context) ? $context["encounter"] : (function () { throw new RuntimeError('Variable "encounter" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">Add Fighters</a>
        <a type=\"button\" class=\"btn custom-color-red\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encounter_index");
        echo "\">Back to Encounters</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "encounter/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 99,  217 => 98,  213 => 97,  209 => 95,  200 => 92,  196 => 91,  192 => 90,  188 => 89,  184 => 88,  181 => 87,  177 => 86,  172 => 83,  163 => 80,  159 => 79,  155 => 78,  151 => 77,  147 => 76,  144 => 75,  140 => 74,  135 => 71,  126 => 68,  122 => 67,  118 => 66,  114 => 65,  110 => 64,  107 => 63,  103 => 62,  98 => 59,  94 => 15,  91 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Combat{% endblock %}

{% block body %}
    <div class=\"container-fluid justify-content-center align-items-center\">
        {#
        {{ form_start(editCombatForm) }}
            {{ form_widget(editCombatForm) }}
            <button class=\"btn custom-color-red\">{{ button_label|default('Next') }}</button>
        {{ form_end(editCombatForm) }}
        {{ include('encounter/_delete_form.html.twig') }}
        #}

        {{ form_start(editCombatForm) }}
        {#
        <h2>Edit Combat</h2>
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th scope=\"col\">Initiative</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">AC</th>
                <th scope=\"col\">HP</th>
                <th scope=\"col\">Enemy</th>
            </tr>
            </thead>
            <tbody>
            {% for character in editCombatForm.characters %}
                <tr class=\"characters\">
                    <th scope=\"row\">{{ form_row(character.initiative) }}</th>
                    <td>{{ form_row(character.name) }}</td>
                    <td>{{ form_row(character.armorClass) }}</td>
                    <td>{{ form_row(character.hp) }}</td>
                    <td>{{ form_row(character.isEnemy) }}</td>
                </tr>
            {% endfor %}
            {% for npc in editCombatForm.npcs %}
                <tr class=\"npcs\">
                    <th scope=\"row\">{{ form_row(npc.initiative) }}</th>
                    <td>{{ form_row(npc.name) }}</td>
                    <td>{{ form_row(npc.armorClass) }}</td>
                    <td>{{ form_row(npc.hp) }}</td>
                    <td>{{ form_row(npc.isEnemy) }}</td>
                </tr>
            {% endfor %}
            {% for creature in editCombatForm.creatures %}
                <tr class=\"creatures\">
                    <th scope=\"row\">{{ form_row(creature.initiative) }}</th>
                    <td>{{ form_row(creature.name) }}</td>
                    <td>{{ form_row(creature.armorClass) }}</td>
                    <td>{{ form_row(creature.hp) }}</td>
                    <td>{{ form_row(creature.isEnemy) }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        #}
        <h2>Edit Combat</h2>
        <h4>Characters</h4>
        <div class=\"characters\">
            {% for character in editCombatForm.characters %}
            <div class=\"row row-cols-auto justify-content-md-center\">
                <div class=\"col\">{{ form_row(character.name) }}</div>
                <div class=\"col\">{{ form_row(character.initiative) }}</div>
                <div class=\"col\">{{ form_row(character.armorClass) }}</div>
                <div class=\"col\">{{ form_row(character.hp) }}</div>
                <div class=\"col\">{{ form_row(character.isEnemy) }}</div>
            </div>
            {% endfor %}
        </div>
        <h4>NPCs</h4>
        <div class=\"npcs\">
            {% for npc in editCombatForm.npcs %}
            <div class=\"row row-cols-auto justify-content-md-center\">
                <div class=\"col-\">{{ form_row(npc.name) }}</div>
                <div class=\"col\">{{ form_row(npc.initiative) }}</div>
                <div class=\"col\">{{ form_row(npc.armorClass) }}</div>
                <div class=\"col\">{{ form_row(npc.hp) }}</div>
                <div class=\"col\">{{ form_row(npc.isEnemy) }}</div>
            </div>
            {% endfor %}
        </div>
        <h4>Creatures</h4>
        <div class=\"creatures\">
            {% for creature in editCombatForm.creatures %}
            <div class=\"row row-cols-auto justify-content-md-center\">
                <div class=\"col\">{{ form_row(creature.name) }}</div>
                <div class=\"col\">{{ form_row(creature.initiative) }}</div>
                <div class=\"col\">{{ form_row(creature.armorClass) }}</div>
                <div class=\"col\">{{ form_row(creature.hp) }}</div>
                <div class=\"col\">{{ form_row(creature.isEnemy) }}</div>
            </div>
            {% endfor %}
        </div>

        <button class=\"btn custom-color-red\">{{ button_label|default('Save') }}</button>
        <a type=\"button\" class=\"btn custom-color-red\" href=\"{{ path('encounter_add_fighters', {'id': encounter.id}) }}\">Add Fighters</a>
        <a type=\"button\" class=\"btn custom-color-red\" href=\"{{ path('encounter_index') }}\">Back to Encounters</a>
    </div>
{% endblock %}", "encounter/edit.html.twig", "/var/www/html/templates/encounter/edit.html.twig");
    }
}
