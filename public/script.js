const signInBtnLink = document.querySelector('signInBtn-link');

const signUpBtnLink = document.querySelector('signInBtn-link');

const wrapper = document.querySelector('.wrapper');

signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
})