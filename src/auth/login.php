<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .input-field:focus+label,
        .input-field:not(:placeholder-shown)+label {
            transform: translateY(-1.5rem) scale(0.85);
            color: #667eea;
        }

        .shake {
            animation: shake 0.5s;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            20%,
            60% {
                transform: translateX(-5px);
            }

            40%,
            80% {
                transform: translateX(5px);
            }
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center gradient-bg p-4">
    <div class="w-full max-w-md bg-white rounded-xl shadow-2xl overflow-hidden">
        <div class="py-8 px-10">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Welcome Back</h1>
                <p class="text-gray-500 mt-2">Sign in to access your account</p>
            </div>

            <form id="loginForm" class="space-y-6">
                <div class="relative">
                    <input
                        type="email"
                        id="email"
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 peer"
                        placeholder=" "
                        required>
                    <label for="email" class="absolute left-4 top-3 text-gray-500 pointer-events-none transition-all duration-200 peer-focus:text-purple-600">Email Address</label>
                    <div class="absolute right-3 top-3 text-gray-400">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>

                <div class="relative">
                    <input
                        type="password"
                        id="password"
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 peer"
                        placeholder=" "
                        required>
                    <label for="password" class="absolute left-4 top-3 text-gray-500 pointer-events-none transition-all duration-200 peer-focus:text-purple-600">Password</label>
                    <div class="absolute right-3 top-3 flex items-center space-x-2">
                        <button type="button" id="togglePassword" class="text-gray-400 hover:text-purple-600">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-purple-600 hover:text-purple-800">Forgot password?</a>
                </div>

                <button
                    type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">
                    Sign In
                </button>

                <div class="text-center">
                    <p class="text-gray-500 text-sm">Don't have an account?
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');

            // Toggle password visibility
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
            });

            // Form validation
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                // Simple validation
                if (!email || !password) {
                    shakeForm();
                    return;
                }

                // Here you would typically send the data to a server
                console.log('Login attempt with:', {
                    email,
                    password
                });

                // Simulate successful login
                alert('Login successful! Redirecting...');
                // window.location.href = '/dashboard';
            });

            function shakeForm() {
                loginForm.classList.add('shake');
                setTimeout(() => {
                    loginForm.classList.remove('shake');
                }, 500);
            }

            // Floating label effect
            const inputFields = document.querySelectorAll('.input-field');
            inputFields.forEach(input => {
                input.addEventListener('focus', () => {
                    const label = input.nextElementSibling;
                    label.classList.add('text-purple-600');
                });

                input.addEventListener('blur', () => {
                    if (!input.value) {
                        const label = input.nextElementSibling;
                        label.classList.remove('text-purple-600');
                    }
                });
            });
        });
    </script>
</body>

</html>