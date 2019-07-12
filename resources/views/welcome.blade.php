@extends('layouts.header')

@section('content')
    <div style="height: 100px;"></div>
    <div class="splash-title">DEVELOPPEUR WEB FULLSTACK</div>
    <div style="height: 50px;"></div>
    <div class="image-wrap">
        <img class="bg-w100" src="/images/bg-site.png">
    </div>
        

    <div class="container">
        <div style="height: 100px;"></div>
        <div class="col-xs-12 d-flex justify-content-between">
            <div class="col-xs-6">
                <h1 class="mb-3">Présentation</h1>
                <section class="mb-4">
                    Je me définis comme un développeur web passionné, curieux des nouvelles technologies,  soucieux d’utiliser les 
                    meilleurs outils qui me permettent de construire des sites webs plus sécurisés, respectueux des normes du web et 
                    ergonomiques pour s’adapter aux besoins de l’utilisateur.
                    Je prône des sites simples d’accès et facile à utiliser avec un design graphique agréable, simple et épuré.
                </section>
                <br />
                <section>
                    <strong>Méthode Agile</strong>
                    <br />
                    Pour vos projets web, j’inclue autant que possible le client dans le processus de création dans le but de satisfaire et 
                    anticiper les besoins du client. C’est la méthode agile.
                    Cette méthode a fait ses preuves par ses multiples avantages et est utilisée par les plus grandes entreprises.
                    Ainsi j’adapte le design et les fonctionnalistes du projet en fonction de son évolution dans le but de satisfaire le client 
                    et l’utilisateur final.
                </section>
            </div>
            
            <div>
                <img src="/images/avatar.png" width="100%">
            </div>
        </div>
        
    </div>
    
@endsection

@extends('layouts.footer')
