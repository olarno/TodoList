<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TodoList</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bulma.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <header class="header">
        <div class="logo">
          <a href="#">
            <h1 class="title is-1">TodoList</h1>
          </a>
        </div>
        <div class="filters-bar">
          <div class="filters-bar__element buttons are-small has-addons">
            <button class="button is-info is-selected">Toutes</button>
            <button class="button">Complètes</button>
            <button class="button">Incomplètes</button>
          </div>
          <div class="select filters-bar__element is-small">

          </div>
          <div class="filters-bar__element view-archives">
            <a class="visible" href="#">Voir les archives</a>
            <a class="hidden" href="#">Voir les taches en cours</a>
          </div>
        </div>
      </header>
      <!-- ./header -->
      <main>
        <!-- Debut du listing des taches -->
        <div id="tasks">
          
        </div>
        <!-- ./Fin du listing -->
        <!-- Formulaire d'ajout d'une tache -->
        <form method="post" class="task task--add">
          <div class="task__content">
            <div class="task__content__name">
              <input class="input" type="text" placeholder="Nom de la tâche" name="name" />
            </div>
            <div class="task__content__category">
              <div class="select is-small">
    
              </div>
            </div>
            <div class="task__content__buttons">
              <button class="task__content__button__add button is-info" type="submit"> 
                <span class="icon is-small">
                  <i class="fa fa-plus"></i>
                </span>
                <span>Ajouter</span>
              </button>
            </div>
          </div>
        </form>
        <!-- ./formulaire -->
        <!-- Formulaire d'ajout d'une catégorie -->
        <form method="post" class="task cat--add">
          <div class="task__content">
            <div class="task__content__new__category">
              <input class="input" type="text" placeholder="Nom de la catégorie" name="name" />
            </div>
             <div class="task__content__buttons">
              <button class="task__content__button__add button is-info" type="submit"> 
                <span class="icon is-small">
                  <i class="fa fa-plus"></i>
                </span>
                <span>Ajouter</span>
              </button>
            </div>
          </div>
        </form>
        <!-- ./formulaire d'ajout d'une catégorie -->
      </main>
    </div>


    <!-- Template de task -->
    <template id="templateTask">
      <div class="task task--todo" data-category="">
        <div class="task__content">
          <div class="task__content__name">
            <input class="input" type="text" value="" placeholder="Nom de la tâche" name="name" />
            <p></p>
          </div>
          <div class="task__content__category">
            <p></p>
          </div>
          <div class="task__content__buttons">
            <button class="task__content__button__incomplete button is-success is-small">
              <span class="icon is-small">
                <i class="fa fa-step-backward"></i>
              </span>
            </button>
            <button class="task__content__button__desarchive button is-success is-small">
              <span class="icon is-small">
                <i class="fa fa-undo"></i>
              </span>
            </button>
            <button class="task__content__button__validate button is-success is-small">
              <span class="icon is-small">
                <i class="fa fa-check-square-o"></i>
              </span>
            </button>
            <button class="task__content__button__modify button is-warning is-small">
              <span class="icon is-small">
                <i class="fa fa-pencil-square-o"></i>
              </span>
            </button>
            <button class="task__content__button__archive button is-danger is-small">
              <span class="icon is-small">
                <i class="fa fa-archive"></i>
              </span>
            </button>
            <button class="task__content__button__delete button is-danger is-small">
              <span class="icon is-small">
                <i class="fa fa-trash"></i>
              </span>
            </button>
          </div>
        </div>
        <div class="progress-bar">
          <div class="progress-bar__level" style="width:0%"></div>
        </div>
      </div>
    </template>
    <!-- Fin du template -->
    <script src="./assets/js/app.js"></script>
  </body>
</html>


