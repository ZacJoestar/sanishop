<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Sanishop</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/css/theme.css" class="rel">
    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/js/main.js"></script>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="title">
                        Styleguide | Sanishop Project
                    </h1>
                    <hr class="separator-lg">
                </div>
            </div>
            <div class="row  mb-5">
                <div class="col-md-12">
                    <h2 class="title">Paragraphes</h2>
                </div>
                <div class="col-md-4">
                    <h3 class="sub-title">Entretient et garanti par nos soins</h3>
                    <h1 class="title-card">Salles de bains</h1>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate dicta ducimus, eaque error magnam magni necessitatibus nemo quae quidem reiciendis repellat unde veritatis? Asperiores culpa esse est magnam maiores.
                    </p>
                    <div class="main-btn">
                        <a href="#">Bouton principal</a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="sub-title">Entretient et garanti par nos soins</h3>
                    <h1 class="title-card">Salles de bains</h1>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate dicta ducimus, eaque error magnam magni necessitatibus nemo quae quidem reiciendis repellat unde veritatis? Asperiores culpa esse est magnam maiores.
                    </p>
                    <div class="main-btn">
                        <a href="#">Bouton principal</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="sub-title">Entretient et garanti par nos soins</h3>
                    <h1 class="title-card">Salles de bains</h1>
                    <p class="paragraph text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate dicta ducimus, eaque error magnam magni necessitatibus nemo quae quidem reiciendis repellat unde veritatis? Asperiores culpa esse est magnam maiores.
                    </p>
                    <div class="main-btn">
                        <a href="#">Bouton principal</a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="title">Strate vidéo et texte</h2>
                </div>
                <div class="col-md-8">
                    <div class="video-embed">
                        <iframe id="video" width="100%" height="400" src="https://www.youtube.com/embed/6xBSdgJ1LDs?rel=0" frameborder="0" encrypted-media" allowfullscreen></iframe>
                        <div class="video-cover" style="background: url('http://architectureideas.info/wp-content/uploads/2009/01/Bathroom.jpg') no-repeat center center; background-size:cover">
                            <div class="overlay-video">
                                <div id="play-video" class="video-btn-play"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="title-card">Titre de la vidéo</h2>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam at autem, commodi dicta earum eius eum fugiat inventore iusto minus molestiae mollitia odit omnis perspiciatis quia reprehenderit sequi tempore!
                    </p>
                    <p class="copyright">© Better Homes and Gardens</p>
                </div>
            </div>
            <section class="ss-style-doublediagonal">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="title">Listes</h2>
                    </div>
                    <div class="col-md-4">
                        <ul class="list">
                            <li><span>lorem ipsum dolor</span></li>
                            <li><span>lorem ipsum dolor</span></li>
                            <li><span>lorem ipsum dolor</span></li>
                            <li><span>lorem ipsum dolor</span></li>
                            <li><span>lorem ipsum dolor</span></li>
                            <li><span>lorem ipsum dolor</span></li>
                        </ul>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </section>
        </div>
    </body>
</html>