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
