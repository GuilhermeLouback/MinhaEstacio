<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Estacio</title>
</head>
<body>
<script src="validacao.js"></script>
    <header class = "cabecalho">
        <h1>Minha Estácio</h1>
        <h4>Sistema de Gerenciamento</h4>
    </header>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Disciplinas</h3>
                        <ul>
                            <li>
                                <a href="minhaestacio.php?dir=disciplinas&file=nome">
                                    Nome da Disciplina
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=disciplinas&file=carga_horaria">
                                    Carga Horaria
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=disciplinas&file=avaliacoes">
                                    Avaliações
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=disciplinas&file=descricao">
                                    Descrição
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3>Horário</h3>
                        <ul>
                            <li>
                                <a href="minhaestacio.php?dir=horario&file=dia_semana">
                                    Dias da Semana
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=horario&file=hora_inicio_fim">
                                    Hora de Início e Fim
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=horario&file=disciplina">
                                    Disciplinas
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=horario&file=professor">
                                    Professor
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=horario&file=semestre">
                                    Semestre
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>Professor</h3>
                        <ul>
                            <li>
                                <a href="minhaestacio.php?dir=professor&file=conhecimento">
                                    Conhecimento
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=professor&file=nome">
                                    Nome do Professor
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=professor&file=rede_social">
                                    Rede Social
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>Classificação</h3>
                        <ul>
                            <li>
                                <a href="minhaestacio.php?dir=classificacao&file=horario">
                                    Horario
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=classificacao&file=nota">
                                    Nota
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Nota</h3>
                        <ul>
                            <li>
                                <a href="minhaestacio.php?dir=nota&file=horario">
                                    Horário
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=nota&file=valor">
                                    Valor
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=nota&file=ordem">
                                    Ordem
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo verde-escuro">
                        <h3>Semestre</h3>
                        <ul>
                            <li>
                                <a href="minhaestacio.php?dir=semestre&file=ano">
                                    Ano
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=semestre&file=mes_inicio_final">
                                    Mês de Iinício e Fim
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo azul-escuro">
                        <h3>Aluno</h3>
                        <ul>
                            <li>
                                <a href="minhaestacio.php?dir=aluno&file=nome">
                                    Nome do Aluno
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=aluno&file=matricula">
                                    Matricula do Aluno
                                </a>
                            </li>
                            <li>
                                <a href="minhaestacio.php?dir=aluno&file=curso">
                                    Curso do Aluno
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </main>
    <footer class="rodape">
       
        <?= 
        
        date('');
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        echo strftime('%A, %d de %B de %Y', strtotime('today'));
        ?>
    </footer>
</body>
</html>