# PHP Session Management Project

## Overview
This project demonstrates how to manage user sessions in PHP. It includes a user registration form that allows users to submit their name, email, and age. The submitted data is stored in session variables, which can be viewed and destroyed as needed.

## Project Structure
```
php-session-project
├── backend
│   ├── destruir_sesion.php
│   ├── procesar.php
│   └── ver_sesion.php
├── frontend
│   ├── estilos.css
│   └── formulario.html
└── README.md
```

## Files Description

### Backend
- **destruir_sesion.php**: This file starts a session and destroys all session variables. It provides a confirmation message to the user that the session has been destroyed.
  
- **procesar.php**: This file starts a session and processes the data submitted from the registration form. It saves the user's name, email, age, and registration date into session variables. It also displays the saved information back to the user.

- **ver_sesion.php**: This file starts a session and checks for active session variables. If session variables exist, it displays them; otherwise, it informs the user that no session variables have been created yet.

### Frontend
- **estilos.css**: This file contains the CSS styles for the project, defining the layout, colors, and appearance of the HTML elements used in the frontend.

- **formulario.html**: This file contains the HTML structure for the user registration form. It includes fields for the user's name, email, and age, and submits the data to `backend/procesar.php`.

## Setup Instructions
1. Clone or download the project files to your local machine.
2. Ensure you have a local server environment set up (e.g., XAMPP, WAMP).
3. Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
4. Access the project through your web browser by navigating to `http://localhost/php-session-project/frontend/formulario.html`.

## Usage
- Fill out the registration form and submit it to save the data in session variables.
- You can view the saved session variables by navigating to `http://localhost/php-session-project/backend/ver_sesion.php`.
- To destroy the session and clear the stored data, go to `http://localhost/php-session-project/backend/destruir_sesion.php`.