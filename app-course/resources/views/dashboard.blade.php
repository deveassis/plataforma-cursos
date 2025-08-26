<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Cursos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white h-auto p-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vamos retomar?") }}
                </div>
                <div class="" id="cursos">
                    @php
                    $cursos = [
                        ['Programação com Python', 'Aprenda Python do zero, criando scripts, automações, aplicações web e análise de dados.', 'images/curso.jpg', '#'],
                        ['Java para Iniciantes', 'Domine os conceitos básicos de Java e orientação a objetos para desenvolver aplicações robustas.', 'images/curso.jpg', '#'],
                        ['Laravel Avançado', 'Aprofunde seus conhecimentos em Laravel, criando APIs, sistemas complexos e utilizando boas práticas.', 'images/curso.jpg', '#'],
                        ['React JS', 'Construa interfaces dinâmicas e interativas usando React, componentes e gerenciamento de estado.', 'images/curso.jpg', '#'],
                        ['Node.js', 'Desenvolva aplicações backend escaláveis com Node.js, Express e integração com bancos de dados.', 'images/curso.jpg', '#'],
                        ['Docker', 'Aprenda a containerizar aplicações, criar imagens, volumes e orquestração básica com Docker.', 'images/curso.jpg', '#'],
                        ['Kubernetes', 'Gerencie containers em produção com Kubernetes, deploys, serviços e escalabilidade automática.', 'images/curso.jpg', '#'],
                        ['SQL e Bancos de Dados', 'Aprenda a criar, consultar e otimizar bancos de dados relacionais usando SQL.', 'images/curso.jpg', '#'],
                        ['PHP para Web', 'Domine PHP para criar sites e sistemas web modernos, seguindo boas práticas de desenvolvimento.', 'images/curso.jpg', '#'],
                        ['HTML e CSS', 'Crie páginas web bonitas e responsivas usando HTML5, CSS3 e boas práticas de design.', 'images/curso.jpg', '#'],
                        ['JavaScript Avançado', 'Aprenda técnicas avançadas de JavaScript, ES6+, DOM, eventos e APIs modernas.', 'images/curso.jpg', '#'],
                        ['Git e GitHub', 'Controle versões de projetos, trabalhe colaborativamente e organize seu código com Git e GitHub.', 'images/curso.jpg', '#'],
                        ['CI/CD', 'Automatize deploys e integração contínua usando ferramentas modernas de CI/CD.', 'images/curso.jpg', '#'],
                        ['Testes Automatizados', 'Aprenda a escrever testes unitários e de integração para garantir a qualidade do código.', 'images/curso.jpg', '#'],
                        ['Segurança em Aplicações', 'Conheça boas práticas para proteger sistemas web, prevenção de ataques e gestão de dados.', 'images/curso.jpg', '#'],
                    ];
                    @endphp
                    
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 mx-4 gap-6">
                        @foreach($cursos as $index => $curso)
                            <x-card-curso 
                                :id="$index + 1" 
                                :title="$curso[0]" 
                                :description="$curso[1]" 
                                :image="$curso[2]" 
                                :link="$curso[3]" 
                            />
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
