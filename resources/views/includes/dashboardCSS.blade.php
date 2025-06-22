<!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts (Cairo) -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f1f4f8;
            transition: background-color 0.3s, color 0.3s;
            overflow-x: hidden;
            direction: rtl;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #e0f2fe;
            padding: 20px;
            position: fixed;
            width: 250px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: width 0.3s ease;
            z-index: 1000;
        }

        .sidebar:not(.active) {
            width: 70px;
            overflow: hidden;
        }

        .sidebar:not(.active) a span,
        .sidebar:not(.active) button span,
        .sidebar:not(.active) .sidebar-header h4 {
            display: none;
        }

        .sidebar:not(.active) a i,
        .sidebar:not(.active) button i {
            margin-left: 0;
            margin-right: 20px;
        }

        .sidebar a,
        .sidebar button {
            color: #1e40af;
            text-decoration: none;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            border-radius: 8px;
            transition: background 0.3s;
            justify-content: flex-end;
            background: none;
            border: none;
            width: 100%;
            text-align: right;
            cursor: pointer;
        }

        .sidebar a i,
        .sidebar button i {
            margin-left: 10px;
            margin-right: 10px;
        }

        .sidebar a span,
        .sidebar button span {
            flex-grow: 1;
            text-align: right;
        }

        .sidebar a:hover,
        .sidebar button:hover {
            background-color: #bfdbfe;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .toggle-sidebar {
            cursor: pointer;
            color: #1e40af;
            font-size: 1.2rem;
        }

        .main-content {
            margin-right: 250px;
            padding: 20px;
            transition: margin-right 0.3s ease;
            width: calc(100% - 250px);
            box-sizing: border-box;
            margin-top: 20px;
        }

        .main-content:not(.active) {
            margin-right: 70px;
            width: calc(100% - 70px);
        }

        .header {
            background-color: #ffffff;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: #e0f2fe;
            color: #1e40af;
            border-radius: 12px 12px 0 0;
        }

        /* Dark Mode */
        body.dark-mode {
            background-color: #1f2937;
            color: #d1d5db;
        }

        body.dark-mode .header {
            background-color: #374151;
        }

        body.dark-mode .card {
            background-color: #374151;
        }

        body.dark-mode .card-header {
            background-color: #4b5563;
            color: #d1d5db;
        }

        body.dark-mode .sidebar {
            background-color: #4b5563;
        }

        body.dark-mode .sidebar a .sidebar button{
            color: #d1d5db;
        }

        body.dark-mode .sidebar a .sidebar button:hover {
            background-color: #6b7280;
        }

        body.dark-mode .toggle-sidebar {
            color: #d1d5db;
        }

        .toggle-dark-mode {
            cursor: pointer;
            margin-left: 15px;
        }

        /* Mobile Optimization */
        @media (max-width: 768px) {
            body {
                overflow-x: hidden;
            }

            .sidebar {
                width: 70px;
                overflow: hidden;
            }

            .sidebar a span,
            .sidebar button span,
            .sidebar .sidebar-header h4 {
                display: none;
            }

            .sidebar.active {
                width: 250px;
                overflow: visible;
            }

            .sidebar.active a span,
            .sidebar.active button span,
            .sidebar.active .sidebar-header h4 {
                display: inline;
            }

            .sidebar.active a i,
            .sidebar.active button i {
                margin-left: 10px;
                margin-right: 10px;
            }

            .main-content {
                margin-right: 70px;
                width: calc(100% - 70px);
                padding: 15px 20px 15px 10px;
                transition: margin-right 0.3s ease, width 0.3s ease;
            }

            .main-content.active {
                margin-right: 250px;
                width: calc(100% - 250px);
            }
        }
    </style>