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

/* dashboard/player_display_control.html.twig */
class __TwigTemplate_4eec3fe6ae80e4d7ac7b7a4f867b3afcf8b8b5879b0815d95f10bc1d52725f2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/player_display_control.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/player_display_control.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/player_display_control.html.twig", 1);
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

        echo "Player Dashboard Controls";
        
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
        echo "<div class=\"container-fluid mw-100\">
    <div class=\"row custom-dark\">
        <div class=\"col-sm-2 custom-dark m-0\">
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-red p-1\">
                    NPCs
                </div>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 14
            echo "                ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 14), " ");
            // line 15
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["npc"], "showPlayers", [], "any", false, false, false, 15), true))) {
                // line 16
                echo "                    <a href=\"/dashboards/player-display-control/npc/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 18
                echo "                    <a href=\"/dashboards/player-display-control/npc/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "/show-hide\" class=\"list-group-item p-1 list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</a>
                ";
            }
            // line 20
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-red-orange p-1\">
                    Creatures
                </div>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 27
            echo "                ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 27), " ");
            // line 28
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["creature"], "showPlayers", [], "any", false, false, false, 28), true))) {
                // line 29
                echo "                    <a href=\"/dashboards/player-display-control/creature/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 31
                echo "                    <a href=\"/dashboards/player-display-control/creature/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "/show-hide\" class=\"list-group-item p-1 list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "</a>
                ";
            }
            // line 33
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-orange p-1\">
                    Locations
                </div>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 40
            echo "                ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 40), " ");
            // line 41
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["location"], "showPlayers", [], "any", false, false, false, 41), true))) {
                // line 42
                echo "                    <a href=\"/dashboards/player-display-control/location/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 44
                echo "                    <a href=\"/dashboards/player-display-control/location/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "/show-hide\" class=\"list-group-item p-1 list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</a>
                ";
            }
            // line 46
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-yellow p-1\">
                    Items
                </div>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "                ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 53), " ");
            // line 54
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "showPlayers", [], "any", false, false, false, 54), true))) {
                // line 55
                echo "                    <a href=\"/dashboards/player-display-control/item/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 57
                echo "                    <a href=\"/dashboards/player-display-control/item/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "/show-hide\" class=\"list-group-item p-1 list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 57), "html", null, true);
                echo "</a>
                ";
            }
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-green p-1\">
                    Other
                </div>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 66
            echo "                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 66), " ");
            // line 67
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["creature"]) || array_key_exists("creature", $context) ? $context["creature"] : (function () { throw new RuntimeError('Variable "creature" does not exist.', 67, $this->source); })()), "showPlayers", [], "any", false, false, false, 67), true))) {
                // line 68
                echo "                    <a href=\"/dashboards/player-display-control/other/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 68), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 70
                echo "                    <a href=\"/dashboards/player-display-control/other/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 70), "html", null, true);
                echo "/show-hide\" class=\"list-group-item p-1 list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 70), "html", null, true);
                echo "</a>
                ";
            }
            // line 72
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
        </div>
        <div class=\"col-sm-10\">
            <div class=\"row\">
                <div class=\"container\">
                    <ul class=\"nav justify-content-center\">
                        <a href=\"/dashboards/player-display-control/hide-all\" type=\"button\" class=\"btn custom-color-blue\">
                            <i class=\"bi bi-x-lg\"></i>
                        </a>
                        <a href=\"/dashboards/player-display-control/combat-mode\" type=\"button\" class=\"btn custom-color-red\">
                            <i class=\"bi bi-shield-fill-exclamation\"></i>
                        </a>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Sessions</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 89
            echo "                                <li><a class=\"dropdown-item\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Players</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 97
            echo "                                ";
            $context["playernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 97), " ");
            // line 98
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["playernames"]) || array_key_exists("playernames", $context) ? $context["playernames"] : (function () { throw new RuntimeError('Variable "playernames" does not exist.', 98, $this->source); })()), "-"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 98), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">NPCs</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 106
            echo "                                ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 106), " ");
            // line 107
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["npcnames"]) || array_key_exists("npcnames", $context) ? $context["npcnames"] : (function () { throw new RuntimeError('Variable "npcnames" does not exist.', 107, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 107), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Creatures</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 115
            echo "                                ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 115), " ");
            // line 116
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["creaturenames"]) || array_key_exists("creaturenames", $context) ? $context["creaturenames"] : (function () { throw new RuntimeError('Variable "creaturenames" does not exist.', 116, $this->source); })()), "-"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 116), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Locations</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 124
            echo "                                ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 124), " ");
            // line 125
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["locationnames"]) || array_key_exists("locationnames", $context) ? $context["locationnames"] : (function () { throw new RuntimeError('Variable "locationnames" does not exist.', 125, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 125), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Items</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "                                ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 133), " ");
            // line 134
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["itemnames"]) || array_key_exists("itemnames", $context) ? $context["itemnames"] : (function () { throw new RuntimeError('Variable "itemnames" does not exist.', 134, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 134), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Other</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 142
            echo "                                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 142), " ");
            // line 143
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["othernnames"]) || array_key_exists("othernnames", $context) ? $context["othernnames"] : (function () { throw new RuntimeError('Variable "othernnames" does not exist.', 143, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 143), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                            </ul>
                        </li>
                    </ul>
                </div>
            </div> <!--  end of row 1 of grid 2 -->
            <div class=\"row row-cols-6\"> <!--  start row 2 of grid 2 -->
                ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 152
            echo "                ";
            $context["playernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 152), " ");
            // line 153
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["playernames"]) || array_key_exists("playernames", $context) ? $context["playernames"] : (function () { throw new RuntimeError('Variable "playernames" does not exist.', 153, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-dark\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 157), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "description", [], "any", false, false, false, 158), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "            </div> <!--  end row 2 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 3 of grid 2 -->
                ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 165, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 166
            echo "                ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 166), " ");
            // line 167
            echo "                <div class=\"col collapse multi-collapse \" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["npcnames"]) || array_key_exists("npcnames", $context) ? $context["npcnames"] : (function () { throw new RuntimeError('Variable "npcnames" does not exist.', 167, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 171), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "description", [], "any", false, false, false, 172), "html", null, true);
            echo "</div>
                            <div>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "showPlayers", [], "any", false, false, false, 173), "html", null, true);
            echo "</div>
                            <a href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("npc_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 174)]), "html", null, true);
            echo "\">edit</a>
                            <a href=\"/npc/";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 175), "html", null, true);
            echo "/show-players\" class=\"btn btn-secondary\">Show</a>
                            <a href=\"/npc/";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 176), "html", null, true);
            echo "/hide-players\" class=\"btn btn-secondary\">Hide</a>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </div> <!--  end row 3 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 4 of grid 2 -->
                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 184
            echo "                ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 184), " ");
            // line 185
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["creaturenames"]) || array_key_exists("creaturenames", $context) ? $context["creaturenames"] : (function () { throw new RuntimeError('Variable "creaturenames" does not exist.', 185, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 189), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "description", [], "any", false, false, false, 190), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 198
            echo "                ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 198), " ");
            // line 199
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["locationnames"]) || array_key_exists("locationnames", $context) ? $context["locationnames"] : (function () { throw new RuntimeError('Variable "locationnames" does not exist.', 199, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 203), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 204), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 212
            echo "                ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 212), " ");
            // line 213
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["itemnames"]) || array_key_exists("itemnames", $context) ? $context["itemnames"] : (function () { throw new RuntimeError('Variable "itemnames" does not exist.', 213, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 217), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 218), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 225, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 226
            echo "                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 226), " ");
            // line 227
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["othernames"]) || array_key_exists("othernames", $context) ? $context["othernames"] : (function () { throw new RuntimeError('Variable "othernames" does not exist.', 227, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 231), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "description", [], "any", false, false, false, 232), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 239, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 240
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 240), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 244), "html", null, true);
            echo "</h6>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/player_display_control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 249,  705 => 244,  697 => 240,  693 => 239,  689 => 237,  678 => 232,  674 => 231,  666 => 227,  663 => 226,  659 => 225,  655 => 223,  644 => 218,  640 => 217,  632 => 213,  629 => 212,  625 => 211,  621 => 209,  610 => 204,  606 => 203,  598 => 199,  595 => 198,  591 => 197,  587 => 195,  576 => 190,  572 => 189,  564 => 185,  561 => 184,  557 => 183,  553 => 181,  542 => 176,  538 => 175,  534 => 174,  530 => 173,  526 => 172,  522 => 171,  514 => 167,  511 => 166,  507 => 165,  503 => 163,  492 => 158,  488 => 157,  480 => 153,  477 => 152,  473 => 151,  465 => 145,  454 => 143,  451 => 142,  447 => 141,  440 => 136,  429 => 134,  426 => 133,  422 => 132,  415 => 127,  404 => 125,  401 => 124,  397 => 123,  390 => 118,  379 => 116,  376 => 115,  372 => 114,  365 => 109,  354 => 107,  351 => 106,  347 => 105,  340 => 100,  329 => 98,  326 => 97,  322 => 96,  315 => 91,  306 => 89,  302 => 88,  285 => 73,  279 => 72,  271 => 70,  263 => 68,  260 => 67,  257 => 66,  253 => 65,  246 => 60,  240 => 59,  232 => 57,  224 => 55,  221 => 54,  218 => 53,  214 => 52,  207 => 47,  201 => 46,  193 => 44,  185 => 42,  182 => 41,  179 => 40,  175 => 39,  168 => 34,  162 => 33,  154 => 31,  146 => 29,  143 => 28,  140 => 27,  136 => 26,  129 => 21,  123 => 20,  115 => 18,  107 => 16,  104 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Player Dashboard Controls{% endblock %}

