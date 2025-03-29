<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocket Accts - Contact Us</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center h-20">
            <div class="text-2xl font-bold">
                <a href="../index.html">Pocket Accts</a>
            </div>
            <a href="../index.html" class="bg-teal-500 hover:bg-teal-600 p-2 rounded-xl text-white text-xl">&#x25c2;
                Back</a>
        </div>
    </nav>
    <div class="max-w-7xl mx-auto px-6 py-10">
        <div class="bg-white shadow-xl rounded-xl p-6 space-y-4 border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800">Contact Information</h2>
            <p>We'd love to hear from you! Whether you have questions about our services, need assistance with your
                financial management, or want to schedule a consultation, feel free to reach out to us through any of
                the following methods:</p>
            <p><strong>Phone 📞:</strong><a href="tel:+44 7587746206"> +44 7587746206</a></p>
            <p><strong>Email 📧:</strong><a href="mailto:info@pocket-accts.co.uk"> info@pocket-accts.co.uk</a></p>
            <p><strong>Address 🏠:</strong> 223, Brabazon Road, London, UK</p>
            <p><strong>Business Hours ⏰:</strong> Monday to Friday: 9:00 AM – 5:00 PM</p>
            <p> 👇 Alternatively, you can fill out the contact form below, and a member of our team will get back to you
                promptly!</p>
        </div>
    </div>
    <div class="container mx-auto max-w-7xl py-10 px-4 md:px-0">
        <div class="bg-white shadow-xl rounded-xl p-6 border border-gray-200 mx-4 md:mx-0">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 text-center md:text-left mb-6">Contact Us</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <form id="contact-form" action="./submit_contact_form.php" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Name *" class="border-2 border-gray-300 p-3 rounded-md w-full required-field">

                    <div class="flex space-x-2">
                        <select name="country_code" id="country-code" class="border-2 border-gray-300 p-3 rounded-md w-1/3 required-field">
                            <option value="">Country Code *</option>
                            <option value="+1">+1 (USA)</option>
                            <option value="+91">+91 (India)</option>
                            <option value="+44">+44 (UK)</option>
                            <option value="+61">+61 (Australia)</option>
                            <option value="+81">+81 (Japan)</option>
                            <option value="+49">+49 (Germany)</option>
                            <option value="+33">+33 (France)</option>
                            <option value="+39">+39 (Italy)</option>
                            <option value="+7">+7 (Russia)</option>
                            <option value="+55">+55 (Brazil)</option>
                            <option value="+86">+86 (China)</option>
                            <option value="+82">+82 (South Korea)</option>
                            <option value="+27">+27 (South Africa)</option>
                            <option value="+34">+34 (Spain)</option>
                            <option value="+20">+20 (Egypt)</option>
                        </select>
                        <input type="tel" name="phone" id="phone" placeholder="Phone No. *" class="border-2 border-gray-300 p-3 rounded-md w-2/3 required-field">
                    </div>

                    <input type="email" name="email" placeholder="Email *" class="border-2 border-gray-300 p-3 rounded-md w-full required-field">
                    <input type="text" name="business_name" placeholder="Business Name *" class="border-2 border-gray-300 p-3 rounded-md w-full required-field">

                    <select name="service" id="services-select" class="border-2 border-gray-300 p-3 rounded-md w-full required-field">
                        <option value="">Select Service *</option>
                        <option value="Streamlined Bookkeeping">Streamlined Bookkeeping</option>
                        <option value="Financial Reporting & Analysis">Financial Reporting & Analysis</option>
                        <option value="Tax Preparation & Compliance">Tax Preparation & Compliance</option>
                        <option value="Accounts Payable & Receivable">Accounts Payable & Receivable</option>
                        <option value="Bank Reconciliation">Bank Reconciliation</option>
                    </select>

                    <textarea name="description" id="description" placeholder="Write a Description (Optional)" class="border-2 h-32 p-3 rounded-md w-full"></textarea>

                    <!-- Success/Error Message -->
                    <p id="form-message" class="hidden text-sm mt-2"></p>

                    <button type="submit" class="bg-teal-500 text-xl text-white p-3 rounded-xl hover:bg-teal-600 w-full">Submit</button>
                </form>
                
                <div class="flex justify-center items-center">
                    <img class="rounded-lg shadow-lg w-full h-auto max-h-[500px] object-cover"
                        src="../images\Contact us.gif" alt="Contact Us">
                </div>
            </div>

            <script>
                document.getElementById("contact-form").addEventListener("submit", function(event) {
                    event.preventDefault(); // Prevent actual form submission

                    const form = event.target;
                    const fields = form.querySelectorAll(".required-field");
                    let isValid = true;
                    const messageEl = document.getElementById("form-message");

                    fields.forEach(field => {
                        if (field.value.trim() === "") {
                            field.classList.add("border-red-500");
                            isValid = false;

                            // Remove red border after 1 second
                            setTimeout(() => {
                                field.classList.remove("border-red-500");
                            }, 1000);
                        }
                    });

                    if (!isValid) {
                        messageEl.textContent = "Please fill out all required fields.";
                        messageEl.classList.remove("hidden", "text-green-600");
                        messageEl.classList.add("text-red-600");
                        return;
                    }

                    // Simulate a successful form submission
                    fetch(form.action, {
                        method: "POST",
                        body: new FormData(form),
                    })
                    .then(response => response.text())
                    .then(() => {
                        messageEl.textContent = "Your message has been submitted successfully!";
                        messageEl.classList.remove("hidden", "text-red-600");
                        messageEl.classList.add("text-green-600");

                        // Reset the form after successful submission
                        setTimeout(() => {
                            form.reset();
                            messageEl.classList.add("hidden");
                        }, 1500);
                    })
                    .catch(() => {
                        messageEl.textContent = "An error occurred. Please try again.";
                        messageEl.classList.remove("hidden", "text-green-600");
                        messageEl.classList.add("text-red-600");
                    });
                });
            </script>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10 px-5">
        <div class="container mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">

            <!-- Brand Section -->
            <div class="brand-footer">
                <h1 class="text-xl font-bold mb-3">Pocket Accts</h1>
                <p class="text-gray-400 text-sm">
                    Streamline your financial management with professional bookkeeping, tax preparation, and Bank
                    Reconciliation
                </p>
            </div>

            <!-- Explore Section -->
            <div class="explore-footer">
                <h1 class="text-lg font-semibold mb-3">Explore</h1>
                <ul class="space-y-2">
                    <li><a href="./index.html#" class="text-gray-400 hover:text-teal-400 transition">Home</a></li>
                    <li><a href="#About-Us" class="text-gray-400 hover:text-teal-400 transition">About Us</a></li>
                    <li><a href="#Our-Services" class="text-gray-400 hover:text-teal-400 transition">Our Services</a>
                    </li>
                    <li><a href="./src/contact-us.html" class="text-gray-400 hover:text-teal-400 transition">Contact
                            Us</a></li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="services-footer">
                <h1 class="text-lg font-semibold mb-3">Our Services</h1>
                <ul class="space-y-2">
                    <li class="text-gray-400">Streamlined Bookkeeping</li>
                    <li class="text-gray-400">Financial Reporting & Analysis</li>
                    <li class="text-gray-400">Tax Preparation & Compliance</li>
                    <li class="text-gray-400">Accounts Payable & Receivable</li>
                    <li class="text-gray-400">Bank Reconciliation</li>
                </ul>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-gray-700 mt-8 pt-5 text-center text-sm text-gray-500">
            © 2025 Pocket Accts. All Rights Reserved.
        </div>
    </footer>
</body>

</html>