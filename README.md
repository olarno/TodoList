---
name:  TodoList
about: Liste de chose et d'autres 

---

## Todolist

### Description

technos : symfony, JS

Partie back : API sous symfony  
Partie front : JS, bulma, forkAwesome

### Utilisation 

Pour permettre la bonne execution de l'API : 
- Soit lancé l'API sur un server : ``` symfony serve -d ```
- Soit modifier l'url  ```apiURL: 'http://localhost:8000/api/',``` *ligne 7 du ``app.js``*

### Avancement & problématique 

*Back :*

Probleme de Cors :heavy_check_mark: *(NelmioCors Bundle)*  
Mise en place du crud pour les tasks :heavy_check_mark:  
Mise en place du crud pour les categories :heavy_check_mark:

*Front :*

DataModel, ne renvoi par la categorie :heavy_check_mark:
Integrer une temporisation pour laisse le temps de charger les categories :heavy_exclamation_mark:
Gestion des flash messages :heavy_exclamation_mark:



### Documentation 

- présentation simple :

![index](/Documentation/Index.png)

- categories de base : 

![listOfCategory](/Documentation/categories.png)


- Differents state des tasks :

   **New** 
![New](/Documentation/new_task.png)

   **Edit**
![Edit](/Documentation/edit_task.png)

   **Complete**  
![Complete](/Documentation/complete_task.png)

   **Archive**
![Archive](/Documentation/archive_task.png)


- Récap 

![récap](/Documentation/Recap_state.png)
  
