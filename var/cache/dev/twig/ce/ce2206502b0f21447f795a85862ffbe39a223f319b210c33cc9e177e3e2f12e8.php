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

/* dash/player_display_control.html.twig */
class __TwigTemplate_1f42f699ddf70a6ed88dc340c40eaf1ddeb2df8f10308c4cecb772048f86211e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/player_display_control.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/player_display_control.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash/player_display_control.html.twig", 1);
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
        echo "<!-- dash player_display_control -->
<div class=\"container-fluid\">
    <div class=\"row custom-dark\">
        <div class=\"col-2 custom-dark m-0\">
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-maroon p-1\">
                    NPCs
                </div>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 15
            echo "                ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 15), " ");
            // line 16
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["npc"], "showPlayers", [], "any", false, false, false, 16), true))) {
                // line 17
                echo "                        <div class=\"show-players p-1 list-group-item\">
                            ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "
                            <a href=\"/dash/player-display-control/npc/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "/show-hide\">
                                <i class=\"bi bi-person-x show-hide-icon\"></i>
                            </a>
                            ";
                // line 22
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["npc"], "showDm", [], "any", false, false, false, 22), true))) {
                    // line 23
                    echo "                                <a href=\"/dash/player-display-control/npc/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 23), "html", null, true);
                    echo "/toggle-dm\">
                                    <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                                </a>
                            ";
                } else {
                    // line 27
                    echo "                                <a href=\"/dash/player-display-control/npc/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 27), "html", null, true);
                    echo "/toggle-dm\">
                                    <i class=\"bi bi-eye show-hide-icon\"></i>
                                </a>
                            ";
                }
                // line 31
                echo "                        </div>
                    ";
            } else {
                // line 33
                echo "                        <div class=\"p-1 list-group-item\">
                            ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo "
                            <a href=\"/dash/player-display-control/npc/";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "/show-hide\">
                                <i class=\"bi bi-person-check show-hide-icon\"></i>
                            </a>
                            ";
                // line 38
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["npc"], "showDm", [], "any", false, false, false, 38), true))) {
                    // line 39
                    echo "                            <a href=\"/dash/player-display-control/npc/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 39), "html", null, true);
                    echo "/toggle-dm\">
                                <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                            </a>
                            ";
                } else {
                    // line 43
                    echo "                            <a href=\"/dash/player-display-control/npc/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "/toggle-dm\">
                                <i class=\"bi bi-eye show-hide-icon\"></i>
                            </a>
                            ";
                }
                // line 47
                echo "                        </div>
                    ";
            }
            // line 49
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-red-orange p-1\">
                    Creatures
                </div>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 56
            echo "                ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 56), " ");
            // line 57
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["creature"], "showPlayers", [], "any", false, false, false, 57), true))) {
                // line 58
                echo "                <div class=\"show-players p-1 list-group-item\">
                    ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/creature/";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    ";
                // line 63
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["creature"], "showDm", [], "any", false, false, false, 63), true))) {
                    // line 64
                    echo "                    <a href=\"/dash/player-display-control/creature/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 64), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 68
                    echo "                    <a href=\"/dash/player-display-control/creature/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 68), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 72
                echo "                </div>
                ";
            } else {
                // line 74
                echo "                <div class=\"p-1 list-group-item\">
                    ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 75), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/creature/";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 76), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    ";
                // line 79
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["creature"], "showDm", [], "any", false, false, false, 79), true))) {
                    // line 80
                    echo "                    <a href=\"/dash/player-display-control/creature/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 84
                    echo "                    <a href=\"/dash/player-display-control/creature/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 84), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 88
                echo "                </div>
                ";
            }
            // line 90
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-orange p-1\">
                    Locations
                </div>
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 97
            echo "                ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 97), " ");
            // line 98
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["location"], "showPlayers", [], "any", false, false, false, 98), true))) {
                // line 99
                echo "                <div class=\"show-players p-1 list-group-item\">
                    ";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 100), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/location/";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    ";
                // line 104
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["location"], "showDm", [], "any", false, false, false, 104), true))) {
                    // line 105
                    echo "                    <a href=\"/dash/player-display-control/location/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 105), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 109
                    echo "                    <a href=\"/dash/player-display-control/location/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 109), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 113
                echo "                </div>
                ";
            } else {
                // line 115
                echo "                <div class=\"p-1 list-group-item\">
                    ";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 116), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/location/";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 117), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    ";
                // line 120
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["location"], "showDm", [], "any", false, false, false, 120), true))) {
                    // line 121
                    echo "                    <a href=\"/dash/player-display-control/location/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 121), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 125
                    echo "                    <a href=\"/dash/player-display-control/location/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 125), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 129
                echo "                </div>
                ";
            }
            // line 131
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-yellow p-1\">
                    Items
                </div>
                ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 138
            echo "                ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 138), " ");
            // line 139
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "showPlayers", [], "any", false, false, false, 139), true))) {
                // line 140
                echo "                <div class=\"show-players p-1 list-group-item\">
                    ";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 141), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/item/";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 142), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    ";
                // line 145
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "showDm", [], "any", false, false, false, 145), true))) {
                    // line 146
                    echo "                    <a href=\"/dash/player-display-control/item/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 146), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 150
                    echo "                    <a href=\"/dash/player-display-control/item/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 150), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 154
                echo "                </div>
                ";
            } else {
                // line 156
                echo "                <div class=\"p-1 list-group-item\">
                    ";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 157), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/item/";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 158), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    ";
                // line 161
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "showDm", [], "any", false, false, false, 161), true))) {
                    // line 162
                    echo "                    <a href=\"/dash/player-display-control/item/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 162), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 166
                    echo "                    <a href=\"/dash/player-display-control/item/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 166), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 170
                echo "                </div>
                ";
            }
            // line 172
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-green p-1\">
                    Other
                </div>
                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 179
            echo "                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "heading", [], "any", false, false, false, 179), " ");
            // line 180
            echo "                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "heading", [], "any", false, false, false, 180), " ");
            // line 181
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["other"], "showPlayers", [], "any", false, false, false, 181), true))) {
                // line 182
                echo "                <div class=\"show-players p-1 list-group-item\">
                    ";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "heading", [], "any", false, false, false, 183), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/other/";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 184), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    ";
                // line 187
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["other"], "showDm", [], "any", false, false, false, 187), true))) {
                    // line 188
                    echo "                    <a href=\"/dash/player-display-control/other/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 188), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 192
                    echo "                    <a href=\"/dash/player-display-control/other/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 192), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 196
                echo "                </div>
                ";
            } else {
                // line 198
                echo "                <div class=\"p-1 list-group-item\">
                    ";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "heading", [], "any", false, false, false, 199), "html", null, true);
                echo "
                    <a href=\"/dash/player-display-control/other/";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 200), "html", null, true);
                echo "/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    ";
                // line 203
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["other"], "showDm", [], "any", false, false, false, 203), true))) {
                    // line 204
                    echo "                    <a href=\"/dash/player-display-control/other/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 204), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    ";
                } else {
                    // line 208
                    echo "                    <a href=\"/dash/player-display-control/other/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 208), "html", null, true);
                    echo "/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    ";
                }
                // line 212
                echo "                </div>
                ";
            }
            // line 214
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "            </div>
        </div>
        <div class=\"col\">
            <div class=\"row\">
                <div class=\"container\">
                    <ul class=\"nav justify-content-center\">
                        <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_edit", ["id" => "1"]);
        echo "\" type=\"button\" class=\"btn custom-color-cyan nav-item\">
                            <i class=\"bi bi-card-image\"></i>
                        </a>
                        <a href=\"/dash/player-display-control/hide-all-dm\" type=\"button\" class=\"btn custom-color-blue nav-item\">
                            <i class=\"bi bi-eye-slash-fill\"></i>
                        </a>
                        <a href=\"/dash/player-display-control/hide-all\" type=\"button\" class=\"btn custom-color-purple nav-item\">
                            <i class=\"bi bi-person-x-fill\"></i>
                        </a>
                        <a href=\"/dash/player-display-control/combat-mode\" type=\"button\" class=\"btn custom-color-magenta nav-item\">
                            <i class=\"bi bi-shield-fill-exclamation\"></i>
                        </a>
                    </ul>
                </div>
            </div>
            <div class=\"row justify-content-evenly\">
                ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["characters"]) || array_key_exists("characters", $context) ? $context["characters"] : (function () { throw new RuntimeError('Variable "characters" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 238
            echo "                ";
            $context["characternames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["character"], "name", [], "any", false, false, false, 238), " ");
            // line 239
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["character"], "showDm", [], "any", false, false, false, 239), true))) {
                // line 240
                echo "                <div class=\"col\" id=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["charactername"]) || array_key_exists("charactername", $context) ? $context["charactername"] : (function () { throw new RuntimeError('Variable "charactername" does not exist.', 240, $this->source); })()), "-"), "html", null, true);
                echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-maroon\">
                        <img src=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["character"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["character"], "imageName", [], "any", false, false, false, 242), "html", null, true);
                echo "\" class=\"card-img-top\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["character"], "name", [], "any", false, false, false, 244), "html", null, true);
                echo "</h6>
                            <div class=\"card-text\">";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["character"], "description", [], "any", false, false, false, 245);
                echo "</div>
                        </div>
                    </div>
                </div>
                ";
            }
            // line 250
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 251, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 252
            echo "                ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 252), " ");
            // line 253
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["npc"], "showDm", [], "any", false, false, false, 253), true))) {
                // line 254
                echo "                <div class=\"col\" id=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["npcnames"]) || array_key_exists("npcnames", $context) ? $context["npcnames"] : (function () { throw new RuntimeError('Variable "npcnames" does not exist.', 254, $this->source); })()), "-"), "html", null, true);
                echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-maroon\">
                        <img src=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["npc"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "imageName", [], "any", false, false, false, 256), "html", null, true);
                echo "\" class=\"card-img-top\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">";
                // line 258
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 258), "html", null, true);
                echo "</h6>
                            <div class=\"card-text\">";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["npc"], "description", [], "any", false, false, false, 259);
                echo "</div>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("npc_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 260)]), "html", null, true);
                echo "\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("npc_show", ["id" => twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 261)]), "html", null, true);
                echo "\">Show</a>
                            ";
                // line 262
                echo twig_include($this->env, $context, "npc/_delete_form.html.twig");
                echo "
                        </div>
                    </div>
                </div>
                ";
            }
            // line 267
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 268, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 269
            echo "                ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 269), " ");
            // line 270
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["creature"], "showDm", [], "any", false, false, false, 270), true))) {
                // line 271
                echo "                <div class=\"col\" id=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["creaturenames"]) || array_key_exists("creaturenames", $context) ? $context["creaturenames"] : (function () { throw new RuntimeError('Variable "creaturenames" does not exist.', 271, $this->source); })()), "-"), "html", null, true);
                echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-red-orange\">
                        <img src=\"";
                // line 273
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["creature"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "imageName", [], "any", false, false, false, 273), "html", null, true);
                echo "\" class=\"card-img-top\">
                        <div class=\"card-body  custom-color-red-orange\">
                            <h6 class=\"card-title\">";
                // line 275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 275), "html", null, true);
                echo "</h6>
                            <div class=\"card-text\">";
                // line 276
                echo twig_get_attribute($this->env, $this->source, $context["creature"], "description", [], "any", false, false, false, 276);
                echo "</div>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creature_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 277)]), "html", null, true);
                echo "\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creature_show", ["id" => twig_get_attribute($this->env, $this->source, $context["creature"], "id", [], "any", false, false, false, 278)]), "html", null, true);
                echo "\">Show</a>
                            ";
                // line 279
                echo twig_include($this->env, $context, "creature/_delete_form.html.twig");
                echo "
                        </div>
                    </div>
                </div>
                ";
            }
            // line 284
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 285, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 286
            echo "                ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 286), " ");
            // line 287
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["location"], "showDm", [], "any", false, false, false, 287), true))) {
                // line 288
                echo "                <div class=\"col\" id=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["locationnames"]) || array_key_exists("locationnames", $context) ? $context["locationnames"] : (function () { throw new RuntimeError('Variable "locationnames" does not exist.', 288, $this->source); })()), "-"), "html", null, true);
                echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded  custom-color-orange\">
                        <img src=\"";
                // line 290
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["location"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "imageName", [], "any", false, false, false, 290), "html", null, true);
                echo "\" class=\"card-img-top\">
                        <div class=\"card-body custom-color-orange\">
                            <h6 class=\"card-title\">";
                // line 292
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 292), "html", null, true);
                echo "</h6>
                            <div class=\"card-text\">";
                // line 293
                echo twig_get_attribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 293);
                echo "</div>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 294
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 294)]), "html", null, true);
                echo "\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 295
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_show", ["id" => twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 295)]), "html", null, true);
                echo "\">Show</a>
                            ";
                // line 296
                echo twig_include($this->env, $context, "location/_delete_form.html.twig");
                echo "
                        </div>
                    </div>
                </div>
                ";
            }
            // line 301
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 302, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 303
            echo "                ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 303), " ");
            // line 304
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "showDm", [], "any", false, false, false, 304), true))) {
                // line 305
                echo "                <div class=\"col\" id=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["itemnames"]) || array_key_exists("itemnames", $context) ? $context["itemnames"] : (function () { throw new RuntimeError('Variable "itemnames" does not exist.', 305, $this->source); })()), "-"), "html", null, true);
                echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-yellow\">
                        <img src=\"";
                // line 307
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["item"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageName", [], "any", false, false, false, 307), "html", null, true);
                echo "\" class=\"card-img-top\">
                        <div class=\"card-body custom-color-yellow\">
                            <h6 class=\"card-title\">";
                // line 309
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 309), "html", null, true);
                echo "</h6>
                            <div class=\"card-text\">";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 310);
                echo "</div>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 311
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 311)]), "html", null, true);
                echo "\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 312
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 312)]), "html", null, true);
                echo "\">Show</a>
                            ";
                // line 313
                echo twig_include($this->env, $context, "item/_delete_form.html.twig");
                echo "
                        </div>
                    </div>
                </div>
                ";
            }
            // line 318
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 319, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 320
            echo "                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "heading", [], "any", false, false, false, 320), " ");
            // line 321
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["other"], "showDm", [], "any", false, false, false, 321), true))) {
                // line 322
                echo "                <div class=\"col\" id=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["othernames"]) || array_key_exists("othernames", $context) ? $context["othernames"] : (function () { throw new RuntimeError('Variable "othernames" does not exist.', 322, $this->source); })()), "-"), "html", null, true);
                echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-green\">
                        <img src=\"";
                // line 324
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["other"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "imageName", [], "any", false, false, false, 324), "html", null, true);
                echo "\" class=\"card-img-top\">
                        <div class=\"card-body custom-color-green\">
                            <h6 class=\"card-title\">";
                // line 326
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "heading", [], "any", false, false, false, 326), "html", null, true);
                echo "</h6>
                            <div class=\"card-text\">";
                // line 327
                echo twig_get_attribute($this->env, $this->source, $context["other"], "description", [], "any", false, false, false, 327);
                echo "</div>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 328
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("other_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 328)]), "html", null, true);
                echo "\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"";
                // line 329
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("other_show", ["id" => twig_get_attribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 329)]), "html", null, true);
                echo "\">Show</a>
                            ";
                // line 330
                echo twig_include($this->env, $context, "other/_delete_form.html.twig");
                echo "
                        </div>
                    </div>
                </div>
                ";
            }
            // line 335
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
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
        return "dash/player_display_control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1002 => 336,  988 => 335,  980 => 330,  976 => 329,  972 => 328,  968 => 327,  964 => 326,  957 => 324,  951 => 322,  948 => 321,  945 => 320,  927 => 319,  913 => 318,  905 => 313,  901 => 312,  897 => 311,  893 => 310,  889 => 309,  882 => 307,  876 => 305,  873 => 304,  870 => 303,  852 => 302,  838 => 301,  830 => 296,  826 => 295,  822 => 294,  818 => 293,  814 => 292,  807 => 290,  801 => 288,  798 => 287,  795 => 286,  777 => 285,  763 => 284,  755 => 279,  751 => 278,  747 => 277,  743 => 276,  739 => 275,  732 => 273,  726 => 271,  723 => 270,  720 => 269,  702 => 268,  688 => 267,  680 => 262,  676 => 261,  672 => 260,  668 => 259,  664 => 258,  657 => 256,  651 => 254,  648 => 253,  645 => 252,  627 => 251,  621 => 250,  613 => 245,  609 => 244,  602 => 242,  596 => 240,  593 => 239,  590 => 238,  586 => 237,  567 => 221,  559 => 215,  553 => 214,  549 => 212,  541 => 208,  533 => 204,  531 => 203,  525 => 200,  521 => 199,  518 => 198,  514 => 196,  506 => 192,  498 => 188,  496 => 187,  490 => 184,  486 => 183,  483 => 182,  480 => 181,  477 => 180,  474 => 179,  470 => 178,  463 => 173,  457 => 172,  453 => 170,  445 => 166,  437 => 162,  435 => 161,  429 => 158,  425 => 157,  422 => 156,  418 => 154,  410 => 150,  402 => 146,  400 => 145,  394 => 142,  390 => 141,  387 => 140,  384 => 139,  381 => 138,  377 => 137,  370 => 132,  364 => 131,  360 => 129,  352 => 125,  344 => 121,  342 => 120,  336 => 117,  332 => 116,  329 => 115,  325 => 113,  317 => 109,  309 => 105,  307 => 104,  301 => 101,  297 => 100,  294 => 99,  291 => 98,  288 => 97,  284 => 96,  277 => 91,  271 => 90,  267 => 88,  259 => 84,  251 => 80,  249 => 79,  243 => 76,  239 => 75,  236 => 74,  232 => 72,  224 => 68,  216 => 64,  214 => 63,  208 => 60,  204 => 59,  201 => 58,  198 => 57,  195 => 56,  191 => 55,  184 => 50,  178 => 49,  174 => 47,  166 => 43,  158 => 39,  156 => 38,  150 => 35,  146 => 34,  143 => 33,  139 => 31,  131 => 27,  123 => 23,  121 => 22,  115 => 19,  111 => 18,  108 => 17,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Player Dashboard Controls{% endblock %}

