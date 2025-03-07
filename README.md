# 📩 Working Contact Form with HTML, CSS, JavaScript, and PHP  

A fully functional contact form built with **HTML**, **CSS**, **JavaScript**, and **PHP**, using **XAMPP** as the local server and **PHPMailer** for sending emails.  

---

## 🚀 Features  
✅ Simple and responsive contact form UI  
✅ Uses **PHPMailer** to send emails securely  
✅ Supports **Gmail App Passwords** for authentication  
✅ Works on **XAMPP** (local server)  

---

## 🛠 Installation  

### 1️⃣ Clone the Repository  
```sh
git clone https://github.com/Abdulrahaman27/working-contact-form.git
cd working-contact-form
```

### 2️⃣ Install Dependencies  
Ensure you have **Composer** installed, then run:  
```sh
composer install
```
This will generate the `vendor` folder required for PHPMailer.  

### 3️⃣ Configure Email Settings  
Edit `message.php` and update the following:  
```php
$mail->Username = 'your-email@example.com'; // Your email address
$mail->Password = 'your-app-password';    // App Password (see below)
$mail->addAddress('receiver-email@example.com'); // Destination email
```
🔹 **For Gmail users**: Follow [this tutorial](https://www.youtube.com/watch?v=jjDNndrl7_U) to generate an App Password.  

### 4️⃣ Run the Project  
- Start **XAMPP** (ensure Apache and MySQL are running).  
- Open a browser and navigate to:  
  ```
  http://localhost/working-contact-form/index.php
  ```

---

## 📌 Usage  
1️⃣ Fill out the contact form with your details.  
2️⃣ Click **"Send Message"**.  
3️⃣ The message will be sent to the configured recipient email.  

---

## 🤝 Contributing  
Want to improve this project? Feel free to **fork** the repository, make your changes, and submit a **pull request**! 🚀  

---

## 📜 License  
This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for more details.  

---

💡 **Need help?** Open an issue in the repository or reach out!  
```

---

### **Improvements Made**  
🔹 **Better readability** with sections and icons 🎯  
🔹 **Clearer instructions** for setup and usage 📌  
🔹 **More professional formatting** 🚀  
