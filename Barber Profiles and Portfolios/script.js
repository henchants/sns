document.addEventListener('DOMContentLoaded', function () {
    const expandButtons = document.querySelectorAll('.expand-button');

    expandButtons.forEach(button => {
        button.addEventListener('click', function () {
            const expandedProfile = this.parentNode.querySelector('.expanded-profile');
            expandedProfile.classList.toggle('show');
        });
    });
});