{% block body %}
<!-- dash player_display_control -->
<div class=\"container-fluid\">
    <div class=\"row custom-dark\">
        <div class=\"col-2 custom-dark m-0\">
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-maroon p-1\">
                    NPCs
                </div>
                {% for npc in npcs %}
                {% set npcnames = npc.name|split(' ') %}
                    {% if npc.showPlayers == TRUE %}
                        <div class=\"show-players p-1 list-group-item\">
                            {{ npc.name }}
                            <a href=\"/dash/player-display-control/npc/{{ npc.id }}/show-hide\">
                                <i class=\"bi bi-person-x show-hide-icon\"></i>
                            </a>
                            {% if npc.showDm == TRUE %}
                                <a href=\"/dash/player-display-control/npc/{{ npc.id }}/toggle-dm\">
                                    <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                                </a>
                            {% else %}
                                <a href=\"/dash/player-display-control/npc/{{ npc.id }}/toggle-dm\">
                                    <i class=\"bi bi-eye show-hide-icon\"></i>
                                </a>
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"p-1 list-group-item\">
                            {{ npc.name }}
                            <a href=\"/dash/player-display-control/npc/{{ npc.id }}/show-hide\">
                                <i class=\"bi bi-person-check show-hide-icon\"></i>
                            </a>
                            {% if npc.showDm == TRUE %}
                            <a href=\"/dash/player-display-control/npc/{{ npc.id }}/toggle-dm\">
                                <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                            </a>
                            {% else %}
                            <a href=\"/dash/player-display-control/npc/{{ npc.id }}/toggle-dm\">
                                <i class=\"bi bi-eye show-hide-icon\"></i>
                            </a>
                            {% endif %}
                        </div>
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
                <div class=\"show-players p-1 list-group-item\">
                    {{ creature.name }}
                    <a href=\"/dash/player-display-control/creature/{{ creature.id }}/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    {% if creature.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/creature/{{ creature.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/creature/{{ creature.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
                {% else %}
                <div class=\"p-1 list-group-item\">
                    {{ creature.name }}
                    <a href=\"/dash/player-display-control/creature/{{ creature.id }}/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    {% if creature.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/creature/{{ creature.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/creature/{{ creature.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
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
                <div class=\"show-players p-1 list-group-item\">
                    {{ location.name }}
                    <a href=\"/dash/player-display-control/location/{{ location.id }}/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    {% if location.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/location/{{ location.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/location/{{ location.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
                {% else %}
                <div class=\"p-1 list-group-item\">
                    {{ location.name }}
                    <a href=\"/dash/player-display-control/location/{{ location.id }}/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    {% if location.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/location/{{ location.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/location/{{ location.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
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
                <div class=\"show-players p-1 list-group-item\">
                    {{ item.name }}
                    <a href=\"/dash/player-display-control/item/{{ item.id }}/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    {% if item.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/item/{{ item.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/item/{{ item.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
                {% else %}
                <div class=\"p-1 list-group-item\">
                    {{ item.name }}
                    <a href=\"/dash/player-display-control/item/{{ item.id }}/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    {% if item.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/item/{{ item.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/item/{{ item.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
                {% endif %}
                {% endfor %}
            </div>
            <div class=\"list-group\">
                <div class=\"list-group-item custom-color-green p-1\">
                    Other
                </div>
                {% for other in others %}
                {% set othernames = other.heading|split(' ') %}
                {% set othernames = other.heading|split(' ') %}
                {% if other.showPlayers == TRUE %}
                <div class=\"show-players p-1 list-group-item\">
                    {{ other.heading }}
                    <a href=\"/dash/player-display-control/other/{{ other.id }}/show-hide\">
                        <i class=\"bi bi-person-x show-hide-icon\"></i>
                    </a>
                    {% if other.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/other/{{ other.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/other/{{ other.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
                {% else %}
                <div class=\"p-1 list-group-item\">
                    {{ other.heading }}
                    <a href=\"/dash/player-display-control/other/{{ other.id }}/show-hide\">
                        <i class=\"bi bi-person-check show-hide-icon\"></i>
                    </a>
                    {% if other.showDm == TRUE %}
                    <a href=\"/dash/player-display-control/other/{{ other.id }}/toggle-dm\">
                        <i class=\"bi bi-eye-slash show-hide-icon\"></i>
                    </a>
                    {% else %}
                    <a href=\"/dash/player-display-control/other/{{ other.id }}/toggle-dm\">
                        <i class=\"bi bi-eye show-hide-icon\"></i>
                    </a>
                    {% endif %}
                </div>
                {% endif %}
                {% endfor %}
            </div>
        </div>
        <div class=\"col\">
            <div class=\"row\">
                <div class=\"container\">
                    <ul class=\"nav justify-content-center\">
                        <a href=\"{{ path('game_edit', {'id': '1'}) }}\" type=\"button\" class=\"btn custom-color-cyan nav-item\">
                            <i class=\"bi bi-card-image\"></i>
                        </a>
                        <a href=\"/dash/player-display-control/hide-all-dm\" type=\"button\" class=\"btn custom-color-blue nav-item\">
                            <i class=\"bi bi-eye-slash-fill\"></i>
                        </a>
                        <a href=\"/dash/player-display-control/hide-all\" type=\"button\" class=\"btn custom-color-purple nav-item\">
                            <i class=\"bi bi-person-x-fill\"></i>
                        </a>
                        <a href=\"/dash/player-display-control/combat-mode\" type=\"button\" class=\"btn custom-color-magenta nav-item\">
                            <i class=\"bi bi-shield-fill-exclamation\"></i>
                        </a>
                    </ul>
                </div>
            </div>
            <div class=\"row justify-content-evenly\">
                {% for character in characters %}
                {% set characternames = character.name|split(' ') %}
                {% if character.showDm == TRUE %}
                <div class=\"col\" id=\"{{ charactername|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-maroon\">
                        <img src=\"{{ vich_uploader_asset(character, 'imageFile') }}\" alt=\"{{ character.imageName }}\" class=\"card-img-top\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">{{ character.name }}</h6>
                            <div class=\"card-text\">{{ character.description|raw }}</div>
                        </div>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
                {% for npc in npcs %}
                {% set npcnames = npc.name|split(' ') %}
                {% if npc.showDm == TRUE %}
                <div class=\"col\" id=\"{{ npcnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-maroon\">
                        <img src=\"{{ vich_uploader_asset(npc, 'imageFile') }}\" alt=\"{{ npc.imageName }}\" class=\"card-img-top\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">{{ npc.name }}</h6>
                            <div class=\"card-text\">{{ npc.description|raw }}</div>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('npc_edit', { 'id': npc.id }) }}\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('npc_show', {'id': npc.id}) }}\">Show</a>
                            {{ include('npc/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
                {% for creature in creatures %}
                {% set creaturenames = creature.name|split(' ') %}
                {% if creature.showDm == TRUE %}
                <div class=\"col\" id=\"{{ creaturenames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-red-orange\">
                        <img src=\"{{ vich_uploader_asset(creature, 'imageFile') }}\" alt=\"{{ creature.imageName }}\" class=\"card-img-top\">
                        <div class=\"card-body  custom-color-red-orange\">
                            <h6 class=\"card-title\">{{ creature.name }}</h6>
                            <div class=\"card-text\">{{ creature.description|raw }}</div>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('creature_edit', { 'id': creature.id }) }}\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('creature_show', {'id': creature.id}) }}\">Show</a>
                            {{ include('creature/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
                {% for location in locations %}
                {% set locationnames = location.name|split(' ') %}
                {% if location.showDm == TRUE %}
                <div class=\"col\" id=\"{{ locationnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded  custom-color-orange\">
                        <img src=\"{{ vich_uploader_asset(location, 'imageFile') }}\" alt=\"{{ location.imageName }}\" class=\"card-img-top\">
                        <div class=\"card-body custom-color-orange\">
                            <h6 class=\"card-title\">{{ location.name }}</h6>
                            <div class=\"card-text\">{{ location.description|raw }}</div>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('location_edit', { 'id': location.id }) }}\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('location_show', {'id': location.id}) }}\">Show</a>
                            {{ include('location/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
                {% for item in items %}
                {% set itemnames = item.name|split(' ') %}
                {% if item.showDm == TRUE %}
                <div class=\"col\" id=\"{{ itemnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-yellow\">
                        <img src=\"{{ vich_uploader_asset(item, 'imageFile') }}\" alt=\"{{ item.imageName }}\" class=\"card-img-top\">
                        <div class=\"card-body custom-color-yellow\">
                            <h6 class=\"card-title\">{{ item.name }}</h6>
                            <div class=\"card-text\">{{ item.description|raw }}</div>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('item_edit', { 'id': item.id }) }}\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('item_show', {'id': item.id}) }}\">Show</a>
                            {{ include('item/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
                {% for other in others %}
                {% set othernames = other.heading|split(' ') %}
                {% if other.showDm == TRUE %}
                <div class=\"col\" id=\"{{ othernames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-color-green\">
                        <img src=\"{{ vich_uploader_asset(other, 'imageFile') }}\" alt=\"{{ other.imageName }}\" class=\"card-img-top\">
                        <div class=\"card-body custom-color-green\">
                            <h6 class=\"card-title\">{{ other.heading }}</h6>
                            <div class=\"card-text\">{{ other.description|raw }}</div>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('other_edit', { 'id': other.id }) }}\">Edit</a>
                            <a class=\"btn custom-color-blue\" href=\"{{ path('other_show', {'id': other.id}) }}\">Show</a>
                            {{ include('other/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "dash/player_display_control.html.twig", "/var/www/html/templates/dash/player_display_control.html.twig");
    }
}
