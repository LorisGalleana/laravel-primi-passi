
---

# LARAVEL-PRIMI-PASSI

## Descrizione

**LARAVEL-PRIMI-PASSI** è un progetto che ha lo scopo di avvicinare gli sviluppatori alle funzionalità base del framework Laravel 9. Il progetto consiste nella creazione di una semplice applicazione web che gestisce rotte, views e dati dinamici, utilizzando Blade per il rendering delle pagine e il passaggio di dati tra controller e view.

### Funzionalità

- **Creazione di un progetto Laravel 9**: Installazione e configurazione di un nuovo progetto Laravel 9.
- **Rotte e Views**: Gestione della rotta principale `/` che visualizza una homepage personalizzata. 
- **Passaggio di Dati alla View**: Inizialmente viene stampato "Hello World" sulla homepage, successivamente vengono passati dati dinamici alla view, tra cui un array che viene ciclato in pagina.
- **Condizioni Dinamiche**: Utilizzo di un'espressione condizionale all'interno della view per la visualizzazione di contenuti variabili.
- **Creazione di Pagine Multiple**: Sviluppo di più pagine nel progetto, con un header che contiene il menu di navigazione. I link tra le pagine sono generati dinamicamente usando la funzione `route()` di Laravel.

### Struttura del Progetto

1. **routes/web.php**: File che gestisce le rotte del progetto, inclusa la rotta principale `/` per la homepage.
2. **resources/views/home.blade.php**: La view principale che mostra i dati dinamici e include la logica condizionale.
3. **resources/views/layouts/app.blade.php**: Layout di base per il sito, inclusivo del menu di navigazione.
4. **App/Http/Controllers**: Eventuali controller per gestire la logica del progetto (se aggiunti).

### Tecnologie utilizzate

- **Laravel 9**: Framework PHP utilizzato per la creazione del progetto.
- **Blade**: Motore di templating di Laravel per la gestione delle views.
- **PHP**: Linguaggio di programmazione utilizzato per la logica dell'applicazione.

---
