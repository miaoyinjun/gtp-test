(function () {
  const form = document.getElementById('contact-form');
  const msg = document.getElementById('form-msg');

  if (!form || !msg) {
    return;
  }

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    msg.textContent = '感谢咨询，我们的企业顾问将尽快与您联系。';
    form.reset();
  });
})();