{% block body %}
<div class=\"container-fluid mw-100\">
    <div class=\"row custom-dark\">
        <div class=\"col-sm-2 custom-dark m-0\">
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-red p-1\">
                    NPCs
                </div>
                {% for npc in npcs %}
                {% set npcnames = npc.name|split(' ') %}
                {% if npc.showPlayers == TRUE %}
                    <a href=\"/dashboards/player-display-control/npc/{{ npc.id }}/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">{{ npc.name }}</a>
                {% else %}
                    <a href=\"/dashboards/player-display-control/npc/{{ npc.id }}/show-hide\" class=\"list-group-item p-1 list-group-item-action\">{{ npc.name }}</a>
                {% endif %}
                {% endfor %}
            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-red-orange p-1\">
                    Creatures
                </div>
                {% for creature in creatures %}
                {% set creaturenames = creature.name|split(' ') %}
                {% if creature.showPlayers == TRUE %}
                    <a href=\"/dashboards/player-display-control/creature/{{ creature.id }}/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">{{ creature.name }}</a>
                {% else %}
                    <a href=\"/dashboards/player-display-control/creature/{{ creature.id }}/show-hide\" class=\"list-group-item p-1 list-group-item-action\">{{ creature.name }}</a>
                {% endif %}
                {% endfor %}
            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-orange p-1\">
                    Locations
                </div>
                {% for location in locations %}
                {% set locationnames = location.name|split(' ') %}
                {% if location.showPlayers == TRUE %}
                    <a href=\"/dashboards/player-display-control/location/{{ location.id }}/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">{{ location.name }}</a>
                {% else %}
                    <a href=\"/dashboards/player-display-control/location/{{ location.id }}/show-hide\" class=\"list-group-item p-1 list-group-item-action\">{{ location.name }}</a>
                {% endif %}
                {% endfor %}
            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-yellow p-1\">
                    Items
                </div>
                {% for item in items %}
                {% set itemnames = item.name|split(' ') %}
                {% if item.showPlayers == TRUE %}
                    <a href=\"/dashboards/player-display-control/item/{{ item.id }}/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">{{ item.name }}</a>
                {% else %}
                    <a href=\"/dashboards/player-display-control/item/{{ item.id }}/show-hide\" class=\"list-group-item p-1 list-group-item-action\">{{ item.name }}</a>
                {% endif %}
                {% endfor %}
            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-green p-1\">
                    Other
                </div>
                {% for other in others %}
                {% set othernames = other.name|split(' ') %}
                {% if creature.showPlayers == TRUE %}
                    <a href=\"/dashboards/player-display-control/other/{{ other.id }}/show-hide\" class=\"show-players p-1 list-group-item list-group-item-action\">{{ other.name }}</a>
                {% else %}
                    <a href=\"/dashboards/player-display-control/other/{{ other.id }}/show-hide\" class=\"list-group-item p-1 list-group-item-action\">{{ other.name }}</a>
                {% endif %}
                {% endfor %}
            </div>
        </div>
        <div class=\"col-sm-10\">
            <div class=\"row\">
                <div class=\"container\">
                    <ul class=\"nav justify-content-center\">
                        <a href=\"/dashboards/player-display-control/hide-all\" type=\"button\" class=\"btn custom-color-blue\">
                            <i class=\"bi bi-x-lg\"></i>
                        </a>
                        <a href=\"/dashboards/player-display-control/combat-mode\" type=\"button\" class=\"btn custom-color-red\">
                            <i class=\"bi bi-shield-fill-exclamation\"></i>
                        </a>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Sessions</a>
                            <ul class=\"dropdown-menu\">
                                {% for session in sessions %}
                                <li><a class=\"dropdown-item\" href=\"#\">{{ session.id }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Players</a>
                            <ul class=\"dropdown-menu\">
                                {% for player in players %}
                                {% set playernames = player.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ playernames|join('-') }}\" >{{ player.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">NPCs</a>
                            <ul class=\"dropdown-menu\">
                                {% for npc in npcs %}
                                {% set npcnames = npc.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ npcnames|join('-') }}\">{{ npc.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Creatures</a>
                            <ul class=\"dropdown-menu\">
                                {% for creature in creatures %}
                                {% set creaturenames = creature.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ creaturenames|join('-') }}\" >{{ creature.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Locations</a>
                            <ul class=\"dropdown-menu\">
                                {% for location in locations %}
                                {% set locationnames = location.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ locationnames|join('-') }}\">{{ location.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Items</a>
                            <ul class=\"dropdown-menu\">
                                {% for item in items %}
                                {% set itemnames = item.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ itemnames|join('-') }}\">{{ item.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Other</a>
                            <ul class=\"dropdown-menu\">
                                {% for other in others %}
                                {% set othernames = other.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ othernnames|join('-') }}\">{{ other.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> <!--  end of row 1 of grid 2 -->
            <div class=\"row row-cols-6\"> <!--  start row 2 of grid 2 -->
                {% for player in players %}
                {% set playernames = player.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ playernames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-dark\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ player.name }}</h6>
                            <div class=\"card-title\">{{ player.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div> <!--  end row 2 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 3 of grid 2 -->
                {% for npc in npcs %}
                {% set npcnames = npc.name|split(' ') %}
                <div class=\"col collapse multi-collapse \" id=\"{{ npcnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ npc.name }}</h6>
                            <div class=\"card-title\">{{ npc.description }}</div>
                            <div>{{ npc.showPlayers }}</div>
                            <a href=\"{{ path('npc_edit', { 'id': npc.id }) }}\">edit</a>
                            <a href=\"/npc/{{ npc.id }}/show-players\" class=\"btn btn-secondary\">Show</a>
                            <a href=\"/npc/{{ npc.id }}/hide-players\" class=\"btn btn-secondary\">Hide</a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div> <!--  end row 3 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 4 of grid 2 -->
                {% for creature in creatures %}
                {% set creaturenames = creature.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ creaturenames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ creature.name }}</h6>
                            <div class=\"card-title\">{{ creature.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for location in locations %}
                {% set locationnames = location.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ locationnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ location.name }}</h6>
                            <div class=\"card-title\">{{ location.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for item in items %}
                {% set itemnames = item.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ itemnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ item.name }}</h6>
                            <div class=\"card-title\">{{ item.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for other in others %}
                {% set othernames = other.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ othernames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ other.name }}</h6>
                            <div class=\"card-title\">{{ other.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for session in sessions %}
                <div class=\"col collapse multi-collapse\" id=\"{{ session.id }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ session.id }}</h6>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "dashboard/player_display_control.html.twig", "/var/www/html/templates/dashboard/player_display_control.html.twig");
    }
}
