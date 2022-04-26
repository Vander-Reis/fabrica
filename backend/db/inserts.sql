-- insert de materias 

insert into tb_materia (nome) values ('matematica'); 

-- insert de perguntas

--Questão 1
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 1 ) Em uma gráfica três impressoras imprimem 560 panfletos em 2 horas. Neste ritmo, duas impressoras imprimem 480 panfletos em, aproximadamente: ', 'A', 1);

--Questão 2
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 2 ) A soma das raízes da função f(x) = x² + 2x – 15 é:', 'B', 1);

--Questão 3
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 3 ) Um triangulo retângulo está inscrito em um círculo de centro A e raio igual a 5 cm como indica a figura abaixo. Sabendo que um dos catetos deste triângulo mede 8 cm, a área em azul da figura, em cm², é igual a: Considere π =3:', 'C', 1);

--Questão 4
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 4 ) Considere a sequência numérica A abaixo obedece a uma progressão aritmética. A soma do 20° e do 26° termo dessa PA é: A = {3, 7, 11, 15 ...}:', 'D', 1);

--Questão 5
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 5 ) Valdemar tem um terreno na forma de um trapézio. Um riacho, paralelo à estrada em que se situa, divide o terreno em duas partes, como mostra a figura a seguir. Ele cercou quase todo o limite externo do terreno, só falta o trecho X, cuja medida, em metros é: ', 'A', 1);

--Questão 6
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 6 ) Observando a entradas dos alunos na sala de aula, uma professora de matemática percebeu que cada estudante apertou a mão de seis meninas e oito meninos. O número de apertos de mão entre meninos e meninas foi cinco a menos do que os outros tipos de aperto de mão (menino e menino, menina e menina). Quantos estudantes foram observados pela professora?', 'B', 1);

--Questão 7
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 7 ) O professor de matemática pediu para que três alunos escrevessem qualquer fração com o numerador 7. As frações escritas foram 7/9 , 7/8 e 7/15. A soma da maior e menor fração deste conjunto é:', 'C', 1);

--Questão 8
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 8 ) Um reservatório de água tem o formato cilíndrico e capacidade de 2430m³ de água. Sabendo que a altura deste reservatório é de 10m, aumentando o diâmetro deste reservatório em 50%, o volume será de, aproximadamente: Considere π =3.:', 'D', 1);

--Questão 9
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 9 ) Em um depósito foram empilhadas caixas cúbicas como mostram a figura abaixo. Se cada caixa tem lado de 0,5m, o volume de todas as caixas juntas é: ', 'A', 1);

--Questão 10
insert into tb_pergunta (descricao, gabarito, id_materia) values ('Questão 10 ) Em uma sala de aula temos 8 meninos e 12 meninas. Ao escolher alguém aleatoriamente, qual a probabilidade do escolhido ser uma menina? ', 'B', 1);

-- insert de opções

-- Opçãoes para a questão 1
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '3h', 1);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '3,5h', 1);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '1,25h', 1);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '2,5h', 1);

-- opçãoes para a questão 2
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '-2', 2);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '8', 2);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '5', 2);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '3', 2);

-- opções para a questão 3 
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '75 cm²', 3);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '65 cm²', 3);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '51 cm²', 3);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '36 cm²', 3);

-- opções para a questão 4
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '182', 4);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '155', 4);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '123', 4);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '103', 4);

-- opções para a questão 5
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '15', 5);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '20', 5);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '36', 5);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '45', 5);

-- opções para a questão 6
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '56 estudantes', 6);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '35 estudantes', 6);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '25 estudantes', 6);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '23 estudantes', 6);

-- opções para a questão 7
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '161/120', 7);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '119/72', 7);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '56/45', 7);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '39/62', 7);

-- opções para a questão 7
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '7.850m³', 8);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '6.392m³', 8);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '5.467m³', 8);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '3.645m³', 8);

-- opções para a questão 9
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '3,5m³', 9);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '1,75m³', 9);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '1,25m³', 9);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '0,95m³', 9);

-- opções para a questão 10
insert into tb_resposta (letra, descricao, id_pergunta) values ('A', '60%', 10);
insert into tb_resposta (letra, descricao, id_pergunta) values ('B', '50%', 10);
insert into tb_resposta (letra, descricao, id_pergunta) values ('C', '40%', 10);
insert into tb_resposta (letra, descricao, id_pergunta) values ('D', '30%', 10);