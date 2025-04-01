<?php
// Database connection check function
function isDatabaseConnected()
{
    try {
        $conn = new mysqli('sql12.freesqldatabase.com', username: 'sql12770433', password: 'IjzKQH3Es2', database: 'sql12770433', port: 3306);
        if ($conn->connect_error) {
            return false;
        }
        $conn->close();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// Check database connection status
$dbStatus = isDatabaseConnected();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocket Accts - Contact Us</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./output.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body class="overflow-x-hidden bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md fixed top-0 left-0 w-full z-50" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold text-gray-900 dark:text-white">
                <a href="../index.html">Pocket Accts</a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-6 text-xl">
                <a href="../index.html#About-Us"
                    class="text-gray-700 dark:text-gray-300 hover:text-teal-500 dark:hover:text-teal-400">About Us</a>
                <a href="../index.html#Our-Services"
                    class="text-gray-700 dark:text-gray-300 hover:text-teal-500 dark:hover:text-teal-400">Our Services</a>
            </div>
            
            <!-- Desktop Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="../src\contact-us.php">
                    <button class="bg-teal-500 hover:bg-teal-600 p-2 rounded-xl text-white text-xl">Consult Now</button>
                </a>
                <button id="theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                    <svg class="w-6 h-6 text-gray-800 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path class="sun" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                        <path class="moon hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Buttons -->
            <div class="md:hidden flex items-center space-x-4">
                <button id="theme-toggle-mobile" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                    <svg class="w-6 h-6 text-gray-800 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path class="sun" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                        <path class="moon hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                        </path>
                    </svg>
                </button>
                <button id="mobile-menu-btn" class="text-gray-700 dark:text-gray-300 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (without theme toggle) -->
    <div id="mobile-menu" class="md:hidden hidden bg-white dark:bg-gray-800 py-2 px-4">
        <a href="../index.html#About-Us"
            class="block py-2 text-gray-700 dark:text-gray-300 hover:text-teal-500 dark:hover:text-teal-400">About Us</a>
        <a href="../index.html#Our-Services"
            class="block py-2 text-gray-700 dark:text-gray-300 hover:text-teal-500 dark:hover:text-teal-400">Our Services</a>
        <a href="../src/contact-us.php"
            class="block mt-2 text-center bg-teal-500 hover:bg-teal-600 text-white py-2 rounded-xl">Consult Now</a>
    </div>
</nav>
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center h-20">
            <div class="text-2xl font-bold text-gray-900 dark:text-white">
                <a href="../index.html">Pocket Accts</a>
            </div>
            <a href="../index.html" class="bg-teal-500 hover:bg-teal-600 p-2 rounded-xl text-white text-xl">&#x25c2;
                Back</a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 py-10">
        <div
            class="bg-white dark:bg-gray-700 shadow-xl rounded-xl p-6 space-y-4 border border-gray-200 dark:border-gray-600">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Contact Information</h2>
            <p class="text-gray-600 dark:text-gray-300">We'd love to hear from you! Whether you have questions about our
                services, need assistance with your
                financial management, or want to schedule a consultation, feel free to reach out to us through any of
                the following methods:</p>
            <p class="text-gray-600 dark:text-gray-300"><strong>Phone 📞:</strong><a href="tel:+44 7587746206"
                    class="text-teal-500 hover:text-teal-600"> +44 7587746206</a></p>
            <p class="text-gray-600 dark:text-gray-300"><strong>Email 📧:</strong><a
                    href="mailto:info@pocket-accts.co.uk" class="text-teal-500 hover:text-teal-600">
                    info@pocket-accts.co.uk</a></p>
            <p class="text-gray-600 dark:text-gray-300"><strong>Address 🏠:</strong> London, UK</p>
            <p class="text-gray-600 dark:text-gray-300"><strong>Business Hours ⏰:</strong> Monday to Friday: 9:00 AM –
                5:00 PM</p>
            <p class="text-gray-600 dark:text-gray-300"> 👇 Alternatively, you can fill out the contact form below, and
                a member of our team will get back to you
                promptly!</p>
        </div>
    </div>

    <div class="container mx-auto max-w-7xl py-10 px-4 md:px-0">
        <div
            class="bg-white dark:bg-gray-700 shadow-xl rounded-xl p-6 border border-gray-200 dark:border-gray-600 mx-4 md:mx-0">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white text-center md:text-left mb-6">
                Contact Us</h1>

            <?php if (!$dbStatus): ?>
                <!-- Database Error Message -->
                <div
                    class="flex items-center p-4 mb-4 rounded-lg bg-red-50 dark:bg-red-900 border border-red-200 dark:border-red-700">
                    <svg class="w-5 h-5 text-red-500 dark:text-red-300 mr-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>
                    </svg>
                    <span class="text-red-800 dark:text-red-200 font-medium">Our system is currently undergoing maintenance.
                        Please try again
                        later or contact us directly at <a href="tel:+44 7587746206" class="underline">+44
                            7587746206</a> or <a href="mailto:info@pocket-accts.co.uk" class="underline">
                            info@pocket-accts.co.uk</a>.</span>
                </div>
            <?php endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <form id="contact-form" action="./submit_contact_form.php" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Name *"
                        class="border-2 border-gray-300 dark:border-gray-600 p-3 rounded-md w-full required-field bg-white dark:bg-gray-800 text-gray-900 dark:text-white">

                    <div class="flex space-x-2">
                        <select name="country_code" id="country-code"
                            class="border-2 border-gray-300 dark:border-gray-600 p-3 rounded-md w-1/3 required-field bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
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
                        <input type="tel" name="phone" id="phone" placeholder="Phone No. *"
                            class="border-2 border-gray-300 dark:border-gray-600 p-3 rounded-md w-2/3 required-field bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                    </div>

                    <input type="email" name="email" placeholder="Email *"
                        class="border-2 border-gray-300 dark:border-gray-600 p-3 rounded-md w-full required-field bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                    <input type="text" name="business_name" placeholder="Business Name *"
                        class="border-2 border-gray-300 dark:border-gray-600 p-3 rounded-md w-full required-field bg-white dark:bg-gray-800 text-gray-900 dark:text-white">

                    <select name="service" id="services-select"
                        class="border-2 border-gray-300 dark:border-gray-600 p-3 rounded-md w-full required-field bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                        <option value="">Select Service *</option>
                        <option value="Streamlined Bookkeeping">Streamlined Bookkeeping</option>
                        <option value="Financial Reporting & Analysis">Financial Reporting & Analysis</option>
                        <option value="Tax Preparation & Compliance">Tax Preparation & Compliance</option>
                        <option value="Accounts Payable & Receivable">Accounts Payable & Receivable</option>
                        <option value="Bank Reconciliation">Bank Reconciliation</option>
                    </select>

                    <textarea name="description" id="description" placeholder="Write a Description (Optional)"
                        class="border-2 h-32 p-3 rounded-md w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white"></textarea>

                    <!-- Success/Error Message -->
                    <p id="form-message" class="hidden text-sm mt-2"></p>

                    <button type="submit"
                        class="bg-teal-500 text-xl text-white p-3 rounded-xl hover:bg-teal-600 w-full">Submit</button>
                </form>

                <div class="flex justify-center items-center">
                    <img class="w-full h-auto max-h-[500px] object-cover"
                        src="../images/Contact us.svg" alt="Contact Us">
                </div>
            </div>

            <script>
                document.getElementById("contact-form").addEventListener("submit", function (event) {
                    event.preventDefault(); // Prevent actual form submission

                    const form = event.target;
                    const fields = form.querySelectorAll(".required-field");
                    let isValid = true;
                    const messageEl = document.getElementById("form-message");

                    // Clear any existing messages
                    messageEl.innerHTML = "";
                    messageEl.className = ""; // Reset all classes
                    messageEl.classList.remove("hidden");

                    <?php if (!$dbStatus): ?>
                        // If database is down, show error message
                        messageEl.innerHTML = `
                        <div class="flex items-center p-4 mb-4 rounded-lg bg-red-50 dark:bg-red-900 border border-red-200 dark:border-red-700">
                            <svg class="w-5 h-5 text-red-500 dark:text-red-300 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            <span class="text-red-800 dark:text-red-200 font-medium">Our system is currently undergoing maintenance. Please try again later or contact us by phone or email.</span>
                        </div>
                    `;

                        // Make error message disappear after 3 seconds
                        setTimeout(() => {
                            messageEl.classList.add("opacity-0", "transition-opacity", "duration-500");
                            setTimeout(() => {
                                messageEl.innerHTML = "";
                                messageEl.classList.remove("opacity-0", "transition-opacity", "duration-500");
                                messageEl.classList.add("hidden");
                            }, 500);
                        }, 3000);

                        return;
                    <?php endif; ?>

                    // In the field validation section
                    fields.forEach(field => {
                        if (field.value.trim() === "") {
                            field.classList.add("border-red-500", "dark:border-red-500", "shake-animation");
                            isValid = false;

                            // Remove red border and animation after 1 second
                            setTimeout(() => {
                                field.classList.remove("border-red-500", "dark:border-red-500", "shake-animation");
                            }, 1000);
                        }
                    });

                    if (!isValid) {
                        // Error message with icon and better styling
                        messageEl.innerHTML = `
                <div class="flex items-center p-4 mb-4 rounded-lg bg-red-50 dark:bg-red-900 border border-red-200 dark:border-red-700">
                    <svg class="w-5 h-5 text-red-500 dark:text-red-300 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-red-800 dark:text-red-200 font-medium">Please fill out all required fields.</span>
                </div>
            `;

                        // Make error message disappear after 3 seconds
                        setTimeout(() => {
                            messageEl.classList.add("opacity-0", "transition-opacity", "duration-500");
                            setTimeout(() => {
                                messageEl.innerHTML = "";
                                messageEl.classList.remove("opacity-0", "transition-opacity", "duration-500");
                                messageEl.classList.add("hidden");
                            }, 500);
                        }, 3000);

                        return;
                    }

                    // Show loading state
                    messageEl.innerHTML = `
            <div class="flex items-center p-4 mb-4 rounded-lg bg-blue-50 dark:bg-blue-900 border border-blue-200 dark:border-blue-700">
                <svg class="w-5 h-5 text-blue-500 dark:text-blue-300 mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span class="text-blue-800 dark:text-blue-200 font-medium">Submitting your request…</span>
            </div>
        `;

                    // Simulate a successful form submission
                    fetch(form.action, {
                        method: "POST",
                        body: new FormData(form),
                    })
                        .then(response => response.text())
                        .then(() => {
                            // Success message with icon and better styling
                            messageEl.innerHTML = `
                <div class="flex items-center p-4 mb-4 rounded-lg bg-green-50 dark:bg-green-900 border border-green-200 dark:border-green-700 animate-fadeIn">
                    <svg class="w-5 h-5 text-green-500 dark:text-green-300 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-green-800 dark:text-green-200 font-medium">Your request has been successfully submitted!</span>
                </div>
            `;

                            // Reset the form after successful submission
                            setTimeout(() => {
                                form.reset();
                                // Fade out message
                                messageEl.classList.add("opacity-0", "transition-opacity", "duration-500");
                                setTimeout(() => {
                                    messageEl.innerHTML = "";
                                    messageEl.classList.remove("opacity-0", "transition-opacity", "duration-500");
                                    messageEl.classList.add("hidden");
                                }, 500);
                            }, 3000);
                        })
                        .catch((error) => {
                            // Error message with icon and better styling
                            messageEl.innerHTML = `
                <div class="flex items-center p-4 mb-4 rounded-lg bg-red-50 dark:bg-red-900 border border-red-200 dark:border-red-700">
                    <svg class="w-5 h-5 text-red-500 dark:text-red-300 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <span class="text-red-800 dark:text-red-200 font-medium">An error occurred. Please try again.</span>
                </div>
            `;

                            // Make error message disappear after 3 seconds
                            setTimeout(() => {
                                messageEl.classList.add("opacity-0", "transition-opacity", "duration-500");
                                setTimeout(() => {
                                    messageEl.innerHTML = "";
                                    messageEl.classList.remove("opacity-0", "transition-opacity", "duration-500");
                                    messageEl.classList.add("hidden");
                                }, 500);
                            }, 3000);

                            console.error("Form submission error:", error);
                        });
                });
            </script>

            <style>
                /* Add these styles to your CSS */
                .shake-animation {
                    animation: shake 0.5s cubic-bezier(.36, .07, .19, .97) both;
                }

                .animate-fadeIn {
                    animation: fadeIn 0.5s ease-in;
                }

                @keyframes shake {

                    0%,
                    100% {
                        transform: translateX(0);
                    }

                    10%,
                    30%,
                    50%,
                    70%,
                    90% {
                        transform: translateX(-5px);
                    }

                    20%,
                    40%,
                    60%,
                    80% {
                        transform: translateX(5px);
                    }
                }

                @keyframes fadeIn {
                    0% {
                        opacity: 0;
                    }

                    100% {
                        opacity: 1;
                    }
                }
            </style>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-gray-950 text-white py-10 px-5">
        <div class="container mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">

            <!-- Brand Section -->
            <div class="brand-footer">
                <h1 class="text-xl font-bold mb-3">Pocket Accts</h1>
                <p class="text-gray-400 dark:text-gray-300 text-sm">
                    Streamline your financial management with professional bookkeeping, tax preparation, and Bank
                    Reconciliation
                </p>
            </div>

            <!-- Explore Section -->
            <div class="explore-footer">
                <h1 class="text-lg font-semibold mb-3">Explore</h1>
                <ul class="space-y-2">
                    <li><a href="../index.html"
                            class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">Home</a></li>
                    <li><a href="../index.html#About-Us"
                            class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">About Us</a></li>
                    <li><a href="../index.html#Our-Services"
                            class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">Our Services</a>
                    </li>
                    <li><a href="../src/contact-us.php"
                            class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">Contact
                            Us</a></li>
                </ul>
            </div>

            <!-- Social Links Section (Replacing Services) -->
            <div class="social-footer">
                <h1 class="text-lg font-semibold mb-3">Connect With Us</h1>
                <div class="flex justify-center md:justify-start space-x-4 mt-2">
                    <a href="#" class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 dark:text-gray-300 hover:text-teal-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div
            class="border-t border-gray-700 dark:border-gray-800 mt-8 pt-5 text-center text-sm text-gray-500 dark:text-gray-400">
            © 2025 Pocket Accts. All Rights Reserved.
        </div>
    </footer>

    <script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    const themeToggle = document.getElementById('theme-toggle');
    const mobileThemeToggle = document.getElementById('theme-toggle-mobile'); // Changed from 'mobile-theme-toggle'
    const htmlElement = document.documentElement;
    
    // Get icons from both toggles
    const desktopSunIcon = themeToggle.querySelector('.sun');
    const desktopMoonIcon = themeToggle.querySelector('.moon');
    const mobileSunIcon = mobileThemeToggle.querySelector('.sun');
    const mobileMoonIcon = mobileThemeToggle.querySelector('.moon');

    // Initialize theme
    if (localStorage.getItem('theme') === 'dark') {
        htmlElement.classList.add('dark');
        desktopSunIcon.classList.add('hidden');
        desktopMoonIcon.classList.remove('hidden');
        mobileSunIcon.classList.add('hidden');
        mobileMoonIcon.classList.remove('hidden');
    }

    function toggleTheme() {
        htmlElement.classList.toggle('dark');
        if (htmlElement.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
            // Update both toggles
            desktopSunIcon.classList.add('hidden');
            desktopMoonIcon.classList.remove('hidden');
            mobileSunIcon.classList.add('hidden');
            mobileMoonIcon.classList.remove('hidden');
        } else {
            localStorage.setItem('theme', 'light');
            // Update both toggles
            desktopSunIcon.classList.remove('hidden');
            desktopMoonIcon.classList.add('hidden');
            mobileSunIcon.classList.remove('hidden');
            mobileMoonIcon.classList.add('hidden');
        }
    }

    themeToggle.addEventListener('click', toggleTheme);
    mobileThemeToggle.addEventListener('click', toggleTheme);
</script>
</body>

</html>