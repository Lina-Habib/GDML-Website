<!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.querySelector('.main-content');
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('active');
                mainContent.classList.remove('active');
            } else {
                sidebar.classList.add('active');
                mainContent.classList.add('active');
            }
        });

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.querySelector('.main-content');
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('active');
        }

        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            const icon = document.querySelector('.toggle-dark-mode i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
        }

        // Set sidebar state based on screen size
        window.addEventListener('resize', () => {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.querySelector('.main-content');
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('active');
                mainContent.classList.remove('active');
            } else {
                sidebar.classList.add('active');
                mainContent.classList.add('active');
            }
        });

    </script>