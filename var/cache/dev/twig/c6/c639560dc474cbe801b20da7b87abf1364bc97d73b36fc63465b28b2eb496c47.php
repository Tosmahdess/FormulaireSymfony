<?php

/* formulaire/show.html.twig */
class __TwigTemplate_4d489112b99efba7b4c63d97af7617c0350ec3102666941567b31b3233363258 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaire/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaire/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"my-4\">Liste des offres</h1>

            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entretiens"]) || array_key_exists("entretiens", $context) ? $context["entretiens"] : (function () { throw new Twig_Error_Runtime('Variable "entretiens" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entretien"]) {
            // line 7
            echo "                <div class=\"row\">
                    <table style=\"border-collapse: collapse\">
                        <tr style=\"border: 1px solid black\">
                            <th style=\"border: 1px solid black\">ID</th>
                            <th style=\"border: 1px solid black\">Nom</th>
                            <th style=\"border: 1px solid black\">Prenom</th>
                            <th style=\"border: 1px solid black\">Filiaire</th>
                            <th style=\"border: 1px solid black\">Raison Sociale</th>
                            <th style=\"border: 1px solid black\">Etablissement</th>
                            <th style=\"border: 1px solid black\">Date entretien</th>
                            <td rowspan=\"2\"><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire_create");
            echo "\">Détails</a></td>
                        </tr>

                        <tr style=\"border: 1px solid black\">
                            <td style=\"border: 1px solid black\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "id", array()), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "nom", array()), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "filiaire", array()), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "raisonsociale", array()), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "etablissement", array()), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "dateentretien", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        </tr>
                    </table>
                </div>

                <hr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entretien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"#\">1</a>
        </li>
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  73 => 17,  61 => 7,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"my-4\">Liste des offres</h1>

            {% for entretien in entretiens %}
                <div class=\"row\">
                    <table style=\"border-collapse: collapse\">
                        <tr style=\"border: 1px solid black\">
                            <th style=\"border: 1px solid black\">ID</th>
                            <th style=\"border: 1px solid black\">Nom</th>
                            <th style=\"border: 1px solid black\">Prenom</th>
                            <th style=\"border: 1px solid black\">Filiaire</th>
                            <th style=\"border: 1px solid black\">Raison Sociale</th>
                            <th style=\"border: 1px solid black\">Etablissement</th>
                            <th style=\"border: 1px solid black\">Date entretien</th>
                            <td rowspan=\"2\"><a href=\"{{ path('formulaire_create') }}\">Détails</a></td>
                        </tr>

                        <tr style=\"border: 1px solid black\">
                            <td style=\"border: 1px solid black\">{{ entretien.id }}</td>
                            <td style=\"border: 1px solid black\">{{ entretien.nom }}</td>
                            <td style=\"border: 1px solid black\">{{ entretien.prenom }}</td>
                            <td style=\"border: 1px solid black\">{{ entretien.filiaire }}</td>
                            <td style=\"border: 1px solid black\">{{ entretien.raisonsociale }}</td>
                            <td style=\"border: 1px solid black\">{{ entretien.etablissement }}</td>
                            <td style=\"border: 1px solid black\">{{ entretien.dateentretien | date('d-m-Y')}}</td>
                        </tr>
                    </table>
                </div>

                <hr>
            {% endfor %}

    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"#\">1</a>
        </li>
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    </ul>
{% endblock %}", "formulaire/show.html.twig", "F:\\ProjetsSymfony\\FormulaireSymfony\\templates\\formulaire\\show.html.twig");
    }
}
