
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VP College | Education for Excellence</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
        section {
            scroll-margin-top: 75px;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-blue-950 text-white sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                VP <span class="text-yellow-400">COLLEGE</span>
            </h1>

            <div class="hidden md:flex gap-7 font-medium">
                <a href="#home" class="hover:text-yellow-400">Home</a>
                <a href="#about" class="hover:text-yellow-400">About</a>
                <a href="#courses" class="hover:text-yellow-400">Courses</a>
                <a href="#departments" class="hover:text-yellow-400">Departments</a>
                <a href="#facilities" class="hover:text-yellow-400">Facilities</a>
                <a href="#admission" class="hover:text-yellow-400">Admission</a>
                <a href="#contact" class="hover:text-yellow-400">Contact</a>
            </div>

            <button id="menuBtn" class="md:hidden text-2xl">
                ☰
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden md:hidden px-6 pb-5 space-y-3">
            <a href="#home" class="block">Home</a>
            <a href="#about" class="block">About</a>
            <a href="#courses" class="block">Courses</a>
            <a href="#departments" class="block">Departments</a>
            <a href="#facilities" class="block">Facilities</a>
            <a href="#admission" class="block">Admission</a>
            <a href="#contact" class="block">Contact</a>
        </div>
    </nav>

    <!-- HOME -->
    <section id="home"
        class="min-h-[600px] flex items-center justify-center text-center text-white px-6"
        style="background: linear-gradient(rgba(0,20,60,.75),rgba(0,20,60,.75)),url('https://images.unsplash.com/photo-1562774053-701939374585?w=1600') center/cover;">

        <div>
            <p class="text-yellow-400 text-lg font-semibold mb-4">
                WELCOME TO VP COLLEGE
            </p>

            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Building Your Future <br>
                Through Education
            </h1>

            <p class="text-lg mb-8">
                Learn Today, Lead Tomorrow. Your Journey Starts Here.
            </p>

            <a href="#admission"
                class="bg-yellow-400 text-blue-950 px-8 py-3 rounded-lg font-bold hover:bg-yellow-300">
                Apply Now
            </a>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-20 px-6">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=900"
                class="rounded-xl shadow-xl w-full" alt="College students">

            <div>
                <h2 class="text-3xl font-bold text-blue-950 mb-5">
                    About VP College
                </h2>

                <p class="text-gray-600 leading-8 mb-5">
                    VP College is dedicated to providing quality education,
                    developing skills, and creating opportunities for students.
                    We believe in academic excellence, innovation and overall
                    personality development.
                </p>

                <p class="text-gray-600 leading-8">
                    Our mission is to empower students with knowledge,
                    confidence and skills to achieve success in life.
                </p>
            </div>
        </div>
    </section>

    <!-- COURSES -->
    <section id="courses" class="py-20 bg-blue-50 px-6">
        <div class="max-w-6xl mx-auto text-center">

            <h2 class="text-3xl font-bold text-blue-950 mb-3">
                Our Popular Courses
            </h2>

            <p class="text-gray-600 mb-12">
                Explore educational opportunities for your future.
            </p>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

                <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-xl font-bold mb-3">BCA</h3>
                    <p class="text-gray-600">Bachelor of Computer Applications</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold mb-3">BBA</h3>
                    <p class="text-gray-600">Bachelor of Business Administration</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl">
                    <div class="text-4xl mb-4">🔬</div>
                    <h3 class="text-xl font-bold mb-3">B.Sc</h3>
                    <p class="text-gray-600">Bachelor of Science</p>
                </div>

            </div>
        </div>
    </section>

    <!-- DEPARTMENTS -->
    <section id="departments" class="py-20 px-6">
        <div class="max-w-6xl mx-auto text-center">

            <h2 class="text-3xl font-bold text-blue-950 mb-12">
                Our Departments
            </h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">

                <div class="p-7 bg-white shadow rounded-xl">
                    <div class="text-4xl mb-3">💻</div>
                    <h3 class="font-bold">Computer Science</h3>
                </div>

                <div class="p-7 bg-white shadow rounded-xl">
                    <div class="text-4xl mb-3">📈</div>
                    <h3 class="font-bold">Commerce</h3>
                </div>

                <div class="p-7 bg-white shadow rounded-xl">
                    <div class="text-4xl mb-3">🧪</div>
                    <h3 class="font-bold">Science</h3>
                </div>

                <div class="p-7 bg-white shadow rounded-xl">
                    <div class="text-4xl mb-3">📚</div>
                    <h3 class="font-bold">Arts</h3>
                </div>

            </div>
        </div>
    </section>

    <!-- FACILITIES -->
    <section id="facilities" class="py-20 bg-blue-50 px-6">
        <div class="max-w-6xl mx-auto text-center">

            <h2 class="text-3xl font-bold text-blue-950 mb-12">
                College Facilities
            </h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">

                <div class="bg-white p-7 rounded-xl shadow">
                    <div class="text-4xl mb-3">📖</div>
                    <h3 class="font-bold">Library</h3>
                    <p class="text-gray-600 mt-2">A learning and reading space.</p>
                </div>

                <div class="bg-white p-7 rounded-xl shadow">
                    <div class="text-4xl mb-3">🖥️</div>
                    <h3 class="font-bold">Computer Lab</h3>
                    <p class="text-gray-600 mt-2">Modern computer learning.</p>
                </div>

                <div class="bg-white p-7 rounded-xl shadow">
                    <div class="text-4xl mb-3">⚽</div>
                    <h3 class="font-bold">Sports</h3>
                    <p class="text-gray-600 mt-2">Sports and physical activities.</p>
                </div>

                <div class="bg-white p-7 rounded-xl shadow">
                    <div class="text-4xl mb-3">🚌</div>
                    <h3 class="font-bold">Transport</h3>
                    <p class="text-gray-600 mt-2">Convenient transport facilities.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ADMISSION -->
    <section id="admission" class="py-20 bg-blue-950 text-white text-center px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-5">
            Start Your Journey With VP College
        </h2>

        <p class="text-gray-300 mb-8">
            Take the first step towards a bright and successful future.
        </p>

        <a href="#contact"
            class="bg-yellow-400 text-blue-950 px-8 py-3 rounded-lg font-bold hover:bg-yellow-300">
            Enquire Now
        </a>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-20 px-6">
        <div class="max-w-4xl mx-auto">

            <h2 class="text-3xl font-bold text-blue-950 text-center mb-10">
                Contact Us
            </h2>

            <form class="bg-white shadow-xl rounded-xl p-8 space-y-5"
                onsubmit="event.preventDefault(); alert('Thank you! Your enquiry has been submitted.');">

                <input type="text" placeholder="Your Name"
                    required class="w-full border p-3 rounded-lg">

                <input type="email" placeholder="Your Email"
                    required class="w-full border p-3 rounded-lg">

                <input type="tel" placeholder="Your Phone Number"
                    required class="w-full border p-3 rounded-lg">

                <textarea placeholder="Your Message" rows="4"
                    class="w-full border p-3 rounded-lg"></textarea>

                <button type="submit"
                    class="bg-blue-950 text-white px-8 py-3 rounded-lg hover:bg-blue-800">
                    Send Message
                </button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-blue-950 text-white py-8 text-center">
        <h2 class="text-xl font-bold mb-3">VP COLLEGE</h2>

        <p class="text-gray-300">
            Education | Excellence | Empowerment
        </p>

        <p class="text-gray-400 mt-5 text-sm">
            © 2026 VP College. All Rights Reserved.
        </p>
    </footer>

    <!-- NAVBAR JAVASCRIPT -->
    <script>
        const menuBtn = document.getElementById("menuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        // Close mobile menu after clicking a link
        document.querySelectorAll("#mobileMenu a").forEach(link => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
            });
        });
    </script>

</body>
</html>
