const webName = document.querySelector('#webName');
const amount = document.querySelector('#amount');
const calc = document.querySelector('#calc');
const result = document.querySelector('#result');

<!-- Btn ani -->
document.addEventListener('DOMContentLoaded', function() {
    const icons = document.querySelectorAll('.icon');

    icons.forEach(icon => {
        icon.addEventListener('mouseenter', () => {
            icon.style.transform = 'scale(1.2)';
        });

        icon.addEventListener('mouseleave', () => {
            icon.style.transform = 'scale(1)';
        });
    });
});


<!-- Home ani -->
document.addEventListener('DOMContentLoaded', function() {
    const homeIcon = document.querySelector('.home-img');
    const homeLink = document.querySelector('.home a');

    homeIcon.addEventListener('mouseenter', () => {
        homeIcon.style.transform = 'scale(1.2)';
    });

    homeIcon.addEventListener('mouseleave', () => {
        homeIcon.style.transform = 'scale(1)';
    });

    homeLink.addEventListener('click', function(event) {
        event.preventDefault();
        document.body.classList.add('fade');
        homeIcon.classList.add('fade-to-white');

        setTimeout(() => {
            window.location.href = homeLink.href;
        }, 500); // Vent 1 sekund for at fuldføre animationen
    });
});

<!--hej-->
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('smsForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const form = document.getElementById('smsForm');
        const formData = new FormData(form);

        fetch('submit.php', {
            method: 'POST',
            body: new URLSearchParams(formData)
        })
            .then(response => response.json())
            .then(data => {
                document.getElementById('responseMessage').innerText = data.message;
                document.getElementById('responseMessage').style.display = 'block';
                form.reset();
            })
            .catch(error => {
                document.getElementById('responseMessage').innerText = 'Der opstod en fejl. Prøv igen senere.';
                document.getElementById('responseMessage').style.display = 'block';
                console.error('Error:', error);
            });
    });
});



// Footer animation handler
    const socialLinks = document.querySelectorAll('.social-link');

    socialLinks.forEach(link => {
        const tooltipText = link.getAttribute('data-tooltip');
        if (tooltipText) {
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.innerText = tooltipText;
            link.appendChild(tooltip);
        }

        link.addEventListener('mouseenter', () => {
            link.querySelector('img').style.transform = 'scale(1.1)';
            const tooltip = link.querySelector('.tooltip');
            if (tooltip) {
                tooltip.style.opacity = '1';
                tooltip.style.visibility = 'visible';
            }
        });

        link.addEventListener('mouseleave', () => {
            link.querySelector('img').style.transform = 'scale(1)';
            const tooltip = link.querySelector('.tooltip');
            if (tooltip) {
                tooltip.style.opacity = '0';
                tooltip.style.visibility = 'hidden';
            }
        });
    });

