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
        echo "
    <meta charset=\"utf-8\" />
    <?php

\$bdd = new PDO('mysql:host=127.0.0.1;dbname=primfx;charset=utf8','root','');

\$articles = \$bdd->query('SELECT titre FROM articles ORDER BY id DESC');
    if(isset(\$_GET['q']) AND !empty(\$_GET['q'])) {
    \$q = htmlspecialchars(\$_GET['q']);
    \$articles = \$bdd->query('SELECT titre FROM articles WHERE titre LIKE \"%'.\$q.'%\" ORDER BY id DESC');
    if(\$articles->rowCount() == 0) {
    \$articles = \$bdd->query('SELECT titre FROM articles WHERE CONCAT(titre, contenu) LIKE \"%'.\$q.'%\" ORDER BY id DESC');
    }
    }
    ?>
    <form method=\"GET\">
        <input type=\"search\" name=\"q\" placeholder=\"Recherche...\" />
        <input type=\"submit\" value=\"Valider\" />
    </form>
    <?php if(\$articles->rowCount() > 0) { ?>
    <ul>
        <?php while(\$a = \$articles->fetch()) { ?>
        <li><?= \$a['titre'] ?></li>
        <?php } ?>
    </ul>
    <?php } else { ?>
    Aucun résultat pour: <?= \$q ?>...
    <?php } ?>

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
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <meta charset=\"utf-8\" />
    <?php

\$bdd = new PDO('mysql:host=127.0.0.1;dbname=primfx;charset=utf8','root','');

\$articles = \$bdd->query('SELECT titre FROM articles ORDER BY id DESC');
    if(isset(\$_GET['q']) AND !empty(\$_GET['q'])) {
    \$q = htmlspecialchars(\$_GET['q']);
    \$articles = \$bdd->query('SELECT titre FROM articles WHERE titre LIKE \"%'.\$q.'%\" ORDER BY id DESC');
    if(\$articles->rowCount() == 0) {
    \$articles = \$bdd->query('SELECT titre FROM articles WHERE CONCAT(titre, contenu) LIKE \"%'.\$q.'%\" ORDER BY id DESC');
    }
    }
    ?>
    <form method=\"GET\">
        <input type=\"search\" name=\"q\" placeholder=\"Recherche...\" />
        <input type=\"submit\" value=\"Valider\" />
    </form>
    <?php if(\$articles->rowCount() > 0) { ?>
    <ul>
        <?php while(\$a = \$articles->fetch()) { ?>
        <li><?= \$a['titre'] ?></li>
        <?php } ?>
    </ul>
    <?php } else { ?>
    Aucun résultat pour: <?= \$q ?>...
    <?php } ?>

{% endblock %}", "formulaire/show.html.twig", "C:\\wamp\\www\\Formulaire\\Formulaire\\templates\\formulaire\\show.html.twig");
    }
}
