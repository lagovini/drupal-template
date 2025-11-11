# Drupal Template

## Descrizione
Questo repository fornisce un ambiente di sviluppo configurato per Drupal direttamente su **GitHub Codespaces**, senza configurazioni locali.

---

## Requisiti
- Account GitHub con accesso a **GitHub Codespaces**
- Connessione internet stabile
- Browser aggiornato (Chrome, Edge, Firefox)

---

## Avvio rapido

1. **Fork del repository**  
   Cliccare su **Fork** in alto a destra per creare una copia personale del progetto.

2. **Apertura in Codespaces**  
   - Selezionare il pulsante verde **Code**  
   - Cliccare su **Open with Codespaces → New Codespace**

3. **Attendere la configurazione**  
   L’ambiente verrà creato automaticamente con:
   - DDEV
  
4. Eseguire i seguenti comandi da terminale

   `mkdir drupal && cd drupal`
   
   `ddev config`
   
   `ddev start`
   
   `ddev composer create-project "drupal/recommended-project:^11"`
   
   `ddev drush site:install --account-name=admin --account-pass=admin -y`
   
   `ddev launch`
   

