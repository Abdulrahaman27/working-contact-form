**# TITLE => Working Contact Form with HTML, CSS, JavaScript, and PHP (XAMPP and PHPMailer)**

_Project Description_ =>
This project implements a simple contact form using **HTML**, **CSS**, **JavaScript**, and **PHP** with **XAMPP** as the local server and **PHPMailer** for sending emails.

_## Installation_
1. **Clone the repository**:
   git clone https://github.com/Abdulrahaman27/working-contact-form.git
2. **Navigate to the project directory**:
   cd working-contact-form
3. **Install dependencies** using Composer (this will generate the `vendor` folder):
   composer install

   `message.php`
   - **$mail->Username = 'your-email-address';**   //Your email address.
   - **$mail->Password = 'your-app-password';**  // An App Password generated from your email provider (e.g., for Gmail, use [this tutorial](https://www.youtube.com/watch?v=jjDNndrl7_U) to generate one).
   - **$mail->addAddress('receiver-email');**     // Email you'd like the message to be sent to.
   
5. **Run the project**:
   Open `index.php` in your browser (if using XAMPP, navigate to `http://localhost/working-contact-form/index.php`).

## Usage
1. Fill in the form with your details.
2. Click the "Send Message" button.
3. An email will be sent to the specified **receiver-email**.

## Contributing
If you'd like to contribute to this project, feel free to fork the repository, make changes, and submit a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

