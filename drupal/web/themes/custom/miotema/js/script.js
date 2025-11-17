/**
 * API JS Drupal: https://www.drupal.org/docs/drupal-apis/javascript-api/javascript-api-overview
 */
console.log('No JS qua');

(function (Drupal) {
  Drupal.behaviors.ciao = {
    attach: function (context, settings) {
      once('ciao', 'body').forEach(function (element) {
        console.log('Si JS qua in funzione anonima', element);
      })
    }
  }
})(Drupal);
