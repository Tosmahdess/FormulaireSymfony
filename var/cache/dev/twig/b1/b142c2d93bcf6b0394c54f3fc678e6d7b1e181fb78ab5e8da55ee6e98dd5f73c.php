<?php

/* formulaire/create.html.twig */
class __TwigTemplate_61dab0af8635f64ed479f01e92e706038f6a940fa5b239a0d363fe7655ff8f79 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaire/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaire/create.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 3, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <h1 style=\"text-align:center\"><strong>Entretien Professionnel</strong></h1>

    <hr style=\"border-width: 5px\">

    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 18, $this->source); })()), 'errors');
        echo "

    <!-- <img align=\"left\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\"> -->
    <div style=\"text-align: center\">
    <input style=\"margin-left: 1%; margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div1');\" value=\"Bilan période écoulée\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div2');\" value=\"Bilan des formations\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div3');\" value=\"Projets\"/>
    </div>
    <!-- <img align=\"right\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\"> -->

        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Informations salarié</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 36, $this->source); })()), "filiaire", array()), 'label', array("label" => "Filiaire"));
        echo " </strong>
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 37, $this->source); })()), "filiaire", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 38, $this->source); })()), "filiaire", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 44, $this->source); })()), "raisonsociale", array()), 'label', array("label" => "Raison sociale société"));
        echo " </strong>
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 45, $this->source); })()), "raisonsociale", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 46, $this->source); })()), "raisonsociale", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 52, $this->source); })()), "etablissement", array()), 'label', array("label" => "Intitulé établissement"));
        echo " </strong>
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 53, $this->source); })()), "etablissement", array()), 'errors');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 54, $this->source); })()), "etablissement", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 60, $this->source); })()), "nom", array()), 'label', array("label" => "Nom"));
        echo " </strong>
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 61, $this->source); })()), "nom", array()), 'errors');
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 62, $this->source); })()), "nom", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 68, $this->source); })()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo " </strong>
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 69, $this->source); })()), "prenom", array()), 'errors');
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 70, $this->source); })()), "prenom", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 76, $this->source); })()), "dateembauche", array()), 'label', array("label" => "Date d'embauche dans la société"));
        echo " </strong>
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 77, $this->source); })()), "dateembauche", array()), 'errors');
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 78, $this->source); })()), "dateembauche", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 84, $this->source); })()), "personnechargeentretien", array()), 'label', array("label" => "Personne en charge de l'entretien"));
        echo " </strong>
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 85, $this->source); })()), "personnechargeentretien", array()), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 86, $this->source); })()), "personnechargeentretien", array()), 'widget');
        echo "
            </font>
        </div>

    <div style=\"margin-left: 25%; margin-right: 25%\">
        <font size=\"4\" face=\"georgia\">
            <strong> ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 92, $this->source); })()), "dateentretien", array()), 'label', array("label" => "Date entretien professionnel 2018"));
        echo " </strong>
            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 93, $this->source); })()), "dateentretien", array()), 'errors');
        echo "
            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 94, $this->source); })()), "dateentretien", array()), 'widget');
        echo "
        </font>
    </div>

    <div id=\"div1\" style=\"display: none\">
        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Bilan de la période écoulée depuis le dernier entretien professionnel</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 107, $this->source); })()), "dernierentretien", array()), 'label', array("label" => "Dernier entretien professionnel"));
        echo " </strong>
                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 108, $this->source); })()), "dernierentretien", array()), 'errors');
        echo "
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 109, $this->source); })()), "dernierentretien", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 115, $this->source); })()), "convocationenvoye", array()), 'label', array("label" => "Convocation envoyée le : "));
        echo " </strong>
                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 116, $this->source); })()), "convocationenvoye", array()), 'errors');
        echo "
                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 117, $this->source); })()), "convocationenvoye", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 123, $this->source); })()), "convocationtype", array()), 'label', array("label" => "Convocation par : Mail / Papier"));
        echo " </strong>
                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 124, $this->source); })()), "convocationtype", array()), 'errors');
        echo "
                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 125, $this->source); })()), "convocationtype", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 131, $this->source); })()), "retourdossier", array()), 'label', array("label" => "Retour du dossier : "));
        echo " </strong>
                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 132, $this->source); })()), "retourdossier", array()), 'errors');
        echo "
                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 133, $this->source); })()), "retourdossier", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 139, $this->source); })()), "progressionpro", array()), 'label', array("label" => "Progression professionnelle depuis le dernier entretien : "));
        echo " </strong>
                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 140, $this->source); })()), "progressionpro", array()), 'errors');
        echo "
                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 141, $this->source); })()), "progressionpro", array()), 'widget');
        echo "
            </font>
        </div>
    </div>

    <div id=\"div2\" style=\"display: none\">
        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Bilan des formations depuis le dernier entretien professionnel</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 155, $this->source); })()), "actionformation1", array()), 'label', array("label" => "Action de formation réalisée n°1"));
        echo " </strong>
                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 156, $this->source); })()), "actionformation1", array()), 'errors');
        echo "
                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 157, $this->source); })()), "actionformation1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 163, $this->source); })()), "dateformation1", array()), 'label', array("label" => "Date de la formation réalisée n°1"));
        echo " </strong>
                ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 164, $this->source); })()), "dateformation1", array()), 'errors');
        echo "
                ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 165, $this->source); })()), "dateformation1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 171, $this->source); })()), "actionformation2", array()), 'label', array("label" => "Action de formation réalisée n°2"));
        echo " </strong>
                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 172, $this->source); })()), "actionformation2", array()), 'errors');
        echo "
                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 173, $this->source); })()), "actionformation2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 179, $this->source); })()), "dateformation2", array()), 'label', array("label" => "Date de la formation réalisée n°2"));
        echo " </strong>
                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 180, $this->source); })()), "dateformation2", array()), 'errors');
        echo "
                ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 181, $this->source); })()), "dateformation2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 187, $this->source); })()), "certification", array()), 'label', array("label" => "Certification obtenues depuis le dernier entretien : "));
        echo " </strong>
                ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 188, $this->source); })()), "certification", array()), 'errors');
        echo "
                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 189, $this->source); })()), "certification", array()), 'widget');
        echo "
            </font>
        </div>
    </div>

    <div id=\"div3\" style=\"display: none\">
        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Projet professionnel du collaborateur</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 203, $this->source); })()), "objectifsct", array()), 'label', array("label" => "Objectifs professionnels à CT : "));
        echo " </strong>
                ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 204, $this->source); })()), "objectifsct", array()), 'errors');
        echo "
                ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 205, $this->source); })()), "objectifsct", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 211, $this->source); })()), "objectifsmlt", array()), 'label', array("label" => "Objectifs professionnels à MLT : "));
        echo " </strong>
                ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 212, $this->source); })()), "objectifsmlt", array()), 'errors');
        echo "
                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 213, $this->source); })()), "objectifsmlt", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 219, $this->source); })()), "demandeformation1", array()), 'label', array("label" => "Demande de formation n°1"));
        echo " </strong>
                ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 220, $this->source); })()), "demandeformation1", array()), 'errors');
        echo "
                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 221, $this->source); })()), "demandeformation1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 227, $this->source); })()), "dateprevi1", array()), 'label', array("label" => "Date prévisionnelle n°1"));
        echo " </strong>
                ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 228, $this->source); })()), "dateprevi1", array()), 'errors');
        echo "
                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 229, $this->source); })()), "dateprevi1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 235, $this->source); })()), "demandeformation2", array()), 'label', array("label" => "Demande de formation n°2"));
        echo " </strong>
                ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 236, $this->source); })()), "demandeformation2", array()), 'errors');
        echo "
                ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 237, $this->source); })()), "demandeformation2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 243, $this->source); })()), "dateprevi2", array()), 'label', array("label" => "Date prévisionnelle n°2"));
        echo " </strong>
                ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 244, $this->source); })()), "dateprevi2", array()), 'errors');
        echo "
                ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 245, $this->source); })()), "dateprevi2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 251, $this->source); })()), "avisresponsable", array()), 'label', array("label" => "Avis du responsable"));
        echo " </strong>
                ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 252, $this->source); })()), "avisresponsable", array()), 'errors');
        echo "
                ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 253, $this->source); })()), "avisresponsable", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 259, $this->source); })()), "projet", array()), 'label', array("label" => "Le collaborateur a-t-il un projet de : VAE, Bilan de compétence, CIF, CPF, CEP ? "));
        echo " </strong>
                ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 260, $this->source); })()), "projet", array()), 'errors');
        echo "
                ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 261, $this->source); })()), "projet", array()), 'widget');
        echo "
            </font>
        </div>
    </div>



    <hr>

    <button type=\"submit\" class=\"btn btn-success\" style=\"margin-left: 25%; margin-top: 1%; margin-bottom: 1%\">
        ";
        // line 271
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 271, $this->source); })())) {
            // line 272
            echo "            Enregistrer
        ";
        } else {
            // line 274
            echo "            Ajouter
        ";
        }
        // line 276
        echo "    </button>

    <input type=\"button\" class=\"btn btn-success\" id=\"ExportCsv\" value=\"Export\">

    ";
        // line 280
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 280, $this->source); })()), 'form_end');
        echo "



    ";
        // line 284
        $this->displayBlock('javascripts', $context, $blocks);
        // line 317
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 284
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        echo "    <script type=\"text/javascript\">

        function affCache(idDiv) {
            var div = document.getElementById(idDiv);

            if (idDiv === \"div1\"){
                div.style.display = \"\";
                document.getElementById(\"div2\").style.display = \"none\";
                document.getElementById(\"div3\").style.display = \"none\"
            }else if (idDiv === \"div2\") {
                div.style.display = \"\";
                document.getElementById(\"div1\").style.display = \"none\";
                document.getElementById(\"div3\").style.display = \"none\"
            }else if (idDiv === \"div3\") {
                div.style.display = \"\";
                document.getElementById(\"div1\").style.display = \"none\";
                document.getElementById(\"div2\").style.display = \"none\"
            }
        }

        \$(\"#ExportCsv\").click(function(){

            \$.ajax({
                url : 'http://127.0.0.1:8000/Export',
                type : 'POST',
            });

        });


    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 285,  613 => 284,  602 => 317,  600 => 284,  593 => 280,  587 => 276,  583 => 274,  579 => 272,  577 => 271,  564 => 261,  560 => 260,  556 => 259,  547 => 253,  543 => 252,  539 => 251,  530 => 245,  526 => 244,  522 => 243,  513 => 237,  509 => 236,  505 => 235,  496 => 229,  492 => 228,  488 => 227,  479 => 221,  475 => 220,  471 => 219,  462 => 213,  458 => 212,  454 => 211,  445 => 205,  441 => 204,  437 => 203,  420 => 189,  416 => 188,  412 => 187,  403 => 181,  399 => 180,  395 => 179,  386 => 173,  382 => 172,  378 => 171,  369 => 165,  365 => 164,  361 => 163,  352 => 157,  348 => 156,  344 => 155,  327 => 141,  323 => 140,  319 => 139,  310 => 133,  306 => 132,  302 => 131,  293 => 125,  289 => 124,  285 => 123,  276 => 117,  272 => 116,  268 => 115,  259 => 109,  255 => 108,  251 => 107,  235 => 94,  231 => 93,  227 => 92,  218 => 86,  214 => 85,  210 => 84,  201 => 78,  197 => 77,  193 => 76,  184 => 70,  180 => 69,  176 => 68,  167 => 62,  163 => 61,  159 => 60,  150 => 54,  146 => 53,  142 => 52,  133 => 46,  129 => 45,  125 => 44,  116 => 38,  112 => 37,  108 => 36,  87 => 18,  83 => 17,  76 => 12,  67 => 9,  64 => 8,  60 => 7,  57 => 6,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme formUser 'bootstrap_4_layout.html.twig' %}

{% block body %}

    {% for message in app.session.flashBag.get('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <h1 style=\"text-align:center\"><strong>Entretien Professionnel</strong></h1>

    <hr style=\"border-width: 5px\">

    {{ form_start(formUser) }}
    {{ form_errors(formUser) }}

    <!-- <img align=\"left\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\"> -->
    <div style=\"text-align: center\">
    <input style=\"margin-left: 1%; margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div1');\" value=\"Bilan période écoulée\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div2');\" value=\"Bilan des formations\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div3');\" value=\"Projets\"/>
    </div>
    <!-- <img align=\"right\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\"> -->

        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Informations salarié</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.filiaire, 'Filiaire') }} </strong>
                {{ form_errors(formUser.filiaire) }}
                {{ form_widget(formUser.filiaire) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.raisonsociale, 'Raison sociale société') }} </strong>
                {{ form_errors(formUser.raisonsociale) }}
                {{ form_widget(formUser.raisonsociale) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.etablissement, 'Intitulé établissement') }} </strong>
                {{ form_errors(formUser.etablissement) }}
                {{ form_widget(formUser.etablissement) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.nom, 'Nom') }} </strong>
                {{ form_errors(formUser.nom) }}
                {{ form_widget(formUser.nom) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.prenom, 'Prénom') }} </strong>
                {{ form_errors(formUser.prenom) }}
                {{ form_widget(formUser.prenom) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.dateembauche, 'Date d\\'embauche dans la société') }} </strong>
                {{ form_errors(formUser.dateembauche) }}
                {{ form_widget(formUser.dateembauche) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.personnechargeentretien, 'Personne en charge de l\\'entretien') }} </strong>
                {{ form_errors(formUser.personnechargeentretien) }}
                {{ form_widget(formUser.personnechargeentretien) }}
            </font>
        </div>

    <div style=\"margin-left: 25%; margin-right: 25%\">
        <font size=\"4\" face=\"georgia\">
            <strong> {{ form_label(formUser.dateentretien, 'Date entretien professionnel 2018') }} </strong>
            {{ form_errors(formUser.dateentretien) }}
            {{ form_widget(formUser.dateentretien) }}
        </font>
    </div>

    <div id=\"div1\" style=\"display: none\">
        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Bilan de la période écoulée depuis le dernier entretien professionnel</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.dernierentretien, 'Dernier entretien professionnel') }} </strong>
                {{ form_errors(formUser.dernierentretien) }}
                {{ form_widget(formUser.dernierentretien) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.convocationenvoye, 'Convocation envoyée le : ') }} </strong>
                {{ form_errors(formUser.convocationenvoye) }}
                {{ form_widget(formUser.convocationenvoye) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.convocationtype, 'Convocation par : Mail / Papier') }} </strong>
                {{ form_errors(formUser.convocationtype) }}
                {{ form_widget(formUser.convocationtype) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.retourdossier, 'Retour du dossier : ') }} </strong>
                {{ form_errors(formUser.retourdossier) }}
                {{ form_widget(formUser.retourdossier) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.progressionpro, 'Progression professionnelle depuis le dernier entretien : ') }} </strong>
                {{ form_errors(formUser.progressionpro) }}
                {{ form_widget(formUser.progressionpro) }}
            </font>
        </div>
    </div>

    <div id=\"div2\" style=\"display: none\">
        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Bilan des formations depuis le dernier entretien professionnel</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.actionformation1, 'Action de formation réalisée n°1') }} </strong>
                {{ form_errors(formUser.actionformation1) }}
                {{ form_widget(formUser.actionformation1) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.dateformation1, 'Date de la formation réalisée n°1') }} </strong>
                {{ form_errors(formUser.dateformation1) }}
                {{ form_widget(formUser.dateformation1) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.actionformation2, 'Action de formation réalisée n°2') }} </strong>
                {{ form_errors(formUser.actionformation2) }}
                {{ form_widget(formUser.actionformation2) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.dateformation2, 'Date de la formation réalisée n°2') }} </strong>
                {{ form_errors(formUser.dateformation2) }}
                {{ form_widget(formUser.dateformation2) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.certification, 'Certification obtenues depuis le dernier entretien : ') }} </strong>
                {{ form_errors(formUser.certification) }}
                {{ form_widget(formUser.certification) }}
            </font>
        </div>
    </div>

    <div id=\"div3\" style=\"display: none\">
        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Projet professionnel du collaborateur</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.objectifsct, 'Objectifs professionnels à CT : ') }} </strong>
                {{ form_errors(formUser.objectifsct) }}
                {{ form_widget(formUser.objectifsct) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.objectifsmlt, 'Objectifs professionnels à MLT : ') }} </strong>
                {{ form_errors(formUser.objectifsmlt) }}
                {{ form_widget(formUser.objectifsmlt) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.demandeformation1, 'Demande de formation n°1') }} </strong>
                {{ form_errors(formUser.demandeformation1) }}
                {{ form_widget(formUser.demandeformation1) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.dateprevi1, 'Date prévisionnelle n°1') }} </strong>
                {{ form_errors(formUser.dateprevi1) }}
                {{ form_widget(formUser.dateprevi1) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.demandeformation2, 'Demande de formation n°2') }} </strong>
                {{ form_errors(formUser.demandeformation2) }}
                {{ form_widget(formUser.demandeformation2) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.dateprevi2, 'Date prévisionnelle n°2') }} </strong>
                {{ form_errors(formUser.dateprevi2) }}
                {{ form_widget(formUser.dateprevi2) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.avisresponsable, 'Avis du responsable') }} </strong>
                {{ form_errors(formUser.avisresponsable) }}
                {{ form_widget(formUser.avisresponsable) }}
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> {{ form_label(formUser.projet, 'Le collaborateur a-t-il un projet de : VAE, Bilan de compétence, CIF, CPF, CEP ? ') }} </strong>
                {{ form_errors(formUser.projet) }}
                {{ form_widget(formUser.projet) }}
            </font>
        </div>
    </div>



    <hr>

    <button type=\"submit\" class=\"btn btn-success\" style=\"margin-left: 25%; margin-top: 1%; margin-bottom: 1%\">
        {% if editMode %}
            Enregistrer
        {% else %}
            Ajouter
        {% endif %}
    </button>

    <input type=\"button\" class=\"btn btn-success\" id=\"ExportCsv\" value=\"Export\">

    {{ form_end(formUser) }}



    {% block javascripts %}
    <script type=\"text/javascript\">

        function affCache(idDiv) {
            var div = document.getElementById(idDiv);

            if (idDiv === \"div1\"){
                div.style.display = \"\";
                document.getElementById(\"div2\").style.display = \"none\";
                document.getElementById(\"div3\").style.display = \"none\"
            }else if (idDiv === \"div2\") {
                div.style.display = \"\";
                document.getElementById(\"div1\").style.display = \"none\";
                document.getElementById(\"div3\").style.display = \"none\"
            }else if (idDiv === \"div3\") {
                div.style.display = \"\";
                document.getElementById(\"div1\").style.display = \"none\";
                document.getElementById(\"div2\").style.display = \"none\"
            }
        }

        \$(\"#ExportCsv\").click(function(){

            \$.ajax({
                url : 'http://127.0.0.1:8000/Export',
                type : 'POST',
            });

        });


    </script>
    {% endblock %}

{% endblock %}
", "formulaire/create.html.twig", "F:\\ProjetsSymfony\\FormulaireSymfony\\templates\\formulaire\\create.html.twig");
    }
}
