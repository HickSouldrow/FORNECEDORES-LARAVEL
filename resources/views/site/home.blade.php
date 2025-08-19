<!DOCTYPE html>
<html lang="pt-br">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do Aluno - AlunoMais</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" defer></script>
</head>
<body class="bg-stone-950 text-stone-100 font-sans">

<!-- Header -->
<header class="bg-stone-950 border-b-2 border-red-700 sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('site.home') }}" class="flex items-center gap-3">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-700 font-bold text-xl">Portal do Aluno</span>
        </a>
        <nav>
            <ul class="flex gap-8 text-stone-300 font-medium">
                <li><a href="{{ route('site.home') }}" class="text-red-500 hover:text-red-400 transition-colors">Início</a></li>
                <li><a href="{{ route('site.sobre') }}" class="text-red-500 hover:text-red-400 transition-colors">Sobre</a></li>
                <li><a href="{{ route('site.contato') }}" class="text-red-500 hover:text-red-400 transition-colors">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main -->
<main class="bg-stone-950 text-stone-200 min-h-screen py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <section class="mb-16">
            <h1 class="text-5xl font-bold mb-6 text-red-500">Bem-vindo ao Portal do Aluno</h1>
            <p class="text-stone-400 max-w-3xl mx-auto leading-relaxed">
                Nosso site oferece cursos de qualidade, infraestrutura moderna e professores qualificados, 
                preparando você para o mercado de trabalho e para desafios acadêmicos.
            </p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-stone-900 p-8 rounded-xl shadow-lg hover:shadow-red-700/40 transition-shadow text-center">
                <i class="fas fa-laptop-code text-4xl text-red-500 mb-4"></i>
                <h2 class="text-2xl font-semibold text-red-400 mb-3">Cursos Técnicos</h2>
                <p class="text-stone-400">Diversas opções de cursos nas mais variadas áreas.</p>
            </div>
            <div class="bg-stone-900 p-8 rounded-xl shadow-lg hover:shadow-red-700/40 transition-shadow text-center">
                <i class="fas fa-school text-4xl text-red-500 mb-4"></i>
                <h2 class="text-2xl font-semibold text-red-400 mb-3">Infraestrutura</h2>
                <p class="text-stone-400">Laboratórios equipados e salas de aula modernas.</p>
            </div>
            <div class="bg-stone-900 p-8 rounded-xl shadow-lg hover:shadow-red-700/40 transition-shadow text-center">
                <i class="fas fa-users text-4xl text-red-500 mb-4"></i>
                <h2 class="text-2xl font-semibold text-red-400 mb-3">Atividades</h2>
                <p class="text-stone-400">Eventos, palestras e projetos para complementar sua formação.</p>
            </div>
        </section>
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
