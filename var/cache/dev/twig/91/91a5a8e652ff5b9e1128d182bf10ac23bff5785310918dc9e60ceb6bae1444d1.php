<?php

/* index.html.twig */
class __TwigTemplate_c99b30081a590f310c551fcbdef0f0d74c268f0d977a782ce28605c8ff18b7aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8e8ead74bf868d3dd0e90810e40deb4571ce184cc11c59b752faae5307a87bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e8ead74bf868d3dd0e90810e40deb4571ce184cc11c59b752faae5307a87bf->enter($__internal_c8e8ead74bf868d3dd0e90810e40deb4571ce184cc11c59b752faae5307a87bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_da7404e8e90986cb3f92a2028553a8c743b6d49a819bc5db6322d2983e79f745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7404e8e90986cb3f92a2028553a8c743b6d49a819bc5db6322d2983e79f745->enter($__internal_da7404e8e90986cb3f92a2028553a8c743b6d49a819bc5db6322d2983e79f745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "
<html>
<head>
    <title>Login ConectaTri</title>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<style>
    /* Base styles */
    *, *:after, *:before {
        box-sizing: border-box;
    }
    html {
        font-size: 100%;
        line-height: 1.5;
        height: 100%;
    }

    body {
        position: relative;
        margin: 0;
        font-family: 'Work Sans', Arial, Helvetica, sans-serif;
        min-height: 100%;
        background-image: url(\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/img/background/loginbg.png"), "html", null, true);
        echo "\");
        background-position: center;
        color: #777;
    }
    img {
        vertical-align: middle;
        max-width: 100%;
    }
    button {
        cursor: pointer;
        border: 0;
        padding: 0;
        background-color: transparent;
    }

    /* Container */
    .container {
        position: absolute;
        width: 24em;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        animation: intro .7s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }

    /* Profile Card */
    .profile {
        position: relative;
    }
    .profile--open {
    }
    .profile--open .profile__form {
        visibility: visible;
        height: auto;
        opacity: 1;
        transform: translateY(-6em);
        padding-top: 12em;
    }
    .profile--open .profile__fields {
        opacity: 1;
        visibility: visible;
    }
    .profile--open .profile__avatar {
        transform: translate(-50%, -1.5em);
        border-radius: 50%;
    }
    .profile__form {
        position: relative;
        background: white;
        visibility: hidden;
        opacity: 0;
        height: 0;
        padding: 3em;
        border-radius: .25em;
        -webkit-filter: drop-shadow(0 0 2em rgba(0,0,0,0.2));
        transition:
                opacity .4s ease-in-out,
                height .4s ease-in-out,
                transform .4s cubic-bezier(0.175, 0.885, 0.32, 1.275),
                padding .4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .profile__fields {
        opacity: 0;
        visibility: hidden;
        transition: opacity .2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .profile__avatar {
        position: absolute;
        z-index: 1;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 1.25em;
        overflow: hidden;
        width: 4.5em;
        height: 4.5em;
        display: block;
        transition: transform .3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        will-change: transform;
    }
    .profile__avatar:focus {
        outline: 0;
    }
    .profile__footer {
        padding-top: 1em;
    }


    /* Form */
    .field {
        position: relative;
        margin-bottom: 2em;
    }
    .label {
        position: absolute;
        height: 2rem;
        line-height: 2rem;
        bottom: 0;
        color: #999;
        transition: all .3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .input {
        width: 100%;
        font-size: 100%;
        border: 0;
        padding: 0;
        background-color: transparent;
        height: 2rem;
        line-height: 2rem;
        border-bottom: 1px solid #eee;
        color: #777;
        transition: all .2s ease-in;
    }
    .input:focus {
        outline: 0;
        border-color: #ccc;
    }

    /* Using required and a faux pattern to see if input has text from http://stackoverflow.com/questions/16952526/detect-if-an-input-has-text-in-it-using-css */
    .input:focus + .label,
    input:valid + .label {
        transform: translateY(-100%);
        font-size: 0.75rem;
        color: #ccc;
    }

    /* Button */
    .btn {
        border: 0;
        font-size: 0.75rem;
        height: 2.5rem;
        line-height: 2.5rem;
        padding: 0 1.5rem;
        color: white;
        background: #8E49E8;
        text-transform: uppercase;
        border-radius: .25rem;
        letter-spacing: .2em;
        transition: background .2s;
    }
    .btn:focus {
        outline: 0;
    }
    .btn:hover,
    .btn:focus {
        background: #A678E2;
    }


    /* Intro animation */
    @keyframes intro {
        from {
            opacity: 0;
            top: 0;
        }
        to {
            opacity: 1;
            top: 50%;
        }
    }
</style>
</head>

<body>
<div class=\"container\">
    <div class=\"profile\">
        <button class=\"profile__avatar\" id=\"toggleProfile\">
            <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout3/img/avatar.png"), "html", null, true);
        echo "\" alt=\"Avatar\" />
        </button>
        <div class=\"profile__form\">
            <div class=\"profile__fields\">
                <div class=\"field\">
                    <input type=\"text\" id=\"fieldUser\" class=\"input\" required pattern=.*\\S.* />
                    <label for=\"fieldUser\" class=\"label\">CNPJ</label>
                </div>
                <div class=\"field\">
                    <input type=\"password\" id=\"fieldPassword\" class=\"input\" required pattern=.*\\S.* />
                    <label for=\"fieldPassword\" class=\"label\">Senha</label>
                </div>
                <div class=\"profile__footer\">
                    <button class=\"btn\">Entrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /* Simple VanillaJS to toggle class */

    document.getElementById('toggleProfile').addEventListener('click', function () {
        [].map.call(document.querySelectorAll('.profile'), function(el) {
            el.classList.toggle('profile--open');
        });
    });
</script>
</body>

</html>

";
        
        $__internal_c8e8ead74bf868d3dd0e90810e40deb4571ce184cc11c59b752faae5307a87bf->leave($__internal_c8e8ead74bf868d3dd0e90810e40deb4571ce184cc11c59b752faae5307a87bf_prof);

        
        $__internal_da7404e8e90986cb3f92a2028553a8c743b6d49a819bc5db6322d2983e79f745->leave($__internal_da7404e8e90986cb3f92a2028553a8c743b6d49a819bc5db6322d2983e79f745_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 188,  48 => 22,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<html>
<head>
    <title>Login ConectaTri</title>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<style>
    /* Base styles */
    *, *:after, *:before {
        box-sizing: border-box;
    }
    html {
        font-size: 100%;
        line-height: 1.5;
        height: 100%;
    }

    body {
        position: relative;
        margin: 0;
        font-family: 'Work Sans', Arial, Helvetica, sans-serif;
        min-height: 100%;
        background-image: url(\"{{ asset('bundles/assets/pages/img/background/loginbg.png') }}\");
        background-position: center;
        color: #777;
    }
    img {
        vertical-align: middle;
        max-width: 100%;
    }
    button {
        cursor: pointer;
        border: 0;
        padding: 0;
        background-color: transparent;
    }

    /* Container */
    .container {
        position: absolute;
        width: 24em;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        animation: intro .7s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }

    /* Profile Card */
    .profile {
        position: relative;
    }
    .profile--open {
    }
    .profile--open .profile__form {
        visibility: visible;
        height: auto;
        opacity: 1;
        transform: translateY(-6em);
        padding-top: 12em;
    }
    .profile--open .profile__fields {
        opacity: 1;
        visibility: visible;
    }
    .profile--open .profile__avatar {
        transform: translate(-50%, -1.5em);
        border-radius: 50%;
    }
    .profile__form {
        position: relative;
        background: white;
        visibility: hidden;
        opacity: 0;
        height: 0;
        padding: 3em;
        border-radius: .25em;
        -webkit-filter: drop-shadow(0 0 2em rgba(0,0,0,0.2));
        transition:
                opacity .4s ease-in-out,
                height .4s ease-in-out,
                transform .4s cubic-bezier(0.175, 0.885, 0.32, 1.275),
                padding .4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .profile__fields {
        opacity: 0;
        visibility: hidden;
        transition: opacity .2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .profile__avatar {
        position: absolute;
        z-index: 1;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 1.25em;
        overflow: hidden;
        width: 4.5em;
        height: 4.5em;
        display: block;
        transition: transform .3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        will-change: transform;
    }
    .profile__avatar:focus {
        outline: 0;
    }
    .profile__footer {
        padding-top: 1em;
    }


    /* Form */
    .field {
        position: relative;
        margin-bottom: 2em;
    }
    .label {
        position: absolute;
        height: 2rem;
        line-height: 2rem;
        bottom: 0;
        color: #999;
        transition: all .3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .input {
        width: 100%;
        font-size: 100%;
        border: 0;
        padding: 0;
        background-color: transparent;
        height: 2rem;
        line-height: 2rem;
        border-bottom: 1px solid #eee;
        color: #777;
        transition: all .2s ease-in;
    }
    .input:focus {
        outline: 0;
        border-color: #ccc;
    }

    /* Using required and a faux pattern to see if input has text from http://stackoverflow.com/questions/16952526/detect-if-an-input-has-text-in-it-using-css */
    .input:focus + .label,
    input:valid + .label {
        transform: translateY(-100%);
        font-size: 0.75rem;
        color: #ccc;
    }

    /* Button */
    .btn {
        border: 0;
        font-size: 0.75rem;
        height: 2.5rem;
        line-height: 2.5rem;
        padding: 0 1.5rem;
        color: white;
        background: #8E49E8;
        text-transform: uppercase;
        border-radius: .25rem;
        letter-spacing: .2em;
        transition: background .2s;
    }
    .btn:focus {
        outline: 0;
    }
    .btn:hover,
    .btn:focus {
        background: #A678E2;
    }


    /* Intro animation */
    @keyframes intro {
        from {
            opacity: 0;
            top: 0;
        }
        to {
            opacity: 1;
            top: 50%;
        }
    }
</style>
</head>

<body>
<div class=\"container\">
    <div class=\"profile\">
        <button class=\"profile__avatar\" id=\"toggleProfile\">
            <img src=\"{{ asset('bundles/assets/layouts/layout3/img/avatar.png') }}\" alt=\"Avatar\" />
        </button>
        <div class=\"profile__form\">
            <div class=\"profile__fields\">
                <div class=\"field\">
                    <input type=\"text\" id=\"fieldUser\" class=\"input\" required pattern=.*\\S.* />
                    <label for=\"fieldUser\" class=\"label\">CNPJ</label>
                </div>
                <div class=\"field\">
                    <input type=\"password\" id=\"fieldPassword\" class=\"input\" required pattern=.*\\S.* />
                    <label for=\"fieldPassword\" class=\"label\">Senha</label>
                </div>
                <div class=\"profile__footer\">
                    <button class=\"btn\">Entrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /* Simple VanillaJS to toggle class */

    document.getElementById('toggleProfile').addEventListener('click', function () {
        [].map.call(document.querySelectorAll('.profile'), function(el) {
            el.classList.toggle('profile--open');
        });
    });
</script>
</body>

</html>

", "index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\index.html.twig");
    }
}
