document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq');

    faqItems.forEach(faq => {
        const question = faq.querySelector('.question');

        question.addEventListener('click', () => {
            faq.classList.toggle('active');
        });
    });
});
