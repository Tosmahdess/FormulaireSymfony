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
    <h1 style=\"text-align:center\"><strong>Entretien Professionnel</strong></h1>

    <hr style=\"border-width: 5px\">

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 12, $this->source); })()), 'errors');
        echo "

    <img align=\"left\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\">

    <input style=\"margin-left: 25%; margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div1');\" value=\"Bilan période écoulée\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div2');\" value=\"Bilan des formations\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div3');\" value=\"Projets\"/>

    <img align=\"right\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\">

        <hr style=\"border-width: 5px\">

        <h2 style=\"text-align:center; color: #ac0000\"><strong>Informations salarié</strong></h2>

        <hr style=\"border-width: 5px\">

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 30, $this->source); })()), "filiaire", array()), 'label', array("label" => "Filiaire"));
        echo " </strong>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 31, $this->source); })()), "filiaire", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 32, $this->source); })()), "filiaire", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 38, $this->source); })()), "raisonsociale", array()), 'label', array("label" => "Raison sociale société"));
        echo " </strong>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 39, $this->source); })()), "raisonsociale", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 40, $this->source); })()), "raisonsociale", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 46, $this->source); })()), "etablissement", array()), 'label', array("label" => "Intitulé établissement"));
        echo " </strong>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 47, $this->source); })()), "etablissement", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 48, $this->source); })()), "etablissement", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 54, $this->source); })()), "nom", array()), 'label', array("label" => "Nom"));
        echo " </strong>
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 55, $this->source); })()), "nom", array()), 'errors');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 56, $this->source); })()), "nom", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 62, $this->source); })()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo " </strong>
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 63, $this->source); })()), "prenom", array()), 'errors');
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 64, $this->source); })()), "prenom", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 70, $this->source); })()), "dateembauche", array()), 'label', array("label" => "Date d'embauche dans la société"));
        echo " </strong>
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 71, $this->source); })()), "dateembauche", array()), 'errors');
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 72, $this->source); })()), "dateembauche", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 78, $this->source); })()), "personnechargeentretien", array()), 'label', array("label" => "Personne en charge de l'entretien"));
        echo " </strong>
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 79, $this->source); })()), "personnechargeentretien", array()), 'errors');
        echo "
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 80, $this->source); })()), "personnechargeentretien", array()), 'widget');
        echo "
            </font>
        </div>

    <div style=\"margin-left: 25%; margin-right: 25%\">
        <font size=\"4\" face=\"georgia\">
            <strong> ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 86, $this->source); })()), "dateentretien", array()), 'label', array("label" => "Date entretien professionnel 2018"));
        echo " </strong>
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 87, $this->source); })()), "dateentretien", array()), 'errors');
        echo "
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 88, $this->source); })()), "dateentretien", array()), 'widget');
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
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 101, $this->source); })()), "dernierentretien", array()), 'label', array("label" => "Dernier entretien professionnel"));
        echo " </strong>
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 102, $this->source); })()), "dernierentretien", array()), 'errors');
        echo "
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 103, $this->source); })()), "dernierentretien", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 109, $this->source); })()), "convocationenvoye", array()), 'label', array("label" => "Convocation envoyée le : "));
        echo " </strong>
                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 110, $this->source); })()), "convocationenvoye", array()), 'errors');
        echo "
                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 111, $this->source); })()), "convocationenvoye", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 117, $this->source); })()), "convocationtype", array()), 'label', array("label" => "Convocation par : Mail / Papier"));
        echo " </strong>
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 118, $this->source); })()), "convocationtype", array()), 'errors');
        echo "
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 119, $this->source); })()), "convocationtype", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 125, $this->source); })()), "retourdossier", array()), 'label', array("label" => "Retour du dossier : "));
        echo " </strong>
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 126, $this->source); })()), "retourdossier", array()), 'errors');
        echo "
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 127, $this->source); })()), "retourdossier", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 133, $this->source); })()), "progressionpro", array()), 'label', array("label" => "Progression professionnelle depuis le dernier entretien : "));
        echo " </strong>
                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 134, $this->source); })()), "progressionpro", array()), 'errors');
        echo "
                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 135, $this->source); })()), "progressionpro", array()), 'widget');
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
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 149, $this->source); })()), "actionformation1", array()), 'label', array("label" => "Action de formation réalisée n°1"));
        echo " </strong>
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 150, $this->source); })()), "actionformation1", array()), 'errors');
        echo "
                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 151, $this->source); })()), "actionformation1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 157, $this->source); })()), "dateformation1", array()), 'label', array("label" => "Date de la formation réalisée n°1"));
        echo " </strong>
                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 158, $this->source); })()), "dateformation1", array()), 'errors');
        echo "
                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 159, $this->source); })()), "dateformation1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 165, $this->source); })()), "actionformation2", array()), 'label', array("label" => "Action de formation réalisée n°2"));
        echo " </strong>
                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 166, $this->source); })()), "actionformation2", array()), 'errors');
        echo "
                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 167, $this->source); })()), "actionformation2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 173, $this->source); })()), "dateformation2", array()), 'label', array("label" => "Date de la formation réalisée n°2"));
        echo " </strong>
                ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 174, $this->source); })()), "dateformation2", array()), 'errors');
        echo "
                ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 175, $this->source); })()), "dateformation2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 181, $this->source); })()), "certification", array()), 'label', array("label" => "Certification obtenues depuis le dernier entretien : "));
        echo " </strong>
                ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 182, $this->source); })()), "certification", array()), 'errors');
        echo "
                ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 183, $this->source); })()), "certification", array()), 'widget');
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
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 197, $this->source); })()), "objectifsct", array()), 'label', array("label" => "Objectifs professionnels à CT : "));
        echo " </strong>
                ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 198, $this->source); })()), "objectifsct", array()), 'errors');
        echo "
                ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 199, $this->source); })()), "objectifsct", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 205, $this->source); })()), "objectifsmlt", array()), 'label', array("label" => "Objectifs professionnels à MLT : "));
        echo " </strong>
                ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 206, $this->source); })()), "objectifsmlt", array()), 'errors');
        echo "
                ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 207, $this->source); })()), "objectifsmlt", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 213, $this->source); })()), "demandeformation1", array()), 'label', array("label" => "Demande de formation n°1"));
        echo " </strong>
                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 214, $this->source); })()), "demandeformation1", array()), 'errors');
        echo "
                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 215, $this->source); })()), "demandeformation1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 221, $this->source); })()), "dateprevi1", array()), 'label', array("label" => "Date prévisionnelle n°1"));
        echo " </strong>
                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 222, $this->source); })()), "dateprevi1", array()), 'errors');
        echo "
                ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 223, $this->source); })()), "dateprevi1", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 229, $this->source); })()), "demandeformation2", array()), 'label', array("label" => "Demande de formation n°2"));
        echo " </strong>
                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 230, $this->source); })()), "demandeformation2", array()), 'errors');
        echo "
                ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 231, $this->source); })()), "demandeformation2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 237, $this->source); })()), "dateprevi2", array()), 'label', array("label" => "Date prévisionnelle n°2"));
        echo " </strong>
                ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 238, $this->source); })()), "dateprevi2", array()), 'errors');
        echo "
                ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 239, $this->source); })()), "dateprevi2", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 245, $this->source); })()), "avisresponsable", array()), 'label', array("label" => "Avis du responsable"));
        echo " </strong>
                ";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 246, $this->source); })()), "avisresponsable", array()), 'errors');
        echo "
                ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 247, $this->source); })()), "avisresponsable", array()), 'widget');
        echo "
            </font>
        </div>

        <div style=\"margin-left: 25%; margin-right: 25%\">
            <font size=\"4\" face=\"georgia\">
                <strong> ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 253, $this->source); })()), "projet", array()), 'label', array("label" => "Le collaborateur a-t-il un projet de : VAE, Bilan de compétence, CIF, CPF, CEP ? "));
        echo " </strong>
                ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 254, $this->source); })()), "projet", array()), 'errors');
        echo "
                ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 255, $this->source); })()), "projet", array()), 'widget');
        echo "
            </font>
        </div>
    </div>



    <hr>

    <button type=\"submit\" class=\"btn btn-success\" style=\"margin-left: 25%; margin-top: 1%; margin-bottom: 1%\">
        ";
        // line 265
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 265, $this->source); })())) {
            // line 266
            echo "            Enregistrer
        ";
        } else {
            // line 268
            echo "            Ajouter
        ";
        }
        // line 270
        echo "    </button>

    <input type=\"button\" class=\"btn btn-success\" id=\"ExportCsv\" value=\"Export\">

    ";
        // line 274
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 274, $this->source); })()), 'form_end');
        echo "

    ";
        // line 276
        $this->displayBlock('javascripts', $context, $blocks);
        // line 309
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 276
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 277
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
        return array (  601 => 277,  592 => 276,  581 => 309,  579 => 276,  574 => 274,  568 => 270,  564 => 268,  560 => 266,  558 => 265,  545 => 255,  541 => 254,  537 => 253,  528 => 247,  524 => 246,  520 => 245,  511 => 239,  507 => 238,  503 => 237,  494 => 231,  490 => 230,  486 => 229,  477 => 223,  473 => 222,  469 => 221,  460 => 215,  456 => 214,  452 => 213,  443 => 207,  439 => 206,  435 => 205,  426 => 199,  422 => 198,  418 => 197,  401 => 183,  397 => 182,  393 => 181,  384 => 175,  380 => 174,  376 => 173,  367 => 167,  363 => 166,  359 => 165,  350 => 159,  346 => 158,  342 => 157,  333 => 151,  329 => 150,  325 => 149,  308 => 135,  304 => 134,  300 => 133,  291 => 127,  287 => 126,  283 => 125,  274 => 119,  270 => 118,  266 => 117,  257 => 111,  253 => 110,  249 => 109,  240 => 103,  236 => 102,  232 => 101,  216 => 88,  212 => 87,  208 => 86,  199 => 80,  195 => 79,  191 => 78,  182 => 72,  178 => 71,  174 => 70,  165 => 64,  161 => 63,  157 => 62,  148 => 56,  144 => 55,  140 => 54,  131 => 48,  127 => 47,  123 => 46,  114 => 40,  110 => 39,  106 => 38,  97 => 32,  93 => 31,  89 => 30,  68 => 12,  64 => 11,  57 => 6,  48 => 5,  38 => 1,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme formUser 'bootstrap_4_layout.html.twig' %}

{% block body %}

    <h1 style=\"text-align:center\"><strong>Entretien Professionnel</strong></h1>

    <hr style=\"border-width: 5px\">

    {{ form_start(formUser) }}
    {{ form_errors(formUser) }}

    <img align=\"left\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\">

    <input style=\"margin-left: 25%; margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div1');\" value=\"Bilan période écoulée\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div2');\" value=\"Bilan des formations\"/>
    <input style=\" margin-top: 1%; margin-bottom: 1%\" type=\"button\" class=\"btn btn-success\" onclick=\"affCache('div3');\" value=\"Projets\"/>

    <img align=\"right\" src=\"https://www.brochuresenligne.com/photo/art/grande/2324117-3494337.jpg?v=1485960811\">

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
", "formulaire/create.html.twig", "C:\\wamp\\www\\Formulaire\\Formulaire\\templates\\formulaire\\create.html.twig");
    }
}
