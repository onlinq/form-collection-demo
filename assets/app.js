/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

import 'bootstrap';

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

window.addEventListener('load', () => {
  const fruitsForms = document.querySelectorAll('[data-fruits-form]');

  fruitsForms.forEach(fruitsForm => {
    const fruitsResult = fruitsForm.querySelector('[data-fruits-result]');
    const fruitsResultList = fruitsForm.querySelector('[data-fruits-result]').querySelector('ul');

    fruitsForm.addEventListener('submit', function (event) {
      event.preventDefault();

      fruitsResult.style.display = null;

      fruitsResultList.innerHTML = '';

      const formData = new FormData(fruitsForm);

      for (const pair of formData.entries()) {
        const listItem = document.createElement('li');
        listItem.innerText = pair[1];

        fruitsResultList.append(listItem);
      }
    });
  });
});
