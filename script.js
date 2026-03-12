function fakeSubmit(event) {
  event.preventDefault();
  const msg = document.getElementById('form-msg');
  msg.textContent = '感谢咨询，我们的企业顾问将尽快与您联系。';
  event.target.reset();
  return false;
}
