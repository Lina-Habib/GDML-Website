<!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            sidebar.classList.toggle('collapsed');
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('collapsed');
            mainContent.classList.toggle('active');
            console.log('Sidebar toggled:', sidebar.classList.contains('collapsed')); // للتصحيح
        }

        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            const icon = document.querySelector('.toggle-dark-mode i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
        }

        // Set sidebar state based on screen size
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            if (window.innerWidth <= 768) {
                sidebar.classList.add('collapsed');
                sidebar.classList.remove('active');
                mainContent.classList.add('collapsed');
                mainContent.classList.toggle('active');
            } else {
                sidebar.classList.remove('collapsed');
                sidebar.classList.add('active');
                mainContent.classList.remove('collapsed');
            }
        });

        // Trigger resize event on page load to apply initial state
        window.dispatchEvent(new Event('resize'));
    </script>