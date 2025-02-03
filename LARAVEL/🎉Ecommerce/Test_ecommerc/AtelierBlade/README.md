## Atelier Blade : 

### Introduction :

#### Introduction à Blade :

- Présenter Blade, le moteur de templates simple et puissant inclus avec Laravel.
- Expliquer comment Blade compile les templates en code PHP pur et les met en cache jusqu'à modification, assurant ainsi une performance optimale.
- Mentionner que les fichiers Blade utilisent l'extension `.blade.php` et sont généralement stockés dans le répertoire `resources/views`.

### Affichage des données :

#### Codage d'entité HTML :

- Afficher des données passées aux vues Blade en utilisant des accolades doubles `{{ }}`.
- Soulignez que ces expressions sont automatiquement échappées pour prévenir les attaques XSS.
- Pour afficher des données non échappées, utilisez `**{!! !!}**`, en précisant les risques potentiels liés à cette méthode. Cela peut exposer l'application à des attaques si des données malveillantes sont injectées dans les vues.
- Exemple de script pour afficher des données :

```php
<p>{{ $user->name }}</p> <!-- Affiche le nom échappé -->
<p>{!! $user->description !!}</p> <!-- Affiche la description non échappée -->
```

#### Blade et les frameworks JavaScript :

- Blade utilise `@` pour éviter des conflits avec les expressions de frameworks comme Vue.js ou React. Par exemple, si vous voulez afficher une variable dans un framework JS, vous pouvez utiliser `@{{ name }}` pour éviter le conflit avec Vue.js.
- Exemple :

```blade
<div id="app">
    <p>@{{ name }}</p> <!-- Vue.js ne confondra pas cette syntaxe avec une variable Blade -->
</div>
```

- **Rendering JSON** :
  - Pour rendre des données JSON dans Blade, vous pouvez utiliser la directive `@json` :

```blade
<script>
    var userData = @json($user);
</script>
```

- **@verbatim** : 
  - Cette directive empêche l’interprétation des directives Blade dans une portion de code. Elle est utile pour afficher du code qui contient des directives Blade sans les exécuter.
  
```blade
@verbatim
    <div>{{ $user->name }}</div>
@endverbatim
```

### Blade Directives :

- **Directives d'authentification** :
  - `@auth` (affiche une section si l'utilisateur est authentifié)
  - `@guest` (affiche une section si l'utilisateur n'est pas authentifié)

- **Directives d’environnement** :
  - `@production` (vérifie si l'application est en production)
  - `@env` (permet de tester l’environnement actuel)

- **Directives de section** :
  - `@hasSection`, `@missingSection` (vérifie si une section a été définie)

- **Classes et styles conditionnels** :
  - `@class` (utilisé pour appliquer des classes CSS dynamiquement)

- **Rendu de vues pour collections** :
  - `@each()` (permet d’inclure une vue pour chaque élément d’une collection)

- **Commentaires** :
  - `{{-- commentaire --}}` (les commentaires ne seront pas rendus dans le HTML final)

- **Directive @once** :
  - Cette directive permet d'exécuter du code une seule fois, ce qui est utile pour les inclusions conditionnelles ou les scripts.

```blade
@once
    <script src="/path/to/script.js"></script>
@endonce
```

### Formulaires :

- `@push` et `@stack` sont utilisés pour empiler du contenu dans une section donnée. Ces directives sont très utiles pour injecter des scripts ou des styles spécifiques dans certaines pages.

```blade
@push('scripts')
    <script src="/js/custom.js"></script>
@endpush
```

- `@inject` permet d’injecter des services Laravel directement dans vos vues.

```blade
@inject('service', 'App\Services\MyService')
{{ $service->method() }}
```



## Références :
[Laravel Blade Documentation](https://laravel.com/docs/11.x/frontend#php-and-blade)

