<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Portal do Aluno</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" defer></script>
    <style>
        .creator-card {
            border-radius: 0.5rem;
            border-top: 4px solid #dc2626;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }
        @media(min-width: 768px) {
            .creator-card {
                flex-direction: row;
                align-items: center;
            }
        }
    </style>
</head>
<body class="bg-stone-950 text-white min-h-screen flex flex-col">

    <!-- HEADER -->
    <header class="bg-stone-950 border-b-2 border-red-700 sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('site.home') }}" class="flex items-center gap-3">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-700 font-bold text-xl">Portal do Aluno</span>
            </a>
            <nav>
                <ul class="flex gap-8 text-stone-300 font-medium">
                    <li><a href="{{ route('site.home') }}" class="hover:text-red-400 transition-colors">Início</a></li>
                    <li><a href="{{ route('site.cursos') }}" class="hover:text-red-400 transition-colors">Cursos</a></li>
                    <li><a href="{{ route('site.sobre') }}" class="text-red-500 font-semibold transition-colors">Sobre</a></li>
                    <li><a href="{{ route('site.contato') }}" class="hover:text-red-400 transition-colors">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- MAIN -->
    <main class="container mx-auto px-6 py-12 max-w-4xl flex-grow">

        <h1 class="text-4xl font-bold text-red-500 mb-10 text-center">Sobre o Portal do Aluno</h1>

        <section class="bg-stone-900 p-8 rounded-xl mb-12 text-stone-300 leading-relaxed text-center">
            <p class="mb-6 text-lg">
                O Portal do Aluno é uma plataforma dedicada a facilitar o acesso a informações, cursos e conteúdos educacionais para estudantes de todo o Brasil. Nosso objetivo é oferecer uma experiência intuitiva, atualizada e focada nas necessidades do aluno moderno.
            </p>
            <p class="mb-6 text-lg">
                Criado para ser uma ferramenta simples, eficiente e segura, o Portal visa aproximar estudantes e educadores, promovendo o conhecimento e o desenvolvimento pessoal.
            </p>
        </section>

        <h2 class="text-3xl font-semibold text-red-500 mb-6 text-center">Desenvolvedor do Site</h2>
        <div class="creator-card text-stone-100  bg-stone-900 max-w-3xl mx-auto">
            <div class="flex-shrink-0">
                <img src="https://github.com/HickSouldrow.png" alt="HickSouldrow" class="w-32 h-32 rounded-full border-4 border-red-600 mx-auto md:mx-0">
            </div>
            <div>
                <h3 class="text-2xl font-bold mb-2">HickSouldrow</h3>
                <p class="mb-4 text-stone-300">
                    Desenvolvedor apaixonado por tecnologia e educação, dedicado a criar soluções digitais que conectam pessoas e facilitam o aprendizado.
                </p>
                <div class="flex space-x-4 justify-center md:justify-start text-red-500">
                    <a href="https://github.com/HickSouldrow" target="_blank" aria-label="GitHub HickSouldrow" class="hover:text-red-700 transition">
                        <i class="fab fa-github text-3xl"></i>
                    </a>
                </div>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="mt-16 py-10 border-t border-stone-800 bg-stone-900 text-center text-stone-500 text-sm">
        <div class="container mx-auto px-6 max-w-6xl grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <h4 class="text-lg font-bold mb-4 text-red-500">Portal do Aluno</h4>
                <p class="mb-2">Rua das Notas Boas, 165 C</p>
                <p class="mb-2">São Paulo, SP</p>
                <p class="mb-2">CEP: 00000-000</p>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4 text-red-500">Contato</h4>
                <p class="mb-2"><i class="fas fa-phone-alt mr-2"></i> (11) 99999-9999</p>
                <p class="mb-2"><i class="fas fa-envelope mr-2"></i> contato@portaldoaluno.com</p>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4 text-red-500">Horário</h4>
                <p class="mb-2">Segunda a Sexta</p>
                <p class="mb-2">Das 09h às 18h</p>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4 text-red-500">Redes Sociais</h4>
                <div class="flex justify-center md:justify-start space-x-4 px-16">
                    <a href="#" class="text-stone-500 hover:text-red-500 transition"><i class="fab fa-facebook-f text-xl"></i></a>
                    <a href="#" class="text-stone-500 hover:text-red-500 transition"><i class="fab fa-instagram text-xl"></i></a>
                    <a href="#" class="text-stone-500 hover:text-red-500 transition"><i class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="text-stone-500 hover:text-red-500 transition"><i class="fab fa-youtube text-xl"></i></a>
                </div>
            </div>
        </div>
        <div class="border-t border-stone-800 pt-6 text-center text-stone-500">
            <p>&copy; 2025 Portal do Aluno. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>
